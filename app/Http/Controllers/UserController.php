<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use App\Models\MiningPool;
use App\Models\Stake;
use App\Models\User;
use App\Models\Wallet;
use App\Models\Withdraw;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function user() {
        $user_id = session('user_id');
        if (empty($user_id)){
            return redirect()->back()->with('error', ['message' => 'User none ']);
        }
//        dd($user_id);
        $user=User::where('id',$user_id)->first();
        $data = User::where('id', $user_id)->first();
        $balance=Wallet::with('coin')->where('user_id',$user_id)->get()->toArray();
        foreach ($balance as &$balan){
            $balan['coin_id']=$balan['coin']['name'];
            unset($balan['coin']);
        }
//        dd($balance);
        $stake = Stake::where('user_id', $user_id)->get();
        $miningPools = MiningPool::whereIn('id', $stake->pluck('mining_pool_id'))->pluck('name', 'id')->toArray();
        $coins = Coin::whereIn('id', $stake->pluck('coin_id'))->pluck('name', 'id')->toArray();
        $stake = $stake->map(function ($s) use ($miningPools, $coins) {
            $s->mining_pool_id = $miningPools[$s->mining_pool_id] ?? $s->mining_pool_id;
            $s->coin_id = $coins[$s->coin_id] ?? $s->coin_id;
            return $s;
        });
        return view('user', ['data' => $data,'user'=>$user,'balance'=>$balance,'stake'=>$stake]);
    }




}
