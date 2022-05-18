@extends('layouts.landing')
@section('content')
<div class="row mt-5 mb-5 profile">    
    <!-- left sidebar  -->
    @include('include.components._left-slide')
    <!-- left end sidebar -->

    <div class="col-lg-8 content__right ml-2">
        <div class="row profile__content">
            <div class="col-lg">
                <div class="row">
                    <div class="col-lg">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#tab1" role="tab" data-toggle="tab">Cegel Rank</a>
                            </li>
                            <li class="nav-item ml-3">
                                <a class="nav-link" href="#tab2" role="tab" data-toggle="tab">Manage Acount</a>
                            </li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="row">
                            <div class="col-lg tab-content">
                                <div class="row mt-5 tab-pane" id="tab2">
                                    <div class="col-lg">
                                        <h1><b>Manage Akun</b></h1>
                                        <hr>

                                        @if ($message = Session::get('error'))
                                        <div class="alert" id="successMessage">
                                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                            <strong>Gagal!</strong> {{ $message }}
                                        </div>
                                        @endif
                                        @if ($message = Session::get('success'))
                                        <div class="alert-succes" id="successMessage">
                                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                                            <strong>Berhasil!</strong> {{ $message }}
                                        </div>
                                        @endif

                                        <div class="row form">
                                            <div class="col-lg">
                                                <h2>Ubah Email</h2>
                                                <form method="POST" action="">
                                                @csrf
                                                    <div class="form-group">
                                                        <label class="mt-3" for="exampleInputEmail1">Masukan Email Baru</label>
                                                        <input type="email" class="form-control" id="old_pwd" name="old_pwd" placeholder="Masukkan Email Baru..." required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Masukan Password</label>
                                                        <input type="password" class="form-control" id="as_pwd" name="as_pwd" placeholder="Masukkan Password..." required>
                                                    </div>
                                                    <div class="row button">
                                                        <div class="col-lg">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="row form">
                                            <div class="col-lg">
                                                <h2>Ubah Password</h2>
                                                <form method="POST" action="{{ route('post-change-password') }}">
                                                @csrf
                                                    <div class="form-group">
                                                        <label class="mt-3" for="exampleInputEmail1">Password Lama</label>
                                                        <input type="password" class="form-control" id="old_pwd" name="old_pwd" placeholder="Masukkan password lama..." required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Password Baru</label>
                                                        <input type="password" class="form-control" id="as_pwd" name="as_pwd" placeholder="Masukkan password baru..." required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">Konfirmasi Password Baru</label>
                                                        <input type="password" class="form-control" id="as_pwd_repeat" name="as_pwd_repeat" placeholder="Konfirmasi password..." required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">PIN</label>
                                                        <input type="text" class="form-control" id="pin" name="pin" placeholder="Masukkan pin..." required>
                                                    </div>
                                                    <div class="row button">
                                                        <div class="col-lg">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="row mt-5 form mb-5">
                                            <div class="col-lg">
                                                <h2>Ubah PIN</h2>
                                                <form method="POST" action="{{ route('post-change-pin') }}">
                                                @csrf
                                                    <div class="form-group">
                                                        <label class="mt-3" for="exampleInputEmail1">PIN Lama</label>
                                                        <input type="text" class="form-control" id="old_pin" name="old_pin" placeholder="Masukkan PIN lama..." required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">PIN Baru</label>
                                                        <input type="text" class="form-control" id="new_pin" name="new_pin" placeholder="Masukkan PIN baru..." required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Konfirmasi PIN Baru</label>
                                                        <input type="text" class="form-control" id="new_pin_repeat" name="new_pin_repeat" placeholder="Konfirmasi PIN..." required>
                                                    </div>
                                                    <div class="row button">
                                                        <div class="col-lg">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-5 tab-pane player active" id="tab1">
                                    <div class="col-lg">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Rank</th>
                                                    <th>Nickname</th>
                                                    <th>Class</th>
                                                    <th>Inventary Cegles</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($rank_cegels as $key=>$rank_cegel)
                                                <tr>
                                                    <td><span class="btn btn-primary">{{ ($rank_cegels->currentpage()-1) * $rank_cegels->perpage() + $rank_cegel->rank }}</span></td>
                                                    <td>{{ $rank_cegel->char_name }}</td>
                                                    <td width="150px">
                                                        <!-- <img class="mt-1 ml-4" src="{{ asset('/front/assets/images/bg_body.jpg') }}" style="width: 57px; float: left;" alt=""> -->
                                                        <p class="btn btn-primary mt-1">{{ $rank_cegel->title_job }}</p>
                                                    </td>
                                                    <td>
                                                        <p class="text-success mt-1">{{ $rank_cegel->total }}</p>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        <br>
                                        {!! $rank_cegels->appends(request()->except('page'))->links() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- right sidebar -->
    @include('include.components._right-slide')
    <!-- end right sidebar -->

</div>    
@endsection
