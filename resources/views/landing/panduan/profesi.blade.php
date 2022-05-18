@extends('layouts.landing')
@section('content')
@include('include.components._header-navigation')
<div class="row mt-5 mb-5">
    
    <!-- left sidebar  -->
    @include('include.components._panduan-navigation')
    <!-- left end sidebar -->

    <!-- content  -->
    <div class="col-lg-9">
        <div class="row feature">
            <div class="col-lg update__seal">
                <h1 id="div1"><span></span> Profesi di SEAL Online</h1>
                <hr>
                <!-- content looping -->
                @foreach($profesis as $key=>$profesi)
                <div class="row mt-3" style="border-bottom: 1px solid lightblue;">
                    <div class="col-lg-4 mb-3">
                        <img style="height: 250px;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt="">
                    </div>
                    <div class="col-lg ml-3 mt-2">
                        <h2>{{ $profesi->title }}</h2>
                        <p class="mt-2">{!! $profesi->desc !!}</p>
                    </div>
                </div>
                @endforeach
                <!-- end content looping -->

                <h1 class="mt-4"><span></span> Skill Dasar</h1>
                <hr>

                <!-- content table  -->
                <!-- content looping -->
                @foreach($skills as $key=>$skill)
                <div class="row mt-2">
                    <div class="col-lg table profesi_table">

                        <div class="row">
                            <div class="col-lg">
                                <img class="mr-2" style="float: left; height: 60px; border: none; box-shadow: none; border-radius: 0px; width: 60px;" src="{{ asset('/images/skill/'.$skill->img)}}" alt="">
                                <h5 class="mt-5"><b>{{ $skill->skill_name }}</b></h5>
                            </div>
                        </div>

                        <table>
                            <tbody>
                                <tr>
                                    <th>Keterangan</th>
                                    <td colspan="5">{{ $skill->ket }}</td>
                                </tr>
                                <tr>
                                    <th>Persyaratan</th>
                                    <td colspan="5">{{ $skill->syarat }}</td>
                                </tr>
                                <tr>
                                    <th>Lv</th>
                                    <th>Skill Poin</th>
                                    <th>ATK</th>
                                    <th>Pemakaian AP</th>
                                    <th>Jarak</th>
                                </tr>
                                <!-- loop level skill -->
                                @foreach($skill->levels as $key=>$level)
                                <tr>
                                    <td>{{ $level->lv }}</td>
                                    <td>{{ $level->skill_point }}</td>
                                    <td>{{ $level->atk }}</td>
                                    <td>{{ $level->pemakaian_ap }}</td>
                                    <td>{{ $level->jarak }}</td>
                                </tr>
                                @endforeach
                                <!-- end loop level skill -->
                            </tbody>
                        </table>

                    </div>
                </div>
                <p>{!! $skill->desc !!}</p>
                <div class="row">
                    <div class="col-lg text-right">
                        <button id="click" class="button_up"><i class="fas fa-arrow-up"></i> Top</button>
                        <hr>
                    </div>
                </div>
                @endforeach
                <!-- end content looping -->
                <!-- end content table  -->
            </div>
        </div>
    </div>
    <!-- end content -->

    <!-- right sidebar -->
    @include('include.components._right-slide')
    <!-- end right sidebar -->

</div>    
@endsection
