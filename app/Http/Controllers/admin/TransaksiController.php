<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Menu;
use App\Models\Dump;
use PDF;

class TransaksiController extends Controller
{
    //Transaksi
    public function transaksi()
    {
        $menus = Menu::get();
        $transaksi = Transaksi::all();
        $dump = Dump::get();
        $data = array(
            'title' => 'admin',
            'menu' => $menus,
            'transaksi' => $transaksi,
            'dump' => $dump,
            'no' => 1,
            'content' => 'adminn/transaksi/index'
        );
        return view('adminn.layouts.wrapper', $data);
    }

    public function tambahdatatransaksi()
    {

        $menus = Menu::get();

        $data = array(
            'title' => 'Tambahdata',
            'menu'  => $menus,
            'content' => 'adminn/transaksi/tambah'
        );
        return view('adminn.layouts.wrapper', $data);
    }

    public function InputTambah(Request $request)
    {
        $data = $request->all();
        // dd($data);
        Transaksi::create([
            'kembali' => $data['uangkembali'],
            'totalharga' => $data['totalharga'],
            'uangbayar' => $data['uangbayar'],
        ]);

        $trans = Transaksi::latest()->first();
        // dd($trans);
        foreach ($data['namamenu'] as $i => $item) {

            Dump::create([
                'menu_id' => $item,
                'transaksi_id' => $trans->id,
                'harga' => $data['harga'][$i],
                'jumlah' => $data['jumlah'][$i],
            ]);
        }

        return redirect()->route('transaksi');
    }

    // app/Http/Controllers/ImageController.php

    public function getImage($id)
    {
        $imageData = Menu::find($id);
        return response()->json($imageData);
    }
    public function getHarga($id)
    {
        $hargaData = Menu::find($id);
        return response()->json($hargaData);
    }

    public function delete($id)
    {
        $delete = Transaksi::find($id);
        $delete->delete();
        return redirect()->route('transaksi');
    }

    public function update(Request $request)
    {

        $request->all();
        // dd($request->all());
        $data = Transaksi::find($request->id);
        // dd($data);
        $data->jumlah = $request->jumlah;

        $data->totalharga = $request->totalharga;
        $data->menuid = $request->namamenu;

        $data->save();
        return redirect()->route('transaksi');
    }

    public function edit($id)
    {

        $find = Transaksi::find($id);
        $menu = Menu::get();
        //  dd($find);
        $data = array(

            'title'     => 'Edit Transaksi',
            'content'   => 'adminn/transaksi/edit',
            'transaksi'      => $find,
            'menu' => $menu

        );

        return view('adminn.layouts.wrapper', $data);
    }

    public function cetak($id)
    {
        $get = Transaksi::Where("id", $id)->first();
        $dump = Dump::where('transaksi_id', $id)->get();
        // dd($dump[1]->menu);
        $data = array(
            'transaksi' => $get,
            'dump' => $dump,
        );
        // dd($get->jumlah);
        $pdf = PDF::loadView("adminn.transaksi.struk", ["data" => $data]);



        return $pdf->stream("transaksi.pdf");
    }
}
