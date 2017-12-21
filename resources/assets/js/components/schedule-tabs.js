export default {

    init() {

        let tabs  = document.querySelectorAll('.Schedule-tabs > li > span'),
            panes = document.querySelectorAll('.Schedule-list');

        function onTabClick(e) {

            let clicked_idx = 0;

            for (let i = 0; i < tabs.length; i++) {

                if (tabs[i] === e.currentTarget)
                    clicked_idx = i;

                tabs[i].classList.remove('is-active');
            }

            for (let i = 0; i < panes.length; i++) {
                panes[i].classList.remove('is-active');
            }

            e.currentTarget.classList.add('is-active');
            panes[clicked_idx].classList.add('is-active');

        }

        for (let i = 0; i < tabs.length; i++) {
            tabs[i].addEventListener('click', onTabClick)
        }

    }

}