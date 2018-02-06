<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Blog;
class BlogController extends Controller
{
	public function showBlog(){
		$blog = Blog::all();
    	return view('blog', [
    		'blog'=>$blog
    	]);
    }
}