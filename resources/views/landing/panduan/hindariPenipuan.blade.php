@extends('layouts.landing')
@section('content')
@include('include.components._header-navigation')
<div class="row mt-5 mb-5">
    
    <!-- left sidebar  -->
    @include('include.components._panduan-navigation')
    <!-- left end sidebar -->

    <!-- content  -->
    <div class="col-lg-9">
        <div class="row feature">
            <div class="col-lg">
                @if($intro_hindari_penipuan)
                <h1><span></span> {{ $intro_hindari_penipuan->title }}</h1>
                <hr>
                <p>{!! $intro_hindari_penipuan->desc !!}</p>
                @endif
                <p><b>Dan berikut adalah beberapa kasus penipuan yang sering terjadi:</b></p>
                <hr style="margin-top: -1%;">
                <ul class="ml-5">
                    @foreach($hindari_penipuans as $key=>$hindari_penipuan)
                    <li><a href="#{{ $hindari_penipuan->id }}" class="text-primary">{{ $hindari_penipuan->title }}</a></li>
                    @endforeach
                    <!-- <li><a href="#2" class="text-primary">Penipuan menggunakan Transaksi.</a></li>
                    <li><a href="#3" class="text-primary">Penipuan menggunakan Vending (Buka Toko).</a></li>
                    <li><a href="#4" class="text-primary">Penipuan dengan modus Penjualan voucher dengan Cegel / item di dalam game.</a></li>
                    <li><a href="#5" class="text-primary">Penipuan menggunakan Nama Game Master atau Pihak LYTO.</a></li> -->
                </ul>
                <hr>
                @foreach($hindari_penipuans as $key=>$hindari_penipuan)
                <div class="row" id="{{ $hindari_penipuan->id }}">
                    <div class="col-lg">
                        <h2 class="text-danger mb-4">{{ $key + 1 }}. {{ $hindari_penipuan->title }}</h2>
                        <p>{!! $hindari_penipuan->desc !!}</p>
                        <hr>
                    </div>
                </div>
                @endforeach
                <!-- <div class="row" id="2">
                    <div class="col-lg">
                        <h2 class="text-danger mb-4">2. Penipuan menggunakan Transaksi</h2>
                        <p>Gaya Penipuan :
                        <br>
                        Penipu biasanya suka membatalkan proses transaksi sebelumnya dengan alasan Tidak Sengaja atau Error, selanjutnya barang yang sudah dijanjikan dirubah dalam transaksi, dan korban yang tidak sadar akan tertipu.
                        <br>
                        <br>
                        Contoh :
                        <br>
                        Suatu hari ada seseorang yang bernama “Ditipukoqdoyan” berteriak-teriak jual Thunder God’s Drum G +9, kemudian anda tertarik untuk membelinya…kemudian anda mengajak orang tersebut bicara untuk proses tawar menawar. (baik melalui whisper / char anda bicara langsung dengan char nya)</p>
                        <p>* Anda = Korban , Penipu = Ditipukoqdoyan *</p>
                        <p>Korban <span class="ml-5 bg-white">: ui lo jual brp duit TGD G +9 nya</span></p>
                        <p>Korban <span class="ml-5 bg-white">: ui lo jual brp duit TGD G +9 nya</span></p>
                        <p>Korban <span class="ml-5 bg-white">: ui lo jual brp duit TGD G +9 nya</span></p>
                        <p>Korban <span class="ml-5 bg-white">: ui lo jual brp duit TGD G +9 nya</span></p>
                        <p>(Lalu terjadilah layer transaksi, sesuai persetujuan)</p>
                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" style="width: 300px; height: 200px;" alt="">   
                        <p class="mt-3">Pada waktu proses melakukan transaksi, anda mengecek terlebih dahulu bahwa barangnya itu benar.
                        (Perhatikan pada gambar, Thunder God’s Drum G+9)
                        Namun tiba-tiba sang penipu membatalkan transaksinya dengan berbagai macam alibi nya ( sori kepencet esc , sori salah pencet mala kepencet batal). 
                        Kemudian anda melakukan transaksi kembali, Namun kali ini anda tidak lagi mengecek barangnya.
                        (Layar transaksi kedua, setelah yang pertama tertutup)</p>
                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" style="height: 200px;" alt="">   
                        <p class="mt-3">Setelah transaksi selesai, Anda baru ingin memakai dan melihat sekali lagi.Dan hasilnya adalah =</p>
                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" style="width: 300px; height: 200px;" alt="">   
                        <p class="mt-3">
                        Anda telah TERTIPU!! Barang yang sebelumnya +9 (Gambar 1) ternyata diubah menjadi +3 (Gambar 2 ) pada transaksi kedua.
                        <br>
                        <br>
                        Catatan =
                        <br>
                        Hal diatas juga berlaku jika Anda yang hendak ingin menjual barang, perhatikan jumlah Cegelnya dengan seksama. Tentu ini mudah karena digit nya dipisah dengan “huruf koma” contoh nya : 1,000,000 dan 10,000,000
                        </p>
                        <ul class="ml-3">
                            <li>Selalu teliti dalam setiap transaksi, periksa kembali barang-barang pada waktu proses transaksi.</li>
                            <li>Jangan terjebak dengan alasan waktu yang buru-buru dari penjual maupun terjebak untuk terburu-buru membeli barang yang murah harganya. Biar lambat asal selamat !!</li>
                        </ul>
                    </div>
                </div>
                <div class="row" id="3">
                    <div class="col-lg">
                        <h2 class="text-danger mb-4">3. Penipuan menggunakan Vending (Buka Toko)</h2>
                        <p>Gaya Penipuan =
                        <br>
                        Penipu akan membuka toko, dan menjual barang yang amat murah. Ketika si penjual sedang masuk dan memilih barang, penipu akan pura-pura tidak sengaja menutup tokonya, dan membuka kembali toko tersebut dan menukar barangnya.</p>
                        <p>Contoh = 
                        <br>
                        Pada saat anda berada di kota anda melihat ada orang yang baru saja membuka vendingannya. Dengan cepat anda segera menghampirinya untuk melihat barang apakah yang dijualnya dan siapa tahu dia salah harga kurang “0” nya satu kan mayan =p</p>
                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" style="width: 300px; height: 200px;" alt="">   
                        <p class="mt-3">Setelah anda memasuki toko tersebut, anda melihat bahwa ruby yang dijual nya sangat murah…maka anda tak ragu lagi untuk memborongnya apalagi kondisi keuangan nya pun cukup, “ kapan lagi dapat ruby harga 1 juta “, buru2 tarik sebelum ada orang lain yang masuk dan menarik ruby tersebut.</p>
                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" style="height: 200px;" alt="">   
                        <p class="mt-3">
                        Tiba-tiba tokonya tertutup, dan Anda yang sudah terburu nafsu untuk mendapatkan Ruby tersebut menunggu si pemilik toko membuka tokonya kembali…..dan tidak berapa lama kemudian toko langsung terbuka dan anda tanpa basa basi tidak melihat lagi yang penting tarik semua.
                        </p>
                        <img src="{{ asset('/front/assets/images/bg_body.jpg') }}" style="height: 200px;" alt="">
                        <p class="mt-3">Langsung drag pencet enter ga pake lama ……..hup, Anda telah tertipu T_T.</p>
                        <p>Saran = </p>
                        <ul class="ml-5">
                            <li>Selalu teliti dalam membeli barang, periksa jenis dan jumlah barang pada waktu membeli.</li>
                            <li>Jangan terburu-buru membeli karena melihat harga yang terlampau murah. Biar lambat asal selamat !!</li>
                        </ul>
                    </div>
                </div>
                <div class="row" id="4">
                    <div class="col-lg">
                        <h2 class="text-danger mb-4">4. Penipuan dengan modus Penjualan voucher dengan Cegel / item di dalam game</h2>
                    </div>
                </div>
                <div class="row" id="5">
                    <div class="col-lg">
                        <h2 class="text-danger mb-4">5. Penipuan menggunakan Nama Game Master atau Pihak LYTO</h2>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- end content -->

    <!-- right sidebar -->
    @include('include.components._right-slide')
    <!-- end right sidebar -->

</div>    
@endsection