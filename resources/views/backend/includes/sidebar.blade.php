
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
                    <a href="" class="nav-link nav-toggle">
                        <i class="fa fa-user"></i>                        <span class="title">Todays menu Items</span>
                        <span class="{{Request::is('user') || Request::is('user/*') ? 'selected' : ''}}"></span>
                        <span class="{{Request::is('user') || Request::is('user/*') ? 'arrow open' : ''}}"></span>
                    </a>
                </li>
                <li class="nav-item {{Request::is('sms') || Request::is('sms/*') ? 'active' : ''}}">
                    <a href="sms" class="nav-link nav-toggle">
                        <i class="fa fa-envelope-square"></i>                        <span class="title">Manage Orders</span>
                        <span class="{{Request::is('sms') || Request::is('sms/*') ? 'selected' : ''}}"></span>
                        <span class="{{Request::is('sms') || Request::is('sms/*') ? 'arrow open' : ''}}"></span>
                    </a>
                </li>
            @elseif(auth()->user()->is_employee)
                <li class="nav-item {{Request::is('messageTemplate') || Request::is('messageTemplate/*') ? 'active' : ''}}">
{{--                    <a href="{{route('messageTemplate.index')}}" class="nav-link nav-toggle">--}}
                        <i class="fa fa-newspaper-o"></i>
                        <span class="title">Message Templates</span>
                        <span class="{{Request::is('messageTemplate') || Request::is('messageTemplate/*') ? 'selected' : ''}}"></span>
                        <span class="{{Request::is('messageTemplate') || Request::is('messageTemplate/*') ? 'arrow open' : ''}}"></span>
                    </a>
                </li>
                <li class="nav-item {{Request::is('sms-report') || Request::is('sms-report/*') ? 'active' : ''}}">
{{--                    <a href="{{route('sms.report')}}" class="nav-link nav-toggle">--}}
                        <i class="icon-book-open"></i>
                        <span class="title">Report</span>
                        <span class="{{Request::is('sms-report') || Request::is('sms-report/*') ? 'selected' : ''}}"></span>
                        <span class="{{Request::is('sms-report') || Request::is('sms-report/*') ? 'arrow open' : ''}}"></span>
                    </a>
                </li>
                <li class="nav-item {{Request::is('contact') || Request::is('contact/*') ? 'active' : ''}}">
{{--                    <a href="{{route('contact.index')}}" class="nav-link nav-toggle">--}}
                        <i class="fa fa-phone-square"></i>
                        <span class="title">Contact</span>
                        <span class="{{Request::is('contact') || Request::is('contact/*') ? 'selected' : ''}}"></span>
                        <span class="{{Request::is('contact') || Request::is('contact/*') ? 'arrow open' : ''}}"></span>
                    </a>
                </li>
{{--                @if(Auth::user()->role_id == 2)--}}
                <li class="nav-item {{Request::is('log') || Request::is('log/*') ? 'active' : ''}}">
{{--                    <a href="{{route('log.index')}}" class="nav-link nav-toggle">--}}
                        <i class="icon-wallet"></i>
                        <span class="title">Access Log</span>
                        <span class="{{Request::is('log') || Request::is('log/*') ? 'selected' : ''}}"></span>
                        <span class="{{Request::is('log') || Request::is('log/*') ? 'arrow open' : ''}}"></span>
                    </a>
                </li>
{{--                @endif--}}
            @endif

        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
