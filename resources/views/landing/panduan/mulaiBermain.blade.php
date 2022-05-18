@extends('layouts.landing')
@section('content')
@include('include.components._header-navigation')
<div class="row mt-5 mb-5">
    
    <!-- left sidebar  -->
    @include('include.components._panduan-navigation')
    <!-- left end sidebar -->

    <!-- content  -->
    <div class="col-lg-9">
        <h1 class="header"><span></span> Mulai Bermain</h1>
        <hr class="border-header">
        <div class="row">
            <div class="col-lg gameUpdate__content">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#tab1" role="tab" data-toggle="tab">Intro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab2" role="tab" data-toggle="tab">Client Seal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab3" role="tab" data-toggle="tab">Karakter</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab4" role="tab" data-toggle="tab">Dalam Game</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab5" role="tab" data-toggle="tab">Kontrol</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab6" role="tab" data-toggle="tab">Berteman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab7" role="tab" data-toggle="tab">Lain-Lain</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="row">
                    <div class="col-lg tab-content">
                        <div class="row mt-3 feature tab-pane active" id="tab1">
                            <div class="col-lg update__seal">
                                <!-- content looping -->
                                <!-- <div class="row mt-3 mb-5">
                                    <div class="col-lg-3 mb-3">
                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                    </div>
                                    <div class="col-lg ml-3 mt-4">
                                        <p>Selamat Datang ke dunia SEAL ONLINE ^^</p>
                                        <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus pariatur non amet, dicta veritatis earum nostrum error repellat cupiditate quasi perferendis omnis recusandae sint inventore ad unde delectus qui laborum?</a>
                                        </p>
                                    </div>
                                </div> -->
                                <!-- end content looping -->
                                <!-- <h1 class="mt-3"><span></span> Intro Mulai Bermain</h1>
                                <hr> -->

                                <!-- content looping -->
                                <!-- <div class="row mt-3">
                                    <div class="col-lg-3 mb-3">
                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                    </div>
                                    <div class="col-lg ml-3 mt-4">
                                        <p>Selamat Datang ke dunia SEAL ONLINE ^^</p>
                                        <p class="mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus pariatur non amet, dicta veritatis earum nostrum error repellat cupiditate quasi perferendis omnis recusandae sint inventore ad unde delectus qui laborum?</a>
                                        </p>
                                    </div>
                                </div> -->==
                                <!-- end content looping -->
                                <p class="deskripsi__img">@if($intro){!! $intro->desc !!}@endif</p>

                            </div>
                        </div>
                        <div class="row mt-2 feature tab-pane" id="tab2">
                            <div class="col-lg">
                                <div class="row tabs-content_game">
                                    <div class="col-lg content__tabs">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="active" href="#tabs1" role="tab" data-toggle="tab">Notice Patch</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="" href="#tabs2" role="tab" data-toggle="tab">Ubah Pengaturan</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="" href="#tabs3" role="tab" data-toggle="tab">Login</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row ml-2">
                                    <div class="col-lg tab-content">
                                        <div class="row mt-3 tab-pane active" id="tabs1">
                                            <div class="col-lg update__seal">
                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2">Setelah Maintenance, client SEAL Online kamu akan otomatis diupdate.Tunggu sebentar hingga update client selesai, dan kamu akan dapat memainkannya
                                                        </p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->
                                                <!-- <h1 class="mt-3"><span></span> Interface Notice Patch</h1>
                                                <hr>

                                                <img class="image_notice" src="{{ asset('/front/imagegame.png') }}" alt="">
                                                <p class="mt-5">
                                                    No. 1 Informasi SEAL Online
                                                    Pada bagian ini, kamu akan dapat melihat berita, event, info, dan game update pada SEAL online Indonesia. Untuk mendapatkan detil informasinya, klik pada salah satu tulisan tersebut.
                                                    <br>
                                                    No. 2 Banner SEAL Online
                                                    Banner ini biasanya berisi berita, event, info, atau game update yang paling dinantikan oleh SEALovers. Jika kamu mengeklik banner ini, halaman website yang berhubungan dengan banner ini akan langsung terbuka.
                                                    <br>
                                                    No. 3 Tim SEAL Online
                                                    Pada bagian ini, kamu dapat membuka website SEAL Online Indonesia atau halaman website mengenai cara menghubungi tim SEAL Online Indonesia.
                                                    <br>
                                                    No. 4 Update Progress Bar
                                                    Client SEAL Online kamu akan otomatis melakukan update apabila update telah tersedia. Apabila tulisan "Update Selesai" muncul, berarti client SEAL Online kamu sudah diupdate.
                                                    <br>
                                                    No. 5 Tombol Website
                                                    Jika kamu mengeklik tombol ini, website SEAL Online Indonesia akan otomatis terbuka.
                                                    <br>
                                                    No. 6 Tombol Ubah Pengaturan
                                                    Apabila kamu ingin merubah setting grafik SEAL Online Indonesia, klik tombol ini. Menu ubah pengaturan akan muncul.
                                                    <br>
                                                    No. 7 Tombol Mulai Main
                                                    Kamu sudah tidak sabar ingin memainkan SEAL Online Indonesia? Klik tombol ini ^^
                                                    <br>
                                                    No. 8 Tombol Keluar
                                                    Klik tombol ini untuk keluar dan sekaligus menutup SEAL Online Indonesia
                                                </p> -->

                                                <p class="deskripsi__img">@if($notice){!! $notice->desc !!}@endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs2">
                                            <div class="col-lg update__seal">
                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2">Setelah Maintenance, client SEAL Online kamu akan otomatis diupdate.Tunggu sebentar hingga update client selesai, dan kamu akan dapat memainkannya
                                                        </p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->
                                                <!-- <h1 class="mt-3"><span></span> Interface Notice Patch</h1>
                                                <hr>

                                                <img class="image_notice" src="{{ asset('/front/imagegame.png') }}" alt="">
                                                <p class="mt-5">
                                                    No. 1 Informasi SEAL Online
                                                    Pada bagian ini, kamu akan dapat melihat berita, event, info, dan game update pada SEAL online Indonesia. Untuk mendapatkan detil informasinya, klik pada salah satu tulisan tersebut.
                                                    <br>
                                                    No. 2 Banner SEAL Online
                                                    Banner ini biasanya berisi berita, event, info, atau game update yang paling dinantikan oleh SEALovers. Jika kamu mengeklik banner ini, halaman website yang berhubungan dengan banner ini akan langsung terbuka.
                                                    <br>
                                                    No. 3 Tim SEAL Online
                                                    Pada bagian ini, kamu dapat membuka website SEAL Online Indonesia atau halaman website mengenai cara menghubungi tim SEAL Online Indonesia.
                                                    <br>
                                                    No. 4 Update Progress Bar
                                                    Client SEAL Online kamu akan otomatis melakukan update apabila update telah tersedia. Apabila tulisan "Update Selesai" muncul, berarti client SEAL Online kamu sudah diupdate.
                                                    <br>
                                                    No. 5 Tombol Website
                                                    Jika kamu mengeklik tombol ini, website SEAL Online Indonesia akan otomatis terbuka.
                                                    <br>
                                                    No. 6 Tombol Ubah Pengaturan
                                                    Apabila kamu ingin merubah setting grafik SEAL Online Indonesia, klik tombol ini. Menu ubah pengaturan akan muncul.
                                                    <br>
                                                    No. 7 Tombol Mulai Main
                                                    Kamu sudah tidak sabar ingin memainkan SEAL Online Indonesia? Klik tombol ini ^^
                                                    <br>
                                                    No. 8 Tombol Keluar
                                                    Klik tombol ini untuk keluar dan sekaligus menutup SEAL Online Indonesia
                                                </p> -->

                                                <p class="deskripsi__img">@if($ubah_pw){!! $ubah_pw->desc !!}@endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs3">
                                            <div class="col-lg">
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2">Setelah Maintenance, client SEAL Online kamu akan otomatis diupdate.Tunggu sebentar hingga update client selesai, dan kamu akan dapat memainkannya
                                                        </p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->
                                                <!-- <h1 class="mt-3"><span></span> Login</h1>
                                                <hr>

                                                <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2">Setelah Maintenance, client SEAL Online kamu akan otomatis diupdate.Tunggu sebentar hingga update client selesai, dan kamu akan dapat memainkannya
                                                        </p>
                                                    </div>
                                                </div> -->

                                                <p class="deskripsi__img">@if($login){!! $login->desc !!}@endif</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 feature tab-pane" id="tab3">
                            <div class="col-lg">
                                <div class="row tabs-content_game">
                                    <div class="col-lg content__tabs">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="active" href="#tabs4" role="tab" data-toggle="tab">Membuat Karakter Baru</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="" href="#tabs5" role="tab" data-toggle="tab">Profesi</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="" href="#tabs6" role="tab" data-toggle="tab">NPC</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row ml-2">
                                    <div class="col-lg tab-content">
                                        <div class="row mt-3 tab-pane active" id="tabs4">
                                            <div class="col-lg update__seal">
                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2">Setelah Maintenance, client SEAL Online kamu akan otomatis diupdate.Tunggu sebentar hingga update client selesai, dan kamu akan dapat memainkannya
                                                        </p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->
                                                <!-- <h1 class="mt-3"><span></span> Membuat Karakter Baru</h1>
                                                <hr>

                                                <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2">Setelah Maintenance, client SEAL Online kamu akan otomatis diupdate.Tunggu sebentar hingga update client selesai, dan kamu akan dapat memainkannya
                                                        </p>
                                                    </div>
                                                </div> -->

                                                <p class="deskripsi__img">@if($new_karakter){!! $new_karakter->desc !!}@endif</p>

                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs5">
                                            <div class="col-lg update__seal">
                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2">Setelah Maintenance, client SEAL Online kamu akan otomatis diupdate.Tunggu sebentar hingga update client selesai, dan kamu akan dapat memainkannya
                                                        </p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->
                                                <!-- <h1 class="mt-3"><span></span> Profesi di SEAL Online</h1>
                                                <hr>

                                                <div class="row mt-4 mb-5">
                                                    <div class="col-lg-4 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-3">
                                                        <h2 class="mt-1 mb-3"><i class="fas fa-chevron-right"></i> Beginner</h2>
                                                        <p class="mt-2">Profesi paling dasar SEAL Online. Kamu dapat berubah profesi setelah level ke-10.
                                                        <br> <a href="">Untuk keterangan lebih lanjut, klik di sini</a></p>
                                                    </div>
                                                </div>
                                                
                                                <h1 class="mt-3"><span></span> Berubah Profesi</h1>
                                                <hr>
                                                <p>Setelah mencapai level ke-10 dan kamu tidak ingin menjadi Beginner lagi, kamu dapat merubah profesimu. Dengan berubahnya profesi, makin banyak barang, skill, dan misi yang akan kamu dapatkan</p>

                                                <div class="row mt-4 mb-5">
                                                    <div class="col-lg-4 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-3">
                                                        <h2 class="mt-1 mb-3"><i class="fas fa-chevron-right"></i> Beginner</h2>
                                                        <p class="mt-2">Profesi paling dasar SEAL Online. Kamu dapat berubah profesi setelah level ke-10.
                                                        <br> <a href="">Untuk keterangan lebih lanjut, klik di sini</a></p>
                                                    </div>
                                                </div> -->

                                                <p class="deskripsi__img">@if($profesi){!! $profesi->desc !!}@endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs6">
                                            <div class="col-lg update__seal">
                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2">Setelah Maintenance, client SEAL Online kamu akan otomatis diupdate.Tunggu sebentar hingga update client selesai, dan kamu akan dapat memainkannya
                                                        </p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->
                                                <!-- <h1 class="mt-3"><span></span> NPC</h1>
                                                <hr>

                                                <div class="row mt-4 mb-5">
                                                    <div class="col-lg-4 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-1">
                                                        <p class="mt-2">Setelah Maintenance, client SEAL Online kamu akan otomatis diupdate.Tunggu sebentar hingga update client selesai, dan kamu akan dapat memainkannya
                                                        </p>
                                                    </div>
                                                </div>

                                                <h1 class="mt-3"><span></span> Bertransaksi dengan NPC</h1>
                                                <hr>

                                                <p>Sewaktu kamu berburu monster, kamu akan mendapatkan banyak barang. Barang-barang tersebut dapat dipakai, tapi bila terlalu banyak lebih baik dijual.

                                                Tariklah barang yang ingin kamu jual dari layar inventory-mu ke layar toko. Apabila barang yang dimiliki lebih dari satu, maka akan muncul layar yang menanyakan jumlah barang yang ingin dijual.

                                                Setelah kamu mengumpulkan banyak cegel, belilah perlengkapan yang sesuai. Sebelum membeli, cek level dan status barang tersebut. Kesalahan kecil dalam membeli akan menyebabkan barang tersebut tidak dapat dipakai.</p> -->

                                                <p class="deskripsi__img">@if($npc){!! $npc->desc !!}@endif</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 feature tab-pane" id="tab4">
                            <div class="col-lg">
                                <div class="row tabs-content_game">
                                    <div class="col-lg content__tabs">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="active" href="#tabs14" role="tab" data-toggle="tab">Status</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="" href="#tabs15" role="tab" data-toggle="tab">Skill</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="" href="#tabs16" role="tab" data-toggle="tab">Naik Level</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="" href="#tabs17" role="tab" data-toggle="tab">Barang</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="" href="#tabs18" role="tab" data-toggle="tab">Menu Utama</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="" href="#tabs19" role="tab" data-toggle="tab">Menu Singkat</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="" href="#tabs20" role="tab" data-toggle="tab">Layar Pesan</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="" href="#tabs21" role="tab" data-toggle="tab">Option</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="" href="#tabs22" role="tab" data-toggle="tab">Daftar Menu</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row ml-2">
                                    <div class="col-lg tab-content">
                                        <div class="row mt-3 tab-pane active" id="tabs14">
                                            <div class="col-lg update__seal">
                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2"><b>Di SEAL Online tersedia chatting pribadi, chatting umum, bahkan sampai topik-topik khusus seperti olaharaga, komik, dan anime. Daftar teman kamu akan semakin bertambah panjang.</b></p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->
                                                
                                                <!-- <h1 class="mt-3"><span></span> Poin-poin Status</h1>
                                                <hr>

                                                <div class="row mt-4 mb-3">
                                                    <div class="col-lg-3 mt-3 mb-3">
                                                        <img class="mr-3" style="border: none; box-shadow: none; border-radius: 0px; float: left;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg table">
                                                        <table>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>

                                                <h1 class="mt-3"><span></span> Poin-poin Status</h1>
                                                <hr>

                                                <div class="row mt-4 mb-3">
                                                    <div class="col-lg-3 mt-3 mb-3">
                                                        <img class="mr-3" style="border: none; box-shadow: none; border-radius: 0px; float: left;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg table">
                                                        <table>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>

                                                <h1 class="mt-3"><span></span> Status</h1>
                                                <hr>

                                                <div class="row mt-4 mb-3">
                                                    <div class="col-lg-3 mt-3 mb-3">
                                                        <img class="mr-3" style="border: none; box-shadow: none; border-radius: 0px; float: left;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg table">
                                                        <table>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                                
                                                <h1 class="mt-3"><span></span> Pengaruh Kenaikan Bonus Point</h1>
                                                <hr>

                                                <div class="row mt-4 mb-3">
                                                    <div class="col-lg-3 mt-3 mb-3">
                                                        <img class="mr-3" style="border: none; box-shadow: none; border-radius: 0px; float: left;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg table">
                                                        <table>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div> -->

                                                <p class="deskripsi__img">@if($status){!! $status->desc !!}@endif</p>

                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs15">
                                            <div class="col-lg">
                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2"><b>Di SEAL Online tersedia chatting pribadi, chatting umum, bahkan sampai topik-topik khusus seperti olaharaga, komik, dan anime. Daftar teman kamu akan semakin bertambah panjang.</b></p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->

                                                <!-- <h1 class="mt-3"><span></span> Skill</h1>
                                                <hr>

                                                <img class="mr-3" style="border: none; box-shadow: none; border-radius: 0px; float: left;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                <div class="row mt-4 mb-3">
                                                    <div class="col-lg table">
                                                        <table>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div> -->

                                                <p class="deskripsi__img">@if($skill){!! $skill->desc !!}@endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs16">
                                            <div class="col-lg">
                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2"><b>Di SEAL Online tersedia chatting pribadi, chatting umum, bahkan sampai topik-topik khusus seperti olaharaga, komik, dan anime. Daftar teman kamu akan semakin bertambah panjang.</b></p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->

                                                <!-- <h1 class="mt-3"><span></span> Naik Level</h1>
                                                <hr> -->

                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-4 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2">Di SEAL Online tersedia chatting pribadi, chatting umum, bahkan sampai topik-topik khusus seperti olaharaga, komik, dan anime. Daftar teman kamu akan semakin bertambah panjang.</p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->

                                                <!-- <h1 class="mt-3"><span></span> Naik Level Skill</h1>
                                                <hr> -->

                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-4 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2">Di SEAL Online tersedia chatting pribadi, chatting umum, bahkan sampai topik-topik khusus seperti olaharaga, komik, dan anime. Daftar teman kamu akan semakin bertambah panjang.</p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->

                                                <p class="deskripsi__img">@if($naik_lv){!! $naik_lv->desc !!}@endif</p>
                                                
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs17">
                                            <div class="col-lg">
                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2"><b>Di SEAL Online tersedia chatting pribadi, chatting umum, bahkan sampai topik-topik khusus seperti olaharaga, komik, dan anime. Daftar teman kamu akan semakin bertambah panjang.</b></p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->

                                                <!-- <h1 class="mt-3"><span></span> Barang</h1>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-lg">
                                                        <img class="mr-3" style="width:250px; border: none; box-shadow: none; border-radius: 0px; float: left;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                </div>
                                                <div class="row mt-3 mb-3">
                                                    <div class="col-lg table">
                                                        <table>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div> -->

                                                <p class="deskripsi__img">@if($barang){!! $barang->desc !!}@endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs18">
                                            <div class="col-lg">
                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2"><b>Di SEAL Online tersedia chatting pribadi, chatting umum, bahkan sampai topik-topik khusus seperti olaharaga, komik, dan anime. Daftar teman kamu akan semakin bertambah panjang.</b></p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->

                                                <!-- <h1 class="mt-3"><span></span> Naik Level</h1>
                                                <hr> -->

                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-4 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2">Di SEAL Online tersedia chatting pribadi, chatting umum, bahkan sampai topik-topik khusus seperti olaharaga, komik, dan anime. Daftar teman kamu akan semakin bertambah panjang.</p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->

                                                <!-- <h1 class="mt-3"><span></span> Naik Level Skill</h1>
                                                <hr> -->

                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-3">
                                                    <div class="col-lg mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->

                                                <!-- <h5>No. 1 Status</h5>
                                                <p class="mt-2 mb-4">Klik tombol ini untuk menampilkan informasi karakter. Shortcutnya "alt+s".</p> -->

                                                <p class="deskripsi__img">@if($menu_utama){!! $menu_utama->desc !!}@endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs19">
                                            <div class="col-lg">
                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2"><b>Di SEAL Online tersedia chatting pribadi, chatting umum, bahkan sampai topik-topik khusus seperti olaharaga, komik, dan anime. Daftar teman kamu akan semakin bertambah panjang.</b></p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->
                                                
                                                <!-- <h1 class="mt-3"><span></span> Menu Singkat</h1>
                                                <hr>

                                                <div class="row mt-4 mb-5">
                                                    <div class="col-lg mb-3">
                                                        <img class="mr-2" style="width: 250px; float: left; border: none; box-shadow: none; border-radius: 0px;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                        <p class="mt-2">Di SEAL Online tersedia chatting pribadi, chatting umum, bahkan sampai topik-topik khusus seperti olaharaga, komik, dan anime. Daftar teman kamu akan semakin bertambah panjang.</p>
                                                    </div>
                                                </div> -->

                                                <p class="deskripsi__img">@if($menu_singkat){!! $menu_singkat->desc !!}@endif</p>

                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs20">
                                            <div class="col-lg">
                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2"><b>Di SEAL Online tersedia chatting pribadi, chatting umum, bahkan sampai topik-topik khusus seperti olaharaga, komik, dan anime. Daftar teman kamu akan semakin bertambah panjang.</b></p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->
                                                
                                                <!-- <h1 class="mt-3"><span></span> Layar Pesan</h1>
                                                <hr>

                                                <div class="row mt-4 mb-3">
                                                    <div class="col-lg mb-3">
                                                        <img class="mr-2" style="border: none; box-shadow: none; border-radius: 0px;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                </div>
                                                
                                                <p class="mt-2"><b>Normal</b> untuk normal chatting pada game.</p>
                                                <p class="mt-2"><b>Normal</b> berguna untuk bisik ke pemain lain. Otomatis akan mengetik perintah bisik "!ID" Chat sebagai layar pesan dalam ruang chatting. Hanya dapat digunakan setelah masuk ke dalam ruang chat. Otomatis akan mengetik perintah ruang chat "$".</p>
                                                <p class="mt-2"><b>Normal</b> pesan antar anggota grup akan diperlihatkan. Hanya dapat digunakan apabila kamu di dalam grup. Otomatis akan mengetik perintah grup "#"</p>
                                             -->
                                                <p class="deskripsi__img">@if($layar_pesan){!! $layar_pesan->desc !!}@endif</p>

                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs21">
                                            <div class="col-lg">
                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2"><b>Di SEAL Online tersedia chatting pribadi, chatting umum, bahkan sampai topik-topik khusus seperti olaharaga, komik, dan anime. Daftar teman kamu akan semakin bertambah panjang.</b></p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->
