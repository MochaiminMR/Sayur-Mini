<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\M_article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('articles.index');
    }


    public function articlesShow (){
        $articles = M_article::orderBy('created_at')->get();

        return view('dashboard', compact('articles'));
    }

    public function articlesDelete($id)
    {
        $article = M_article::findOrFail($id);
        $article->delete();

        return redirect()->route('dashboard')->with('success', 'Article deleted successfully');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function articlesCreate()
    {
        return view('dashboard.create');
    }

    /**
     * Store a newly created resource in storage.
     */


    public function articleStore(Request $request)
    {
        // Validasi request
        $request->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|min:20',
        ]);

        // Generate nama file gambar
        $imageName = $request->title . '-article-' . time() . '.' . $request->image->extension();

        // Simpan file gambar dan ambil path
        $imagePath = $request->file('image')->storeAs('images', $imageName, 'public');

        // Buat artikel baru
        M_article::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title), // Perbaiki penggunaan Str::slug
            'image' => $imagePath,
            'content' => $request->content,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'Article created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
