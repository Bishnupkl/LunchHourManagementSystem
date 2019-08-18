
<div class="page-sidebar-wrapper">

    <div class="page-sidebar navbar-collapse collapse">

        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item {{Request::is('/') || Request::is('dashboard') ? 'active' : ''}}">
                <a href="/dashboard" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="{{Request::is('/') || Request::is('dashboard') ? 'selected' : ''}}"></span>
                    <span class="{{Request::is('/') || Request::is('dashboard') ? 'arrow open' : ''}}"></span>
                </a>
            </li>
            @if(Auth::user()->is_admin)
                <li class="nav-item {{Request::is('company') || Request::is('employee/*') ? 'active' : ''}}">
                    <a href="{{route('employee.index')}}" class="nav-link nav-toggle">
                        <i class="fa fa-building"></i>
                        <span class="title">Employees</span>
                        <span class="{{Request::is('company') || Request::is('company/*') ? 'selected' : ''}}"></span>
                        <span class="{{Request::is('company') || Request::is('company/*') ? 'arrow open' : ''}}"></span>
                    </a>
                </li>
                <li class="nav-item {{Request::is('gateway') || Request::is('kitchen_staff/*') ? 'active' : ''}}">
                    <a href="{{route('kitchen_staff.index')}}" class="nav-link nav-toggle">
                        <i class="glyphicon glyphicon-road"></i>
                        <span class="title">kitchen Staff</span>
                        <span class="{{Request::is('gateway') || Request::is('gateway/*') ? 'selected' : ''}}"></span>
                        <span class="{{Request::is('gateway') || Request::is('gateway/*') ? 'arrow open' : ''}}"></span>
                    </a>
                </li>
{{--                <li class="nav-item {{Request::path() == 'money-rate' ? 'active' : ''}}">--}}
{{--                    <a href="{{route('money-rate.index')}}" class="nav-link nav-toggle">--}}
{{--                        <i class="icon-credit-card"></i>--}}
{{--                        <span class="title">Manage Credit Rate</span>--}}
{{--                        <span class="{{Request::path() == 'money-rate' ? 'selected' : ''}}"></span>--}}
{{--                        <span class="{{Request::path() == 'money-rate' ? 'arrow open' : ''}}"></span>--}}
{{--                    </a>--}}
{{--                </li>--}}
            @elseif(auth()->user()->is_kitchen_staff)
                <li class="nav-item {{Request::is('user') || Request::is('user/*') ? 'active' : ''}}">
                    <a href="{{route('food.index')}}" class="nav-link nav-toggle">
                        <i class="fa fa-user"></i>                        <span class="title">Manage Food Items</span>
                        <span class="{{Request::is('user') || Request::is('user/*') ? 'selected' : ''}}"></span>
                        <span class="{{Request::is('user') || Request::is('user/*') ? 'arrow open' : ''}}"></span>
                    </a>
                </li>
                <li class="nav-item {{Request::is('user') || Request::is('user/*') ? 'active' : ''}}">
                    <a href="{{route('food.today')}}" class="nav-link nav-toggle">
                        <i class="fa fa-user"></i>                        <span class="title">Todays menu Items</span>
                        <span class="{{Request::is('user') || Request::is('user/*') ? 'selected' : ''}}"></span>
                        <span class="{{Request::is('user') || Request::is('user/*') ? 'arrow open' : ''}}"></span>
                    </a>
                </li>
                <li class="nav-item {{Request::is('sms') || Request::is('sms/*') ? 'active' : ''}}">
                    <a href="{{route('manage.order')}}" class="nav-link nav-toggle">
                        <i class="fa fa-envelope-square"></i>                        <span class="title">Manage Orders</span>
                        <span class="{{Request::is('sms') || Request::is('sms/*') ? 'selected' : ''}}"></span>
                        <span class="{{Request::is('sms') || Request::is('sms/*') ? 'arrow open' : ''}}"></span>
                    </a>
                </li>
            @elseif(auth()->user()->is_employee)
                <li class="nav-item {{Request::is('user') || Request::is('user/*') ? 'active' : ''}}">
                    <a href="{{route('advance.order')}}" class="nav-link nav-toggle">
                        <i class="fa fa-user"></i>                        <span class="title">Advance Order</span>
                        <span class="{{Request::is('user') || Request::is('user/*') ? 'selected' : ''}}"></span>
                        <span class="{{Request::is('user') || Request::is('user/*') ? 'arrow open' : ''}}"></span>
                    </a>
                </li>
            @endif

        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
