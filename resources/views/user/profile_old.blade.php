@extends('layouts.app')
@section('content')

<style type="text/css">
  /* Style the tab */
.tab {
  overflow: hidden;
  background-color: #f1f1f1;
}

/* Style the buttons that are used to open the tab content */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
}

</style>

<div class="banner-wrap forum-banner">
    <div class="banner grid-limit">
      <h2 class="banner-title">Your Account</h2>
      <p class="banner-sections">
        <span class="banner-section">Home</span>
        <svg class="arrow-icon">
          <use xlink:href="#svg-arrow"></use>
        </svg>
        <span class="banner-section">{{ $user->char_name }}</span>
      </p>
    </div>
  </div>

  @include('layouts.live-news')

  <div class="layout-content-4 layout-item-1-3 grid-limit content-box-style">
    <div class="layout-sidebar">
      <div class="account-info-wrap">
        <img class="user-avatar big" src="front/assets/img/users/05.jpg" alt="user-05">

        <p class="account-info-username">{{ $user->char_name }}</p>

        <p class="account-info-name">{{ $user->email }}</p>

        <div class="account-info-stats">
          {{-- <div class="account-info-stat">
            <p class="account-info-stat-value">Active</p>

            <p class="account-info-stat-title">Accunt Status</p>
          </div> --}}

          <div class="account-info-stat">
            <p class="account-info-stat-value">{{$user->point}}</p>

            <p class="account-info-stat-title">Point</p>
          </div>

          <div class="account-info-stat">
            <p class="account-info-stat-value">{{ tgl_indo($user->birthday) }}</p>

            <p class="account-info-stat-title">Birth Day</p>
          </div>
        </div>

        <ul class="dropdown-list void tab">
          <li id="ChPassword2" class="dropdown-list-item tablinks active" onclick="openCity(event, 'ChPassword')">
            <a class="dropdown-list-item-link">Ubah Password</a>
          </li>
  
          <li class="dropdown-list-item tablinks" onclick="openCity(event, 'ChPincode')">
            <a class="dropdown-list-item-link">Ubah Pin</a>
          </li>
  
         <!--  <li class="dropdown-list-item ">
            <a href="{{ url('/change-email') }}" class="dropdown-list-item-link">Change Email</a>
          </li>
  
          <li class="dropdown-list-item">
            <a href="{{ url('/account-settings') }}" class="dropdown-list-item-link">Orders History</a>
          </li> -->
        </ul>
      </div>
    </div>

    <div class="layout-body tabcontent" id="ChPassword">
      <div class="section-title-wrap blue">
        <h2 class="section-title medium">Ubah Password</h2>
        <div class="section-title-separator"></div>
      </div>

      
      <form class="account-settings-form" method="POST" action="{{ route('post-change-password') }}">
        @csrf
      	<div class="form-row">
          <div class="form-item half blue">
            <label for="old_pwd" class="rl-label">Password Lama</label>
            <input type="password" id="old_pwd" name="old_pwd" placeholder="Masukkan password lama...">
          </div>

          <div class="form-item half blue">
            <label for="as_pwd" class="rl-label">Password Baru</label>
            <input type="password" id="as_pwd" name="as_pwd" placeholder="Masukkan password baru..." required>
          </div>
         
        </div>
        <div class="form-row">
          <div class="form-item half blue">
            <label for="pin" class="rl-label">Pin</label>
            <input type="password" id="pin" name="pin" placeholder="Masukkan pin..." required>
          </div>
          <div class="form-item half blue">
            <label for="as_pwd_repeat" class="rl-label">Konfirmasi Password Baru</label>
            <input type="password" id="as_pwd_repeat" name="as_pwd_repeat" placeholder="Konfirmasi password..." required>
          </div>
      	</div>

        <div class="submit-button-wrap">
          <button class="button blue">
            Simpan Perubahan Password
            <span class="button-ornament">
              <svg class="arrow-icon medium">
                <use xlink:href="#svg-arrow-medium"></use>
              </svg>

              <svg class="cross-icon small">
                <use xlink:href="#svg-cross-small"></use>
              </svg>
            </span>
          </button>
        </div>
      </form>
    </div>

    <div class="layout-body tabcontent" id="ChPincode">
      <div class="section-title-wrap blue">
        <h2 class="section-title medium">Ubah Pin</h2>
        <div class="section-title-separator"></div>
      </div>

      <form class="account-settings-form" method="POST" action="{{ route('post-change-pin') }}">
        @csrf
        <div class="form-row">
          <div class="form-item half blue">
            <label for="old_pin" class="rl-label">Pin Lama</label>
            <input type="password" id="old_pin" name="old_pin" placeholder="Enter your Old Pin here...">
          </div>

          <div class="form-item half blue">
            <label for="new_pin" class="rl-label">Pin Baru</label>
            <input type="password" id="new_pin" name="new_pin" placeholder="your new Pin here...">
          </div>
         
        </div>
        <div class="form-row">
          <div class="form-item half blue">
            <label for="new_pin_repeat" class="rl-label">Konfirmasi Pin Baru</label>
            <input type="password" id="new_pin_repeat" name="new_pin_repeat" placeholder="Confrim your Pin here...">
          </div>
          {{-- <div class="form-item half blue">
          </div> --}}
        </div>

        <div class="submit-button-wrap">
          <button class="button blue">
            Simpan Perubahan Pin
            <span class="button-ornament">
              <svg class="arrow-icon medium">
                <use xlink:href="#svg-arrow-medium"></use>
              </svg>

              <svg class="cross-icon small">
                <use xlink:href="#svg-cross-small"></use>
              </svg>
            </span>
          </button>
        </div>
      </form>
    </div>

  </div>

  <script type="text/javascript">
    function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  </script>
@endsection