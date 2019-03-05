$(document).ready(function () {
  $('.modal').modal();
  $('.carousel').carousel();
});

function smoothScrollBegin() {
  var element = document.getElementById("inicio");
  element.scrollIntoView({ behavior: "smooth", block: "start" });
}

function smoothScrollContact() {
  var element = document.getElementById("contato");
  element.scrollIntoView({ behavior: "smooth", block: "end" });
}

function setActive(id) {
  var element = document.getElementById(id);
  if (element == 'list-item1') {
    if (document.getElementById('list-item2').classList.contains('active')) {
      document.getElementById('list-item2').classList.remove('active')
    } else {
      element.classList.add('active');
    }
  } else if (element == 'list-item2') {
    if (document.getElementById('list-item1').classList.contains('active')) {
      document.getElementById('list-item1').classList.remove('active')
    } else {
      element.classList.add('active');
    }
  }
}

function showHidePwd(){
  var element = document.getElementById("password");
  var btn = document.getElementById("visibility");
  if(element.type == "password"){
    element.type = "text";
    if(btn.classList.contains('grey-text')){
      btn.classList.remove('grey-text');
      btn.classList.add('teal-text');
    }
  }else{
    element.type = "password";
    if(btn.classList.contains('teal-text')){
      btn.classList.remove('teal-text');
      btn.classList.add('grey-text');
    }
  }
}
