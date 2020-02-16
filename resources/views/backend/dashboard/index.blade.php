@extends('backend.main')
@section('styles'){{--inorder to add extra css--}}

@endsection
@section('main-content')
    @if(Auth::user()->is_admin)
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="dashboard-stat blue">
                    <font color="#fffaf0"><h3><b>&nbsp;Total Employee</b></h3>
                        <h4>&nbsp<b>{{$employee}}</b>&nbsp;&nbsp;&nbsp;Employees</h4>
                        &nbsp;&nbsp;<button class="btn btn-primary" style="visibility:hidden;">Hidden</button>
                    </font>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="dashboard-stat red">
                    <font color="#fffaf0">
                        <h3><b>&nbsp;Total Kitchen Staff</b></h3>
                        <h4>&nbsp<b>{{$kitchen_staff}}</b>&nbsp;&nbsp;&nbsp;Kitchen Staff</h4>
                        &nbsp;&nbsp;<button class="btn btn-primary" style="visibility:hidden;">Hidden</button>
                    </font>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="dashboard-stat green">
                    <font color="#fffaf0">
                        <h3><b>&nbsp;Total Verified Employee</b></h3>
                        <h4>&nbsp<b>{{$verified_employee}}</b>&nbsp;&nbsp;&nbsp;activated employee</h4>
                        &nbsp;&nbsp;<button class="btn btn-primary" style="visibility:hidden;">Hidden</button>
                    </font>
                </div>
            </div>
        </div>
    @endif
    @if(Auth::user()->is_employee)
        <font color="#1F2B3D"><h3><b>&nbsp;Todays Menu</b></h3></font>
        <div class="grid-container">
            @foreach($foods as $food)


                <div class="grid-item" >
                    <p>{{$food->name}}</p>
                    <img src="/images/{{$food->picture}}" alt="" width="300" height="200"><br>
                    <?php
                    $foodName = $food->name;
                     $is_ordered =\App\Order::where(['food_name'=>$foodName,'user_id'=>auth()->user()->id])->first();
                     ?>
                    <button class="btn btn-primary order-item"   data-foodid="{{$food->id}}">{{$is_ordered?'Cancel order':'Order'}}</button>

                </div>


            @endforeach
        </div>

    @endif

    @if(auth()->user()->is_kitchen_staff)
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="dashboard-stat blue">
                    <font color="#fffaf0"><h3><b>&nbsp;Total Food Items</b></h3>
                        <h4>&nbsp<b>{{$total_food_items}}</b>&nbsp;&nbsp;&nbsp;Food items</h4>
                        &nbsp;&nbsp;<button class="btn btn-primary" style="visibility:hidden;">Hidden</button>
                    </font>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="dashboard-stat red">
                    <font color="#fffaf0">
                        <h3><b>&nbsp;Total Food Caategory</b></h3>
                        <h4>&nbsp<b>{{$total_category}}</b>&nbsp;&nbsp;&nbsp;category</h4>
                        &nbsp;&nbsp;<button class="btn btn-primary" style="visibility:hidden;">Hidden</button>
                    </font>
                </div>
            </div>
    @endif

@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $('.order-item').click(function (e) {
               let id = $(this).data('foodid');
                var csrf = "{{csrf_token()}}";
                let that = $(this);

                $.ajax({
                    method:'POST',
                    url:"{{route('make.order')}}",
                    data:{id,_token:csrf},
                    success:function (data) {
                        if (data == 'ordered') {
                            that.text('Cancel Order');
                        }else {
                            that.text('Order');
                        }
                    }

                });

            });
        });
    </script>
@endsection
