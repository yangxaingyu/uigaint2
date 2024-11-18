<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Coin;
use App\Models\Deposit;
use App\Models\Network;
use App\Models\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DepositController
{
    public function deposit(){
        $coins = Coin::with('networks')->get();
        $result = [];

        foreach ($coins as $coin) {
            $name = $coin->name;
            $coin_id = $coin->id;
            $icon = $coin->icon;

            $networksArray = [];
            $addressesArray = [];

            // 获取网络信息
            if ($coin->networks->isNotEmpty()) {
                foreach ($coin->networks as $network) {
                    $network_id = $network->id;
                    $networkName = $network->name;

                    // 获取每个网络对应的地址
                    $address_name = Address::where('coin_id', $coin_id)
                        ->where('network_id', $network_id)
                        ->pluck('address')
                        ->first();

                    // 将网络名称和地址加入到相应的数组中
                    $networksArray[] = $networkName;
                    $addressesArray[$networkName] = $address_name;  // 使用网络名称作为键
                }
            } else {
                $networksArray = ['No networks available'];
                $addressesArray = ['No networks available' => ''];
            }
            $result[] = [
                'name' => $name,
                'icon' => $icon,
                'networks' => $networksArray,
                'addresses' => $addressesArray
            ];
        }

       return view('deposit',['data'=>$result]);
    }

    public function depsub(Request  $request){
        $res=$request->except('_token');
        $user_id=session('user_id');
        $coin_id = Coin::where('name', $res['coid_id'])->pluck('id')->first();
        $network_id = Network::where('name', $res['network_id'])->pluck('id')->first();
        $amount=$res['amount'];
        $status=0;
        $address_id=Address::where('coin_id',$coin_id)->where('network_id',$network_id) ->pluck('id')->first();
        $data=[
            'user_id'=>$user_id,
            'coin_id'=>$coin_id,
            'network_id'=>$network_id,
            'amount'=>$amount,
            'status'=>$status,
            'address_id'=>$address_id
        ];
//        dd($address_id);
        $r=Deposit::create($data);
        return redirect('/');
    }





}

