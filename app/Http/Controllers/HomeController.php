<?php

namespace App\Http\Controllers;

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
        $miningPools = $this->miningPoolService->getMiningPools(1);
        return view('home', ['miningPools' => $miningPools]);
    }

    public function createStake(Request $request)
    {
        $userId = $this->getUserId();

        if (!$userId) {
            return $this->success('Please log in first');
        }

        $data = $request->all();

        $validator = Validator::make($data, [
            'mining_pool_id' => 'required|integer',
            'stack_coin_id' => 'required|integer',
            'stack_amount' => 'required|numeric|min:0.01',
        ]);

        if ($validator->fails()) {
            return $this->error($validator->errors()->first());
        }

        $mining_pool_id = $data['mining_pool_id'];
        $stack_coin_id = $data['stack_coin_id'];
        $stack_amount = $data['stack_amount'];

        try {
            $this->stakeService->createStake($userId, $mining_pool_id, $stack_coin_id, $stack_amount);
        } catch (\Exception $e) {
            $msg = $e->getMessage();
            return $this->error($msg);
        }

        return $this->success('Pledge operation successful');
    }
}

