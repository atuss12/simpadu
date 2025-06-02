<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $data = ['nama' => "Atus", 'foto' => 'ponyo.png'];
        $mahasiswa = Mahasiswa::with('prodi')->get();
        return view('dashboard', compact('data'));
    }
}
