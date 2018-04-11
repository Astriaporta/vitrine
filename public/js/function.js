function isFunction(e) {
  return e !== null && typeof e === 'function';
}
function addEvent(el, eventName, eventHandler) {
  if (el.addEventListener) {
    el.addEventListener(eventName, eventHandler, false);
  } else if (el.attachEvent) {
    el.attachEvent("on" + eventName, eventHandler);
  }
}
function on(dom, event, fn) {
    if (null == dom)
        return;

    if (!isFunction(fn)) {
        eco(' n\'existe pas.');
        return;
    }
    addEvent(dom, event, fn);
}

function getSelectedText(elt) {
  if (elt.selectedIndex == -1)
    return null;

  return elt.options[elt.selectedIndex].text;
}

function getSelectedOption(e) {
  return {
    text:getSelectedText(e),
    value: e.value
  };
}

function toggleAccordion(e) {
  e.target.parentNode.classList.toggle("active");
  var panel = e.target.parentNode.parentNode.nextElementSibling;
  if (panel.style.maxHeight){
    panel.style.maxHeight = null;
  } else {
    panel.style.maxHeight = panel.scrollHeight + "px";
  }
}

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
  var elem = e.target;

  if (e.target.childNodes.length <= 0) {
    elem = e.target.parentNode;
  }

  var param = elem.dataset;
  param.link = document.getElementById(param.prefix).value;

  axios.put('social/' + param.id, param)
    .catch(error => {
      console.error(error);
    });
}

function deleteSocialLink(e) {
  var elem = e.target;

  if (e.target.childNodes.length <= 0) {
    elem = e.target.parentNode;
  }

  axios.delete('social/' + elem.dataset.id)
    .then(responce => {
      location.reload();
    })
    .catch(error => {
      console.error(error);
    });
}

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.getElementById('openNavBtn').style.display = 'none';
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.getElementById('openNavBtn').style.display = '';
}
