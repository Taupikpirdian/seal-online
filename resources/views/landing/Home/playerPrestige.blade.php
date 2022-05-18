@extends('layouts.landing')
@section('content')
@include('include.components._header-navigation')
<div class="row mt-5 mb-5">
    
    <!-- left sidebar  -->
    @include('include.components._left-slide')
    <!-- left end sidebar -->

    <!-- content  -->
    <div class="col-lg-8">
        <div class="row player">
            <div class="col-lg">
                <h1 class="text-center">Player Prestige</h1>
                <hr>
                <div class="row mt-4">
                    <div class="col-lg">
                        <!-- Tab panes -->
                        <div class="row">
                            <div class="col-lg tab-content">
                                <div class="row mt-5 tab-pane active" id="tab1">
                                    <div class="col-lg">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Rank</th>
                                                    <th>Nickname</th>
                                                    <th>Class</th>
                                                    <th>Inventary Cegles</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($rank_cegels as $key=>$rank_cegel)
                                                <tr>
                                                    <td><span class="btn btn-primary">{{ $rank_cegel->rank }}</span></td>
                                                    <td>{{ $rank_cegel->char_name }}</td>
                                                    <td width="150px">
                                                        <!-- <img class="mt-1 ml-4" src="{{ asset('/front/assets/images/bg_body.jpg') }}" style="width: 57px; float: left;" alt=""> -->
                                                        <p class="btn btn-primary mt-1">{{ $rank_cegel->title_job }}</p>
                                                    </td>
                                                    <td>
                                                        <p class="text-success mt-1">{{ $rank_cegel->total }}</p>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </div>
    <!-- end content -->

    <!-- right sidebar -->
    @include('include.components._right-slide')
    <!-- end right sidebar -->

</div>    
@endsection