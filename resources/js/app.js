import './bootstrap';

const menuToggle = document.querySelector('[data-menu-toggle]');
const mobileMenu = document.querySelector('[data-mobile-menu]');
const openIcon = document.querySelector('[data-menu-icon-open]');
const closeIcon = document.querySelector('[data-menu-icon-close]');

function closeMobileMenu() {
    if (!menuToggle || !mobileMenu) return;

    menuToggle.setAttribute('aria-expanded', 'false');
    menuToggle.setAttribute('aria-label', 'Buka menu navigasi');
    mobileMenu.classList.add('hidden');
    openIcon?.classList.remove('hidden');
    closeIcon?.classList.add('hidden');
}

menuToggle?.addEventListener('click', () => {
    const isOpen = menuToggle.getAttribute('aria-expanded') === 'true';

    menuToggle.setAttribute('aria-expanded', String(!isOpen));
    menuToggle.setAttribute('aria-label', isOpen ? 'Buka menu navigasi' : 'Tutup menu navigasi');
    mobileMenu?.classList.toggle('hidden', isOpen);
    openIcon?.classList.toggle('hidden', !isOpen);
    closeIcon?.classList.toggle('hidden', isOpen);
});

mobileMenu?.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', closeMobileMenu);
});

document.querySelectorAll('[data-login-notice]').forEach((button) => {
    button.addEventListener('click', () => {
        const status = document.querySelector('[data-login-status]');

        if (status) {
            status.classList.remove('hidden');
            window.setTimeout(() => status.classList.add('hidden'), 4500);
        }

        closeMobileMenu();
    });
});
