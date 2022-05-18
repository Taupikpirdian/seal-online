@extends('layouts.app')
@section('content')
  <div class="banner-wrap e-sport">
    <div class="banner grid-limit">
      <h2 class="banner-title">Ranking / Ranked</h2>
      <p class="banner-sections">
        <span class="banner-section">Home</span>
        <svg class="arrow-icon">
          <use xlink:href="#svg-arrow"></use>
        </svg>
        <span class="banner-section">List Ranking</span>
        <svg class="arrow-icon">
          <use xlink:href="#svg-arrow"></use>
        </svg>
        <span class="banner-section">Informasi Ranking - Ranked</span>
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

  <div class="layout-content-1 layout-item-3-1 grid-limit content-box-style">
    <div class="layout-body layout-item gutter-big">
      <div class="widget-item">
        <div class="section-title-wrap blue small-space">
          <h2 class="section-title medium">Overall Ranking</h2>
          <div class="section-title-separator"></div>
        </div>

        <div class="table standings full">
          <div class="table-row-header">
            <div class="table-row-header-item table-style position">
              <p class="table-row-header-title">Position Rank</p>
            </div>

            <div class="table-row-header-item table-style position">
              <p class="table-row-header-title">Emblem</p>
            </div>
    
            <div class="table-row-header-item table-style padded">
              <p class="table-row-header-title">Nama Karakter</p>
            </div>
    
            <div class="table-row-header-item table-style padded">
              <p class="table-row-header-title">Level</p>
            </div>
    
            <div class="table-row-header-item table-style padded">
              <p class="table-row-header-title">  Guild</p>
            </div>
    
            <div class="table-row-header-item table-style padded">
              <p class="table-row-header-title">  Reputasi</p>
            </div>
    
            <div class="table-row-header-item table-style padded">
              <p class="table-row-header-title">Job</p>
            </div>
          </div>
    
          <div class="table-row">
            <div class="table-row-item position">
              <p class="table-text">01</p>
              <div class="team-info-wrap">
                <img class="team-logo small" src="front/assets/img/users/female.gif">
              </div>
            </div>

            <div class="table-row-item">
             <div class="team-info-wrap">
                <img class="team-logo small" src="front/assets/img/badges/ultra_powered_big.png">
              </div>
            </div>

            <div class="table-row-item">
              <div class="team-info">
                <p class="table-text bold">Crimson Pack</p>
              </div>
            </div>
  
            <div class="table-row-item">
              <p class="table-text bold">252</p>
            </div>
  
            <div class="table-row-item">
              <p class="table-text bold">Akatsuki</p>
            </div>
  
            <div class="table-row-item">
              <p class="table-text bold">Graduate</p>
            </div>
  
            <div class="table-row-item">
              <p class="table-text bold">Priest</p>
            </div>
          </div>
    
          <div class="table-row">
            <div class="table-row-item position">
              <p class="table-text">02</p>
              <div class="team-info-wrap">
                <img class="team-logo small" src="front/assets/img/users/male.gif">
              </div>
            </div>

            <div class="table-row-item">
             <div class="team-info-wrap">
                <img class="team-logo small" src="front/assets/img/badges/ultra_powered_big.png">
              </div>
            </div>

            <div class="table-row-item">
              <div class="team-info">
                <p class="table-text bold">Crimson Pack</p>
              </div>
            </div>
  
            <div class="table-row-item">
              <p class="table-text bold">252</p>
            </div>
  
            <div class="table-row-item">
              <p class="table-text bold">Akatsuki</p>
            </div>
  
            <div class="table-row-item">
              <p class="table-text bold">Graduate</p>
            </div>
  
            <div class="table-row-item">
              <p class="table-text bold">Priest</p>
            </div>
          </div>
  
          <div class="table-row">
            <div class="table-row-item position">
              <p class="table-text">03</p>
              <div class="team-info-wrap">
                <img class="team-logo small" src="front/assets/img/users/male.gif">
              </div>
            </div>

            <div class="table-row-item">
             <div class="team-info-wrap">
                <img class="team-logo small" src="front/assets/img/badges/ultra_powered_big.png">
              </div>
            </div>

            <div class="table-row-item">
              <div class="team-info">
                <p class="table-text bold">Crimson Pack</p>
              </div>
            </div>
  
            <div class="table-row-item">
              <p class="table-text bold">252</p>
            </div>
  
            <div class="table-row-item">
              <p class="table-text bold">Akatsuki</p>
            </div>
  
            <div class="table-row-item">
              <p class="table-text bold">Graduate</p>
            </div>
  
            <div class="table-row-item">
              <p class="table-text bold">Priest</p>
            </div>
          </div>
  
          <div class="table-row">
            <div class="table-row-item position">
              <p class="table-text">04</p>
              <div class="team-info-wrap">
                <img class="team-logo small" src="front/assets/img/users/female.gif">
              </div>
            </div>

            <div class="table-row-item">
             <div class="team-info-wrap">
                <img class="team-logo small" src="front/assets/img/badges/ultra_powered_big.png">
              </div>
            </div>

            <div class="table-row-item">
              <div class="team-info">
                <p class="table-text bold">Crimson Pack</p>
              </div>
            </div>
  
            <div class="table-row-item">
              <p class="table-text bold">252</p>
            </div>
  
            <div class="table-row-item">
              <p class="table-text bold">Akatsuki</p>
            </div>
  
            <div class="table-row-item">
              <p class="table-text bold">Graduate</p>
            </div>
  
            <div class="table-row-item">
              <p class="table-text bold">Priest</p>
            </div>
          </div>
  
          <div class="table-row">
            <div class="table-row-item position">
              <p class="table-text">05</p>
              <div class="team-info-wrap">
                <img class="team-logo small" src="front/assets/img/users/female.gif">
              </div>
            </div>

            <div class="table-row-item">
             <div class="team-info-wrap">
                <img class="team-logo small" src="front/assets/img/badges/ultra_powered_big.png">
              </div>
            </div>

            <div class="table-row-item">
              <div class="team-info">
                <p class="table-text bold">Crimson Pack</p>
              </div>
            </div>
  
            <div class="table-row-item">
              <p class="table-text bold">252</p>
            </div>
  
            <div class="table-row-item">
              <p class="table-text bold">Akatsuki</p>
            </div>
  
            <div class="table-row-item">
              <p class="table-text bold">Graduate</p>
            </div>
  
            <div class="table-row-item">
              <p class="table-text bold">Priest</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="layout-sidebar layout-item gutter-medium">




      <div class="widget-sidebar style-sidebar">
        <div class="section-title-wrap violet small-space">
          <h2 class="section-title medium">Player Ranking</h2>
          <div class="section-title-separator"></div>
        </div>

        <div class="table standings">
          <ul class="dropdown-inner-list accordion-content accordion-open">
                <li class="dropdown-inner-list-item">
                  <a href=""><p class="dropdown-inner-list-item-title"><i><img class="img-guid-list" src="front/assets/img/badges/contest_winner_big.png"></i>Overall Ranking</p>
                  </a>
                </li>
                <li class="dropdown-inner-list-item">
                  <a href=""><p class="dropdown-inner-list-item-title"><i><img class="img-guid-list" src="front/assets/img/badges/contest_winner_big.png"></i>Top Reputasi</p>
                  </a>
                </li>
                <li class="dropdown-inner-list-item">
                  <a href=""><p class="dropdown-inner-list-item-title"><i><img class="img-guid-list" src="front/assets/img/badges/contest_winner_big.png"></i>Top Killer GWH</p>
                  </a>
                </li>
                <li class="dropdown-inner-list-item">
                  <a href=""><p class="dropdown-inner-list-item-title"><i><img class="img-guid-list" src="front/assets/img/badges/contest_winner_big.png"></i>Couple Ranking</p>
                  </a>
                </li>
                <li class="dropdown-inner-list-item">
                  <a href=""><p class="dropdown-inner-list-item-title"><i><img class="img-guid-list" src="front/assets/img/badges/contest_winner_big.png"></i>Online Ranking</p>
                  </a>
                </li>
              </ul>
        </div>
      </div>

      <div class="widget-sidebar style-sidebar">
        <div class="section-title-wrap blue small-space">
          <h2 class="section-title medium">Guild Ranking</h2>
          <div class="section-title-separator"></div>
        </div>

        <div class="table standings">
          <ul class="dropdown-inner-list accordion-content accordion-open">
            <li class="dropdown-inner-list-item">
              <a href=""><p class="dropdown-inner-list-item-title"><i><img class="img-guid-list" src="front/assets/img/badges/contest_winner_big.png"></i>Guild Ranking</p>
              </a>
            </li>
            <li class="dropdown-inner-list-item">
              <a href=""><p class="dropdown-inner-list-item-title"><i><img class="img-guid-list" src="front/assets/img/badges/contest_winner_big.png"></i>GWH Ranking</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

@endsection