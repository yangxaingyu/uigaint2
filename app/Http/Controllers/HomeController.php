<?php

namespace App\Http\Controllers;

use App\Models\MiningPoolCoin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    private $stakeService;
    private $miningPoolService;

    public function __construct()
    {
        $this->stakeService = app('App\Services\StakeService');
        $this->miningPoolService = app('App\Services\MiningPoolService');
    }


    public function index()
    {
        $miningPools = $this->miningPoolService->getMiningPools(session('user_id'));
        return view('home', ['miningPools' => $miningPools]);
    }

    public function createStake(Request $request)
    {
        if (!session('user_id')) {
            return $this->success('Please log in first');
        }

        $data = $request->all();

        $mining_pool_coin = MiningPoolCoin::find($data['stack_coin_id'])->toArray();

        if ($mining_pool_coin['min_stake_amount']) {
            $min_string = "|min:".$mining_pool_coin['min_stake_amount'];
        }

        if ($mining_pool_coin['max_stake_amount']) {
            $max_string = "|max:".$mining_pool_coin['max_stake_amount'];
        }

        $validator = Validator::make($data, [
            'mining_pool_id' => 'required|integer',
            'stack_coin_id' => 'required|integer',
            'stack_amount' => 'required|numeric'.$min_string.$max_string,
        ]);

        if ($validator->fails()) {
            return $this->error($validator->errors()->first());
        }

        $mining_pool_id = $data['mining_pool_id'];
        $stack_coin_id = $data['stack_coin_id'];
        $stack_amount = $data['stack_amount'];

        try {
            $this->stakeService->createStake(session('user_id'), $mining_pool_id, $stack_coin_id, $stack_amount);
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            return $this->error($msg);
        }

        return $this->success('Pledge operation successful');
    }
}

