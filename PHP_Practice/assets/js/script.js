const subForm = () => {
    const loginForm = document.getElementById('loginForm');
    loginForm.addEventListener('submit', (e) => {
        if(!validForm){
            e.preventDefault();
        }

        let validForm = true;

        const email = document.getElementById('email');
        const password = document.getElementById('pass');

        email.classList.remove('error');
        password.classList.remove('error');

        if(email.value.trim() === ''){
            email.classList.add('error');
            validForm = false;
        }

        if(password.value.trim() === ''){
            password.classList.add('error');
            validForm = false;
        }
    });
}
subForm();