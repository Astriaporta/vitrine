function toggleActivatedModule(e) {
  var target = e.target,
    param = {
      activated: 1
    },
    id = target.name;

  if (!target.checked) {
    param.activated = 0;
  }

  axios.put('modules/' + id, param)
    .catch(error => {
      console.error(error);
    });
}

function saveInfos(e) {
  var param = {
    name: document.getElementById('name').value,
    address: document.getElementById('address').value,
    postalcode: document.getElementById('postalcode').value,
    city: document.getElementById('city').value,
    country: document.getElementById('country').value,
    phone: document.getElementById('phone').value,
    email: document.getElementById('email').value
  };

  axios.put('informations/' + e.target.name, param)
    .catch(error => {
      console.error(error);
    });
}

function onChangeChoiseAddingSocial(e) {
  var selectedOtion = getSelectedOption(e.target),
    socialPrefix = document.getElementById('socialPrefix'),
    socialName = document.getElementById('socialName');

  if (selectedOtion.value == 'other') {
    socialPrefix.readOnly = false;
    socialName.readOnly = false;
  } else {
    socialPrefix.readOnly = true;
    socialName.readOnly = true;
    socialPrefix.value = selectedOtion.value;
    socialName.value = selectedOtion.text;
  }
}

function editSocialLink(e) {
  var elem = getTarget(e),
    param = elem.dataset;

  param.link = document.getElementById(param.prefix).value;

  axios.put('social/' + param.id, param)
    .catch(error => {
      console.error(error);
    });
}

function deleteSocialLink(e) {
  var elem = getTarget(e);

  axios.delete('social/' + elem.dataset.id)
    .then(responce => {
      location.reload();
    })
    .catch(error => {
      console.error(error);
    });
}
