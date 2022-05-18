<!DOCTYPE html>
<html>
  <head>
    <title>Login Seal Online</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    
    {!! Html::style('admin/favicon.png') !!}
    {!! Html::style('admin/apple-touch-icon.png') !!}
    {!! Html::style('https://fonts.googleapis.com/css?family=Lato:300,400,700') !!}
    {!! Html::style('admin/bower_components/select2/dist/css/select2.min.css') !!}
    {!! Html::style('admin/bower_components/bootstrap-daterangepicker/daterangepicker.css') !!}
    {!! Html::style('admin/bower_components/dropzone/dist/dropzone.css') !!}
    {!! Html::style('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}
    {!! Html::style('admin/bower_components/fullcalendar/dist/fullcalendar.min.css') !!}
    {!! Html::style('admin/bower_components/perfect-scrollbar/css/perfect-scrollbar.min.css') !!}
    {!! Html::style('admin/bower_components/slick-carousel/slick/slick.css') !!}
    {!! Html::style('admin/css/main.css?version=4.5.0') !!}
  </head>
  <body class="auth-wrapper bg-image-v1">
    <div class="all-wrapper menu-side with-pattern">
      <div class="auth-box-w">
        <div class="logo-w brand-img-box">
        @if($contact_info)
          <a href="{{ url('/') }}"><img class="brand-img" src="{{ asset('/images/contact_info/'.$contact_info->logo)}}"></a>
		  	@endif
        </div>
        <h4 class="auth-header">
          Login
        </h4>
        <form method="POST" action="{{ route('post-user-login') }}">
          @csrf
          <div class="form-group">
            <label for="">Username</label>
            <input class="form-control @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}" required autocomplete="user_name" placeholder="Enter your username" type="text" name="user_name">
            <div class="pre-icon os-icon os-icon-user-male-circle"></div>
            @error('user_name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
            @if (session('user_name'))
                <span role="alert" style="color: red;">
                    <p>{{ session('user_name') }}</p>
                </span>
            @endif
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">
            <div class="pre-icon os-icon os-icon-fingerprint"></div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="buttons-w">
            <button type="submit" class="btn btn-primary">Login</button>
            <div class="form-check-inline">
              {{-- <label class="form-check-label"><input class="form-check-input" type="checkbox">Remember Me</label> --}}
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
