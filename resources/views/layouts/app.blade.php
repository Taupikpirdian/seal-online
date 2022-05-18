<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  {!! Html::style('front/assets/css/style.min.css') !!}
  {!! Html::style('front/assets/css/custom.css') !!}
  {!! Html::style('front/assets/css/responsive.css') !!}
  <link rel="icon" href="front/assets/img/favicon.ico">
  <title>Seal Online Empire | Indonesia</title>
</head>
<body class="bg-image-vx">
  <div class="search-popup">
    <svg class="cross-icon big close-button search-popup-close">
      <use xlink:href="#svg-cross-big"></use>
    </svg>

    <form method="GET" class="search-popup-form">
      <input type="text" id="search" class="input-line" name="search" placeholder="What are you looking for...?">
    </form>
    <p class="search-popup-text">Write what you are looking for and press enter to begin your search!</p>
  </div>

  <div class="mobile-menu-wrap">
    <svg class="cross-icon big mobile-menu-close">
      <use xlink:href="#svg-cross-big"></use>
    </svg>

    <svg class="search-popup-open search-icon">
      <use xlink:href="#svg-search"></use>
    </svg>

    <figure class="logo-img">
      <img src="front/assets/img/brand/logo.png" alt="Logo">
    </figure>

    <ul class="mobile-menu">
    
      <li class="mobile-menu-item">
        <a href="{{ url('/') }}" class="mobile-menu-item-link">Home</a>
      </li>
      <li class="mobile-menu-item">
        <a href="{{ url('/guide-information') }}" class="mobile-menu-item-link">Guide</a>
      </li>
      <li class="mobile-menu-item">
        <a href="{{ url('/aturangame') }}" class="mobile-menu-item-link">Aturan/Rules</a>
      </li>
      <li class="mobile-menu-item">
        <a href="{{ url('/top-up') }}" class="mobile-menu-item-link">Top-Up</a>
      </li>
      <li class="mobile-menu-item">
        <a href="{{ url('/ranking-top-kill') }}" class="mobile-menu-item-link">Ranking</a>
      </li>
      <li class="mobile-menu-item">
        <a href="{{ url('/download-game') }}" class="mobile-menu-item-link">Download</a>
      </li>
      <li class="mobile-menu-item">
        <a href="{{ url('/forum') }}" class="mobile-menu-item-link">Forum</a>
      </li>
      

      
      @if (Auth::guard(getGuard())->check())
      <li class="mobile-menu-item">
        <p class="mobile-menu-item-link pd-dropdown-handler">
          <img class="widget-option-img user-avatar micro" src="front/assets/img/users/05.jpg" alt="avatar-01">
          {{-- {{ Auth::guard(getGuard()) }} --}}
          {{ Auth::guard(getGuard())->user()->id }}
        </p>
        <svg class="arrow-icon medium">
          <use xlink:href="#svg-arrow-medium"></use>
        </svg>

        <ul class="mobile-dropdown pd-dropdown">
          <li class="mobile-dropdown-item">
            @if(Auth::guard(getGuard())->user())
              <p class="mobile-dropdown-item-link pd-dropdown-handler">{{ Auth::guard(getGuard())->user()->id }}</p>
              @else
              <p class="mobile-dropdown-item-link pd-dropdown-handler">{{ Auth::user()->name }}</p>
            @endif
            <svg class="arrow-icon medium">
              <use xlink:href="#svg-arrow-medium"></use>
            </svg>
            <ul class="mobile-dropdown pd-dropdown">
              <li class="mobile-dropdown-item">
                @if(Auth::guard(getGuard())->user())
                  <a href="{{ url('/profile') }}" class="mobile-dropdown-item-link">Account Details</a>
                @else
                  <a href="{{ url('/admin-dashboard') }}" class="mobile-dropdown-item-link">Admin Dashboard</a>
                @endif
              </li>
            </ul>
          </li>
        </ul>
      </li>
      @endif
    </ul>
  </div>

  <div class="header-wrap">
    <div class="header grid-limit">
      <div class="widget-selectables">
      </div>

      <div class="widget-selectables">
        @if (Auth::guard(getGuard())->check())
          <div class="widget-options-wrap">
            <div id="account-dropdown-trigger" class="current-option">
              <div class="current-option-value">
                <img class="widget-option-img user-avatar micro" src="front/assets/img/users/05.jpg" alt="avatar-01">
                @if(Auth::guard(getGuard())->user())
                <p class="widget-option-text"> {{ Auth::guard(getGuard())->user()->id }} </p>
                @else
                <p class="widget-option-text"> {{ Auth::user()->name }} </p>
                @endif
              </div>
              
              <svg class="arrow-icon">
                <use xlink:href="#svg-arrow"></use>
              </svg>
            </div>
            
            <div id="account-dropdown" class="widget-options short linkable">
              <div class="widget-option-heading blue">
                @if(Auth::guard(getGuard())->user())
                  <p class="widget-option-text">{{ Auth::guard(getGuard())->user()->id }}</p>
                @else
                  <p class="widget-option-text">{{ Auth::user()->name }}</p>
                @endif
              </div>              
              @if(Auth::guard(getGuard())->user())
                <a href="{{ url('/profile') }}" class="widget-option">
                  <p class="widget-option-text">Account Detail</p>
                </a>
              @else
                <a href="{{ url('/admin-dashboard') }}" class="widget-option">
                  <p class="widget-option-text">Admin Dashboard</p>
                </a>
              @endif
            </div>
          </div>
          <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="button tiny red log-button">
            Logout
            <div class="button-ornament">
              <svg class="arrow-icon">
                <use xlink:href="#svg-arrow"></use>
              </svg>
            </div>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        @else
          <a href="{{ url('/register') }}" class="button tiny green log-button">
            Register
            <div class="button-ornament">
              <svg class="arrow-icon">
                <use xlink:href="#svg-arrow"></use>
              </svg>
            </div>
          </a>
          <a href="{{ url('/user/login') }}" class="button tiny blue log-button">
            Login
            <div class="button-ornament">
              <svg class="arrow-icon">
                <use xlink:href="#svg-arrow"></use>
              </svg>
            </div>
          </a>
        @endif
      </div>
    </div>
  </div>

  <nav class="navigation-wrap">
    <div class="navigation grid-limit">
      @if($contact_info)
      <div class="logo">
        <figure class="logo-img">
          <img src="{{ asset('/images/contact_info/thumbs/'.$contact_info->logo)}}" alt="Logo">
        </figure>

        <div class="logo-text">
          <h2 class="logo-title">{{ $contact_info->title }}<!-- <span class="highlight">Online</span> --></h2>
          <p class="logo-info">{{ $contact_info->tag_line }}</p>
        </div>
      </div>
      @endif

      <div class="search-button search-popup-open">
        <svg class="search-icon">
          <use xlink:href="#svg-search"></use>
        </svg>
      </div>

      <ul class="main-menu">
        <li class="main-menu-item">
          <a href="{{ url('/') }}" class="main-menu-item-link">Home</a>
        </li>
        <li class="main-menu-item">
          <a href="{{ url('/guide-information') }}" class="main-menu-item-link">Guide</a>
        </li>
        <li class="main-menu-item">
          <a href="{{ url('/aturangame') }}" class="main-menu-item-link">Aturan/Rules</a>
        </li>
        <li class="main-menu-item">
          <a href="{{ url('/top-up') }}" class="main-menu-item-link">Top-Up</a>
        </li>
        <li class="main-menu-item">
          <a href="{{ url('/ranking-top-kill') }}" class="main-menu-item-link">Ranking</a>
        </li>
        <li class="main-menu-item">
          <a href="{{ url('/download-game') }}" class="main-menu-item-link">Download</a>
        </li>
        <li class="main-menu-item">
          <a href="{{ url('/forum') }}" class="main-menu-item-link">Forum</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="mobile-menu-pull mobile-menu-open">
    <svg class="menu-pull-icon">
      <use xlink:href="#svg-menu-pull"></use>
    </svg>
  </div>

    @include('sweetalert::alert')
    @yield('content')
  
  <div class="footer-top-wrap">
    <div class="footer-top grid-limit">
      <div class="footer-top-brand">
        @if($contact_info)
        <div class="logo negative">
          <figure class="logo-img">
            <img src="{{ asset('/images/contact_info/thumbs/'.$contact_info->logo)}}" alt="Logo">
          </figure>

          <div class="logo-text">
            <h2 class="logo-title">{{ $contact_info->title }}</h2>
            <p class="logo-info">{{ $contact_info->tag_line }}</p>
          </div>
        </div>
        @endif
        <div class="sponsors-slider-wrap">
          <div id="footer-sponsor-slider-controls" class="sponsors-slider-controls">
            <div class="sponsors-slider-control control-previous">
              <svg class="arrow-icon medium">
                <use xlink:href="#svg-arrow-medium"></use>
              </svg>
            </div>
            <div class="sponsors-slider-control control-next">
              <svg class="arrow-icon medium">
                <use xlink:href="#svg-arrow-medium"></use>
              </svg>
            </div>
          </div>

          <div id="footer-sponsor-slider" class="sponsors-slider">
            <div class="sponsors-slider-items">
            @foreach($sponsors as $i=>$sponsor)
              <div class="sponsors-slider-item">
                <img class="sponsor-img" src="{{ asset('/images/sponsor/thumbs/'.$sponsor->img)}}" alt="sponsor{{ $sponsor->id }}">
              </div>
            @endforeach
            </div>
          </div>
        </div>

        <div class="social-links">
          
        </div>
      </div>

      <div class="line-separator negative"></div>

      <div class="footer-top-widgets grid-3col centered gutter-big">
        <div class="footer-top-widget">
          <div class="section-title-wrap green negative">
            <h2 class="section-title">Contact Info</h2>
            <div class="section-title-separator"></div>
          </div>

          <div class="contact-info-preview negative">
            @if($contact_info)
            <p class="contact-info-preview-text">{{ $contact_info->contact_info }}</p>
            @endif
            <div class="contact-info-preview-sign">
              <div class="bubble-ornament medium green">
                <i class="icon-bubbles bubbles-icon"></i>
              </div>
              <p class="contact-info-preview-sign-text">Subscribe to our newsletter!</p>
            </div>

            <form method="GET" class="contact-info-preview-form">
              <div class="form-row">
                <div class="form-item">
                  <div class="submit-input green">
                    <input type="text" id="footer-subscribe-email" name="footer-subscribe-email" placeholder="Enter your email here...">
                    <button class="submit-input-button">
                      <svg class="arrow-icon medium">
                        <use xlink:href="#svg-arrow-medium"></use>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            </form>

            <div class="contact-info-preview-email-wrap">
              <i class="email-icon icon-envelope"></i>
              @if($contact_info)
              <a href="mailto:info@pixeldiamond.com" class="contact-info-preview-email">{{ $contact_info->email }}</a>
              @endif
            </div>
          </div>  
        </div>

        <div class="footer-top-widget">
          <div class="section-title-wrap violet negative">
            <h2 class="section-title">Berita Terbaru</h2>
            <div class="section-title-separator"></div>
          </div>

          <div class="product-preview-showcase grid-1col gutter-small">
          @foreach($beritas as $i=>$berita)
            <div class="product-preview tiny negative">
              <div class="product-preview-img-wrap">
                <a href='{{URL::action("HomeController@detailBerita",array($berita->slug))}}'>
                  <figure class="product-preview-img liquid">
                    <img src="{{ asset('/images/berita/'.$berita->img)}}" alt="product-01">
                  </figure>
                </a>
              </div>
              <a href='{{URL::action("HomeController@detailBerita",array($berita->slug))}}' class="product-preview-title">{{ $berita->title }}</a>
              <div class="product-preview-info">
                <a href="#" class="product-preview-category">{{ $berita->category->name }}</a>
              </div>
            </div>
          @endforeach
          </div>
        </div>

        <div class="footer-top-widget">
          <div class="section-title-wrap yellow negative">
            <h2 class="section-title">Event Terbaru</h2>
            <div class="section-title-separator"></div>
          </div>

          <div class="product-preview-showcase grid-1col gutter-small">
          @foreach($events as $i=>$event)
            <div class="product-preview tiny negative">
              <div class="product-preview-img-wrap">
                <a href='{{URL::action("HomeController@detailEvent",array($event->slug))}}'>
                  <figure class="product-preview-img liquid">
                    <img src="{{ asset('/images/event/'.$event->img)}}" alt="product-05">
                  </figure>
                </a>
              </div>
              <a href='{{URL::action("HomeController@detailEvent",array($event->slug))}}' class="product-preview-title">{{ $event->title }}</a>
              <div class="product-preview-info">
                <a href="#" class="product-preview-category">{{ $event->category->name }}</a>
              </div>
            </div>
          @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-bottom-wrap">
    <div class="footer-bottom grid-limit">
      @if($contact_info)
        <p class="footer-bottom-text"><span class="brand"><span class="highlighted">{{ $contact_info->title }}</span></span><span class="separator">|</span>All Rights Reserved {{date('Y')}}</p>
      @endif
      <p class="footer-bottom-text"><a href="#">Terms and Conditions</a><span class="separator">|</span><a href="#">Privacy Policy</a></p>
    </div>
  </div>


  
    <div class="chat-me" id="chat-fb">
      <img src="front/assets/img/facebook.png">
    </div>

  <div class="openboxchat" style="display:none">
    <div class="form-boxv2 shadowed">
      <form class="form-wrap">
  
        <div class="form-row">
          <div class="form-item violet info-chat">
            <label for="review_title2" class="rl-label mb-10">Chat Bot</label>
            <div>
              <img src="front/assets/img/badges/expert_user_big.png">
            </div>
            <div class="message-chat">
              <p>Hai. ada yang bisa aku di bantu ?</p>
            </div>
          </div>
        </div>
        @if($contact_info)
        <div class="form-actions">
          <a target="_blank" class="button violet full" href="{{ $contact_info->link_forum }}">Chat Forum Facebook</a>
        </div>
        @endif
      </form>
    </div>
  </div>




{!! Html::script('front/assets/app.bundle.min.js') !!}
@livewireAssets
{{-- @yield('js') --}}

<script>
$(document).ready(function(){
  $("#chat-fb").click(function(){
    $(".openboxchat").toggle(300);
  });
});
</script>
<script type="text/javascript">
  $( document ).ready(function() {
    console.log("dadas")
     $( "#ChPassword2" ).trigger( "click" );
  });
</script>

</body>
</html>