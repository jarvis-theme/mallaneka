<div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-login-dialog">
    <h3 class="widget-title">Member Login</h3>
    <p>Welcome back, friend. Login to get started</p>
    <hr />
    <form action="{{ url('member/login') }}" method="post">
        <div class="form-group">
            <label>Email</label>
            <input class="form-control" name="email" type="text" value="{{ Input::old('email') }}" required />
        </div>
        <div class="form-group">
            <label>Password</label>
            <input class="form-control" name="password" type="password" required />
        </div>
        <input class="btn btn-primary" type="submit" value="Sign In" />
    </form>
    <div class="gap gap-small"></div>
    <ul class="list-inline">
        <li><a href="#nav-account-dialog" class="popup-text">Not Member Yet</a>
        </li>
        <li><a href="#nav-pwd-dialog" class="popup-text">Forgot Password?</a>
        </li>
    </ul>
</div>
@if ( ! is_login())
<div class="mfp-with-anime mfp-hide mfp-dialog clearfix"  id="nav-account-dialog" style="max-width: 800px;background: #112b51;">
    <!--<center>
        <h2 class="widget-title" style="color:#fff;">Daftarkan diri anda dan nikmati voucher sebesar</h2>
        <h1 style="color:#fff;">Rp 50.000</h1>
        <p style="color:#fff;">untuk berbelanja di mall<span style="color:#f3b90e;">aneka</span></p>
    </center>-->
    <hr />
    {{ Form::open(array('url'=>'member','method'=>'post')) }}
        <div class="col-lg-6 col-lg-offset-3 zeropadleft">
            <div class="form-group">
                <label style="color:#fff;">Name</label>
                <input type="text" class="form-control" name="nama" value="{{ Input::old('nama') }}" required >
            </div>
            <div class="form-group">
                <label style="color:#fff;">Email</label>
                <input type="email" class="form-control" name="email" value="{{ Input::old('email') }}" required >
            </div>
            
            <div class="form-group">
                <label style="color:#fff;">Phone Number</label>
                <input type="text" class="form-control" name="telp" value="{{ Input::old('telp') }}" required >
            </div>
            
            <input name="negara" type="hidden" value="1" />
            <input name="provinsi" type="hidden" value="0" />
            <input name="kota" type="hidden" value="0" />

                <!--<label>Address</label>-->
                <input type="hidden" name="alamat" class="form-control" value=" " />


                <!--<label>Postal Code</label>-->
                <input type="hidden" class="form-control" name="kodepos" value=" " />

            <div class="form-group">
                <label style="color:#fff;">Password</label>
                <input type="password" class="form-control" name="password" required >
            </div>
            <div class="form-group">
                <label style="color:#fff;">Repeat Password</label>
                <input type="password" class="form-control" name="password_confirmation" required >
            </div>
            <!--<div class="form-group">
                <label style="color:#fff;">Capcha</label><br>
                {{ HTML::image(Captcha::img(), 'Captcha') }}
                <input type="text" class="form-control captcha" name="captcha" placeholder="Enter Captcha" required >
            </div>-->
            
        </div>
        <div class="col-lg-12 zeropad">
            <div class="checkbox hide">
                <label><input class="i-check" type="checkbox" name="readme" value="1" required checked="checked" />I agree to the <a class="rules" target="_blank" href="{{URL::to('service')}}">TOS, Privacy Policy, and Terms of Supply</a></label>
            </div>
            <div class="gap gap-small"></div>
            <center>
                <input class="btn btn-large btn-primary" style="padding: 14px;font-size: 32px;border: 2px #fff solid;border-radius: 0;" type="submit" value="SIGN UP" />
            </center>
        </div>
    {{ form::close() }}
    <div class="gap gap-small"></div>
    <ul class="list-inline hide">
        <li><a href="#nav-login-dialog" class="popup-text">Already Member</a></li>
    </ul>
