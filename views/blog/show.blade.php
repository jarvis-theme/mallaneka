<div class="container">
    <header class="page-header">
        <h1 class="page-title">{{$detailblog->judul}}</h1>
    </header>
    <div class="row row-col-border" data-gutter="60">
        <div class="col-md-9">
            <article class="blog-post">
                <!-- <a href="blog-post.html">
                    <img class="full-width img-rounded" src="img/960x480.png" alt="Image Alternative text" title="Image Title" />
                </a> -->
                <!-- <p class="blog-post-caption">Purus rutrum parturient venenatis massa cursus congue mi himenaeos integer aenean consectetur lacinia potenti elit posuere est senectus congue quisque volutpat vehicula litora erat dictumst scelerisque parturient parturient vel
                    nisl</p> -->
                <ul class="blog-post-meta">
                	<li>{{waktuTgl($detailblog->updated_at)}}</li>
                    <li>by <a href="#">{{is_null($detailblog->authors) ? '-':$detailblog->authors->nama}}</a>
                    </li>
                </ul>
                <div class="blog-post-body">
                	<p>{{$detailblog->isi}}</p>
                </div>
            </article>
            <hr />
            <form>
                <!-- <div class="row">
            		<h3 class="widget-title">Leave a Comment</h3>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Name *</label>
                            <input class="form-control" type="text" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>E-mail *</label>
                            <input class="form-control" type="text" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Website</label>
                            <input class="form-control" type="text" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Comment</label>
                    <textarea class="form-control"></textarea>
                </div>
                <input class="btn btn-primary" type="submit" value="Leave a Comment" /> -->
                @if(isset($next))	
					<div class="pull-right"><a href="{{$next->slug}}" class="btn btn-info">Next Post &raquo;</a></div>
				@endif
				@if(isset($prev))	
					<div class="pull-left"><a href="{{$prev->slug}}" class="btn btn-info">&laquo; Previous Post</a></div>
				@endif	
            </form>
            <div class="gap gap-small"></div>
            <hr />
            <!-- <h3 class="widget-title">8 Comments</h3> -->
            <!-- START COMMENTS -->
            {{$fbscript}}
			{{fbcommentbox(blog_url($detailblog), '100%', '5', 'light')}} 
            <!-- END COMMENTS -->
            <div class="gap gap-small"></div>
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
</div>
