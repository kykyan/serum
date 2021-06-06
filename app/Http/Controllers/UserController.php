<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function edit()
    {
        $user = Auth::user();
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        User::where('id', $id)
        ->update([
            'name' => $request->name,
            'city' => $request->city,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender
        ]);
        return redirect(route('edit'))->with('status','Data Berhasil Diubah!');
    }
}
