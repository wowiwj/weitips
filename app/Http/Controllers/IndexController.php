<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * SPA 页面的入口
     * @return Factory|\Illuminate\View\View
     * @author wangju 2019-06-28 15:26
     */
    public function index()
    {
        return view('index');
    }
}
