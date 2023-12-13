// burger-menu.js

// Function to toggle the mobile menu

const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');

mobileMenuButton.addEventListener('click', () => {

    setTimeout(() => {
        mobileMenu.classList.toggle('hidden');
    }, 80);
});