<div class="col-lg-1">
    <div class="row navigation">
        <div class="col-lg">
            <div class="text">
                <p><i class="fas fa-chevron-right"></i> Dunia Seal Online</p>
            </div>
            <ul>
                <li class={{ Request::is('pengenalan') ? 'active' : '' }}><a href="/pengenalan">Pengenalan</a></li>
                <li class={{ Request::is('feature') ? 'active' : '' }}><a href="/feature">Fitur Game</a></li>
                <li class={{ Request::is('berita') ? 'active' : '' }}><a href="/berita">Berita SEAL</a></li>
                <li class={{ Request::is('acara') ? 'active' : '' }}><a href="/acara">Acara SEAL</a></li>
                <li class={{ Request::is('info') ? 'active' : '' }}><a href="/info">Info Teknis</a></li>
                <li class={{ Request::is('game-update') ? 'active' : '' }}><a href="/game-update">Game Update</a></li>
            </ul>
            <ul class="submenu">
                <li class={{ Request::is('update-seal') ? 'active' : '' }}><a href="/update-seal">Update SEAL</a></li>
                <li class={{ Request::is('carnival-city') ? 'active' : '' }}><a href="/carnival-city?type=all">Carnival City</a></li>
                <li class={{ Request::is('guild-wars') ? 'active' : '' }}><a href="/guild-wars?type=all">GuildWars</a></li>
                <li class={{ Request::is('service') ? 'active' : '' }}><a href="/service?type=all">Service</a></li>
            </ul>
        </div>
    </div>
</div>