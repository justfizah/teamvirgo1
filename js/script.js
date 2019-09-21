const signUpForm = document.getElementById("reg-form");
const loginForm = document.getElementById("login-form");
const regHeading = document.getElementById("reg-heading");
const loginHeading = document.getElementById("login-heading");
const showRegBtn = document.getElementById("show-reg-btn");
const showLoginBtn = document.getElementById("show-login-btn");
const showRegLink = document.getElementById("show-reg-link");
const showLoginLink = document.getElementById("show-login-link");
const ctaLogin = document.getElementById("cta-login");
const ctaReg = document.getElementById("cta-reg");

showLoginBtn.addEventListener('click', showLogin, true);
showLoginLink.addEventListener('click', showLogin, true);
showRegBtn.addEventListener('click', showReg, true);
showRegLink.addEventListener('click', showReg, true);


// shows the login form
function showLogin(e){
    
    if(typeof e != 'undefined'){
        e.preventDefault();
    }

    hideEl(signUpForm);
    hideEl(regHeading);
    hideEl(ctaReg);
    hideEl(showLoginLink);
    showEl(loginForm);
    showEl(loginHeading);
    showEl(ctaLogin);
    showEl(showRegLink);


    document.title = "Login ~ Team virgo";
}

// shows the registration form
function showReg(e){

    e.preventDefault();

    hideEl(loginForm);
    hideEl(loginHeading);
    hideEl(ctaLogin);
    hideEl(showRegLink);
    showEl(signUpForm);
    showEl(regHeading);
    showEl(ctaReg);
    showEl(showLoginLink);

    document.title = "Sign up ~ Team virgo";
}

function showEl(el){
    el.style.display = "block";
}

function hideEl(el){
    el.style.display = "none";
}

showLogin();