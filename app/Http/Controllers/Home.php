<?php

namespace App\Http\Controllers;

use App\Models\Absensi_m;
use App\Models\Training_m;
use Illuminate\Http\Request;

class Home extends Controller
{
    function dashboard()
    {
        return view('dashboard');
    }

    function absensi()
    {
        return view('absensi')->with([
            'absensi' => Absensi_m::all(),
        ]);
    }

    public function tambah_absensi(Request $request)
    {
        $absensi = Absensi_m::create($request->all());
        return redirect('/absensi')->with('success', 'Berhasil Menambahkan Data');
    }

    function training()
    {
        return view('training')->with([
            'training' => Training_m::all(),
        ]);
    }

    
    public function tambah_training(Request $request)
    {
        $training = Training_m::create($request->all());
        return redirect('/training')->with('success', 'Berhasil Menambahkan Data');
    }
}