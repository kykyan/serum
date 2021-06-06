<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    
    public function datauser(User $user)
    {
        $user = User::all();
        return view('admin.datauser', compact('user'));
    }
    
    public function edit_datauser(User $user)
    {
        return view('admin.edit_datauser', compact('user'));
    }

    public function update_datauser(Request $request, $id)
    {
        User::where('id', $id)
        ->update([
            'role' => $request->role,
        ]);
        return redirect(route('datauser'))->with('status','Data Berhasil Diubah!');
    }
}