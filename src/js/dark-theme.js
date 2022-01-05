const   darkTheme = document.querySelector('#darkTheme'),
        bodyDark = document.querySelector('body');

darkTheme.addEventListener('click',(e)=>{
    bodyDark.classList.toggle('DarkMode');
});