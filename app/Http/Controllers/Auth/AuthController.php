<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function login() 
    {
        return view('auth.v_login');
    }

    function loginProses(Request $request)  
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'no_sim' => 'required',
        ]);
    
        $user = User::where('nama', $validatedData['nama'])
                    ->where('no_sim', $validatedData['no_sim'])
                    ->first();
    
        if ($user) {
            Session::put('user_id', $user->id);
            Session::put('nama', $user->nama);
            $request->session()->regenerate();
            return redirect()->route('mobil');
        }
    
        return back()->with('loginError', 'Nama dan No SIM Anda Salah!!');  
    }

    function logout()  
    {
        return view('auth.v_login');
    }

    function register() 
    {
        return view('auth.v_register');    
    }

    function storeRegister(Request $request)  
    {
        $validated = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required', 'min:10',
            'no_sim' => 'required', 'min:10',
        ]);

        $mobil = User::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'no_sim' => $request->no_sim,
        ]);

        $mobil->save();

        return redirect()->route('login')->with('pesan', 'Data Berhasil Ditambahkan');    
    }

}
