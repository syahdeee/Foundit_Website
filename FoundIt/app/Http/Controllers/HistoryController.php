<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Barang;
use Illuminate\Http\Request;
use App\Http\Requests\StoreHistoryRequest;
use App\Http\Requests\UpdateHistoryRequest;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('History.index',[
            'histories' => History::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($slug)
    {
        return view('History.create',[
            'slug'=>$slug
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHistoryRequest $request)
    {   
        

        $validatedData = $request->validate([
            'nama_barang' => 'required|max:255',
            'nama_penerima' => 'required|max:255',
            'slug' => 'required',
            'nim' => 'required',
            'jurusan' => 'required'
        ]);

        $validatedData['user_id'] = auth()->user()->id;


        $data = Barang::where('slug',$request->slug)->get()[0];
        $data->is_claim = true;
        $data->save();

        History::create($validatedData);

        return redirect('/History')->with('success', 'Transaksi kamu berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(History $history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(History $history)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHistoryRequest $request, History $history)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(History $history)
    {
        //
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
