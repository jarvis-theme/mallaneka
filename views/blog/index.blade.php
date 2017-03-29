<div class="container">
    <header class="page-header">
        <h1 class="page-title">Our Blog</h1>
    </header>
    <div class="row row-col-border" data-gutter="60">
        <div class="col-md-9">
			 @if(count(list_blog(null, @$blog_category)) > 0)
					 <!-- Each posts should be enclosed inside "entry" class" -->
					 <!-- Post one -->
					 @foreach(list_blog(null, @$blog_category) as $key=>$value)
						 <article class="blog-post">
                            <h5 class="blog-post-title"><a href="{{blog_url($value)}}">{{$value->judul}}</a></h5>
						 	@if(imgString($value->isi)!=null)
			                <a href="{{blog_url($value)}}">
			                    <img class="full-width img-rounded" src="{{imgString($value->isi)}}" alt="{{$value->judul}}" title="{{$value->judul}}" />
			                </a>
			                @endif
			                <p class="blog-post-caption">{{shortDescription($value->isi, 330)}}</p>
			                <ul
			                class="blog-post-meta">
			                    <!-- <li>in <a href="#">Digital</a>
			                    </li> -->
			                    <li>{{waktuTgl($value->updated_at)}}</li>
			                    <li>by <a href="#">{{is_null($value->authors) ? '-':$value->authors->nama}}</a>
			                    </li>
			                    </ul>
			            </article>
					 @endforeach
					 
					 <!-- Pagination -->
					  <nav>
		                <ul class="pagination category-pagination">
		                	{{list_blog(null, @$blog_category)->links()}}
		                </ul>
		            </nav>
					 <ul class="pagination">
					   
					 </ul> 
				  @else
					 <article>
						<p style="text-align: center"><i>Blog tidak ditemukan</i></p>
					 </article>
				  @endif
            

           
        </div>
        <div class="col-md-3">
            <aside>
            	@if(count(vertical_banner()) > 0)
            	<section class="blog-sidebar-section">
					<div class="widget" style="text-align: center;">
					<h4>Banner</h4>
					@foreach(vertical_banner() as $key=> $item)
					@if($key==1)
					<div>
					   <a href="{{url($item->url)}}"><img src="{{url(banner_image_url($item->gambar))}}" /></a>
					</div>
					@endif
					@endforeach
					</div>
				</section>
				 @endif
                <section class="blog-sidebar-section">
                    <h3 class="widget-title-sm">Search</h3>
                    <input class="form-control" type="text" />
                </section>
                <section class="blog-sidebar-section">
                    <h3 class="widget-title-sm">Recent Posts</h3>
                    <ul class="blog-sidebar-posts">
                        @foreach(recentBlog() as $recent)
                        <li>
                            <h5><a href="{{blog_url($recent)}}">{{$recent->judul}}</a></h5>
                            <p>{{waktuTgl($recent->updated_at)}}</p>
                        </li>
						@endforeach
                    </ul>
                </section>
                <!-- <section class="blog-sidebar-section">
                    <h3 class="widget-title-sm">Recent Comments</h3>
                    <ul class="blog-sidebar-comments">
                        <li>
                            <p class="blog-sidebar-comments-meta"><a href="#">Oliver Ross</a> on <a href="#">Transitional Styling</a>
                            </p>
                            <p class="blog-sidebar-comments-body">Netus rutrum venenatis duis praesent sapien nec justo nibh maecenas...</p>
                        </li>
                        <li>
                            <p class="blog-sidebar-comments-meta"><a href="#">Richard Jones</a> on <a href="#">Its payday, treat yourself!</a>
                            </p>
                            <p class="blog-sidebar-comments-body">Nec eu ultricies leo quisque libero vivamus velit phasellus libero...</p>
                        </li>
                        <li>
                            <p class="blog-sidebar-comments-meta"><a href="#">Cyndy Naquin</a> on <a href="#">Tumblr Tuesdays</a>
                            </p>
                            <p class="blog-sidebar-comments-body">Platea vivamus platea gravida iaculis nunc pulvinar ipsum iaculis viverra...</p>
                        </li>
                        <li>
                            <p class="blog-sidebar-comments-meta"><a href="#">Blake Hardacre</a> on <a href="#">Flannel shirt life</a>
                            </p>
                            <p class="blog-sidebar-comments-body">Netus cursus ligula inceptos quisque blandit facilisi per felis pharetra...</p>
                        </li>
                        <li>
                            <p class="blog-sidebar-comments-meta"><a href="#">Carl Butler</a> on <a href="#">Denim days</a>
                            </p>
                            <p class="blog-sidebar-comments-body">Lacus volutpat diam luctus malesuada inceptos laoreet pretium sodales integer...</p>
                        </li>
                    </ul>
                </section> -->
                <section class="blog-sidebar-section">
                    <h3 class="widget-title-sm">Tags</h3>
                    <ul class="blog-sidebar-tags">
                    	@foreach(list_blog_category() as $key=>$value)
							<li><a href="{{blog_category_url($value)}}">{{$value->nama}}</a></li>
						@endforeach
                    </ul>
                </section>
            </aside>
        </div>
    </div>
    <div class="gap"></div>
</div>