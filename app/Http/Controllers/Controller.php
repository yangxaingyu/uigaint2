<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * 返回数据
     * @param $msg string 提示信息
     * @param $data array|string|null 返回数据
     * @param $code int 状态码
     * @return \Illuminate\Http\JsonResponse 返回json数据
     */
    public function result(string $msg, $data, int $code)
    {
        return response()->json([
            'msg' => $msg,
            'data' => $data,
            'code' => $code
        ]);
    }

    /**
     * 成功返回
     * @param $msg string 提示信息
     * @param $data array|string|null 返回数据
     * @param $code int 状态码
     * @return \Illuminate\Http\JsonResponse 返回json数据
     */
    public function success(string $msg, $data = null, int $code = 200)
    {
        return response()->json([
            'msg' => $msg,
            'data' => $data,
            'code' => $code
        ]);
    }

    /**
     * 失败返回
     * @param $msg string 提示信息
     * @param $data array|string|null|void 返回数据
     * @param $code int 状态码
     * @return \Illuminate\Http\JsonResponse 返回json数据
     */
    public function error(string $msg, $data = null, int $code = 500)
    {
        return response()->json([
            'msg' => $msg,
            'data' => $data,
            'code' => $code
        ]);
    }
}
