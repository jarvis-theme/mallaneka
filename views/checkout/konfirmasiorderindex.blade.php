@if(Session::has('message'))
<div class="error" id='message' style='display:none'>
	<p>Maaf, kode order anda tidak ditemukan.</p>					
</div>		
@endif

<!-- ============================================================================ -->

<div class="page-title">
	<div class="container">
    	<h2><i class="icon-shopping-cart color"></i> Payment confirmation</h2>
    	<hr />
    	<h5>Thanks for buying from {{ Theme::place('title') }}!!!</h5>
    	<div class="sep-bor"></div>
    	@if($checkouttype==2)
			<p>Silakan Hubungi Pihak Toko untuk Mengkonfirmasi Order Anda</p>
		@else
			<p>Silakan masukkan kode order yang mau anda cari!</p>
			@if($checkouttype==1)
	        	{{Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'form-inline'))}}
	        @endif
	        @if($checkouttype==3)
	        	{{Form::open(array('url'=>'konfirmasipreorder','method'=>'post','class'=>'form-inline'))}}
	        @endif
    	@endif
        <div class="form-group">
         	<input type="text" class="form-control" id="search" placeholder="Kode Order" name='kodeorder' required>
        </div>
        <button type="submit" class="btn btn-info">Cari</button>
    	{{Form::close()}}
        <div class="link-list">
            <h4><strong>Take a look around our site</strong></h5>
            <a href="{{url('/')}}">Home</a>
            <a href="{{url('halaman/about-us')}}">Tentang Kami</a>
            <a href="{{url('kontak')}}">Hubungi Kami</a>
            <a href="{{url('service')}}">Service</a>
        </div>
		<div class="sep-bor"></div>
	</div>
</div>