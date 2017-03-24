@if(Session::has('error'))
	<div class="error" id='message' style='display:none'>							
		{{Session::get('error')}}
	</div>
@endif
@if(Session::has('success'))
	<div class="success" id='message' style='display:none'>
		<p>Selamat, anda sudah berhasil register. Silakan check email untuk mengetahui informasi akun anda.</p>					
	</div>
@endif
@if(Session::has('errorrecovery'))
	<div class="error" id='message' style='display:none'>
		<p>Maaf, email anda tidak ditemukan.</p>					
	</div>
@endif	

<!-- ========================================================= -->
<div class="blocky">
	<div class="container">
		<div class="row">
			@if(count(vertical_banner()) > 0)
			<div class="col-sm-4">
				<div class="reg-login-info">
					<h2>Banner</h2>
					@foreach(vertical_banner() as $item)
					<div>
						<a href="{{url($item->url)}}">
							<img src="{{banner_image_url($item->gambar)}}" />
						</a>
					</div>
					@endforeach
				</div>
			</div>
			<div class="col-sm-6 col-sm-offset-2">
			@else
			<div class="col-sm-12 col-xs-12">
			@endif
				<div class="register-login">
					<div class="cool-block">
						<div class="cool-block-bor">
							<h3>Forget Password</h3>
							{{Form::open(array('url' => 'member/recovery/'.$id.'/'.$code, 'class' => 'form-horizontal'))}}
								<div class="form-group">
									<label for="inputEmail1" class="col-lg-2 control-label">Password Baru</label>
									<div class="col-lg-10">
										<input class="form-control" id="inputEmail1" type="password" name="password" placeholder="password baru" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail1" class="col-lg-2 control-label">Konfirmasi Password Baru</label>
									<div class="col-lg-10">
										<input class="form-control" id="inputEmail1" type="password" name="password_confirmation" placeholder="konfirmasi password baru" required>
									</div>
								</div>
					   
								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
										<button type="submit" class="btn btn-info">Update Password</button>
									</div>
								</div>
							{{Form::close()}}
						</div>
					</div>   
				</div>
			</div>
		</div>
		<div class="sep-bor"></div>
	</div>
</div>