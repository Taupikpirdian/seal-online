        <!--------------------
        START - Mobile Menu
        -------------------->
        <div class="menu-mobile menu-activated-on-click color-scheme-dark">
          <div class="mm-logo-buttons-w">
            <a class="mm-logo" href="{{ url('/') }}"><img src="{{asset('admin/img/logo.png')}}"><span>Seal Online Empire Dashboard</span></a>
            <div class="mm-buttons">
              <div class="content-panel-open">
                <div class="os-icon os-icon-grid-circles"></div>
              </div>
              <div class="mobile-menu-trigger">
                <div class="os-icon os-icon-hamburger-menu-1"></div>
              </div>
            </div>
          </div>
          <div class="menu-and-user">
            <div class="logged-user-w">
              <div class="avatar-w">
                @if(Auth::user()->profile_picture)
                <img alt="" src="{{ asset('/images/user_profiles/thumbs/'.Auth::user()->profile_picture)}}">
                @else
                <img alt="" src="{{asset('admin/img/avatar1.jpg')}}">
                @endif
              </div>
              <div class="logged-user-info-w">
                <div class="logged-user-name">
                  {{ Auth::user()->name }}
                </div>
                <div class="logged-user-role">
                  Administrator
                </div>
              </div>
            </div>
            <!--------------------
            START - Mobile Menu List
            -------------------->
            <ul class="main-menu">
            <li class="sub-header">
              <span>Menu Admin</span>
            </li>
            <li class="selected has-sub-menu">
              <a href="{{ url('/admin-dashboard') }}">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Dashboard</span></a>
              <div class="sub-menu-w">
                <div class="sub-menu-header">
                  Dashboard
                </div>
                <div class="sub-menu-icon">
                  <i class="os-icon os-icon-layout"></i>
                </div>
                <div class="sub-menu-i">
                  <ul class="sub-menu">
                    <li>
                      <a href="{{URL::to('/roles')}}">Role</a>
                    </li>
                    <li>
                      <a href="{{URL::to('/groups')}}">Group</a>
                    </li>
                    <li>
                      <a href="{{URL::to('/user-groups')}}">User Group</a>
                    </li>
                    <li>
                      <a href="{{URL::to('/group-roles')}}">User Role</a>
                    </li>
                    <li>
                      <a href="{{URL::to('/user/index')}}">User</a>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
            <!-- Setup -->
            <li class="sub-header">
              <span>Menu Setup</span>
            </li>
            <li>
              <a href="{{URL::to('/category/index')}}">
                <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Category</span>
              </a>
            </li>
            <li>
              <a href="{{URL::to('/contact-info/index')}}">
               <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Pengaturan Dasar</span>
              </a>
            </li>
            <li>
              <a href="{{URL::to('/setup-web/index')}}">
               <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Setup Web</span>
              </a>
            </li>
            <li>
              <a href="{{URL::to('/background-update-seal/index')}}">
               <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Background Update Seal</span>
              </a>
            </li>
            <li>
              <a href="{{URL::to('/sponsor-logo/index')}}">
               <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Sponsor Logo</span>
              </a>
            </li>
            
            <!-- Content -->
            <li class="sub-header">
              <span>Menu Conten</span>
            </li>
            <li class="selected has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Dunia Seal</span></a>
                <div class="sub-menu-w">
                  <div class="sub-menu-header">
                    Dunia Seal
                  </div>
                  <div class="sub-menu-icon">
                    <i class="os-icon os-icon-layout"></i>
                  </div>
                  <div class="sub-menu-i">
                    <ul class="sub-menu">
                      <li>
                        <a href="{{URL::to('/intro/index')}}">Pengenalan</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/fitur/index')}}">Fitur Game</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/berita/index')}}">Informasi</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/update-seal/index')}}">Update Seal</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/update-seal-carnival-city/index')}}">Carnival City</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/update-seal-guild-wars/index')}}">GuildWars</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/update-seal-service/index')}}">Service</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </li>
            <li class="selected has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Panduan</span></a>
                <div class="sub-menu-w">
                  <div class="sub-menu-header">
                    Panduan
                  </div>
                  <div class="sub-menu-icon">
                    <i class="os-icon os-icon-layout"></i>
                  </div>
                  <div class="sub-menu-i">
                    <ul class="sub-menu">
                      <li>
                        <a href="{{URL::to('/installation/index')}}">Installation</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/mulai-bermain/index')}}">Mulai Bermain</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/profesi/index')}}">Profesi</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/emotikon-content/index')}}">Emotikon</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/bale-monster/index')}}">Bale (Monster)</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/peta/index')}}">Peta</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/pet/index')}}">Pet</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/barang/index')}}">Barang</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/non-player-character/index')}}">NPC</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/guild-wars/index')}}">GuildWars</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/dating/index')}}">Pacaran</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/refine/index')}}">Refine</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/hindari-penipuan/index')}}">Hindari Penipuan</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/game-master/index')}}">Game Master</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </li>
            <li class="selected has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Member</span></a>
                <div class="sub-menu-w">
                  <div class="sub-menu-header">
                    Member
                  </div>
                  <div class="sub-menu-icon">
                    <i class="os-icon os-icon-layout"></i>
                  </div>
                  <div class="sub-menu-i">
                    <ul class="sub-menu">
                      <li>
                        <a href="{{URL::to('/persetujuan/index')}}">Persetujuan</a>
                      </li>
                    </ul>
                  </div>
                  <div class="sub-menu-i">
                    <ul class="sub-menu">
                      <li>
                        <a href="{{URL::to('/content-register/index')}}">Konten Register</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </li>
            <li class="selected has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Komunitas</span></a>
                <div class="sub-menu-w">
                  <div class="sub-menu-header">
                    Komunitas
                  </div>
                  <div class="sub-menu-icon">
                    <i class="os-icon os-icon-layout"></i>
                  </div>
                  <div class="sub-menu-i">
                    <ul class="sub-menu">
                      <li>
                        <a href="{{URL::to('/rules/index')}}">Aturan Main</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/forum/index')}}">Fansite</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/komik/index')}}">Komik</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/screen-shot/index')}}">Screenshoot</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/event-seal/index')}}">Event Seal</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </li>
            <li class="selected has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Download</span></a>
                <div class="sub-menu-w">
                  <div class="sub-menu-header">
                    Download
                  </div>
                  <div class="sub-menu-icon">
                    <i class="os-icon os-icon-layout"></i>
                  </div>
                  <div class="sub-menu-i">
                    <ul class="sub-menu">
                      <li>
                        <a href="{{URL::to('/download/index')}}">Game</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/gallery/index')}}">Gallery</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/video-download/index')}}">Video</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/emotikon-download/index')}}">Emotikon</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </li>
            <li class="selected has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Layanan</span></a>
                <div class="sub-menu-w">
                  <div class="sub-menu-header">
                    Layanan
                  </div>
                  <div class="sub-menu-icon">
                    <i class="os-icon os-icon-layout"></i>
                  </div>
                  <div class="sub-menu-i">
                    <ul class="sub-menu">
                      <li>
                        <a href="{{URL::to('/contact-us/index')}}">Kontak Kami</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </li>
            <li class="selected has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Beli Koin</span></a>
                <div class="sub-menu-w">
                  <div class="sub-menu-header">
                    Beli Koin
                  </div>
                  <div class="sub-menu-icon">
                    <i class="os-icon os-icon-layout"></i>
                  </div>
                  <div class="sub-menu-i">
                    <ul class="sub-menu">
                      <li>
                        <a href="{{URL::to('/top-up/index')}}">Panduan Beli Koin</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </li>
            <!-- <li>
              <a href="{{URL::to('/guide/index')}}">
                <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Guide</span>
              </a>
            </li> -->
            <!-- <li>
              <a href="{{URL::to('/slider/index')}}">
                <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Slider</span>
              </a>
            </li> -->
            <!-- Marketing -->
            <li class="sub-header">
              <span>Menu Marketing</span>
            </li>
            <li>
              <a href="{{URL::to('/button-home/index')}}">
               <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Banner</span>
              </a>
            </li>
            <li>
              <a href="{{URL::to('/content/index')}}">
               <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Content</span>
              </a>
            </li>
            <li>
              <a href="{{URL::to('/iklan/index')}}">
               <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Iklan</span>
              </a>
            </li>
            <li>
              <a href="{{URL::to('/running-text/index')}}">
               <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Running Text</span>
              </a>
            </li>
            <li>
              <a href="{{URL::to('/background/index')}}">
               <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Slider</span>
              </a>
            </li>
          </ul>
            <!--------------------
            END - Mobile Menu List
            -------------------->
            <div class="mobile-menu-magic">
              <h4>
                Seal Online
              </h4>
              <p>
                Empire
              </p>
              <div class="btn-w">
              </div>
            </div>
          </div>
        </div>
        <!--------------------
        END - Mobile Menu
        --------------------><!--------------------
        START - Main Menu
        -------------------->
        <div class="menu-w color-scheme-light color-style-transparent menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
          <div class="logo-w">
            <a class="logo" href="{{ url('/') }}">
              <div class="logo-element"></div>
              <div class="logo-label">
                Seal Online Empire Dashboard
              </div>
            </a>
          </div>
          <div class="logged-user-w avatar-inline">
            <div class="logged-user-i">
              <div class="avatar-w">
                @if(Auth::user()->profile_picture)
                <img alt="" src="{{ asset('/images/user_profiles/thumbs/'.Auth::user()->profile_picture)}}">
                @else
                <img alt="" src="{{asset('admin/img/avatar1.jpg')}}">
                @endif
              </div>
              <div class="logged-user-info-w">
                <div class="logged-user-name">
                  {{ Auth::user()->name }}
                </div>
                <div class="logged-user-role">
                  Administrator
                </div>
              </div>
              <div class="logged-user-toggler-arrow">
                <div class="os-icon os-icon-chevron-down"></div>
              </div>
              <div class="logged-user-menu color-style-bright">
                <div class="logged-user-avatar-info">
                  <div class="avatar-w">
                    @if(Auth::user()->profile_picture)
                    <img alt="" src="{{ asset('/images/user_profiles/thumbs/'.Auth::user()->profile_picture)}}">
                    @else
                    <img alt="" src="{{asset('admin/img/avatar1.jpg')}}">
                    @endif
                  </div>
                  <div class="logged-user-info-w">
                    <div class="logged-user-name">
                    {{ Auth::user()->name }}
                    </div>
                    <div class="logged-user-role">
                      Administrator
                    </div>
                  </div>
                </div>
                <div class="bg-icon">
                  <i class="os-icon os-icon-wallet-loaded"></i>
                </div>
                <ul>
                  <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      <i class="os-icon os-icon-signs-11"></i><span>logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <h1 class="menu-page-header">
            Page Header
          </h1>
          <ul class="main-menu">
            <li class="sub-header">
              <span>Menu Admin</span>
            </li>
            <li class="selected has-sub-menu">
              <a href="{{ url('/admin-dashboard') }}">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Dashboard</span></a>
                <div class="sub-menu-w">
                  <div class="sub-menu-header">
                    Dashboard
                  </div>
                  <div class="sub-menu-icon">
                    <i class="os-icon os-icon-layout"></i>
                  </div>
                  <div class="sub-menu-i">
                    <ul class="sub-menu">
                      <li>
                        <a href="{{URL::to('/roles')}}">Role</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/groups')}}">Group</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/user-groups')}}">User Group</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/group-roles')}}">User Role</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/user/index')}}">User</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </li>
            <!-- Setup -->
            <li class="sub-header">
              <span>Menu Setup</span>
            </li>
            <li>
              <a href="{{URL::to('/category/index')}}">
                <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Category</span>
              </a>
            </li>
            <li>
              <a href="{{URL::to('/contact-info/index')}}">
               <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Pengaturan Dasar</span>
              </a>
            </li>
            <li>
              <a href="{{URL::to('/setup-web/index')}}">
               <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Setup Web</span>
              </a>
            </li>
            <li>
              <a href="{{URL::to('/background-update-seal/index')}}">
               <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Background Update Seal</span>
              </a>
            </li>
            <li>
              <a href="{{URL::to('/sponsor-logo/index')}}">
               <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Sponsor Logo</span>
              </a>
            </li>
            
            <!-- Content -->
            <li class="sub-header">
              <span>Menu Conten</span>
            </li>
            <li class="selected has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Dunia Seal</span></a>
                <div class="sub-menu-w">
                  <div class="sub-menu-header">
                    Dunia Seal
                  </div>
                  <div class="sub-menu-icon">
                    <i class="os-icon os-icon-layout"></i>
                  </div>
                  <div class="sub-menu-i">
                    <ul class="sub-menu">
                      <li>
                        <a href="{{URL::to('/intro/index')}}">Pengenalan</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/fitur/index')}}">Fitur Game</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/berita/index')}}">Informasi</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/update-seal/index')}}">Update Seal</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/update-seal-carnival-city/index')}}">Carnival City</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/update-seal-guild-wars/index')}}">GuildWars</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/update-seal-service/index')}}">Service</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </li>
            <li class="selected has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Panduan</span></a>
                <div class="sub-menu-w">
                  <div class="sub-menu-header">
                    Panduan
                  </div>
                  <div class="sub-menu-icon">
                    <i class="os-icon os-icon-layout"></i>
                  </div>
                  <div class="sub-menu-i">
                    <ul class="sub-menu">
                      <li>
                        <a href="{{URL::to('/installation/index')}}">Installation</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/mulai-bermain/index')}}">Mulai Bermain</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/profesi/index')}}">Profesi</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/emotikon-content/index')}}">Emotikon</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/bale-monster/index')}}">Bale (Monster)</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/peta/index')}}">Peta</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/pet/index')}}">Pet</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/barang/index')}}">Barang</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/non-player-character/index')}}">NPC</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/guild-wars/index')}}">GuildWars</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/dating/index')}}">Pacaran</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/refine/index')}}">Refine</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/hindari-penipuan/index')}}">Hindari Penipuan</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/game-master/index')}}">Game Master</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </li>
            <li class="selected has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Member</span></a>
                <div class="sub-menu-w">
                  <div class="sub-menu-header">
                    Member
                  </div>
                  <div class="sub-menu-icon">
                    <i class="os-icon os-icon-layout"></i>
                  </div>
                  <div class="sub-menu-i">
                    <ul class="sub-menu">
                      <li>
                        <a href="{{URL::to('/persetujuan/index')}}">Persetujuan</a>
                      </li>
                    </ul>
                  </div>
                  <div class="sub-menu-i">
                    <ul class="sub-menu">
                      <li>
                        <a href="{{URL::to('/content-register/index')}}">Konten Register</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </li>
            <li class="selected has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Komunitas</span></a>
                <div class="sub-menu-w">
                  <div class="sub-menu-header">
                    Komunitas
                  </div>
                  <div class="sub-menu-icon">
                    <i class="os-icon os-icon-layout"></i>
                  </div>
                  <div class="sub-menu-i">
                    <ul class="sub-menu">
                      <li>
                        <a href="{{URL::to('/rules/index')}}">Aturan Main</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/forum/index')}}">Fansite</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/komik/index')}}">Komik</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/screen-shot/index')}}">Screenshoot</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/event-seal/index')}}">Event Seal</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </li>
            <li class="selected has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Download</span></a>
                <div class="sub-menu-w">
                  <div class="sub-menu-header">
                    Download
                  </div>
                  <div class="sub-menu-icon">
                    <i class="os-icon os-icon-layout"></i>
                  </div>
                  <div class="sub-menu-i">
                    <ul class="sub-menu">
                      <li>
                        <a href="{{URL::to('/download/index')}}">Game</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/gallery/index')}}">Gallery</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/video-download/index')}}">Video</a>
                      </li>
                      <li>
                        <a href="{{URL::to('/emotikon-download/index')}}">Emotikon</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </li>
            <li class="selected has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Layanan</span></a>
                <div class="sub-menu-w">
                  <div class="sub-menu-header">
                    Layanan
                  </div>
                  <div class="sub-menu-icon">
                    <i class="os-icon os-icon-layout"></i>
                  </div>
                  <div class="sub-menu-i">
                    <ul class="sub-menu">
                      <li>
                        <a href="{{URL::to('/contact-us/index')}}">Kontak Kami</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </li>
            <li class="selected has-sub-menu">
              <a href="#">
                <div class="icon-w">
                  <div class="os-icon os-icon-layout"></div>
                </div>
                <span>Beli Koin</span></a>
                <div class="sub-menu-w">
                  <div class="sub-menu-header">
                    Beli Koin
                  </div>
                  <div class="sub-menu-icon">
                    <i class="os-icon os-icon-layout"></i>
                  </div>
                  <div class="sub-menu-i">
                    <ul class="sub-menu">
                      <li>
                        <a href="{{URL::to('/top-up/index')}}">Panduan Beli Koin</a>
                      </li>
                    </ul>
                  </div>
                </div>
            </li>
            <!-- <li>
              <a href="{{URL::to('/guide/index')}}">
                <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Guide</span>
              </a>
            </li> -->
            <!-- <li>
              <a href="{{URL::to('/slider/index')}}">
                <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Slider</span>
              </a>
            </li> -->
            <!-- Marketing -->
            <li class="sub-header">
              <span>Menu Marketing</span>
            </li>
            <li>
              <a href="{{URL::to('/button-home/index')}}">
               <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Button on Home</span>
              </a>
            </li>
            <li>
              <a href="{{URL::to('/content/index')}}">
               <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Content</span>
              </a>
            </li>
            <li>
              <a href="{{URL::to('/iklan/index')}}">
               <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Iklan</span>
              </a>
            </li>
            <li>
              <a href="{{URL::to('/running-text/index')}}">
               <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Running Text</span>
              </a>
            </li>
            <li>
              <a href="{{URL::to('/background/index')}}">
               <div class="icon-w">
                  <div class="os-icon os-icon-layers"></div>
                </div>
                <span>Slider</span>
              </a>
            </li>
          </ul>
          <div class="side-menu-magic">
            <h4>
              Seal Online Empire
            </h4>
            <p>
              Game Online
            </p>
            <div class="btn-w">
            </div>
          </div>
        </div>
        <!--------------------
        END - Main Menu
        -------------------->