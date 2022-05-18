@extends('layouts.landing')
@section('content')
@include('include.components._header-navigation')
<div class="row mt-5 mb-5">
    
    <!-- left sidebar  -->
    @include('include.components._panduan-navigation')
    <!-- left end sidebar -->

    <!-- content  -->
    <div class="col-lg-9">
        @if($intro)
        <h1 class="header"><span></span> {{ $intro->title }}</h1>
        <hr class="border-header">

        <div class="row mb-5">
            <div class="col-lg">
                <!-- <img class="mr-3" style="width: 250px; float:left;" src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""> -->
                <p>{!! $intro->desc !!}</p>
            </div>
        </div>
        @endif

        <div class="row">
            <div class="col-lg gameUpdate__content">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" href="#tab1" role="tab" data-toggle="tab">Kepala</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab2" role="tab" data-toggle="tab">Baju</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab3" role="tab" data-toggle="tab">Sepatu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab4" role="tab" data-toggle="tab">Perisai</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab5" role="tab" data-toggle="tab">Senjata</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab6" role="tab" data-toggle="tab">Kostum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tab7" role="tab" data-toggle="tab">Aksesoris</a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="row">
                    <div class="col-lg tab-content">
                        <div class="row mt-2 feature tab-pane active" id="tab1">
                            <div class="col-lg">
                                <div class="row tabs-content_game">
                                    <div class="col-lg content__tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="">
                                                <a class="active" href="#tabs1" data-toggle="tab">Beginner</a>
                                            </li>
                                            <li>
                                                <a class="" href="#tabs2" data-toggle="tab">Warrior</a>
                                            </li>
                                            <li>
                                                <a href="#tabs3" role="tab" data-toggle="tab">Knight</a>
                                            </li>
                                            <li>
                                                <a href="#tabs4" role="tab" data-toggle="tab">Magician</a>
                                            </li>
                                            <li>
                                                <a href="#tabs5" role="tab" data-toggle="tab">Cleric</a>
                                            </li>
                                            <li>
                                                <a href="#tabs6" role="tab" data-toggle="tab">Clown</a>
                                            </li>
                                            <li>
                                                <a href="#tabs7" role="tab" data-toggle="tab">Craftsman</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg tab-content">
                                        <div class="row mt-3 tab-pane active" id="tabs1">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                            <p>@if($kepala_beginner) {!! $kepala_beginner->desc !!} @endif</p>
                                            </div>

                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs2">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                            <p>@if($kepala_warrior) {!! $kepala_warrior->desc !!} @endif</p>
                                            </div>

                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs3">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                            <p>@if($kepala_knight) {!! $kepala_knight->desc !!} @endif</p>
                                            </div>

                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs4">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                            <p>@if($kepala_magician) {!! $kepala_magician->desc !!} @endif</p>
                                            </div>

                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs5">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                            <p>@if($kepala_cleric) {!! $kepala_cleric->desc !!} @endif</p>
                                            </div>

                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs6">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                            <p>@if($kepala_clown) {!! $kepala_clown->desc !!} @endif</p>
                                            </div>

                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs7">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                            <p>@if($kepala_craftsman) {!! $kepala_craftsman->desc !!} @endif</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2 feature tab-pane" id="tab2">
                            <div class="col-lg">
                                <div class="row tabs-content_game">
                                    <div class="col-lg content__tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="">
                                                <a class="active" href="#tabs1" data-toggle="tab">Beginner</a>
                                            </li>
                                            <li>
                                                <a class="" href="#tabs2" data-toggle="tab">Warrior</a>
                                            </li>
                                            <li>
                                                <a href="#tabs3" role="tab" data-toggle="tab">Knight</a>
                                            </li>
                                            <li>
                                                <a href="#tabs4" role="tab" data-toggle="tab">Magician</a>
                                            </li>
                                            <li>
                                                <a href="#tabs5" role="tab" data-toggle="tab">Cleric</a>
                                            </li>
                                            <li>
                                                <a href="#tabs6" role="tab" data-toggle="tab">Clown</a>
                                            </li>
                                            <li>
                                                <a href="#tabs7" role="tab" data-toggle="tab">Craftsman</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg tab-content">
                                        <div class="row mt-3 tab-pane active" id="tabs1">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($baju_beginner) {!! $baju_beginner->desc !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs2">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($baju_warrior) {!! $baju_warrior->desc !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs3">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($baju_knight) {!! $baju_knight->desc !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs4">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($baju_magician) {!! $baju_magician->desc !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs5">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($baju_cleric) {!! $baju_cleric->desc !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs6">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($baju_clown) {!! $baju_clown->desc !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs7">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($baju_craftsman) {!! $baju_craftsman->desc !!} @endif</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2 feature tab-pane" id="tab3">
                            <div class="col-lg">
                                <div class="row tabs-content_game">
                                    <div class="col-lg content__tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="">
                                                <a class="active" href="#tabs1" data-toggle="tab">Beginner</a>
                                            </li>
                                            <li>
                                                <a class="" href="#tabs2" data-toggle="tab">Warrior</a>
                                            </li>
                                            <li>
                                                <a href="#tabs3" role="tab" data-toggle="tab">Knight</a>
                                            </li>
                                            <li>
                                                <a href="#tabs4" role="tab" data-toggle="tab">Magician</a>
                                            </li>
                                            <li>
                                                <a href="#tabs5" role="tab" data-toggle="tab">Cleric</a>
                                            </li>
                                            <li>
                                                <a href="#tabs6" role="tab" data-toggle="tab">Clown</a>
                                            </li>
                                            <li>
                                                <a href="#tabs7" role="tab" data-toggle="tab">Craftsman</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg tab-content">
                                        <div class="row mt-3 tab-pane active" id="tabs1">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($sepatu_beginner) {!! $sepatu_beginner->desc !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs2">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($sepatu_warrior) {!! $sepatu_warrior->desc !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs3">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($sepatu_knight) {!! $sepatu_knight->desc !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs4">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($sepatu_magician) {!! $sepatu_magician->desc !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs5">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($sepatu_cleric) {!! $sepatu_cleric->desc !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs6">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($sepatu_clown) {!! $sepatu_clown->desc !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs7">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($sepatu_craftsman) {!! $sepatu_craftsman->desc !!} @endif</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2 feature tab-pane" id="tab4">
                            <div class="col-lg">
                                <div class="row tabs-content_game">
                                    <div class="col-lg content__tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="">
                                                <a class="active" href="#tabs1" data-toggle="tab">Beginner</a>
                                            </li>
                                            <li>
                                                <a class="" href="#tabs2" data-toggle="tab">Warrior</a>
                                            </li>
                                            <li>
                                                <a href="#tabs3" role="tab" data-toggle="tab">Knight</a>
                                            </li>
                                            <li>
                                                <a href="#tabs4" role="tab" data-toggle="tab">Magician</a>
                                            </li>
                                            <li>
                                                <a href="#tabs5" role="tab" data-toggle="tab">Cleric</a>
                                            </li>
                                            <li>
                                                <a href="#tabs6" role="tab" data-toggle="tab">Clown</a>
                                            </li>
                                            <li>
                                                <a href="#tabs7" role="tab" data-toggle="tab">Craftsman</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg tab-content">
                                        <div class="row mt-3 tab-pane active" id="tabs1">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($perisai_beginner) {!! $perisai_beginner !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs2">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($perisai_warrior) {!! $perisai_warrior !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs3">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($perisai_knight) {!! $perisai_knight !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs4">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($perisai_magician) {!! $perisai_magician !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs5">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($perisai_cleric) {!! $perisai_cleric !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs6">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($perisai_clown) {!! $perisai_clown !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs7">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($perisai_craftsman) {!! $perisai_craftsman !!} @endif</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2 feature tab-pane" id="tab5">
                            <div class="col-lg">
                                <div class="row tabs-content_game">
                                    <div class="col-lg content__tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="">
                                                <a class="active" href="#tabs1" data-toggle="tab">Beginner</a>
                                            </li>
                                            <li>
                                                <a class="" href="#tabs2" data-toggle="tab">Warrior</a>
                                            </li>
                                            <li>
                                                <a href="#tabs3" role="tab" data-toggle="tab">Knight</a>
                                            </li>
                                            <li>
                                                <a href="#tabs4" role="tab" data-toggle="tab">Magician</a>
                                            </li>
                                            <li>
                                                <a href="#tabs5" role="tab" data-toggle="tab">Cleric</a>
                                            </li>
                                            <li>
                                                <a href="#tabs6" role="tab" data-toggle="tab">Clown</a>
                                            </li>
                                            <li>
                                                <a href="#tabs7" role="tab" data-toggle="tab">Craftsman</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg tab-content">
                                        <div class="row mt-3 tab-pane active" id="tabs1">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($senjata_beginner) {!! $senjata_beginner !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs2">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($senjata_warrior) {!! $senjata_warrior !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs3">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($senjata_knight) {!! $senjata_knight !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs4">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($senjata_magician) {!! $senjata_magician !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs5">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($senjata_cleric) {!! $senjata_cleric !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs6">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($senjata_clown) {!! $senjata_clown !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs7">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($senjata_craftsman) {!! $senjata_craftsman !!} @endif</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2 feature tab-pane" id="tab6">
                            <div class="col-lg">
                                <div class="row tabs-content_game">
                                    <div class="col-lg content__tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="">
                                                <a class="active" href="#tabs1" data-toggle="tab">Beginner</a>
                                            </li>
                                            <li>
                                                <a class="" href="#tabs2" data-toggle="tab">Warrior</a>
                                            </li>
                                            <li>
                                                <a href="#tabs3" role="tab" data-toggle="tab">Knight</a>
                                            </li>
                                            <li>
                                                <a href="#tabs4" role="tab" data-toggle="tab">Magician</a>
                                            </li>
                                            <li>
                                                <a href="#tabs5" role="tab" data-toggle="tab">Cleric</a>
                                            </li>
                                            <li>
                                                <a href="#tabs6" role="tab" data-toggle="tab">Clown</a>
                                            </li>
                                            <li>
                                                <a href="#tabs7" role="tab" data-toggle="tab">Craftsman</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg tab-content">
                                        <div class="row mt-3 tab-pane active" id="tabs1">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($kostum_beginner) {!! $kostum_beginner !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs2">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($kostum_warrior) {!! $kostum_warrior !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs3">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($kostum_knight) {!! $kostum_knight !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs4">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($kostum_magician) {!! $kostum_magician !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs5">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($kostum_cleric) {!! $kostum_cleric !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs6">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($kostum_clown) {!! $kostum_clown !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs7">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($kostum_craftsman) {!! $kostum_craftsman !!} @endif</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2 feature tab-pane" id="tab7">
                            <div class="col-lg">
                                <div class="row tabs-content_game">
                                    <div class="col-lg content__tabs">
                                        <ul class="nav nav-tabs">
                                            <li class="">
                                                <a class="active" href="#tabs1" data-toggle="tab">Beginner</a>
                                            </li>
                                            <li>
                                                <a class="" href="#tabs2" data-toggle="tab">Warrior</a>
                                            </li>
                                            <li>
                                                <a href="#tabs3" role="tab" data-toggle="tab">Knight</a>
                                            </li>
                                            <li>
                                                <a href="#tabs4" role="tab" data-toggle="tab">Magician</a>
                                            </li>
                                            <li>
                                                <a href="#tabs5" role="tab" data-toggle="tab">Cleric</a>
                                            </li>
                                            <li>
                                                <a href="#tabs6" role="tab" data-toggle="tab">Clown</a>
                                            </li>
                                            <li>
                                                <a href="#tabs7" role="tab" data-toggle="tab">Craftsman</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg tab-content">
                                        <div class="row mt-3 tab-pane active" id="tabs1">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($aksesoris_beginner) {!! $aksesoris_beginner !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs2">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($aksesoris_warrior) {!! $aksesoris_warrior !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs3">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($aksesoris_knight) {!! $aksesoris_knight !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs4">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($aksesoris_magician) {!! $aksesoris_magician !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs5">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($aksesoris_cleric) {!! $aksesoris_cleric !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs6">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($aksesoris_clown) {!! $aksesoris_clown !!} @endif</p>
                                            </div>
                                        </div>
                                        <div class="row mt-3 tab-pane" id="tabs7">
                                            <div class="col-lg table_barang text-center">
                                                <!-- <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Gambar</th>
                                                            <th>Nama</th>
                                                            <th>Status</th>
                                                            <th>Syarat</th>
                                                            <th>Profesi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><img src="{{ asset('/front/assets/images/bg_body.jpg') }}" alt=""></td>
                                                            <td>Fabric Hat</td>
                                                            <td>Def 10</td>
                                                            <td>Str 11 Agi 5 Level 3</td>
                                                            <td>Beginner Warrior</td>
                                                        </tr>
                                                    </tbody>
                                                </table> -->
                                                <p>@if($aksesoris_craftsman) {!! $aksesoris_craftsman !!} @endif</p>
                                            </div>
                                        </div>
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