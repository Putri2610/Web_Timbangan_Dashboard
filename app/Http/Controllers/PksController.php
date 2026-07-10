<?php

namespace App\Http\Controllers;

use App\Models\Pks;
use Illuminate\Http\Request;

class PksController extends Controller
{
    public function index()
    {
        $data = Pks::all();

        return view('pks.index', compact('data'));
    }

    public function create()
    {
        return view('pks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pks' => 'required'
        ]);

        Pks::create([
            'nama_pks' => $request->nama_pks
        ]);

        return redirect('/pks')->with('success','Data berhasil ditambahkan');
    }
}