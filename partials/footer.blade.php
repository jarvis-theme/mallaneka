<footer class="main-footer">
    <div class="container">
        <div class="row row-col-gap" data-gutter="60">
            <div class="col-md-3">
                <h4 class="widget-title-sm">TheBox Shop</h4>
                <p>Mus magnis sodales pellentesque ultricies tincidunt id quis magnis donec aliquet eros</p>
                <ul class="main-footer-social-list">
                	@if($kontak->fb)
                    <li>
                        <a class="fa fa-facebook" href="{{$kontak->fb}}"></a>
                    </li>
                    @endif
                    @if($kontak->tw)
                    <li>
                        <a class="fa fa-twitter" href="{{$kontak->tw}}"></a>
                    </li>
                    @endif
                    @if(!empty($kontak->pt))
                    <li>
                        <a class="fa fa-pinterest" href="{{$kontak->pt}}"></a>
                    </li>
                    @endif
                    @if(!empty($kontak->ig))
                    <li>
                        <a class="fa fa-instagram" href="{{$kontak->ig}}"></a>
                    </li>
                    @endif
                    @if(!empty($kontak->pt))
                    <li>
                        <a class="fa fa-google-plus" href="{{$kontak->pt}}"></a>
                    </li>
                    @endif
                </ul>
            </div>
            @foreach($tautan as $key=>$group)
                @if($key!=2)
            	<div class="col-md-2">
                	<h4 class="widget-title-sm">{{$group->nama}}</h4>
            		<ul class="main-footer-tag-list">
                        @foreach($group->link as $key=>$link)
                        	<li>
                            @if($link->halaman=='1')
                            	@if($link->linkTo == 'halaman/about-us')
                            	<a class="invarseColor" href='{{url(strtolower($link->linkTo))}}'><i class="icon-caret-right"></i> {{$link->nama}}</a>
                                @else
                            	<a class="invarseColor" href='{{url("halaman/".strtolower($link->linkTo))}}'><i class="icon-caret-right"></i> {{$link->nama}}</a>
                                @endif
                            
                            @elseif($link->halaman=='2')
                            <a class="invarseColor" href='{{url("blog/".strtolower($link->linkTo))}}'><i class="icon-caret-right"></i> {{$link->nama}}</a>
                            
                            @elseif($link->url=='1')
                            <a class="invarseColor" href="{{strtolower($link->linkTo)}}"><i class="icon-caret-right"></i> {{$link->nama}}</a>
                            
                            @else
                            <a class="invarseColor" href='{{url(strtolower($link->linkTo))}}'><i class="icon-caret-right"></i> {{$link->nama}}</a>
                            @endif
                            </li>
                        @endforeach
                	</ul>
            	</div>    
            	@endif    
            @endforeach
            <div class="col-md-4">
                <h4 class="widget-title-sm">Newsletter</h4>
                <div id="mc_embed_signup">
	                <form action="{{@$mailing->action}}" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form newsletter" class="validate form-inline" target="_blank" novalidate>
	                    <div class="form-group">
	                        <label>Sign up to the newsletter</label>
	                        <input class="newsletter-input form-control" placeholder="Your e-mail address" type="email" id="newsletter mce-EMAIL" required {{@$mailing->action==''?'disabled style="cursor:default"':''}} />
	                    </div>
	                    <div class="form-group">
	                    	<input class="btn btn-primary" type="submit" value="Sign up" {{ @$mailing->action==''?'disabled="disabled"':'' }}/>
	                    </div>
	                </form>
				</div>
            </div>
        </div>
        <ul class="main-footer-links-list">
            <li><a href="#">About Us</a>
            </li>
            <li><a href="#">Jobs</a>
            </li>
            <li><a href="#">Legal</a>
            </li>
            <li><a href="#">Support & Customer Service</a>
            </li>
            <li><a href="#">Blog</a>
            </li>
            <li><a href="#">Privacy</a>
            </li>
            <li><a href="#">Terms</a>
            </li>
            <li><a href="#">Press</a>
            </li>
            <li><a href="#">Shipping</a>
            </li>
            <li><a href="#">Payments & Refunds</a>
            </li>
        </ul>
        <!-- <img class="main-footer-img" src="img/test_footer2-i.png" alt="Image Alternative text" title="Image Title" /> -->
    </div>
</footer>

<div class="copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="copyright-text">
					{{ Theme::place('title') }} Copyright {{date('Y')}} © - Powered by <a target="_blank" href="http://jarvis-store.com">Jarvis Store</a>
                </p>
            </div>
            <div class="col-md-6">
                <ul class="payment-icons-list">
                	<li>
                	@if(!empty($bank))	
						@foreach(list_banks() as $value)	
							<img src="{{bank_logo($value)}}" alt="{{$value->name}}" class="img-responsive" />
						@endforeach	
						@if(count(list_payments()) > 0)
							@foreach(list_payments() as $pay)
								@if($pay->nama == 'ipaymu' && $pay->aktif == 1)
									<img src="{{url('img/bank/ipaymu.jpg')}}" alt="support ipaymu" class="img-responsive" />
								@endif
							@endforeach
						@endif
						@if(count(list_dokus()) > 0 && list_dokus()->status == 1)
							<img src="{{url('img/bank/doku.jpg')}}" alt="support doku myshortcart" class="img-responsive" />
						@endif
					@endif
                </ul>
            </div>
        </div>
    </div>
</div>

{{pluginPowerup()}}