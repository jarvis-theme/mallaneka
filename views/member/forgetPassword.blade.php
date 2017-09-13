<div class="container">
    <div class="row">
        <div class="col-md-8">
            <header class="page-header">
                <h1 class="page-title">My Account</h1>
            </header>
            <div class="box-lg">
                <div class="row" data-gutter="60">
                    <div class="col-md-8 col-md-offset-2">
                        <h3 class="widget-title">Forget Password</h3>
                        {{ Form::open(array('url'=>'member/forgetpassword','method'=>'post')) }}
                            <div class="form-group">
                                <label>E-mail</label>
                                <input class="form-control" type="email" name="recoveryEmail" value="{{ Input::old(recoveryEmail) }}" required />
                            </div>
                            <input class="btn btn-primary" type="submit" value="Recover Password" />
                        {{ Form::close() }}
                        <br />
                        <a href="{{ url('member') }}">Already Member</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>