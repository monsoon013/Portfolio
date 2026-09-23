export function header(){

    const hamburger = document.querySelector('.menu-icon-toggle');
    const navLinks = document.querySelector('.nav-items');

    if(!hamburger || !navLinks) return;

    hamburger.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });
}