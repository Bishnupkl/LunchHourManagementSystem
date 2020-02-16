<div class="page-footer">
    <div class="page-footer-inner"> {{date('Y')}} &copy; KlientScape
        <a href="https://technorio.com/" title="SMS Portal" target="_blank">LHMS</a>
    </div>
    <div class="scroll-to-top">
        <i class="icon-arrow-up"></i>
    </div>
</div>

<script src="{{asset('assets/global/plugins/respond.min.js')}}"></script>
<script src="{{asset('assets/global/plugins/excanvas.min.js')}}"></script>
<!-- BEGIN CORE PLUGINS -->
<script src="{{asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->

<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{asset('assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('assets/pages/scripts/dashboard.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="{{asset('assets/layouts/layout2/scripts/layout.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/layouts/layout2/scripts/demo.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
 <script src="../assets/global/plugins/bootstrap-toastr/toastr.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        {{--<script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>--}}
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="../assets/pages/scripts/ui-toastr.min.js" type="text/javascript">
        	</script>
               <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
{{--               <script type="text/javascript">--}}
{{--                     $(document).on('click','#resetpass',function(){--}}
{{--                          $('#checkrow').show();--}}
{{--                          $('#updaterow').hide();--}}
{{--                           $('#emailDiv').show();--}}
{{--                             $('#passwordDiv').hide();--}}
{{--                             $('#confirmbutton').hide();--}}
{{--                               $('.error').empty();--}}


{{--                     });--}}
{{--                   $(document).on('keyup','#emailcheck',function(event){--}}
{{--                       var keycode= event.which || event.keyCode;--}}
{{--                      if(keycode==13)--}}
{{--                      {--}}
{{--                   let userEmail="{{auth()->user()->email}}" ;--}}
{{--                   let checkEmail=$(this).val();--}}
{{--                     if(userEmail==checkEmail) --}}
{{--                     {--}}
{{--                     toastr.info("NOW PLEASE ENTER YOUR PASSWORD") --}}
{{--                     $('#emailDiv').fadeOut('fast');--}}
{{--                     $('#passwordDiv').fadeIn('fast');--}}
{{--                     }--}}
{{--                     else{--}}
{{--                       $('#emailDiv').fadeIn('fast');--}}
{{--                     $('#passwordDiv').fadeOut('fast');--}}
{{--                     }--}}
{{--                     }           --}}
{{--               })--}}
{{--                      $(document).on('keyup','#passwordcheck',function(event){--}}
{{--                      var keycode= event.which || event.keyCode;--}}
{{--                      if(keycode==13)--}}
{{--                      {--}}
{{--                   let userPassword=$(this).val();--}}
{{--                   let csrf="{{csrf_token()}}";--}}
{{--                   $.ajax({--}}
{{--                    url:'checkpassword',--}}
{{--                    method:'POST',--}}
{{--                    data:{password:userPassword,'_token':csrf},--}}
{{--                    success:function(data)--}}
{{--                    {--}}
{{--                        console.log(data);--}}
{{--                        if(data.status=="success")--}}
{{--                        {--}}
{{--                             $('#emailDiv').fadeOut('100');--}}
{{--                              $('#passwordDiv').fadeOut('100');--}}
{{--                              $('#updaterow').fadeIn('100');--}}
{{--                             $('#passwordcheck').val('');--}}
{{--                             $('#confirmbutton').fadeIn('100');--}}
{{--                        }--}}
{{--                        else--}}
{{--                        {--}}
{{--                    $('#emailDiv').hide();--}}
{{--                     $('#passwordDiv').show();   --}}
{{--                        }--}}
{{--                    }--}}
{{--                   })--}}
{{--                      }      --}}
{{--               })--}}

{{--                      $('#confirmbutton').on('click',function(){--}}
{{--                      let newpassword=$('#newpassword').val();--}}
{{--                      let confirmpassword=$('#passwordconfirm').val();--}}
{{--                        let csrf="{{csrf_token()}}";--}}
{{--                   $.ajax({--}}
{{--                    url:'updateoldpassword',--}}
{{--                    method:'POST',--}}
{{--                    data:{new:newpassword,confirm:confirmpassword,'_token':csrf},--}}
{{--                    dataType:'json',--}}
{{--                    success:function(data)--}}
{{--                    {--}}
{{--                               console.log(data);--}}
{{--                        if(data.status=='success')--}}
{{--                        {--}}
{{--                          $('#passwordconfirm').val('');--}}
{{--                          $('#newpassword').val('');--}}
{{--                           $("#resetpasswordModal").removeClass("in");--}}
{{--                       $(".modal-backdrop").remove();--}}
{{--                          $('#resetpasswordModal').hide('slow');--}}
{{--                         toastr.success("Your Password has been changed successfully.");--}}



{{--                 --}}
{{--                    }--}}
{{--                    else{--}}
{{--                        toastr.error("Some error occurred!!Please check."); //error message--}}
{{--                    }--}}

{{--                    },error:function(error) {  //for validation errors --}}
{{--    if (error.status === 413) { --}}
{{--        toastr.error("Unkown error");--}}
{{--        console.log('unknown error');--}}
{{--} else if (error.status === 422) {  // for validation errors--}}
{{--toastr.error("Some error occurred!!Please check."); //error message--}}
{{--var invalid = JSON.parse(error.responseText);--}}
{{--if(invalid.errors.new!=undefined)  //for data source error--}}
{{--{--}}
{{--    $('#passworderror').empty();--}}
{{--        $('#passworderror').fadeIn('fast');--}}
{{--    $('#passworderror').text(invalid.errors.new)--}}

{{--}--}}
{{--if(invalid.errors.confirm!=undefined)  //for group type error--}}
{{--{--}}
{{--     $('#passwordconfirmerror').empty();--}}
{{--        $('#passwordconfirmerror').fadeIn('')--}}
{{--    $('#passwordconfirmerror').text(invalid.errors.confirm)--}}

{{--}--}}
{{--}--}}
{{--}--}}
{{--});--}}
{{--})--}}
{{--                      function clearserror(id)--}}
{{--                      {--}}
{{--                        $('#'+id).fadeOut('fast');--}}
{{--                      }--}}

{{--               </script>--}}


{{----}}
<script>
    $(document).ready(function () {
        $('#savePassword').click(function () {
          let currentPassword = $('#currentPassword').val();
          let newPassword = $('#newPassword').val();
            let csrf = "{{csrf_token()}}";
          $.ajax({
              url:"{{route('pssword.reset')}}",
              method:'post',
              data:{currentPassword,newPassword,_token:csrf},
              success: function (data) {
                  if(data=='not matched'){
                      $('#passwordError').text('Your current password do not matched').addClass('alert alert-danger');
                  }else{
                      $('#resetpasswordModal .close').click();
                      $('#passwordResetSuccess').text('Your password changed successfully');

                  }
              }

          })

        });

    });
</script>
