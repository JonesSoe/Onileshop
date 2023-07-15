const menuIcon = document.querySelector('.menu-icon');
const navbar = document.querySelector('nav ul');

menuIcon.addEventListener('click', () => {
  navbar.classList.toggle('show');
});