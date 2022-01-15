let menu=document.querySelector('#menu-bars');
let navbar=document.querySelector('.navbar');

menu.onclick=()=>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
    searchIcon.classList.remove('fa-times');
    searchForm.classList.remove('active');
}

let searchIcon=document.querySelector('#search-icon');
let searchForm=document.querySelector('.search-form');

searchIcon.onclick=()=>{
    searchIcon.classList.toggle('fa-times');
    searchForm.classList.toggle('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    
}

window.onscroll=()=>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    searchIcon.classList.remove('fa-times');
    searchForm.classList.remove('active');
}





// sign up validation

let fullname =document.getElementById('fullname');
let username =document.getElementById('username');
let email    =document.getElementById('email');
let password =document.getElementById('password');
let submit   =document.getElementById('submit');

let fullname_message   =document.getElementById('fullname_message');
let username_message   =document.getElementById('username_message');
let email_message      =document.getElementById('email_message');
let password_message   =document.getElementById('password_message');

let namevalid = /^[a-zA-Z ]{2,30}$/;
let mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
let passformat = new RegExp("^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})");




submit.addEventListener('click',(e)=>{
    e.preventDefault();
    if(fullname.value.match(namevalid)){

        fullname_message.innerHTML="Full Name Valid";
        fullname_message.style.color="green";
        
    }
    else{
        fullname_message.innerHTML="Full Name Not Valid";
        fullname_message.style.color="red";
    }
    if(username.value.match(namevalid)){

        username_message.innerHTML="Full Name Valid";
        username_message.style.color="green";
        
    }
    else{
        username_message.innerHTML="User Name Not Valid";
        username_message.style.color="red";
    }


    if(email.value.match(mailformat)){

        email_message.innerHTML="Email Valid";
        email_message.style.color="green";
        
    }
    else{
        email_message.innerHTML="Email Not Valid";
        email_message.style.color="red";
    }

    if(password.value.match(passformat)){

        password_message.innerHTML="Password Valid";
        password_message.style.color="green";
        
    }
    else{
        password_message.innerHTML="Password Not Valid";
        password_message.style.color="red";
    }
    
})







