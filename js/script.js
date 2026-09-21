function classToggle() {
  const navs = document.querySelectorAll('.nav-items')
  
  navs.forEach(nav => nav.classList.toggle('nav-show'));
}
document.querySelector('.menu-icon-toggle')
  .addEventListener('click', classToggle);