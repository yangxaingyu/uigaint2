<?php

namespace App\Http\Controllers;

//use http\Env\Response;

use App\Models\Article;
use App\Models\Config;

class AccountController extends Controller
{
        public function pages(Article  $article){
            $page=$article;
            $res=$page;
            $data=Config::where('title','客服邮箱')->first();

            return view('page',['res'=>$res,'data'=>$data]);
        }


}
