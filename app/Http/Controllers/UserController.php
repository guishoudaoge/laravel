<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    /**
     * 显示指定用户属性
     *
     * @param  int $id
     * @return Response
     * @translator laravelacademy.org
     */
    public function showProfile($id)
    {

        $user = Redis::get('user:profile:' . $id);
        return view('user.profile', ['user' => $user]);
    }
}
