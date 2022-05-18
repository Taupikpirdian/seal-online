@extends('layouts.app')
@section('content')
@livewireStyles
<!-- Start Page Title Area -->
<div class="page-title-area page-title-bg1">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="page-title-content">
                    <h2>Detail Berita</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>Detail Berita</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Details Area -->
<section class="blog-details-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="blog-details-desc">
                </div>
            </div>
            <h1>Hello World!</h1>
            <div style="text-align: center">
              <button wire:click="increment">+</button>
              <h1>{{ $count }}</h1>
              <button wire:click="decrement">-</button>
            </div>
        </div>
    </div>
</section>
<!-- End Blog Details Area -->
  
@endsection
@section('js')
  @livewireScripts
@endsection