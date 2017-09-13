<div class="container">
    <header class="page-header">
        <h1 class="page-title">Order Confirmation</h1>
    </header>
    <div class="row">
        <div class="col-md-12">
            @if($checkouttype==1)
            {{ Form::open(array('url'=>'konfirmasiorder','method'=>'post','class'=>'form-inline'))  }}
            @endif
            @if($checkouttype==3)
            {{ Form::open(array('url'=>'konfirmasipreorder','method'=>'post','class'=>'form-inline'))   }}
            @endif
                <div class="form-group">
                    <input type="text" class="form-control" id="search" placeholder="Order Code" name="kodeorder" required>
                </div>
                <button type="submit" class="btn btn-info">Search</button>
            {{Form::close()}}
        </div>
    </div>
</div>