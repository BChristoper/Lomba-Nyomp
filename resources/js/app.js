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

        window.localStorage.setItem(storageKey, language);
        currentUrl.searchParams.set('lang', language);
        window.location.assign(currentUrl.toString());
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

syncLanguage();
