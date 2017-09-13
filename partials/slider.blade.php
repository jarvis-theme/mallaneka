<div class="owl-carousel owl-loaded owl-nav owl-nav-dots-inner owl-theme" data-options='{"loop":true,"nav":true,"items":1,"autoplay":true}'>
    @foreach (slideshow() as $slide)
    <div class="owl-item" >
        <div class="slider-item" style="background-color:#3D3D3D;background-image:url({{--url(slide_image_url($slide->gambar))--}})">
            <div class="container" style="padding-left: 0;padding-right: 0;">
                <div class="slider-item-inner">
                    <div class="slider-item-caption-right slider-item-caption-white">
                        <h4 class="slider-item-caption-title">{{$slide->judul}}</h4>
                        <p class="slider-item-caption-desc">{{$slide->text}}</p><!--Shop Now-->
                    </div>
                    <a class="" href="{{$slide->url}}">
                        <img class="" src="{{url(slide_image_url($slide->gambar))}}" alt="{{$slide->judul}}" title="{{$slide->judul}}" style="margin-top: 50px;" />
                    </a>
                    <a class="btn btn-lg btn-ghost btn-black" href="{{url('/halaman/promo')}}" style="display:none;margin-top: -50px;text-align: right;float: right;margin-right: 10px;">Cek semua promosi</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>