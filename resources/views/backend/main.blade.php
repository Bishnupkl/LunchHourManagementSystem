    <!DOCTYPE html>

    <html lang="en">

    <head>
        @include('backend.includes.header')
        @yield('styles')
        <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    </head>
    <!-- END HEAD -->
    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">

    @include('backend.includes.topnav')
    <div class="clearfix"> </div>
    <div class="page-container">
        @include('backend.includes.sidebar')
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content" style="overflow: scroll">
    @yield('main-content')
         </div>
     </div>
    </div>
    @include('backend.includes.footer')
    @yield('scripts')
    </body>


    </html>
