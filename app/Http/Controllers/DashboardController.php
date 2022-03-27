<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Akun;

class DashboardController extends Controller
{
    public function index() {
        $netflix_total = Akun::where('kategori_id', 1)->count();
        $spotify_total = Akun::where('kategori_id', 2)->count();
        $youtube_total = Akun::where('kategori_id', 3)->count();
        $canva_total = Akun::where('kategori_id', 4)->count();

        return view('home', [
            'netflix' => $netflix_total,
            'spotify' => $spotify_total,
            'youtube' => $youtube_total,
            'canva' => $canva_total
        ]);
    }
}
