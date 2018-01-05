export default {

    init() {

        let menu_elem  = document.getElementById('js-mobile-menu'),
            open_elem  = document.getElementById('js-mobile-open'),
            close_elem = document.getElementById('js-mobile-close'),
            root_elem  = document.body,
            open_class = 'nav-open';

        if (!menu_elem) return;

        function close(e) {
            console.log(e.target);
            if (!open_elem.contains(e.target) && !menu_elem.contains(e.target)) {
                root_elem.classList.remove(open_class);
                root_elem.removeEventListener('click', this);
            }
        }

        function open() {
            root_elem.classList.add(open_class);
            root_elem.addEventListener('click', close);
        }

        open_elem.addEventListener('click', open);
        close_elem.addEventListener('click', close);

    }

}