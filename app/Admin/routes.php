<?php

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');

    $router->resource('addresses', AddressController::class);
    $router->resource('coins', CoinController::class);
    $router->resource('users', UserController::class);
    $router->resource('networks', NetworkController::class);
    $router->resource('wallets', WalletController::class);

    $router->resource('deposits', DepositController::class);
    $router->resource('withdraws', WithdrawController::class);

    $router->resource('mining-pools', MiningPoolController::class);
    $router->resource('mining-pool-coins', MiningPoolCoinController::class);

    $router->resource('stakes', StakeController::class);
    $router->resource('rewards', RewardController::class);

    $router->resource('money-logs', MoneyLogController::class);

    $router->resource('articles', ArticleController::class);
    $router->resource('configs', ConfigController::class);
});
