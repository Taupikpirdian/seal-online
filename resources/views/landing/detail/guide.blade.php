@extends('layouts.landing')
@section('content')
@include('include.components._header-navigation')
<div class="row mt-5 mb-5">
    
    <!-- left sidebar  -->
    @include('include.components._detail-navigation')
    <!-- left end sidebar -->

    <!-- content  -->
    <div class="col-lg-9">
        <div class="row feature gameUpdate__content">
            <div class="col-lg">
                <h1><span></span> Detail Guide</h1>
                <hr>
                <p>Hai SEALovers,</p>
                <p style="font-size: 13px;" class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam alias illum consequatur nisi libero, neque voluptates. Dolores quasi ducimus aliquam asperiores deserunt nemo a necessitatibus qui nostrum fugit, consequatur atque!</p>
            
            </div>
        </div>
    </div>
    <!-- end content -->

    <!-- right sidebar -->
    @include('include.components._right-slide')
    <!-- end right sidebar -->

</div>    
@endsection