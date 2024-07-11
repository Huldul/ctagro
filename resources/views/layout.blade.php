<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Миссия компании</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="/js/dflip/css/dflip.min.css">
    <link rel="stylesheet" href="/js/dflip/css/themify-icons.min.css">
    <link rel="stylesheet" href="{{asset("css/jquery.fancybox.css")}}">
    <link rel="stylesheet" href="{{asset("css/main.css")}}">
    <link rel="stylesheet" href="{{asset("css/styles.css")}}?v=1.62">
    @livewireStyles
</head>

<body>
    <div class="wrapper">
        @include('components/header')
        @yield('content')
        @include('components/footer')
    </div>
    <!-- <div class="modal">
        <div data-id="1" class="modal__wrapper">
            <div class="modal__group">
                <h2 data-title="Костанайская область, ул. Уалиханова, 187" class="title">Костанайская область, ул. Уалиханова, 187</h2>
                <button class="close-modal">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.10547 2L18.1456 18" stroke="#B9B9B9" stroke-width="2"/>
                        <path d="M17.8945 2L1.85443 18" stroke="#B9B9B9" stroke-width="2"/>
                        </svg>
                </button>
            </div>
            <div class="modal__container">
                <div class="modal__left">
                    <h3 data-subtitle="Сервисный центр г. Кокшетау">Сервисный центр г. Кокшетау</h3>
                    <div class="modal__left-wrapp">
                        <div class="modal__box">
                            <h4 data-subtitle-service="Сервисная служба">Сервисная служба</h4>
                            <span data-service-name="Ольга Милованова">Ольга Милованова</span>
                            <a data-service-tel="+77017510274" href="tel:+77017510274">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="20" height="20" rx="10" fill="#6EB513"/>
                                    <path d="M8.31546 6.0848C7.85851 5.66493 7.15614 5.66493 6.6992 6.0848C6.68049 6.102 6.66051 6.12198 6.63457 6.14793L6.24476 6.53773C5.85252 6.92997 5.68786 7.49542 5.8082 8.03693C6.49094 11.1093 8.89037 13.5087 11.9627 14.1914C12.5042 14.3118 13.0697 14.1471 13.4619 13.7549L13.8517 13.3651C13.8776 13.3391 13.8976 13.3192 13.9148 13.3004C14.3347 12.8435 14.3347 12.1411 13.9148 11.6842C13.8976 11.6655 13.8776 11.6455 13.8517 11.6195L13.2135 10.9814C12.7705 10.5383 12.1014 10.4116 11.527 10.662C11.1982 10.8053 10.8151 10.7328 10.5615 10.4791L9.52051 9.43814C9.26686 9.18449 9.19432 8.80144 9.33766 8.47261C9.58803 7.89824 9.46131 7.22915 9.01826 6.7861L8.3801 6.14793C8.35415 6.12198 8.33417 6.102 8.31546 6.0848Z" fill="white"/>
                                    <path d="M10.9913 7.06647C11.0292 7.06647 11.0447 7.06648 11.0573 7.06666C12.0561 7.08097 12.8623 7.88715 12.8766 8.88591C12.8768 8.89854 12.8768 8.91405 12.8768 8.95194V9.19763C12.8768 9.37753 13.0226 9.52337 13.2025 9.52337C13.3824 9.52337 13.5282 9.37753 13.5282 9.19763V8.94879C13.5282 8.91504 13.5282 8.8945 13.528 8.87658C13.5086 7.52532 12.4179 6.4346 11.0667 6.41525C11.0487 6.41499 11.0282 6.41499 10.9944 6.41499H10.7456C10.5657 6.41499 10.4199 6.56083 10.4199 6.74073C10.4199 6.92063 10.5657 7.06647 10.7456 7.06647H10.9913Z" fill="white"/>
                                    </svg>
                                +7 701 751 02 74</a>
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

                                    olga.milovanova@ctagro.de</a>
                        </div>
                        <div class="modal__box">
                            <h4 data-subtitle-spares="Запасные части">Запасные части</h4>
                            <span data-spares-name="Ольга Милованова">Ольга Милованова</span>
                            <a data-spares-tel="+77017510274" href="tel:+77017510274">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="20" height="20" rx="10" fill="#6EB513"/>
                                    <path d="M8.31546 6.0848C7.85851 5.66493 7.15614 5.66493 6.6992 6.0848C6.68049 6.102 6.66051 6.12198 6.63457 6.14793L6.24476 6.53773C5.85252 6.92997 5.68786 7.49542 5.8082 8.03693C6.49094 11.1093 8.89037 13.5087 11.9627 14.1914C12.5042 14.3118 13.0697 14.1471 13.4619 13.7549L13.8517 13.3651C13.8776 13.3391 13.8976 13.3192 13.9148 13.3004C14.3347 12.8435 14.3347 12.1411 13.9148 11.6842C13.8976 11.6655 13.8776 11.6455 13.8517 11.6195L13.2135 10.9814C12.7705 10.5383 12.1014 10.4116 11.527 10.662C11.1982 10.8053 10.8151 10.7328 10.5615 10.4791L9.52051 9.43814C9.26686 9.18449 9.19432 8.80144 9.33766 8.47261C9.58803 7.89824 9.46131 7.22915 9.01826 6.7861L8.3801 6.14793C8.35415 6.12198 8.33417 6.102 8.31546 6.0848Z" fill="white"/>
                                    <path d="M10.9913 7.06647C11.0292 7.06647 11.0447 7.06648 11.0573 7.06666C12.0561 7.08097 12.8623 7.88715 12.8766 8.88591C12.8768 8.89854 12.8768 8.91405 12.8768 8.95194V9.19763C12.8768 9.37753 13.0226 9.52337 13.2025 9.52337C13.3824 9.52337 13.5282 9.37753 13.5282 9.19763V8.94879C13.5282 8.91504 13.5282 8.8945 13.528 8.87658C13.5086 7.52532 12.4179 6.4346 11.0667 6.41525C11.0487 6.41499 11.0282 6.41499 10.9944 6.41499H10.7456C10.5657 6.41499 10.4199 6.56083 10.4199 6.74073C10.4199 6.92063 10.5657 7.06647 10.7456 7.06647H10.9913Z" fill="white"/>
                                    </svg>
                                +7 701 751 02 74</a>
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

                                    olga.milovanova@ctagro.de</a>
                        </div>
                    </div>
                </div>
                <div class="modal__right">
                    <h3>Региональные представители</h3>
                    <div class="modal__left-wrapp">
                        <div class="modal__box">
                            <h4>Сельхозтехника</h4>
                            <span data-name="">Ольга Милованова</span>
                            <a data-tel="" href="tel:+77017510274">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="20" height="20" rx="10" fill="#6EB513"/>
                                    <path d="M8.31546 6.0848C7.85851 5.66493 7.15614 5.66493 6.6992 6.0848C6.68049 6.102 6.66051 6.12198 6.63457 6.14793L6.24476 6.53773C5.85252 6.92997 5.68786 7.49542 5.8082 8.03693C6.49094 11.1093 8.89037 13.5087 11.9627 14.1914C12.5042 14.3118 13.0697 14.1471 13.4619 13.7549L13.8517 13.3651C13.8776 13.3391 13.8976 13.3192 13.9148 13.3004C14.3347 12.8435 14.3347 12.1411 13.9148 11.6842C13.8976 11.6655 13.8776 11.6455 13.8517 11.6195L13.2135 10.9814C12.7705 10.5383 12.1014 10.4116 11.527 10.662C11.1982 10.8053 10.8151 10.7328 10.5615 10.4791L9.52051 9.43814C9.26686 9.18449 9.19432 8.80144 9.33766 8.47261C9.58803 7.89824 9.46131 7.22915 9.01826 6.7861L8.3801 6.14793C8.35415 6.12198 8.33417 6.102 8.31546 6.0848Z" fill="white"/>
                                    <path d="M10.9913 7.06647C11.0292 7.06647 11.0447 7.06648 11.0573 7.06666C12.0561 7.08097 12.8623 7.88715 12.8766 8.88591C12.8768 8.89854 12.8768 8.91405 12.8768 8.95194V9.19763C12.8768 9.37753 13.0226 9.52337 13.2025 9.52337C13.3824 9.52337 13.5282 9.37753 13.5282 9.19763V8.94879C13.5282 8.91504 13.5282 8.8945 13.528 8.87658C13.5086 7.52532 12.4179 6.4346 11.0667 6.41525C11.0487 6.41499 11.0282 6.41499 10.9944 6.41499H10.7456C10.5657 6.41499 10.4199 6.56083 10.4199 6.74073C10.4199 6.92063 10.5657 7.06647 10.7456 7.06647H10.9913Z" fill="white"/>
                                    </svg>
                                +7 701 751 02 74</a>
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

                                    olga.milovanova@ctagro.de</a>
                        </div>
                        <div class="modal__box">
                            <h4>Овощеводство</h4>
                            <span data-name="">Ольга Милованова</span>
                            <a data-tel="" href="tel:+77017510274">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="20" height="20" rx="10" fill="#6EB513"/>
                                    <path d="M8.31546 6.0848C7.85851 5.66493 7.15614 5.66493 6.6992 6.0848C6.68049 6.102 6.66051 6.12198 6.63457 6.14793L6.24476 6.53773C5.85252 6.92997 5.68786 7.49542 5.8082 8.03693C6.49094 11.1093 8.89037 13.5087 11.9627 14.1914C12.5042 14.3118 13.0697 14.1471 13.4619 13.7549L13.8517 13.3651C13.8776 13.3391 13.8976 13.3192 13.9148 13.3004C14.3347 12.8435 14.3347 12.1411 13.9148 11.6842C13.8976 11.6655 13.8776 11.6455 13.8517 11.6195L13.2135 10.9814C12.7705 10.5383 12.1014 10.4116 11.527 10.662C11.1982 10.8053 10.8151 10.7328 10.5615 10.4791L9.52051 9.43814C9.26686 9.18449 9.19432 8.80144 9.33766 8.47261C9.58803 7.89824 9.46131 7.22915 9.01826 6.7861L8.3801 6.14793C8.35415 6.12198 8.33417 6.102 8.31546 6.0848Z" fill="white"/>
                                    <path d="M10.9913 7.06647C11.0292 7.06647 11.0447 7.06648 11.0573 7.06666C12.0561 7.08097 12.8623 7.88715 12.8766 8.88591C12.8768 8.89854 12.8768 8.91405 12.8768 8.95194V9.19763C12.8768 9.37753 13.0226 9.52337 13.2025 9.52337C13.3824 9.52337 13.5282 9.37753 13.5282 9.19763V8.94879C13.5282 8.91504 13.5282 8.8945 13.528 8.87658C13.5086 7.52532 12.4179 6.4346 11.0667 6.41525C11.0487 6.41499 11.0282 6.41499 10.9944 6.41499H10.7456C10.5657 6.41499 10.4199 6.56083 10.4199 6.74073C10.4199 6.92063 10.5657 7.06647 10.7456 7.06647H10.9913Z" fill="white"/>
                                    </svg>
                                +7 701 751 02 74</a>
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

                                    olga.milovanova@ctagro.de</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="popup">
        <div class="popup__wrapper">
            <button class="close-popup">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.10547 2L18.1456 18" stroke="#B9B9B9" stroke-width="2"/>
                    <path d="M17.8945 2L1.85443 18" stroke="#B9B9B9" stroke-width="2"/>
                    </svg>
            </button>
            <iframe id="popup-video" width="560" height="315" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </div>
    <script src="{{asset("js/jquery-3.6.0.min.js")}}"></script>
    <script src="{{asset("js/jquery.fancybox.min.js")}}"></script>

