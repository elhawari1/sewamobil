<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Models\Admin\MobilModel;
use App\Http\Controllers\Controller;

class SewaController extends Controller
{
    function index()  
    {
        $mobil = MobilModel::all();
        return view('user.v_sewamobil', ['mobil' => $mobil]);
    }
}
