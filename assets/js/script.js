"use strict";

if(document.getElementById('hidePsw')){
    const hidePswIconHTML = document.getElementById('hidePsw');
    const pswInputHTML = document.getElementById('password');

    hidePswIconHTML.addEventListener('click', () => {
        hidePswIconHTML.classList.toggle('active');
        if (pswInputHTML.type === "password") {
            pswInputHTML.type = "text";
          } else {
            pswInputHTML.type = "password";
          }
    })
}

const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);

if (urlParams.has('error') && urlParams.get('error') == 'password') {
  const pswInputHTML = document.getElementById('password');
  pswInputHTML.classList.add('input-error');
  const errorMessage = document.createElement('small');
  errorMessage.innerHTML = `La password deve essere lunga almeno 4 caratteri!`
  errorMessage.style.color = 'red';
  errorMessage.style.paddingTop = '4px';
  pswInputHTML.parentNode.insertBefore(errorMessage, pswInputHTML.nextSibling);
} else if(urlParams.has('error') && urlParams.get('error') == 'email'){
  const emailInputHTML = document.getElementById('email');
  emailInputHTML.classList.add('input-error');
  const errorMessage = document.createElement('small');
  errorMessage.innerHTML = `L'email inserita non è valida! ex. marioRossi@prova.it`
  errorMessage.style.color = 'red';
  errorMessage.style.paddingTop = '4px';
  emailInputHTML.parentNode.insertBefore(errorMessage, emailInputHTML.nextSibling);
} else if(urlParams.has('error') && urlParams.get('error') == 'not-found'){
  const titleHTML = document.getElementById('title');
  titleHTML.classList.add('input-error');
  const errorMessage = document.createElement('p');
  errorMessage.innerHTML = `<i class="fa-solid fa-circle-xmark"></i> Utente non trovato!`
  errorMessage.style.color = 'red';
  errorMessage.style.padding = '10px';
  titleHTML.parentNode.insertBefore(errorMessage, titleHTML.nextSibling);
} else if(urlParams.has('error') && urlParams.get('error') == 'nome'){
  const nomeInputHTML = document.getElementById('nome');
  nomeInputHTML.classList.add('input-error');
  const errorMessage = document.createElement('small');
  errorMessage.innerHTML = `Il nome deve essere lungo almeno 4 caratteri!`
  errorMessage.style.color = 'red';
  errorMessage.style.paddingTop = '4px';
  nomeInputHTML.parentNode.insertBefore(errorMessage, nomeInputHTML.nextSibling);
} else if(urlParams.has('error') && urlParams.get('error') == 'cognome'){
  const cognomeInputHTML = document.getElementById('cognome');
  cognomeInputHTML.classList.add('input-error');
  const errorMessage = document.createElement('small');
  errorMessage.innerHTML = `Il cognome deve essere lungo almeno 4 caratteri!`
  errorMessage.style.color = 'red';
  errorMessage.style.paddingTop = '4px';
  cognomeInputHTML.parentNode.insertBefore(errorMessage, cognomeInputHTML.nextSibling);
} else if(urlParams.has('error') && urlParams.get('error') == 'user-exist'){
  const titleHTML = document.getElementById('title');
  titleHTML.classList.add('input-error');
  const errorMessage = document.createElement('p');
  errorMessage.innerHTML = `<i class="fa-solid fa-circle-xmark"></i> L'indirizzo email è già esistente! Per favore inseriscine un altro.`
  errorMessage.style.color = 'red';
  errorMessage.style.padding = '10px';
  titleHTML.parentNode.insertBefore(errorMessage, titleHTML.nextSibling);
}