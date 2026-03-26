import '../css/app.css';
import './bootstrap';

const supportedLanguages = ['id', 'en'];
const storageKey = 'rk_lang';

const syncLanguage = () => {
    const currentUrl = new URL(window.location.href);
    const queryLanguage = currentUrl.searchParams.get('lang');
    const storedLanguage = window.localStorage.getItem(storageKey);
    const modal = document.querySelector('[data-language-modal]');
    const applyLanguage = (language) => {
        if (!supportedLanguages.includes(language)) {
            return;
        }

        const currentLanguage = currentUrl.searchParams.get('lang') || document.body.dataset.currentLang;

        if (currentLanguage === language) {
            if (modal) {
                modal.hidden = true;
            }

            return;
        }

        window.localStorage.setItem(storageKey, language);
        currentUrl.searchParams.set('lang', language);

        document.documentElement.classList.add('language-is-switching');

        const navigate = () => window.location.assign(currentUrl.toString());

        if (document.startViewTransition) {
            document.startViewTransition(navigate);
            return;
        }

        window.setTimeout(navigate, 120);
    };

    document.querySelectorAll('[data-language-option]').forEach((button) => {
        button.addEventListener('click', () => applyLanguage(button.dataset.languageOption || 'id'));
    });

    if (supportedLanguages.includes(queryLanguage || '')) {
        window.localStorage.setItem(storageKey, queryLanguage);
        return;
    }

    if (supportedLanguages.includes(storedLanguage || '')) {
        currentUrl.searchParams.set('lang', storedLanguage);
        window.location.replace(currentUrl.toString());
        return;
    }

    if (modal) {
        modal.hidden = false;
    }
};

const setupMobileNav = () => {
    const nav = document.querySelector('[data-mobile-nav]');
    const toggleButton = document.querySelector('[data-mobile-nav-toggle]');
    const menu = document.querySelector('[data-mobile-nav-menu]');

    if (!nav || !toggleButton || !menu) {
        return;
    }

    const closeMenu = () => {
        nav.classList.remove('is-open');
        toggleButton.setAttribute('aria-expanded', 'false');
    };

    const openMenu = () => {
        nav.classList.add('is-open');
        toggleButton.setAttribute('aria-expanded', 'true');
    };

    toggleButton.addEventListener('click', () => {
        if (nav.classList.contains('is-open')) {
            closeMenu();
            return;
        }

        openMenu();
    });

    menu.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', closeMenu);
    });

    document.addEventListener('click', (event) => {
        if (window.innerWidth >= 768) {
            return;
        }

        if (nav.contains(event.target)) {
            return;
        }

        closeMenu();
    });

    window.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            closeMenu();
        }
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            closeMenu();
        }
    });
};

syncLanguage();
setupMobileNav();
