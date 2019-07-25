<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\Category;
use Validator;
use App\Http\Requests\PostRequest;
 use Illuminate\Support\Collection;

class PostController extends Controller
{

	public function index()
	{
		$dem=0;
		$posts = Post::orderBy('id','desc')->paginate(12);
		$lastest_posts = Post::orderBy('id','desc')->limit(4)->get();
		
		
		//dd($lastest_posts);
		
		
		return view('posts.index',['dem' => $dem,'posts' => $posts,'lastest_posts'=>$lastest_posts]);
	}

	public function detail($slug)
	{

		$post = Post::where('slug',$slug)->FirstOrFail();
		$post->increment('view_count');

		$user = \App\User::where('id',$post->user_id)->FirstOrFail();

		$tags_post  = \DB::table('post_tags')
							->join('tags','post_tags.tag_id','=','tags.id')
							->join('posts','post_tags.post_id','=','posts.id')
							->where('posts.slug', '=', $slug)
							->get();
		return view('posts.detail',['post' => $post,'user' => $user,'tags_post' => $tags_post]);
	}

	public function category($slug)
	{
		$category = \App\Category::where('slug',$slug)->FirstOrFail();
		$posts=$category->posts()->paginate(9);
		
		return view('categories.index',['posts' => $posts,'category' => $category]);
	}

	public function tag($slug)
	{
		$tag = \App\Tag::where('slug',$slug)->FirstOrFail();

		$posts = $tag->posts()->paginate(9);
		

		return view('tags.index',['tag' => $tag,'posts' => $posts]);
	}

	public function searchByPost(Request $request)
{
    $posts = Post::where('title', 'like', '%' . $request->value . '%')->get();

    return response()->json($posts); 
}

public function searchAll()
{
	$search=$_GET["search"];
    $sposts = Post::where('title', 'like', '%' . $search . '%')->get();
    $stags = Tag::where('name', 'like', '%' . $search . '%')->get();
    $scategories = Category::where('name', 'like', '%' . $search . '%')->get();
    

    return view('search',['search' => $search,'scategories' => $scategories,'stags' => $stags,'sposts' => $sposts]);
}






}
