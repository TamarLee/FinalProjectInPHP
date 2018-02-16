<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class SingleBlogController extends Controller
{
    public function showSingleBlog($id){
    	
    	$post = Blog::orderBy('id', 'desc')
               ->take(3)
               ->get();
    	$singleblog = Blog::all()->where('id', $id);

    	return view('singleBlog', ['singleblog' => $singleblog, 'post' =>$post]).$id;
    }
}
