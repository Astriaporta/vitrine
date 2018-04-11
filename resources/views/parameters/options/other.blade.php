<div class="pabel panel-default">
  <div class="panel-heading" role="tab">
    <h4 class="panel-tittle accordion-header">
      <button role="button" class="accordion-button">{{ ucfirst(trans('validation.attributes.other-options')) }}</button>
    </h4>
  </div>
  <div class="panel-collapse accordion-body" role="tabpanel">
    <div class="panel-body">
      <table class="table">
        <tbody>
          @foreach($modules as $item)
            @if(!in_array($item->prefix, ['parameters', 'login', 'logout']))
              <tr>
                <td>{{ ucfirst(trans('menu.' .  str_replace('/', '-', $item->prefix))) }}</td>
                <td>
                  <input type="checkbox" class="parameters-option"
                   name="{{ $item->id }}" value="1" {{ ($item->activated ? 'checked' : '') }}>
                </td>
              </tr>
            @endif
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
