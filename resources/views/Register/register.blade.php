@extends('login.loginmain')
<!-- END HEAD -->

@section('main-content')
    <div class="container">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div class="jumbotron">
<form action="{{route('employee.store')}}" method="post"  enctype="multipart/form-data" class="portlet light">

    <!-- One "tab" for each step in the form: -->
    {{csrf_field()}}
    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissable">
            {{Session('message')}}
        </div>
    @endif
    <div class="row">
        <div class="col-sm-12">
            <div class="portlet-title">
                <div class="caption font-green">
                    <i class="icon-plus font-green"></i>
                    <span class="caption-subject bold uppercase"> SignUp as Employee</span>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label> Employee Name</label>
                <input type="text" placeholder="Full Name of Company..."   onkeyup="clearerror('nameError')" name="name" value="{{ old('name')}}" class="form-control">
                @if ($errors->has('name'))
                    <span class="help-block" id="nameError">
                                                <strong class="text-danger">{{ $errors->first('name') }}</strong>
                                            </span>
                @endif
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label> Employee Email</label>
                <input type="email" placeholder="Company Email...."  onkeyup="clearerror('emailError')" name="email" value="{{ old('email')}}" class="form-control">
                @if ($errors->has('email'))
                    <span class="help-block" id="emailError">
                                                <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                            </span>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label> Address</label>
                <input type="text" placeholder="City..."  onkeyup="clearerror('cityError')" name="city" value="{{ old('city')}}" class="form-control">
                @if ($errors->has('city'))
                    <span class="help-block" id="cityError">
                                <strong class="text-danger">{{ $errors->first('city') }}</strong>
                            </span>
                @endif
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label> Phone Number</label>
                <input type="text" placeholder="Company Phone Number..."  onkeyup="clearerror('contactError')" name="contact" value="{{ old('contact')}}" class="form-control">
                @if ($errors->has('contact'))
                    <span class="help-block" id="contactError">
                                                <strong class="text-danger">{{ $errors->first('contact') }}</strong>
                                            </span>
                @endif
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Password <small>(required)</small></label>
                <input name="password" type="password"  onkeyup="clearerror('passwordError')" class="form-control" id="psw"   >
                <small class="password"><i>(Password must include 1 capital letter,small letters and numbers (min : 8 characters))</i></small>
                @if ($errors->has('password'))
                    <span class="help-block" id="passwordError">
                                <strong class="text-danger">{{ $errors->first('password') }}</strong>
                            </span>
                @endif
                <label  class="col-md-12 invalids" id="formerror_password"></label>

            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Retype Password <small>(required)</small></label>
                <input name="confirmed_password" onkeyup="clearerror('confirmError')" type="password" class="form-control" >
                <small class="password"><i>(Password must include 1 capital letter,small letters and numbers (min : 8 characters))</i></small>

                @if ($errors->has('confirmed_password'))
                    <span class="help-block" id="confirmError">
                                <strong class="text-danger">{{ $errors->first('confirmed_password') }}</strong>
                            </span>
                @endif
                <label  class="col-md-12 invalids" id="formerror_confirmedpassword"></label>

            </div>
        </div>
    </div>


    <div style="overflow:auto;">
        <div style="float:right;">
            <button class="btn btn-primary ">SignUp</button>
        </div>
    </div>

</form>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>
@endsection
