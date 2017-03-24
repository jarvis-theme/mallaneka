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
				@if($pengaturan->checkoutType!=2)
					@if(list_order()->count())
						<h3><i class="icon-user color"></i> &nbsp;Order History</h3>
						<!-- Your details -->
						<table class="table table-striped tcart">
							<thead>
								<tr>
									<th><span>ID Order</span></th>
									<th class="desc"><span>Tanggal Order</span></th>
									<th><span>Detail Order</span></th>
									<th><span>Total Order</span></th>
									<th><span>No. Resi</span></th>
									<th><span>Status</span></th>
									<th><span>Konfirmasi</span></th>
								</tr>
							</thead>
							<tbody>
							@foreach (list_order() as $item)
								<tr>
									<td>
									@if($pengaturan->checkoutType==3)	
										{{prefixOrder().$item->kodePreorder}}
									@else 
										{{prefixOrder().$item->kodeOrder}}
									@endif
									</td>
									<td>
										@if($pengaturan->checkoutType==3)	
											{{waktu($item->tanggalPreorder)}}
										@else 
											{{waktu($item->tanggalOrder)}}
										@endif	
									</td>
									<td class="desc">
										<ul>
										@if($pengaturan->checkoutType==3) 
											<li>{{$item->preorderdata->produk->nama}} ({{$item->opsiSkuId==0 ? 'No Opsi' : $item->opsisku->opsi1.($item->opsisku->opsi2!='' ? ' / '.$item->opsisku->opsi2:'').($item->opsisku->opsi3!='' ? ' / '.$item->opsisku->opsi3:'')}}) - {{$item->jumlah}}<li>
										@else 
											@foreach ($item->detailorder as $detail)
											
											<li>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku["opsi1"].($detail->opsisku["opsi2"] != '' ? ' / '.$detail->opsisku["opsi2"]:'').($detail->opsisku["opsi3"] !='' ? ' / '.$detail->opsisku["opsi3"]:'').')':''}} - {{$detail->qty}}</li>
											
											@endforeach 
										@endif
										</ul>
									</td>
									<td class="quantity">
										{{ price($item->total)	}}
									</td>
									<td class="sub-price">
										{{ $item->noResi }}
									</td>
									<td class="total-price">
									@if($pengaturan->checkoutType==1) 
										@if($item->status==0)
										<span class="label label-warning">Pending</span>
										
										@elseif($item->status==1)
										<span class="label label-info">Konfirmasi diterima</span>
										
										@elseif($item->status==2)
										<span class="label label-success">Pembayaran diterima</span>
										
										@elseif($item->status==3)
										<span class="label label-info">Terkirim</span>
										
										@elseif($item->status==4)
										<span class="label label-default">Batal</span>
										@endif 
									@else 
										@if($item->status==0)
										<span class="label label-warning">Pending</span>
										
										@elseif($item->status==1)
										<span class="label label-info">Konfirmasi DP diterima</span>
										
										@elseif($item->status==2)
										<span class="label label-success">DP terbayar</span>
										
										@elseif($item->status==3)
										<span class="label label-info">Menunggu pelunasan</span>
										
										@elseif($item->status==4)
										<span class="label label-success">Pembayaran lunas</span>
										
										@elseif($item->status==5)
										<span class="label label-info">Terkirim</span>
										
										@elseif($item->status==6)
										<span class="label label-default">Batal</span>
										
										@elseif($item->status==7)
										<span class="label label-info">Konfirmasi Pelunasan diterima</span>
										@endif
									@endif
									</td>
									<td style="text-align: center;">
									@if($pengaturan->checkoutType==3) 
										@if($item->status < 4)
										<button onclick="window.location.href='{{url('konfirmasipreorder/'.$item->id)}}'" class="btn btn-small btn-success" data-title="Edit" data-placement="top" data-tip="tooltip"><i class="icon-money"></i></button>
										@endif 
									@endif
									@if($pengaturan->checkoutType==1) 
										@if($item->status <= 1)
										<button onclick="window.location.href='{{url('konfirmasiorder/'.$item->id)}}'" class="btn btn-small btn-success" data-title="Edit" data-placement="top" data-tip="tooltip"><i class="icon-money"></i></button>
										@endif 
									@endif
									</td>
								</tr>
							@endforeach
							</tbody>
						</table>
					@else
						<span> Belum ada data order</span>
					@endif
				@else 
					@if($inquiry->count()!=0)
						<h3><i class="icon-user color"></i> &nbsp;Order History</h3>
						<table class="table table-striped tcart">
							<thead>
								<tr>
									<th><span>ID Order</span></td>
									<th><span>Tanggal Order</span></td>
									<th><span>Detail Order</span></td>
									<th><span>Status</span></td>
								</tr>
							</thead>
							<tbody>
								@foreach ($inquiry as $item)
								<tr>
									<td>
										{{prefixOrder()}}{{$item->kodeInquiry}}
									</td>
									<td>
										{{waktu($item->created_at)}}
									</td>
									<td>
										@foreach ($item->detailInquiry as $detail)
										<li>{{$detail->produk->nama}} {{$detail->opsiSkuId !=0 ? '('.$detail->opsisku["opsi1"].($detail->opsisku["opsi2"] != '' ? ' / '.$detail->opsisku["opsi2"]:'').($detail->opsisku["opsi3"] !='' ? ' / '.$detail->opsisku["opsi3"]:'').')':''}} - {{$detail->qty}}</li>
										@endforeach
									</td>
									<td>
										@if($item->status==0)
										<span class="label label-warning">Pending</span>
										@elseif($item->status==1)
										<span class="label label-success">Inquiry diterima</span>
										@elseif($item->status==2)
										<span class="label label-info">Batal</span>
										@endif
									</td>
								</tr>
								@endforeach
							</tbody>
					@else
					<tr>
						<td colspan="2">
							Inquiry anda masih kosong.
						</td>
					</tr>
					@endif
					</table>
				@endif 
			   </div>
			</div>
            {{list_order()->links()}} 
			
			<div class="sep-bor"></div>
		</div>
	</div>