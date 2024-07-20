<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::all();
        return view('dashboard.berita.index', compact('berita'));
    }

    public function create()
    {
        return view('dashboard.berita.create');
    }

    public function store(Request $request){

        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'foto' => 'required',
        ]);

        if($request->hasFile('foto')){

            $image = $request->file('foto')->store('berita', 'public');
        }

        $berita = new Berita();
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->foto = $image;
        $berita->save();

        return redirect('berita');
    }

    public function edit($id)
    {
        $berita = Berita::find($id);

        return view('dashboard.berita.edit', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            // 'foto' => 'required',
        ]);

        $berita = Berita::find($id);
        
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        if ($request->hasFile('foto')) {
            
            $image = $request->file('foto')->store('berita', 'public');
            $berita->foto = $image ;
        }
        $berita->save();

        return redirect('/berita');
    }

    public function destroy($id)
    {
        $berita = Berita::find($id);
        $berita->delete();
        return redirect('/berita');
    }

}
