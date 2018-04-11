axios.defaults.headers.common['Authorization'] = document.getElementById('csrfToken').content;

addEvent(document, 'DOMContentLoaded', function () {
  if (isFunction(on)) {
    on(document.getElementById('btnMenu'), 'click', toggleMenu);
    on(document.getElementById('captchaRefresh'), 'click', refreshCaptcha);
  }
});
