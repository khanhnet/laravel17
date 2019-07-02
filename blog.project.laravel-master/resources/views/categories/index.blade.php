@extends('layouts.master')

@section('content')
<div id="main" class="penci-layout-grid penci-main-sticky-sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
	<div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static;">
		<div class="archive-box">
			<div class="title-bar">
				<span style="font-family: 'Tangerine';text-transform: none!important; font-size: 50px; font-weight: normal;">Category: </span><h1 style="font-family: 'Tangerine'; font-size: 80px; color: black;font-weight: bolder;text-transform: none!important;">{{$category->name}}</h1>
			</div>
		</div>
		<ul class="penci-wrapper-data penci-grid">
			@if(isset($posts_category))
			@foreach($posts_category as $post)
			<li class="grid-style">
				<article id="post-852" class="item hentry">
					<div class="thumbnail">
						<img class="penci-image-holder penci-lazy" src="{{$post->thumbnail}}" title="{{$post->title}}" style="display: inline-block;">
					</img>
				</div>
				<div class="grid-header-box">
					<span class="cat"><a class="penci-cat-name" href="http://soledad.pencidesign.com/soledad-food/category/recipes/breakfast/" rel="category tag">Breakfast</a><a class="penci-cat-name" href="http://soledad.pencidesign.com/soledad-food/category/recipes/vegetarians/" rel="category tag">Vegetarians</a></span>
					<h2 class="entry-title grid-title"><a href="{{asset('')}}blog/{{$post->slug}}">{{$post->title}}</a></h2>
					<div class="penci-hide-tagupdated">
						<span class="author-italic author vcard">by <a class="url fn n" href="http://soledad.pencidesign.com/soledad-food/author/food/">Sonia</a></span>
						<time class="entry-date published" datetime="2017-07-07T06:36:36+00:00">July 7, 2017</time><time class="penci-hide-tagupdated updated" datetime="2017-07-07T09:39:54+00:00">July 7, 2017</time>	</div>
						<div class="grid-post-box-meta">
							<span class="author-italic author vcard">by <a class="url fn n" href="http://soledad.pencidesign.com/soledad-food/author/food/">Sonia</a></span>
							<span><time class="entry-date published" datetime="2017-07-07T06:36:36+00:00">July 7, 2017</time><time class="penci-hide-tagupdated updated" datetime="2017-07-07T09:39:54+00:00">July 7, 2017</time></span>
						</div>
					</div>
					<div class="item-content entry-content">
						<p>{{$post->description}},…</p>
					</div>
				</article>
			</li>
			@endforeach
			@endif
		</ul>				
		<div class="penci-pagination">
			<div class="newer">
				<div class="disable-url">
					<a href="{{$posts_category->previousPageUrl()}}">
						<span><i class="fa fa-angle-left"></i> Newer Posts</span>
					</a>
				</div>											
			</div>
			<div class="older">
				<a href="{{$posts_category->nextPageUrl()}}">
					<span>Older Posts <i class="fa fa-angle-right"></i></span>
				</a>											
			</div>
		</div>
	</div>
</div>
@endsection