<div class="gap"></div>

<div class="container">
	<div class="row" data-gutter="15">
		@foreach(vertical_banner() as $key=>$main_banner)
	    <div class="col-md-4">
	        <div class="banner" style="background-color:#83599A;">
	            <a class="banner-link" href="#"></a>
	            <!-- <div class="banner-caption-top-left">
	                <h5 class="banner-title">Backpack Collection</h5>
	                <p class="banner-desc">Don't Be Vague. Ask for Backpack .</p>
	                <p class="banner-shop-now">Shop Now <i class="fa fa-caret-right"></i>
	                </p>
	            </div> -->
	            <img class="" src="{{url(banner_image_url($main_banner->gambar))}}" alt="Image Alternative text" title="Image Title" />
	        </div>
	    </div>
	    @endforeach
	    <!-- <div class="col-md-4">
	        <div class="banner" style="background-color:#EF4D9C;">
	            <a class="banner-link" href="#"></a>
	            <div class="banner-caption-top-right">
	                <h5 class="banner-title">Best 2015 Tablets</h5>
	                <p class="banner-desc">Double the Pleasure, Double the Tablets.</p>
	                <p class="banner-shop-now">Shop Now <i class="fa fa-caret-right"></i>
	                </p>
	            </div>
	            <img class="banner-img" src="img/test_banner/2-i.png" alt="Image Alternative text" title="Image Title" style="bottom: -22px; left: 0; width: 235px;" />
	        </div>
	    </div>
	    <div class="col-md-4">
	        <div class="banner" style="background-color:#FEA92E;">
	            <a class="banner-link" href="#"></a>
	            <div class="banner-caption-bottom-left">
	                <h5 class="banner-title">Top Glasses</h5>
	                <p class="banner-desc">My Goodness, My Glasses!</p>
	                <p class="banner-shop-now">Shop Now <i class="fa fa-caret-right"></i>
	                </p>
	            </div>
	            <img class="banner-img" src="img/test_banner/3-i.png" alt="Image Alternative text" title="Image Title" style="top: -4px; right: -15px; width: 220px;" />
	        </div>
	    </div> -->
	</div>
    <div class="gap"></div>

    <h3 class="widget-title-lg">Home & Garden</h3>
    @foreach(list_product() as $key=>$myproduk)
	    @if($key==0)
	    <div class="row" data-gutter="15">
	    @endif

			@if($key<3)
	        <div class="col-md-4">
	            <div class="product ">
	            	
					<ul class="product-labels">
	            		@if($myproduk->hargaCoret>0)
							<li>{{discountPercent($myproduk->hargaJual,$myproduk->hargaCoret)}}</li>
						@endif
		            	@if(is_outstok($myproduk))
							<li>KOSONG</li>
						@else
							@if(is_terlaris($myproduk))
								<li>HOT</li>
							@endif
							@if(is_produkbaru($myproduk))
								<li>BARU</li>
							@endif
						@endif
	                </ul>
	                <div class="product-img-wrap">
	                    <img class="product-img-primary" src="{{product_image_url($myproduk->gambar1, 'medium')}}" alt="{{$myproduk->nama}}" title="{{$myproduk->nama}}" />
	                    <img class="product-img-alt" src="{{product_image_url($myproduk->gambar2, 'medium')}}" alt="{{$myproduk->nama}}" title="{{$myproduk->nama}}" />
	                </div>
	                <a class="product-link" href="{{product_url($myproduk)}}"></a>
	                <div class="product-caption">
	                    <ul class="product-caption-rating">
	                        <li class="rated"><i class="fa fa-star"></i>
	                        </li>
	                        <li class="rated"><i class="fa fa-star"></i>
	                        </li>
	                        <li class="rated"><i class="fa fa-star"></i>
	                        </li>
	                        <li><i class="fa fa-star"></i>
	                        </li>
	                        <li><i class="fa fa-star"></i>
	                        </li>
	                    </ul>
	                    <h5 class="product-caption-title">{{$myproduk->nama}}</h5>
	                    <div class="product-caption-price"><span class="product-caption-price-old">{{price($myproduk->hargaCoret)}}</span><span class="product-caption-price-new">{{price($myproduk->hargaJual)}}</span>
	                    </div>
	                    <!-- <ul class="product-caption-feature-list">
	                        <li>Free Shipping</li>
	                    </ul> -->
	                </div>
	            </div>
	        </div>
			@else
			<div class="col-md-3">
	            <div class="product product-sm-left ">
	                <ul class="product-labels"></ul>
	                <div class="product-img-wrap">
	                    <img class="product-img" src="{{product_image_url($myproduk->gambar1, 'medium')}}" alt="{{$myproduk->nama}}" title="{{$myproduk->nama}}" />
	                </div>
	                <a class="product-link" href="#"></a>
	                <div class="product-caption">
	                    <ul class="product-caption-rating">
	                        <li class="rated"><i class="fa fa-star"></i>
	                        </li>
	                        <li class="rated"><i class="fa fa-star"></i>
	                        </li>
	                        <li class="rated"><i class="fa fa-star"></i>
	                        </li>
	                        <li class="rated"><i class="fa fa-star"></i>
	                        </li>
	                        <li class="rated"><i class="fa fa-star"></i>
	                        </li>
	                    </ul>
	                    <h5 class="product-caption-title">{{$myproduk->nama}}</h5>
	                    <div class="product-caption-price"><span class="product-caption-price-new">{{price($myproduk->hargaJual)}}</span>
	                    </div>
	                    <!-- <ul class="product-caption-feature-list">
	                        <li>Free Shipping</li>
	                    </ul> -->
	                </div>
	            </div>
	        </div>
	        @endif
	        
		@if($key+1%4==0 || $key==2)
	    </div>
	    <div class="row" data-gutter="15">
	    @elseif(($key+1)==list_product()->count())
		</div>
	    @endif
    @endforeach
    <div class="gap"></div>

    <!-- BANNER -->
	<div class="row" data-gutter="15">
		@foreach(horizontal_banner() as $key=>$main_banner)
		 <div class="col-md-12">
		 	@if($key==0)
	        <div class="banner" style="background-color:{{$key==0?'#0290C7':'#0290C7'}};">
	            <a class="banner-link" href="{{url($main_banner->url)}}"></a>
	            <!-- <div class="banner-caption-left">
	                <h5 class="banner-title">Cooking Equipment from Top Chiefs</h5>
	                <p class="banner-desc">The Human Friendly Kitchen.</p>
	                <p class="banner-shop-now">Shop Now <i class="fa fa-caret-right"></i>
	                </p>
	            </div> -->
	            <img class="img" src="{{url(banner_image_url($main_banner->gambar))}}" alt="Image Alternative text" title="Image Title" />
	        </div>
	        @endif
	    </div>
        @endforeach
	</div>

    <div class="gap"></div>

    <h3 class="widget-title-lg">Deals Under $30</h3>
     @foreach(list_product() as $key=>$myproduk)
	    @if($key==0)
	    	<div class="row" data-gutter="15">
	    @endif
			<div class="col-md-3">
	            <div class="product product-sm-left ">
	                <ul class="product-labels"></ul>
	                <div class="product-img-wrap">
	                    <img class="product-img" src="{{product_image_url($myproduk->gambar1, 'medium')}}" alt="Image Alternative text" title="Image Title" />
	                </div>
	                <a class="product-link" href="#"></a>
	                <div class="product-caption">
	                    <ul class="product-caption-rating">
	                        <li class="rated"><i class="fa fa-star"></i>
	                        </li>
	                        <li class="rated"><i class="fa fa-star"></i>
	                        </li>
	                        <li class="rated"><i class="fa fa-star"></i>
	                        </li>
	                        <li class="rated"><i class="fa fa-star"></i>
	                        </li>
	                        <li class="rated"><i class="fa fa-star"></i>
	                        </li>
	                    </ul>
	                    <h5 class="product-caption-title">{{$myproduk->nama}}</h5>
	                    <div class="product-caption-price"><span class="product-caption-price-new">{{price($myproduk->hargaJual)}}</span>
	                    </div>
	                    <!-- <ul class="product-caption-feature-list">
	                        <li>Free Shipping</li>
	                    </ul> -->
	                </div>
	            </div>
	        </div>
		@if($key+1%4==0)
	    </div>
	    <div class="row" data-gutter="15">
	    @elseif(($key+1)==list_product()->count())
		</div>
	    @endif
    @endforeach
