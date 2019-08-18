@extends('backend.main')
@section('main-content')
    <a href="{{route('kitchen_staff.create')}}"><button class="btn btn-primary">Add Kitchen Staff</button></a>
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
                <span class="caption-subject font-green bold uppercase">Companies</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="table-scrollable">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th align="center"> S.N </th>
                        <th> Name </th>
                        <th> Address </th>
                        <th> Phone No </th>
                        <th align="center" >View</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($kitchen_staff as $kitchen)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$kitchen->name }}</td>

                            <td>{{$kitchen->address}}</td>
                            <td>{{$kitchen->phone_number}}</td>
                            <td>
                                <a class = "btn btn-success" href="{{route('kitchen_staff.show',$kitchen->id.'#kitchenStaffDetails'   )}}"><i class="fa fa-eye"></i></a>

                            </td>
                            <td>
                                <form data-id="{{$kitchen->id}}" id="deletekitchenStaff" >{{csrf_field()}}<button class="btn btn-outline btn-circle btn-sm red" ><i class="fa fa-trash"></i></button></form>

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

        $(document).on('click','#deletekitchenStaff',function(event){
            event.preventDefault();
            var idToDelete = $(this).data('id');
            var csrf = '{{csrf_token()}}';
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this data!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            method:'DELETE',
                            url:'kitchen_staff/'+idToDelete,
                            data:{'_token':csrf},
                            success:function (data){
                                console.log(data);
                                if(data === 'true'){
                                    window.location.href = "{{route('kitchen_staff.index')}}";
                                }
                            }
                        });
                    }
                })
        });

    </script>

@endsection
