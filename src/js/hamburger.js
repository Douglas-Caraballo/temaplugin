const hamburger =document.querySelector('#hamburger'),
    menu = document.querySelector('#menu'),
    close=document.querySelector('#close');

hamburger.addEventListener('click',(e)=>{
    menu.classList.toggle('AsideActivate');
});

close.addEventListener('click',(e)=>{
    menu.classList.toggle('AsideActivate');
});