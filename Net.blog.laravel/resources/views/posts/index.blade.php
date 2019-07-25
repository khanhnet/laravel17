@extends('layouts.master')

@section('slider')
        <div class="pageheader-content row">
            <div class="col-full">

                <div class="featured">

                    <div class="featured__column featured__column--big">
                        <div class="entry" style="background-image:url('{{$lastest_posts[0]->thumbnail}}');">
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="/category/{{$lastest_posts[0]->category->slug}}">{{$lastest_posts[0]->category->name}}</a></span>

                                <h1><a href="/blog/{{$lastest_posts[0]->slug}}" title="">{{$lastest_posts[0]->title}}</a></h1>

                                <div class="entry__info">
                                    <a href="/blog/{{$lastest_posts[0]->slug}}" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/user-03.jpg" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="/blog/{{$lastest_posts[0]->slug}}">{{$lastest_posts[0]->user->name}}</a></li>
                                        <li>{{$lastest_posts[0]->created_at}}</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                            
                        </div> <!-- end entry -->
                    </div> <!-- end featured__big -->

                    <div class="featured__column featured__column--small">

                        <div class="entry" style="background-image:url('{{$lastest_posts[1]->thumbnail}}');">
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="/category/{{$lastest_posts[1]->category->slug}}">{{$lastest_posts[1]->category->name}}</a></span>

                                <h1><a href="/blog/{{$lastest_posts[1]->slug}}" title="">{{$lastest_posts[1]->title}}</a></h1>

                                <div class="entry__info">
                                    <a href="/blog/{{$lastest_posts[1]->slug}}" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/user-03.jpg" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="/blog/{{$lastest_posts[1]->slug}}">{{$lastest_posts[1]->user->name}}</a></li>
                                        <li>{{$lastest_posts[1]->created_at}}</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                          
                        </div> <!-- end entry -->
                         <div class="entry" style="background-image:url('{{$lastest_posts[2]->thumbnail}}');">
                            
                            <div class="entry__content">
                                <span class="entry__category"><a href="/category/{{$lastest_posts[2]->category->slug}}">{{$lastest_posts[2]->category->name}}</a></span>

                                <h1><a href="/blog/{{$lastest_posts[2]->slug}}" title="">{{$lastest_posts[2]->title}}</a></h1>

                                <div class="entry__info">
                                    <a href="/blog/{{$lastest_posts[2]->slug}}" class="entry__profile-pic">
                                        <img class="avatar" src="images/avatars/user-03.jpg" alt="">
                                    </a>

                                    <ul class="entry__meta">
                                        <li><a href="/blog/{{$lastest_posts[2]->slug}}">{{$lastest_posts[2]->user->name}}</a></li>
                                        <li>{{$lastest_posts[2]->created_at}}</li>
                                    </ul>
                                </div>
                            </div> <!-- end entry__content -->
                          
                        </div> <!-- end entry -->

                       

                    </div> <!-- end featured__small -->
                </div> <!-- end featured -->

            </div> <!-- end col-full -->
        </div> 

@endsection

@section('content')
<section class="s-content">

<div class="row masonry-wrap">
            <div class="masonry ">

                <div class="grid-sizer"></div>

                @if(isset($posts))
                @foreach($posts as $post)
                <span style="display: none;">{{$dem++}}</span>
                 @if($dem>3)

                <article class="masonry__brick entry format-standard " data-aos="fade-up">
                        
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
                @endif
                @endforeach
                @endif


         </div>
                <p class="text-center">{!! $posts->links() !!}</p>
         </div>
 </section>
	@endsection