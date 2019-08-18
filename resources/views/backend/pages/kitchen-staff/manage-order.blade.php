@extends('backend.main')
@section('main-content')
{{--    <a href="{{route('kitchen_staff.create')}}"><button class="btn btn-primary">Add Kitchen Staff</button></a>--}}
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
                <span class="caption-subject font-green bold uppercase">Manage Orders</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="table-scrollable">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th align="center"> S.N </th>
                        <th> Food Name </th>
                        <th> Ordered By</th>
                        <th> Completion status </th>
{{--                        <th align="center" >View</th>--}}
{{--                        <th>Delete</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$order->food_name }}</td>

                            <td>{{$order->user->name}}</td>
                            <td>
                                <button class="btn btn-primary completeOrder"   data-orderid="{{$order->id}}"> {{$order->is_completed?'Completed':'Not Completed'}}</button>

                            </td>
                            <td>
{{--                                <form data-id="{{$kitchen->id}}" id="deletekitchenStaff" >{{csrf_field()}}<button class="btn btn-outline btn-circle btn-sm red" ><i class="fa fa-trash"></i></button></form>--}}

                            </td>
                            <td></td>

                        </tr>
                    @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>

        $('.completeOrder').click(function () {
            let id = $(this).data('orderid');
            let csrf="{{csrf_token()}}" ;
            let that = $(this);
            $.ajax(
                {
                    url:"{{route('order.complete')}}",
                    method:'post',
                    data:{id:id, _token:csrf},
                    success:function (data) {
                        if (data == 'completed') {
                            that.text("completed");
                        }
                    }

                }
            )

        });
</script>
@endsection

