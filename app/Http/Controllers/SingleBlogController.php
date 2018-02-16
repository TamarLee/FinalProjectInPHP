<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class SingleBlogController extends Controller
{
    public function showSingleBlog($id){
    	$category = Blog::all();
    	$post = Blog::orderBy('id', 'desc')
               ->take(3)
               ->get();
    	$singleblog = Blog::all()->where('id', $id);

    	return view('singleBlog', ['singleblog' => $singleblog, 'category' => $category, 'post' =>$post]).$id;
    }
}
