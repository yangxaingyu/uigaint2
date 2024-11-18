<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class KycController
{

    public function kyc(){
        return view('kyc-process');
    }

    public function kyc2( Request  $request){

        $country=$request->post('country');
        $kyc_type=$request->post('kyc_type');
        if (empty($country) || empty($kyc_type)) {
            return redirect()->back()->with('error', ['message' => 'Password error']);
        }
        $user_id=session('user_id');
        $data=[
            'country'=>$country,
            'kyc_type'=>$kyc_type,
        ];
        $res=User::where('id',$user_id)->update($data);
        return view('kyc-process-step2');
    }
    public function storeFile($file, $directory)
    {
        $filename = $file->getClientOriginalName(); // Get the original file name
        Storage::disk('public')->makeDirectory($directory); // Ensure the directory exists
        $path = $file->storeAs($directory, $filename, 'public'); // Store the file using storeAs()
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
            return response()->json(['errors' => $val->errors()]);
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
            return redirect()->back()->with('error', ['message' => 'required error']);
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
            return redirect('/')->with('error', ['message' => 'Authentication success']);
        }else{
            return redirect()->back()->with('error', ['message' => 'Authentication failed']);
        }
    }





}
