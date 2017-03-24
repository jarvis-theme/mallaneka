<div class="container">
    <header class="page-header">
        <h1 class="page-title">
        	{{@$category->nama!=''?@$category->nama:'Produk'}}
        </h1>
        <ol class="breadcrumb page-breadcrumb">
        	@if(!empty($kategoridetail))
            	{{breadcrumbProduk($produk,' </li><li>; ',';',true, $kategoridetail,@$category,@$collection)}}
            @else
	            <li><a href="{{url('home')}}">Home</a>
	            <li class="active">Produk</li>
            @endif
        </ol>
        <ul class="category-selections clearfix">
            <!-- <li>
                <a class="fa fa-th-large category-selections-icon active" href="#"></a>
            </li>
            <li>
                <a class="fa fa-th-list category-selections-icon" href="#"></a>
            </li> -->
            <li><span class="category-selections-sign">Sort by :</span>
                <select class="category-selections-select" name="sort" id="sort" data-rel="{{URL::current()}}">
                    <option value="az" {{Input::get('sort')=='az'?'selected="selected"':''}}>A - Z</option>
					<option value="za" {{Input::get('sort')=='za'?'selected="selected"':''}}>Z - A</option>
                    <option value="high" {{Input::get('sort')=='high'?'selected="selected"':''}}>Most</option>
                    <option value="low" {{Input::get('sort')=='low'?'selected="selected"':''}}>Cheapest</option>
                    <option value="new" {{Input::get('sort')=='new'?'selected="selected"':''}}>Newest</option>
                    <option value="old" {{Input::get('sort')=='old'?'selected="selected"':''}}>Oldest</option>
                </select>
            </li>
            <li><span class="category-selections-sign">Items :</span>
                <select class="category-selections-select" name="orderby" id="show" data-rel="{{URL::current()}}">
                    <option value="40" {{Input::get('show')==40?'selected="selected"':''}}>40</option>
                    <option value="60" {{Input::get('show')==60?'selected="selected"':''}}>60</option>
                </select>
            </li>
        </ul>
    </header>
    <div class="row">
        <div class="col-md-3">
            <aside class="category-filters">
                <div class="category-filters-section">
                    <h3 class="widget-title-sm">Category</h3>
                    <ul class="cateogry-filters-list">
                    	@foreach (list_category() as $kat)
							@if($kat->parent=='0')
								<li>
									<a href="{{category_url($kat)}}">{{shortName($kat->nama,20)}}</a>
									@if($kat->anak->count())
										<ul id="{{strtolower($kat->nama)}}" class="cateogry-filters-list" style="margin-left: 10px;">
										@foreach(list_category() as $submenu)
											@if ($submenu->parent==$kat->id)
											<li>
												<a href="{{category_url($submenu)}}">{{$submenu->nama}}</a>
												@if($submenu->anak->count() != 0)
												<ul id="{{strtolower($submenu->nama)}}" class="cateogry-filters-list"  style="margin-left: 10px;">
													@foreach($submenu->anak as $submenu2)
													@if($submenu2->parent == $submenu->id)
													<li>
														<a href="{{category_url($submenu2)}}" class="active" style="text-decoration: none;">{{$submenu2->nama}}</a>
													</li>
													@endif
													@endforeach
												</ul>
												@endif
											</li>
											@endif
										@endforeach
										</ul>
									@endif
								</li>
							@endif	
						@endforeach	
                    </ul>
                </div>
                
                <div class="category-filters-section">
                    <h3 class="widget-title-sm">Collection</h3>
                    @foreach (list_koleksi() as $kol)
                    	<a href="{{koleksi_url($kol)}}">
                    		<div class="checkbox">
	                    		<label>{{$kol->nama}}<span class="category-filters-amount">({{$kol->produk->count()}})</span></label>
	                    	</div>
                    	</a>
                    @endforeach
                </div>

                <!-- <div class="category-filters-section">
                    <h3 class="widget-title-sm">Features</h3>
                    <div class="checkbox">
                        <label>
                            New<span class="category-filters-amount">(29)</span>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            Featured<span class="category-filters-amount">(97)</span>
                        </label>
                    </div>
                    <div class="checkbox">
                        <label>
                            On Sale<span class="category-filters-amount">(99)</span>
                        </label>
                    </div>
                </div> -->
            </aside>
        </div>
        <div class="col-md-9">

            @foreach(list_product(null,@$category,@$collection) as $key => $myproduk)
	            @if($key==0)
	            <div class="row" data-gutter="15">
	            @endif
	                <div class="col-md-4">
	                    <div class="product ">
		            		@if($myproduk->hargaCoret>0)
								<div class="item-icon pull-right">
									<span class="label label-danger">{{discountPercent($myproduk->hargaJual,$myproduk->hargaCoret)}}</span>
								</div>
							@endif
	                        <ul class="product-labels">
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
	                            <h5 class="product-caption-title">{{$myproduk->nama}}</h5>
	                            <div class="product-caption-price"><span class="product-caption-price-new">{{price($myproduk->hargaJual)}}</span>
	                            </div>
	                            <!-- <ul class="product-caption-feature-list">
	                                <li>Free Shipping</li>
	                            </ul> -->
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
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">

                    <nav>
                    	<div class="pull-right">
                        	{{list_product(null,@$category,@$collection)->links()}}
                    	</div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="gap"></div>