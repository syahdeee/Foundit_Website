<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Barang;
use App\Models\Category;
use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index_temu(Request $request)
    {

        if($request->sort ==='latest'){

            $barang = Barang::latest()->where('is_hilang',false)->where('is_verif',true);
        }else{
            
            $barang = Barang::oldest()->where('is_hilang',false)->where('is_verif',true);
        }

        $barang->when($request->jenis, function($q) use ($request){
            return $q->where('category_id', $request->jenis);
        });
        
        $barang->when($request->tanggal, function($q) use ($request){
            return $q->whereDate('created_at', $request->tanggal.'%');
        });

        $barang->when($request->status, function($q) use ($request){
            return $q->where('is_claim', $request->status);
        });

        if($request->search){
            $barang->where('nama', 'like','%'. $request->search  . '%');
        }

        return view('searchBarangTemuan', [
            'barangs' => $barang->paginate(5)->withQueryString(),
            'categories' => Category::all()
        ]);

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
