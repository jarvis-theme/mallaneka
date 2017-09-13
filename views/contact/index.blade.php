<div class="container">
    <header class="page-header">
        <h1 class="page-title">Contact Us</h1>
    </header>
    <!--<div class="row">
        <div class="col-lg-12">
            <div class="gmap">
                @if($kontak->lat!='0' || $kontak->lng!='0')
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q={{ $kontak->lat.','.$kontak->lng }}&aq=&sll={{ $kontak->lat.','.$kontak->lng }}&sspn={{ $kontak->lat.','.$kontak->lng }}&ie=UTF8&t=m&z=14&output=embed"></iframe><br />
                @else
                    <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&source=s_q&hl=en&geocode=&q={{ $kontak->alamat }}&aq=0&oq={{ $kontak->alamat }}&sspn=$kontak->lat.','.$kontak->lng&ie=UTF8&hq=&hnear={{ $kontak->alamat }}&t=m&z=14&iwloc=A&output=embed"></iframe><br />
                @endif
            </div>
        </div>
    </div>-->
    <div class="gap gap-small"></div>
    <div class="row" data-gutter="60">
        <div class="col-md-7">
            <h3 class="widget-title">Leave a Message</h3>
            {{ Form::open(array('url'=>'kontak','method'=>'post')) }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="namaKontak" required />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="email" name="emailKontak" required />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" name="messageKontak" rows="3" required></textarea>
                </div>
                <input class="btn btn-primary" type="submit" value="Send a Message" />
            {{ Form::close() }}
        </div>
        <div class="col-md-5">
            <div class="row">
                <div>
                    <h3 class="widget-title">{{ Theme::place('title') }}</h3>
                    <ul class="contact-list">
                        <li>
                            <h5>Email</h5><a href="mailto:{{ $kontak->email }}">{{ $kontak->email }}</a>
                        </li>
                        <li>
                            <h5>Phone Number</h5>
                            <p>{{ $kontak->telepon }}</p>
                        </li>
                        <li>
                            <h5>Address</h5><address>{{ $kontak->alamat }}</address>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="gap gap-small"></div>