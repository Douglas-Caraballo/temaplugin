const   darkTheme = document.querySelector('#darkTheme'),
        bodyDark = document.querySelector('body');

let aux=0;

darkTheme.addEventListener('click',(e)=>{
    bodyDark.classList.toggle('DarkMode');
    if(aux==0){
        localStorage.setItem('DarkMode', 'true');
        aux=1;
    }else{
        localStorage.setItem('DarkMode','false');
        aux=0;
    }

});

let dark = localStorage.getItem('DarkMode');
if(dark=='true'){
    bodyDark.classList.add('DarkMode');
    aux=1;
}else{
    bodyDark.classList.remove('DarkMode');
    aux=0;
}