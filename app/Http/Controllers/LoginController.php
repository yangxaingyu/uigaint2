<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\WalletService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    //
    //登入页面
    protected $walletService;

    public function __construct()
    {
        $this->walletService = new WalletService();
    }
    public function login(){
//        $user_id=session('user_id');
//        if (empty($user_id)){
//            return redirect()->back()->with(['message' => 'Already logged in']);
//        }
        return view('signin');
    }
    public function dosignin(Request  $request){
        $email = $request->post('email');
        $password = $request->post('password');
        $userinfo=User::where('email',$email)->first();
        if (empty($userinfo)){
            return redirect()->back()->with('message', 'User not found!');
        }elseif ($userinfo['password'] !== md5($password)){

            return redirect()->back()->with(['message' => 'Password error']);
        }else{
            session(['user_id'=>$userinfo['id'],'email'=>$userinfo['email'],'images'=>$userinfo['images']]);
            return redirect('/');
        }
    }

    public function register(){
        return view('signup');
    }

    public function reg(Request  $request){
        $email=$request->post('email');
        $password=$request->post('password');
        $validator = Validator::make($request->all(), [
            'email'=>'required',
            'password'=>'required'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->with(['message' => 'required error']);
        }
        $password=md5($password);
        $images='/storage/images/KLpE7R5835.png';
        $data=[
            'email'=>$email,
            'password'=>$password,
            'kyc_status'=>0,
            'images'=>$images,
        ];
        $res=User::create($data);
        session(['user_id' => $res->id,'images'=>$images]);
        return redirect('/');
    }
    public function forgetpassword(){
        return view('forget-password');
    }
    public function uppwd(Request  $request){
        $data=$request->post();
        $user=session('user_id');
        if (empty($user)) {
            return redirect()->back()->with(['message' => 'user does not exist']);
        }
        $userinfo=User::where('id',$user)->first();

        if (md5($data['password'])!== $userinfo['password']){
            return redirect()->back()->with(['message' => 'password does not exist']);
        }
        $newpassword=md5($data['re_password']);
        $password=[
            'password'=>$newpassword
        ];
        $res=User::where('id',$user)->update($password);

        return redirect('/');
    }
//
//    public function details(){
//        return view('project-details');
//    }
    public function transfer(){

        return view('transfer');
    }


    public function delogin(){
        session()->flush();
        return redirect('/');
    }


}
