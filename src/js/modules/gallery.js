import Siema from 'siema';

export default function Gallery() {
    const instance = {};

    const config = {
        selectors: {
            gallery: '.js-gallery',
            arrowLeft: '.js-arrow-left',
            arrowRight: '.js-arrow-right',
        },
    };

    function moveLeft() {
        instance.mySiema.prev();
    };
    
    function moveRight() {
        instance.mySiema.next();
    };

    function init() {
        instance.gallery = document.querySelector(config.selectors.gallery);
        instance.arrowLeft = document.querySelector(config.selectors.arrowLeft);
        instance.arrowRight = document.querySelector(config.selectors.arrowRight);

        if (instance.gallery) {
            instance.mySiema = new Siema({
                selector: config.selectors.gallery,
                easing: 'ease',
                duration: 1000,
                loop: true,
                perPage: {
                    320: 1,
                },
                onInit: () => {
                    setInterval(() => instance.mySiema.next(), 4000);
                }
            });

            bindEventListeners();
        }
    }

    function bindEventListeners() {
        instance.arrowLeft.addEventListener('click', moveLeft);
        instance.arrowRight.addEventListener('click', moveRight);
    }

    init();
};



