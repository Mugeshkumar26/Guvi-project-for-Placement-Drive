var Email=document.forms['form']['Email'];
var Password=document.forms['form']['Password'];
var email_error = document.getElementById('email_error');
var pass_error = document.getElementById('pass_error');

Email.addEventListener('textInput',Email_Verify);
Password.addEventListener('textInput',pass_verify);

function validated(){
    if(Email.value.length<9){
        Email.style.border="1px solid red";
        email_error.style.display="black";
        Email.focus();
        alert("Invalid Email");
        return false;
    }
    if(Password.value.length <6){
        Password.style.border="1px solid red";
        pass_error.style.display="block";
        Password.focus();
        alert("Invalid Password");
        return false;
    }
}
function Email_Verify(){
    if(Email.value.length>=8){
        Email.style.border="1px solid red";
        email_error.style.display="block";
        return true;
    }
}
function pass_verify(){
    if(Password.value.length>=5){
        Password.style.border="1px solid silver";
        pass_error.style.display="none";
        return true;
    }
}