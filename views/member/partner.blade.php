<!-- Page title -->
<div class="page-title">
	<div class="container">
		<h2><i class="icon-desktop color"></i> My Account <small></small></h2>
		<hr />
	</div>
</div>
<!-- Page title -->

<div class="account-content">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="sidey">
					<ul class="nav">
						<li><a href="{{url('member')}}">Order History</a></li>                         
						<li><a href="{{url('member/profile/edit')}}">Edit Profile</a></li>
						@if($user->tipe==2)
						<li><a href="{{url('partner')}}">Partner</a></li>
						@endif
					</ul>
				</div>
			</div>
			<div class="col-md-9 table-responsive">
					<h3><i class="icon-user color"></i> &nbsp;Produk Mitra</h3>
					<!-- Your details -->
					<table class="table table-striped tcart">
						<thead>
							<tr>
								<th><span>Gambar </span></th>
								<th class="desc"><span>Nama Produk</span></th>
								<th><span>Deskripsi</span></th>
								<th><span>Berat</span></th>
								<th><span>Harga Jual</span></th>
								<th><span>Harga Mitra</span></th>
								<th><span>Action</span></th>
							</tr>
						</thead>
						<tbody>
						@foreach (list_product(null,@$category,@$collection) as $myproduk)
							<tr>
								<td>{{$myproduk->gambar1}}</td>
								<td>{{$myproduk->nama}}</td>
								<td class="desc">{{$myproduk->deskripsi}}</td>
								<td class="quantity">
									{{ $myproduk->berat}}
								</td>
								<td class="sub-price">
									{{ price($myproduk->hargaJual) }}
								</td>
								<td class="total-price">
									{{ price($myproduk->hargaMitra) }}
								</td>
								<td style="text-align: center;">
									<a>Beli</a>
									<a>Download</a>
								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
			   </div>
			</div>
            {{list_product(null,@$category,@$collection)->links()}} 
			
			<div class="sep-bor"></div>
		</div>
	</div>