<?php

namespace App\Http\Controllers;

use App\Models\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    public function index()
    {
        $penuliss = Penulis::all();

        return view('penulis.index', compact('penuliss'));
    }

    public function create()
    {
        return view('penulis.create');
    }

    public function store(Request $request)
    {
        //1. validasi
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255|unique:penulis,email',
            'address' => 'nullable',
        ]);

        //2. masukan data ke database
        $penuliss = new Penulis();

        $penuliss->name = $request->name;
        $penuliss->email = $request->email;
        $penuliss->address = $request->address;

        $penuliss->save();

        //3. redirect
        return redirect()
            ->route('penulis.index')
            ->with('pesan', 'Data berhasil disimpan');
    }

    public function show(Penulis $penuliss)
    {
        return view('penulis.show', compact('penuliss'));
    }

    public function edit(Penulis $penuliss)
    {
        return view('penulis.edit', compact('penuliss'));
    }

    public function update(Request $request, Penulis $penuliss)
    {
        //1. validasi
        $request->validate([
            'name' => 'required|max:255|unique:penulis,name,' . $penuliss->id,
            'email' => 'required|email|max:255',
            'address' => 'nullable|max:255',
        ]);

        //2. update
        $penuliss->name = $request->name;
        $penuliss->email = $request->email;
        $penuliss->address = $request->address;

        $penuliss->save();

        //3. redirect
        return redirect()
            ->route('penulis.index')
            ->with('pesan', 'Data berhasil diupdate');
    }

    public function destroy(Penulis $penuliss)
    {
        $penuliss->delete();

        return redirect()
            ->route('penulis.index')
            ->with('pesan', 'Data berhasil dihapus');
    }
}
