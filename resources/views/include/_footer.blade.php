<div class="row mb-3 main__footer">
    <div id="calfoot" class="col-lg">
        <div class="row">
            <div class="col-lg mt-4 mb-4 border-right border-white">
                <div class="row">
                    <div class="col-lg-2">
                        <ul class="credits">
                            @foreach($sponsor_logos as $key=>$sponsor_logo)
                            <li><img src="{{ asset('/images/sponsor_logo/'.$sponsor_logo->img)}}" width="50" height="50"></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="col-lg-7">
                        <div class="list-footer">
                            <ul>
                                <li>
                                    <a href="{{URL::to('/home')}}"><span>Home</span></a>
                                </li>
                                <li>
                                    <a href="{{URL::to('/pengenalan')}}"><span>Pengenalan Seal</span></a>
                                </li>
                                <li>
                                    <a href="{{URL::to('/persetujuan-member')}}"><span>Persetujuan Pemain</span></a>
                                </li>
                                <li>
                                    <a href="{{URL::to('/aturan-bermain')}}"><span>Aturan Main</span></a>
                                </li>
                                <li>
                                    <a href="{{URL::to('/layanan-kontak')}}"><span>Kontak Kami</span></a>
                                </li>
                            </ul>
                        </div>
                        <div style="width: 100%; !important" class="mt-2">
                            <div class="card">
                                @if($contact_info)
                                    <span>
                                        {{ $contact_info->copyright }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg">
                        <ul class="sealcountry">
                            <li class="indonesia">
                                <a href="#"><span>Indonesia</span></a>
                            </li>
                            <li class="korea">
                                <a href="#" target="_blank"><span>Korea</span></a>
                            </li>
                            <li class="japan">
                                <a href="#" target="_blank"><span>Japan</span></a>
                            </li>
                            <li class="china">
                                <a href="#" target="_blank"><span>China</span></a>
                            </li>
                            <li class="taiwan">
                                <a href="#" target="_blank"><span>Taiwan</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg">
                        <ul class="sealcountry">
                            <li class="thailand">
                                <a href="#" target="_blank"><span>Thailand</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
