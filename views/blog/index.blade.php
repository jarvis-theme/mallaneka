<div class="container">
@if ( is_login())
    <header class="page-header">
        <h1 class="page-title">Our Blog</h1>
    </header>
    <div class="row row-col-border" data-gutter="60">
    
        <div class="col-md-9">
            @if(count(list_blog(null, @$blog_category)) > 0)
                @foreach(list_blog(null, @$blog_category) as $key=>$value)
                <article class="blog-post">
                    <h5 class="blog-post-title"><a href="{{blog_url($value)}}">{{$value->judul}}</a></h5>
                    @if(imgString($value->isi)!=null)
                    <a href="{{blog_url($value)}}">
                        <img class="full-width img-rounded" src="{{imgString($value->isi)}}" alt="{{$value->judul}}" title="{{$value->judul}}" />
                    </a>
                    @endif
                    <p class="blog-post-caption">{{shortDescription($value->isi, 330)}}</p>
                    <ul class="blog-post-meta">
                        <li>{{ waktuTgl($value->created_at) }}</li>
                        @if(!is_null($value->authors))
                        <li>by <a href="#">{{ $value->authors->nama }}</a></li>
                        @endif
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
    <div class="gap"></div>
</div>