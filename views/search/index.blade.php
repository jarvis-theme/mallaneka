<!-- Page title -->
<div class="page-title">
	<div class="container">
		<h2><i class="icon-list-alt color"></i> Search</h2>
		<hr />
	</div>
</div>
<!-- Page title -->

<!-- Page content -->			
<div class="shop-items">
	<div class="container">
		<div class="row">
			<div class="col-md-9 col-md-push-3">						 
			<!-- Items List starts -->
			@if($jumlahCari!=0)
				<div class="row">
					<!-- Item #1 -->
					@foreach($hasilpro as $myproduk)
					<div class="col-md-4 col-sm-4 col-xs-6">
						<div class="item">
							<!-- Use the below link to put HOT icon -->
							@if(is_outstok($myproduk))
								<div class="item-icon"><span class="label label-default">KOSONG</span></div>
							@else
								@if(is_terlaris($myproduk))
									<div class="item-icon"><span class="label label-danger">HOT</span></div>
								@endif
								@if(is_produkbaru($myproduk))
									<div class="item-icon"><span class="label label-info">BARU</span></div>
								@endif
							@endif
							<!-- Item image -->
							<div class="item-image">
								<a href="{{product_url($myproduk)}}">{{HTML::image(product_image_url($myproduk->gambar1), $myproduk->nama, array('class="img-responsive" style="width:auto"'))}}</a>
							</div>
							<!-- Item details -->
							<div class="item-details">
								<!-- Name -->
								<h5><a href="{{product_url($myproduk)}}">{{shortName($myproduk->nama,20)}}</a></h5>
								<div class="clearfix"></div>
								<!-- Para. Note more than 2 lines. -->
								<p style="min-height:80px;">{{shortDescription($myproduk->deskripsi,100)}}...</p>
								<hr />
								<!-- Price -->
								<div class="item-price pull-left" style="width:auto;padding: 0 3px;">{{price($myproduk->hargaJual)}}</div>
								<!-- Add to cart -->
								<div class="pull-right"><a href="{{product_url($myproduk)}}" class="btn btn-danger btn-sm">Lihat</a></div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			<!-- Items List ends -->

			@else
				<div class="span12">
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
						<h4>Oh, We're So Sorry</h4>
						There is no product that matches the search criteria.
					</div><!--end alert-->

					<div class="search">
						<div class="titleHeader clearfix">
							<!-- <h3>Search</h3> -->
						</div>

						<div class="well well-small">
							<form method="post" action="{{url('search')}}" class="form-inline">
								<div class="input-group col-sm-6" style="float: none">
							    	<input type="text" class="form-control" placeholder="Search" name="search" required>
							    	<span class="input-group-btn">
							    		<button class="btn btn-info" type="submit"><i class="icon-search"></i></button>
							    	</span>
							    </div>
							</form><!--end form-->
						</div><!--end well-->
					</div><!--end search-->
				</div><!--end span3-->
			@endif						 
			</div>

			<div class="col-md-3 col-md-pull-9">
				<div class="sidey">
					<ul class="nav">
						<li>
							<a href="{{url('/')}}"><i class="icon-home"></i> &nbsp;Home</a>
							@foreach (list_category() as $kat)
								@if($kat->parent=='0')
									<li>
										<a href="{{category_url($kat)}}">{{shortName($kat->nama,20)}}</a>
										@if($kat->anak->count())
											<ul id="{{strtolower($kat->nama)}}" >
											@foreach(list_category() as $submenu)
												@if ($submenu->parent==$kat->id)
												<li>
													<a href="{{category_url($submenu)}}">{{$submenu->nama}}</a>
													@if($submenu->anak->count() != 0)
													<ul id="{{strtolower($submenu->nama)}}">
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
						</li>
					</ul>
				</div>

				@foreach(vertical_banner() as $item)
				<div class="special">
					<a href="{{url($item->url)}}">
						<img width="213" src="{{banner_image_url($item->gambar)}}" />
					</a>
				</div>
				<br>
				@endforeach
				@if($jumlahCari!=0)
				<div class="form">
					<h5>Search</h5>
					<form action="{{url('search')}}" method="post" class="form-inline" role="form">
						<div class="form-group">
							<input type="text" class="form-control" id="search" name="search" placeholder="Cari" required>
							<button type="submit" class="btn btn-info">Cari</button>
						</div>
					</form>
				</div>
				<br>
				@endif
			</div>
		</div>
		
		<div class="sep-bor"></div>
	</div>
</div>