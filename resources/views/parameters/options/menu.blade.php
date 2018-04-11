<div class="pabel panel-default">
  <div class="panel-heading" role="tab">
    <h4 class="panel-tittle accordion-header">
      <button role="button" class="accordion-button">{{ ucfirst(trans('validation.attributes.menu')) }}</button>
    </h4>
  </div>
  <div class="panel-collapse accordion-body" role="tabpanel">
    <div class="panel-body">
      <table class="table">
        <tbody>
          @foreach($menuListe as $item)
            @if(!in_array($item->prefix, ['parameters']))
              <tr>
                <td>{{ ucfirst(trans('menu.' . ($item->prefix != null ? str_replace('/', '-', $item->prefix) : 'home'))) }}</td>
                <td>
                  <input type="checkbox" class="parameters-option" name="{{ $item->id }}"
                   value="1" {{ ($item->activated ? 'checked' : '') }}>
                </td>
              </tr>
            @endif
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
