<div class="col-lg-1">
    <div class="row navigation">
        <div class="col-lg">
            <div class="text">
                <p><i class="fas fa-chevron-right"></i> Dunia Seal Online</p>
            </div>
            <ul>
                <li class={{ Request::is('aturan-bermain') ? 'active' : '' }}><a href="/aturan-bermain">Aturan Main</a></li>
                <li class={{ Request::is('komik') ? 'active' : '' }}><a href="/komik">Komik</a></li>
                <li class={{ Request::is('fansite') ? 'active' : '' }}><a href="/fansite">Fansite</a></li>
                <li class={{ Request::is('screenshot') ? 'active' : '' }}><a href="/screenshot">Screenshot</a></li>
                <li class={{ Request::is('event') ? 'active' : '' }}><a href="/event">Event</a></li>
                <li class={{ Request::is('guild-rank') ? 'active' : '' }}><a href="/guild-rank">Guild Ranking</a></li>
                <li class={{ Request::is('persetujuan-member') ? 'active' : '' }}><a href="/persetujuan-member">Persetujuan Member</a></li>
            </ul>
        </div>
    </div>
</div>