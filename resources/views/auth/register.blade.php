<!DOCTYPE html>
<html>
  <head>
    <title>Register Seal Online</title>
    <meta charset="utf-8">
    <meta content="ie=edge" http-equiv="x-ua-compatible">
    <meta content="template language" name="keywords">
    <meta content="Tamerlan Soziev" name="author">
    <meta content="Admin dashboard html template" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
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

    <style>
        .auth-box-w p{
            font-size: 12px;
            margin-top: -2%;
        }
        .content__list{
            width: 75%;
            margin: auto;
        }

        .content__list ul{
            margin-left: -5%;
            list-style: none;
            font-size: 12px;
        }

        .content__list ul li{
            margin-bottom: 10px;
        }
    </style>
</head>
<body class="auth-wrapper bg-image-v1" @if($data) style="background-image: url({{ asset('/images/register/'.$data->img)}})" @endif>
    @include('sweetalert::alert')
    <div class="row">
        <div class="col-lg">
            <div class="all-wrapper menu-side with-pattern">
                <div class="auth-box-w mb-5 mt-5">
                    <div class="logo-w brand-img-box">
                    </div>
                    <h4 class="auth-header">
                        Register
                    </h4>
                    <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <label for="user_name">{{ __('Username') }}</label>
                        <input id="user_name" type="text" class="form-control {{ (session('user_name'))?"is-invalid":"" }} @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}" required autocomplete="user_name" autofocus placeholder="Username (Alphanumeric Min.6 - Max.12)">
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
                        {{-- <span role="alert" style="color: red;">
                            <strong>Walaahh sss</strong>
                        </span> --}}
                        {{-- sss --}}
                    </div>

                    <div class="form-group">
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                        <div class="pre-icon os-icon os-icon-email-2-at"></div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password (Alphanumeric Min.6 - Max.16)">
                        <div class="pre-icon os-icon os-icon-fingerprint"></div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Username (Confirm Password">
                        <div class="pre-icon os-icon os-icon-fingerprint"></div>
                    </div>

                    <div class="form-group">
                        <label for="pin">{{ __('Pin') }}</label>
                        <input id="pin" type="number" class="form-control @error('pin') is-invalid @enderror" name="pin" value="{{ old('pin') }}" maxlength="11" required autocomplete="pin" autofocus placeholder="PIN Code (Number Min.8 - Max.11)">
                        <div class="pre-icon os-icon os-icon-robot-2"></div>
                        @error('pin')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="birthday">{{ __('Tanggal Lahir') }}</label>
                        <input id="birthday" type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" required autocomplete="birthday" autofocus>
                        <div class="pre-icon os-icon os-icon-ui-55"></div>
                        @error('birthday')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button style="width: 100%" type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
                </div>
            </div>
        </div>
        <div class="col-lg">
            <div class="all-wrapper menu-side with-pattern">
                <div class="auth-box-w mb-5 mt-5">
                    <div class="logo-w brand-img-box">
                    </div>
                    @if($data)
                    <h4 class="auth-header">
                        {{ $data->title }}
                    </h4>
                    @else
                    <h4 class="auth-header">
                        Syarat dan Ketentuan
                    </h4>
                    @endif
                    <div class="row content__list">
                        <div class="col-lg mb-5">
                            @if($data)
                            <p>{!! $data->desc !!}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    {!! Html::script('front/assets/app.bundle.min.js') !!}
  </body>
</html>

