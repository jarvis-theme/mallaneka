<footer class="main-footer">

    <div class="container">

        <div class="row row-col-gap" data-gutter="60">

            <div class="col-md-3">

                <center><img style="width: 128px;" src="{{ url(logo_image_url()) }}" alt="{{ Theme::place('title') }}" title="{{ Theme::place('title') }}" /></center>

                <p style="text-align: initial;">{{ short_description(about_us()->isi,205) }}</p>

            </div>

            

            @foreach($tautan as $key=>$group)

                @if($key!=2)

                <div class="col-md-2">

                    <h4 class="widget-title-sm">{{$group->nama}}</h4>

                    <ul class="main-footer-links-list-lg" style="display: grid;">

                        @foreach($group->link as $key=>$link)

                        <li>

                            <a class="invarseColor" href="{{ menu_url($link) }}"><i class="icon-caret-right"></i> {{ $link->nama }}</a>

                        </li>

                        @endforeach

                    </ul>

                </div>    

                @endif    

            @endforeach

            <div class="col-md-2">

                <h4 class="widget-title-sm">Ikuti kami</h4>

                <ul class="main-footer-social-list">

                    @if(!empty($kontak->fb))

                    <li>

                        <a class="fa fa-facebook" href="{{$kontak->fb}}" target="_blank"></a>

                    </li>

                    @endif

                    @if(!empty($kontak->tw))

                    <li>

                        <a class="fa fa-twitter" href="{{$kontak->tw}}" target="_blank"></a>

                    </li>

                    @endif

                    @if(!empty($kontak->pt))

                    <li>

                        <a class="fa fa-pinterest" href="{{$kontak->pt}}" target="_blank"></a>

                    </li>

                    @endif

                    @if(!empty($kontak->ig))

                    <li>

                        <a class="fa fa-instagram" href="{{$kontak->ig}}" target="_blank"></a>

                    </li>

                    @endif

                    @if(!empty($kontak->gp))

                    <li>

                        <a class="fa fa-google-plus" href="{{$kontak->gp}}" target="_blank"></a>

                    </li>

                    @endif

                    @if(!empty($kontak->tl))

                    <li>

                        <a class="fa fa-tumblr" href="{{ url($kontak->tl) }}" target="_blank"></a>

                    </li>

                    @endif

                    @if(!empty($kontak->picmix))

                    <li>

                        <a href="{{ url($kontak->picmix) }}" target="_blank">

                            <img src="https://s3-ap-southeast-1.amazonaws.com/cdn2.jarvis-store.com/blogs/event/icon-picmix.png" style="height: 30px;" >

                        </a>

                    </li>

                    @endif

                </ul>

            </div>

            <div class="col-md-3">

                <h4 class="widget-title-sm">Newsletter</h4>

                <form action="{{@$mailing->action}}" method="post" name="newsletter" target="_blank" novalidate>

                    <div class="form-group">

                        <label>Sign up to the newsletter</label>

                        <input class="newsletter-input form-control" name="email" placeholder="Your e-mail address" type="email" required {{@$mailing->action==''?'disabled style="cursor:default"':''}} />

                    </div>

                    <input class="btn btn-primary" type="submit" value="Sign up" {{ @$mailing->action==''?'disabled="disabled"':'' }}/>

                </form>

            </div>

            

        </div>

        <ul class="main-footer-links-list">

        @foreach($tautan as $key=>$group)

            @if($key == 1 || $key == 2)    

                @foreach($group->link as $key=>$link)

                <li><a href="{{ menu_url($link) }}">{{ $link->nama }}</a></li>

                @endforeach

            @endif

        @endforeach

        </ul>

    </div>

</footer>



<div class="copyright-area">

    <div class="container">

        <div class="row">

            <div class="col-md-6">

                <p class="copyright-text">

                    {{ Theme::place('title') }} Copyright {{date('Y')}} © Mallaneka

                </p>

            </div>

            <div class="col-md-6">

                <ul class="payment-icons-list">

                    @if(!empty($bank)) 

                        @foreach(list_banks() as $value) 

                        @if($value->status == 1)
                        <li>
                            <img src="{{ bank_logo($value) }}" alt="{{ $value->name }}" title="{{ $value->bankdefault->nama }}" />
                        </li>
                        @endif

                        @endforeach 

                    @endif

                    @if(count(list_payments()) > 0)

                        @foreach(list_payments() as $pay)

                            @if($pay->nama == 'paypal' && $pay->aktif == 1)

                            <li>

                                <img src="{{ url(Config::get('aws.cdn2.endpoint').'/img/bank/paypal.png') }}" alt="Paypal" title="Paypal" />

                            </li>

                            @endif

                            @if($pay->nama == 'ipaymu' && $pay->aktif == 1)

                            <li>

                                <img src="{{ url(Config::get('aws.cdn2.endpoint').'/img/bank/ipaymu.png') }}" alt="ipaymu" title="Ipaymu" />

                            </li>

                            @endif

                            @if($pay->nama == 'bitcoin' && $pay->aktif == 1)

                            <li>

                                <img src="{{ url(Config::get('aws.cdn2.endpoint').'/img/bitcoin.png') }}" alt="bitcoin" title="Bitcoin" />

                            </li>

                            @endif

                        @endforeach

                    @endif

                    @if(count(list_dokus()) > 0 && list_dokus()->status == 1)

                    <li>

                        <img src="{{ url(Config::get('aws.cdn2.endpoint').'/img/doku.jpg') }}" alt="doku myshortcart" title="Doku" />

                    </li>

                    @endif

                    @if(count(list_veritrans()) > 0 && list_veritrans()->status == 1 && list_veritrans()->type == 1)

                    <li>

                        <img src="{{url(Config::get('aws.cdn2.endpoint').'/img/bank/midtrans.png')}}" alt="Midtrans" title="Midtrans" class="midtrans" >

                    </li>

                    @endif

                </ul>

            </div>

        </div>

    </div>

</div>



{{pluginPowerup()}}