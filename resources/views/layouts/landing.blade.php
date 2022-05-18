<!doctype html>
<html lang="en">
  <head>
  <title>Seal Online : Game Online Indonesia</title>
    <!-- <link href="web.archive.org/web/20070202174035im_/http_/www.sealindo.com/sealonline.gif" rel="SHORTCUT ICON" /> -->
    <meta name="Keywords" content="seal, seal indonesia, online game, Online Game Indonesia , Game Online Indonesia, rpg, rpg online, mmorpg, mpocg, game online" />
    <meta name="Description" content="Seal Online Indonesia - Fantasy Internet Game" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/web.archive.org/web/20070202174602cs_/http_/www.sealindo.com/css/screen.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/web.archive.org/web/20060515054621cs_/http_/www.sealindo.com/css/home.css') }}" type="text/css"/>
    <link rel="stylesheet" href="{{ asset('assets/landing/style.css') }}" type="text/css">
    <script type="text/javascript" src="{{ asset('/assets/web.archive.org/web/20070202174340js_/http_/www.sealindo.com/js/style.js') }}"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css"
      integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA=="
      crossorigin="anonymous"
    />
    @yield('css')
  </head>
  <body>

    <!-- header -->
    <section id="main" 
      @if($publicBackground) 
        style="
          background: url({{ asset('/images/background/'.$publicBackground->img)}}) no-repeat center center;
          -webkit-background-size: cover;
          -moz-background-size: cover;
          -o-background-size: cover;
          background-size: cover;
          " 
      @endif>
      <div class="row main__content">
        <div class="col-lg">
          <!-- header -->
          @include('include._header')
          <!-- end header -->
        </div>
      </div>
    </section>
    <!-- end header  -->

    <!-- content -->
    <section>
      <div class="row bg-white content__landing">
        <div class="col-lg">
          @yield('content')
        </div>
      </div>
    </section>
    <!-- end content -->
    
    <!-- footer -->
    <section>
        @include('include._footer')
    </section>
    <!-- footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
      $(function() {
          // setTimeout() function will be fired after page is loaded
          // it will wait for 5 sec. and then will fire
          // $("#successMessage").hide() function
          setTimeout(function() {
              $("#successMessage").hide('blind', {}, 500)
          }, 5000);
      });
    </script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.min.js"
      integrity="sha512-6gudNVbNM/cVsLUMOb8g2b/RBqtQJ3aDfRFgU+5paeaCTtbYY/Dg00MzZq7r6RvJGI2KKtPBhjkHGTL/iOe21A=="
      crossorigin="anonymous"
    ></script>
    
    <script>
      lightbox.option({
        resizeDuration: 200,
        wrapAround: true,
      });
    </script>

    <!-- splide -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script>
      new Splide( '.splide', {
          perPage: 5,
          pagination : false,
          rewind : true,
      } ).mount();
    </script>
    <!-- <script>
        $("#click").click(function() {
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#div1").offset().top
            }, 2000);
        });
    </script> -->
  </body>
</html>