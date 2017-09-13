<div class="container">
    <header class="page-header">
        <h1 class="page-title">Testimonial</h1>
    </header>
    <div class="row">
        @foreach (list_testimonial() as $items)  
        <div class="col-md-12">
            <h3 class="widget-title">{{ $items->nama }} <small class="inline-date"><i class="fa fa-clock-o"></i><i>{{ $items->created_at }}</i></small></h3>
            <div class="box">
                <p>{{ $items->isi }}</p>
            </div>
        </div>
        <div class="gap gap-small"></div>
        @endforeach
        <div class="col-md-12">
            {{ list_testimonial()->links() }}
        </div>
    </div>
    <form method="post" action="{{url('testimoni')}}" role="form">
        <div class="form-group">
            <label for="name">Your Name</label>
            <input type="text" class="form-control" name="nama" id="name" required />
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Testimonial</label>
            <textarea name="testimonial" class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-info">Send</button>
        <button type="reset" class="btn btn-default">Reset</button>
    </form>
</div>