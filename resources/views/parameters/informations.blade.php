<div class="pabel panel-default">
  <div class="panel-heading" role="tab">
    <h4 class="panel-tittle accordion-header">
      <button role="button" class="accordion-button">
        {{ ucfirst(trans('validation.attributes.infos')) }}
      </button>
    </h4>
  </div>
  <div class="panel-collapse accordion-body" role="tabpanel">
    <div class="panel-body">
      <div class="form-horizontal px-4">
        <div class="input-group input-lg mt-4">
          <div class="input-group-prepend">
            <span class="input-group-text">{{ ucfirst(trans('validation.attributes.name')) }}</span>
          </div>
          <input id="name" type="text" class="form-control" value="{{ $informations->name }}" name="name" required>
        </div>
        <div class="input-group input-lg mt-4">
          <div class="input-group-prepend">
            <span class="input-group-text">{{ ucfirst(trans('validation.attributes.address')) }}</span>
          </div>
          <input id="address" type="text" class="form-control" value="{{ $informations->address }}" name="address">
        </div>
        <div class="input-group input-lg mt-4">
          <div class="input-group-prepend">
            <span class="input-group-text">{{ ucfirst(trans('validation.attributes.postal-code')) }}</span>
          </div>
          <input id="postalcode" type="text" class="form-control mr-2" value="{{ $informations->postalcode }}" name="postalcode">

          <div class="input-group-prepend ml-2">
            <span class="input-group-text">{{ ucfirst(trans('validation.attributes.city')) }}</span>
          </div>
          <input id="city" type="text" class="form-control" value="{{ $informations->city }}" name="city">
        </div>

        <div class="input-group input-lg mt-4">
          <div class="input-group-prepend">
            <span class="input-group-text">{{ ucfirst(trans('validation.attributes.country')) }}</span>
          </div>
          <input id="country" type="text" class="form-control" value="{{ $informations->country }}" name="country">
        </div>

        <div class="input-group input-lg mt-4">
          <div class="input-group-prepend">
            <span class="input-group-text">{{ ucfirst(trans('validation.attributes.phone-number')) }}</span>
          </div>
          <input id="phone" type="text" class="form-control" value="{{ $informations->phone }}" name="phone">
        </div>

        <div class="input-group input-lg mt-4">
          <div class="input-group-prepend">
            <span class="input-group-text">{{ ucfirst(trans('validation.attributes.email')) }}</span>
          </div>
          <input id="email" type="email" class="form-control" value="{{ $informations->email }}" name="email">
        </div>
        <div class="input-group input-lg mt-4 pb-4">
          <button type="button" class="btn btn-primary " name="{{ $informations->id }}" id="saveInfo">
            {{ ucfirst(trans('validation.attributes.save')) }}
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
