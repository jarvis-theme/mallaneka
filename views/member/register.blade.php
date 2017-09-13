<div class="container">
    <div class="row">
     <header class="page-header">
                <h1 class="page-title">My Account</h1>
            </header>
        <div class="col-md-12">
           
            <div class="box-lg">
                <div class="row" data-gutter="60">
                    <div class="col-lg-12">
                        <h3 class="widget-title">Register</h3>
                        {{ Form::open(array('url'=>'member','method'=>'post')) }}
                            <div class="col-lg-6 zeropadleft">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" name="nama" value="{{ Input::old('nama') }}" required />
                                </div>
                                <div class="form-group">
                                    <label>E-mail</label>
                                    <input class="form-control" type="email" name="email" value="{{ Input::old('email') }}" required />
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="form-control" type="password" name="password" required />
                                </div>
                                <div class="form-group">
                                    <label>Repeat Password</label>
                                    <input class="form-control" type="password" name="password_confirmation" required />
                                </div>
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input class="form-control" type="text" name="telp" value="{{ Input::old('telp') }}" required />
                                </div>
                            </div>
                            <div class="col-lg-6 zeropadright">
                                <div class="form-group">
                                    <label>Country</label>
                                    {{ Form::select("negara", array("" => "-- Select Country --") + $negara, Input::old("negara"), array("class"=>"form-control", "name"=>"negara", "id"=>"negara", "required", "style"=>"width: 100%", "data-rel"=>"chosen", "onchange"=>"searchProvinsi(this.value)")) }} 
                                </div>
                                <div class="form-group">
                                    <label>Province</label>
                                    {{ Form::select("provinsi", array("" => "-- Select Province --") + $provinsi, Input::old("provinsi"), array("class"=>"form-control", "name"=>"provinsi", "id"=>"provinsi", "required", "style"=>"width: 100%", "data-rel"=>"chosen", "onchange"=>"searchKabupaten(this.value)")) }} 
                                </div>
                                <div class="form-group">
                                    <label>City</label>
                                    {{ Form::select("kota",array("" => "-- Select City --") + $kota, Input::old("kota"), array("class"=>"form-control", "id"=>"kota", "style"=>"width: 100%;", "required", "name"=>"kota", "data-rel"=>"chosen")) }}
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea name="alamat" class="form-control" required>{{ Input::old("alamat") }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Postal Code</label>
                                    <input type="number" class="form-control" name="kodepos" value="{{ Input::old('kodepos') }}" />
                                </div>
                            </div>
                            <div class="col-md-12 zeropad">
                                <fieldset class="fieldsetbox">
                                    <div class="form-group">
                                        {{ HTML::image(Captcha::img(), 'Captcha') }}
                                        <input type="text" class="form-control captcha" name="captcha" placeholder="Enter Captcha" required />
                                    </div>
                                </fieldset>
                                 <div class="checkbox">
                                    <label><input class="i-check" type="checkbox" name="readme" value="1" required checked="checked" />I agree to the <a class="rules" target="_blank" href="{{URL::to('service')}}">TOS, Privacy Policy, and Terms of Supply</a></label>
                                </div>
                                <br>
                                <input class="btn btn-primary" type="submit" value="Sign in" />
                            </div>
                        {{ Form::close() }}
                        <div class="clearfix"></div>
                        <br />
                        <a href="{{ url('member/forget-password') }}">Forgot Your Password?</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 hide">
            
            <div class="box-lg">
                <div class="row" data-gutter="60">
                    <div class="col-lg-12">
                        <h3 class="widget-title">Cart</h3>
                        <div class="clearfix"></div>
                        <br>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown" id="shoppingcartplace">
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>