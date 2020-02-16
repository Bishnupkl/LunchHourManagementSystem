@extends('backend.main')
@section('main-content')

    <div class="portlet light ">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-social-dribbble font-green"></i>
                <span class="caption-subject font-green bold uppercase">Menu Reports</span>
            </div>
        </div>
        <div class="portlet-body">
            <div class="table-scrollable">
                <table class="table table-hover" id="userTable">
                    <thead>
                    <tr>
                        <th> S.N. </th>
                        <th> Date </th>
                        <th> Food_Name </th>
                        <th> Category</th>

                    </tr>
                    </thead>
                    @foreach($reports as $report)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$report->created_at}}</td>
                            <td>{{$report->name}}</td>
                            <td>{{$report->category}}</td>

                        </tr>
                    @endforeach
                </table>
                {{$reports->links()}}
            </div>
        </div>
    </div>


@endsection



