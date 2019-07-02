@extends('layouts.master')

@section('content')
<div id="main" class="penci-main-sticky-sidebar">
	<div class="theiaStickySidebar">
		<article id="post-852" class="post type-post status-publish hentry"><div class="header-standard header-classic single-header">
			<div class="penci-standard-cat">
				<span class="cat">
					@if(isset($post_categories))
					@foreach($post_categories as $post_category)
					<a class="penci-cat-name" href="{{asset('')}}category/{{$post_category->slug}}" rel="category tag" style="font-size: 18px; color: red;">{{$post_category->name}}</a>
					@endforeach
					@endif
				</span>
			</div>

			<h1 class="post-title single-post-title entry-title" style="margin-bottom: 50px; margin-top: 50px;font-family: 'Tangerine';font-size: 70px;text-transform: none!important;">{{$post->title}}</h1>
			<div style="width: 80%; margin: auto;font-family: 'Dancing Script'; font-size: 25px">
				<span>{{$post->description}}</span>
			</div>
			<div class="post-box-meta-single" style="margin-bottom: 80px; margin-top: 70px; background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIzOSIgaGVpZ2h0PSIxMiIgdmlld0JveD0iMCAwIDM5IDEyIj4NCiAgPHBhdGggZmlsbD0iIzAwMCIgZD0iTTU3NC40NTEsMjk1MC4zMWMtMi4zNTIsMi40MS00LjU3NCw0LjY5LTkuMDE3LDQuNjlzLTYuNjY0LTIuMjgtOS4wMTYtNC42OWMtMi40MjMtMi40OS01LjE3LTUuMzEtMTAuNDcyLTUuMzF2MmM0LjQ0MiwwLDYuNjY0LDIuMjgsOS4wMTYsNC42OSwyLjQyNCwyLjQ5LDUuMTcsNS4zMSwxMC40NzIsNS4zMXM4LjA1LTIuODIsMTAuNDczLTUuMzFjMi4zNTMtMi40MSw0LjU3NC00LjY5LDkuMDE3LTQuNjl2LTJDNTc5LjYyMiwyOTQ1LDU3Ni44NzUsMjk0Ny44Miw1NzQuNDUxLDI5NTAuMzFaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtNTQ1LjkzOCAtMjk0NSkiLz4NCjwvc3ZnPg0K') 50% repeat-x;">
				<span style="border: 3px solid black; padding-top: 8px;padding-bottom:8px;padding-left:15px;padding-right:15px;font-family: 'Inconsolata', monospace; color: black; font-weight: bolder;background-color: white">Posted {{date('M j, Y', strtotime($post->created_at))}} by {{$user->name}}</span>
			</div>
		</div>
		<div class="post-image">
			<a href="http://max.soledad.pencidesign.com/soledad-food/wp-content/uploads/sites/2/2017/07/waffle.jpg" data-rel="penci-gallery-image-content">
				<img class="attachment-penci-full-thumb size-penci-full-thumb penci-lazy wp-post-image" alt="Vegan Fruit Waffle Recipe" title="waffle" src="{{$post->thumbnail}}" style="width: 100%;">
			</a>				
		</div>
		<div class="post-entry blockquote-style-1">
			<div class="inner-post-entry entry-content">
				{!!$post->content!!}
			</div>
		</div>


		<div class="tags-share-box center-box">
			<span class="single-comment-o"><i class="fa fa-comment-o"></i>3 comments</span>
			<div class="post-share">
				<span class="count-number-like">13</span><a class="penci-post-like single-like-button" data-post_id="852" title="Like" data-like="Like" data-unlike="Unlike"><i class="fa fa-heart-o"></i></a>					
				<div class="list-posts-share"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://soledad.pencidesign.com/soledad-food/vegan-fruit-waffle-recipe/"><i class="fa fa-facebook"></i><span class="dt-share">Facebook</span></a><a target="_blank" href="https://twitter.com/intent/tweet?text=Check%20out%20this%20article:%20Vegan%20Fruit%20Waffle%20Recipe%20-%20http://soledad.pencidesign.com/soledad-food/vegan-fruit-waffle-recipe/"><i class="fa fa-twitter"></i><span class="dt-share">Twitter</span></a><a target="_blank" href="https://plus.google.com/share?url=http://soledad.pencidesign.com/soledad-food/vegan-fruit-waffle-recipe/"><i class="fa fa-google-plus"></i><span class="dt-share">Google +</span></a><a data-pin-do="none" target="_blank" href="https://pinterest.com/pin/create/button/?url=http://soledad.pencidesign.com/soledad-food/vegan-fruit-waffle-recipe/&#038;media=http://max.soledad.pencidesign.com/soledad-food/wp-content/uploads/sites/2/2017/07/waffle.jpg&#038;description=Vegan%20Fruit%20Waffle%20Recipe"><i class="fa fa-pinterest"></i><span class="dt-share">Pinterest</span></a>
				</div>				
			</div>
		</div>

		<div class="post-author">
			<div class="author-img">
				<img alt='Sonia' src='http://max.soledad.pencidesign.com/soledad-food/wp-content/uploads/sites/2/2017/07/Sonia_avatar_1499420366-100x100.jpg' class='avatar avatar-100 photo' height='100' width='100' />	</div>
				<div class="author-content">
					<h5><a href="http://soledad.pencidesign.com/soledad-food/author/food/" title="Posts by Sonia" rel="author">Sonia</a></h5>
					<p>I am Sonia and this blog is where I write about the food I make. I was born with love for food and cooking. Cooking is the way my creative side comes out. You will find here a lot of healthy recipes that are not boring. Welcome to my Blog!</p>
					<a target="_blank" class="author-social" href="http://pencidesign.com/"><i class="fa fa-globe"></i></a>
					<a target="_blank" class="author-social" href="http://facebook.com/pencidesign"><i class="fa fa-facebook"></i></a>
					<a target="_blank" class="author-social" href="http://twitter.com/pencidesign"><i class="fa fa-twitter"></i></a>
					<a target="_blank" class="author-social" href="http://plus.google.com/pencidesign?rel=author"><i class="fa fa-google-plus"></i></a>
					<a target="_blank" class="author-social" href="http://instagram.com/pencidesign"><i class="fa fa-instagram"></i></a>
					<a target="_blank" class="author-social" href="http://pinterest.com/pencidesign"><i class="fa fa-pinterest"></i></a>
					<a target="_blank" class="author-social" href="http://pencidesign.tumblr.com/"><i class="fa fa-tumblr"></i></a>
				</div>
			</div>	
			<div class="post-pagination">
				<div class="prev-post">
					<div class="prev-post-inner">
						<div class="prev-post-title">
							<span>previous post</span>
						</div>
						<a href="http://soledad.pencidesign.com/soledad-food/berry-mascarpone-layer-cake/">
							<div class="pagi-text">
								<h5 class="prev-title">Berry Mascarpone Layer Cake</h5>
							</div>
						</a>
					</div>
				</div>
			</div>	
			<div class="post-related">
				<div class="post-title-box"><h4 class="post-box-title">You may also like</h4></div>
				<div class="penci-owl-carousel penci-owl-carousel-slider penci-related-carousel" data-lazy="true" data-item="3" data-desktop="3" data-tablet="2" data-tabsmall="2" data-auto="false" data-speed="300" data-dots="true">
					<div class="item-related">
						<a class="related-thumb penci-image-holder owl-lazy" data-src="http://max.soledad.pencidesign.com/soledad-food/wp-content/uploads/sites/2/2017/07/cake-480x650.jpg" href="http://soledad.pencidesign.com/soledad-food/berry-mascarpone-layer-cake/" title="Berry Mascarpone Layer Cake">
						</a>
						<h3><a href="http://soledad.pencidesign.com/soledad-food/berry-mascarpone-layer-cake/">Berry Mascarpone Layer Cake</a></h3>
						<span class="date">July 7, 2017</span>
					</div>
					<div class="item-related">
						<a class="related-thumb penci-image-holder owl-lazy" data-src="http://max.soledad.pencidesign.com/soledad-food/wp-content/uploads/sites/2/2017/07/featured6-480x650.jpg" href="http://soledad.pencidesign.com/soledad-food/post-demo-3/" title="Creamy Vegan Pumpkin Soup">
						</a>
						<h3><a href="http://soledad.pencidesign.com/soledad-food/post-demo-3/">Creamy Vegan Pumpkin Soup</a></h3>
						<span class="date">July 7, 2017</span>
					</div>
					<div class="item-related">
						<a class="related-thumb penci-image-holder owl-lazy" data-src="http://max.soledad.pencidesign.com/soledad-food/wp-content/uploads/sites/2/2017/07/banana-480x650.jpg" href="http://soledad.pencidesign.com/soledad-food/orange-banana-smoothie-recipe/" title="Orange Banana Smoothie Recipe">
						</a>
						<h3><a href="http://soledad.pencidesign.com/soledad-food/orange-banana-smoothie-recipe/">Orange Banana Smoothie Recipe</a></h3>
						<span class="date">July 7, 2017</span>
					</div>
					<div class="item-related">
						<a class="related-thumb penci-image-holder owl-lazy" data-src="http://max.soledad.pencidesign.com/soledad-food/wp-content/uploads/sites/2/2017/07/stefan-johnson-480x650.jpg" href="http://soledad.pencidesign.com/soledad-food/beer-battered-broccoli-bites/" title="Beer-Battered Broccoli Bites">
						</a>
						<h3><a href="http://soledad.pencidesign.com/soledad-food/beer-battered-broccoli-bites/">Beer-Battered Broccoli Bites</a></h3>
						<span class="date">July 7, 2017</span>
					</div>
					<div class="item-related">
						<a class="related-thumb penci-image-holder owl-lazy" data-src="http://max.soledad.pencidesign.com/soledad-food/wp-content/uploads/sites/2/2017/07/lauren-lester-shrimp-480x650.jpg" href="http://soledad.pencidesign.com/soledad-food/shrimp-and-vegetable-soup/" title="Shrimp and Vegetable Soup">
						</a>
						<h3><a href="http://soledad.pencidesign.com/soledad-food/shrimp-and-vegetable-soup/">Shrimp and Vegetable Soup</a></h3>
						<span class="date">July 7, 2017</span>
					</div>
					<div class="item-related">
						<a class="related-thumb penci-image-holder owl-lazy" data-src="http://max.soledad.pencidesign.com/soledad-food/wp-content/uploads/sites/2/2017/07/toa-heftiba-480x650.jpg" href="http://soledad.pencidesign.com/soledad-food/lemon-blueberry-bread-recipe/" title="Lemon Blueberry Bread Recipe">
						</a>
						<h3><a href="http://soledad.pencidesign.com/soledad-food/lemon-blueberry-bread-recipe/">Lemon Blueberry Bread Recipe</a></h3>
						<span class="date">July 7, 2017</span>
					</div>
					<div class="item-related">
						<a class="related-thumb penci-image-holder owl-lazy" data-src="http://max.soledad.pencidesign.com/soledad-food/wp-content/uploads/sites/2/2017/07/breakfast-480x650.jpg" href="http://soledad.pencidesign.com/soledad-food/vegan-hot-oatmeal-recipe/" title="Vegan Hot Oatmeal Recipe">
						</a>
						<h3><a href="http://soledad.pencidesign.com/soledad-food/vegan-hot-oatmeal-recipe/">Vegan Hot Oatmeal Recipe</a></h3>
						<span class="date">July 7, 2017</span>
					</div>
					<div class="item-related">
						<a class="related-thumb penci-image-holder owl-lazy" data-src="http://max.soledad.pencidesign.com/soledad-food/wp-content/uploads/sites/2/2017/07/jennifer-pallian-480x650.jpg" href="http://soledad.pencidesign.com/soledad-food/fresh-cherry-cake-recipe/" title="Fresh Cherry Cake Recipe">
						</a>
						<h3><a href="http://soledad.pencidesign.com/soledad-food/fresh-cherry-cake-recipe/">Fresh Cherry Cake Recipe</a></h3>
						<span class="date">July 7, 2017</span>
					</div>
					<div class="item-related">
						<a class="related-thumb penci-image-holder owl-lazy" data-src="http://max.soledad.pencidesign.com/soledad-food/wp-content/uploads/sites/2/2017/07/brooke-lark-480x650.jpg" href="http://soledad.pencidesign.com/soledad-food/fruit-and-cheese-platter-recipe/" title="Fruit and Cheese Platter Recipe">
						</a>
						<h3><a href="http://soledad.pencidesign.com/soledad-food/fruit-and-cheese-platter-recipe/">Fruit and Cheese Platter Recipe</a></h3>
						<span class="date">July 7, 2017</span>
					</div>
				</div>
			</div>	
			<div class="post-comments" id="comments">
				<div class="post-title-box"><h4 class="post-box-title">3 comments</h4></div><div class='comments'>		<div class="comment byuser comment-author-food bypostauthor even thread-even depth-1" id="comment-53" itemprop="" itemscope="itemscope" itemtype="http://schema.org/UserComments">
					<meta itemprop="discusses" content="Vegan Fruit Waffle Recipe"/>
					<link itemprop="url" href="#comment-53">
					<div class="thecomment">
						<div class="author-img">
							<img alt='Sonia' src='http://max.soledad.pencidesign.com/soledad-food/wp-content/uploads/sites/2/2017/07/Sonia_avatar_1499420366-100x100.jpg' class='avatar avatar-100 photo' height='100' width='100' />				</div>
							<div class="comment-text">
								<span class="author" itemprop="creator" itemtype="http://schema.org/Person"><span itemprop="name"><a href='http://pencidesign.com/' rel='external nofollow' class='url'>Sonia</a></span></span>
								<span class="date" datetime="2017-07-07T09:44:51+00:00"title="Friday, July 7, 2017, 9:44 am"itemprop="commentTime"><i class="fa fa-clock-o"></i>July 7, 2017 - 9:44 am</span>
								<div class="comment-content" itemprop="commentText"><p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere.</p>
								</div>
								<span class="reply">
									<a rel='nofollow' class='comment-reply-link' href='http://soledad.pencidesign.com/soledad-food/vegan-fruit-waffle-recipe/?replytocom=53#respond' onclick='return addComment.moveForm( "comment-53", "53", "respond", "852" )' aria-label='Reply to Sonia'>Reply</a>
								</span>
							</div>
						</div>
						<div class="comment byuser comment-author-food bypostauthor odd alt depth-2" id="comment-59" itemprop="" itemscope="itemscope" itemtype="http://schema.org/UserComments">
							<meta itemprop="discusses" content="Vegan Fruit Waffle Recipe"/>
							<link itemprop="url" href="#comment-59">
							<div class="thecomment">
								<div class="author-img">
									<img alt='Sonia' src='http://max.soledad.pencidesign.com/soledad-food/wp-content/uploads/sites/2/2017/07/Sonia_avatar_1499420366-100x100.jpg' class='avatar avatar-100 photo' height='100' width='100' />
								</div>
								<div class="comment-text">
									<span class="author" itemprop="creator" itemtype="http://schema.org/Person"><span itemprop="name"><a href='http://pencidesign.com/' rel='external nofollow' class='url'>Sonia</a></span></span>
									<span class="date" datetime="2017-07-07T09:45:23+00:00"title="Friday, July 7, 2017, 9:45 am"itemprop="commentTime"><i class="fa fa-clock-o"></i>July 7, 2017 - 9:45 am</span>
									<div class="comment-content" itemprop="commentText"><p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil.</p>
									</div>
									<span class="reply">
										<a rel='nofollow' class='comment-reply-link' href='http://soledad.pencidesign.com/soledad-food/vegan-fruit-waffle-recipe/?replytocom=59#respond' onclick='return addComment.moveForm( "comment-59", "59", "respond", "852" )' aria-label='Reply to Sonia'>Reply</a>
									</span>
								</div>
							</div>
						</div><!-- #comment-## -->
					</div><!-- #comment-## -->
					<div class="comment byuser comment-author-food bypostauthor even thread-odd thread-alt depth-1" id="comment-56" itemprop="" itemscope="itemscope" itemtype="http://schema.org/UserComments">
						<meta itemprop="discusses" content="Vegan Fruit Waffle Recipe"/>
						<link itemprop="url" href="#comment-56">
						<div class="thecomment">
							<div class="author-img">
								<img alt='Sonia' src='http://max.soledad.pencidesign.com/soledad-food/wp-content/uploads/sites/2/2017/07/Sonia_avatar_1499420366-100x100.jpg' class='avatar avatar-100 photo' height='100' width='100' />
							</div>
							<div class="comment-text">
								<span class="author" itemprop="creator" itemtype="http://schema.org/Person"><span itemprop="name"><a href='http://pencidesign.com/' rel='external nofollow' class='url'>Sonia</a></span></span>
								<span class="date" datetime="2017-07-07T09:45:07+00:00"title="Friday, July 7, 2017, 9:45 am"itemprop="commentTime"><i class="fa fa-clock-o"></i>July 7, 2017 - 9:45 am</span>
								<div class="comment-content" itemprop="commentText"><p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore.</p>
								</div>
								<span class="reply">
									<a rel='nofollow' class='comment-reply-link' href='http://soledad.pencidesign.com/soledad-food/vegan-fruit-waffle-recipe/?replytocom=56#respond' onclick='return addComment.moveForm( "comment-56", "56", "respond", "852" )' aria-label='Reply to Sonia'>Reply</a>
								</span>
							</div>
						</div>
					</div><!-- #comment-## -->
				</div>
				<div id='comments_pagination'></div>	
				<div id="respond" class="comment-respond">
					<h3 id="reply-title" class="comment-reply-title"><span>Leave a Comment</span> <small><a rel="nofollow" id="cancel-comment-reply-link" href="/soledad-food/vegan-fruit-waffle-recipe/#respond" style="display:none;">Cancel Reply</a></small></h3>			
					<form action="http://soledad.pencidesign.com/soledad-food/wp-comments-post.php" method="post" id="commentform" class="comment-form">
						<p class="comment-form-comment"><textarea id="comment" name="comment" cols="45" rows="8" placeholder="Your Comment" aria-required="true"></textarea></p><p class="comment-form-author"><input id="author" name="author" type="text" value="" placeholder="Name*" size="30" aria-required='true' /></p>
						<p class="comment-form-email"><input id="email" name="email" type="text" value="" placeholder="Email*" size="30" aria-required='true' /></p>
						<p class="comment-form-url"><input id="url" name="url" type="text" value="" placeholder="Website" size="30" /></p>
						<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes" /><span class="comment-form-cookies-text" for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</span></p>
						<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Submit" /> <input type='hidden' name='comment_post_ID' value='852' id='comment_post_ID' />
							<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
						</p>			
					</form>
				</div><!-- #respond -->
			</div> <!-- end comments div -->
		</article>					
	</div>
</div>

@endsection