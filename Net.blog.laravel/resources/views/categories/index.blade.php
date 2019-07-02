@extends('layouts.master')

@section('content')
<section class="s-content">
	<div class="s-content__header col-full">
		<p class=" text-center">
			Danh mục
		</p>
		<h1 class="s-content__header-title">
			{{$category->name}}
		</h1>
	</div> 

	<div class="row masonry-wrap">
		<div class="masonry">
			<div class="grid-sizer"></div>
			@if(isset($posts))
			@foreach($posts as $post)
			<article class="masonry__brick entry format-standard" data-aos="fade-up">

				<div class="entry__thumb">
					<a href="/blog/{{$post->slug}}" class="entry__thumb-link">
						<img src="{{$post->thumbnail}}"  alt="">
					</a>
				</div>

				<div class="entry__text">
					<div class="entry__header">

						<div class="entry__date">
							<a href="/blog/{{$post->slug}}">{{$post->created_at}}</a>
						</div>
						<h1 class="entry__title"><a href="/blog/{{$post->slug}}">{{$post->title}}</a></h1>

					</div>
					<div class="entry__excerpt">
						<p>
							{{$post->description}}
						</p>
					</div>
					<div class="entry__meta">
						<span class="entry__meta-links">                           	
							@foreach($post->tags as $tag)
							<a href="category.html">{{$tag->name}}</a> 
							@endforeach
						</span>
					</div>
				</div>

			</article>
			@endforeach
			@endif


		</div>
		<p class="text-center">{!! $posts->links() !!}</p>
	</div>
</section>
<!-- <script>
	$(document).ready(function(){

		$("section").removeClass("s-pageheader--home");

	});
</script> -->
@endsection