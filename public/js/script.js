// Navbar Button
const navbar_button = document.querySelectorAll('#navbar-control');
const content_box = document.getElementById('content-box');
const navbar = document.getElementById('navbar');
const popover_expand = document.querySelectorAll('#popover-expand-button');

navbar_button.forEach((button) => {
    button.addEventListener('click', () => {
        content_box.classList.toggle('navbar-active');
        navbar.classList.toggle('navbar-active');
    });
});

popover_expand.forEach((button) => {
    button.addEventListener('click', () => {
        button.lastElementChild.classList.toggle('active');
    });
});