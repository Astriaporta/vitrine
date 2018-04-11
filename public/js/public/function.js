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

function classExistInDom(className) {
  return document.getElementsByClassName(className).length > 0;
}
function classExistInElement(el, className) {
  return el.classList.contains(className);
}

function removeClass(el, className) {
  el.classList.remove(className);
}
function addClass(el, className) {
  if (el.classList) {
    el.classList.add(className);
  } else {
    el.className += ' ' + className;
  }
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

function getTarget(e) {
  if (e.target.childNodes.length <= 0) {
    return e.target.parentNode;
  }
  return e.target;
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
function hamburger_cross(el, isClosed) {
  if (!isClosed) {
    removeClass(el, 'is-open');
    addClass(el, 'is-closed');
  } else {
    removeClass(el, 'is-closed');
    addClass(el, 'is-open');
  }
}

function openNav(btn) {
  removeClass(document.getElementById("mySidenav"), 'is-closed');
  addClass(document.getElementById("mySidenav"), 'is-open');

  removeClass(document.getElementById("main"), 'is-closed');
  addClass(document.getElementById("main"), 'is-open');
  hamburger_cross(btn, true);
}

function closeNav(btn) {
  removeClass(document.getElementById("mySidenav"), 'is-open');
  addClass(document.getElementById("mySidenav"), 'is-closed');

  removeClass(document.getElementById("main"), 'is-open');
  addClass(document.getElementById("main"), 'is-closed');
  hamburger_cross(btn, false);
}

function toggleMenu(e) {
  var btn = getTarget(e);
  if (classExistInElement(btn, 'is-closed')) {
    openNav(btn);
  } else if (classExistInElement(btn, 'is-open')) {
    closeNav(btn);
  }
}

function refreshCaptcha() {
  axios.put('captcha/1')
    .then(responce => {
      document.getElementById('captchaView').innerHTML = responce.data.captcha;
    })
    .catch(error => {
      console.error(error);
    });
}
