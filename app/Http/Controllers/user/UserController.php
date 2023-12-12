<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {

        $data = array(
            'title' => 'user',
            'content' => 'user/index',
            'menus'=>Menu::get(),
        );
        return view('user.layouts.wraper', $data);
    }
    public function about()
    {

        $data = array(
            'title' => 'user',
            'content' => 'user/about',
            'menus'=>Menu::get(),
        );
        return view('user.layouts.wraper', $data);
    }
    public function menu()
    {

        $data = array(
            'title' => 'user',
            'content' => 'user/menu',
            'menus'=>Menu::get(),
        );
        return view('user.layouts.wraper', $data);
    }
}
