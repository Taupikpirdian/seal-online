<!DOCTYPE html>
<html>
  <head>
    <title>Reset Password Seal Online</title>
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
<body class="auth-wrapper bg-image-v1" style="background-image: url()">
    @include('sweetalert::alert')
    <div class="row">
        <div class="col-lg">
            <div class="all-wrapper menu-side with-pattern">
                <div class="auth-box-w mb-5 mt-5">
                    <div class="logo-w brand-img-box">
                    </div>
                    <h4 class="auth-header">
                        Reset Password
                    </h4>
                    <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">Masukan Email Anda</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                        <div class="pre-icon os-icon os-icon-email-2-at"></div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button style="width: 100%" type="submit" class="btn btn-primary">
                            Reset Password  
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
                    <h4 class="auth-header">
                    </h4>
                    <div class="row content__list">
                       
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

