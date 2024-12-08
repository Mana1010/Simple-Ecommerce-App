<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request) {
        $categoryQuery = $request->query('category');
        $category = ['foods', 'clothes', 'electronics', 'beauty', 'home', 'toys', 'books', 'tools', 'jewelry'];

        if(in_array($categoryQuery, $category) && !empty($categoryQuery)) {
            $products = Product::where('category', $categoryQuery)->orderBy('created_at', 'desc')->get();
        }
        else {
            $products = Product::orderBy('created_at', 'desc')->get();
        }

        $totalProduct = Product::count();
        $totalFoodProduct = Product::where('category', 'foods')->count();
        $totalClothesProduct = Product::where('category', 'clothes')->count();
        $totalBeautyProduct = Product::where('category', 'beauty')->count();
        $totalElectronicsProduct = Product::where('category', 'electronics')->count();
        $totalHomeProduct = Product::where('category', 'home')->count();
        $totalToysProduct = Product::where('category', 'toys')->count();
        $totalBooksProduct = Product::where('category', 'books')->count();
        $totalToolProduct = Product::where('category', 'tools')->count();
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
        $validated = $request->validate([
            'product_name' => 'required',
            'category' => 'required|in:foods,electronics,beauty,clothes,home,toys,books,tools,jewelry',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer',
            'description' => 'required',
            'manufacturer' => 'required',
        ]);
        Product::create($validated);
        return redirect()->route('dashboard', ["category" => "all"]);
    }

    public function edit_product_form($productId) {
        $product_data = Product::find($productId);
        return view('edit-product', compact('product_data'));
    }

    public function edit_product_details(Request $request, Product $productId) {
        $validated = $request->validate([
            'product_name' => 'required',
            'category' => 'required|in:foods,electronics,beauty,clothes,home,toys,books,tools,jewelry',
            'price' => 'required',
            'stock_quantity' => 'required',
            'description' => 'required',
            'manufacturer' => 'required',
        ]);

           $productId->update($validated);
            return redirect()->route('dashboard', ["category" => "all"])->with('success', 'Product updated successfully!');
    }
    public function destroy_product(Product $productId) {
        $productId->delete();
        return response()->json(['message' => 'Your product has been deleted.']);
    }
}
