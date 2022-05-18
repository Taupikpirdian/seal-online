@extends('layouts.landing')
@section('content')
@include('include.components._header-navigation')
<div class="row mt-5 mb-5">
    
    <!-- left sidebar  -->
    @include('include.components._panduan-navigation')
    <!-- left end sidebar -->

    <!-- content  -->
    <div class="col-lg-9">
        <h1 class="header"><span></span> Panduan GuildWars</h1>
        <hr class="border-header">
        <div class="row">
            <div class="col-lg gameUpdate__content">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#tab1" role="tab" data-toggle="tab">Intro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab2" role="tab" data-toggle="tab">Panduan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab3" role="tab" data-toggle="tab">Tipe Pertandingan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab4" role="tab" data-toggle="tab">Poin, Ranks & Hadiah</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="row">
                    <div class="col-lg tab-content">
                        <div class="row mt-3 tab-pane active" id="tab1">
                            <div class="col-lg">
                                <img class="header-image" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                <h1 class="mt-4 header"><span></span> Intro dan Syarat</h1>
                                <hr class="border-header">
                                <!-- looping content -->
                                <div class="row content content_guildwars mb-3">
                                    <div class="col-lg-3">
                                        <img class="content-image mb-2" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                    </div>
                                    <div class="col-lg">
                                        <h2 class="mt-3 mb-3"><i class="fas fa-chevron-right"></i> Profesi Baru</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore ducimus consequuntur voluptatem aliquid, recusandae sunt aperiam voluptas in. Aspernatur doloremque cumque quasi, reiciendis quibusdam dolores similique quod inventore animi nihil!</p>
                                    </div>
                                </div>
                                <!-- end looping content -->
                                <div class="row mb-5">
                                    <div class="col-lg list_guildwars">
                                        <h6>Syarat-syarat GuildWars</h6>
                                        <hr>
                                        <ul>
                                            <li>Guild level 4 atau lebih yang dapat mengajukan tantangan Guild Wars.</li>
                                            <li>Guild level 3 hanya dapat menerima tantangan Guild Wars.
                                                <ul>
                                                    <li>Jadi untuk melakukan Guild War, harus memiliki Guild level 3 atau lebih.</li>
                                                </ul>
                                            </li>
                                            <li>Hanya karakter yang memiliki minimum Level 30 dapat berpartisipasi dalam Guild Wars.</li>
                                            <li>Minimum peserta Guild Wars masing-masing guild adalah 6 orang.
                                                <ul>
                                                    <li>* Min. 6 vs 6 ; Max. 30 vs 30 (Jumlah peserta tidak harus sama)</li>
                                                </ul>
                                            </li>
                                            <li>Pengajuan dan penerimaan tantangan Guild Wars hanya dapat dilakukan Guild Master.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3 tab-pane" id="tab2">
                            <div class="col-lg">
                                <img class="header-image" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                <h1 class="mt-4 header"><span></span> Panduan GUILD WARS</h1>
                                <hr class="border-header">
                                <p>Pada halaman ini, kami memberikan informasi cara-cara untuk melakukan Guild Wars.</p>
                                <h1 class="mt-4 header">Berikut ini adalah tata cara untuk melakukan Guild Wars:</h1>
                                <hr class="border-header">
                                <!-- looping content panduan -->
                                <div class="mb-4">
                                    <p><b>1.</b> Untuk menantang GuildWar kepada guild lainnya, hanya bisa dilakukan oleh ketua masing-masing guild. Jika kamu adalah seorang ketua guild, klik kanan pada ketua guild dari guild yang ingin kamu ajak GuildWar, kemudian pilih "Kamu ingin mendeklarasikan perang kepada < nama guild yg ditantang >".</p>
                                    <img style="width: 100%; border: 1px solid blue;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                </div>
                                <div class="mb-4">
                                    <p><b>2.</b> Kemudian akan muncul window baru seperti di bawah ini. Klik OK</p>
                                    <img style="width: 100%; border: 1px solid blue;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                    <p class="mt-2">Dan pada saat yang sama, di layar Guild Master musuh akan muncul gambar seperti di bawah ini.</p>
                                    <img style="width: 100%; border: 1px solid blue;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                </div>
                                <div class="mb-4">
                                    <p><b>3.</b> Setelah kedua Guild Master setuju, Guild Master penantang dan Guild Master yang ditantang akan dipindahkan ke peta baru. Di peta baru ini, kedua Guild Master dapat berbelanja dulu sebelum memulai pertarungan.</p>
                                    <img style="width: 100%; border: 1px solid blue;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                    <p class="mt-2">Guild Master penantang harus menentukan settingan Guild War yang diinginkan dengan meng-klik NPC Raja Yang Kotor di tengah peta.</p>
                                    <img style="width: 100%; border: 1px solid blue;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                    <p class="mt-2">Klik "Pengaturan" untuk mengatur tata cara Guild War yang diinginkan.</p>
                                    <img style="width: 100%; border: 1px solid blue;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                </div>
                                <!-- end looping content panduan -->
                                <h1 class="mt-4 header"> Tipe GuildWars</h1>
                                <hr class="border-header">
                                <p>Jenis pertarungan yang diinginkan. Ada 2 jenis, yakni All-out War dan Guild-pride War.</p>
                                <ul class="list-guildwars__content">
                                    <li>All-out War: Pertarungan biasa. Yang terbanyak mengalahkan anggota guild musuhnya akan menjadi pemenang.</li>
                                    <li>Guild-pride War: Pertarungan sejenis capture the flag. Guild yang berhasil mengumpulkan poin terbesar akan menjadi pemenang. Item Heart dijatuhkan dari monster yang akan muncul terus menerus secara acak di dalam peta.
                                        <ul class="list-guildwars__content">
                                            <li>Jika Heart dikembalikan ke base sendiri, akan mendapat tambahan 10 poin.</li>
                                            <li>Jika Heart dikembalikan ke base musuh, poin musuh akan berkurang 30.</li>
                                            <li>Karakter yang membawa Heart akan memiliki kecepatan gerak yang amat pelan +_+</li>
                                            <li>Jika karakter yang membawa Heart dibunuh, maka item Heart akan hilang</li>
                                        </ul>
                                    </li>
                                </ul>
                                <p class="mt-4 text-warning"><i>(Lihat bagian Tipe Pertandingan untuk info lebih lanjut)</i></p>
                                <h1 class="mt-4 header"> Peta GuildWars</h1>
                                <hr class="border-header">
                                <p>Peta yang akan digunakan dalam Guild War. Peta untuk setiap tipe Guild War akan berbeda.</p>
                                <p class="mt-4 text-warning"><i>(Lihat bagian Tipe Pertandingan untuk info lebih lanjut)</i></p>
                                <h1 class="mt-4 header"> Batas KO GuildWars</h1>
                                <hr class="border-header">
                                <p>Jumlah kekalahan untuk anggota masing-masing guild secara total. Guild yang berhasil mengalahkan anggota guild musuhnya sebanyak jumlah batas KO, akan menjadi pemenang.
                                Yaitu : 30, 50, 80, 100, 150, 200</p>
                                <h1 class="mt-4 header"> Batas Waktu GuildWars</h1>
                                <hr class="border-header">
                                <p>Lamanya waktu Guild Wars berlangsung.
                                Yaitu: 5, 8. 12, 18, 24 (dalam hitungan menit)</p>
                                <h1 class="mt-4 header"> Batas Level</h1>
                                <hr class="border-header">
                                <p>Perhitungan pangkat dalam guild saat melakukan Guild War. "YES" berarti perhitungan pangkat akan seperti ini:</p>
                                <!-- table  -->
                                <div class="row">
                                    <div class="col-lg table_guidwars">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Pangkat</th>
                                                    <th>Anggota</th>
                                                    <th>Perwira*</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Anggota Guild</td>
                                                    <td>1</td>
                                                    <td>2</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end table -->
                                <p class="mt-4"><u>*Perwira: Baron, Count, Marquise, Duke, dan Master</u></p>
                                <p>Jadi, seorang Perwira Guild A akan menambahkan 7 poin pada guildnya jika dia mengalahkan Master Guild B (musuh). Atau akan menambahkan 4 poin pada guildnya jika dia mengalahkan Count Guild B (musuh). Jika seorang anggota guild non-perwira berhasil mengalahkan Duke Guild musuhnya, maka poin guildnya akan bertambah 5.</p>
                                <h1 class="mt-4 header"> Golden GuildWars</h1>
                                <hr class="border-header">
                                <p>Jika kedua guild memiliki skor yang sama setelah waktu habis, maka akan muncul 1 babak lagi secara otomatis. Babak tambahan ini memiliki durasi 5 menit. Golden Guild War bisa diumpamakan sebagai extra time dalam sepakbola ^^.</p>
                                <h1 class="mt-4 header"> Taruhan Cegel</h1>
                                <hr class="border-header">
                                <p>Hal ini belum diimplementasikan dalam SEAL Online Indonesia >_<.</p>
                                <hr class="border-header mt-5">
                                <!-- looping next image  -->
                                <div class="mb-4">
                                    <p><b>4.</b> Jika kedua Master Guild telah setuju dengan pengaturan Guild War, maka kedua Master Guild akan dipindahkan ke peta pertarungan yang telah disepakati sebelumnya. Akan ada selang waktu 2 menit untuk menunggu anggota guild yang lain memasuki medan pertarungan.</p>
                                    <p class="mt-4 text-warning"><i>(Waktu persiapan untuk anggota guild lain bergabung Guild War)</i></p>
                                    <img style="width: 100%; border: 1px solid blue;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                    <p>Sementara itu, di layar anggota guild akan muncul tombol guild Battle. Anggota guild harus menekan tombol "Message Battle" yang muncul di sebelah kiri layar. Setelah itu, anggota guild harus menekan "OK" jika ingin ikut Guild War. Sebaliknya, jika tidak mau ikut, tekan "Batal".</p>
                                    <img style="width: 100%; border: 1px solid blue;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                    <img style="width: 100%; border: 1px solid blue;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                    <p>Setelah itu anggota guild akan dipindahkan ke peta baru. Dalam peta itu, anggota guild dapat berbelanja perlengkapan perang seperti potion, dart, dll.guild harus meng-klik NPC Battlerin dan memilih pilihan "Lokasi"</p>
                                    <img style="width: 100%; border: 1px solid blue;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                    <img style="width: 100%; border: 1px solid blue;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                </div>
                                <div class="mb-4">
                                    <p><b>5.</b> Guild War akan dimulai jika masing-masing guild yang bertarung memiliki minimal 6 orang anggota (termasuk Guild Master itu sendiri) yang berada di peta tempat pertarungan tersebut. Jumlah maksimal peserta untuk masing-masing guild adalah 30 orang. Jika belum tercapai keadaan minimal 6 vs 6, maka setelah 2 menit, pertarungan akan dihentikan dihentikan dan dianggap seri.</p>
                                    <img style="width: 100%; border: 1px solid blue;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                </div>
                                <div class="mb-4">
                                    <p><b>6.</b> Selama Guild War berjalan, kamu bisa melihat status guild dan anggotanya dengan menekan tombol "L" yang ada di sebelah kiri layar.</p>
                                    <img style="width: 100%; border: 1px solid blue;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                </div>
                                <div class="mb-4">
                                    <p><b>7.</b> Guild War akan berakhir jika waktu habis atau salah satu guild telah mencapai poin yang telah ditentukan sebelumnya. Ayo ajak teman-temanmu bergabung bersama dalam guildmu dan tunjukkan kehebatan guild kalian di Shiltz ^_^.</p>
                                    <img style="width: 100%; border: 1px solid blue;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                </div>
                                <!-- looping end next image  -->
                                <h1 class="mt-4 header"> Tipe GuildWars</h1>
                                <hr class="border-header">
                                <ul class="list-guildwars__content">
                                    <li>Jika jangka waktu Guild War yang telah ditentukan berakhir, maka perhitungan menang dan kalah akan ditentukan melalui jumlah total Poin KO yang didapatkan.</li>
                                    <li>Jika Guild Master menyerah, guild akan kalah tanpa memperhitungkan KO poin.</li>
                                    <li>Guild War berakhir "Seri/Draw" jika jumlah Poin KO sama.</li>
                                    <li>Jika "Waktu Persiapan" habis dan anggota peserta tidak mencukupi (kurang dari 6 anggota) Guild Battle akan berakhir "Seri/Draw".</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mt-3 tab-pane" id="tab3">
                            <div class="col-lg">
                                <img class="header-image" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                <h1 class="mt-4 header"><span></span> Tipe Pertandingan</h1>
                                <hr class="border-header">
                                <p>Sebelum Bertanding, Guild yang ingin melakukan Guild Wars harus melakukan pengaturan terlebih dahulu. Salah satu yang harus ditentukan adalah Tipe Guild Wars. Ada 2 jenis tipe pertandingan dan berikut adalah penjelasannya.</p>
                                <h1 class="mt-5 header"> All-out War: Pertarungan biasa</h1>
                                <hr class="border-header">
                                <p>Cara Bertanding :</p>
                                <p>Yang terbanyak mengalahkan anggota guild musuhnya akan menjadi pemenang. Point didapat setiap kali salah satu anggota Guild lawan terkalahkan.</p>
                                <p>Peta-peta All-Out War:</p>
                                <div class="row mt-4">
                                    <!-- loping img  -->
                                    <div class="col-lg text-center">
                                        <img width="250px" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                        <p>(Peta Babak Final)</p>
                                    </div>
                                    <!-- end looping img  -->
                                    <div class="col-lg text-center">
                                        <img width="250px" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                        <p>(Peta Babak Final)</p>
                                    </div>
                                    <div class="col-lg text-center">
                                        <img width="250px" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                        <p>(Peta Babak Final)</p>
                                    </div>
                                </div>
                                <h1 class="mt-3 header"> Guild-pride War: Pertarungan sejenis capture the flag</h1>
                                <hr class="border-header">
                                <p>cara bertanding:</p>
                                <p>Guild yang berhasil mengumpulkan poin terbesar akan menjadi pemenang. Item Heart dijatuhkan dari monster yang akan muncul terus menerus secara acak di dalam peta.</p>
                                <ul class="list-guildwars__content">
                                    <li>Jika Heart dikembalikan ke base sendiri, akan mendapat tambahan 10 poin.</li>
                                    <li>Jika Heart dikembalikan ke base musuh, poin musuh akan berkurang 30.</li>
                                    <li>Karakter yang membawa Heart akan memiliki kecepatan gerak yang amat pelan +_+</li>
                                    <li>Jika karakter yang membawa Heart dibunuh, maka item Heart akan hilang</li>
                                </ul>
                                <p class="mt-5">Peta-peta Guild-Pride War:</p>
                                <div class="row">
                                    <!-- loping img  -->
                                    <div class="col-lg">
                                        <img width="250px" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                    </div>
                                    <!-- end looping img  -->
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3 tab-pane" id="tab4">
                            <div class="col-lg">
                                <img class="header-image" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                <h1 class="mt-4 header"><span></span> Guild War Poin, Ranks & Hadiah</h1>
                                <hr class="border-header">
                                <p>Tujuan dari suatu pertandingan tentunya untuk Kebanggaan dan Hadiah.
                                Oleh karena itu SEAL Online Indonesia juga tentunya sudah menyiapkan beberapa penghargaan bagi mereka yang telah ikut memeriahkan Guild Wars setiap periode.
                                ( 1 periode = jarak hari mulai dari maintenance mingguan sebelum dan sesudah)</p>
                                <h1 class="mt-4 header"> Perhitungan Point Guildwar</h1>
                                <hr class="border-header">
                                <p>Setiap melakukan pertandingan Guildwar, guild akan mendapatkan point. Guild yang memiliki point terbanyak akan menduduki peringkat tertinggi di setiap periode, dimana periode guildwars akan dihitung mulai waktu maintenance sebelum dan sesudah. (Jadwal maintenance setiap hari Kamis).</p>
                                <p>Perhitungan point Guildwars adalah sebagai berikut:</p>
                                <ul class="list-guildwars__content">
                                    <li>Menang: 3 Point.</li>
                                    <li>Seri: 0 Point.</li>
                                    <li>Seri: 0 Point.</li>
                                </ul>
                                <ul class="mt-3 list-guildwars__content text-primary">
                                    <li>Poin Guildwar akan direset setiap memasuki periode baru.</li>
                                    <li>Poin Guildwar hanya dihitung pada 3 pertandingan pertama untuk lawan guild yang sama.</li>
                                    <li>Poin Guildwar tidak akan dihitung lagi atau dianggap seri setelah lebih dari 3x pertandingan melawan guild yang sama (Pertandingan ke4, 5, dst).</li>
                                </ul>
                                <h1 class="mt-4 header"> Ranking</h1>
                                <hr class="border-header">
                                <ul class="mt-3 list-guildwars__content">
                                    <li>Ranking / Peringkat Guild War dapat dilihat di http://www.sealindo.com/komunitas/granking/</li>
                                    <li>Untuk Guild yang mendapat Peringkat 1 maka seluruh anggota Guild tersebut akan memiliki Lambang Kehormatan di atas kepala masing-masing karakter selama 1 periode.</li>
                                </ul>
                                <div class="row mt-3">
                                    <div class="col-lg">
                                        <img width="250" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                                        <p>(Tampilan salah satu anggota Guild Peringkat 1 Guild War)</p>
                                    </div>
                                </div>
                                <h1 class="mt-4 header"> Hadiah</h1>
                                <hr class="border-header">
                                <p>Guild yang berhasil menempati Ranking 5 besar akan mendapatkan hadiah juga setiap minggunya ^_^. Hadiah akan diberikan langsung ke bank guild pada saat maintenance mingguan. Berikut di bawah ini adalah hadiah yang akan diterima oleh 5 guild terbaik di masing-masing server (ARUS dan DURAN).</p>
                                <div class="row">
                                    <div class="col-lg content_guildwars">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Hadiah</th>
                                                    <th>Peringkat I</th>
                                                    <th>Peringkat II</th>
                                                    <th>Peringkat III</th>
                                                    <th>Peringkat IV</th>
                                                    <th>Peringkat V</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Crystal</td>
                                                    <td>5</td>
                                                    <td>4</td>
                                                    <td>3</td>
                                                    <td>2</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>Crystal</td>
                                                    <td>5</td>
                                                    <td>4</td>
                                                    <td>3</td>
                                                    <td>2</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>Crystal</td>
                                                    <td>5</td>
                                                    <td>4</td>
                                                    <td>3</td>
                                                    <td>2</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>Crystal</td>
                                                    <td>5</td>
                                                    <td>4</td>
                                                    <td>3</td>
                                                    <td>2</td>
                                                    <td>1</td>
                                                </tr>
                                                <tr>
                                                    <td>Crystal</td>
                                                    <td>5</td>
                                                    <td>4</td>
                                                    <td>3</td>
                                                    <td>2</td>
                                                    <td>1</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <h1 class="mt-5 header"> Special Prize</h1>
                                <hr class="border-header">
                                <p>Mulai periode 28 September - 5 Oktober 2006, SEAL Online Indonesia akan menambahkan Guild Wars Special Prize yang akan diberikan kepada guild yang memenuhi kategori sbb:</p>
                                <ul class="mt-3 list-guildwars__content">
                                    <li><b>Ferocious Guild</b> 
                                        <br> Penghargaan kepada guild yang memiliki lawan tanding berbeda terbanyak dalam satu periode.
                                    </li>
                                    <li><b>Gladiator Guild</b> 
                                        <br> Penghargaan kepada guild yang melakukan All-out War terbanyak dalam satu periode.
                                    </li>
                                    <li><b>Tactical Guild</b> 
                                        <br> Penghargaan kepada guild yang melakukan Guild-Pride War terbanyak dalam satu periode.
                                    </li>
                                </ul>
                                <p class="mt-4">Guild yang berhak mendapatkan Special Prize hanyalah guild yang berada di luar Ranking I - V dan setiap guild hanya bisa memenangkan 1 jenis kategori per periode</p>
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