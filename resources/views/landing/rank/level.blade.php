@extends('layouts.landing')
@section('content')
<div class="row mt-5 mb-5 profile">    
    <!-- left sidebar  -->
    @include('include.components._left-slide')
    <!-- left end sidebar -->

    <div class="col-lg-8 content__right ml-2">
        <div class="row profile__content">
            <div class="col-lg">
                <h1 class="font-weight-bold">Rank Level</h1>
                <div class="row mt-5 tab-pane player active" id="tab1">
                    <div class="col-lg">
                        <table>
                            <thead>
                                <tr>
                                    <th>Position Rank</th>
                                    <th>Nama Karakter</th>
                                    <th>Level</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $r=0;
                                @endphp
				                @foreach ($top_kills as $key => $top_kill)
                                @php
                                    $r=($top_kills->currentpage()-1) * $top_kills->perpage() + $key + 1;
                                @endphp
                                <tr>
                                    @if($r == 1)
                                        <td>
				                            <img src="{{asset('front/assets/emblem/guild/firstpad.gif')}}" width="50px" alt="Win1">
                                        </td>
                                    @elseif($r == 2)
                                        <td>
				                            <img src="{{asset('front/assets/emblem/guild/2emblem.gif')}}" alt="Win1">
                                        </td>
                                    @elseif($r == 3)
                                        <td>
        				                    <img src="{{asset('front/assets/emblem/guild/3emblem.gif')}}" alt="Win1">
                                        </td>
                                    @else
                                    <td>
				                        {{$r}}
                                    </td>
                                    @endif
                                    <td>{{ $top_kill->char_name }}</td>
                                    <td>{{ $top_kill->level }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <br>
                        {!! $top_kills->appends(request()->except('page'))->links() !!}
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
