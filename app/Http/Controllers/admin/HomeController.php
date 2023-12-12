<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;


//Dashboard
class HomeController extends Controller
{
    public function index()
    {
        if (session()->has('username') && session()->has('role')) {
            // Sesi tidak kosong
            // return "Sesi tidak kosong: " . session('role');
            $data = array(
                'title' => 'admin',
                'content' => 'adminn/dashboard/index'
            );
            return view('adminn.layouts.wrapper', $data);
        } else {
            // Sesi kosong
            return redirect(route("login.form"));
        }

       
    }





   
}
