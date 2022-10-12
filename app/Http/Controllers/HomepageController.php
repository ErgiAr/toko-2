<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homepage()
    {
        $title = 'Home';
        return view('homepage.homepage', compact('title'));
    }

    public function about()
    {
        $title = 'Tentang Kami';
        return view('section.about', compact('title'));
    }

    public function kategori()
    {
        $title = 'Kategori Produk';
        return view('section.kategori', compact('title'));
    }

    public function kontak()
    {
        $title = 'Kontak';
        return view('section.kontak', compact('title'));
    }
    
}
