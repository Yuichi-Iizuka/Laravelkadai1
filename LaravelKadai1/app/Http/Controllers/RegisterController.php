<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 登録画面に遷移するコントローラー
class RegisterController extends Controller
{
    public function index()
    {
        return view('register.register');
    }
}
