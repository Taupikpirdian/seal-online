<div class="col-lg-1">
    <div class="row navigation">
        <div class="col-lg">
            <div class="text">
                <p><i class="fas fa-chevron-right"></i> Dunia Seal Online</p>
            </div>
            <ul>
                <li class={{ Request::is('detail-berita') ? 'active' : '' }}><a href="/detail-berita">Berita Seal</a></li>
                <li class={{ Request::is('detail-acara') ? 'active' : '' }}><a href="/detail-acara">Acara Seal</a></li>
                <li class={{ Request::is('detail-gameUpdate') ? 'active' : '' }}><a href="/detail-gameUpdate">Game Update</a></li>
                <li class={{ Request::is('detail-aturanMain') ? 'active' : '' }}><a href="/detail-aturanMain">Aturan Main</a></li>
                <li class={{ Request::is('detail-rangking') ? 'active' : '' }}><a href="/detail-rangking">Ranking</a></li>
                <li class={{ Request::is('detail-guide') ? 'active' : '' }}><a href="/detail-guide">Guide</a></li>
            </ul>
        </div>
    </div>
</div>