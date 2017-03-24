@if(Session::has('errorlogin'))
	<div class="error" id='message' style='display:none'>
		<p>Maaf, email atau password anda salah.</p>
	</div>
@endif
@if(Session::has('error'))
	<div class="error" id='message' style='display:none'>
		{{Session::get('error')}}!!!
	</div>
@endif
@if(Session::has('errorrecovery'))
	<div class="error" id='message' style='display:none'>
		<p>Maaf, email anda tidak ditemukan.</p>
	</div>
@endif
@if(Session::has('forget'))
<div class="success" id='message' style='display:none'>
	<p>Cek email untuk me-reset password anda!</p>
</div>  
@endif
@if(Session::has('error'))
<div class="error" id='message' style='display:none'>
	<p>{{Session::get('error')}}</p>
</div>  
@endif

<!-- =========================================================================  -->
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
						
							<h3>Forget Password</h3>
							{{Form::open(array('url'=>'member/forgetpassword','method'=>'post','class'=>'form-horizontal'))}}
								<div class="form-group">
									<label for="inputEmail1" class="col-lg-2 control-label">Email</label>
									<div class="col-lg-10">
										<input type="email" class="form-control" id="inputEmail1" name="recoveryEmail" value='{{Input::old("email")}}' required placeholder="Email">
									</div>
								</div>
								 
								<div class="form-group">
									<div class="col-lg-offset-2 col-lg-10">
										<button type="submit" class="btn btn-info">Reset Password</button>
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