@extends('backend.main')
@section('main-content')
    <form action="{{route('kitchen_staff.store')}}" method="post"  enctype="multipart/form-data" class="portlet light">
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
                        <span class="caption-subject bold uppercase"> Add Food Item</span>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Food name</label>
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
                    <label>Food Category</label>
                    <select name="category" class="form-control">
                        <option value="veg">Veg</option>
                        <option value="veg">Non veg</option>
                    </select>
{{--                    <input type="email" placeholder="Company Email...."  onkeyup="clearerror('emailError')" name="email" value="{{ old('email')}}" class="form-control">--}}
                    @if ($errors->has('email'))
                        <span class="help-block" id="emailError">
                                                <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                            </span>
                    @endif
                </div>
            </div>
        </div>

        <div style="overflow:auto;">
            <div style="float:right;">
                <button class="btn btn-primary ">Add</button>
            </div>
        </div>

    </form>

@endsection
