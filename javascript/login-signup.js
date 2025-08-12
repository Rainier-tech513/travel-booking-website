let signupform = document.querySelector('.signup-form');
let loginform = document.querySelector('.login-form');

function openSignupForm() {
   
    loginform.classList.add('hide-login-form');
    signupform.classList.add('show-signup-form');
}

function openLoginForm() {

    loginform.classList.remove('hide-login-form');
    signupform.classList.remove('show-signup-form');
}
    

