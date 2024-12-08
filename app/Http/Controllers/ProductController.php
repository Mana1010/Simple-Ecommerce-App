<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        $totalProduct = Product::count();
        $totalFoodProduct = Product::where('category', 'food')->count();
        $totalClothesProduct = Product::where('category', 'cloth')->count();
        $totalBeautyProduct = Product::where('category', 'beauty')->count();
        $totalElectronicsProduct = Product::where('category', 'electronic')->count();
        $totalHomeProduct = Product::where('category', 'home')->count();
        $totalToysProduct = Product::where('category', 'toy')->count();
        $totalBooksProduct = Product::where('category', 'book')->count();
        $totalToolProduct = Product::where('category', 'tool')->count();
        $totalJewelryProduct = Product::where('category', 'jewelry')->count();

        $categoryListTotal = [$totalProduct,
        $totalFoodProduct, $totalClothesProduct,
        $totalBeautyProduct, $totalElectronicsProduct, $totalHomeProduct,
        $totalToysProduct, $totalBooksProduct,$totalToolProduct,
        $totalJewelryProduct,
    ];
        return view('dashboard', compact(
        'products',
        'totalProduct',
        'categoryListTotal',
    ));

    }

    public function product_form() {
        return view('create-product');
    }

    public function store_product(Request $request) {
        $request->validate([
            'product_name' => 'required',
            'category' => 'required|in:food,electronic,beauty,cloth,home,toy,book,tool,jewelry',
            'price' => 'required',
            'stock_quantity' => 'required',
            'description' => 'required',
            'manufacturer' => 'required',
        ]);
        Product::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Product added successfully');
    }

    public function destroy_product(Product $product) {

        $product->delete();
        return redirect()->route('dashboard')->with('success', 'Product removed successfully');
    }
}
