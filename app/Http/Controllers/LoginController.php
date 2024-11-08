<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //



    public function login(){
        return view('signin');
    }



    public function register(){
        return view('signup');
    }


    public function forgetpassword(){
        return view('forget-password');
    }

    public function details(){
        return view('project-details');
    }
    public function kyc(){
        return view('kyc-process');
    }
    public function kyc2(){
        return view('kyc-process-step2');
    }
    public function kyc3(){
        return view('kyc-process-step3');
    }
    public function deposit(){
        $data = [[
                'currency' => 'USD',
                'images' => '/storage/images/coinbase.png',
                'networks' => [
                    'Ethereum',
                    'Bitcoin',
                    'Litecoin',
                ],], [
                'currency' => 'EUR',
                'images' => '/storage/images/fcfda5844dcb17d3416221e202dd1266.png',
                'networks' => [
                    'Ethereum',
                    'Ripple',
                ],], [
                'currency' => 'GBP',
                'images' => '/storage/images/explore-image.png',
                'networks' => [
                    'Bitcoin',
                    'Bitcoin Cash',
                    'Ethereum',
                ],],];
        return view('deposit', ['data' => $data]);

    }
    public function transfer(){

        return view('transfer');
    }
}
