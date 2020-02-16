@extends('login.loginmain')
<!-- END HEAD -->

@section('main-content')
    <div class="logo" style="margin-bottom:-30px;">
        <a href="index.html">
            <img src="{{asset('assets/images/logo-white-small.png')}}" alt="" /> </a>
        <br><h5 style="color:white;">SMS Portal</h5>
    </div>
    <div class="content">
        <h3>Reset Password</h3>
        <br>
        <form class="login-form" action="{{route('update.reset.password',$email)}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <input class="form-control form-control-solid placeholder-no-fix input" type="password" autocomplete="off" placeholder="New Password" name="password"/>
                @if ($errors->has('password'))
                    <span class="invalid-feedback text-danger">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                @endif
            </div>
            <div class="form-group">
                <input class="form-control form-control-solid placeholder-no-fix input" type="password" autocomplete="off" placeholder="Confirm Password" name="password_confirmation"/>
                @if ($errors->has('password_confirmation'))
                    <span class="invalid-feedback text-danger">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                @endif
            </div>
            <div class="form-actions">
                <button type="submit" class="btn green uppercase">Submit</button>
            </div>
        </form>
    </div>
@endsection
