<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Admin;//user model can kiem tra
use Auth; //use thư viện auth
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Database\Eloquent\Collection;
use Session;
use Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;



class LoginController extends Controller
{



    public function getLogin()
    {
        return view('admin/auth/login');//return ra trang login để đăng nhập
    }


    public function postLogin(Request $request)
    {
        $arr = [
            'email' => $request->email,
            'password' => $request->password,
        ];


        if (Auth::guard('admin')->attempt($arr)) {

            return redirect('admin/dashboard');


        } else {
            echo "<script type='text/javascript'>alert('Email hoặc mật khẩu không chính xác. Vui lòng đăng nhập lại');</script>";

        }
    }


}
