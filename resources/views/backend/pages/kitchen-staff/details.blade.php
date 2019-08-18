@extends('backend.main')
@section('main-content')
    <form action="{{route('kitchen_staff.update',$staff_details->id)}}" method="post"  enctype="multipart/form-data" class="portlet light">

        <!-- One "tab" for each step in the form: -->
        {{csrf_field()}}
        {{method_field('PUT')}}
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
                        <span class="caption-subject bold"> Update Kitchen Staff</span>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" placeholder="Full Name of Company..."   onkeyup="clearerror('nameError')" name="name" value="{{(! empty($staff_details->name)) ? $staff_details->name : old('name')}}" class="form-control">
                    @if ($errors->has('name'))
                        <span class="help-block" id="nameError">
                                                <strong class="text-danger">{{ $errors->first('name') }}</strong>
                                            </span>
                    @endif
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label> Email</label>
                    <input type="email" placeholder="Company Email...."  onkeyup="clearerror('emailError')" name="email" value="{{(! empty($staff_details->email)) ? $staff_details->email : old('email')}}" class="form-control">
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
                    <input type="text" placKiteholder="City..."  onkeyup="clearerror('phone_numberError')" name="address" value="{{(! empty($staff_details->address)) ? $staff_details->address : old('address')}}" class="form-control">
                    @if ($errors->has('address'))
                        <span class="help-block" id="addressError">
                                <strong class="text-danger">{{ $errors->first('address') }}</strong>
                            </span>
                    @endif
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label> Phone Number</label>
                    <input type="text" placeholder="Company Phone Number..."  onkeyup="clearerror('phone_numberError')" name="phone_number" value="{{(! empty($staff_details->phone_number)) ? $staff_details->phone_number : old('phone_number')}}" class="form-control">
                    @if ($errors->has('phone_number'))
                        <span class="help-block" id="phone_numberError">
                                                <strong class="text-danger">{{ $errors->first('phone_number') }}</strong>
                                            </span>
                    @endif
                </div>
            </div>
        </div>



        <div style="overflow:auto;">
            <div style="float:right;">
                <button class="btn btn-primary ">Update</button>
            </div>
        </div>

    </form>

@endsection
