<div class="pabel panel-default">
  <div class="panel-heading" role="tab">
    <h4 class="panel-tittle accordion-header">
      <button role="button" class="accordion-button">
        {{ ucfirst(trans('validation.attributes.social')) }}
      </button>
    </h4>
  </div>
  <div class="panel-collapse accordion-body" role="tabpanel">
    <div class="panel-body">
      <form class="form-row" method="post" action="social">
        {{ csrf_field() }}
        <div class="input-group col-md-3 mt-2">
          <div class="input-group-prepend">
            <span class="input-group-text">Options</span>
          </div>
          <select class="custom-select" name="socialSelectLink" id="socialSelectLink" required>
            <option value="" selected>{{ ucfirst(trans('validation.attributes.choose')) }}...</option>
            @foreach($socialNotUsed as $key => $opt)
              <option value="{{ $key }}">{{ $opt }}</option>
            @endforeach
            <option value="other">{{ ucfirst(trans('validation.attributes.other')) }}</option>
          </select>
        </div>
        <div class="input-group col-md-3 mt-2">
          <div class="input-group-prepend">
            <span class="input-group-text">Prefix</span>
          </div>
          <input type="text" name="prefix" id="socialPrefix" value="" readonly class="form-control" required>
        </div>
        <div class="input-group col-md-3 mt-2">
          <div class="input-group-prepend">
            <span class="input-group-text">{{ ucfirst(trans('validation.attributes.name')) }}</span>
          </div>
          <input type="text" name="name" id="socialName" value="" readonly class="form-control" required>
        </div>
        <div class="input-group col-md-3 mt-2">
          <div class="input-group-prepend">
            <span class="input-group-text">{{ ucfirst(trans('validation.attributes.link')) }}</span>
          </div>
          <input type="text" name="link" id="link" value="" class="form-control">
        </div>
        <div class="input-group col-md-1 mt-2">
          <button type="submit" class="btn btn-primary" name="button" title="{{ ucfirst(trans('validation.attributes.add')) }}">
            <i class="fa fa-plus"></i>
          </button>
        </div>
      </form>
      <hr>
      <div class="form-horizontal">
        @foreach($socialUse as $social)
          <div class="input-group input-lg mt-4">
            <div class="input-group-prepend">
              <span class="input-group-text" title="{{ $social->name }}">
                <i class="fab fa-{{ $social->prefix }} fa-lg"></i>
              </span>
            </div>
            <input id="{{ $social->prefix }}" type="text" class="form-control"
              value="{{ $social->link }}" name="{{ $social->prefix }}">
            <div class="input-group-append">
              <button type="button" class="btn btn-outline-secondary social-edit"
               data-id="{{ $social->id }}" data-prefix="{{ $social->prefix }}"
               data-name="{{ $social->name }}"><i class="fa fa-edit"></i></button>
              <button type="button" class="btn btn-outline-secondary social-delete"
               data-id="{{ $social->id }}"><i class="fa fa-times"></i></button>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
