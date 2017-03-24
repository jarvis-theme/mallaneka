<div class="navbar-before mobile-hidden">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="navbar-before-sign">{{$toko->judul}}</p>
            </div>
            <div class="col-md-6">
                <ul class="nav navbar-nav navbar-right navbar-right-no-mar">
                  @foreach(main_menu()->link as $key=>$link)
                    <li><a href="{{menu_url($link)}}">{{$link->nama}}</a></li>
                  @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-login-dialog">
    <h3 class="widget-title">Member Login</h3>
    <p>Welcome back, friend. Login to get started</p>
    <hr />
    <form>
        <div class="form-group">
            <label>Email or Username</label>
            <input class="form-control" type="text" />
        </div>
        <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="text" />
        </div>
        <div class="checkbox">
            <label>
                <input class="i-check" type="checkbox" />Remeber Me</label>
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
<div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-account-dialog">
    <h3 class="widget-title">Create TheBox Account</h3>
    <p>Ready to get best offers? Let's get started!</p>
    <hr />
    <form>
        <div class="form-group">
            <label>Email</label>
            <input class="form-control" type="text" />
        </div>
        <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="text" />
        </div>
        <div class="form-group">
            <label>Repeat Password</label>
            <input class="form-control" type="text" />
        </div>
        <div class="form-group">
            <label>Phone Number</label>
            <input class="form-control" type="text" />
        </div>
        <div class="checkbox">
            <label>
                <input class="i-check" type="checkbox" />Subscribe to the Newsletter</label>
        </div>
        <input class="btn btn-primary" type="submit" value="Create Account" />
    </form>
    <div class="gap gap-small"></div>
    <ul class="list-inline">
        <li><a href="#nav-login-dialog" class="popup-text">Already Memeber</a>
        </li>
    </ul>
</div>
<div class="mfp-with-anim mfp-hide mfp-dialog clearfix" id="nav-pwd-dialog">
    <h3 class="widget-title">Password Recovery</h3>
    <p>Enter Your Email and We Will Send the Instructions</p>
    <hr />
    <form>
        <div class="form-group">
            <label>Your Email</label>
            <input class="form-control" type="text" />
        </div>
        <input class="btn btn-primary" type="submit" value="Recover Password" />
    </form>
</div>
<nav class="navbar navbar-inverse navbar-main yamm">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-nav-collapse" area_expanded="false"><span class="sr-only">Main Menu</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{URL::to('/')}}">
              <img src="{{url(logo_image_url())}}" alt="{{Theme::place('title')}}" title="{{ Theme::place('title') }}" />
            </a>
        </div>
        <div class="collapse navbar-collapse" id="main-nav-collapse">
            <ul class="nav navbar-nav">
                <!-- kategori -->
                <li class="dropdown"><a href="#"><i class="fa fa-reorder"></i>&nbsp; Shop by Category<i class="drop-caret" data-toggle="dropdown"></i></a>
                    <ul class="dropdown-menu dropdown-menu-category">
                      @if(count(category_menu()) > 0)
                        @foreach(category_menu() as $mmenu)
                          @if($mmenu->parent == '0')
                          <li><a href="{{category_url($mmenu)}}"><i class="fa fa-home dropdown-menu-category-icon"></i>{{$mmenu->nama}}</a>
                              <div class="dropdown-menu-category-section">
                                  <div class="dropdown-menu-category-section-inner">
                                      <div class="dropdown-menu-category-section-content">
                                          <div class="row">
                                            @if($mmenu->anak->count() > 0)
                                              @foreach($mmenu->anak as $msubmenu)
                                                @if($msubmenu->parent == $mmenu->id)
                                                <div class="col-md-6">
                                                    <h5 class="dropdown-menu-category-title">{{$msubmenu->nama}}</h5>
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
                                                @endif
                                              @endforeach
                                            @endif
                                          </div>
                                      </div>
                                      <!-- <img class="dropdown-menu-category-section-theme-img" src="img/test_cat/2-i.png" alt="Image Alternative text" title="Image Title" style="right: -10px;" /> -->
                                  </div>
                              </div>
                          </li>
                          @endif
                        @endforeach
                      @endif
                    </ul>
                </li>

                <!-- halaman -->
                <li class="dropdown yamm-fw"><a href="#">Pages<i class="drop-caret" data-toggle="dropdown"></i></a>
                    <ul class="dropdown-menu">
                        <li class="yamm-content">
                            <div class="row row-eq-height row-col-border">

                                <!-- <div class="col-md-2">
                                    <h5>Homepages</h5>
                                    <ul class="dropdown-menu-items-list">
                                        <li><a href="index.html">Layout 1</a>
                                            <p class="dropdown-menu-items-list-desc">Default Layout</p>
                                        </li>
                                        <li><a href="index-layout-2.html">Layout 2</a>
                                            <p class="dropdown-menu-items-list-desc">Banners Area + Product Carousel</p>
                                        </li>
                                        <li><a href="index-layout-3.html">Layout 3</a>
                                            <p class="dropdown-menu-items-list-desc">Aside Departmens</p>
                                        </li>
                                        <li><a href="index-layout-4.html">Layout 4</a>
                                            <p class="dropdown-menu-items-list-desc">Sidebar Right</p>
                                        </li>
                                        <li><a href="index-layout-5.html">Layout 5</a>
                                            <p class="dropdown-menu-items-list-desc">Small Aside Departmens + Sidebar</p>
                                        </li>
                                        <li><a href="index-layout-6.html">Layout 6</a>
                                            <p class="dropdown-menu-items-list-desc">Full Banners + Product Tabs</p>
                                        </li>
                                        <li><a href="index-layout-7.html">Layout 7</a>
                                            <p class="dropdown-menu-items-list-desc">Small Aside Departmens + Slider</p>
                                        </li>
                                    </ul>
                                </div> -->
                                @foreach(all_menu() as $menu)  
                                <div class="col-md-2">
                                    <h5>{{$menu->nama}}</h5>
                                    <ul class="dropdown-menu-items-list">
                                      @foreach($menu->link as $page)
                                        <li><a href="{{menu_url($page)}}">{{$page->nama}}</a>
                                        </li>
                                      @endforeach
                                    </ul>
                                </div>
                                @endforeach
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>

            <form class="navbar-form navbar-left navbar-main-search" role="search">
                <div class="form-group">
                    <input class="form-control" type="text" placeholder="Search the Entire Store..." />
                </div>
                <a class="fa fa-search navbar-main-search-submit" href="#"></a>
            </form>

            <ul class="nav navbar-nav navbar-right">
              @if ( ! is_login())
                <li><a href="#nav-login-dialog"  class="popup-text">Sign In</a></li>
                <li><a href="#nav-account-dialog" data-effect="mfp-move-from-top" class="popup-text">Create Account</a></li>
              @else
                <li><a href="{{URL::to('member')}}" data-effect="mfp-move-from-top">My Account</a></li>
                <li><a href="{{URL::to('logout')}}" data-effect="mfp-move-from-top">Logout</a></li>
              @endif
                
                {{$ShoppingCart}}
            </ul>
        </div>
    </div>
</nav>
