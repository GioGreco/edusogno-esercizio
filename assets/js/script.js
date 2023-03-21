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