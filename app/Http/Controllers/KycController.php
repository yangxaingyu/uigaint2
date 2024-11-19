<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class KycController
{

    public function kyc(){
        $user_id=session('user_id');
        if (empty($user_id)){
            return redirect()->back()->with(['message' => 'Please log in first']);
        }
        return view('kyc-process');
    }

    public function kyc2( Request  $request){
        $user_id=session('user_id');
        if (empty($user_id)){
            return redirect()->back()->with(['message' => 'Please log in first']);
        }
        $country=$request->post('country');
        $kyc_type=$request->post('kyc_type');
        if (empty($country) || empty($kyc_type)) {
            return redirect()->back()->with(['message' => 'country kyc_type error']);
        }
        $data=[
            'country'=>$country,
            'kyc_type'=>$kyc_type,
        ];
        User::where('id',$user_id)->update($data);
        return view('kyc-process-step2');
    }
    public function storeFile($file, $directory)
    {
        $filename = $file->getClientOriginalName();
        Storage::disk('public')->makeDirectory($directory);
        $path = $file->storeAs($directory, $filename, 'public');
        return "/storage/$directory/$filename";
    }
    public function kyc3(Request  $request){
        $da=$request->all();
        $user_id=session('user_id');
        $front=$da['front'];
        $back=$da['back'];
        $nim=$da['nim'];
        $val=Validator::make($request->all(),[
            'front'=>'file|required',
            'back'=>'file|required',
            'nim'=>'required'
        ]);
        if ($val->fails()) {
            return redirect()->back()->with('error', ['message' => $val->errors()]);
        }
        $directoryPath = 'kyc';
        $frontUrl = $this->storeFile($front, $directoryPath);
        $backUrl = $this->storeFile($back, $directoryPath);
        $data=[
            'front'=>$frontUrl,
            'back'=>$backUrl,
            'nim'=>$nim
        ];
        $res=User::where('id',$user_id)->update($data);
        return view('kyc-process-step3');
    }
    public function kyccert(Request  $request){
        if (empty($user_id)){
            return redirect()->back()->with('error', ['message' => 'Please log in first']);
        }
        $data=$request->post();
        $user_id=session('user_id');
        $validator=Validator::make($request->all(),[
            'first_name'=>'required',
            'last_name'=>'required',
            'post_code'=>'required',
            'state'=>'required',
            'address_1'=>'required',
            'address_2'=>'required',
            'city'=>'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with(['message' => 'required error']);
        }
        $data=[
            'first_name'=>$data['first_name'],
            'last_name'=>$data['last_name'],
            'post_code'=>$data['post_code'],
            'state'=>$data['state'],
            'address_1'=>$data['address_1'],
            'address_2'=>$data['address_2'],
            'city'=>$data['city'],
            'kyc_status'=>1
        ];
        $res=User::where('id',$user_id)->update($data);
        if($res){
            return redirect()->back()->with(['message' => 'Authentication success']);
        }else{
            return redirect()->back()->with(['message' => 'Authentication failed']);
        }
    }





}
