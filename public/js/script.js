axios.defaults.headers.common['Authorization'] = document.getElementById('csrfToken').content;

addEvent(document, 'DOMContentLoaded', function () {
  if (isFunction(on)) {
    if (document.getElementsByClassName('accordion-button').length > 0) {
      [].forEach.call(document.getElementsByClassName('accordion-button'), function (el) {
        on(el, 'click', toggleAccordion);
      });
    }

    if (document.getElementsByClassName('parameters-option').length > 0) {
      [].forEach.call(document.getElementsByClassName('parameters-option'), function (el) {
        on(el, 'click', toggleActivatedModule);
      });
    }

    on(document.getElementById('saveInfo'), 'click', saveInfos);
    on(document.getElementById('socialSelectLink'), 'change', onChangeChoiseAddingSocial);

    if (document.getElementsByClassName('social-edit').length > 0) {
      [].forEach.call(document.getElementsByClassName('social-edit'), function (el) {
        on(el, 'click', editSocialLink);
      });
    }

    if (document.getElementsByClassName('social-delete').length > 0) {
      [].forEach.call(document.getElementsByClassName('social-delete'), function (el) {
        on(el, 'click', deleteSocialLink);
      });
    }

    on(document.getElementById('openNavBtn'), 'click', openNav);
    on(document.getElementById('closeNavBtn'), 'click', closeNav);
  }
});
