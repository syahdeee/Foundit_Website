<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminBarangTemuController extends Controller
{
    public function index(Request $request){
        $barangs = Barang::latest();

        if($request->search){
            $barangs->where('nama', 'like','%'. $request->search  . '%');
        }

        return view('admin.halmBarangTemu',[
            'barangs' => $barangs->get()
        ]);
    }

    public function delete(string $id)
    {
        $data = Barang::find($id);
        $data->delete();
   
        return redirect('/admin/barangtemu')->with('barangHapus', 'Barang berhasil dihapus');
    }

    
    public function verif($id){
        $data = Barang::find($id);
        $data->is_verif = true;
        $data->save();

        return redirect('/admin/barangtemu');
    }

    public function tolak($id){
        $data = Barang::find($id);
        $data->is_tolak = true;
        $data->save();
        return redirect('/admin/barangtemu');
    }
}
