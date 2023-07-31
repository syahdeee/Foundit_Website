<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class LibraryController extends Controller
{

    public function show_hilang(Barang $barang){
        return view('detailBarangHilang', [
            "barang" => $barang
        ]);
    }

    public function show_temu(Barang $barang){
        return view('detailBarangTemuan', [
            "barang" => $barang
        ]);
    }

    public function home(){
        
        // dd(request('search'));

        $barang = Barang::all()->where('is_verif',true);

        if(request('search')){
            $barang->where('nama', 'like','%'. request('search') . '%');
        }

        return view('home', [
            'barangs' => $barang
        ]);
    }
}