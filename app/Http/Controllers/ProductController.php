<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function find(Request $request)
    {
        $store = User::where('username', $request->username)->first();

        if (!$store) {
            abort(404);
        }

        return view('pages.find', compact('store'));
    }

    public function findResults(Request $request)
    {
        $store = User::where('username', $request->username)->first();

        if (!$store) {
            abort(404);
        }

        $products = Product::where('user_id', $store->id);

        if (isset($request->category)) {
            $category = ProductCategory::where('user_id', $store->id)
                ->where('slug', $request->category)
                ->first();

            $products = $products->where('product_category_id', $category->id);
        }

        if (isset($request->search)) {
            $products = $products->where('name', 'like', '%' . $request->search . '%');
        }

        $products = $products->get();

        return view('pages.result', compact('store', 'products'));
    }

    public function show(Request $request)
    {
        $store = User::where('username', $request->username)->first();

        if (!$store) {
            abort(404);
        }

        $product = Product::where('id', $request->id)->first();

        if (!$store) {
            abort(404);
        }

        return view('pages.product', compact('store', 'product'));
    }
}
