// JavaScript Document

function mostrar(enla) {
  obj = document.getElementById('cohete');
  obj.style.visibility = (obj.style.visibility == 'hidden') ? 'visible' : 'hidden';
  enla.innerHTML = (enla.innerHTML == '-') ? '+' : '-';
  
  obj = document.getElementById('nave');
  obj.style.visibility = (obj.style.visibility == 'hidden') ? 'visible' : 'hidden';
  enla.innerHTML = (enla.innerHTML == '-') ? '+' : '-';
}


