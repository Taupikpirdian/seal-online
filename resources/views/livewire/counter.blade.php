<!-- Start Blog Details Area -->
<div>
  <div class="row">
      <div class="col-lg-8 col-md-12">
          <div class="blog-details-desc">
          </div>
      </div>
        <div>
          {{-- Success is as dangerous as failure. --}}
          <h1>Hello World!</h1>
          <div style="text-align: center">
            <button wire:click="increment">+ kk</button>
            <h1>{{ $count }}</h1>
            <button wire:click="decrements">- ii</button>
          </div>
        </div>
      </div>
  </div>
</div>
