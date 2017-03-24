<div class="container">
    <header class="page-header">
        <h1 class="page-title">{{$produk->nama}}</h1>
        <ol class="breadcrumb page-breadcrumb">
            {{breadcrumbProduk($produk,' </li><li>; ',';',true)}}
        </ol>
    </header>
    <div class="row">
        <div class="col-md-5">
            <div class="product-page-product-wrap jqzoom-stage">
                <div class="clearfix">
                    <a href="{{url(product_image_url($produk->gambar1))}}" id="jqzoom" data-rel="gal-1">
                        <img src="{{url(product_image_url($produk->gambar1, 'medium'))}}" alt="Image Alternative text" title="Image Title" />
                    </a>
                </div>
            </div>
            <ul class="jqzoom-list">
                <li>
                    <a class="zoomThumbActive" href="javascript:void(0)" data-rel="{gallery:'gal-1', smallimage: '{{url(product_image_url($produk->gambar1, 'medium'))}}', largeimage: '{{url(product_image_url($produk->gambar1))}}'}">
                        <img src="{{url(product_image_url($produk->gambar1, 'thumb'))}}" alt="Image Alternative text" title="Image Title" />
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-rel="{gallery:'gal-1', smallimage: '{{url(product_image_url($produk->gambar2, 'medium'))}}', largeimage: '{{url(product_image_url($produk->gambar2))}}'}">
                        <img src="{{url(product_image_url($produk->gambar2, 'thumb'))}}" alt="Image Alternative text" title="Image Title" />
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-rel="{gallery:'gal-1', smallimage: '{{url(product_image_url($produk->gambar3, 'medium'))}}', largeimage: '{{url(product_image_url($produk->gambar3))}}'}">
                        <img src="{{url(product_image_url($produk->gambar3, 'thumb'))}}" alt="Image Alternative text" title="Image Title" />
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" data-rel="{gallery:'gal-1', smallimage: '{{url(product_image_url($produk->gambar4, 'medium'))}}', largeimage: '{{url(product_image_url($produk->gambar4))}}'}">
                        <img src="{{url(product_image_url($produk->gambar4, 'thumb'))}}" alt="Image Alternative text" title="Image Title" />
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-md-7">
            <div class="row" data-gutter="10">
                <div class="col-md-12">
                    <div class="box-highlight">
                    	@if($produk->hargaCoret!='')
                    	<div class="col-md-1">
							<span class="label label-danger pull-right">{{discountPercent($produk->hargaJual,$produk->hargaCoret)}}</span>
                    	</div>
                    	<div class="">
                        	<p class="product-page-price-list">{{price($produk->hargaCoret)}}</p>
                    	</div>
						@endif  
						<div class="clearfix"></div>
                        <p class="product-page-price">{{ price($produk->hargaJual) }}</p>
                        <!-- <p class="text-muted text-sm text-uppercase">Free Shipping</p> -->
                        <div class="gap"></div>
                        <form action="#" id="addorder">
	                        <div class="col-md-6">
	                        	<label>Jumlah :</label>
                        		<input class="form-control" type="text" name="qty" value="1" class="qty" />
	                        </div>
	                        @if($opsiproduk->count() > 0)
	                        <div class="col-md-6 pull-right">
                                    <label class="control-label">Opsi :</label>
                                    <div class="inlineblock">
                                        <div class="select-style">
                                            <select class="form-control" name="opsiproduk">
                                                <option value="">-- Pilih Opsi --</option>
                                                @foreach ($opsiproduk as $key => $opsi)
                                                <option value="{{$opsi->id}}" {{ $opsi->stok==0 ? 'disabled':''}}>{{$opsi->opsi1.($opsi->opsi2=='' ? '':' / '.$opsi->opsi2).($opsi->opsi3=='' ? '':' / '.$opsi->opsi3)}} {{price($opsi->harga)}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <span class="clearfix"></span>
                                    </div>
	                        </div>
							<div class="clearfix"></div><br>
                            @endif
	                        <div class="col-md-6 pull-right">
                                <label class="control-label"> </label>
	                        	<button class="btn btn-block btn-primary addtocart add_cart" type="submit" style="margin-top: 5px;">
	                        		<i class="fa fa-shopping-cart"></i>Add to Cart
	                        	</button>
	                        </div>
	                    </form>
						<div class="clearfix"></div>

                        <!-- <a class="btn btn-block btn-default" href="#"><i class="fa fa-star"></i>Wishlist</a> -->
                        <div class="product-page-side-section">
                            <h5 class="product-page-side-title">Share This Item</h5>
                            {{sosialShare(product_url($produk))}}
                            <!-- <ul class="product-page-share-item">
                                <li>
                                    <a class="fa fa-facebook" href="#"></a>
                                </li>
                                <li>
                                    <a class="fa fa-twitter" href="#"></a>
                                </li>
                                <li>
                                    <a class="fa fa-pinterest" href="#"></a>
                                </li>
                                <li>
                                    <a class="fa fa-instagram" href="#"></a>
                                </li>
                                <li>
                                    <a class="fa fa-google-plus" href="#"></a>
                                </li>
                            </ul> -->
                        </div>
                        <div class="product-page-side-section">
                            <h5 class="product-page-side-title">Description</h5>
                            <p class="product-page-side-text">{{$produk->dmt}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="gap"></div>
    <div class="tabbable product-tabs">
        <ul class="nav nav-tabs" id="myTab">
            <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-list nav-tab-icon"></i>Overview</a>
            </li>
            <li><a href="#tab-2" data-toggle="tab"><i class="fa fa-cogs nav-tab-icon"></i>Specification</a>
            </li>
            <li><a href="#tab-3" data-toggle="tab"><i class="fa fa-star nav-tab-icon"></i>Rating and Reviews</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="tab-1">
                {{$produk->deskripsi}}
            </div>

            <div class="tab-pane fade" id="tab-2">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Specs:</th>
                            <th>Details:</th>
                            <th>Description:</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="product-page-features-table-specs">Warranty Terms - Parts:</td>
                            <td class="product-page-features-table-details">1 Year</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="product-page-features-table-specs">MMS:</td>
                            <td class="product-page-features-table-details">Yes</td>
                            <td>Multimedia Messaging Service enables cell phone users to send text messages, graphics, photos and audio and video clips to other MMS users or to e-mail accounts.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="tab-pane fade" id="tab-3">
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="product-tab-rating-title">Overall Customer Rating:</h3>
                        <ul class="product-page-product-rating product-rating-big">
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
                            <li class="count">4.9</li>
                        </ul><small>238 customer reviews</small>
                        <p><strong>98%</strong> of reviewers would recommend this product</p><a class="btn btn-primary" href="#">Write a Review</a>
                    </div>
                    <div class="col-md-5">
                        <ul class="product-rate-list">
                            <li>
                                <p class="product-rate-list-item">Camera</p>
                                <div class="product-rate-list-bar">
                                    <div style="width:95%;"></div>
                                </div>
                                <p class="product-rate-list-count">95%</p>
                            </li>
                            <li>
                                <p class="product-rate-list-item">Sound Quality</p>
                                <div class="product-rate-list-bar">
                                    <div style="width:90%;"></div>
                                </div>
                                <p class="product-rate-list-count">90%</p>
                            </li>
                            <li>
                                <p class="product-rate-list-item">Screen</p>
                                <div class="product-rate-list-bar">
                                    <div style="width:100%;"></div>
                                </div>
                                <p class="product-rate-list-count">100%</p>
                            </li>
                            <li>
                                <p class="product-rate-list-item">Battery Life</p>
                                <div class="product-rate-list-bar">
                                    <div style="width:95%;"></div>
                                </div>
                                <p class="product-rate-list-count">95%</p>
                            </li>
                            <li>
                                <p class="product-rate-list-item">Look & Feel</p>
                                <div class="product-rate-list-bar">
                                    <div style="width:100%;"></div>
                                </div>
                                <p class="product-rate-list-count">100%</p>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                        <ul class="product-rate-list">
                            <li>
                                <p class="product-rate-list-item">5 Stars</p>
                                <div class="product-rate-list-bar">
                                    <div style="width:96%;"></div>
                                </div>
                                <p class="product-rate-list-count">210</p>
                            </li>
                            <li>
                                <p class="product-rate-list-item">4 Stars</p>
                                <div class="product-rate-list-bar">
                                    <div style="width:3%;"></div>
                                </div>
                                <p class="product-rate-list-count">10</p>
                            </li>
                            <li>
                                <p class="product-rate-list-item">3 Stars</p>
                                <div class="product-rate-list-bar">
                                    <div style="width:0%;"></div>
                                </div>
                                <p class="product-rate-list-count">0</p>
                            </li>
                            <li>
                                <p class="product-rate-list-item">2 Stars</p>
                                <div class="product-rate-list-bar">
                                    <div style="width:2%;"></div>
                                </div>
                                <p class="product-rate-list-count">6</p>
                            </li>
                            <li>
                                <p class="product-rate-list-item">1 Star</p>
                                <div class="product-rate-list-bar">
                                    <div style="width:1%;"></div>
                                </div>
                                <p class="product-rate-list-count">3</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr />
                <article class="product-review">
                    {{ pluginComment(product_url($produk), @$produk) }}
                </article>
            </div>
        </div>
    </div>
    <div class="gap"></div>
    @if(count($produklain) > 0)
	    <h3 class="widget-title">You Might Also Like</h3>
	    @foreach(other_product($produk) as $key=>$reproduk)
		    @if($key==0)
		    	<div class="row" data-gutter="15">
		    @endif
		        <div class="col-md-3">
		            <div class="product ">
		                @if($reproduk->hargaCoret>0)
							<div class="item-icon pull-right">
								<span class="label label-danger">{{discountPercent($reproduk->hargaJual,$reproduk->hargaCoret)}}</span>
							</div>
						@endif
	                    <ul class="product-labels">
			            	@if(is_outstok($reproduk))
								<li>KOSONG</li>
							@else
								@if(is_terlaris($reproduk))
									<li>HOT</li>
								@endif
								@if(is_produkbaru($reproduk))
									<li>BARU</li>
								@endif
							@endif
		                </ul>
		                <div class="product-img-wrap">
		                    <img class="product-img-primary" src="{{product_image_url($reproduk->gambar1, 'medium')}}" alt="{{$reproduk->nama}}" title="{{$reproduk->nama}}" />
		                    <img class="product-img-alt" src="{{product_image_url($reproduk->gambar2, 'medium')}}" alt="{{$reproduk->nama}}" title="{{$reproduk->nama}}" />
		                </div>
		                <a class="product-link" href="#"></a>
		                <div class="product-caption">
		                    <!-- <ul class="product-caption-rating">
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
		                    </ul> -->
		                    <h5 class="product-caption-title">{{$reproduk->nama}}</h5>
		                    <div class="product-caption-price"><span class="product-caption-price-new">{{price($reproduk->hargaJual)}}</span>
		                    </div>
		                    <ul class="product-caption-feature-list">
		                        <li>Free Shipping</li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    @if($key+1%3==0)
	        </div>
	        <div class="row" data-gutter="15">
	       	@elseif(($key+1)==list_product()->count())
			</div>
	        @endif
	    @endforeach
	@endif
</div>
<!-- <div class="gap"></div> -->