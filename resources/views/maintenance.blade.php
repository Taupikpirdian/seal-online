<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Seal Online - Official Website | Top Page</title>

    <!-- icon  -->
    <link rel="shortcut icon" href="{{ asset('images/logo.jpg') }}" />

    <style>
      .header{
        margin-top: 10%;
      }

      .content a {
        text-decoration: none;
      }

      .content img:hover {
        box-shadow: 1px 2px 1px black;
      }

      .footer a{
        font-size: 12px;
      }
    </style>
  </head>
  <body>
    <section>
      <div class="container header">
        @if($contact_info)
        <div class="row">
          <div class="col-lg text-center">
            <img src="{{ asset('/images/contact_info/'.$contact_info->logo)}}" width="100" alt="">
          </div>
        </div>
        @endif
        @if($setup)
        <div class="row mt-5 mb-5 text-center content">
          <div class="col-lg">
            <a href="#" class="mr-5">
              <img src="{{ asset('/images/setup/'.$setup->img_up)}}" alt="" width="200">
            </a>
            <a href="#">
              <img src="{{ asset('/images/setup/'.$setup->img_maintenance)}}" width="200" alt="">
            </a>
          </div>
        </div>
          @if($setup->status == "up")
          <div class="row footer mt-5">
            <div class="col text-center">
              <a href="{{URL::to('/home')}}" class="btn btn-primary text-uppercase">lanjut ke halaman utama</a>
            </div>
          </div>
          @else
          <div class="row footer mt-5">
            <div class="col text-center">
              <a href="#" class="btn btn-danger text-uppercase">web sedang dalam maintenance</a>
            </div>
          </div>
          @endif
        @endif
      </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>