
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="/">
                LHMS
{{--                <img src="{{asset('images/download.png')}}" alt="logo" class="logo-default" style="width: 150px;">--}}
            </a>
        </div>
        <!-- END LOGO -->

        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN PAGE TOP -->
        <div class="page-top">
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                    {{--<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">--}}
                        {{--<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">--}}
                            {{--<font color="black"><i class="icon-bell"></i></font>--}}
                            {{--<span class="badge badge-default"></span>--}}
                        {{--</a>--}}
                        {{--<ul class="dropdown-menu">--}}
                            {{--<li class="external">--}}
                                {{--<h3>--}}
                                    {{--<span class="bold">12 pending</span> notifications</h3>--}}
                                {{--<a href="page_user_profile_1.html">view all</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">--}}
                                    {{--<li>--}}
                                        {{--<a href="javascript:;">--}}
                                            {{--<span class="time">just now</span>--}}
                                            {{--<span class="details">--}}
                                                        {{--<span class="label label-sm label-icon label-success">--}}
                                                            {{--<i class="fa fa-plus"></i>--}}
                                                        {{--</span> New user registered. </span>--}}
                                        {{--</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</li>--}}

                    <!-- END NOTIFICATION DROPDOWN -->
                    <!-- BEGIN INBOX DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                    <!-- END INBOX DROPDOWN -->
                    <!-- BEGIN TODO DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->

                    <!-- END TODO DROPDOWN -->
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
{{--                            <span class="username username-hide-on-mobile"><font color="black">{{Auth::user()->name}}</font></span>--}}
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">

                            <li>
                                <a href="{{route('logout')}}">
                                    <i class="icon-user"></i> Log Out </a>
                            </li>
                                 <li>
                                <a href="#" data-toggle="modal" data-target="#resetpasswordModal" id="resetpass">
                                     <i class="fa fa-key"></i><i class="fa fa-lock"></i></i>Reset Password </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                    <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <!-- END QUICK SIDEBAR TOGGLER -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
<div class="modal fade" id="resetpasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-success" id="exampleModalLongTitle">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<div class="row" id="checkrow">
    <div style="margin-left:10px;margin-right:10px;">
        <div class="form-group" id="emailDiv">
        <label for="emailcheck">EMAIL</label>
        <input type="text" class="form-control" id="emailcheck" placeholder="PLEASE TYPE YOUR EMAIL">
    </div>
         <div class="form-group" id="passwordDiv" style="display:none;">
        <label for="emailcheck">Password</label>
        <input type="password" class="form-control" id="passwordcheck" placeholder="PLEASE TYPE YOUR CURRENT PASSWORD">
    </div>
    </div>
</div>
<div class="row" id="updaterow" style="display:none;">
    <div style="margin-left:10px;margin-right:10px;">
        <div class="form-group" id="newpasswordDiv">
        <label for="emailcheck">New Password</label>
        <input type="password" class="form-control" onkeydown="clearserror('passworderror')" id="newpassword" placeholder="PLEASE TYPE NEW PASSWORD">
        <span id="passworderror" class="text-danger error"></span>
    </div>
         <div class="form-group" id="passwordconfirmDiv">
        <label for="passwordconfirm">Password</label>
        <input type="password" class="form-control" id="passwordconfirm" onkeydown="clearserror('passwordconfirmerror')" placeholder="PLEASE CONFIRM YOUR NEW PASSWORD">
          <span id="passwordconfirmerror" class="text-danger error"></span>
    </div>
    </div>
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="confirmbutton" style="display:none;">Save changes</button>
      </div>
    </div>
  </div>
</div>