<!--                                                 
                                                <h1 class="mt-3"><span></span> Option</h1>
                                                <hr>

                                                <div class="row mt-4">
                                                    <div class="col-lg">
                                                        <img class="mr-2" style="border: none; box-shadow: none; border-radius: 0px;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                </div>

                                                <div class="row mt-2 mb-3">
                                                    <div class="col-lg table">
                                                        <table>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div> -->

                                                <p class="deskripsi__img">@if($option){!! $option->desc !!}@endif</p>

                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs22">
                                            <div class="col-lg">
                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2"><b>Di SEAL Online tersedia chatting pribadi, chatting umum, bahkan sampai topik-topik khusus seperti olaharaga, komik, dan anime. Daftar teman kamu akan semakin bertambah panjang.</b></p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->
<!--                                                 
                                                <h1 class="mt-3"><span></span> Option</h1>
                                                <hr>

                                                <div class="row mt-4">
                                                    <div class="col-lg-4">
                                                        <img class="mr-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg">
                                                        <p><b>Kamu bisa meletakkan kalimat-kalimat singkat di dalam macro. Untuk memanggil macro, kamu bisa menggunakan "ctrl+1" hingga "Ctrl+0".</b></p>
                                                    </div>
                                                </div> -->

                                                <p class="deskripsi__img">@if($daftar_menu){!! $daftar_menu->desc !!}@endif</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 feature tab-pane" id="tab5">
                            <div class="col-lg">
                                <div class="row tabs-content_game">
                                    <div class="col-lg content__tabs">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="active" href="#tabs26" role="tab" data-toggle="tab">Mouse dan Keyboard</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="" href="#tabs27" role="tab" data-toggle="tab">Berpindah dan Wrap</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="" href="#tabs28" role="tab" data-toggle="tab">Menyerang dan Kombo</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="" href="#tabs29" role="tab" data-toggle="tab">Tombol Singkat</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row ml-2">
                                    <div class="col-lg tab-content">
                                        <div class="row mt-3 tab-pane active" id="tabs26">
                                            <div class="col-lg update__seal">

                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2"><b>Di SEAL Online tersedia chatting pribadi, chatting umum, bahkan sampai topik-topik khusus seperti olaharaga, komik, dan anime. Daftar teman kamu akan semakin bertambah panjang.</b></p>
                                                    </div>
                                                </div>
                                                
                                                <h1 class="mt-3"><span></span> Kontrol Perpindahan Karakter</h1>
                                                <hr>

                                                <div class="row mt-4 mb-3">
                                                    <div class="col-lg table">
                                                        <table>
                                                            <tr>
                                                                <td><img style="width: 100px; height: 50px; border: none; box-shadow: none; border-radius: 0px;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td><img style="width: 100px; height: 50px; border: none; box-shadow: none; border-radius: 0px;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td><img style="width: 100px; height: 50px; border: none; box-shadow: none; border-radius: 0px;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td><img style="width: 100px; height: 50px; border: none; box-shadow: none; border-radius: 0px;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>

                                                <h1 class="mt-3"><span></span> Kontrol Karakter Saat Menyerang</h1>
                                                <hr>

                                                <div class="row mt-4 mb-3">
                                                    <div class="col-lg table">
                                                        <table>
                                                            <tr>
                                                                <td><img style="width: 100px; height: 50px; border: none; box-shadow: none; border-radius: 0px;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td><img style="width: 100px; height: 50px; border: none; box-shadow: none; border-radius: 0px;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td><img style="width: 100px; height: 50px; border: none; box-shadow: none; border-radius: 0px;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td><img style="width: 100px; height: 50px; border: none; box-shadow: none; border-radius: 0px;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div> -->

                                                <p class="deskripsi__img">@if($io){!! $io->desc !!}@endif</p>

                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs27">
                                            <div class="col-lg">

                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2"><b>Di SEAL Online tersedia chatting pribadi, chatting umum, bahkan sampai topik-topik khusus seperti olaharaga, komik, dan anime. Daftar teman kamu akan semakin bertambah panjang.</b></p>
                                                    </div>
                                                </div>
                                                
                                                <h1 class="mt-3"><span></span> Berpindah dan Warp</h1>
                                                <hr> -->

                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-4 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2"><b>Klik kiri di tempat yang ingin kau tuju. Kamu tidak akan bergerak apabila lokasi yang kamu klik terlalu jauh. Kursor akan beubah menjadi "x" apabila kamu mengarahkan kursor ke daerah yang tidak dapat kamu lalui. Gunakan "ctrl+klik kiri" untuk terus bergerak ke arah yang kamu tuju.</b></p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->

                                                <p class="deskripsi__img">@if($wrap){!! $wrap->desc !!}@endif</p>

                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs28">
                                            <div class="col-lg">

                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2"><b>Di SEAL Online tersedia chatting pribadi, chatting umum, bahkan sampai topik-topik khusus seperti olaharaga, komik, dan anime. Daftar teman kamu akan semakin bertambah panjang.</b></p>
                                                    </div>
                                                </div>
                                                
                                                <h1 class="mt-3"><span></span> Menyerang dan Kombo</h1>
                                                <hr> -->

                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-4 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2"><b>Klik kiri di tempat yang ingin kau tuju. Kamu tidak akan bergerak apabila lokasi yang kamu klik terlalu jauh. Kursor akan beubah menjadi "x" apabila kamu mengarahkan kursor ke daerah yang tidak dapat kamu lalui. Gunakan "ctrl+klik kiri" untuk terus bergerak ke arah yang kamu tuju.</b></p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->

                                                <!-- <h1 class="mt-3"><span></span> Kombo</h1>
                                                <hr> -->

                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-4 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2"><b>Klik kiri di tempat yang ingin kau tuju. Kamu tidak akan bergerak apabila lokasi yang kamu klik terlalu jauh. Kursor akan beubah menjadi "x" apabila kamu mengarahkan kursor ke daerah yang tidak dapat kamu lalui. Gunakan "ctrl+klik kiri" untuk terus bergerak ke arah yang kamu tuju.</b></p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->

                                                <p class="deskripsi__img">@if($kombo){!! $kombo->desc !!}@endif</p>

                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs29">
                                            <div class="col-lg">
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2"><b>Di SEAL Online tersedia chatting pribadi, chatting umum, bahkan sampai topik-topik khusus seperti olaharaga, komik, dan anime. Daftar teman kamu akan semakin bertambah panjang.</b></p>
                                                    </div>
                                                </div>
                                                
                                                <h1 class="mt-3"><span></span> Tombol Singkat</h1>
                                                <hr>

                                                <div class="row mt-4 mb-3">
                                                    <div class="col-lg table">
                                                        <table>
                                                            <tr>
                                                                <td><img style="width: 100px; height: 50px; border: none; box-shadow: none; border-radius: 0px;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td><img style="width: 100px; height: 50px; border: none; box-shadow: none; border-radius: 0px;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td><img style="width: 100px; height: 50px; border: none; box-shadow: none; border-radius: 0px;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td><img style="width: 100px; height: 50px; border: none; box-shadow: none; border-radius: 0px;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div> -->

                                                <p class="deskripsi__img">@if($t_singkat){!! $t_singkat->desc !!}@endif</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 feature tab-pane" id="tab6">
                            <div class="col-lg">
                                <div class="row tabs-content_game">
                                    <div class="col-lg content__tabs">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="active" href="#tabs7" role="tab" data-toggle="tab">Messenger - Teman</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="" href="#tabs8" role="tab" data-toggle="tab">Messenger - Grup</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="" href="#tabs9" role="tab" data-toggle="tab">Komunitas</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row ml-2">
                                    <div class="col-lg tab-content">
                                        <div class="row mt-3 tab-pane active" id="tabs7">
                                            <div class="col-lg update__seal">
                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2"><b>Setelah Maintenance, client SEAL Online kamu akan otomatis diupdate.Tunggu sebentar hingga update client selesai, dan kamu akan dapat memainkannya</b>
                                                        </p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->

                                                <!-- <h1 class="mt-3"><span></span> Messenger - Teman</h1>
                                                <hr>

                                                <div class="row mt-4 mb-3">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2">Setelah Maintenance, client SEAL Online kamu akan otomatis diupdate.Tunggu sebentar hingga update client selesai, dan kamu akan dapat memainkannya
                                                        </p>
                                                    </div>
                                                </div>

                                                <p><i class="fas fa-chevron-right"></i> Dimana menunjukkan lokasi pemain tersebut. Beri tanda check untuk melihatnya.</p>
                                                <p><i class="fas fa-chevron-right"></i> Dimana menunjukkan lokasi pemain tersebut. Beri tanda check untuk melihatnya.</p>
                                                <p><i class="fas fa-chevron-right"></i> Dimana menunjukkan lokasi pemain tersebut. Beri tanda check untuk melihatnya.</p>
                                                
                                                <p class="mt-5">Pemain dapat mengubah statusnya di messenger. Ada 3 pilihan tersedia.</p>
                                                <div>
                                                    <img style="width: 200px; border: none; box-shadow: none; border-radius: 0px;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                </div>
                                                <div>
                                                    <img style="width: 200px; border: none; box-shadow: none; border-radius: 0px;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                </div>
                                                <div>
                                                    <img style="width: 200px; border: none; box-shadow: none; border-radius: 0px;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                </div>

                                                <p class="mt-4">Mendaftarkan teman dapat dilakukan dengan klik-kanan pada pemain dan klik "Daftar ?? Sebagai Teman". Apabila pemain tersebut mengeklik "OK" maka kalian akan terdaftar sebagai teman satu sama lain.</p>

                                                <p><i class="fas fa-chevron-right"></i> Dimana menunjukkan lokasi pemain tersebut. Beri tanda check untuk melihatnya.</p>
                                                <p><i class="fas fa-chevron-right"></i> Dimana menunjukkan lokasi pemain tersebut. Beri tanda check untuk melihatnya.</p>
                                                <p><i class="fas fa-chevron-right"></i> Dimana menunjukkan lokasi pemain tersebut. Beri tanda check untuk melihatnya.</p> -->

                                                <p class="deskripsi__img">@if($m_team){!! $m_team->desc !!}@endif</p>

                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs8">
                                            <div class="col-lg update__seal">
                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2"><b>Di SEAL Online tersedia chatting pribadi, chatting umum, bahkan sampai topik-topik khusus seperti olaharaga, komik, dan anime. Daftar teman kamu akan semakin bertambah panjang.</b></p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->
                                                
                                                <!-- <h1 class="mt-3"><span></span> Messenger - Grup</h1>
                                                <hr>

                                                <div class="row mt-4 mb-3">
                                                    <div class="col-lg mb-3">
                                                        <img class="mr-3" style="width: 250px; border: none; box-shadow: none; border-radius: 0px; float: left;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                        <p class="mt-2">Setelah Maintenance, client SEAL Online kamu akan otomatis diupdate.Tunggu sebentar hingga update client selesai, dan kamu akan dapat memainkannya </p>
                                                    </div>
                                                </div> -->

                                                <p class="deskripsi__img">@if($m_grup){!! $m_grup->desc !!}@endif</p>

                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs9">
                                            <div class="col-lg update__seal">
                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2"><b>Di SEAL Online tersedia chatting pribadi, chatting umum, bahkan sampai topik-topik khusus seperti olaharaga, komik, dan anime. Daftar teman kamu akan semakin bertambah panjang.</b></p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->
                                                
                                                <!-- <h1 class="mt-3"><span></span> Komunitas</h1>
                                                <hr>

                                                <div class="row mt-4 mb-3">
                                                    <div class="col-lg mb-3">
                                                        <img class="mr-3" style="width: 250px; border: none; box-shadow: none; border-radius: 0px; float: left;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                        <p class="mt-2">Setelah Maintenance, client SEAL Online kamu akan otomatis diupdate.Tunggu sebentar hingga update client selesai, dan kamu akan dapat memainkannya </p>
                                                    </div>
                                                </div> -->

                                                <p class="deskripsi__img">@if($komunitas){!! $komunitas->desc !!}@endif</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-2 feature tab-pane" id="tab7">
                            <div class="col-lg">
                                <div class="row tabs-content_game">
                                    <div class="col-lg content__tabs">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="active" href="#tabs10" role="tab" data-toggle="tab">Berbicara</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="" href="#tabs11" role="tab" data-toggle="tab">Misi</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="" href="#tabs12" role="tab" data-toggle="tab">Memancing Pot-Besar</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="" href="#tabs13" role="tab" data-toggle="tab">Quit Menu</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row ml-2">
                                    <div class="col-lg tab-content">
                                        <div class="row mt-3 tab-pane active" id="tabs10">
                                            <div class="col-lg update__seal">
                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2"><b>Di SEAL Online tersedia chatting pribadi, chatting umum, bahkan sampai topik-topik khusus seperti olaharaga, komik, dan anime. Daftar teman kamu akan semakin bertambah panjang.</b></p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->
                                                
                                                <!-- <h1 class="mt-3"><span></span> Berbicara</h1>
                                                <hr>

                                                <div class="row mt-4 mb-3">
                                                    <div class="col-lg mb-3">
                                                        <img class="mr-3" style="width: 250px; border: none; box-shadow: none; border-radius: 0px; float: left;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                        <p class="mt-2">Setelah Maintenance, client SEAL Online kamu akan otomatis diupdate.Tunggu sebentar hingga update client selesai, dan kamu akan dapat memainkannya </p>
                                                    </div>
                                                </div> -->

                                                <p class="deskripsi__img">@if($berbicara){!! $berbicara->desc !!}@endif</p>

                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs11">
                                            <div class="col-lg update__seal">
                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2"><b>Di SEAL Online tersedia chatting pribadi, chatting umum, bahkan sampai topik-topik khusus seperti olaharaga, komik, dan anime. Daftar teman kamu akan semakin bertambah panjang.</b></p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->
                                                
                                                <!-- <h1 class="mt-3"><span></span> Mencari Misi</h1>
                                                <hr>

                                                <div class="row mt-4 mb-3">
                                                    <div class="col-lg mb-3">
                                                        <img class="mr-3" style="width: 250px; border: none; box-shadow: none; border-radius: 0px; float: left;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                        <p class="mt-2"><b>Bicaralah dengan berbagai NPC. Mereka akan menyuruhmu berbagai hal. Setelah kamu mencapai level tertentu dan terbiasa dengan SEAL Online pergilah ke sentral misi setiap kota. Di sana kamu akan mendapatkan misi yang cukup sulit, tapi tentu saja hadiah, EXP, dan reputasi yang besar. Semakin tinggi reputasi, semakin beragam misi yang didapat.</b></p>
                                                    </div>
                                                </div>
                                                
                                                <h1 class="mt-3"><span></span> Menjalani Misi</h1>
                                                <hr>
                                                <p>Untuk menyelesaikan misi, ada beberapa hal yang harus diperhatikan. Perhatikan tiap kata NPC dan baca Surat Misi (Barang Misi). Kebanyakan setiap jawaban dapat ditemukan di sana. Kamu juga bisa menanya pemain lainnya. Bila misi terlalu sulit dan tidak mungkin diselesaikan, tariklah surat misi dari inventory dan jatuhkan ke tanah.</p> -->
                                            
                                                <p class="deskripsi__img">@if($misi){!! $misi->desc !!}@endif</p>
                                            
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs12">
                                            <div class="col-lg update__seal">
                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2"><b>Di SEAL Online tersedia chatting pribadi, chatting umum, bahkan sampai topik-topik khusus seperti olaharaga, komik, dan anime. Daftar teman kamu akan semakin bertambah panjang.</b></p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->
                                                
                                                <!-- <h1 class="mt-3"><span></span> Mencari Misi</h1>
                                                <hr>

                                                <div class="row mt-4 mb-3">
                                                    <div class="col-lg mb-3">
                                                        <img class="mr-3" style="width: 250px; border: none; box-shadow: none; border-radius: 0px; float: left;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                        <p class="mt-2"><b>Bicaralah dengan berbagai NPC. Mereka akan menyuruhmu berbagai hal. Setelah kamu mencapai level tertentu dan terbiasa dengan SEAL Online pergilah ke sentral misi setiap kota. Di sana kamu akan mendapatkan misi yang cukup sulit, tapi tentu saja hadiah, EXP, dan reputasi yang besar. Semakin tinggi reputasi, semakin beragam misi yang didapat.</b></p>
                                                    </div>
                                                </div> -->

                                                <p class="deskripsi__img">@if($pot){!! $pot->desc !!}@endif</p>

                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs13">
                                            <div class="col-lg update__seal">
                                                <!-- content looping -->
                                                <!-- <div class="row mt-4 mb-5">
                                                    <div class="col-lg-3 mb-3">
                                                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg ml-3 mt-4">
                                                        <p class="mt-2"><b>Di SEAL Online tersedia chatting pribadi, chatting umum, bahkan sampai topik-topik khusus seperti olaharaga, komik, dan anime. Daftar teman kamu akan semakin bertambah panjang.</b></p>
                                                    </div>
                                                </div> -->
                                                <!-- end content looping -->
                                                
                                                <!-- <h1 class="mt-3"><span></span> Mencari Misi</h1>
                                                <hr>

                                                <div class="row mt-4 mb-3">
                                                    <div class="col-lg-3 mt-3 mb-3">
                                                        <img class="mr-3" style="border: none; box-shadow: none; border-radius: 0px; float: left;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                                    </div>
                                                    <div class="col-lg table">
                                                        <table>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Lanjutkan</td>
                                                                <td>Keluar dari Quit Menu dan melanjutkan permainan.</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div> -->

                                                <p class="deskripsi__img">@if($quit){!! $quit->desc !!}@endif</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end content -->

    <!-- right sidebar -->
    @include('include.components._right-slide')
    <!-- end right sidebar -->

</div>    
@endsection