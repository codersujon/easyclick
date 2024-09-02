<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FlashSale;
use App\Models\FlashSaleItem;
use App\Models\Product;
use Illuminate\Http\Request;

class FlashSaleController extends Controller
{
    public function index()
    {
        $flashSaleDate = FlashSale::first();
        $flashSaleItems = FlashSaleItem::where('status', 1)->orderBy('id', 'ASC')->pluck('product_id')->toArray();
        return view('frontend.pages.flash-sale', compact('flashSaleDate', 'flashSaleItems'));
    }


    /**
     * Summary of new_arrival
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function new_arrival()
    {
        $title = "New Arrival";
        $typeBaseProducts = Product::withAvg('reviews', 'rating')->withCount('reviews')
        ->with(['variants', 'category', 'productImageGalleries'])
        ->where(['product_type' => 'new_arrival', 'is_approved' => 1, 'status' => 1])->orderBy('id', 'DESC')->paginate(20);
        return view('frontend.pages.new-arrival', ['title'=>$title, 'products'=>$typeBaseProducts]);
    }
    public function AllProduct()
    {
        $title =" All Products ";
        $typeBaseProducts = Product::withAvg('reviews', 'rating')->withCount('reviews')
        ->with(['variants', 'category', 'productImageGalleries'])
        ->where(['is_approved' => 1, 'status' => 1])->orderBy('id', 'DESC')->paginate(20);
        return view('frontend.pages.new-arrival', ['title'=>$title, 'products'=>$typeBaseProducts]);
    }

    /**
     * Summary of featured_product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function featured_product()
    {

        $title = " Featured Product ";
      
        $typeBaseProducts = Product::withAvg('reviews', 'rating')->withCount('reviews')
        ->with(['variants', 'category', 'productImageGalleries'])
        ->where(['product_type' => 'featured_product', 'is_approved' => 1, 'status' => 1])->orderBy('id', 'DESC')->paginate(20);
 
        return view('frontend.pages.new-arrival', ['title'=>$title, 'products'=>$typeBaseProducts]);
    }
    /**
     * Summary of top_product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function top_product()
    {
        $title = "Top Product ";
        $typeBaseProducts = Product::withAvg('reviews', 'rating')->withCount('reviews')
        ->with(['variants', 'category', 'productImageGalleries'])
        ->where(['product_type' => 'top_product', 'is_approved' => 1, 'status' => 1])->orderBy('id', 'DESC')->paginate(20);
 
        return view('frontend.pages.new-arrival', ['title'=>$title, 'products'=>$typeBaseProducts]);
    }
    /**
     * Summary of best_product
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function best_product()
    {
        $title = "Best Product";
       
        $typeBaseProducts = Product::withAvg('reviews', 'rating')->withCount('reviews')
        ->with(['variants', 'category', 'productImageGalleries'])
        ->where(['product_type' => 'best_product', 'is_approved' => 1, 'status' => 1])->orderBy('id', 'DESC')->paginate(20);
 
        return view('frontend.pages.new-arrival', ['title'=>$title, 'products'=>$typeBaseProducts]);
    }
    
}
