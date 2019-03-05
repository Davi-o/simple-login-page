$(document).ready(function(){
    $('.modal').modal();
    $('.carousel').carousel();
});

function smoothScrollBegin(){
  var element = document.getElementById("inicio");
  element.scrollIntoView({behavior: "smooth", block: "start"});
}

function smoothScrollContact(){
  var element = document.getElementById("contato");
  element.scrollIntoView({behavior: "smooth", block: "end"});
}