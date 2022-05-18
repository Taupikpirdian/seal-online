<div class="col-lg-2">
    <div class="row">
        <div class="col-lg" id="leftbanner">
            <ul class="leftbanner__image">
                <li style='border: 1px solid #DCDADC; box-sizing: border-box; box-shadow: 0px 4px 4px rgb(0 0 0 / 25%); border-radius: 5px; padding: 5px;'>
                    <i style='color: green;' class="fas fa-circle mr-2"></i>Online Player: {{$count_user_onlines}}
                </li>
                <li style='border: 1px solid #DCDADC; box-sizing: border-box; box-shadow: 0px 4px 4px rgb(0 0 0 / 25%); border-radius: 5px; padding: 5px; padding-top:12px'>
                    <center>
                    <h5>Total Cegel</h5>
                    <hr>
                    -= {{ $cegel }} =-
                    </center>
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg" id="leftbanner">
            <ul>
                @foreach($iklans as $key=>$iklan)
                <li class="lokasicd">
                    <a target="_blank" href="{{ $iklan->link }}" title="CD Gratis"><img src="{{ asset('/images/iklan/'.$iklan->img)}}" alt=""></a>
                </li>
                @endforeach
            </ul>
            <div id="shulin">
                <div class="the"><span>&nbsp;</span></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg" id="leftbanner">
            <ul class="leftbanner__image">
                @foreach($buttonLefts as $key=>$buttonLeft)
                <li><a href="{{ $buttonLeft->link }}"><img src="{{ asset('/images/button-home/'.$buttonLeft->img)}}" alt=""></a></li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-lg ml-3" id="shotline">
            <div>
                <div class="he">
                    <h2 class="h_shotline"><span>Seal Hotline</span></h2>
                </div>
                @if($contact_info)
                <ul>
                    <li class="support">
                        <a href="#"><span>support 24 jam</span>{{ $contact_info->contact_info }}</a>
                    </li>
                    <li class="marketing">
                        <a href="#"><span>email</span>{{ $contact_info->email }}</a>
                    </li>
                </ul>
                @endif
            </div>
        </div>
    </div>
</div>