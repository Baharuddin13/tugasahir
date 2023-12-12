<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    //MENU
    public function menu()
    {
        $menu = Menu::all();
        $data = array(
            'title' => 'Menu',
            'menu' => $menu,
            'no' => 1,
            'content' => 'adminn/menu/index'
        );
        return view('adminn.layouts.wrapper', $data);
    }

    public function tambahdata()
    {
        $data = array(
            'title' => 'Tambahdata',
            'content' => 'adminn/menu/tambah'
        );
        return view('adminn.layouts.wrapper', $data);
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('gambar')) {

            $imgName =  $request->file('gambar')->getClientOriginalName();
            $request['gambar']->move(public_path('images/menu'), $imgName);
            $data['gambar'] = $imgName;
        }

        Menu::create([
            'namamenu' => $request['namamenu'],
            'deskripsi' => $request['deskripsi'],
            'harga' => $request['harga'],
            'gambar' => $data['gambar'],
        ]);
        return redirect()->route('menu_admin');
    }

    public function edit($id)
    {
        $find = Menu::find($id);
        $data = array(

            'title'     => 'Edit Menu',
            'content'   => 'adminn/menu/edit',
            'data'      => $find

        );

        return view('adminn.layouts.wrapper', $data);
    }

    public function update(Request $request)
    {

        $request->all();

        $data = Menu::find($request->id);
        $data->namamenu = $request->namamenu;
        $data->deskripsi = $request->deskripsi;
        $data->harga = $request->harga;
        $data->gambar = $request->gambar;


        if ($request->hasFile('gambar')) {
            $imgName =  $request->file('gambar')->getClientOriginalName();
            $request['gambar']->move(public_path('images/menu'), $imgName);
            $data['gambar'] = $imgName;
        } else {
            $data['gambar'] = $request->gambarLama;
        }

        $data->save();
        return redirect()->route('menu');
    }

    public function delete($id)
    {
        $delete = Menu::find($id);
        $delete->delete();
        return redirect()->route('menu');
    }
}
