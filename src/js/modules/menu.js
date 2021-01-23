export default function Menu() {
    const instance = {};

    const config = {
        selectors: {
            menuIcon: '.js-menu-icon',
            headerMenu: '.js-header-menu',
            body: 'body',
        },
        classes: {
            isActive: 'is-active',
            bars: 'fa-bars',
            times: 'fa-times',
            lock: 'lock',
        }
    };

    function toggleClass() {
        if (!instance.headerMenu.classList.contains(config.classes.isActive)) {
            instance.menuIcon.classList.remove(config.classes.bars);
            instance.menuIcon.classList.add(config.classes.times);
            instance.headerMenu.classList.add(config.classes.isActive);
            instance.body.classList.add(config.classes.lock);
        } else {
            instance.menuIcon.classList.remove(config.classes.times);
            instance.menuIcon.classList.add(config.classes.bars);
            instance.headerMenu.classList.remove(config.classes.isActive);
            instance.body.classList.remove(config.classes.lock);
        }
    }

    function init() {
        instance.menuIcon = document.querySelector(config.selectors.menuIcon);
        instance.headerMenu = document.querySelector(config.selectors.headerMenu);
        instance.body = document.querySelector(config.selectors.body);

        instance.menuIcon.addEventListener('click', toggleClass);
    };

    init();
};
