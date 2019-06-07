<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class HomeController extends Controller
{
    public function index(){
    	$posts  = Post::paginate(5);
    	
    	


    	 // lấy tất cả bài viết trong bảng.
// return View với dữ liệu đã lấy đượcđược truyền qua view bằng biến posts.
    	return view('home',compact('posts'));
    }
    public function posts($id){
    	$posts = Category::find($id)->posts()->paginate(5);
    	//dd($posts);
        return view('posts',compact('posts','id'));
    	
    	
    }
    public function detail($id){
    	$post  = Post::find($id);
    	
    	return view('detail',compact('post'));
    }


}
