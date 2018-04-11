addEvent(document, 'DOMContentLoaded', function () {
  if (isFunction(on)) {
    if (classExistInDom('accordion-button')) {
      [].forEach.call(document.getElementsByClassName('accordion-button'), function (el) {
        on(el, 'click', toggleAccordion);
      });
    }

    if (classExistInDom('parameters-option')) {
      [].forEach.call(document.getElementsByClassName('parameters-option'), function (el) {
        on(el, 'click', toggleActivatedModule);
      });
    }

    on(document.getElementById('saveInfo'), 'click', saveInfos);
    on(document.getElementById('socialSelectLink'), 'change', onChangeChoiseAddingSocial);

    if (classExistInDom('social-edit')) {
      [].forEach.call(document.getElementsByClassName('social-edit'), function (el) {
        on(el, 'click', editSocialLink);
      });
    }

    if (classExistInDom('social-delete')) {
      [].forEach.call(document.getElementsByClassName('social-delete'), function (el) {
        on(el, 'click', deleteSocialLink);
      });
    }
  }
});
