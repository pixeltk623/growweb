@extends('front.layouts.app')
@section('title', 'Grow With PHP - Best IT Training Institute in Vadodara')

@section('content')
<section class="page-header">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
          <div class="page-header-content">
            <h1>Blog</h1>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a href="#">Home</a>
              </li>
              <li class="list-inline-item">/</li>
              <li class="list-inline-item">
                  Blog
              </li>
            </ul>
          </div>
      </div>
    </div>
  </div>
</section>

<div class="page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
        		<article class="blog-post-item">
	<div class="post-thumb">
		<img src="assets/images/blog/news-1.jpg" alt="" class="img-fluid">
	</div>
	<div class="post-item mt-4">
		<div class="post-meta">
			<span class="post-date"><i class="fa fa-calendar-alt mr-2"></i>May 9, 2020</span>
			<span class="post-author"><i class="fa fa-user mr-2"></i>Admin</span>
			<span><a href="#" class="post-comment"><i class="fa fa-comments mr-2"></i>1 Comment</a></span>
		</div>
		<h2 class="post-title"><a href="blog-single.html">How to become a best sale marketer in a month!</a></h2>
		<div class="post-content">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, aliquam, aliquid. Eos eum, illo autem unde consequatur, obcaecati quam voluptatem repellat consequuntur repellendus delectus voluptas architecto, quos amet hic aliquid!</p>

			<a href="blog-single.html" class="read-more">More Details <i class="fa fa-angle-right ml-2"></i></a>
		</div>
	</div>
</article>

<article class="blog-post-item">
	<div class="post-thumb">
		<img src="assets/images/blog/news-2.jpg" alt="" class="img-fluid">
	</div>
	<div class="post-item mt-4">
		<div class="post-meta">
			<span class="post-date"><i class="fa fa-calendar-alt mr-2"></i>May 9, 2020</span>
			<span class="post-author"><i class="fa fa-user mr-2"></i>Admin</span>
			<span><a href="#" class="post-comment"><i class="fa fa-comments mr-2"></i>1 Comment</a></span>
		</div>
		<h2 class="post-title"><a href="blog-single.html">SEO trend to look for the best in 2020</a></h2>
	
		<div class="post-content">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, aliquam, aliquid. Eos eum, illo autem unde consequatur, obcaecati quam voluptatem repellat consequuntur repellendus delectus voluptas architecto, quos amet hic aliquid!</p>

			<a href="blog-single.html" class="read-more">More Details <i class="fa fa-angle-right ml-2"></i></a>
		</div>
	</div>
</article>

<article class="blog-post-item">
	<div class="post-thumb">
		<img src="assets/images/blog/news-3.jpg" alt="" class="img-fluid">
	</div>
	<div class="post-item mt-4">
		<div class="post-meta">
			<span class="post-date"><i class="fa fa-calendar-alt mr-2"></i>May 9, 2020</span>
			<span class="post-author"><i class="fa fa-user mr-2"></i>Admin</span>
			<span><a href="#" class="post-comment"><i class="fa fa-comments mr-2"></i>1 Comment</a></span>
		</div>
		<h2 class="post-title"><a href="blog-single.html">How To Make growth With Digital Marketing</a></h2>
		<div class="post-content">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, aliquam, aliquid. Eos eum, illo autem unde consequatur, obcaecati quam voluptatem repellat consequuntur repellendus delectus voluptas architecto, quos amet hic aliquid!</p>

			<a href="blog-single.html" class="read-more">More Details <i class="fa fa-angle-right ml-2"></i></a>
		</div>
	</div>
</article>


        		
        		<nav class="blog-pagination">
					<ul>
					  <li class="page-num active" ><a href="#">1</a></li>
					  <li class="page-num"><a href="#">2</a></li>
					  <li class="page-num"><a href="#">3</a></li>
					</ul>
				</nav>
      		</div>
      		<div class="col-md-4">
				<div class="blog-sidebar mt-5 mt-lg-0 mt-md-0">
    <div class="widget widget_search">
        <h4 class="widget-title">Search</h4>
        <form role="search" class="search-form">
            <input type="text" class="form-control" placeholder="Search">
            <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
        </form>
    </div>

     <div class="widget widget_news">
        <h4 class="widget-title">Latest Posts</h4>
        <ul class="recent-posts">
            <li>
                <div class="widget-post-thumb">
                    <a href="#"><img src="assets/images/blog/post-thumb-2.jpg" alt="" class="img-fluid"></a>
                </div>
                <div class="widget-post-body">
                    <span>10 april 2020</span>
                    <h6> <a href="#">Organic Food in your door</a></h6>
                </div>
            </li>
            <li>
                <div class="widget-post-thumb">
                    <a href="#"><img src="assets/images/blog/post-thumb-3.jpg" alt="" class="img-fluid"></a>
                </div>
                <div class="widget-post-body">
                    <span>10 april 2020</span>
                    <h6> <a href="#">Get high quality food</a></h6>
                </div>
            </li>
           
        </ul>
    </div>


    <div class="widget widget_categories">
        <h4 class="widget-title">Categories</h4>
        <ul>
          <li class="cat-item"><a href="#"><i class="fa fa-angle-right"></i>Web Design</a>(4)</li>
          <li class="cat-item"><a href="#"><i class="fa fa-angle-right"></i>Wordpress</a>(14)</li>
          <li class="cat-item"><a href="#"><i class="fa fa-angle-right"></i>Marketing</a>(24)</li>
          <li class="cat-item"><a href="#"><i class="fa fa-angle-right"></i>Design & dev</a>(6)</li>
        </ul>
    </div>

    <div class="widget widget_tag_cloud">
        <h4 class="widget-title">Tags</h4>
        <a href="#">Design</a>
        <a href="#">Development</a>
        <a href="#">UX</a>
        <a href="#">Marketing</a>
        <a href="#">Tips</a>
        <a href="#">Tricks</a>
        <a href="#">Ui</a>
        <a href="#">Free</a>
        <a href="#">Wordpress</a>
        <a href="#">bootstrap</a>
        <a href="#">Tutorial</a>
        <a href="#">Html</a>
    </div>

</div>
      		</div>
		</div>
	</div>
</div>



@endsection