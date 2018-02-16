<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Blog;
class BlogController extends Controller
{
	public function showBlog(){
		$blog = Blog::paginate(4);
    	return view('blog', [
    		'blog' => $blog
    	]);
    }
}