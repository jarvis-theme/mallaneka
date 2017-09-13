<!--<div class="gap visible-lg visible-md"></div>
<div class="gap visible-lg visible-md"></div>-->
<style>

    /* Opacity #2 */
    .hover12 figure:hover {
    	opacity: .5;
    }
    .hover12 figure img {
    	opacity: 1;
    }
    .hover12 figure:hover img {
    	opacity: .5;
    }
    .image-mid{
        width: 73%;
    }
    @media (min-width: 992px) and (max-width: 2000px) {
        .banner-costum{
            margin-left: 6% !important;
        }
        .image-banner{
            width: 100%;
            margin-top: -60px;
        }
        .left-banner{
            margin-left: 120px;
        }
        .right-banner{
            margin-left: -246px;
        }
    }
    @media (min-width: 308px) and (max-width: 991px){
        .image-banner{
            width: 125% !important;
        }
        .right-banner{
            margin-left: -40px !important;
        }
        .banner-costum{
            height: 200px !important;
        }
    }
</style>
<div class="container">
    <!--<div class="row banner-costum" data-gutter="15" style="height: 250px;text-align: center;">
        <div class="col-md-1" style="margin-left: 25px;"></div>
        @foreach(vertical_banner() as $key=>$main_banner)
        @if($key==1)
        <div class="col-md-3 col-sm-4 col-xs-4" style="margin: 100px 0px 0px 0px;">
        @else
        <div class="col-md-3 col-sm-4 col-xs-4">
        @endif
            <div class="banner hover12" style="text-align: center;">
                <figure>
                    <a class="banner-link" href="{{ url($main_banner->url) }}">
                        <img 
                        @if($key==0)
                        class="image-banner left-banner" style="border-radius: 0 0 55%;" alt="Men's"
                        @elseif($key==2)
                        class="image-banner right-banner" style="border-radius: 0 0 0 55%" alt="Woman's"
                        @else
                        class="image-mid" style="border-radius: 50%;" alt="Unisex"
                        @endif
                        src="{{url(banner_image_url($main_banner->gambar))}}" 
                        @if($key==0)
                        onmouseover="this.src='https://s3-ap-southeast-1.amazonaws.com/cdn.jarvis-store.com/mallaneka-upload/galeri/mens-hover.png'"
                        @elseif($key==1)
                        onmouseover="this.src='https://s3-ap-southeast-1.amazonaws.com/cdn.jarvis-store.com/mallaneka-upload/galeri/unisex-hover.png'"
                        @else
                        onmouseover="this.src='https://s3-ap-southeast-1.amazonaws.com/cdn.jarvis-store.com/mallaneka-upload/galeri/womens-hover.png'"
                        @endif
                        onmouseout="this.src='{{url(banner_image_url($main_banner->gambar))}}'"/>
                    </a>
                </figure>
            </div>
        
        </div>
        @endforeach
    </div>-->
    <div class="owl-carousel owl-theme owl-loaded owl-drag hide" data-options='{"items":6,"nav":true}'>
        <div class="owl-item">
            <div class="product product-sm owl-item-slide"></div>
        </div>
    </div>
    <!--<div class="gap"></div>-->
        @if(count(list_product(12,null,$koleksi[27])) > 0)
    <h3 class="widget-title">Promo Products
    <a href="{{koleksi_url($koleksi[27])}}"><small style="text-align: right;float: right;margin-top: 20px;font-size: 12px;">View all</small></a></h3>
    <div class="owl-carousel owl-loaded owl-nav-out" data-options='{"items":6,"nav":true,"responsiveClass":true}' style="max-height: inherit;">
        {{--*/ $rate = 1 /*--}}
        @foreach(list_product(12,null,$koleksi[27]) as $key=>$mypromo)
        {{--*/ $rate += $mypromo->views /*--}}
        @endforeach
        @foreach(list_product(12,null,$koleksi[27],null,'az') as $key=>$mypromo)
        <div class="owl-item">
            <div class="product product-sm owl-item-slide">
                @if($mypromo->hargaCoret > 0)
                <ul class="product-promo">
                    <li>{{ discountPercent($mypromo->hargaJual,$mypromo->hargaCoret) }}</li>
                </ul>
                @elseif(strpos($mypromo->koleksiId, '62669') !== false)
                <ul class="product-labels">
                    <li style="padding: 2px 4px !important;">TESTER</li>
                </ul>
                @endif
                
                <div class="product-img-wrap" style="text-align:center;">
                    <img class="product-img" src="{{ product_image_url($mypromo->gambar1, 'medium') }}" alt="{{ $mypromo->nama }}" title="{{ $mypromo->nama }}" />
                </div>
                <a class="product-link" href="{{ product_url($mypromo) }}"></a>
                <div class="product-caption">
                    <ul class="product-caption-rating">
                        @for($i=0;$i<($mypromo->views*5/$rate);$i++)
                            <li class="rated"><i class="fa fa-star"></i></li>
                        @endfor
                        @for($i=0;$i<5-($mypromo->views*5/$rate);$i++)
                            <li><i class="fa fa-star"></i></li>
                        @endfor
                    </ul>
                    <h5 class="product-caption-title">{{$mypromo->nama}}</h5>
                    <div class="product-caption-price">
                        <!--<span class="product-caption-price-old">$78</span>-->
                        <span class="product-caption-price-new">{{ price($mypromo->hargaJual) }}</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="owl-item">
            <div class="product product-sm owl-item-slide">
                                
                <a class="product-link" href="{{koleksi_url($koleksi[27])}}"></a>
                <div class="product-caption" style="text-align: center;height: 232px;">
                    
                    <h3 style="padding-top: 70px;color: #ccc;">Lihat Semua Promo Produk </h3>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="gap"></div>
    @endif
    
    @if(count(new_product()) > 0)
    <h3 class="widget-title">New Arrival</h3>
    <div class="owl-carousel owl-theme owl-loaded owl-drag owl-nav-out" data-options='{"items":6,"nav":true,"responsiveClass":true}'>
        {{--*/ $rate = 1 /*--}}
        @foreach(new_product() as $key=>$newpro)
        {{--*/ $rate += $newpro->views /*--}}
        @endforeach
        @foreach(new_product(14) as $key=>$newpro)
        <div class="owl-item">
            <div class="product product-sm owl-item-slide">
                <ul class="product-promo">
                    @if($newpro->hargaCoret > 0)
                        <li>{{ discountPercent($newpro->hargaJual,$newpro->hargaCoret) }}</li>
                    @endif
                </ul>
                <div class="product-img-wrap" style="text-align:center;">
                    <img class="product-img" src="{{ product_image_url($newpro->gambar1, 'medium') }}" alt="{{ $newpro->nama }}" title="{{ $newpro->nama }}" />
                </div>
                <a class="product-link" href="{{ product_url($newpro) }}"></a>
                <div class="product-caption">
                    <ul class="product-caption-rating">
                        @for($i=0;$i<5;$i++)
                            @if($newpro->views*5/$rate<=$i)
                            <li><i class="fa fa-star"></i></li>
                            @else
                            <li class="rated"><i class="fa fa-star"></i></li>
                            @endif
                        @endfor
                    </ul>
                    <h5 class="product-caption-title">{{$newpro->nama}}</h5>
                    <div class="product-caption-price">
                        <!--<span class="product-caption-price-old">$78</span>-->
                        <span class="product-caption-price-new">{{ price($newpro->hargaJual) }}</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="gap"></div>
    @endif
    @if(count(best_seller(7)) > 0)
    <h3 class="widget-title">Popular Products</h3>
    <div class="owl-carousel owl-theme owl-loaded owl-drag owl-nav-out" data-options='{"items":6,"nav":true,"responsiveClass":true}'>
        {{--*/ $rate = 1 /*--}}
        @foreach(best_seller(7) as $key=>$feapro)
        {{--*/ $rate += $feapro->views /*--}}
        @endforeach
        @foreach(best_seller(7) as $key=>$feapro)
        <div class="owl-item">
            <div class="product product-sm owl-item-slide">
                <ul class="product-promo">
                    @if($feapro->hargaCoret > 0)
                        <li>{{ discountPercent($feapro->hargaJual,$feapro->hargaCoret) }}</li>
                    @endif
                    
                </ul>
                <ul class="product-labels" style="{{$feapro->hargaCoret > 0?'display:none':''}}">
                    @if(strpos($feapro->koleksiId, '62669') !== false)
                        <li style="padding: 2px 4px !important;">TESTER</li>
                    @endif
                </ul>
                <div class="product-img-wrap" style="text-align:center;">
                    <img class="product-img" src="{{ product_image_url($feapro->gambar1, 'medium') }}" alt="{{ $feapro->nama }}" title="{{ $feapro->nama }}" />
                </div>
                <a class="product-link" href="{{ product_url($feapro) }}"></a>
                <div class="product-caption">
                    <ul class="product-caption-rating">
                    @for($i=0;$i<($feapro->views*5/$rate);$i++)
                        <li class="rated"><i class="fa fa-star"></i></li>
                    @endfor
                    @for($i=0;$i<5-($feapro->views*5/$rate);$i++)
                        <li><i class="fa fa-star"></i></li>
                    @endfor
                    </ul>
                    <h5 class="product-caption-title">{{$feapro->nama}}</h5>
                    <div class="product-caption-price">
                        <!--<span class="product-caption-price-old">$78</span>-->
                        <span class="product-caption-price-new">{{ price($feapro->hargaJual) }}</span>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="gap"></div>
    @endif

    <div class="row" data-gutter="15">
    @foreach(horizontal_banner() as $key=>$main_banner)
    @if($key==0)
        <div class="col-md-6">
            <div class="banner banner-o-hid" style="background-color:#D2D2D2;    height: 200px;">
                <a class="banner-link" href="{{ url($main_banner->url) }}"></a>
                <div class="banner-caption-left banner-caption-dark">
                    <h5 class="banner-title">Miniatur</h5>
                    <!--<p class="banner-desc">Be First</p>-->
                    <p class="banner-shop-now">Shop Now <i class="fa fa-caret-right"></i>
                    </p>
                </div>
                <img class="banner-img" src="{{ url(banner_image_url($main_banner->gambar)) }}" alt="Image Alternative text" title="Image Title" style="bottom: 20px;right: 0px;width: 63%;">
            </div>
        </div>
    @else
        <div class="col-md-6">
            <div class="banner banner-o-hid" style="background-color:#112B50;height: 200px;">
                <a class="banner-link" href="{{ url($main_banner->url) }}"></a>
                <div class="banner-caption-left">
                    <h5 class="banner-title">Tester</h5>
                    <!--<p class="banner-desc">The Human Friendly Kitchen.</p>-->
                    <p class="banner-shop-now">Shop Now <i class="fa fa-caret-right"></i>
                    </p>
                </div>
                <img class="banner-img" src="{{ url(banner_image_url($main_banner->gambar)) }}" alt="Image Alternative text" title="Image Title" style="bottom: -30px;right: 0;width: 65%;">
            </div>
        </div>
    </div>
    @endif
    @endforeach
</div>
<div class="gap"></div>
<div class="container">
    <h3 class="widget-title" style="text-align:center">Featured Brands</h3>
    <div class="owl-carousel owl-loaded owl-nav-out" data-options='{"items":7,"loop":true,"nav":true}'>
        @foreach(list_koleksi() as $koleksi)
        @if($koleksi->id!='62664' && $koleksi->id!='62669' && $koleksi->id!='63150')
        <div class="owl-item col-sm-4 col-xs-4">
            <a class="banner-category owl-item-slide" href="{{ koleksi_url($koleksi) }}" style="height: 110px;">
                <img style="width: 100%;max-height: 77px;max-width: 100px;position: relative;" class="banner-category-img" src="{{ koleksi_image_url($koleksi->gambar,'thumb') }}" alt="{{ $koleksi->nama }}" title="{{ $koleksi->nama }}" />
                <!--<h5 class="banner-category-title">{{ $koleksi->nama }}</h5>
                <p class="banner-category-desc">{{ countCollection($koleksi->id) }}</p>-->
            </a>
        </div>
        @endif
        @endforeach
    </div>
</div>
