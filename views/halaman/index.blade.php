	<!-- Page title -->
	<div class="page-title">
		<div class="container">
			<h2><i class="icon-desktop color"></i> {{$data->judul}} </h2>
			<hr />
		</div>
	</div>
	<!-- Page title -->
		
	<!-- Page content -->
	<div class="about-us blocky">
		<div class="container">
			<div class="row">
				@if(count(vertical_banner()) > 0)
				<div class="col-md-8 col-sm-7">
				@else
				<div class="col-xs-12 col-sm-12">
				@endif
					<!-- <h4>{{$data->judul}}</h4> -->
					{{$data->isi}}
					<br />
				</div>

				@if(count(vertical_banner()) > 0)
				<div class="col-md-4 col-sm-5">
					<!-- <h4>Banner</h4> -->
					@foreach(vertical_banner() as $item)
					<div style="text-align: center;">
						<a href="{{url($item->url)}}">
							<img src="{{url(banner_image_url($item->gambar))}}" />
						</a>
					</div>
					@endforeach
					<br />
				</div>
				@endif
			</div>
			<div class="sep-bor"></div>
		</div>
	</div>