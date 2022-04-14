(function () {
    try {
        document.addEventListener("DOMContentLoaded", function () {
            if (document.querySelector('.about-us-slider')) {
                new Splide(".about-us-slider", {
                    perPage: 3,
                    perMove: 1,
                    rewind: false,
                    type: "loop",
                    pagination: false,
                    breakpoints: {
                        640: {
                            perPage: 1,
                        },
                        992: {
                            perPage: 2,
                        }
                    }
                }).mount();
            }
            if (document.querySelector('.site-templates-slider')) {
                new Splide(".site-templates-slider", {
                    perPage: 3,
                    perMove: 1,
                    rewind: false,
                    type: "loop",
                    pagination: false,
                    breakpoints: {
                        640: {
                            perPage: 1,
                        },
                        992: {
                            perPage: 2,
                        }
                    }
                }).mount();
            }
            if (document.querySelector('.site-builder-slider')) {
                new Splide(".site-builder-slider", {
                    perPage: 3,
                    perMove: 1,
                    rewind: false,
                    type: "loop",
                    pagination: false,
                    breakpoints: {
                        640: {
                            perPage: 1,
                        },
                        992: {
                            perPage: 2,
                        }
                    }
                }).mount();
            }
            if (document.querySelector('.customer-slider')) {
                new Splide(".customer-slider", {
                    'arrowPath': 'M15.46 1.41547C15.46 0.524103 14.3834 0.077703 13.7537 0.707996L0.626552 13.8489C0.236232 14.2396 0.236231 14.8731 0.626551 15.2638L13.7537 28.4047C14.3834 29.035 15.46 28.5886 15.46 27.6972V14.5563V1.41547Z',
                    perPage: 2,
                    perMove: 1,
                    pagination: false,
                    rewind: false,
                    type: "loop",
                    breakpoints: {
                        768: {
                            perPage: 1,
                            arrows: true
                        }
                    }
                }).mount();
            }
            if (document.querySelector('.data-center-slider')) {
                new Splide(".data-center-slider", {
                    perPage: 1,
                    perMove: 1,
                    rewind: false,
                    type: "loop",
                    pagination: false
                }).mount();
            }
            if (document.querySelector('.homepage-slider')) {
                new Splide(".homepage-slider", {
                    perPage: 1,
                    perMove: 1,
                    rewind: false,
                    type: "loop",
                    arrows: false,
                }).mount();
            }
        });


        if (document.querySelector('.about-us-slider-ul')) {
            let ul = document.querySelector('.about-us-slider-ul');
            let a = ul.querySelectorAll('a');

            a.forEach(element => {
                let img = element.children;
                Array.from(img)
                    .forEach(img => {
                        let imgSrc = img.getAttribute('src');

                        element.addEventListener("click", (e) => {
                            e.preventDefault();
                            window.open(`${imgSrc}`, '_blank')
                        })
                    })
            })
        }
    } catch (err) {
        console.log(err)
    }
})();