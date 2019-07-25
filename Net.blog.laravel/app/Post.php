<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
	//use SoftDeletes;

	protected $dates = ['created_at'];

	protected $fillable = [ 'title', 'thumbnail', 'description', 'content','slug', 'user_id', 'category_id', 'view_count' ];

	public function category(){
      return $this->belongsTo('\App\Category', 'category_id');
    }

	public function tags()
	{
		return $this->belongsToMany('\App\Tag', 'post_tags', 'post_id', 'tag_id');
	}

	public function user()
	{
		return $this->belongsTo('\App\User');
	}

}
