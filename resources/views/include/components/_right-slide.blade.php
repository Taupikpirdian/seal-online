<div class="col-lg" id="menusc">
    <div class="row">
        <div class="col-lg">
            <div class="ccc">
                <ul>
                    @foreach($buttonRights as $key=>$buttonRight)
                    <li><a href="{{ $buttonRight->link }}"><img src="{{ asset('/images/button-home/'.$buttonRight->img)}}" alt=""></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>