<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createView()
    {

        return view('product.create');
    }


    public function view()
    {
        $products = Product::all();
        return view('components/frontend/product-show', compact('products'));
    }

    public function index()
    {
        $products = Product::all();

        return view('product.index', compact('products'));
    }

    public function list()
    {
        $products = Product::all();
        return view('components/frontend/product-show', compact('products'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        $product = new product;
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->compare_price = $request->input('compare_price');
        $product->stock = $request->input('stock');
        $product->created_by = auth()->id();




        if ($request->hasfile('feature_image')) {
            $file = $request->file('feature_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('upload/productImages', $filename);
            $product->feature_image = $filename;
        }
        $product->save();
        return redirect()->route('product.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('components/frontend/product-show', compact('product'));
    }

    public function productDetails($id)
    {
        $product = Product::findOrFail($id);
        return view('components/frontend/product-details', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = product::query()->findOrFail($id);

        if ($request->hasfile('feature_image')) {
            $file = $request->file('feature_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('upload/productImages', $filename);
            // $product->feature_image = $filename;
        }
        $product->title = $request->input('title');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->compare_price = $request->input('compare_price');
        $product->stock = $request->input('stock');
        $product->created_by = auth()->id();
        $product->feature_image = $filename;
        $product->update();
        return redirect()->route('product.index')
            ->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (!$product = product::query()->find($id)) {
            return response()->json(['error' => 'Product not found.'], 404);
        }

        if ($product->feature_image) {
            Storage::disk('public')->delete($product->feature_image);
        }

        $product->delete();
        return redirect()->route('product.index')
            ->with('success', 'Post deleted successfully.');
    }
}
