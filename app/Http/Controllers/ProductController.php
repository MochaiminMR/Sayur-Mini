<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\M_product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = M_product::orderBy('created_at')->paginate(16);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function productsCreate()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function productsStore(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'category' => 'required',
            'saran_penyajian' => 'required',
            'saran_penyimpanan' => 'required',
            'ketahanan_dingin' => 'required',
            'ketahanan_suhu' => 'required',
            'rasa' => 'required',
            'kandungan' => 'required',
            'manfaat' => 'required',
            'contoh_sajian' => 'required',
            'shoppe' => 'required',
            'tokped' => 'required',
            'image_1' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image_2' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        // Generate unique names for the images
        $image1Name = $request->title . '-product-' . time() . '.' . $request->image_1->extension();
        $image2Name = $request->title . '-product-' . time() . '.' . $request->image_2->extension();

        // Store the images
        $image1Path = $request->file('image_1')->storeAs('images-products', $image1Name, 'public');
        $image2Path = $request->file('image_2')->storeAs('images-products', $image2Name, 'public');

        // Create the product
        $articleSuccess = M_product::create([
            'title' => $request->title,
            'price' => $request->price,
            'category' => $request->category,
            'saran_penyajian' => $request->saran_penyajian,
            'saran_penyimpanan' => $request->saran_penyimpanan,
            'ketahanan_dingin' => $request->ketahanan_dingin,
            'ketahanan_suhu' => $request->ketahanan_suhu,
            'rasa' => $request->rasa,
            'kandungan' => $request->kandungan,
            'manfaat' => $request->manfaat,
            'contoh_sajian' => $request->contoh_sajian,
            'shoppe' => $request->shoppe,
            'tokped' => $request->tokped,
            'image_1' => $image1Path,
            'image_2' => $image2Path,
            'slug_1' => $image1Name,
            'slug_2' => $image2Name,
        ]);

        // Check if the product was created successfully and return appropriate response
        if ($articleSuccess) {
            return redirect()->route('dashboard-products')->with('success', 'Product created successfully');
        } else {
            return redirect()->route('dashboard_products.add')->with('error', 'Product failed to create');
        }

    }


    /**
     * Display the specified resource.
     */
    public function productsShow()
    {

        $products = M_product::orderBy('created_at')->get();

        return view('benefit.index', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function productsEdit($id)
    {
        $product = M_product::findOrFail($id);

        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function productsUpdate(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'category' => 'required',
            'saran_penyajian' => 'required',
            'saran_penyimpanan' => 'required',
            'ketahanan_dingin' => 'required',
            'ketahanan_suhu' => 'required',
            'rasa' => 'required',
            'kandungan' => 'required',
            'manfaat' => 'required',
            'contoh_sajian' => 'required',
            'shoppe' => 'required',
            'tokped' => 'required',
        ]);

        $product = M_product::findOrFail($id);

        // Jika request memiliki file gambar
        if ($request->hasFile('image_1')) {
            // Generate nama file gambar
            $image1Name = $request->title . '-product-' . time() . '.' . $request->image_1->extension();
            // Simpan file gambar dan ambil path
            $image1Path = $request->file('image_1')->storeAs('images-products', $image1Name, 'public');
            // Hapus file gambar lama
            Storage::disk('public')->delete($product->image_1);
            // Update artikel dengan file gambar baru
            $product->image_1 = $image1Path;
            $product->slug_1 = $image1Name;
        }

        if ($request->hasFile('image_2')) {
            // Generate nama file gambar
            $image2Name = $request->title . '-product-' . time() . '.' . $request->image_2->extension();
            // Simpan file gambar dan ambil path
            $image2Path = $request->file('image_2')->storeAs('images-products', $image2Name, 'public');
            // Hapus file gambar lama
            Storage::disk('public')->delete($product->image_2);
            // Update artikel dengan file gambar baru
            $product->image_2 = $image2Path;
            $product->slug_2 = $image2Name;
        }

        // Update other fields
        $product->update([
            'title' => $request->title,
            'price' => $request->price,
            'category' => $request->category,
            'saran_penyajian' => $request->saran_penyajian,
            'saran_penyimpanan' => $request->saran_penyimpanan,
            'ketahanan_dingin' => $request->ketahanan_dingin,
            'ketahanan_suhu' => $request->ketahanan_suhu,
            'rasa' => $request->rasa,
            'kandungan' => $request->kandungan,
            'manfaat' => $request->manfaat,
            'contoh_sajian' => $request->contoh_sajian,
            'shoppe' => $request->shoppe,
            'tokped' => $request->tokped,
        ]);

        $product->save();


        return redirect()->route('dashboard-products')->with('success', 'Product updated successfully');
    }

    public function microgreenProduct()
    {
        $products = M_product::where('category', 'Microgreen')->get();
        return view('benefit.index', compact('products'));
    }

    public function hidroponikProduct()
    {
        $products = M_product::where('category', 'Hidroponik')->get();
        return view('benefit.index', compact('products'));
    }

    public function saladProduct()
    {
        $products = M_product::where('category', 'Salad')->get();
        return view('benefit.index', compact('products'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function productsDelete($id)
    {
        $product = M_product::findOrFail($id);

        // Delete the images
        Storage::disk('public')->delete($product->image_1);
        Storage::disk('public')->delete($product->image_2);

        // Delete the product
        $product->delete();

        return redirect()->route('dashboard-products')->with('success', 'Product deleted successfully');
    }
}
