@extends('backend.main')
@section('main-content')
{{--    <a href="{{route('food.create')}}"><button class="btn btn-primary">Add Food Item</button></a>--}}
    <br><br>
    @if(Session::has('message'))
        <div class="alert alert-success alert-dismissable">
            {{Session('message')}}
        </div>
    @endif

    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-social-dribbble font-green"></i>
                <span class="caption-subject font-green bold uppercase">Todays Menu</span>
            </div>
        </div>
        <div class="grid-container">
            @foreach($foods as $food)


                <div class="grid-item" >
                    <p>{{$food->name}}</p>
                    <img src="/images/{{$food->picture}}" alt="" width="300" height="200"><br>
{{--                    <button class="btn btn-primary makeToday"   data-foodid="{{$f->id}}"> {{$f->is_today_item?'Remove Today item':'Make Today item'}}</button>--}}

                </div>


            @endforeach
            @endsection


