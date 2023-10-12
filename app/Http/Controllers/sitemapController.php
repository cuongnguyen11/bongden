<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\post;

use App\Models\product;

class sitemapController extends Controller
{
   public function index()
   {
       $products = product::orderBy('id', 'desc')->take(120)->get();

        return response()->view('sitemap.index', [
            'products' => $products,
        ])->header('Content-Type', 'text/xml');

   }

   public function sitemapChildProduct()
   {
    $product = product::take(160)->OrderBy('id', 'desc')->get();

       return response()->view('sitemap.child', [
            'product' => $product,
        ])->header('Content-Type', 'text/xml');
   }
   public function sitemapChildBlog()
   {
    $blog = post::take(160)->OrderBy('id', 'desc')->get();

    
       return response()->view('sitemap.childs_blog', [
            'blog' => $blog
        ])->header('Content-Type', 'text/xml');
   }
}

