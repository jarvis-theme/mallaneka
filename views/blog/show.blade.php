<div class="container">
@if ( is_login())
    <header class="page-header">
        <h1 class="page-title">{{$detailblog->judul}}</h1>
    </header>
    <div class="row row-col-border" data-gutter="60">
        <div class="col-md-9">
            <article class="blog-post">
                <ul class="blog-post-meta">
                    <li>{{ waktuTgl($detailblog->created_at) }}</li>
                    @if(!is_null($detailblog->authors))
                    <li>by <a href="#">{{ $detailblog->authors->nama }}</a></li>
                    @endif
                </ul>
                <div class="blog-post-body">
                    <p>{{ $detailblog->isi }}</p>
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
                    <div class="pull-right"><a href="{{$next->slug}}" class="btn btn-info">Next Post »</a></div>
                @endif
                @if(isset($prev))   
                    <div class="pull-left"><a href="{{$prev->slug}}" class="btn btn-info">« Previous Post</a></div>
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
                <section class="blog-sidebar-section">
                    <h3 class="widget-title-sm">Search</h3>
                    <form action="{{ url('search') }}" method="post">
                        <input class="form-control" type="text" name="search" required />
                    </form>
                </section>
                <section class="blog-sidebar-section">
                    <h3 class="widget-title-sm">Recent Posts</h3>
                    <ul class="blog-sidebar-posts">
                        @foreach(recentBlog() as $recent)
                        <li>
                            <h5><a href="{{blog_url($recent)}}">{{$recent->judul}}</a></h5>
                            <p>{{waktuTgl($recent->created_at)}}</p>
                        </li>
                        @endforeach
                    </ul>
                </section>
                <section class="blog-sidebar-section">
                    <h3 class="widget-title-sm">Tags</h3>
                    <ul class="blog-sidebar-tags">
                        @foreach(list_blog_category() as $key=>$value)
                            <li><a href="{{blog_category_url($value)}}">{{$value->nama}}</a></li>
                        @endforeach
                    </ul>
                </section>
                @if(count(vertical_banner()) > 0)
                <section class="blog-sidebar-section">
                    <h3 class="widget-title-sm">Banner</h3>
                    @foreach(vertical_banner() as $key=> $item)
                    @if($key>2)
                    <a href="{{url($item->url)}}"><img src="{{url(banner_image_url($item->gambar))}}" /></a>
                    @endif
                    @endforeach
                </section>
                @endif
            </aside>
        </div>
    </div>
     @else
        <div class="gap"></div>
        <div class="col-md-12">
            <div class="text-center">
                <h1 class="title-404">404</h1>
                <p class="lead">Sorry, you are not authorize to access this page.</p><a href="{{url('member')}}" class="btn btn-primary btn-lg"><i class="fa fa-user"></i>Login First</a>
            </div>
        </div>
    @endif
</div>
