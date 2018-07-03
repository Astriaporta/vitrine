<section class="mt-0 mb-0 text-light backgroung-bnr">
  <div class="transparent">
    @include('layouts.menu.open')
    <div class="container">
      <div class="justify-content-center header-h60  align-items-center">
        <div class="pt-3 pb-5">
          <h1 class="second-title mb-xs-0 mb-4 text-center">
            <a href="/" class="text-light">
              <strong>{{ config('app.name', 'Vitrine') }}</strong>
            </a>
          </h1>
          @include('layouts.components.social')
        </div>
      </div>
    </div>
  </div>
</section>
