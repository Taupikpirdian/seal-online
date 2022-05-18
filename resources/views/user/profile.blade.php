@extends('layouts.app2')
@section('content')
{!! Html::style('front/assets/css/custom2.css') !!}
<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<style type="text/css">
body{
	background:#AEE4FF;
}
.form-style-10{
	max-width:450px;
	padding:30px;
	margin:40px auto;
	background: #FFF;
	border-radius: 10px;
	-webkit-border-radius:10px;
	-moz-border-radius: 10px;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
	-moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
	-webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
}
.form-style-10 .inner-wrap{
	padding: 30px;
	background: #F8F8F8;
	border-radius: 6px;
	margin-bottom: 15px;
}
.form-style-10 h1{
	background: #2A88AD;
	padding: 20px 30px 15px 30px;
	margin: -30px -30px 30px -30px;
	border-radius: 10px 10px 0 0;
	-webkit-border-radius: 10px 10px 0 0;
	-moz-border-radius: 10px 10px 0 0;
	color: #fff;
	text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
	font: normal 30px 'Bitter', serif;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	border: 1px solid #257C9E;
}
.form-style-10 h1 > span{
	display: block;
	margin-top: 2px;
	font: 13px Arial, Helvetica, sans-serif;
}
.form-style-10 label{
	display: block;
	font: 13px Arial, Helvetica, sans-serif;
	color: #888;
	margin-bottom: 15px;
}
.form-style-10 input[type="text"],
.form-style-10 input[type="date"],
.form-style-10 input[type="datetime"],
.form-style-10 input[type="email"],
.form-style-10 input[type="number"],
.form-style-10 input[type="search"],
.form-style-10 input[type="time"],
.form-style-10 input[type="url"],
.form-style-10 input[type="password"],
.form-style-10 textarea,
.form-style-10 select {
	display: block;
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
	padding: 8px;
	border-radius: 6px;
	-webkit-border-radius:6px;
	-moz-border-radius:6px;
	border: 2px solid #fff;
	box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
	-moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
	-webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
}

.form-style-10 .section{
	font: normal 20px 'Bitter', serif;
	color: #2A88AD;
	margin-bottom: 5px;
}
.form-style-10 .section span {
	background: #2A88AD;
	padding: 5px 10px 5px 10px;
	position: absolute;
	border-radius: 50%;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border: 4px solid #fff;
	font-size: 14px;
	margin-left: -45px;
	color: #fff;
	margin-top: -3px;
}
.form-style-10 input[type="button"], 
.form-style-10 input[type="submit"]{
	background: #2A88AD;
	padding: 8px 20px 8px 20px;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	color: #fff;
	text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
	font: normal 30px 'Bitter', serif;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	border: 1px solid #257C9E;
	font-size: 15px;
}
.form-style-10 input[type="button"]:hover, 
.form-style-10 input[type="submit"]:hover{
	background: #2A6881;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}
.form-style-10 .privacy-policy{
	float: right;
	width: 250px;
	font: 12px Arial, Helvetica, sans-serif;
	color: #4D4D4D;
	margin-top: 10px;
	text-align: right;
}

.alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
}

.alert-succes {
  padding: 20px;
  background-color: #4CAF50;
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>

<main id="main" role="main">
	<div id="contents" class="">
		<div id="contents_left">
			<section id="login">
				@include('layouts.login')
			</section>
		</div>
		<div id="contents_center2">
			<article id="party_body" class="guide_body">
				<div id="topicpath">
					<ol>
					<li><span itemprop='title'>HOME</span></a></li><li><a><span itemprop='title'>Manage Akun</span></a></li><li>Manage Akun</li></ol>
				</div>

				<div class="box" id="guide-section">
					<h2>Manage Akun</h2>
					<div class="detail">
						<article id="topic" class="info_list type_eups4 type_euxbox type_ps4 type_windows type_xbox">
              @if ($message = Session::get('error'))
              <div class="alert">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                <strong>Gagal!</strong> {{ $message }}
              </div>
              @endif
              @if ($message = Session::get('success'))
              <div class="alert-succes">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
                <strong>Berhasil!</strong> {{ $message }}
              </div>
              @endif
              <div class="form-style-10">
                <form method="POST" action="{{ route('post-change-password') }}">
                @csrf
                    <div class="section">Ubah Password</div>
                    <div class="inner-wrap">
                        <label for="old_pwd">Password Lama <input type="password" id="old_pwd" name="old_pwd" placeholder="Masukkan password lama..." required/></label>
                        <label for="as_pwd">Password Baru <input type="password" id="as_pwd" name="as_pwd" placeholder="Masukkan password baru..." required/></label>
                        <label for="as_pwd_repeat">Konfirmasi Password Baru <input type="password" id="as_pwd_repeat" name="as_pwd_repeat" placeholder="Konfirmasi password..." required/></label>
                        <label for="pin">PIN <input type="password" id="pin" name="pin" placeholder="Masukkan pin..." required/></label>
                    </div>

                    <div class="button-section">
                      <input type="submit" name="Sign Up" />
                    </div>
                </form>
              </div>

              <div class="form-style-10">
                <form method="POST" action="{{ route('post-change-pin') }}">
                @csrf
                    <div class="section">Ubah PIN</div>
                    <div class="inner-wrap">
                        <label for="old_pin">PIN Lama <input type="password" id="old_pin" name="old_pin" placeholder="Masukkan PIN lama..." required/></label>
                        <label for="new_pin">PIN Baru <input type="password" id="new_pin" name="new_pin" placeholder="Masukkan PIN baru..." required/></label>
                        <label for="new_pin_repeat">Konfirmasi PIN Baru <input type="password" id="new_pin_repeat" name="new_pin_repeat" placeholder="Konfirmasi PIN..." required/></label>
                    </div>

                    <div class="button-section">
                      <input type="submit" name="Sign Up" />
                    </div>
                </form>
              </div>
						</article>
					</div>
				</div>
			</article>
		</div>
	</div>
</main>

@endsection