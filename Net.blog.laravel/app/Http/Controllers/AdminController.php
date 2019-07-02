<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\PostTag;
use App\Tag;
use App\User;


class AdminController extends Controller
{
    public function index()
    {
    	$posts=Post::get();
    	$categories=Category::get();
    	$tags=Tag::get();
    	$users=User::get();

    	$quantityPosts=count($posts);
    	$quantityCategories=count($categories);
    	$quantityTags=count($tags);
    	$quantityUsers=count($users);
        $read=0;
        $i=0;
    	
        foreach ($posts as $post) {
                 $readPost[]=$post->title;
                 $viewPost[]=$post->view_count;
        }
        $topPosts=array_combine($readPost, $viewPost);
        arsort($topPosts);
        foreach ($viewPost as $count) {             
                 $read+=$count;
        }
    	return view('admin.dashboard',['quantityPosts' => $quantityPosts,
    		'quantityCategories' => $quantityCategories,
    		'quantityTags'=>$quantityTags,
    		'quantityUsers'=>$quantityUsers,
            'topPosts'=>$topPosts,
            'read'=>$read,
            'i'=>$i,
    		]);
    }
}
