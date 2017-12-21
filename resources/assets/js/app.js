import scheduleTabs from './components/schedule-tabs.js';
import countdown from './components/countdown.js';

function ready(fn) {
    if (document.attachEvent ? document.readyState === "complete" : document.readyState !== "loading") {
        fn();
    } else {
        document.addEventListener('DOMContentLoaded', fn);
    }
}

ready(() => {

    scheduleTabs.init();
    countdown.init();

});