@extends('login.loginmain')
<!-- END HEAD -->

@section('main-content')
    <div class="logo">
        <a href="#">
            <img src="{{asset('images/logo-white-small.png')}}" alt="logo">
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
                <a data-toggle="modal" data-target="#passwordResetModal">Forgot Password?</a>
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
        <form class="forget-form" action="index.html" method="post">
            <h3 class="font-green">Forget Password ?</h3>
            <p> Enter your e-mail address below to reset your password. </p>
            <div class="form-group">
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
            <div class="form-actions">
                <button type="button" id="back-btn" class="btn btn-default">Back</button>
                <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
            </div>
        </form>
        <!-- END FORGOT PASSWORD FORM -->
        <!-- BEGIN REGISTRATION FORM -->

        <!-- END REGISTRATION FORM -->
    </div>
    {{--PASSWORD RESET MODEL--}}

    <div class="modal fade" id="passwordResetModal" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4>Reset Password</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="email" name="resetEmail" class="form-control resetEmail" placeholder="Please, Enter your email..." required>
                        <br>
                        <input type="submit" value="Submit" class="btn btn-primary" id="checkEmail">
                    </form>
                </div>
            </div>
        </div>
    </div>

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


{{--    <script>--}}
{{--        var checkEmail = document.querySelector('#checkEmail');--}}
{{--        var resetEmail = document.querySelector('.resetEmail');--}}
{{--        checkEmail.addEventListener('click',function(e){--}}
{{--            e.preventDefault();--}}
{{--            var email = resetEmail.value;--}}
{{--            if(email !== '') {--}}
{{--                if(isValidEmailAddress(email)) {--}}
{{--                    var csrf = "{{csrf_token()}}";--}}
{{--                    $.ajax({--}}
{{--                        url: "{{route('check.email')}}",--}}
{{--                        type: 'POST',--}}
{{--                        data: {email: email, _token: csrf},--}}
{{--                        success: function (data) {--}}
{{--                            console.log(data);--}}
{{--                            if(data==='0'){--}}
{{--                                $('#resetId').text("No email found");--}}
{{--                                $('#passwordResetModal').modal('hide');--}}
{{--                            }else{--}}
{{--                                $('#resetId').text("Password reset link successfully sent to your email");--}}
{{--                                $('#passwordResetModal').modal('hide');--}}
{{--                            }--}}

{{--                        },--}}
{{--                    });--}}

{{--                }--}}
{{--            }--}}
{{--            function isValidEmailAddress(emailAddress){--}}
{{--                var pattern = new RegExp(/^(("[\w-+\s]+")|([\w-+]+(?:\.[\w-+]+)*)|("[\w-+\s]+")([\w-+]+(?:\.[\w-+]+)*))(@((?:[\w-+]+\.)*\w[\w-+]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][\d]\.|1[\d]{2}\.|[\d]{1,2}\.))((25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\.){2}(25[0-5]|2[0-4][\d]|1[\d]{2}|[\d]{1,2})\]?$)/i);--}}
{{--                return pattern.test(emailAddress);--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}
    {{--END OF SCRIPT CHECK EMAIL EXISTS IN DATABASE OR NOT FOR RESET--}}
@endsection
