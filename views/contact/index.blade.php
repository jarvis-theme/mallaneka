@if(Session::has('msg2'))
<div class="success" id='message' style='display:none'>
	Terima kasih, pesan anda sudah terkirim.
</div>
@endif
@if(Session::has('msg3'))
<div class="success" id='message' style='display:none'>
	Maaf, pesan anda belum terkirim.
</div>
@endif
@if($errors->all())
<div class="error" id='message' style='display:none'>
	Terjadi kesalahan dalam menyimpan data.<br><br>
	<ul>
	@foreach($errors->all() as $message)
	<li>-{{ $message }}</li><br>
	@endforeach
	</ul>
</div>
@endif

<!-- ================================================================ -->
<div class="contactus ">
	<!-- Google maps -->
	<div class="gmap">
		@if($kontak->lat!='0' || $kontak->lng!='0')
			<iframe style="" width="565" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->lat.','.$kontak->lng }}&amp;aq=&amp;sll={{ $kontak->lat.','.$kontak->lng }}&amp;sspn=0.006849,0.009892&amp;ie=UTF8&amp;t=m&amp;z=14&amp;output=embed"></iframe><br />          
		@else
			<iframe style="" width="565" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q={{ $kontak->alamat }}&amp;aq=0&amp;oq=gegerkalong+hil&amp;sspn=0.006849,0.009892&amp;ie=UTF8&amp;hq=&amp;hnear={{ $kontak->alamat }}&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br />
		@endif
		<!-- Google Maps. Replace the below iframe with your Google Maps embed code -->         
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-sm-7">
				<div class="cwell">
					<!-- Contact form -->
					<h5>Contact Form</h5>
					<form method="post" action="{{url('kontak')}}" role="form">
						<div class="form-group">
							<label for="name">Your Name</label>
							<input type="text" class="form-control" name='namaKontak' id="name" required placeholder="Enter Name">
						</div>                                    
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" name="emailKontak" required placeholder="Enter email">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Content</label>
							<textarea class="form-control"  name="messageKontak" rows="3" required></textarea>
						</div>                        
						<button type="submit" class="btn btn-info">Send</button>
						<button type="reset" class="btn btn-default">Reset</button>
					</form>		  
				</div>
			</div>
			<div class="col-md-6 col-sm-5">
				<div class="cwell">
					<!-- Address section -->
					<h5>Address</h5>
					<div class="address">
						<address>
							<!-- Company name -->
							<h6>{{ Theme::place('title') }}.</h6>
							<!-- Address -->
							{{$kontak->alamat}}<br>
							<!-- Phone number -->
							<abbr title="Phone">P:</abbr> {{$kontak->telepon}}.
						</address>
									  
						<address>
							<!-- Name -->
							<h6>E-Mail Us on:</h6>
							<!-- Email -->
							<a href="mailto:{{$kontak->email}}">{{$kontak->email}}</a>
						</address>									 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>