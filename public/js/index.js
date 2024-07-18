document.addEventListener('DOMContentLoaded', function () {
    const openMenu = document.querySelector('.menu-open');
    const openMenuSpan = document.querySelector('.menu-open span');
    const menuIcon = document.querySelector('.header-menu-icon');
    const menu = document.querySelector('.header__nav');
    const header = document.querySelector('.header');
    const logoSvg = document.querySelector('.header__logo svg');
    const logoImg = document.querySelector('.header__logo img');
    const otherLogo = document.querySelector('.header__logo-2 svg path');
    const headerTop = document.querySelector('.header__top');
    const navElements = document.querySelectorAll('.change-color');
    const menuLinks = document.querySelectorAll('.menu-link');
    const submenuLinks = document.querySelectorAll('.submenu-link');
    const searchSvgPath = document.querySelectorAll('.search__btn svg path');
    let originalHeaderBg;
    let clickTimeout;

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
        menuIcon.classList.toggle('_active');
        if (header.classList.contains('active')) {
            originalHeaderBg = header.style.background;
            openMenuSpan.textContent = 'Закрыть';
            logoSvg.style.display = 'none';
            logoImg.style.display = 'block';
            otherLogo.style.fill = '#FF0100';
            header.style.backgroundColor = '#fff';
            header.style.height = 'auto';
            headerTop.classList.add('active');
            searchSvgPath.forEach((path) => {
                path.style.stroke = "#000"
            });
            navElements.forEach((elem) => {
                elem.style.color = '#000';
            });
        } else {
            resetHeader();
            closeSubmenus(); // Close all submenus when the main menu is closed
        }
    });

    function closeMenu() {
        menu.classList.remove('active');
        header.classList.remove('active');
        menuIcon.classList.remove('_active');
        resetHeader();
        closeSubmenus(); // Close all submenus when the main menu is closed
    }

    function resetHeader() {
        openMenuSpan.textContent = 'Меню'
        logoSvg.style.display = 'block';
        logoImg.style.display = 'none';
        otherLogo.style.fill = '#fff';
        searchSvgPath.forEach((path) => {
            path.style.stroke = "#fff"
        });
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

    function closeSubmenus() {
        document.querySelectorAll('.sub-list.active, .sub-sub-list.active').forEach(subMenu => {
            subMenu.classList.remove('active');
        });
    }

    document.addEventListener('click', function (event) {
        if (!header.contains(event.target) && !menu.contains(event.target) && header.classList.contains('active')) {
            closeMenu();
        }
    });

    if(screen.width < 993) {
        menuLinks.forEach((link) => {
            const subMenu = link.nextElementSibling; // Find the next sibling element which is the submenu
            let isFirstClick = true; // Track the click state
            link.addEventListener('click', (event) => {
                if (subMenu) {
                    if (isFirstClick) {
                        event.preventDefault(); // Prevent the default link action
                        subMenu.classList.toggle('active');
                        isFirstClick = false;
                    } else {
                        isFirstClick = true;
                    }
                }
            });
        });

        submenuLinks.forEach((link) => {
            const subSubMenu = link.nextElementSibling; // Find the next sibling element which is the sub-submenu
            let isFirstClick = true; // Track the click state
            link.addEventListener('click', (event) => {
                if (subSubMenu) {
                    if (isFirstClick) {
                        event.preventDefault(); // Prevent the default link action
                        subSubMenu.classList.toggle('active');
                        isFirstClick = false;
                    } else {
                        isFirstClick = true;
                    }
                }
            });
        });
    }


    const openSearch = document.querySelector('.search__btn');
    const search = document.querySelector('.header__search form');
    const searchInput = document.querySelector('.header__search form input');
    const searchNotFound = document.querySelector('.search__result-not-found');
    const searchResult = document.querySelector('.search__result');


    openSearch.addEventListener('click', () => {
        search.classList.toggle('active');
    });

    document.addEventListener('click', (event) => {
        if (!search.contains(event.target) && !openSearch.contains(event.target)) {
            search.classList.remove('active');
            searchResult.classList.remove('active');
            searchNotFound.style.display = 'none';
            searchInput.value = '';
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
        loop: true,
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
                centeredSlides: false,
                initialSlide: 0,
            },
            998: {
                slidesPerView: 3,
                centeredSlides: true,
                initialSlide: 2,
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
        const leftBlock = container.querySelector('.service__left');
        // const showBtn = container.querySelector('.show-btn');
        // const hiddenText = container.querySelector('.hidden-text');

        if (moreBtn && moreText) {
            moreBtn.addEventListener('click', () => {
                if (!moreText.classList.contains('active')) {
                    moreText.classList.add('active');
                    leftBlock.classList.add('active');
                    moreBtn.textContent = 'Скрыть';
                    if (btn) {  // Проверка на наличие btn
                        btn.classList.add('active');
                    }
                } else {
                    moreText.classList.remove('active');
                    leftBlock.classList.remove('active');
                    moreBtn.textContent = 'Подробнее';
                    if (btn) {  // Проверка на наличие btn
                        btn.classList.remove('active');
                    }
                }
            });
        };
        // if(showBtn && hiddenText) {
        //     showBtn.addEventListener('click', () => {
        //         if(!hiddenText.classList.contains('active')) {
        //             hiddenText.classList.add('active');
        //             showBtn.textContent = 'Скрыть';
        //         } else {
        //             hiddenText.classList.remove('active');
        //             showBtn.textContent = 'Подробнее';
        //         }

        //     });
        // }
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

    const popup = document.querySelector('.popup');
    const openPopup = document.querySelectorAll('.video__slide-video');
    const closePopup = document.querySelector('.close-popup');
    const popupVideo = document.getElementById('popup-video');

    const showPopup = (url) => {
        popupVideo.src = url;
        popup.classList.add('active');
        document.documentElement.style.overflow = "hidden";
    };

    const hidePopup = () => {
        popup.classList.remove('active');
        popupVideo.src = ''; // Очистка URL видео
        document.documentElement.style.overflow = "auto";
    };

    openPopup.forEach((open) => {
        open.addEventListener('click', () => {
            const videoUrl = open.getAttribute('data-url');
            showPopup(videoUrl);
        });
    });

    closePopup.addEventListener('click', () => {
        hidePopup();
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

            // Событие для изменения значения input (включая автозаполнение)
            input.addEventListener('input', () => {
                if (input.value !== '') {
                    divElem.style.display = 'none';
                }
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
    if (select) {
        select.addEventListener('change', () => {
            selectElem.style.display = 'none'
        });
        document.getElementById('message').addEventListener('change', function () {
            var textarea = document.querySelector('textarea[name="text"]');
            const selectedOption = this.options[this.selectedIndex];
            const dataValue = selectedOption.getAttribute('data-value');
            if (dataValue === 'Other') {
                textarea.classList.add('active');
            } else {
                textarea.classList.remove('active');
            }
        });
    }



    const openModalElements = document.querySelectorAll('.map svg path[data-id]');

    // Добавляем обработчик клика для каждой области карты
    openModalElements.forEach(element => {
        element.addEventListener('click', () => {
            const attribute = element.getAttribute('data-id');

            // Выполняем запрос к API для получения данных по data-id
            fetch(`https://sm.limestone.kz/api/maps/${attribute}`)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`Ошибка HTTP: ${response.status}`);
                    }
                    return response.json(); // Парсинг JSON из ответа
                })
                .then(jsonData => JSON.parse(jsonData))
                .then(data => {
                    // console.log(data)
                    // Создаем модальное окно
                    const modal = document.createElement('div');
                    modal.classList.add('modal');

                    // Заполняем модальное окно данными из API
                    modal.innerHTML = `
                    <div data-id="1" class="modal__wrapper">
            <div class="modal__group">
                <h2 data-title="Костанайская область, ул. Уалиханова, 187" class="title">${data.head_title}</h2>
            </div>
            <div class="modal__container">
                <div class="modal__left">
                    <h3 data-subtitle="Сервисный центр г. Кокшетау">${data.subtitle1}</h3>
                    <div class="modal__left-wrapp">
                        <div class="modal__box">
                            <h4 data-subtitle-service="Сервисная служба">${data.title1}</h4>
                            <span data-service-name="Ольга Милованова">${data.name1}</span>
                            <a data-service-tel="+77017510274" href="tel:+77017510274">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="20" height="20" rx="10" fill="#6EB513"/>
                                    <path d="M8.31546 6.0848C7.85851 5.66493 7.15614 5.66493 6.6992 6.0848C6.68049 6.102 6.66051 6.12198 6.63457 6.14793L6.24476 6.53773C5.85252 6.92997 5.68786 7.49542 5.8082 8.03693C6.49094 11.1093 8.89037 13.5087 11.9627 14.1914C12.5042 14.3118 13.0697 14.1471 13.4619 13.7549L13.8517 13.3651C13.8776 13.3391 13.8976 13.3192 13.9148 13.3004C14.3347 12.8435 14.3347 12.1411 13.9148 11.6842C13.8976 11.6655 13.8776 11.6455 13.8517 11.6195L13.2135 10.9814C12.7705 10.5383 12.1014 10.4116 11.527 10.662C11.1982 10.8053 10.8151 10.7328 10.5615 10.4791L9.52051 9.43814C9.26686 9.18449 9.19432 8.80144 9.33766 8.47261C9.58803 7.89824 9.46131 7.22915 9.01826 6.7861L8.3801 6.14793C8.35415 6.12198 8.33417 6.102 8.31546 6.0848Z" fill="white"/>
                                    <path d="M10.9913 7.06647C11.0292 7.06647 11.0447 7.06648 11.0573 7.06666C12.0561 7.08097 12.8623 7.88715 12.8766 8.88591C12.8768 8.89854 12.8768 8.91405 12.8768 8.95194V9.19763C12.8768 9.37753 13.0226 9.52337 13.2025 9.52337C13.3824 9.52337 13.5282 9.37753 13.5282 9.19763V8.94879C13.5282 8.91504 13.5282 8.8945 13.528 8.87658C13.5086 7.52532 12.4179 6.4346 11.0667 6.41525C11.0487 6.41499 11.0282 6.41499 10.9944 6.41499H10.7456C10.5657 6.41499 10.4199 6.56083 10.4199 6.74073C10.4199 6.92063 10.5657 7.06647 10.7456 7.06647H10.9913Z" fill="white"/>
                                    </svg>
                                ${data.num1}</a>
                                <a data-service-email="olga.milovanova@ctagro.de" href="mailto:olga.milovanova@ctagro.de">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="20" height="20" rx="10" fill="#6EB513"/>
                                        <g clip-path="url(#clip0_448_8115)">
                                        <path d="M5.82014 7.47709C5.67969 7.99973 5.67969 8.72074 5.67969 9.83343C5.67969 11.4139 5.67969 12.2041 6.08217 12.7581C6.21216 12.937 6.3695 13.0944 6.54841 13.2243C7.10238 13.6268 7.89261 13.6268 9.47308 13.6268H10.3161C11.8965 13.6268 12.6868 13.6268 13.2407 13.2243C13.4196 13.0944 13.577 12.937 13.707 12.7581C14.1095 12.2041 14.1095 11.4139 14.1095 9.83343C14.1095 8.71703 14.1095 7.99493 13.9676 7.47187L13.0813 8.35817C12.3933 9.04615 11.8542 9.58531 11.3769 9.94943C10.8885 10.3221 10.4279 10.5411 9.89451 10.5411C9.36114 10.5411 8.90056 10.3221 8.41209 9.94943C7.93485 9.58531 7.3957 9.04615 6.70771 8.35816L5.88363 7.53407L5.82014 7.47709Z" fill="white"/>
                                        <path d="M6.10118 6.88302L6.14705 6.92098L6.31861 7.07494L7.13767 7.894C7.84647 8.6028 8.35606 9.11144 8.79559 9.44679C9.22783 9.77657 9.55496 9.90885 9.89451 9.90885C10.2341 9.90885 10.5612 9.77657 10.9934 9.44679C11.433 9.11144 11.9426 8.6028 12.6514 7.894L13.6241 6.92125L13.6771 6.8686C13.5471 6.68969 13.4196 6.57251 13.2407 6.44252C12.6868 6.04004 11.8965 6.04004 10.3161 6.04004H9.47308C7.89261 6.04004 7.10238 6.04004 6.54841 6.44252C6.3695 6.57251 6.23116 6.7041 6.10118 6.88302Z" fill="white"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_448_8115">
                                        <rect width="9" height="9" fill="white" transform="translate(5.5 5.5)"/>
                                        </clipPath>
                                        </defs>
                                        </svg>

                                    ${data.email1}</a>
                        </div>
                        <div class="modal__box">
                            <h4 data-subtitle="Запасные части">${data.title2}</h4>
                            <span data-spares-name="Ольга Милованова">${data.name2}</span>
                            <a data-spares-tel="+77017510274" href="tel:+77017510274">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="20" height="20" rx="10" fill="#6EB513"/>
                                    <path d="M8.31546 6.0848C7.85851 5.66493 7.15614 5.66493 6.6992 6.0848C6.68049 6.102 6.66051 6.12198 6.63457 6.14793L6.24476 6.53773C5.85252 6.92997 5.68786 7.49542 5.8082 8.03693C6.49094 11.1093 8.89037 13.5087 11.9627 14.1914C12.5042 14.3118 13.0697 14.1471 13.4619 13.7549L13.8517 13.3651C13.8776 13.3391 13.8976 13.3192 13.9148 13.3004C14.3347 12.8435 14.3347 12.1411 13.9148 11.6842C13.8976 11.6655 13.8776 11.6455 13.8517 11.6195L13.2135 10.9814C12.7705 10.5383 12.1014 10.4116 11.527 10.662C11.1982 10.8053 10.8151 10.7328 10.5615 10.4791L9.52051 9.43814C9.26686 9.18449 9.19432 8.80144 9.33766 8.47261C9.58803 7.89824 9.46131 7.22915 9.01826 6.7861L8.3801 6.14793C8.35415 6.12198 8.33417 6.102 8.31546 6.0848Z" fill="white"/>
                                    <path d="M10.9913 7.06647C11.0292 7.06647 11.0447 7.06648 11.0573 7.06666C12.0561 7.08097 12.8623 7.88715 12.8766 8.88591C12.8768 8.89854 12.8768 8.91405 12.8768 8.95194V9.19763C12.8768 9.37753 13.0226 9.52337 13.2025 9.52337C13.3824 9.52337 13.5282 9.37753 13.5282 9.19763V8.94879C13.5282 8.91504 13.5282 8.8945 13.528 8.87658C13.5086 7.52532 12.4179 6.4346 11.0667 6.41525C11.0487 6.41499 11.0282 6.41499 10.9944 6.41499H10.7456C10.5657 6.41499 10.4199 6.56083 10.4199 6.74073C10.4199 6.92063 10.5657 7.06647 10.7456 7.06647H10.9913Z" fill="white"/>
                                    </svg>
                                ${data.num2}</a>
                                <a data-spares-email="olga.milovanova@ctagro.de" href="mailto:olga.milovanova@ctagro.de">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="20" height="20" rx="10" fill="#6EB513"/>
                                        <g clip-path="url(#clip0_448_8115)">
                                        <path d="M5.82014 7.47709C5.67969 7.99973 5.67969 8.72074 5.67969 9.83343C5.67969 11.4139 5.67969 12.2041 6.08217 12.7581C6.21216 12.937 6.3695 13.0944 6.54841 13.2243C7.10238 13.6268 7.89261 13.6268 9.47308 13.6268H10.3161C11.8965 13.6268 12.6868 13.6268 13.2407 13.2243C13.4196 13.0944 13.577 12.937 13.707 12.7581C14.1095 12.2041 14.1095 11.4139 14.1095 9.83343C14.1095 8.71703 14.1095 7.99493 13.9676 7.47187L13.0813 8.35817C12.3933 9.04615 11.8542 9.58531 11.3769 9.94943C10.8885 10.3221 10.4279 10.5411 9.89451 10.5411C9.36114 10.5411 8.90056 10.3221 8.41209 9.94943C7.93485 9.58531 7.3957 9.04615 6.70771 8.35816L5.88363 7.53407L5.82014 7.47709Z" fill="white"/>
                                        <path d="M6.10118 6.88302L6.14705 6.92098L6.31861 7.07494L7.13767 7.894C7.84647 8.6028 8.35606 9.11144 8.79559 9.44679C9.22783 9.77657 9.55496 9.90885 9.89451 9.90885C10.2341 9.90885 10.5612 9.77657 10.9934 9.44679C11.433 9.11144 11.9426 8.6028 12.6514 7.894L13.6241 6.92125L13.6771 6.8686C13.5471 6.68969 13.4196 6.57251 13.2407 6.44252C12.6868 6.04004 11.8965 6.04004 10.3161 6.04004H9.47308C7.89261 6.04004 7.10238 6.04004 6.54841 6.44252C6.3695 6.57251 6.23116 6.7041 6.10118 6.88302Z" fill="white"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_448_8115">
                                        <rect width="9" height="9" fill="white" transform="translate(5.5 5.5)"/>
                                        </clipPath>
                                        </defs>
                                        </svg>

                                    ${data.email2}</a>
                        </div>
                    </div>
                </div>
                <div class="modal__right">
                    <h3>${data.subtitle2}</h3>
                    <div class="modal__left-wrapp">
                        <div class="modal__box">
                            <h4>${data.title3}</h4>
                            <span data-name="">${data.name3}</span>
                            <a data-tel="" href="tel:+77017510274">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="20" height="20" rx="10" fill="#6EB513"/>
                                    <path d="M8.31546 6.0848C7.85851 5.66493 7.15614 5.66493 6.6992 6.0848C6.68049 6.102 6.66051 6.12198 6.63457 6.14793L6.24476 6.53773C5.85252 6.92997 5.68786 7.49542 5.8082 8.03693C6.49094 11.1093 8.89037 13.5087 11.9627 14.1914C12.5042 14.3118 13.0697 14.1471 13.4619 13.7549L13.8517 13.3651C13.8776 13.3391 13.8976 13.3192 13.9148 13.3004C14.3347 12.8435 14.3347 12.1411 13.9148 11.6842C13.8976 11.6655 13.8776 11.6455 13.8517 11.6195L13.2135 10.9814C12.7705 10.5383 12.1014 10.4116 11.527 10.662C11.1982 10.8053 10.8151 10.7328 10.5615 10.4791L9.52051 9.43814C9.26686 9.18449 9.19432 8.80144 9.33766 8.47261C9.58803 7.89824 9.46131 7.22915 9.01826 6.7861L8.3801 6.14793C8.35415 6.12198 8.33417 6.102 8.31546 6.0848Z" fill="white"/>
                                    <path d="M10.9913 7.06647C11.0292 7.06647 11.0447 7.06648 11.0573 7.06666C12.0561 7.08097 12.8623 7.88715 12.8766 8.88591C12.8768 8.89854 12.8768 8.91405 12.8768 8.95194V9.19763C12.8768 9.37753 13.0226 9.52337 13.2025 9.52337C13.3824 9.52337 13.5282 9.37753 13.5282 9.19763V8.94879C13.5282 8.91504 13.5282 8.8945 13.528 8.87658C13.5086 7.52532 12.4179 6.4346 11.0667 6.41525C11.0487 6.41499 11.0282 6.41499 10.9944 6.41499H10.7456C10.5657 6.41499 10.4199 6.56083 10.4199 6.74073C10.4199 6.92063 10.5657 7.06647 10.7456 7.06647H10.9913Z" fill="white"/>
                                    </svg>
                                ${data.num3}</a>
                                <a data-email="" href="mailto:olga.milovanova@ctagro.de">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="20" height="20" rx="10" fill="#6EB513"/>
                                        <g clip-path="url(#clip0_448_8115)">
                                        <path d="M5.82014 7.47709C5.67969 7.99973 5.67969 8.72074 5.67969 9.83343C5.67969 11.4139 5.67969 12.2041 6.08217 12.7581C6.21216 12.937 6.3695 13.0944 6.54841 13.2243C7.10238 13.6268 7.89261 13.6268 9.47308 13.6268H10.3161C11.8965 13.6268 12.6868 13.6268 13.2407 13.2243C13.4196 13.0944 13.577 12.937 13.707 12.7581C14.1095 12.2041 14.1095 11.4139 14.1095 9.83343C14.1095 8.71703 14.1095 7.99493 13.9676 7.47187L13.0813 8.35817C12.3933 9.04615 11.8542 9.58531 11.3769 9.94943C10.8885 10.3221 10.4279 10.5411 9.89451 10.5411C9.36114 10.5411 8.90056 10.3221 8.41209 9.94943C7.93485 9.58531 7.3957 9.04615 6.70771 8.35816L5.88363 7.53407L5.82014 7.47709Z" fill="white"/>
                                        <path d="M6.10118 6.88302L6.14705 6.92098L6.31861 7.07494L7.13767 7.894C7.84647 8.6028 8.35606 9.11144 8.79559 9.44679C9.22783 9.77657 9.55496 9.90885 9.89451 9.90885C10.2341 9.90885 10.5612 9.77657 10.9934 9.44679C11.433 9.11144 11.9426 8.6028 12.6514 7.894L13.6241 6.92125L13.6771 6.8686C13.5471 6.68969 13.4196 6.57251 13.2407 6.44252C12.6868 6.04004 11.8965 6.04004 10.3161 6.04004H9.47308C7.89261 6.04004 7.10238 6.04004 6.54841 6.44252C6.3695 6.57251 6.23116 6.7041 6.10118 6.88302Z" fill="white"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_448_8115">
                                        <rect width="9" height="9" fill="white" transform="translate(5.5 5.5)"/>
                                        </clipPath>
                                        </defs>
                                        </svg>

                                    ${data.email3}</a>
                        </div>
                        <div class="modal__box">
                            <h4>${data.title4}</h4>
                            <span data-name="">${data.name4}</span>
                            <a data-tel="" href="tel:+77017510274">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="20" height="20" rx="10" fill="#6EB513"/>
                                    <path d="M8.31546 6.0848C7.85851 5.66493 7.15614 5.66493 6.6992 6.0848C6.68049 6.102 6.66051 6.12198 6.63457 6.14793L6.24476 6.53773C5.85252 6.92997 5.68786 7.49542 5.8082 8.03693C6.49094 11.1093 8.89037 13.5087 11.9627 14.1914C12.5042 14.3118 13.0697 14.1471 13.4619 13.7549L13.8517 13.3651C13.8776 13.3391 13.8976 13.3192 13.9148 13.3004C14.3347 12.8435 14.3347 12.1411 13.9148 11.6842C13.8976 11.6655 13.8776 11.6455 13.8517 11.6195L13.2135 10.9814C12.7705 10.5383 12.1014 10.4116 11.527 10.662C11.1982 10.8053 10.8151 10.7328 10.5615 10.4791L9.52051 9.43814C9.26686 9.18449 9.19432 8.80144 9.33766 8.47261C9.58803 7.89824 9.46131 7.22915 9.01826 6.7861L8.3801 6.14793C8.35415 6.12198 8.33417 6.102 8.31546 6.0848Z" fill="white"/>
                                    <path d="M10.9913 7.06647C11.0292 7.06647 11.0447 7.06648 11.0573 7.06666C12.0561 7.08097 12.8623 7.88715 12.8766 8.88591C12.8768 8.89854 12.8768 8.91405 12.8768 8.95194V9.19763C12.8768 9.37753 13.0226 9.52337 13.2025 9.52337C13.3824 9.52337 13.5282 9.37753 13.5282 9.19763V8.94879C13.5282 8.91504 13.5282 8.8945 13.528 8.87658C13.5086 7.52532 12.4179 6.4346 11.0667 6.41525C11.0487 6.41499 11.0282 6.41499 10.9944 6.41499H10.7456C10.5657 6.41499 10.4199 6.56083 10.4199 6.74073C10.4199 6.92063 10.5657 7.06647 10.7456 7.06647H10.9913Z" fill="white"/>
                                    </svg>
                                ${data.num4}</a>
                                <a data-email="" href="mailto:olga.milovanova@ctagro.de">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="20" height="20" rx="10" fill="#6EB513"/>
                                        <g clip-path="url(#clip0_448_8115)">
                                        <path d="M5.82014 7.47709C5.67969 7.99973 5.67969 8.72074 5.67969 9.83343C5.67969 11.4139 5.67969 12.2041 6.08217 12.7581C6.21216 12.937 6.3695 13.0944 6.54841 13.2243C7.10238 13.6268 7.89261 13.6268 9.47308 13.6268H10.3161C11.8965 13.6268 12.6868 13.6268 13.2407 13.2243C13.4196 13.0944 13.577 12.937 13.707 12.7581C14.1095 12.2041 14.1095 11.4139 14.1095 9.83343C14.1095 8.71703 14.1095 7.99493 13.9676 7.47187L13.0813 8.35817C12.3933 9.04615 11.8542 9.58531 11.3769 9.94943C10.8885 10.3221 10.4279 10.5411 9.89451 10.5411C9.36114 10.5411 8.90056 10.3221 8.41209 9.94943C7.93485 9.58531 7.3957 9.04615 6.70771 8.35816L5.88363 7.53407L5.82014 7.47709Z" fill="white"/>
                                        <path d="M6.10118 6.88302L6.14705 6.92098L6.31861 7.07494L7.13767 7.894C7.84647 8.6028 8.35606 9.11144 8.79559 9.44679C9.22783 9.77657 9.55496 9.90885 9.89451 9.90885C10.2341 9.90885 10.5612 9.77657 10.9934 9.44679C11.433 9.11144 11.9426 8.6028 12.6514 7.894L13.6241 6.92125L13.6771 6.8686C13.5471 6.68969 13.4196 6.57251 13.2407 6.44252C12.6868 6.04004 11.8965 6.04004 10.3161 6.04004H9.47308C7.89261 6.04004 7.10238 6.04004 6.54841 6.44252C6.3695 6.57251 6.23116 6.7041 6.10118 6.88302Z" fill="white"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_448_8115">
                                        <rect width="9" height="9" fill="white" transform="translate(5.5 5.5)"/>
                                        </clipPath>
                                        </defs>
                                        </svg>

                                    ${data.email4}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

                    `;

                    // Добавляем модальное окно на страницу
                    document.body.appendChild(modal);

                    // Добавляем кнопку для закрытия модального окна
                    const closeButton = document.createElement('button');
                    closeButton.classList.add('close-modal');
                    closeButton.innerHTML = `<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.10547 2L18.1456 18" stroke="#B9B9B9" stroke-width="2"/>
                        <path d="M17.8945 2L1.85443 18" stroke="#B9B9B9" stroke-width="2"/>
                        </svg>`;
                    closeButton.addEventListener('click', () => {
                        modal.remove(); // Удаляем модальное окно при клике на кнопку "Закрыть"
                    });
                    const modalWrap = document.querySelector('.modal__wrapper');
                    modalWrap.appendChild(closeButton);
                    modal.addEventListener('click', (event) => {
                        if (event.target === modal) {
                            modal.remove();
                        }
                    });

                    // Обработчик для закрытия модального окна при нажатии Escape
                    document.addEventListener('keydown', (event) => {
                        if (event.key === 'Escape') {
                            modal.remove();
                        }
                    }, { once: true });
                })
                .catch(error => {
                    console.error(`Ошибка при получении данных для элемента с data-id="${attribute}":`, error);
                });
        });
    });

    const navContainers = document.querySelectorAll('.navigation__list-mob');

    navContainers.forEach((container) => {
        const navTitle = container.querySelector('.navigation__list-mob h3');
        const navList = container.querySelector('.navigation__list');
        const titleSvg = container.querySelector('.navigation__list-mob h3 svg');

        navTitle.addEventListener('click', () => {
            navList.classList.toggle('active');
            titleSvg.classList.toggle('active');
        });
    });


    const listItems = document.querySelectorAll('.sub-list > li');
    listItems.forEach(function(item) {
        const subSubList = item.querySelector('.sub-sub-list');
        if (subSubList && subSubList.children.length === 0) {
            const svg = item.querySelector('svg');
            if (svg) {
                svg.remove();
            }
        }
    });

    const tableHead = document.querySelector('.table-head');
    const hiddenHead = document.querySelector('.table-head-hidden');
    const tableHeadSvg = document.querySelector('.table-head svg');
    tableHead.addEventListener('click', () => {
        hiddenHead.classList.toggle('active');
        if(hiddenHead.classList.contains('active')) {
            tableHead.classList.add('active');
        } else {
            tableHead.classList.remove('active');
        }
    });


    const tableTabs = document.querySelectorAll(".table-tabs a");
    // Добавляем обработчики событий для каждого таба
    tableTabs.forEach(function (tab) { tab.addEventListener("click", function (e) {
        e.preventDefault();
        // Проверяем, не является ли выбранный таб уже активным
        if (!tab.classList.contains("active")) {
            // Удаляем активный класс у всех табов
            tableTabs.forEach(function (tab) { tab.classList.remove("active");
            });
            // Добавляем активный класс выбранному табу
            tab.classList.add("active");
            // Обновляем заголовок
            document.getElementById('table-title').textContent = tab.textContent + ' ';
            // Получаем id соответствующего контейнера с содержимым таба
            const targetId = tab.getAttribute("href").substr(1);
            // Удаляем активный класс у всех контейнеров с содержимым табов
            document.querySelectorAll(".table-content").forEach(function (tabContent) {
                tabContent.classList.remove("active"); });
                // Добавляем активный класс соответствующему контейнеру с содержимым выбранного таба
                document.getElementById(targetId).classList.add("active");
            }
        });
    }); // Устанавливаем активный класс для первого таба при загрузке страницы
    if (tableTabs.length > 0) {
        tableTabs[0].classList.add("active");
        document.getElementById('table-title').textContent = tableTabs[0].textContent + ' ';
        // Обновляем заголовок для первого таба
        };
});


