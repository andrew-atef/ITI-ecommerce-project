<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $products = Product::with('category')->get();

        if (isset($request->search)) {
            $products = Product::where('name', 'like', '%' . $request->search . '%')->get();
        }

        return view('home', [
            'products' => $products,
        ]);
    }
}
