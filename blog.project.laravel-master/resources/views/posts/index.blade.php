@extends('layouts.master')

@section('slider')

<div class="container">
	<div class="penci-owl-carousel penci-owl-featured-area" data-item="3" data-desktop="3" data-tablet="2" data-tabsmall="1"data-style="style-10" data-auto="true" data-autotime="4000" data-speed="400" data-loop="true">
		@if(isset($posts))
		@foreach($posts as $post)
		<div class="item">
			<div class="wrapper-item wrapper-item-classess">
				<div class="penci-item-mag penci-item-1">
					<img class="penci-image-holder owl-lazy" style="height: 500px" src="{{$post->thumbnail}}" title="{{$post->title}}">
					<div class="penci-slide-overlay penci-slider7-overlay">
						<a class="overlay-link" href="{{asset('')}}blog/{{$post->slug}}"></a>
						<div class="penci-mag-featured-content">
							<div class="feat-text">
								<h3><a title="Yogurt and Fruit Parfaits" href="{{asset('')}}blog/{{$post->slug}}">{{$post->title}}</a></h3>
								<div class="feat-meta">
									<span class="feat-time">{{date('M j, Y', strtotime($post->created_at))}}</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
		@endif
	</div>
</div>

@endsection

@section('content')

<div id="main" class="penci-layout-grid penci-main-sticky-sidebar">
	<div class="theiaStickySidebar">
		<div class="penci-wrapper-posts-content">
			<ul class="penci-wrapper-data penci-grid">
				@if(isset($posts))	
				@foreach($posts as $post)	
				<li class="grid-style">
					<article id="post-852" class="item hentry">
						<div class="thumbnail">
							<img class="penci-image-holder penci-lazy" style="height: 500px" src="{{$post->thumbnail}}" title="{{$post->title}}">
						</div>
						<div class="grid-header-box">
							<span class="cat">
								<a class="penci-cat-name" href="http://soledad.pencidesign.com/soledad-food/category/recipes/breakfast/"  rel="category tag">Breakfast</a>
								<a class="penci-cat-name" href="http://soledad.pencidesign.com/soledad-food/category/recipes/vegetarians/"  rel="category tag">Vegetarians</a>
							</span>

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
								<p>{{$post->description}}&hellip;</p>
							</div>
						</article>
					</li>	
					@endforeach
					@endif
				</ul>						
				<div class="penci-pagination">
					<div class="newer">
						<div class="disable-url">
							<a href="{{$posts->previousPageUrl()}}">
								<span><i class="fa fa-angle-left"></i> Newer Posts</span>
							</a>
						</div>											
					</div>
					<div class="older">
						<a href="{{$posts->nextPageUrl()}}">
							<span>Older Posts <i class="fa fa-angle-right"></i></span>
						</a>											
					</div>
				</div>
			</div>
		</div>
	</div>


	@endsection