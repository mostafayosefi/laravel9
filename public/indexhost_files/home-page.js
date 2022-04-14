(function () {

    try {
        document.addEventListener('DOMContentLoaded', () => {
            //#region vars    
            const main = document.querySelector('#well');
            const section = document.querySelector('.move-blue-svg');
            const moveCards = document.querySelectorAll('.blue-svg-card');
            const responseBox = document.querySelector('.response-box');
            const searchContainer = document.querySelector('.searching-top');
            const sectionTogglers = document.querySelectorAll('.section-toggler');
            const fullHeightSec = Array.from(document.querySelectorAll('section.full-height'));
            const tooltips = document.querySelectorAll('.tooltip-card');
            const cardTooltips = document.querySelectorAll('.blue-svg-card');
            const slidingHeaderTop = document.querySelector('.header-top');
            const headerBottomActions = document.querySelector('.header-bottom-actions');
            const faqBox = document.querySelectorAll('.faq-box');
            const faqTogglers = document.querySelectorAll('.faq-toggler');
            const controllerPrev = document.querySelector('.controller-prev');
            const controllerNext = document.querySelector('.controller-next');
            const slidesRow = document.querySelectorAll('.slider');
            const sliderPaginationBtn = document.querySelectorAll('.slider-pagination-btn');
            const menu = document.querySelector('#navbarSupportedContent');
            const reviewsText = document.querySelectorAll('.text-ellipsing');
            const userAgent = navigator.userAgent.toLowerCase();
            const isTablet = /(ipad|tablet|(android(?!.*mobile))|(windows(?!.*phone)(.*touch))|kindle|playbook|silk|(puffin(?!.*(IP|AP|WP))))/.test(userAgent);
            const splideArrows = document.querySelector('.splide__arrows');
            slidingHeaderTop.style.maxHeight = slidingHeaderTop.scrollHeight + 'px';
            const sectionBysectionCondition = isTablet === false && window.innerWidth > 1500 && window.innerHeight > 905;
            const topHeaderBanner = document.querySelector(".top-header-banner") && document.querySelector(".top-header-banner");

            if (fullHeightSec[0]) {
                fullHeightSec[0].classList.add('active-section');
            }

            if (sectionBysectionCondition) {
                let sectionTogglerNav = document.getElementById("section-togglers-nav");
                sectionTogglerNav.classList.remove('d-none');
                let _timeout;

                function debounce(method, delay) {
                    if (_timeout)
                        clearTimeout(_timeout);

                    _timeout = setTimeout(() => {
                        method();
                    }, delay);
                }

                //#region mouse wheel event for moving sections
                function _handleWheel(e) {
                    const currentindex = fullHeightSec.findIndex(s => s.classList.contains('active-section'));
                    let target = -1;

                    if (e.deltaY < 0 && currentindex > 0) {
                        // up
                        target = currentindex - 1;
                        if (target === 0) {
                            menu.classList.remove('align-center-menu')
                        }
                        fullHeightSec[target].classList.add('active-section');
                        main.style.transform = `translate3d(0,-${(fullHeightSec[target].scrollHeight * target) + (6 * 16 * target)}px,0)`;
                        setTimeout(() => {
                            fullHeightSec[currentindex].classList.remove('active-section');
                        }, 180);

                        // remove top header banner


                    } else if (e.deltaY > 0 && currentindex < (fullHeightSec.length - 1)) {
                        menu.classList.add('align-center-menu')

                        // down
                        target = currentindex + 1;
                        fullHeightSec[target].classList.add('active-section');
                        main.style.transform = `translate3d(0,-${(fullHeightSec[target].scrollHeight * target) + (6 * 16 * target)}px,0)`;
                        setTimeout(() => {
                            fullHeightSec[currentindex].classList.remove('active-section');
                            // }
                        }, 180);
                    }
                }
                //#endregion mouse wheel event for moving sections

                //#region mouse wheel event for moving sections
                function _navigationDotsMover(dataJump) {
                    // move section
                    const currentindex = fullHeightSec.findIndex(s => s.classList.contains('active-section'));
                    let target = dataJump;
                    if (target < currentindex) {
                        // up
                        fullHeightSec[target].classList.add('active-section');
                        main.style.transform = `translate3d(0,-${(fullHeightSec[target].scrollHeight * target) + (6 * 16 * target)}px,0)`;

                        setTimeout(() => {
                            fullHeightSec[currentindex].classList.remove('active-section');
                        }, 180);

                    } else if (target > currentindex) {
                        // down
                        fullHeightSec[target].classList.add('active-section');
                        main.style.transform = `translate3d(0,-${(fullHeightSec[target].scrollHeight * target) + (6 * 16 * target)}px,0)`
                        setTimeout(() => {
                            fullHeightSec[currentindex].classList.remove('active-section');
                        }, 180);
                    } else {
                        fullHeightSec[currentindex].classList.remove('active-section');
                    }
                }
                //#endregion mouse wheel event for moving sections

                //#region remove active class from navigation dots except current button
                function removeActionBtn(current) {
                    Array.from(sectionTogglers)
                        .filter((el) => el !== current)
                        .forEach((element) => {
                            element.classList.remove('active-btn');
                        });
                }
                //#endregion remove active class from navigation dots except current button

                //#region add active class to navigation dots 
                const sectionTogglersClassAdd = (button) => {
                    button.classList.add('active-btn');
                }
                //#endregion remove active class to navigation dots 

                //#region remove active class to navigation dots 
                const sectionTogglersClassRemove = (button) => {
                    button.classList.remove('active-btn');
                }
                //#endregion remove active class to navigation dots 

                //#region add animation to sections by click on navigation dots
                const addAnimations = (e) => {
                    const activeSection = document.querySelector('.active-section');
                    const target = e.deltaY < 0 ? activeSection.previousElementSibling : activeSection.nextElementSibling;

                    if (target && target.getAttribute('id') === 'second-section') {
                        section.classList.add("transform-svg");

                        moveCards.forEach(card => {
                            card.classList.add("move-right-cards");
                        });
                    }

                    if (target && target.getAttribute('id') === 'third-section') {
                        responseBox.classList.add("scaling");
                    }
                }
                //#endregion add animation to sections by click on navigation dots

                //#region active navigation dot by mouse wheel
                const activeNavigationBtn = (targetDataSet) => {
                    sectionTogglers.forEach(dataAttr => {
                        const sectionTogglersAttr = dataAttr.getAttribute('data-ds-jump');

                        switch (targetDataSet) {
                            case '0':
                                sectionTogglersAttr === '0' ? sectionTogglersClassAdd(dataAttr) : sectionTogglersClassRemove(dataAttr)
                                break;
                            case '1':
                                sectionTogglersAttr === '1' ? sectionTogglersClassAdd(dataAttr) : sectionTogglersClassRemove(dataAttr)
                                break;
                            case '2':
                                sectionTogglersAttr === '2' ? sectionTogglersClassAdd(dataAttr) : sectionTogglersClassRemove(dataAttr)
                                break;
                            case '3':
                                sectionTogglersAttr === '3' ? sectionTogglersClassAdd(dataAttr) : sectionTogglersClassRemove(dataAttr)
                                break;
                            case '4':
                                sectionTogglersAttr === '4' ? sectionTogglersClassAdd(dataAttr) : sectionTogglersClassRemove(dataAttr)
                                break;
                            case '5':
                                sectionTogglersAttr === '5' ? sectionTogglersClassAdd(dataAttr) : sectionTogglersClassRemove(dataAttr)
                                break;
                            case '6':
                                sectionTogglersAttr === '6' ? sectionTogglersClassAdd(dataAttr) : sectionTogglersClassRemove(dataAttr)
                                break;

                            default:
                                break;
                        }

                    });
                }

                //#region sliding slider by mouse wheel in section four
                const slidingMouseWheel = (e) => {
                    const isWheelDown = e.deltaY > 0;

                    if ((isWheelDown &&
                        slidesRow[slidesRow.length - 1].classList.contains('active-slide')) ||
                        (!isWheelDown &&
                            slidesRow[0].classList.contains('active-slide')))
                        return null;

                    const activeSlide = document.querySelector('.active-slide');
                    const targetSibling = isWheelDown ? activeSlide.nextElementSibling : activeSlide.previousElementSibling;

                    targetSibling.classList.remove('leave-left', 'leave-right');

                    if (isWheelDown) {
                        activeSlide.classList.add('leave-right');
                        activeSlide.classList.remove('active-slide', 'active-left', 'active-right');
                        targetSibling.classList.add('active-slide', 'active-left');
                    } else if (!isWheelDown) {
                        activeSlide.classList.add('leave-left');
                        activeSlide.classList.remove('active-slide', 'active-right', 'active-left');
                        targetSibling.classList.add('active-slide', 'active-right');
                    }

                    const targetIndex = Array.from(slidesRow).indexOf(targetSibling);
                    sliderPaginationBtn.forEach(el => el.classList.remove('active'));
                    sliderPaginationBtn[targetIndex].classList.add('active');

                    return 1;
                }

                sliderPaginationBtn.forEach(btn => {
                    const btnAttrTarget = btn.dataset.target;

                    btn.addEventListener('click', e => {
                        const targetBtnIndex = +(e.target.dataset.target);
                        const activeSlideIndex = Array.from(slidesRow).findIndex(index => index.classList.contains('active-slide'));
                        const activeSlide = document.querySelector('.active-slide');

                        const removeOtherActiveSlides = (current) => {
                            Array.from(slidesRow)
                                .filter(el => el !== current)
                                .forEach(element => {
                                    element.classList.remove('active-slide');
                                });
                        }
                        const targetSlide = Array.from(slidesRow).find(s => +s.getAttribute('id') === targetBtnIndex);
                        if (targetSlide) {
                            Array.from(sliderPaginationBtn)
                                .filter(el => el !== e.target)
                                .forEach(element => {
                                    element.classList.remove('active');
                                });

                            e.target.classList.add('active');

                            removeOtherActiveSlides(targetSlide);
                            targetSlide.classList.add('active-slide');
                            activeSlide.classList.remove('active-left', 'active-right');

                            if (targetBtnIndex > activeSlideIndex) {
                                activeSlide.classList.add('leave-right');
                                targetSlide.classList.add('active-slide', 'active-left');
                                targetSlide.classList.remove('leave-left', 'leave-right');

                                if (targetBtnIndex - activeSlideIndex > 1)
                                    slidesRow[activeSlideIndex + 1].classList.add('leave-right');

                            } else if (targetBtnIndex < activeSlideIndex) {
                                activeSlide.classList.add('leave-left');
                                targetSlide.classList.add('active-slide', 'active-right');
                                targetSlide.classList.remove('leave-left', 'leave-right');

                                if (targetBtnIndex - activeSlideIndex > 1)
                                    slidesRow[activeSlideIndex + 1].classList.add('leave-left');
                            }
                        }
                    });
                });


                let timeout1;

                function debounce1(method, delay) {
                    if (timeout1)
                        clearTimeout(timeout1);

                    timeout1 = setTimeout(() => {
                        method();
                    }, delay);
                }

                sectionTogglers.forEach(btn => {
                    const dataJump = btn.getAttribute('data-ds-jump');

                    btn.addEventListener('click', e => {
                        e.preventDefault();

                        removeActionBtn(e.target);
                        btn.classList.add('active-btn');

                        if (dataJump !== '0') {
                            slidingHeaderTop.style.cssText = 'max-height: 0px; overflow: hidden;';
                            headerBottomActions.classList.add('show-header-bottom-actions');

                            if (topHeaderBanner)
                                topHeaderBanner.style.maxHeight = 0;
                        } else {
                            slidingHeaderTop.style.maxHeight = slidingHeaderTop.scrollHeight + 'px';
                            headerBottomActions.classList.remove('show-header-bottom-actions');

                            if (topHeaderBanner)
                                topHeaderBanner.style.maxHeight = topHeaderBanner.scrollHeight + 'px';
                        }

                        switch (dataJump) {
                            case '0':
                                searchContainer.classList.remove('show-search')
                                break;

                            case '1':
                                section.classList.add("transform-svg");

                                moveCards.forEach(card => {
                                    card.classList.add("move-right-cards");
                                });

                            case '2':
                                responseBox.classList.add("scaling");

                            default:
                                break;
                        }

                        if (dataJump !== '0') {
                            searchContainer.classList.add('show-search')
                        }

                        debounce(function () {
                            _navigationDotsMover(dataJump);
                        }, 180);
                    });
                });

                if (document.querySelector('#well')) {
                    document.querySelector('#well').addEventListener('wheel', (e) => {
                        const activeSection = document.querySelector('.active-section');
                        const targetDataSet = e.deltaY > 0 ? activeSection.nextElementSibling && activeSection.nextElementSibling.dataset.section : activeSection.previousElementSibling && activeSection.previousElementSibling.dataset.section;
                        const currentTargetDataSet = e.deltaY > 0 ? activeSection.dataset.section : activeSection.dataset.section;
                        const targetClass = e.deltaY > 0 ? activeSection.nextElementSibling : activeSection.previousElementSibling;

                        debounce(function () {
                            let _continue = true;
                            if (currentTargetDataSet === '3') {
                                _continue = slidingMouseWheel(e) === null;
                            }

                            if (_continue) {
                                _handleWheel(e);
                                activeNavigationBtn(targetDataSet);
                            }
                        }, 180);

                        if (targetDataSet && targetDataSet !== null) {
                            setTimeout(() => {
                                if (targetDataSet !== '0') {
                                    slidingHeaderTop.style.cssText = 'max-height: 0px; overflow: hidden;';
                                    headerBottomActions.classList.add('show-header-bottom-actions');

                                    if (topHeaderBanner)
                                        topHeaderBanner.style.maxHeight = 0;
                                } else {
                                    slidingHeaderTop.style.maxHeight = slidingHeaderTop.scrollHeight + 'px';
                                    headerBottomActions.classList.remove('show-header-bottom-actions');

                                    if (topHeaderBanner)
                                        topHeaderBanner.style.maxHeight = topHeaderBanner.scrollHeight + 'px';
                                }
                            }, 180);

                            if (targetClass.classList.contains('middle-search')) {
                                searchContainer.classList.remove('show-search')
                            } else {
                                searchContainer.classList.add('show-search')
                            }
                        }

                        debounce1(function () {
                            addAnimations(e);
                        }, 180);
                    });
                }
            } else {
                document.querySelector('.new-home').classList.add('unset-fullpage');
                document.querySelector('.reversing').classList.add('flex-row-reverse');
                document.body.classList.remove('lock-scroll');
            }

            //#region mouse enter function in tooltip cards
            const hoverEnter = (id) => {
                const tooltipId = id.getAttribute('id');
                tooltips.forEach(tooltip => {
                    const dataTooltip = tooltip.getAttribute('data-tooltip');

                    tooltip.classList.remove('show-tooltip');

                    if (tooltipId === dataTooltip) {
                        tooltip.classList.add('show-tooltip');
                    }
                })
            }
            //#endregion mouse enter function in tooltip cards

            //#region mouse leave function in tooltip cards
            const hoverLeave = () => {
                tooltips.forEach(tooltip => {
                    tooltip.classList.remove('show-tooltip');
                })
            }
            //#endregion mouse leave function in tooltip cards


            function removeActionFaq(current) {
                Array.from(faqBox)
                    .filter((el) => el !== current)
                    .forEach((element) => {
                        element.classList.remove('active-faq');
                    });
            }

            function removeActionFaqToggler(current) {
                Array.from(faqTogglers)
                    .filter((el) => el !== current)
                    .forEach((element) => {
                        element.classList.remove('active');
                    });
            }

            faqTogglers.forEach(toggler => {
                toggler.addEventListener('click', e => {
                    e.preventDefault();
                    const togglerAttr = e.target.dataset.target;
                    const matchedFaqBox = Array.from(document.getElementsByClassName(togglerAttr));

                    removeActionFaqToggler(e.target);
                    e.target.classList.add('active');

                    matchedFaqBox.forEach(box => {
                        removeActionFaq(box);
                        box.classList.add('active-faq');
                    })
                });
            });


            controllerNext && controllerNext.addEventListener('click', e => {
                e.preventDefault();

                let currentFaq = [...faqBox].findIndex(el => el.classList.contains('active-faq'));
                let currentBtn = [...faqTogglers].findIndex(el => el.classList.contains('active'));

                if (currentFaq < faqBox.length - 1) {
                    faqBox[currentFaq].classList.remove('active-faq');
                    faqBox[currentFaq + 1].classList.add('active-faq');
                }

                if (currentBtn < faqTogglers.length - 1) {
                    faqTogglers[currentBtn].classList.remove('active');
                    faqTogglers[currentBtn + 1].classList.add('active');
                }
            })

            controllerPrev && controllerPrev.addEventListener('click', e => {
                e.preventDefault();

                let currentFaq = [...faqBox].findIndex(el => el.classList.contains('active-faq'))
                let currentBtn = [...faqTogglers].findIndex(el => el.classList.contains('active'));

                if (currentFaq > 0) {
                    faqBox[currentFaq].classList.remove('active-faq');
                    faqBox[currentFaq - 1].classList.add('active-faq');
                }

                if (currentFaq > 0) {
                    faqTogglers[currentBtn].classList.remove('active');
                    faqTogglers[currentBtn - 1].classList.add('active');
                }
            })

            for (const text of reviewsText) {
                const isUpperThan85 = text.textContent.length > 85;

                if (window.innerWidth < 576 && isUpperThan85) {
                    text.innerHTML = `${text.textContent.slice(0, 85)} 
                    ...<a class="show-all-review ih-link mr-2" href="javascript:void(0)">بیشتر
                        <div class="tooltip-review fs-12">
                        <span class="mt-0">
                        ${text.textContent}
                        </span>
                        <small class="close-tooltip"> بستن</small>
                        </div>
                    </a>`;
                }
            }

            document.querySelectorAll('.show-all-review').forEach(el => el.addEventListener('click', e => {
                e.stopPropagation();
                splideArrows.classList.add('d-none')
                document.querySelectorAdd('.tooltip-review').forEach(el => el.classList.add('show-review-tooltip'));
            }));

            window.addEventListener('click', e => {
                if (e.target != document.querySelector('.tooltip-review')) {
                    splideArrows.classList.remove('d-none')
                    document.querySelectorAll('.tooltip-review').forEach(el => el.classList.remove('show-review-tooltip'))
                }
            })

            document.querySelectorAll('.close-tooltip').forEach(el => el.addEventListener('click', e => {
                e.stopPropagation();
                splideArrows.classList.remove('d-none')
                document.querySelector('.tooltip-review').classList.remove('show-review-tooltip')
            }));

        })

    } catch (err) {
        console.log(err)
    }

})();