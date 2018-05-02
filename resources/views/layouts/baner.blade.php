<section class="mt-0 mb-0 text-light backgroung-bnr">
  <div class="transparent">
    @include('layouts.menu.open')
    <div class="container">
      <div class="row justify-content-center header-h60  align-items-center">
        <div class="col-sm-12 col-md-8 align-content-center d-flex-row mt-3 mb-5 text-center">
          <h1 class="second-title mb-xs-0 mb-4 align-self-center">
            <a href="/" class="text-light">
              <strong>{{ config('app.name', 'Vitrine') }}</strong>
            </a>
          </h1>
          <div class="btn-container mt-1 btn-stack-lg">
            @include('layouts.components.social')
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
