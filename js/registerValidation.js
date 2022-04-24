// Register form validation

document.addEventListener("DOMContentLoaded", function(ngjarja2) {
    const BtnSubmit = document.getElementById('registerBtn');

    const validate = (ngjarja2) => {
        ngjarja2.preventDefault();
        
        const name = document.getElementById('name');
        const surname = document.getElementById('surname');
        const email = document.getElementById('email');
        const password = document.getElementById('password');
        const regexPassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;

        if (name.value === "") {
            alert("Please enter your name!");
            name.focus();
            return false;
        }
        if (surname.value === "") {
            alert("Please enter your surname!");
            surname.focus();
            return false;
        }
        if (email.value === "") {
            alert("Please enter your email!");
            email.focus();
            return false;
        }
        if (!emailValid(email.value)) {
            alert("Please enter a valid email!");
            email.focus();
            return false;
        }
        if (password.value === "") {
            alert("Please enter your password!");
            password.focus();
            return false;
        }
        if(!regexPassword.test(password.value)){
            alert('Please enter a valid password!');
            password.focus();
            return false;
        }
            
    }

    const emailValid = (email) => {
        const emailRegex = /^([A-Za-z0-9_\-.])+@([A-Za-z0-9_\-.])+\.([A-Za-z]{2,4})$/;
        return emailRegex.test(email.toLowerCase());
    }

    BtnSubmit?.addEventListener('click', validate);
});



