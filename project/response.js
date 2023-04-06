let searchbtn=document.querySelector('#searchbtn');
let searchbar=document.querySelector('.searchbarcon');
let formbtn=document.querySelector('#loginbtn');
let loginform=document.querySelector('.loginformcon');
let signupform=document.querySelector('.signupformcon');
let formclose=document.querySelector('#fclose');
let fclose=document.querySelector('#sclose');
let menu=document.querySelector('#menubar');
let navbar=document.querySelector('.navbar');
let imgbtn=document.querySelectorAll('slider');
let getStarted=document.querySelector('#gStarted');
window.onscroll=()=>{
    searchbtn.classList.remove('fa-times');
    searchbar.classList.remove('active');
}
searchbtn.addEventListener('click',()=>{
    searchbtn.classList.toggle('fa-times');
    searchbar.classList.toggle('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    loginform.classList.remove('active');
});
menu.addEventListener('click',()=>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});
formbtn.addEventListener('click', () =>{
    loginform.classList.add('active');
    
});
getStarted.addEventListener('click' , ()=>{
    signupform.style.display="flex";
});
formclose.addEventListener('click',()=>{
    loginform.classList.remove('active');
    
});
fclose.addEventListener('click',()=>{
    signupform.style.display="none";
    
});
imgbtn.forEach(btn=>{
    btn.addEventListener('click', ()=>{
        document.querySelector('.controls .active').classList.remove('active');
        btn.classList.add('active');
        let src=btn.getAttribute('src');
        document.querySelector('imgSlider').src=src;
    });
});
console.log(searchbar.classList);
console.log(menu.classList);
console.log(searchbtn.classList);
