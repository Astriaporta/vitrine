<div class="input-group input-lg mt-4 px-3">
  <div class="row">
    <div class="captcha mb-2">
      <span id="captchaView">{!! captcha_img() !!}</span>
      <button type="button" id="captchaRefresh" class="btn btn-success btn-refresh ml-1"><i class="fa fa-sync-alt"></i></button>
    </div>
    <input id="captcha" type="text" class="form-control{{ $errors->has('captcha') ? ' has-error' : '' }}"
      placeholder="{{ ucfirst(trans('validation.attributes.enter-captcha')) }}" name="captcha">
  </div>
</div>
