@extends('layouts.master')

@section('content')
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.3&appId=415378075742265&autoLogAppEvents=1"></script>
<section class="s-content s-content--narrow s-content--no-padding-bottom">

        <article class="row format-standard">

            <div class="s-content__header col-full">
                <h1 class="s-content__header-title">
                    {{$post->title}}
                </h1>
                <ul class="s-content__header-meta">
                    <li class="date">{{$post->created_at}}</li>
                    <li class="cat">
                        Trong
                        <a href="/category/{{$post->category->slug}}">{{$post->category->name}}</a>
                    </li>
                </ul>
            </div> <!-- end s-content__header -->
    
            <div class="s-content__media col-full">
                <div class="s-content__post-thumb">
                    <img src="{{$post->thumbnail}}" 
                         sizes="(max-width: 2000px) 100vw, 2000px" alt=" {{$post->title}}" >
                </div>
            </div> <!-- end s-content__media -->

            <div class="col-full s-content__main">

                {!!$post->content!!}

                <p class="s-content__tags">
                    <span>Post Tags</span>

                    <span class="s-content__tag-list">
                    	 @foreach($post->tags as $tag)
                        <a href="/tag/{{$tag->slug}}">{{$tag->name}}</a>
                        @endforeach
                    </span>
                </p> <!-- end s-content__tags -->

                <div class="s-content__author">
                    <img src="images/avatars/user-03.jpg" alt="">

                    <div class="s-content__author-about">
                        <h4 class="s-content__author-name">
                        	Đăng bởi:
                            <a href="#0">{{$user->name}}</a>
                        </h4>
                    </div>
                </div>

               <!--  <div class="s-content__pagenav">
                   <div class="s-content__nav">
                       <div class="s-content__prev">
                           <a href="#0" rel="prev">
                               <span>Previous Post</span>
                               Tips on Minimalist Design 
                           </a>
                       </div>
                       <div class="s-content__next">
                           <a href="#0" rel="next">
                               <span>Next Post</span>
                               Less Is More 
                           </a>
                       </div>
                   </div>
               </div> end s-content__pagenav -->

            </div> <!-- end s-content__main -->

        </article>



        <!-- comments
        ================================================== -->
        <div class="comments-wrap">

            <div id="comments" class="row">
                <div class="col-full">
 <div class="fb-comments" data-href="http://net.blog.laravel/{{$post->slug}}" data-width="700" data-numposts="5"></div>


                    <!-- respond
                    ================================================== -->
                    <div class="respond">

                        

                    </div> <!-- end respond -->

                </div> <!-- end col-full -->

            </div> <!-- end row comments -->
        </div> <!-- end comments-wrap -->

    </section>

@endsection