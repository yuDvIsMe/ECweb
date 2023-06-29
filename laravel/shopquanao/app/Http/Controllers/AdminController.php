<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

session_start();


class AdminController extends Controller
{
    public function index(){
        return view('admin-login');
    }

    public function show_dashboard(){
        return view('admin.dashboard');
    }


    public function dashboard(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = $request->admin_password;

        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();

        if($result){
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->admin_id);
            return Redirect::to('/admin/dashboard');
        }else{
            Session::put('message', 'Email hoặc mật khẩu sai! Vui lòng nhập lại');
            return Redirect::to('/admin');
        }
        return view('admin.dashboard');

    }

    public function logout(){
        Session::put('admin_name', null);
        Session::put('admin_id', null);
        return Redirect::to('/admin');
    }
}
