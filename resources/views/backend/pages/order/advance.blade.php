@extends('backend.main')
@section('main-content')
    <form action="{{route('order.store')}}" method="post"  enctype="multipart/form-data" class="portlet light">
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
                        <span class="caption-subject bold uppercase"> Order in Advance</span>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Food name</label>
                    <select name="food_id" class="form-control">
                        @foreach($total_food as $food)
                        <option value="{{$food->id}}">{{$food->name}}</option>
                            @endforeach
                    </select>
                    @if ($errors->has('food_id'))
                        <span class="help-block" id="nameError">
                                                <strong class="text-danger">{{ $errors->first('food_id') }}</strong>
                                            </span>
                    @endif
                </div>
            </div>

        </div>



        <div style="overflow:auto;">
            <div>
                <button class="btn btn-primary ">Order</button>
            </div>
        </div>

    </form>

@endsection
