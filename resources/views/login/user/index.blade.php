@extends('login.loginmain')
<!-- END HEAD -->

@section('main-content')
    <div class="logo">
        <a href="http://klientscape.com">
            <img src="{{asset('images/logo.png')}}" alt="logo" width="300">
        </a>
    </div>
    <div class="content">
        <!-- BEGIN LOGIN FORM -->
        <form class="login-form" action="{{route('login.check')}}" method="post">
            {{csrf_field()}}
            <center><p id="resetId" style="color:#32C5D2"></p></center>
            <h3 class="form-title font-green">SIGN IN</h3>
            @if(Session::has('message'))
                <br><span class="alert alert-danger alert-dismissible" role="alert">
                    <strong>{{ session::get('message') }}</strong>
                </span><br><br><br>
            @endif
            @if(Session::has('message1'))
                <br><span class="alert alert-danger alert-dismissible" role="alert">
                    <strong>{{ session::get('message1') }}</strong>
                </span><br><br><br>
            @endif
            @if(Session::has('message2'))
                <br><span class="alert alert-success alert-dismissible" role="alert">
                    <strong>{{ session::get('message2') }}</strong>
                </span><br><br><br>
            @endif
            {{--<div class="alert alert-danger display-hide">--}}
            {{--<button class="close" data-close="alert"></button>--}}
            {{--<span> Enter any username and password. </span>--}}
            {{--</div>--}}
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Email</label>
                <input class="form-control form-control-solid placeholder-no-fix " value="{{ old('email') }}" type="email"  placeholder="Email" name="email" onkeyup="clearerror('email')" />
                @if ($errors->has('email'))
                    <span class="invalid-feedback text-danger" role="alert" id="email">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                @endif
                @if(Session::has('email'))
                    <strong class="invalid-feedback text-danger" role="alert" id="email">
                        <strong></strong> {{Session('email')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <input class="form-control form-control-solid placeholder-no-fix input" type="password" autocomplete="off" placeholder="Password" name="password" onkeyup="clearerror('password')"/>
                @if ($errors->has('password'))
                    <span class="invalid-feedback text-danger" role="alert" id="password">
      <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
                @if(Session::has('password'))
                    <strong class="invalid-feedback text-danger" role="alert" id="password">
                        <strong></strong> {{Session('password')}}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group">
{{--                <a data-toggle="modal" data-target="#passwordResetModal">Forgot Password?</a>--}}
            </div>
            <div class="form-actions">
                <button type="submit" class="btn green uppercase">Login</button>
            </div>
            <div class="create-account">
                <p>
                    <a href="{{route('register.page')}}"  class="uppercase">Create an Employee account</a>
                </p>

            </div>

        </form>
        <!-- END LOGIN FORM -->
        <!-- BEGIN FORGOT PASSWORD FORM -->
{{--        <form class="forget-form" action="index.html" method="post">--}}
{{--            <h3 class="font-green">Forget Password ?</h3>--}}
{{--            <p> Enter your e-mail address below to reset your password. </p>--}}
{{--            <div class="form-group">--}}
{{--                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>--}}
{{--            <div class="form-actions">--}}
{{--                <button type="button" id="back-btn" class="btn btn-default">Back</button>--}}
{{--                <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>--}}
{{--            </div>--}}
{{--        </form>--}}
        <!-- END FORGOT PASSWORD FORM -->
        <!-- BEGIN REGISTRATION FORM -->

        <!-- END REGISTRATION FORM -->
    </div>
    {{--PASSWORD RESET MODEL--}}

    {{--END OF PASSWORD RESET MODEL--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        function clearerror(id)
        {

            $('#'+id).fadeOut();
        }
    </script>

    {{--SCRIPT CHECK EMAIL EXISTS IN DATABASE OR NOT FOR RESET--}}

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


{{--
    {{--END OF SCRIPT CHECK EMAIL EXISTS IN DATABASE OR NOT FOR RESET--}}
@endsection
