const buttonUp = document.getElementById('up');
const buttonIn = document.getElementById('in');
const formUp = document.getElementById('sign-up-form');
const formIn = document.getElementById('sign-in-form');



console.log(buttonIn,buttonUp,formIn,formUp);

buttonIn.addEventListener('click',()=>{
    buttonIn.classList.add('active');
    formIn.classList.add('active');
    buttonUp.classList.remove('active');
    formUp.classList.remove('active');
})
buttonUp.addEventListener('click',()=>{
    buttonUp.classList.add('active');
    formUp.classList.add('active');
    buttonIn.classList.remove('active');
    formIn.classList.remove('active');
})

const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const passConfirmation = document.getElementById('pass-confirmation');

const emailIn = document.getElementById('email-in');
const passwordIn = document.getElementById('password-in');
const signUp = document.getElementById('sign-up');
const signIn = document.getElementById('sign-in');


function checkName(name){
    return /^[A-Za-z ,.'-]+$/.test(name);
}

function checkEmail(email){
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

function checkPassword(password){
    return /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/.test(password);
    // At Least 8 Characters, One Uppercase, And One Number
}

username.addEventListener('keyup',function(){
    if(username.value == '' || !checkName(username.value)){
        username.classList.add('invalid');
    }else{
        username.classList.remove('invalid');
    }
    
})

password.addEventListener('keyup',function(){
    if(password.value == '' || !checkPassword(password.value)){
        password.classList.add('invalid');
    }else{
        password.classList.remove('invalid');
    }
})

passConfirmation.addEventListener('keyup',function(){
    if(passConfirmation.value == '' || passConfirmation.value != password.value){
        passConfirmation.classList.add('invalid');
    }else{
        passConfirmation.classList.remove('invalid');
    }
})

let result;
function validForm(){
    if( username.value != '' && 
        checkName(username.value)&&
        email.value != '' && 
        checkEmail(email.value) &&
        password.value != '' && 
        checkPassword(password.value) &&
        passConfirmation.value != '' && 
        passConfirmation.value == password.value){

            result = true;

        }else {
            result = false; 
        }
        return result;
}

formUp.addEventListener('submit',function(e){
            
    if(validForm() == true){
        console.log('hello');
    }else{
        console.log('invalid');
        e.preventDefault();
    }
})

emailIn.addEventListener('keyup',function(){
    if(emailIn.value == '' || !checkEmail(emailIn.value)){
        emailIn.classList.add('invalid');
    }else{
        emailIn.classList.remove('invalid');
    }   
})

passwordIn.addEventListener('keyup',function(){
    if(passwordIn.value == '' ){
        passwordIn.classList.add('invalid');
    }else{
        passwordIn.classList.remove('invalid');
    }
})


let result2;
        function validSignIn(){
            if(emailIn.value != '' && checkEmail(emailIn.value) && passwordIn.value != '' ){

                    result2 = true;

                }else {
                    result2 = false; 
                }
                return result2;
        }

        formIn.addEventListener('submit',function(e){
            
            if(validSignIn() == true){
                console.log('hello');
            }else{
                console.log('invalid');
                e.preventDefault();
            }
        })