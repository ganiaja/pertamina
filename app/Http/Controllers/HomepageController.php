<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        $berita = Berita::latest()->limit(3)->get();
        return view('homepage.index', compact('berita'));
    }
}
