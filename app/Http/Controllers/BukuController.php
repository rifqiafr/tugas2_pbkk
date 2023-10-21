<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function buku()
    {
        $nama_buku = "Hujan";
        $penulis = "Tere Liye";

        return view("buku", compact("nama_buku", "penulis"));
    }
}
