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
@if($errors->all())
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	Kami menemukan error berikut:			
	<ul>
	@foreach($errors->all() as $message)
	<li style="margin-left: 20px;">{{ $message }}</li>
	@endforeach
	</ul>
</div>
@endif

@if(Session::has('error'))
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<h3>Kami menemukan error berikut:</h3>
	<p>{{Session::get('error')}}</p>
</div>
@endif

<!-- ======================================================================== -->
<div class="blocky">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="reg-login-info">
					<h2>Login to Access Amazing Benefits <span class="color">!!!</span></h2>
					<h3>New Customer</h3>
					<p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p><br><a href="{{url('member/create')}}" class="btn btn-danger">Create Account</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="register-login">
					<div class="cool-block">
						<div class="cool-block-bor">						
							<h3>Login</h3>
							{{Form::open(array('url'=>'member/login','method'=>'post','class'=>'form-horizontal'))}}
								<div class="form-group">
									<label for="inputEmail1" class="col-lg-2 control-label">Email</label>
									<div class="col-lg-10">
										<input type="email" class="form-control" id="inputEmail1" name='email' value='{{Input::old("email")}}' required placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPassword1" class="col-lg-2 control-label">Password</label>
									<div class="col-lg-10">
										<input type="password" class="form-control" id="inputPassword1" name="password" placeholder="Password">
										<a href="{{url('member/forget-password')}}" style="font-size: smaller;float: right;">Have you forget your password?</a>
									</div>
								</div>
								<!-- <div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
										<div class="checkbox">
											<label>
												<input type="checkbox"> Remember me
											</label>
										</div>
									</div>
								</div> -->
								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
										<button type="submit" class="btn btn-info">Sign in</button>
										<button type="reset" class="btn btn-default">Reset</button>
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