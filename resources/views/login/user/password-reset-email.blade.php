Hello {{$user->name}}. This is your password reset link. Click <a href="{{route('change.password',["email"=>$user->email,"passwordResetToken"=>$user->password_reset_token])}}"> HERE </a>to reset your password.

