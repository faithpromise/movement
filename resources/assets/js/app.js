import countdown from './components/countdown.js';
import mobileNav from './components/mobile-nav.js';
import scheduleTabs from './components/schedule-tabs.js';

function ready(fn) {
    if (document.attachEvent ? document.readyState === "complete" : document.readyState !== "loading") {
        fn();
    } else {
        document.addEventListener('DOMContentLoaded', fn);
    }
}

ready(() => {

    mobileNav.init();
    scheduleTabs.init();
    countdown.init();

    // Prevent multiple form submissions
    let form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function () {
            this.querySelector('[type="submit"]').setAttribute('disabled', 'disabled');
        }, false);
    }

});