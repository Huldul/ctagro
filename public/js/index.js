document.addEventListener('DOMContentLoaded', function () {
    const openMenu = document.querySelector('.menu-open');
    const menu = document.querySelector('.header__nav');
    const header = document.querySelector('.header');
    const logoSvg = document.querySelector('.header__logo svg');
    const logoImg = document.querySelector('.header__logo img');
    const otherLogo = document.querySelector('.header__logo-2 svg path');
    const headerTop = document.querySelector('.header__top');
    const navElements = document.querySelectorAll('.change-color');
    let originalHeaderBg;

    window.addEventListener("scroll", function () {
        if (!header.classList.contains('active')) {
            if (window.scrollY > 100) {
                header.style.background = "#31312F";
            } else {
                header.style.background = "";
            }
        } else {
            if (menu.classList.contains('active') && headerTop.classList.contains('active')) {
                closeMenu();
            }
        }
    });

    openMenu.addEventListener('click', () => {
        menu.classList.toggle('active');
        header.classList.toggle('active');
        if (header.classList.contains('active')) {
            originalHeaderBg = header.style.background;
            logoSvg.style.display = 'none';
            logoImg.style.display = 'block';
            otherLogo.style.fill = '#FF0100';
            openMenu.textContent = 'Закрыть';
            header.style.backgroundColor = '#fff';
            header.style.height = 'auto';
            headerTop.classList.add('active');
            navElements.forEach((elem) => {
                elem.style.color = '#000';
            });
        } else {
            resetHeader();
        }
    });

    function closeMenu() {
        menu.classList.remove('active');
        header.classList.remove('active');
        resetHeader();
    }

    function resetHeader() {
        logoSvg.style.display = 'block';
        logoImg.style.display = 'none';
        otherLogo.style.fill = '#fff';
        openMenu.textContent = 'Меню';
        header.style.backgroundColor = originalHeaderBg;
        if (window.scrollY > 100) {
            header.style.background = "#31312F";
        } else {
            header.style.background = "";
        }
        header.style.height = '90px';
        headerTop.classList.remove('active');
        navElements.forEach((elem) => {
            elem.style.color = '#fff';
        });
    }

    document.addEventListener('click', function (event) {
        if (!header.contains(event.target) && !menu.contains(event.target) && header.classList.contains('active')) {
            closeMenu();
        }
    });

    const openSearch = document.querySelector('.search__btn');
    const search = document.querySelector('.header__search form');

    openSearch.addEventListener('click', () => {
        search.classList.toggle('active');
    })
    document.addEventListener('click', (event) => {
        if (!search.contains(event.target) && !openSearch.contains(event.target)) {
            search.classList.remove('active');
        }
    });


    const newsSlider = new Swiper('.news__slider', {

        spaceBetween: 30,
        speed: 1000,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            540: {
                slidesPerView: 2,
            },
            767: {
                slidesPerView: 2,
            },
            998: {
                slidesPerView: 3,
            },
            1300: {
                slidesPerView: 4,
            },
            1650: {
                slidesPerView: 5,
            },
        },
        // autoplay: {
        //     delay: 3500,
        //     stopOnLastSlide: true,
        //     disableOnIteraction: false,
        //   },
    });

    const videoSlider = new Swiper('.video__slider', {

        spaceBetween: 30,
        speed: 1000,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            540: {
                slidesPerView: 2,
            },
            767: {
                slidesPerView: 2,
            },
            998: {
                slidesPerView: 3,
            },
            1300: {
                slidesPerView: 3,
            },
            1650: {
                slidesPerView: 4,
            },
        },
        // autoplay: {
        //     delay: 3500,
        //     stopOnLastSlide: true,
        //     disableOnIteraction: false,
        //   },
    });

    $('input[type="tel"]').on('click', function () {
    }).mask('+7 (999) 999 99 99');



    const $triggers = document.querySelectorAll('[data-accordeon-trigger]');

    const handleAccordionClick = evt => {
        const $trigger = evt.currentTarget;
        const $content = $trigger.parentElement.querySelector('[data-accordeon-content]');

        // Закрытие всех открытых аккордеонов, кроме текущего
        $triggers.forEach(otherTrigger => {
            if (otherTrigger !== $trigger) {
                const otherContent = otherTrigger.parentElement.querySelector('[data-accordeon-content]');
                otherContent.classList.remove('opened');
                otherTrigger.classList.remove('_active');
            }
        });

        // Открытие/закрытие текущего аккордеона
        $content.classList.toggle('opened');
        $trigger.classList.toggle('_active');
    };

    $triggers.forEach($trigger =>
        $trigger.addEventListener('click', handleAccordionClick),
    );

    const moreContainers = document.querySelectorAll('.about__container');

    moreContainers.forEach((container) => {
        const moreBtn = container.querySelector('.more-btn');
        const moreText = container.querySelector('.hidden-text');
        const btn = container.querySelector('.products-inner__btn');

        if (moreBtn && moreText) {
            moreBtn.addEventListener('click', () => {
                if (!moreText.classList.contains('active')) {
                    moreText.classList.add('active');
                    moreBtn.textContent = 'Скрыть';
                    if (btn) {  // Проверка на наличие btn
                        btn.classList.add('active');
                    }
                } else {
                    moreText.classList.remove('active');
                    moreBtn.textContent = 'Подробнее';
                    if (btn) {  // Проверка на наличие btn
                        btn.classList.remove('active');
                    }
                }
            });
        }
    });

    // Получаем ссылки на все табы
    const tabs = document.querySelectorAll(".tabs a");

    // Добавляем обработчики событий для каждого таба
    tabs.forEach(function (tab) {
        tab.addEventListener("click", function (e) {
            e.preventDefault();

            // Проверяем, не является ли выбранный таб уже активным
            if (!tab.classList.contains("active")) {
                // Удаляем активный класс у всех табов
                tabs.forEach(function (tab) {
                    tab.classList.remove("active");
                });

                // Добавляем активный класс выбранному табу
                tab.classList.add("active");

                // Получаем id соответствующего контейнера с содержимым таба
                const targetId = tab.getAttribute("href").substr(1);
                // Удаляем активный класс у всех контейнеров с содержимым табов
                document
                    .querySelectorAll(".products-inner__wrapp")
                    .forEach(function (tabContent) {
                        tabContent.classList.remove("active");
                    });

                // Добавляем активный класс соответствующему контейнеру с содержимым выбранного таба
                document.getElementById(targetId).classList.add("active");
            }
        });
    });

    // Устанавливаем активный класс для первого таба при загрузке страницы
    if (tabs > 0) {
        tabs[0].classList.add("active");
    }

    const openModal = document.querySelectorAll('.map svg path');
    const modal = document.querySelector('.modal');
    const closeModal = document.querySelector('.close-modal');
    if (modal) {
        const showModal = () => {
            modal.classList.add('active');
            document.documentElement.style.overflow = "hidden";
        }

        openModal.forEach((open) => {
            const attribute = open.getAttribute('data-id')
            open.addEventListener('click', () => {
                showModal()
            })
        });

        const hideModal = () => {
            modal.classList.remove('active');
            document.documentElement.style.overflow = "auto";
        };

        closeModal.addEventListener('click', () => {
            hideModal()
        });
    }


    const popup = document.querySelector('.popup');
    const openPopup = document.querySelectorAll('.video__slide-video');
    const closePopup = document.querySelector('.close-popup');

    const showPopup = () => {
        popup.classList.add('active');
        document.documentElement.style.overflow = "hidden";
    };

    const hidePopup = () => {
        popup.classList.remove('active');
        document.documentElement.style.overflow = "auto";
    };

    openPopup.forEach((open) => {
        open.addEventListener('click', () => {
            showPopup()
        })
    });

    closePopup.addEventListener('click', () => {
        hidePopup()
    });

    const inputContainers = document.querySelectorAll('.input-container');

    inputContainers.forEach((container) => {
        const input = container.querySelector('input');
        const divElem = container.querySelector('div');

        if (input && divElem) {
            // Событие для клика на input
            input.addEventListener('click', () => {
                divElem.style.display = 'none';
            });

            // Событие для клика вне input
            document.addEventListener('click', (event) => {
                if (!container.contains(event.target) && input.value === '') {
                    divElem.style.display = 'block';
                }
            });
        }
    });

    const select = document.querySelector('.select-wrapp select');
    const selectElem = document.querySelector('.select-wrapp span');

    select.addEventListener('change', () => {
        selectElem.style.display = 'none'
    });

});