</div>
@endif
<div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-pwd-dialog">
    <h3 class="widget-title">Password Recovery</h3>
    <p>Enter Your Email and We Will Send the Instructions</p>
    <hr />
    <form action="{{ url('member/forgetpassword' )}}" method="post">
        <div class="form-group">
            <label>Your Email</label>
            <input class="form-control" type="email" name="recoveryEmail" required />
        </div>
        <input class="btn btn-primary" type="submit" value="Recover Password" />
    </form>
</div>
<nav class="navbar navbar-inverse navbar-main yamm navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-nav-collapse" area_expanded="false"><span class="sr-only">Main Menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{URL::to('/')}}" {{ Request::url() != url('home') || Request::url() != url('/') ? "style='padding: 0px 15px;'" : "" }}}>
                @if(Request::url() === url('home') || Request::url() === url('/'))
                <img style="width: 128px;" src="{{ url(logo_image_url()) }}" alt="{{ Theme::place('title') }}" title="{{ Theme::place('title') }}" />
                @else
                <img src="//s3-ap-southeast-1.amazonaws.com/cdn.jarvis-store.com/mallaneka-upload/galeri/logo-mallaneka.png" alt="{{ Theme::place('title') }}" title="{{ Theme::place('title') }}" style="width: auto; height: 100%" />
                @endif
            </a>
        </div>
        <div class="collapse navbar-collapse" id="main-nav-collapse" style="width: inherit;">
            <ul class="nav navbar-nav">
                
                <li class="dropdown">
                    <a href="{{URL::to('category/perfumes')}}" data-effect="mfp-move-from-top">Perfume</a>
                    <ul class="dropdown-menu dropdown-menu-category">
                        <li><a href="{{URL::to('category/perfumes/pria')}}"><i class="fa fa-male dropdown-menu-category-icon"></i>Man's</a></li>
                        <li><a href="{{URL::to('category/perfumes/shared')}}"><i class="fa fa-venus-mars dropdown-menu-category-icon"></i>Unisex</a></li>
                        <li><a href="{{URL::to('category/perfumes/wanita')}}"><i class="fa fa-female dropdown-menu-category-icon"></i>Woman's</a></li>
                    </ul>
                </li>
                <li><a href="{{URL::to('koleksi/accessories')}}" data-effect="mfp-move-from-top">Accessories</a></li>
                <!--<li><a href="{{URL::to('category/perfumes/shared')}}" data-effect="mfp-move-from-top">UNISEX</a></li>
                <li><a href="{{URL::to('category/perfumes/wanita')}}" data-effect="mfp-move-from-top">WANITA</a></li>-->
                <!-- kategori -->
                <!-- <li class="dropdown"><a href="#"><i class="fa fa-reorder"></i>  Shop by Category<i class="drop-caret hidden-sm" data-toggle="dropdown"></i></a>
                    <ul class="dropdown-menu dropdown-menu-category">
                    @if(count(category_menu()) > 0)
                        @foreach(category_menu() as $key => $mmenu)
                            @if($mmenu->parent == '0')
                            <li>
                                <a href="{{category_url($mmenu)}}"><i class="fa fa-asterisk dropdown-menu-category-icon"></i>{{$mmenu->nama}}</a>
                                @if($mmenu->anak->count() > 0)
                                <div class="dropdown-menu-category-section">
                                    <div class="dropdown-menu-category-section-inner">
                                        <div class="dropdown-menu-category-section-content">
                                            <div class="row">
                                            @foreach($mmenu->anak as $msubmenu)
                                                @if($msubmenu->parent == $mmenu->id)
                                                <a href="{{category_url($msubmenu)}}">
                                                <div class="col-md-6" 
                                                
                                                @if($msubmenu->nama=='Pria')
                                                    style="background-image: url(https://s3-ap-southeast-1.amazonaws.com/cdn.jarvis-store.com/mallaneka-upload/galeri/pria.png);height: 479px;margin-top: -14px;background-repeat: no-repeat;"
                                                @elseif($msubmenu->nama=='Wanita')
                                                    style="background-image: url(https://s3-ap-southeast-1.amazonaws.com/cdn.jarvis-store.com/mallaneka-upload/galeri/wanita.png);height: 479px;margin-top: -14px;background-repeat: no-repeat;"
                                                @elseif($msubmenu->nama=='Shared')
                                                    style="background-image: url(https://s3-ap-southeast-1.amazonaws.com/cdn.jarvis-store.com/mallaneka-upload/galeri/share.png);height: 279px;margin-top: -400px;background-repeat: no-repeat;margin-left: 176px;"
                                                @endif
                                                
                                                >
                                                    <h5 class="dropdown-menu-category-title"><a href="{{category_url($msubmenu)}}">
                                                    @if($msubmenu->nama=='Pria'|| $msubmenu->nama=='Wanita' || $msubmenu->nama=='Shared')
                                                    <div style="height: 470px;">
                                                    </div>
                                                    @else
                                                    {{$msubmenu->nama}}
                                                    @endif
                                                    
                                                    </a></h5>
                                                    @if($msubmenu->anak->count() > 0)
                                                        <ul class="dropdown-menu-category-list">
                                                        @foreach($msubmenu->anak as $msubmenu2)
                                                            @if($msubmenu2->parent == $msubmenu->id)
                                                            <li><a href="{{category_url($msubmenu2)}}">{{$msubmenu2->nama}}</a>
                                                                <p>{{$msubmenu2->description}}</p>
                                                            </li>
                                                            @endif
                                                        @endforeach
                                                        </ul>
                                                    @endif
                                                </div>
                                                </a>
                                                @endif
                                            @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </li>
                            @endif
                        @endforeach
                      @endif
                    </ul>
                </li>-->

                
            </ul>

            <form class="navbar-form navbar-left navbar-main-search top-search" role="search" action="{{ url('search') }}" method="post">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Cari produk" name="search" required />
                    <button class="btn btn-default navbar-main-search-submit" type="submit"><i class="fa fa-search"></i></button>
                </div>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown" id="shoppingcartplace">
                    {{ $ShoppingCart }}
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- halaman 
                <li class="dropdown"><a href="#">Informasi<i class="drop-caret hidden-sm" data-toggle="dropdown"></i></a>
                    <ul class="dropdown-menu">
                        <li class="yamm-content">
                            <div class="row row-eq-height row-col-border">
                                @foreach(all_menu() as $menu)  
                                <div class="col-md-4">
                                    <h5>{{$menu->nama}}</h5>
                                    <ul class="dropdown-menu-items-list">
                                        @foreach($menu->link as $page)
                                        <li><a href="{{menu_url($page)}}">{{$page->nama}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endforeach
                            </div>
                        </li>
                    </ul>
                </li>-->
                <li><a href="{{URL::to('blog')}}"  class="popup-text1"><i class="fa fa-info visible-xs visible-ls" data-toggle="dropdown"></i> Blog</a></li>
                @if ( ! is_login())
                <li><a href="#nav-login-dialog"  class="popup-text">Sign In</a></li>
                <li><a href="#nav-account-dialog" data-effect="mfp-move-from-top" class="popup-text">Create Account</a></li>
                @else
                <li class="dropdown visible-md visible-lg"><a href="#" style="text-transform: capitalize;"><i class="fa fa-user" data-toggle="dropdown"></i> {{user()->nama}}  </a>
                    <ul class="dropdown-menu" style="right: 32px;">
                        <li class=""><a href="{{URL::to('member')}}" data-effect="mfp-move-from-top">My Profile</a></li>
                        <li class=""><a href="{{URL::to('logout')}}" data-effect="mfp-move-from-top">Logout</a></li>
                    </ul>
                </li>
                <li><a href="{{URL::to('member')}}"  class="visible-xs visible-ls"><i class="fa fa-user" data-toggle="dropdown"></i> {{user()->nama}}</a></li>
                <li><a href="{{URL::to('logout')}}"  class="visible-xs visible-ls"><i class="fa fa-sign-out" data-toggle="dropdown"></i> Logout</a></li>
                @endif
            </ul>
            
        </div>
    </div>
</nav>
