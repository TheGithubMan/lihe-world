<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

//引入控制类
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //后台首页
    public function index() {
	echo '后台首页';
    }
    
}
