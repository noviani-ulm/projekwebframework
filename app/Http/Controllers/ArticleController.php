<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Client\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $artikel = Artikel::orderBy('id', 'desc') -> paginate(5);
        return view('artikel.artikel', compact('artikel'));
    }

    public function show($slug)
    {
        return view('artikel.isiartikel', compact('slug'));
    }

    public function create()
    {
        return view('artikel.buatartikel');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255|min:3',
            'subject' => 'required|min:10',
        ]);
        $artikel = new Artikel();
        $artikel->title = $request->title;
        $artikel->subject = $request->subject;
        $artikel->save();

        return redirect('/artikel');
    }
    public function edit($id)
    {
        $article = Artikel::find($id);
        return view('artikel.editartikel', compact('artikel'));
    }

}
