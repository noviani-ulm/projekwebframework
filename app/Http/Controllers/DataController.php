<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Client\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $data = Data::all();
        return view('data', compact('buku'));
    }
}
