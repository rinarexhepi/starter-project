//Login form validation

document.addEventListener("DOMContentLoaded", function(ngjarja) {
    const BtnSubmit = document.getElementById('btn');

    const validate = (ngjarja) => {
        ngjarja.preventDefault();

        const email = document.getElementById('email');
        const password = document.getElementById('password');
        const regexPassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;

        
        if (email.value === "") {
            alert("Please enter your email!");
            email.focus();
            return false;
        }
        if (!emailValid(email.value)) {
            alert("Please enter a valid email");
            email.focus();
            return false;
        }
        if (password.value === "") {
            alert("Please enter your password");
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
        BtnSubmit.addEventListener('click', validate);
    
});




/* window.onload = sliderFunction();

function sliderFunction(){
    var sliderList = document.getElementsByClassName('slider-content');

    if(!sliderList[0].classList.contains('show-content')){
        sliderList[0].classList.add('show-content');
    }

    for(var slide of sliderList){
        if(!slide.classList.contains('show-content')){
            slide.classList.add('hidden-content');
        }
    }

    var index = 0;
    var slider = document.getElementsByClassName('slider')[0];

    slider.addEventListener('click', function(){
        index++;
        for(var slide of sliderList){
            if(slide.classList.contains('show-content') && index <3 ){
                slide.classList.remove('show-content');
                slide.classList.add('hidden-content');
                slide.nextElementSibling.classList.remove('hidden-content');
                slide.nextElementSibling.classList.add('show-content');
                break;
            } else if(slide.classList.contains('show-content') && index == 3){
                slide.classList.remove('show-content');
                slide.classList.add('hidden-content');
                slide.previousElementSibling.previousElementSibling.classList.remove('hidden-content');
                slide.previousElementSibling.previousElementSibling.classList.add('show-content');
                index = 0;
                break;
            }
        }
    })
}
 */
