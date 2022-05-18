@extends('layouts.app')
@section('content')

<div class="banner-wrap forum-banner">
    <div class="banner grid-limit">
      <h2 class="banner-title">Your Account</h2>
      <p class="banner-sections">
        <span class="banner-section">Home</span>
        <svg class="arrow-icon">
          <use xlink:href="#svg-arrow"></use>
        </svg>
        <span class="banner-section">James_Spiegel</span>
      </p>
    </div>
  </div>

  <div class="live-news-widget-wrap">
    <div class="live-news-widget grid-limit">
      <div class="live-news-widget-stairs left red">
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
      </div>

      <div class="live-news-widget-stairs right blue">
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
        <div class="live-news-widget-stair"></div>
      </div>

      <div class="live-news-widget-title-wrap">
        <img class="live-news-widget-icon" src="front/assets/img/icons/live-news-icon.png" alt="live-news-icon">
        <p class="live-news-widget-title">Live News</p>
      </div>

      <div id="lineslide-wrap1" class="live-news-widget-text-wrap">
        <p class="live-news-widget-text"></p>
      </div>
    </div>
  </div>

  <div class="layout-content-4 layout-item-1-3 grid-limit content-box-style">
    <div class="layout-sidebar">
      <div class="account-info-wrap">
        <img class="user-avatar big" src="front/assets/img/users/05.jpg" alt="user-05">

        <p class="account-info-username">James_Spiegel</p>

        <p class="account-info-name">James Spiegel</p>

        <div class="account-info-stats">
          <div class="account-info-stat">
            <p class="account-info-stat-value">Active</p>

            <p class="account-info-stat-title">Accunt Status</p>
          </div>

          <div class="account-info-stat">
            <p class="account-info-stat-value">165</p>

            <p class="account-info-stat-title">Point</p>
          </div>
        </div>

         <ul class="dropdown-list void">
          <li class="dropdown-list-item ">
            <a href="{{ url('/account-settings') }}" class="dropdown-list-item-link">Account Settings</a>
          </li>
  
          <li class="dropdown-list-item active">
            <a href="{{ url('/change-pin-code') }}" class="dropdown-list-item-link">Change Pin Code</a>
          </li>
  
          <!-- <li class="dropdown-list-item ">
            <a href="{{ url('/change-email') }}" class="dropdown-list-item-link">Change Email</a>
          </li>
  
          <li class="dropdown-list-item">
            <a href="{{ url('/account-settings') }}" class="dropdown-list-item-link">Orders History</a>
          </li> -->
        </ul>
      </div>
    </div>

    <div class="layout-body">
      <div class="section-title-wrap blue">
        <h2 class="section-title medium">Change Pin Code</h2>
        <div class="section-title-separator"></div>
      </div>

      <form class="account-settings-form">
        <div class="form-row">
          <div class="form-item half blue">
            <label for="as_pwd" class="rl-label">Old Pin Code</label>
            <input type="password" id="as_pwd" name="as_pwd" placeholder="Enter your Old Pin Code here...">
          </div>

          <div class="form-item half blue">
            <label for="as_pwd_repeat" class="rl-label">Change Pin Code</label>
            <input type="password" id="as_pwd_repeat" name="as_pwd_repeat" placeholder="your new Pin Code here...">
          </div>
         
        </div>
        <div class="form-row">
         <div class="form-item half blue">
            <label for="as_pwd_repeat" class="rl-label">Confrim Pin Code</label>
            <input type="password" id="as_pwd_repeat" name="as_pwd_repeat" placeholder="Confrim your Pin Code here...">
          </div>
           <div class="form-item half blue">
            <label for="as_first_name" class="rl-label">Mother Name</label>
            <input type="text" id="as_first_name" name="as_first_name" placeholder="Enter your mother name here...">
          </div>
        </div>

        <div class="submit-button-wrap">
          <button class="button blue">
            Save all changes
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
@endsection