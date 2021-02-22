// Navbar Button
const navbar_button = document.querySelectorAll('#navbar-control');
const content_box = document.getElementById('content-box');
const navbar = document.getElementById('navbar');

navbar_button.forEach((button) => {
    button.addEventListener('click', () => {
        content_box.classList.toggle('navbar-active');
        navbar.classList.toggle('navbar-active');
    });
});
