<div class="container">
    <header class="page-header">
        <h1 class="page-title " style="text-transform: capitalize;">
            {{@$category->nama!=''?@$category->nama:@$collection->nama}}
        </h1>
        <ol class="breadcrumb page-breadcrumb ">
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
                    <option value="high" {{Input::get('sort')=='high'?'selected="selected"':''}}>Expensive</option>
                    <option value="low" {{Input::get('sort')=='low'?'selected="selected"':''}}>Cheapest</option>
                    <option value="new" {{Input::get('sort')=='new'?'selected="selected"':''}}>Newest</option>
                    <option value="old" {{Input::get('sort')=='old'?'selected="selected"':''}}>Oldest</option>
                </select>
            </li>
            <li><span class="category-selections-sign">Items :</span>
                <select class="category-selections-select" name="orderby" id="show" data-rel="{{URL::current()}}">
                    <option value="15" {{Input::get('show')==15?'selected="selected"':''}}>16</option>
                    <option value="30" {{Input::get('show')==30?'selected="selected"':''}}>40</option>
                    <option value="60" {{Input::get('show')==60?'selected="selected"':''}}>60</option>
                </select>
            </li>
        </ul>
    </header>
    <div class="row">
        <div class="col-md-3 col-sm-3" style="margin-bottom:10px;">
            <aside class="category-filters">
                <div class="category-filters-section">
                    <h3 class="widget-title-sm">Category</h3>
                    <select class="category-selections-select visible-xs" style="width: 100%;" onchange="if(this.options[this.selectedIndex].value != ''){window.top.location.href=this.options[this.selectedIndex].value}">
                        @foreach (list_category() as $kat)
                        <option value="{{category_url($kat)}}">{{shortName($kat->nama,20)}}</option>
                        @endforeach
                    </select>
                    <ul class="cateogry-filters-list hidden-xs">
                        @foreach (list_category() as $kat)
                            @if($kat->parent=='0')
                                <li>
                                    <a href="{{category_url($kat)}}" style="line-height: 2;font-weight: 500;">{{shortName($kat->nama,20)}}</a>
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
                    <select class="category-selections-select visible-xs" style="width: 100%;" onchange="if(this.options[this.selectedIndex].value != ''){window.top.location.href=this.options[this.selectedIndex].value}">
                        @foreach (list_koleksi() as $kol)
                        @if($kol->id!='62664' && $kol->id!='62669')
                        <option value="{{koleksi_url($kol)}}">{{$kol->nama}}</option>
                        @endif
                        @endforeach
                    </select>
                    <div class="hidden-xs">
                        @foreach (list_koleksi() as $kol)
                        @if($kol->id!='62664' && $kol->id!='62669')
                            <a href="{{koleksi_url($kol)}}">
                                <div class="checkbox">
                                    <label>{{$kol->nama}}<span class="category-filters-amount">({{ countCollection($kol->id) }})</span></label>
                                </div>
                            </a>
                        @endif
                        @endforeach
                    </div>
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
            <div class="row" data-gutter="15">
            @foreach(list_product(48,@$category,@$collection,null,'az') as $key => $myproduk)
                    <div class="col-md-3 col-sm-4 col-xs-6 {{$myproduk->koleksiId}}">
                        <div class="product">
                            <ul class="product-promo">
                                @if($myproduk->hargaCoret > 0)
                                <li>
                                    {{ discountPercent($myproduk->hargaJual,$myproduk->hargaCoret) }}
                                </li>
                                @endif
                            </ul>
                            <ul class="product-labels">
                                @if(is_outstok($myproduk))
                                    <li>KOSONG</li>
                                @elseif(is_terlaris($myproduk))
                                    <li>HOT</li>
                                @elseif(is_produkbaru($myproduk))
                                    <li>BARU</li>
                                @endif
                                @if(strpos($myproduk->koleksiId, '62669') !== false)
                                    <li>TESTER</li>
                                @endif
                            </ul>
                            <div class="product-img-wrap">
                                <img class="product-img-primary" src="{{product_image_url($myproduk->gambar1, 'medium')}}" alt="{{$myproduk->nama}}" title="{{$myproduk->nama}}" />
                                <img class="product-img-alt" src="{{product_image_url($myproduk->gambar2, 'medium')}}" alt="{{$myproduk->nama}}" title="{{$myproduk->nama}}" />
                            </div>
                            <a class="product-link" href="{{product_url($myproduk)}}" title="{{$myproduk->nama}}"></a>
                            <div class="product-caption">
                                <h5 class="product-caption-title">{{$myproduk->nama}}</h5>
                                <div class="product-caption-price">
                                    
                                    <span class="product-caption-price-new">{{ price($myproduk->hargaJual) }}</span>
                                </div>
                                <ul class="product-caption-feature-list" style="margin: -18px 0;padding: 0;left: 15px;">
                                    @if($myproduk->hargaCoret > 0)
                                    <!--<li>Harga Outlet </li>
                                    <li> {{ price($myproduk->hargaCoret) }}</li>-->
                                    @endif
                                </ul>
                            </div>
                        </div>
                        @if(strpos($myproduk->koleksiId, '62664') !== false)
                        <img class="" src="https://s3-ap-southeast-1.amazonaws.com/cdn.jarvis-store.com/mallaneka-upload/galeri/badge-promo.png" alt="promo" title="promo" style="float: right;margin-top: -50px;position: inherit;">
                        @endif
                    </div>
            @endforeach
            </div>
            <div class="gap"></div>
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-12">
                    <nav>
                        {{ list_product(48,@$category,@$collection)->links() }}
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="gap"></div>