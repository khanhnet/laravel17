<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function index(){
    	$posts  = Post::take(3)->get();

    	 // lấy tất cả bài viết trong bảng.
// return View với dữ liệu đã lấy đượcđược truyền qua view bằng biến posts.
    	return view('home',compact('posts'));
    }
}
