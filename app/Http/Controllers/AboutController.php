<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $nim = 2241720105;
        $name = 'Daffa Maulana Satria';

        return "Nama : $name <br> NIM : $nim";
    }
}