@extends('layouts.master')

@section('content')
<section class="s-content">
	<div class="s-content__header col-full">
		<p class=" text-center">
			Tìm kiếm
		</p>
		<h1 class="s-content__header-title">
			{{$search}}
		</h1>
	</div> 


	<div class="s-content__header col-full">
		<p class=" text-center">
			Bài viết
		</p>
		
	</div>

	<div class="row masonry-wrap">
		<div class="masonry">
			<div class="grid-sizer"></div>
			@if(isset($sposts))
			@foreach($sposts as $post)
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
							<a href="/tag/{{$tag->slug}}">{{$tag->name}}</a> 
							@endforeach
						</span>
					</div>
				</div>

			</article>
			@endforeach
			@endif

			


		</div>
		
	</div>

	
	<div class="s-content__header col-full">
		<p class=" text-center">
			Tag
		</p>
		
	</div>


	<div class="row masonry-wrap">
		<div class="masonry">
			<div class="grid-sizer"></div>
			@if(isset($tags))
			@foreach($stags as $tag)
			<article class="masonry__brick entry format-standard" data-aos="fade-up">

				<div class="entry__text">
					<div class="entry__header">

						
						<h1 class="entry__title"><a href="/tag/{{$tag->slug}}">{{$tag->name}}</a></h1>

					</div>
					
					
				</div>

			</article>
			@endforeach
			@endif




		</div>
		
	</div>

	<div class="s-content__header col-full">
		<p class=" text-center">
			Danh mục
		</p>
		
	</div>

	<div class="row masonry-wrap">
		<div class="masonry">
			<div class="grid-sizer"></div>
			@if(isset($scategories))
			@foreach($scategories as $category)
			<article class="masonry__brick entry format-standard" data-aos="fade-up">

				<div class="entry__thumb">
					<a href="/category/{{$category->slug}}" class="entry__thumb-link">
						<img src="{{$category->thumbnail}}"  alt="">
					</a>
				</div>

				<div class="entry__text">
					<div class="entry__header">

						<div class="entry__date">
							<a href="/category/{{$category->slug}}">{{$category->created_at}}</a>
						</div>
						<h1 class="entry__title"><a href="/category/{{$category->slug}}">{{$category->name}}</a></h1>

					</div>
					<div class="entry__excerpt">
						<p>
							{{$category->description}}
						</p>
					</div>
					
				</div>

			</article>
			@endforeach
			@endif


		</div>
		
	</div>
</section>

@endsection