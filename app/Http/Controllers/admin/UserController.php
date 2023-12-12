<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //User
    public function user()
    {

        $data = array(
            'title' => 'user',
            'user' => User::get(),
            'content' => 'adminn/user/index'
        );
        return view('adminn.layouts.wrapper', $data);
    }

    public function TambahDataUser()
    {
        $data = array(
            'title' => 'Tambahdatauser',
            'content' => 'adminn/user/tambah'
        );
        return view('adminn.layouts.wrapper', $data);
    }

    public function InputUser(Request $request)
    {
        $data = $request->all();
        // dd($data);

        User::create([
            'nama' => $request['name'],
            'username' => $request['username'],
            'password' => $request['password'],
            'role' => $request['role'],
        ]);
        return redirect()->route('userr');
    }

    public function edit($id)
    {
        $find = User::find($id);
        $data = array(

            'title'     => 'Edit User',
            'content'   => 'adminn/user/edit',
            'data'      => $find

        );

        return view('adminn.layouts.wrapper', $data);
    }

    public function delete($id)
    {
        $delete = User::find($id);
        $delete->delete();
        return redirect()->route('user');
    }

    public function update(Request $request)
    {

        $request->all();

        $data = User::find($request->id);
        // dd($data);
        $data->nama = $request->name;
        $data->username = $request->username;
        $data->password = $request->password;
        $data->role = $request->role;


        $data->save();
        return redirect()->route('user');
    }
}
