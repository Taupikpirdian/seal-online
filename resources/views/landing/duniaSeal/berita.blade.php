@extends('layouts.landing')
@section('content')
@include('include.components._header-navigation')
<div class="row mt-5 mb-5">
    
    <!-- left sidebar  -->
    @include('include.components._left-slide_navigation')
    <!-- left end sidebar -->

    <!-- content  -->
    <div class="col-lg-9">
        <div class="row">
            <div class="col-lg">
                <div id="newsbox" class="mt-3 newsbox_content newscontent">
                    <div id="news1">
                        <table>
                            <thead class="head">
                                <th><span class="fas fa-circle"></span> Topik</th>
                                <th>Tanggal</th>
                            </thead>
                            <tbody>
                            @foreach($beritas as $key=>$berita)
                                <tr>
                                    <td><span class="c_berita"><a href='{{URL::action("HomeController@detailBerita",array($berita->slug))}}'>{{ $berita->title }}</a></span></td>
                                    <td><p>{{ $berita->created_at }}</p></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
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