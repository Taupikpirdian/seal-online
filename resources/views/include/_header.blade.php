<div class="row profile">
    <div class="col-lg-9">
        <!-- <div id="logomenu"> -->
            <div class="ml-5" id="marble">
                <div class="cc">
                    <ul id="menu">
                        @if($contact_info)
                        <li class="m_home">
                            <a style="background: url({{ asset('/images/contact_info/'.$contact_info->logo)}})" href="{{URL::to('/home')}}"><span>Home</span></a>
                        </li>
                        @endif
                        <li id="mmenu2" class="mmenu2_off">
                            <a href="#" onmouseover="show('m_2');" onmouseout="hide('m_2');"><span>Dunia Seal</span></a>
                            <div id="m_2" style="visibility: hidden;" onmouseover="show('m_2');mcchanger('mmenu',2,9);" onmouseout="hide('m_2');changec('mmenu2','mmenu2_off');">
                                <div class="m_bub">
                                    <div class="m_bub_top"></div>
                                    <div class="m_bub_content">
                                        <ul>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/pengenalan')}}">Pengenalan</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/feature')}}">Fitur Game</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/berita')}}">Berita SEAL</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/acara')}}">Acara Seal</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/info')}}">Info Teknis</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/game-update')}}">Game Update</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="m_bub_bottom"></div>
                                </div>
                            </div>
                        </li>
                        <li id="mmenu3" class="mmenu3_off">
                            <a href="#" onmouseover="show('m_3');" onmouseout="hide('m_3');"><span>Panduan</span></a>
                            <div id="m_3" style="visibility: hidden;" onmouseover="show('m_3');mcchanger('mmenu',3,9);" onmouseout="hide('m_3');changec('mmenu3','mmenu3_off');">
                                <div class="m_bub">
                                    <div class="m_bub_top"></div>
                                    <div class="m_bub_content">
                                        <ul>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/instalation')}}">Instalasi</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/mulai-Bermain')}}">Mulai Bermain</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/profesi')}}">Profesi</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/emotikon')}}">Emotikon</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/bale-monster')}}">Bale (Monster)</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/peta')}}">Peta</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/pet')}}">Pet</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/barang')}}">Barang</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/npc')}}">NPC</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/guildWars')}}">GuildWars</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/pacaran')}}">Pacaran</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/refine')}}">Refine</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/hindari-penipuan')}}">Hindari Penipuan</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/game-master')}}">Game Master</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="m_bub_bottom"></div>
                                </div>
                            </div>
                        </li>
                        <li id="mmenu4" class="mmenu4_off">
                            <a href="#" onmouseover="show('m_4');" onmouseout="hide('m_4');"><span>Member</span></a>
                            <div id="m_4" style="visibility: hidden;" onmouseover="show('m_4');mcchanger('mmenu',4,9);" onmouseout="hide('m_4');changec('mmenu4','mmenu4_off');">
                                <div class="m_bub">
                                    <div class="m_bub_top"></div>
                                    <div class="m_bub_content">
                                        <ul>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/persetujuan-member')}}">Persetujuan</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/register')}}">Daftar Baru</a></p>
                                            </li>
                                            <!-- <li class="child">
                                                <p class="arrow"><a href="https://web.archive.org/web/20070202180357/http://www.sealindo.com/member/aktivasi.asp">Aktivasi</a></p>
                                            </li> -->
                                            <!-- <li class="child">
                                                <p class="arrow"><a href="https://web.archive.org/web/20070202023503/http://www.sealindo.com/member/login.asp#member">Login</a></p>
                                            </li> -->
                                            <!-- <li class="child">
                                                <p class="arrow"><a href="https://web.archive.org/web/20070202174021/http://www.sealindo.com/member/ubahpass.asp">Ubah Password</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="https://web.archive.org/web/20070202180412/http://www.sealindo.com/member/lupapass.asp">Lupa Password</a></p>
                                            </li> -->
                                        </ul>
                                    </div>
                                    <div class="m_bub_bottom"></div>
                                </div>
                            </div>
                        </li>
                        <li id="mmenu5" class="mmenu5_off">
                            <a href="#" onmouseover="show('m_5');" onmouseout="hide('m_5');"><span>Komunitas</span></a>
                            <div id="m_5" style="visibility: hidden;" onmouseover="show('m_5');mcchanger('mmenu',5,9);" onmouseout="hide('m_5');changec('mmenu5','mmenu5_off');">
                                <div class="m_bub">
                                    <div class="m_bub_top"></div>
                                    <div class="m_bub_content">
                                        <ul>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/aturan-bermain')}}">Aturan Main</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/fansite')}}">Fansite</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/komik')}}">Komik</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/screenshot')}}">Screenshot</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/event')}}">Event SEAL</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/guild-rank')}}">Guildwar Ranks</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="m_bub_bottom"></div>
                                </div>
                            </div>
                        </li>

                        <!-- <li id="mmenu9" class="mmenu9_off">
                            <a href="itemmall/index.html" onmouseover="show('m_9');" onmouseout="hide('m_9');"><span>Item Mall</span></a>
                            <div id="m_9" style="visibility: hidden;" onmouseover="show('m_9');mcchanger('mmenu',9,9);" onmouseout="hide('m_9');changec('mmenu9','mmenu9_off');">
                                <div class="m_bub">
                                    <div class="m_bub_top"></div>
                                    <div class="m_bub_content">
                                        <ul>
                                            <li class="child">
                                                <p class="arrow"><a href="itemmall/index.html">Daftar Item Mall</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="https://web.archive.org/web/20070202180426/http://www.sealindo.com/itemmall/panduan.asp">PanduanItemMall</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="https://web.archive.org/web/20070202180144/http://www.sealindo.com/itemmall/kostum.asp">Panduan Kostum</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="m_bub_bottom"></div>
                                </div>
                            </div>
                        </li> -->
                        
                        <li id="mmenu6" class="mmenu6_off">
                            <a href="#" onmouseover="show('m_6');" onmouseout="hide('m_6');"><span>Download</span></a>
                            <div id="m_6" style="visibility: hidden;" onmouseover="show('m_6');mcchanger('mmenu',6,9);" onmouseout="hide('m_6');changec('mmenu6','mmenu6_off');">
                                <div class="m_bub">
                                    <div class="m_bub_top"></div>
                                    <div class="m_bub_content">
                                        <ul>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/download-game')}}">Game</a></p>
                                            </li>
                                            <!-- <li class="child">
                                                <p class="arrow"><a href="https://web.archive.org/web/20070202180128/http://www.sealindo.com/download/update.asp">Update</a></p>
                                            </li> -->
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/download-gallery')}}">Wallpaper/Gallery</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/download-video')}}">Video</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/download-emotikon')}}">Emotikon</a></p>
                                            </li>
                                            <!-- <li class="child">
                                                <p class="arrow"><a href="https://web.archive.org/web/20070202175813/http://www.sealindo.com/download/flash.asp">Mini Flash Game</a></p>
                                            </li> -->
                                        </ul>
                                    </div>
                                    <div class="m_bub_bottom"></div>
                                </div>
                            </div>
                        </li>
                        <li id="mmenu7" class="mmenu7_off">
                            <a href="#" onmouseover="show('m_7');" onmouseout="hide('m_7');"><span>Layanan</span></a>
                            <div id="m_7" style="visibility: hidden;" onmouseover="show('m_7');mcchanger('mmenu',7,9);" onmouseout="hide('m_7');changec('mmenu7','mmenu7_off');">
                                <div class="m_bub">
                                    <div class="m_bub_top"></div>
                                    <div class="m_bub_content">
                                        <ul>
                                            <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/layanan-kontak')}}">Kontak Kami</a></p>
                                            </li>
                                            <!-- <li class="child">
                                                <p class="arrow"><a href="https://web.archive.org/web/20070202044033/http://www.sealindo.com/layanan/lowongan.asp">Lowongan Kerja</a></p>
                                            </li> -->
                                            <!-- <li class="child">
                                                <p class="arrow"><a href="{{URL::to('/home')}}">Pengaduan Hack</a></p>
                                            </li> -->
                                        </ul>
                                    </div>
                                    <div class="m_bub_bottom"></div>
                                </div>
                            </div>
                        </li>
                        <li id="mmenu8" class="mmenu8_off">
                            <a href="#" onmouseover="show('m_8');" onmouseout="hide('m_8');"><span>Layanan</span></a>
                            <div id="m_8" style="visibility: hidden;" onmouseover="show('m_8');mcchanger('mmenu',8,9);" onmouseout="hide('m_8');changec('mmenu8','mmenu8_off');">
                                <div class="m_bub">
                                    <div class="m_bub_top"></div>
                                    <div class="m_bub_content">
                                        <ul>
                                            <!-- <li class="child">
                                                <p class="arrow"><a href="pembayaran/index.html">Beli Koin</a></p>
                                            </li> -->
                                            <li class="child">
                                                <p class="arrow" style="width: 220px;">
                                                    <a href="{{URL::to('/panduan-beli-koin')}}" style="width: 220px;">Panduan Beli Koin&nbsp;&nbsp;</a>
                                                </p>
                                            </li>
                                            <!-- <li class="child">
                                                <p class="arrow"><a href="https://web.archive.org/web/20070202024749/http://www.sealindo.com/pembayaran/kartu.asp">Kartu Lyto</a></p>
                                            </li>
                                            <li class="child">
                                                <p class="arrow"><a href="https://web.archive.org/web/20070202032602/http://www.sealindo.com/berita/lokasi_seal/">Agen Resmi</a></p>
                                            </li> -->
                                        </ul>
                                    </div>
                                    <div class="m_bub_bottom"></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <div id="menu_separator"><div class="menu_separator"></div></div>
                </div>
                <!-- <div class="rr"></div> -->
            </div>
        <!-- </div> -->
    </div>
    @if(Auth::guard(getGuard())->user())
    <!-- auth  -->
    <div class="col-lg">
        <div id="admin">
            <div class="bgadmins">
                <div class="wrap1">
                    <h1>Welcome, @if($user){{ $user->id }}@endif</h1>
                    <hr>
                    <div class="row">
                        <div class="col-lg"><h1><b>Status : </b></h1></div>
                        <div class="col-lg text-right ml-5" style="margin-top: 5%;"><h2 class="text-danger"><b>Active</b></h2></div>
                    </div>
                    <div class="row">
                        <div class="col-lg"><h1><b>Point: </b></h1></div>
                        <div class="col-lg text-right ml-5" style="margin-top: 4.5%;"><h2><b>{{$user->point}}</b></h2></div>
                    </div>
                    <hr>
                    <a href="{{URL::to('/profile')}}" class="btn btn-primary text-white">Manage Acount</a>
                    <a class="btn btn-danger text-white" style="margin-left: 21%;" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
                <div class="bg-white ml-1" style="width: 98%; margin-top: 3%; border-radius: 5px; float: left;">
                    <div id="download" class="pt-2 pb-2">
                        <a href="{{URL::to('/download-game')}}" title="Download"><span>Download</span></a>
                    </div>
                </div>
                <div class="wrap3 ml-1 bg-white" style="width: 98%; margin-top: 0%; border-radius: 5px; float: left;">
                    <a href="{{URL::to('/')}}" title="Panduan Instal" class="ml-3"><span>Panduan Instal</span></a>
                    <a href="{{URL::to('/')}}" title="Patch Download" class="ml-5"><span>Patch Download</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- end auth  -->
    @else
    <!-- login  -->
    <div class="col-lg">
        <div id="admin">
            <div class="bgadmin">
                <div class="wrap1">
                    <h3>Admin</h3>
                    <div id="daftarbaru">
                        <a href="{{URL::to('/register')}}" title="Daftar Baru"><span>Daftar Baru</span></a>
                    </div>
                    <div class="logindownload">
                        <div class="wrap1">
                            <div id="login">
                                <a href="#" data-toggle="modal" data-target="#exampleModal" title="Login"><span>Login</span></a>
                            </div>
                            <div class="wrap6">
                                <div id="ubahpassword">
                                    <a href="{{URL::to('/')}}" title="Ubah Password"><span>Ubah Password</span></a>
                                </div>
                                <div id="lupapassword">
                                    <a href="{{URL::to('/password/reset')}}" title="Lupa Password"><span>Lupa Password</span></a>
                                </div>
                            </div>
                            <div class="wrap2">
                                <div id="persetujuanpemain">
                                    <a href="{{URL::to('/')}}" title="Persetujuan Pemain"><span>Persetujuan Pemain</span></a>
                                </div>
                                <div id="aturanmain">
                                    <a href="{{URL::to('/')}}" title="Aturan Main"><span>Aturan Main</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white ml-1" style="width: 97%; margin-top: 7%; border-radius: 5px; float: left;">
                    <div id="download" class="pt-2 pb-2">
                        <a href="{{URL::to('/download-game')}}" title="Download"><span>Download</span></a>
                    </div>
                </div>
                <div class="wrap3 ml-1 bg-white" style="width: 97%; margin-top: 0%; border-radius: 5px; float: left;">
                    <a href="{{URL::to('/')}}" title="Panduan Instal" class="ml-3"><span>Panduan Instal</span></a>
                    <a href="{{URL::to('/')}}" title="Patch Download" class="ml-5"><span>Patch Download</span></a>
                </div>
            </div>
        </div>
        
        
    </div>
    <!-- login -->
    @endif
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="width: 70%; margin: auto; margin-top: 50% !important;">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-lg">
                <form method="POST" action="{{ route('post-user-login') }}">
                @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="text" class="form-control" name="user_name" value="{{ old('user_name') }}" placeholder="Enter your username" aria-label="Username" aria-describedby="basic-addon1" autocomplete="user_name" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" id="password" class="form-control" name="password" placeholder="Enter your password" autocomplete="current-password" required>
                    </div>
                    <button style="width: 100%; border-radius: 10px;" type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        @error('user_name')
            <div class="row">
                <div class="col-lg">
                    <p class="text-danger"><strong>{{ $message }}</strong></p>
                </div>
            </div>
        @enderror

        @error('password')
            <div class="row">
                <div class="col-lg">
                    <p class="text-danger"><strong>{{ $message }}</strong></p>
                </div>
            </div>
        @enderror

        @if (session('user_name'))
            <div class="row">
                <div class="col-lg">
                    <p class="text-danger"><p>{{ session('user_name') }}</p></p>
                </div>
            </div>
        @enderror
      </div>
    </div>
  </div>
</div>