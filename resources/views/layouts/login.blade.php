@if(Auth::guard(getGuard())->user())
<div class="box">
    <label align="center"><b>Welcome, {{ $user->char_name }}</b></label>
    <hr>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th style="width: 70px"><b>Status</b></th>
                <th style="width: 20px">:</th>
                <th style="color: green"><b>Active</b></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><b>Point</b></td>           
                <td>:</td>           
                <td style="color: red"><b>{{$user->point}}</b></td>           
            </tr>
        </tbody>
    </table>
    <hr>
    <ul class="form">
        <li class="form_submit">
            <a href="{{URL::to('/profile')}}" class="profile_button">Manage Account</a>
            <a class="logout_button" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>
</div>
@else
<div class="box">
    <form method="POST" action="{{ route('post-user-login') }}">
    @csrf
        <ul class="form">
            <li class="form_email">
                <input class="submit @error('user_name') is-invalid @enderror" name="user_name" value="{{ old('user_name') }}" required autocomplete="user_name" placeholder="Enter your username" type="text" name="user_name">
            </li>
            <li class="form_password">
                <input id="password" type="password" class="submit @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">
            </li>
            <li class="form_submit">
              <button type="submit" class="submit example_b">Login</button>
            </li>
        </ul>
    </form>
</div>
@error('user_name')
<div class="box">
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
</div>
@enderror

@error('password')
<div class="box">
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
</div>
@enderror

@if (session('user_name'))
<div class="box">
    <span role="alert" style="color: red;">
        <p>{{ session('user_name') }}</p>
    </span>
</div>
@enderror

@endif
