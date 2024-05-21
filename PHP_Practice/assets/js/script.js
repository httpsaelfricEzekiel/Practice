const subForm = () => {
    const loginForm = document.getElementById('loginForm');

    loginForm.addEventListener('submit', (e) => {

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

        if(!validForm){
            e.preventDefault();
        }
    });
}
subForm();

const showPassword = () => {
    document.querySelectorAll('.eye-show-pass').forEach(function(element, i){
        element.addEventListener('click', function(e){
            e.preventDefault()

            if(document.querySelectorAll('#pass')[i].getAttribute("type") == "password"){
                document.querySelectorAll('#pass')[i].setAttribute("type", "text")
                element.classList.remove('fa-eye');
                element.classList.add('fa-eye-slash');
            } else {
                document.querySelectorAll('#pass')[i].setAttribute("type", "password")
                element.classList.remove('fa-eye-slash');
                element.classList.add("fa-eye")
            }
        });
    });
}
showPassword();