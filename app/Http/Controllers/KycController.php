<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KycController
{

    public function kyc(){
        return view('kyc-process');
    }
    public function kyc2( Request  $request){
//        $data=$request->post();
//        dd($data);
        return view('kyc-process-step2');
    }
    public function kyc3(){
        return view('kyc-process-step3');
    }
    public function index(){

    }


}
