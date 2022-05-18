<div class="col-lg-1">
    <div class="row navigation">
        <div class="col-lg">
            <div class="text">
                <p><i class="fas fa-chevron-right"></i> Pengenalan</p>
            </div>
            <ul>
                <li class={{ Request::is('download-game') ? 'active' : '' }}><a href="/download-game">Game</a></li>
                <li class={{ Request::is('download-gallery') ? 'active' : '' }}><a href="/download-gallery">Gallery</a></li>
                <li class={{ Request::is('download-video') ? 'active' : '' }}><a href="/download-video">Video</a></li>
                <li class={{ Request::is('download-emotikon') ? 'active' : '' }}><a href="/download-emotikon">Emotikon</a></li>
            </ul>
        </div>
    </div>
</div>