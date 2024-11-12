<?php

namespace App\Http\Controllers;

//use http\Env\Response;

class AccountController extends Controller
{
    public function withdrawal()
    {
        return view('withdrawal', [
            'currencies' => [
                ['id' => 1, 'name' => "USDT", 'icon' => 'usdt.png'],
                ['id' => 2, 'name' => "BTC", 'icon' => 'btc.png'],
                ['id' => 3, 'name' => "ETH", 'icon' => 'eth.png'],
                ['id' => 4, 'name' => "SUI", 'icon' => 'sui.png'],
            ]
        ]);
    }

    public function getNetWork()
    {
        $result = array(
            ['id' => 1, 'name' => 'BTC (BTC)'],
            ['id' => 2, 'name' => 'BSC (BEP20)'],
            ['id' => 3, 'name' => 'LIGHTNING (LIGHTNING)'],
        );
        return \response()->json($result);
    }
}
