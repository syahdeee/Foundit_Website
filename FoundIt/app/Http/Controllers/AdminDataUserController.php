<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDataUserController extends Controller
{
    public function index(Request $request){
        $user = User::latest();

        if($request->search){
            $user->where('username', 'like','%'. $request->search  . '%');
        }

        return view('admin.halmDataUser',[
            'users' => $user-> get()
        ]);
    }

    public function delete(string $id)
    {
        $data = User::find($id);
        $data->delete();
   
        return redirect('/admin/datauser')->with('userHapus', 'Data user berhasil dihapus');
    }
}
