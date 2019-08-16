@extends('backend.main')
@section('main-content')
    <a href="{{route('food.create')}}"><button class="btn btn-primary">Add Food Item</button></a>
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
                <span class="caption-subject font-green bold uppercase">food Items</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="table-scrollable">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th align="center"> I.D. </th>
                        <th> Name </th>
                        <th> Web </th>
                        <th> City </th>
                        <th> Street </th>
                        <th> State</th>
                        <th>Phone No</th>
                        {{--<th>Gateways</th>--}}
                        {{--<th>total Credits</th>--}}
                        <th align="center" >View</th>
                        {{--<th>Delete</th>--}}
                    </tr>
                    </thead>
                    <tbody>
                    {{--                    @foreach($companies as $company)--}}
                    <tr>
                        <td> </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        {{--                            <td> <a class = "btn btn-success" href="{{route('kitchen_staff.show',$company->id.'#companyDetails'   )}}"><i class="fa fa-eye"></i></a></td>--}}
                        {{--<td>--}}
                        {{--<button class="btn btn-default" value="{{$company->id}}" id="reFollowup" data-toggle="modal" data-target="#reFollowupModal" title="Re-followup"><i class="fa fa-bullhorn"></i></button>--}}
                        {{--<button class="btn btn-danger" value="{{$company->id.'a'}}" id="deleteFollowup" data-toggle="modal" data-target="#deleteReFollowup" title="Delete-Followup"><i class="fa fa-trash"></i></button>--}}
                        {{--<a href="" class="btn btn-default"><i class="fa fa-edit"></i> </a>--}}
                        {{--<form data-id="{{$company->id}}" id="deleteCompany" >{{csrf_field()}}<button class="btn btn-outline btn-circle btn-sm red" ><i class="fa fa-trash"></i></button></form>--}}

                        {{--</td>--}}
                    </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
@section('scripts')

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>

        $(document).on('click','#deleteCompany',function(event){
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
                            url:'company/'+idToDelete,
                            data:{'_token':csrf},
                            success:function (data){
                                console.log(data);
                                if(data === 'true'){
                                    {{--window.location.href = "{{route('company.index')}}";--}}
                                }
                            }
                        });
                    }
                })
        });

    </script>

@endsection
