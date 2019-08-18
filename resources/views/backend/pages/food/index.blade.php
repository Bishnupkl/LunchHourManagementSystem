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
        <div class="grid-container">
        @foreach($food as $f)
                <div class="grid-item">
                    <p>{{$f->name}}</p>
                    <img src="/images/{{$f->picture}}" alt="" width="300" height="200"><br/>
                    <button class="btn btn-primary makeToday"   data-foodid="{{$f->id}}"> {{$f->is_today_item?'Remove Today item':'Make Today item'}}</button>
                </div>
        @endforeach
        </div>
@endsection
@section('scripts')

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>

        $('.makeToday').click(function () {
            let id = $(this).data('foodid');
            let csrf="{{csrf_token()}}" ;
            let that = $(this);
            $.ajax(
                {
                    url:"{{route('food.make')}}",
                    method:'post',
                    data:{id:id, _token:csrf},
                    success:function (data) {
                            if(data=="remove"){
                                that.text('Make today item');
                                that.class('btn btn-primary makeToday')
                            }else{
                                that.text('Remove today item');
                                that.class('btn btn-primary makeToday')

                            }
                    }

                }
            )

        });

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
