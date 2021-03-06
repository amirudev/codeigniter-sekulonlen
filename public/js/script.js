// Popover Button Function
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

// Copytext Button Function
const copy_button = document.querySelectorAll('#copytext-button');
copy_button.forEach((copy) => {
    copy.addEventListener('click', () => {
        var textcopy = copy.previousElementSibling;
        textcopy.select();
        textcopy.setSelectionRange(0, 9999);
        document.execCommand('copy');
        alert('Link telah disalin');
    });
});