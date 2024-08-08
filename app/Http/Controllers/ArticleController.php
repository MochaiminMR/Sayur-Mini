<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\M_article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $articles = M_article::orderBy('created_at')->get();
        return view('articles.index', compact('articles'));
    }


    public function articlesShow (){
        $articles = M_article::orderBy('created_at')->get();

        return view('dashboard', compact('articles'));
    }

    public function articlesDelete($id)
    {
        $article = M_article::findOrFail($id);
        $article->delete();

        Storage::disk('public')->delete($article->image);

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
            'title' => 'required|unique:article|min:5|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|min:20',
        ]);

        // Generate nama file gambar
        $imageName = $request->title . '-article-' . time() . '.' . $request->image->extension();

        // Simpan file gambar dan ambil path
        $imagePath = $request->file('image')->storeAs('images-articles', $imageName, 'public');

        // Buat artikel baru
       $articleSucces = M_article::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title), // Perbaiki penggunaan Str::slug
            'image' => $imagePath,
            'content' => $request->content,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        if($articleSucces){
            return redirect()->route('dashboard')->with('success', 'Article created successfully');
        }else{
            return redirect()->route('dashboard.create')->with('error', 'Article failed to create');
        }

    }

    public function articlesEdit($id)
    {
        $article = M_article::findOrFail($id);

        return view('dashboard.edit', compact('article'));
    }

    public function articlesUpdate(Request $request, $id){
        // Validasi request
        $request->validate([
            'title' => 'required|min:5|max:255',
            'content' => 'required|min:20',
        ]);

        // Cari artikel berdasarkan id
        $article = M_article::findOrFail($id);

        // Jika request memiliki file gambar
        if ($request->hasFile('image')) {
            // Generate nama file gambar
            $imageName = $request->title . '-article-' . time() . '.' . $request->image->extension();

            // Simpan file gambar dan ambil path
            $imagePath = $request->file('image')->storeAs('images-articles', $imageName, 'public');

            // Hapus file gambar lama
            Storage::disk('public')->delete($article->image);

            // Update artikel dengan file gambar baru
            $article->update([
                'title' => $request->title,
                'slug' => Str::slug($imageName), // Perbaiki penggunaan Str::slug
                'image' => $imagePath,
                'content' => $request->content,
                'updated_at' => now(),
            ]);
        } else {
            // Update artikel tanpa file gambar baru
            $article->update([
                'title' => $request->title,
                'content' => $request->content,
                'updated_at' => now(),
            ]);
        }

        return redirect()->route('dashboard')->with('success', 'Article updated successfully');
    }

    /**
     * Display the specified resource.
     */
    public function articleShowDetail($id)
    {
        $article = M_article::findOrFail($id);

        return view('articles.show', compact('article'));
    }

}
