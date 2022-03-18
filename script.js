// Password is strong

// Make sure it's at least 15 characters OR at least 8 characters including a number and a lowercase letter.

let submit = document.querySelector('button');
let email = document.querySelector('#email');
console.log(email.value)
let pass = document.querySelector('#pass');
let messageErrEmail = document.querySelector('.invalidEmail');
let messageErrPass = document.querySelector('.invalidPass');
let regexEmail = /(?:[a-z0-9!#$%&'*+\=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/
let regexPass = /^[a-zA-Zéçàèù@\.\$\-]+$/;
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
pass.addEventListener('keyup', ()=>{
    if(regexPass.test(pass.value)){
        messageErrPass.textContent = '';
        messageErrPass.classList.remove('border','border-danger','px-2', 'mx-2')
        pass.classList.remove('border', 'border-danger')
    }else{
        messageErrPass.textContent = 'Field is required.';
        messageErrPass.classList.add('border','rounded-2','border-danger','px-2', 'mx-2')
        pass.classList.add('border', 'border-danger')
    }
});
submit.addEventListener('click', (e)=>{
    if(!regexPass.test(pass.value) && !regexPass.test(pass.value)){
        e.preventDefault();
    }
});