<!-- Подключение PDF.js -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.10.377/pdf.worker.min.js"></script> -->
    <script src="{{asset("js/dflip/js/libs/pdf.min.js")}}"></script>
    <script src="{{asset("js/dflip/js/libs/pdf.worker.min.js")}}"></script>
    <script src="{{asset("js/dflip/js/dflip.min.js")}}"></script>
    <script>

			var dFlipLocation = 'https://sm.limestone.kz/js/dflip/';
        	$(document).ready(function() {
        	        $('#report_1').html('');
        	        let pdf = $('#report_1').data('file');
        	        let options = {
        	            height: 600,
        	            webgl: false
        	        };
        	        let flipBook = $('#report_1').flipBook(pdf, options);
        	});

    </script>
    <script src="{{asset("js/jquery.maskedinput.min.js")}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{asset("js/index.js")}}?v=1.38"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script>
        $(document).ready(function() {
            $('form').on('submit', function(event) {
                event.preventDefault();

                var query = $('input[type="search"]').val();

                $.ajax({
                    url: "{{ route('product.search') }}",
                    type: 'GET',
                    data: { query: query },
                    success: function(data) {
                        var resultContainer = $('.search__result');
                        resultContainer.empty();

                        if (data.length === 0) {
                            $('.search__result-not-found').show();
                            resultContainer.removeClass('active');
                        } else {
                            $('.search__result-not-found').hide();
                            data.forEach(function(product) {
                                var locale = "{{ app()->getLocale() }}";
                                var productHtml = `
                                    <div class="product">
                                        <a href="/${locale}/product/${product.slug}">
                                            <h2>${product.title}</h2>
                                        </a>
                                    </div>
                                `;
                                resultContainer.append(productHtml);
                            });
                            resultContainer.addClass('active');
                        }
                    }
                });
            });
        });
        </script>

    @livewireScripts
</body>

</html>
