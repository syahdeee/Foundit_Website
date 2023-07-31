<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Category;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Laporan.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Laporan.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   
        // dd($request);
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'slug' => 'required|unique:barangs',
            'image' => 'image|file|max:2048',
            'deskripsi' => 'required',
            'kronologi' => 'required',
            'category_id' => 'required'
        ]);

        $validatedData['lokasi'] = $request['lokasi'];
        $validatedData['user_id'] = auth()->user()->id;
        

        if($request["is_hilang"] == "1"){
            $validatedData['is_hilang'] = 1;
        } else {
            $validatedData['is_hilang'] = 0;
        }

        
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('post-images');
        }


        $validatedData['is_claim'] = 0;
        $validatedData["is_verif"] = 0;
        $validatedData["is_tolak"] = 0;

        if($request["is_hadiah"] == "1"){
            $validatedData['is_hadiah'] = 1;
        } else {
            $validatedData['is_hadiah'] = 0;
        }
        

        Barang::create($validatedData);

        return redirect('/')->with('success', 'Barang kamu berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        //
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Barang::class, 'slug', $request->nama);
        return response()->json(['slug' => $slug]);
    }
}
