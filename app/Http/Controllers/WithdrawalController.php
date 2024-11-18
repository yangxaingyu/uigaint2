<?php

namespace App\Http\Controllers;

use App\Models\Coin;
use App\Models\Wallet;
use App\Models\Withdraw;
use App\Services\WalletService;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;


class WithdrawalController extends Controller
{
    protected $walletService;

    public function __construct()
    {
        $this->walletService = new WalletService();
    }

    public function withdrawal()
    {
        $coins = $this->getCoin();
        return view('withdrawal', ['coins' => $coins]);
    }

    public function create(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'coin_id' => 'required|integer',
            'network_id' => 'required|integer',
            'amount' => 'required|numeric|min:0.01',
            'address' => 'required'
        ]);

        if ($validator->fails()) {
            return $this->error($validator->errors()->first());
        }

        $userId = 1;
        $coinId = $data['coin_id'];
        $networkId = $data['network_id'];
        $amount = $data['amount'];
        $address = $data['address'];

        $wallet = Wallet::getUserWallet($userId, $coinId);
        if ($wallet->balance < abs($amount)) {
            return $this->error("Insufficient balance");
        }

        Withdraw::create([
            'user_id' => $userId,
            'coin_id' => $coinId,
            'network_id' => $networkId,
            'address' => $address,
            'amount' => $amount,
            'status' => 0,
            'remarks' => '',
            'created_at' => time(),
            'updated_at' => time()
        ]);

        return $this->success('Withdrawal successful');
    }

    public function getNetWork(Request $request)
    {
        $data = $request->all();
        $coinId = $data['coinId'];
        $coin = Coin::find($coinId)->toArray();
        $networks = Coin::find($coinId)->networks->toArray();
        $newNetWorks = [];
        foreach ($networks as $key => $network) {
            $newNetWorks[$key]['networkId'] = $network['id'];
            $newNetWorks[$key]['networkName'] = $coin['name'].'（'.$network['name'].'）';
        }
        return \response()->json($newNetWorks);
    }

    public function getCoin(): ?array
    {
        $coins = Coin::query()
            ->select('id', 'name', 'icon')
            ->orderBy('name', 'ASC')
            ->get();
        return $coins ? $coins->toArray() : null;
    }

}
