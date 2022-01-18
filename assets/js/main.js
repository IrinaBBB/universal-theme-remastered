const topMenu = document.querySelector('.menu-top');
const openMenu = document.querySelector('.menu-open');
const closeMenu = document.querySelector('.menu-top__close');


openMenu.addEventListener('click', show);
closeMenu.addEventListener('click', close);

function show() {
    topMenu.style.display = 'flex';
    topMenu.style.top = '0';
    topMenu.style.left = '0';
    openMenu.style.display = 'none';
}

function close() {
    topMenu.style.left = '-110%';
    openMenu.style.display = 'block';
}