// Password is strong

// Make sure it's at least 15 characters OR at least 8 characters including a number and a lowercase letter.

let submit = document.querySelector('button');
let email = document.querySelector('#email');
let username = document.querySelector('#username');
let phone = document.querySelector('#phone');
let pass = document.querySelector('#pass');
let confermepass = document.querySelector('#confermepass');
let messageErrEmail = document.querySelector('.invalidEmail');
let messageErrPass = document.querySelector('.invalidPass');
let messageErrUsername = document.querySelector('.invalidUsername');
let messageErrConfermepass = document.querySelector('.invalidConfermePass');
let messageErrPhone = document.querySelector('.invalidPhone');
let regexEmail = /(?:[a-z0-9!#$%&'*+\=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/
let regexPass = /^[a-z0-9A-Zéçàèù@\.\$\-]+$/;
let regexUsername = /^[a-z0-9A-Zéçàèù\.\$\-\_]+$/;
let regexPhone = /^[0-9\+]+$/;
email.addEventListener('keyup', ()=>{
    if(regexEmail.test(email.value)){
        messageErrEmail.textContent = '';
        messageErrEmail.classList.remove('border','border-danger','px-2', 'mx-2')
        email.classList.remove('border', 'border-danger')
    }else{
        messageErrEmail.textContent = 'Field is required.';
        messageErrEmail.classList.add('border','rounded-2','border-danger','px-2', 'mx-2')
        email.classList.add('border', 'border-danger')
    }
});
username.addEventListener('keyup', ()=>{
    if(regexUsername.test(username.value)){
        messageErrUsername.textContent = '';
        messageErrUsername.classList.remove('border','border-danger','px-2', 'mx-2')
        username.classList.remove('border', 'border-danger')
    }else{
        messageErrUsername.textContent = 'Field is required.';
        messageErrUsername.classList.add('border','rounded-2','border-danger','px-2', 'mx-2')
        username.classList.add('border', 'border-danger')
    }
});
phone.addEventListener('keyup', ()=>{
    if(regexPhone.test(phone.value)){
        messageErrPhone.textContent = '';
        messageErrPhone.classList.remove('border','border-danger','px-2', 'mx-2')
        phone.classList.remove('border', 'border-danger')
    }else{
        messageErrPhone.textContent = 'Field is required.';
        messageErrPhone.classList.add('border','rounded-2','border-danger','px-2', 'mx-2')
        phone.classList.add('border', 'border-danger')
    }
});
pass.addEventListener('keyup', ()=>{
    if(regexPass.test(pass.value)){
        messageErrPass.textContent = 'Password valid.';
        messageErrPass.classList.remove('border-danger', 'text-success', 'text-danger')
        messageErrPass.classList.add('border-success','px-2', 'mx-2','text-success')
        pass.classList.remove('border', 'border-danger')
    }else{
        messageErrPass.textContent = 'Password invalid.';
        messageErrPass.classList.add('border','rounded-2','border-danger','px-2', 'mx-2', 'text-danger')
        messageErrPass.classList.remove('text-success')
        pass.classList.add('border', 'border-danger')
    }
});
confermepass.addEventListener('keyup', ()=>{
    if(pass.value == confermepass.value){
        messageErrConfermepass.textContent = 'Valid';
        messageErrConfermepass.classList.remove('border-danger', 'text-success', 'text-danger')
        messageErrConfermepass.classList.add('border-success','px-2', 'mx-2','text-success')
        confermepass.classList.remove('border', 'border-danger')
    }else{
        messageErrConfermepass.textContent = 'Invalid';
        messageErrConfermepass.classList.add('border','rounded-2','border-danger','px-2', 'mx-2', 'text-danger')
        messageErrConfermepass.classList.remove('text-success')
        confermepass.classList.add('border', 'border-danger')
    }
});
submit.addEventListener('click', (e)=>{
    if(!regexPass.test(pass.value) && !regexEmail.test(email.value) && !regexUsername.test(username.value)){
        e.preventDefault();
    }
});

