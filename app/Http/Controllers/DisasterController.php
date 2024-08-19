<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disaster;

class DisasterController extends Controller
{
    public function index()
    {
        $disasters = Disaster::all();
        return view('disasters.index', compact('disasters'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'bencana' => 'required|string',
            'kelurahan' => 'required|string',
            'alamat' => 'required|string',
            'waktu' => 'required|date',
            'penyebab' => 'nullable|string',
            'kerugian' => 'nullable|integer',
            'luka' => 'nullable|integer',
            'meninggal' => 'nullable|integer',
        ]);

        Disaster::create([
            'bencana' => $request->bencana,
            'kelurahan' => $request->kelurahan,
            'alamat' => $request->alamat,
            'waktu' => $request->waktu,
            'penyebab' => $request->penyebab,
            'kerugian' => $request->kerugian,
            'luka' => $request->luka,
            'meninggal' => $request->meninggal,

        ]);

        return redirect()->route('disasters.index')->with('success', 'Data bencana berhasil ditambahkan!');
    }

    public function show($id)
    {
        $disaster = Disaster::findOrFail($id);
        return view('disasters.show', compact('disaster'));
    }

    public function destroy($id)
    {
        $disaster = Disaster::findOrFail($id);
        $disaster->delete();

        return redirect()->route('disasters.index')->with('success', 'Data bencana berhasil dihapus.');
    }
}

