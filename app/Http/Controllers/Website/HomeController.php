<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $shopproducts = Product::where('type', '=', 'shop')->paginate(8);
        $newproducts = Product::where('type', '=', 'new')->paginate(8);
        $weddingproducts = Product::where('type', '=', 'wedding')->paginate(8);
        $holidayproducts = Product::where('type', '=', 'holiday')->paginate(8);
        $otherproducts = Product::where('type', '=', 'other')->paginate(8);

        return view('web.home.index', compact('newproducts', 'shopproducts', 'weddingproducts', 'holidayproducts', 'otherproducts'));
    }

    public function show(Product $product)
    {

        return view('web.home.show', compact('product'));
    }

    public function about()
    {
        //
    }


    public function contact()
    {
        //
    }

}
