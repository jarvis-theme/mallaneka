<div class="owl-carousel owl-loaded owl-nav-dots-inner" data-options='{"items":1,"loop":true}'>
    @foreach (slideshow() as $slide)
    <div class="owl-item">
        <div class="slider-item" style="background-color:#3D3D3D;background-image:url({{url(slide_image_url($slide->gambar))}})">
            <div class="container">
                <div class="slider-item-inner">
                    <div class="slider-item-caption-left slider-item-caption-white">
                        <h4 class="slider-item-caption-title">{{$slide->judul}}</h4>
                        <p class="slider-item-caption-desc">{{$slide->text}}</p><a class="btn btn-lg btn-ghost btn-white" href="{{$slide->url}}">Shop Now</a>
                    </div>
                    <!-- <img class="slider-item-img-right" src="{{url(slide_image_url($slide->gambar))}}" alt="{{$slide->judul}}" title="{{$slide->judul}}" style="top: 60%; width: 56%;" /> -->
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>