@extends('backend.main')
@section('styles'){{--inorder to add extra css--}}

@endsection
@section('main-content')
    <h3 class="page-title"> Dashboard
    </h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="/dashboard">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Dashboard</span>
            </li>
        </ul>
        <div class="pull-right page-breadcrumb">

{{--            <div class="btn-group pull-right">--}}

{{--                @if(isset($apiToken))--}}

{{--                    {!! isset($apiToken)?"Api Token: <span id='refreshToken'>$apiToken</span>":''!!}--}}

{{--                    <br><a style="text-decoration: none" id="generateToken">Refresh Token</a>--}}

{{--                @endif--}}

{{--            </div>--}}

        </div>

    </div>
    @if(Auth::user()->role_id == 1)
        <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="dashboard-stat blue">
                    <font color="#fffaf0"><h3><b>&nbsp;TOTAL COMPANIES</b></h3>
{{--                        <h4>&nbsp<b>{{$companies}}</b>&nbsp;&nbsp;&nbsp;Companies</h4>--}}
                        &nbsp;&nbsp;<button class="btn btn-primary" style="visibility:hidden;">Hidden</button>
                    </font>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="dashboard-stat red">
                    <font color="#fffaf0">
                        <h3><b>&nbsp;TOTAL GATEWAYS</b></h3>
{{--                        <h4>&nbsp<b>{{$gateways}}</b>&nbsp;&nbsp;&nbsp;Gateways</h4>--}}
                        &nbsp;&nbsp;<button class="btn btn-primary" style="visibility:hidden;">Hidden</button>
                    </font>
                </div>
            </div>
        </div>
    @endif
    @if(Auth::user()->role_id != 1)
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                {{--<div class="dashboard-stat blue">--}}
                {{--<font color="#fffaf0">--}}
                {{--<h3><b>&nbsp;CREDITS</b></h3>--}}
                {{--&nbsp;&nbsp;<h4><b>{{isset($ncellCredits)?'Ncell - '.$ncellCredits:''}}{{isset($ntcCredits)?' Ntc - '.$ntcCredits:''}} {{isset($smartCredits)?'Smart - '.$smartCredits:''}}</b></h4>--}}
                {{--<button class="btn btn-success" style="border-radius: 5px !important;"> BUY </button>--}}
                {{--</font>--}}
                {{--</div>--}}
                <div class="dashboard-stat blue">
                    <font color="#fffaf0">
                        <h3><b>&nbsp;CREDITS</b></h3>
{{--                        <h4><b>&nbsp;{{isset($ncellCredits)?'Ncell - '.$ncellCredits:''}}{{isset($ntcCredits)?'| Ntc - '.$ntcCredits:''}} {{isset($smartCredits)?'| Smart - '.$smartCredits:''}}</b></h4>--}}
                        <br><p style="visibility: hidden"></p>
                        &nbsp;<button class="btn btn-success" style="border-radius: 5px !important;"> BUY </button>
                        <span style="height: 2px;display: block"></span>
                    </font>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="dashboard-stat red">
                    <font color="#fffaf0">
                        <h3><b>&nbsp;TOTAL OUTGOING</b></h3>
{{--                        <h4>&nbsp<b>{{$smsReports}}</b>&nbsp;&nbsp;&nbsp;Outgoings</h4>--}}
                        <p style="visibility: hidden">p</p>
                        <span style="height: 5px;display: block"></span>
                        <br>
                    </font>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="dashboard-stat green">
                    <font color="#fffaf0">
                        <h3><b>&nbsp;CONTACTS</b></h3>
{{--                        <h4>&nbsp<b>{{$groups}}</b>&nbsp;&nbsp;&nbsp;Contact Group</h4>--}}
                        <p style="visibility: hidden">p</p>
                        <span style="height: 5px;display: block"></span>
                        <br>
                    </font>
                </div>
            </div>
        </div>
    @endif
@endsection
@section('scripts')
{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            $('#generateToken').click(function (e) {--}}
{{--                var csrf = "{{csrf_token()}}";--}}

{{--                $.ajax({--}}
{{--                    method:'POST',--}}
{{--                    url:"{{route('generate.api.token')}}",--}}
{{--                    data:{_token:csrf},--}}
{{--                    success:function (data) {--}}
{{--                        $("#refreshToken").text(data);--}}
{{--                    }--}}

{{--                });--}}

{{--            });--}}
{{--        });--}}
{{--    </script>--}}
@endsection
