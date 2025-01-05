<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Lumintu Store',
            'title2' => 'Judul 2',
            'content' => 'secondhand phone store'
        ];
        
        return view('page_Web/home', $data);
    }
}