</div>

<div class="gap"></div>

<!-- <div class="slider-item-sm" style="background-color:#E66514;">
    <div class="container">
        <div class="slider-item-inner">
            <div class="slider-item-caption-left slider-item-caption-white">
                <h4 class="slider-item-caption-title">Time to Upgrade Your Smartphone</h4>
                <p class="slider-item-caption-desc">It's Smartphone Time.</p><a class="btn btn-lg btn-ghost btn-white" href="#">Shop Now</a>
            </div>
            <img class="slider-item-img" src="img/test_slider/7-i.png" alt="Image Alternative text" title="Image Title" style="right: 0; bottom: 0; width: 22%;" />
        </div>
    </div>
</div> -->
 <!-- BANNER -->
 <div class="container">
	<div class="row" data-gutter="15">
		@foreach(horizontal_banner() as $key=>$main_banner)
		 <div class="col-md-12">
		 	@if($key==1)
	        <div class="banner" style="background-color:{{$key==0?'#0290C7':'#0290C7'}};">
	            <a class="banner-link" href="{{url($main_banner->url)}}"></a>
	            <!-- <div class="banner-caption-left">
	                <h5 class="banner-title">Cooking Equipment from Top Chiefs</h5>
	                <p class="banner-desc">The Human Friendly Kitchen.</p>
	                <p class="banner-shop-now">Shop Now <i class="fa fa-caret-right"></i>
	                </p>
	            </div> -->
	            <img class="img" src="{{url(banner_image_url($main_banner->gambar))}}" alt="Image Alternative text" title="Image Title" />
	        </div>
	        @endif
	    </div>
        @endforeach
	</div>
</div>

<div class="gap"></div>

<div class="container">
    <h3 class="widget-title-lg">Shop by Collection</h3>
    <div class="row row-sm-gap" data-gutter="15">
    	@foreach(list_koleksi() as $koleksi)
        <div class="col-md-2">
            <a class="banner-category" href="{{koleksi_url($koleksi)}}">
                <img class="banner-category-img" src="{{koleksi_image_url($koleksi->gambar,'medium')}}" alt="{{$koleksi->nama}}" title="{{$koleksi->nama}}" />
                <h5 class="banner-category-title">{{$koleksi->nama}}</h5>
                <p class="banner-category-desc">{{$koleksi->produk->count()}}</p>
            </a>
        </div>
        @endforeach
    </div>
</div>
