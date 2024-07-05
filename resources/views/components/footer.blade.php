<footer class="footer">
    <div class="footer__wrapper container">
        <div class="footer__top">
            <nav class="footer__navigation navigation">
            <div class="navigation__list-mob">
                    <h3>О компании
                         <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 8.5L6 13.5L6 3.5L11 8.5Z" fill="#6EB513"/>
                        </svg>
                    </h3>
                    <ul class="navigation__list">
                    <li>
                        <a href="{{ route('about', ['locale' => app()->getLocale()]) }}">Миссия компании</a>
                    </li>
                    <li>
                        <a href="{{ route('partners', ['locale' => app()->getLocale()]) }}">Наши партнеры</a>
                    </li>
                    <li>
                        <a href="{{ route('offers', ['locale' => app()->getLocale()]) }}">Спецпредложения</a>
                    </li>
                    <li>
                        <a href="{{setting('site.ct_assembly')}}">Сборочное предприятие CTAssembly</a>
                    </li>
                    <li>
                        <a href="{{ route('news', ['locale' => app()->getLocale()]) }}">Новости</a>
                    </li>
                    <li>
                        <a href="{{ route('media', ['locale' => app()->getLocale()]) }}">Пресса о нас</a>
                    </li>
                    <li>
                        <a href="{{ route('reviews', ['locale' => app()->getLocale()]) }}">Отзывы</a>
                    </li>
                    </ul>
                </div>
                <ul class="navigation__list">
                    <h3>О компании</h3>
                    <li>
                        <a href="{{ route('about', ['locale' => app()->getLocale()]) }}">Миссия компании</a>
                    </li>
                    <li>
                        <a href="{{ route('partners', ['locale' => app()->getLocale()]) }}">Наши партнеры</a>
                    </li>
                    <li>
                        <a href="{{ route('offers', ['locale' => app()->getLocale()]) }}">Спецпредложения</a>
                    </li>
                    <li>
                        <a href="{{setting('site.ct_assembly')}}">Сборочное предприятие CTAssembly</a>
                    </li>
                    <li>
                        <a href="{{ route('news', ['locale' => app()->getLocale()]) }}">Новости</a>
                    </li>
                    <li>
                        <a href="{{ route('media', ['locale' => app()->getLocale()]) }}">Пресса о нас</a>
                    </li>
                    <li>
                        <a href="{{ route('reviews', ['locale' => app()->getLocale()]) }}">Отзывы</a>
                    </li>
                </ul>
                <div class="navigation__list-mob">
                    <h3>Техника
                         <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 8.5L6 13.5L6 3.5L11 8.5Z" fill="#6EB513"/>
                        </svg>
                    </h3>
                    <ul class="navigation__list">
                    @foreach ($types as $type)
                    <li>
                        <a href="{{ route('catalog-inner', ['locale' => app()->getLocale(), 'slug' => $type->slug]) }}">{{ $type->title }}</a>
                    </li>
                    @endforeach
                    {{-- <li>
                        <a href="./catalog-inner.html">Техника для овощеводства</a>
                    </li>
                    <li>
                        <a href="./catalog-inner.html">Орошение</a>
                    </li> --}}
                    <li>
                        <a href="{{ route('catalog-library', ['locale' => app()->getLocale()]) }}">Библиотека каталогов</a>
                    </li>
                    </ul>
                </div>
                <ul class="navigation__list">
                    <h3>Техника</h3>
                    @foreach ($types as $type)
                    <li>
                        <a href="{{ route('catalog-inner', ['locale' => app()->getLocale(), 'slug' => $type->slug]) }}">{{ $type->title }}</a>
                    </li>
                    @endforeach
                    {{-- <li>
                        <a href="./catalog-inner.html">Техника для овощеводства</a>
                    </li>
                    <li>
                        <a href="./catalog-inner.html">Орошение</a>
                    </li> --}}
                    <li>
                        <a href="{{ route('catalog-library', ['locale' => app()->getLocale()]) }}">Библиотека каталогов</a>
                    </li>
                </ul>
                <div class="navigation__list-mob">
                    <h3>Запчасти и сервис
                         <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 8.5L6 13.5L6 3.5L11 8.5Z" fill="#6EB513"/>
                        </svg>
                    </h3>
                    <ul class="navigation__list">
                    <li>
                        <a href="{{ route('service', ['locale' => app()->getLocale()]) }}">Сервис</a>
                    </li>
                    <li>
                        <a href="{{ route('spares', ['locale' => app()->getLocale()]) }}">Запасные части</a>
                    </li>
                    <li>
                        <a href="#">Ремонт двигателей</a>
                    </li>
                    </ul>
                </div>
                <ul class="navigation__list">
                    <h3>Запчасти и сервис</h3>
                    <li>
                        <a href="{{ route('service', ['locale' => app()->getLocale()]) }}">Сервис</a>
                    </li>
                    <li>
                        <a href="{{ route('spares', ['locale' => app()->getLocale()]) }}">Запасные части</a>
                    </li>
                    <li>
                        <a href="#">Ремонт двигателей</a>
                    </li>
                </ul>
                <div class="navigation__list-mob">
                    <h3>Контакты
                         <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11 8.5L6 13.5L6 3.5L11 8.5Z" fill="#6EB513"/>
                        </svg>
                    </h3>
                    <ul class="navigation__list">
                    <li>
                        <a href="{{ route('contacts', ['locale' => app()->getLocale()]) }}">Карта присутствия</a>
                    </li>
                    </ul>
                </div>
                <ul class="navigation__list">
                    <h3>Контакты</h3>
                    <li>
                        <a href="{{ route('contacts', ['locale' => app()->getLocale()]) }}">Карта присутствия</a>
                    </li>
                </ul>
                <ul class="navigation__socials">
                    <h3>Будьте в курсе</h3>
                    <div class="footer-socials">
                        <li>
                            <a href="{{setting('.instagram')}}">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M29.9235 10.2321C29.8578 8.74428 29.6173 7.72154 29.2726 6.83521C28.917 5.89445 28.37 5.05221 27.6535 4.35202C26.9533 3.64094 26.1054 3.08838 25.1756 2.73843C24.2842 2.39383 23.2667 2.15315 21.779 2.08763C20.2801 2.01641 19.8043 2 16.0027 2C12.2012 2 11.7254 2.01641 10.2321 2.08205C8.74434 2.14769 7.72154 2.38847 6.83548 2.73285C5.89446 3.08838 5.05221 3.63537 4.35202 4.35202C3.64095 5.05216 3.08866 5.89998 2.73843 6.82985C2.39383 7.72154 2.15321 8.73881 2.08763 10.2265C2.01646 11.7254 2 12.2012 2 16.0027C2 19.8043 2.01646 20.2801 2.08205 21.7734C2.14769 23.2612 2.38847 24.2839 2.73312 25.1703C3.08866 26.111 3.64095 26.9532 4.35202 27.6534C5.05221 28.3645 5.90004 28.9171 6.8299 29.267C7.72148 29.6116 8.73876 29.8523 10.2268 29.9178C11.7198 29.9837 12.1959 29.9999 15.9974 29.9999C19.799 29.9999 20.2748 29.9837 21.7681 29.9178C23.2558 29.8523 24.2786 29.6117 25.1647 29.267C26.0953 28.9072 26.9405 28.3569 27.646 27.6515C28.3515 26.946 28.9019 26.1008 29.2617 25.1703C29.6061 24.2786 29.847 23.2611 29.9125 21.7734C29.9782 20.2801 29.9946 19.8043 29.9946 16.0027C29.9946 12.2012 29.989 11.7253 29.9235 10.2321ZM27.402 21.664C27.3417 23.0314 27.112 23.7699 26.9206 24.2622C26.4501 25.4819 25.482 26.4501 24.2622 26.9206C23.7699 27.112 23.0261 27.3417 21.664 27.4017C20.1871 27.4676 19.7443 27.4838 16.0083 27.4838C12.2724 27.4838 11.8239 27.4676 10.3524 27.4017C8.9849 27.3417 8.24648 27.112 7.75419 26.9206C7.14721 26.6962 6.5947 26.3407 6.14618 25.8757C5.68124 25.4218 5.3257 24.8748 5.10133 24.2677C4.90989 23.7754 4.68021 23.0314 4.62021 21.6696C4.55435 20.1927 4.53816 19.7496 4.53816 16.0136C4.53816 12.2777 4.55435 11.8292 4.62021 10.3579C4.68021 8.99048 4.90989 8.25206 5.10133 7.75977C5.3257 7.15251 5.68124 6.60012 6.15176 6.15148C6.60553 5.68655 7.15251 5.33101 7.75977 5.10691C8.25206 4.91547 8.99606 4.68573 10.3579 4.62551C11.8348 4.55987 12.278 4.54346 16.0136 4.54346C19.7551 4.54346 20.198 4.55987 21.6696 4.62551C23.037 4.68579 23.7755 4.91541 24.2677 5.10686C24.8747 5.33101 25.4273 5.68655 25.8758 6.15148C26.3407 6.60553 26.6962 7.15251 26.9206 7.75977C27.112 8.25206 27.3417 8.99579 27.4019 10.3579C27.4676 11.8348 27.484 12.2777 27.484 16.0136C27.484 19.7496 27.4676 20.1871 27.402 21.664Z"
                                        fill="white" />
                                    <path
                                        d="M16.0028 8.80975C12.0318 8.80975 8.80997 12.0314 8.80997 16.0026C8.80997 19.9738 12.0318 23.1954 16.0028 23.1954C19.9739 23.1954 23.1956 19.9738 23.1956 16.0026C23.1956 12.0314 19.9739 8.80975 16.0028 8.80975ZM16.0028 20.6683C13.4266 20.6683 11.3369 18.5789 11.3369 16.0026C11.3369 13.4262 13.4266 11.3368 16.0027 11.3368C18.5791 11.3368 20.6685 13.4262 20.6685 16.0026C20.6685 18.5789 18.5791 20.6683 16.0028 20.6683ZM25.1594 8.52532C25.1594 9.45267 24.4074 10.2045 23.4799 10.2045C22.5526 10.2045 21.8007 9.45267 21.8007 8.52532C21.8007 7.59785 22.5526 6.84619 23.48 6.84619C24.4074 6.84619 25.1594 7.5978 25.1594 8.52532Z"
                                        fill="white" />
                                </svg>

                            </a>
                        </li>
                        <li>
                            <a href="{{setting('.tiktok')}}">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M27.687 9.75418C26.1451 9.75418 24.7225 9.2434 23.5801 8.38171C22.2699 7.39391 21.3286 5.94493 20.9961 4.27485C20.9127 3.85493 20.8689 3.42811 20.8653 3H16.4608V15.0351L16.4555 21.6273C16.4555 23.3897 15.3078 24.8841 13.7169 25.4096C13.2404 25.5672 12.7385 25.6338 12.2373 25.6059C11.5746 25.5695 10.9535 25.3695 10.4137 25.0466C9.26495 24.3596 8.48611 23.1132 8.465 21.6875C8.43176 19.4591 10.2332 17.6423 12.46 17.6423C12.8995 17.6423 13.3217 17.7141 13.7169 17.8444V13.3724C13.3 13.3107 12.8758 13.2785 12.4468 13.2785C10.0095 13.2785 7.72996 14.2916 6.10051 16.1168C4.86893 17.4962 4.13019 19.2559 4.01622 21.1012C3.86688 23.5253 4.7539 25.8297 6.4741 27.5298C6.72686 27.7794 6.99228 28.0111 7.26983 28.2248C8.74467 29.3598 10.5477 29.975 12.4468 29.975C12.8758 29.975 13.3 29.9434 13.7169 29.8816C15.4909 29.6189 17.1278 28.8068 18.4195 27.5298C20.0067 25.9611 20.8837 23.8783 20.8932 21.6616L20.8705 11.8174C21.6295 12.4028 22.461 12.8877 23.3443 13.26C24.7262 13.8431 26.1916 14.1386 27.6996 14.1381V9.75313C27.7007 9.75418 27.688 9.75418 27.687 9.75418Z"
                                        fill="white" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="{{setting('.youtube')}}">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M31.3407 8.30591C30.972 6.935 29.8911 5.85435 28.5204 5.4852C26.0163 4.80005 15.9996 4.80005 15.9996 4.80005C15.9996 4.80005 5.98341 4.80005 3.47931 5.45925C2.13495 5.828 1.02775 6.93525 0.659001 8.30591C0 10.8098 0 16.0027 0 16.0027C0 16.0027 0 21.2216 0.659001 23.6993C1.0281 25.07 2.1086 26.1507 3.47951 26.5198C6.00976 27.2052 16 27.2052 16 27.2052C16 27.2052 26.0163 27.2052 28.5204 26.546C29.8913 26.177 30.972 25.0964 31.3411 23.7257C31.9999 21.2216 31.9999 16.029 31.9999 16.029C31.9999 16.029 32.0262 10.8098 31.3407 8.30591ZM12.8105 20.7999V11.2053L21.1398 16.0026L12.8105 20.7999Z"
                                        fill="white" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="{{setting('.facebook')}}">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M18.1122 30.9995V17.3163H22.7032L23.392 11.9822H18.1122V8.57708C18.1122 7.0332 18.5392 5.98107 20.7556 5.98107L23.5778 5.97991V1.20884C23.0898 1.14542 21.4144 1 19.4644 1C15.3926 1 12.605 3.48541 12.605 8.04879V11.9822H8V17.3163H12.605V30.9995H18.1122Z"
                                        fill="white" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="{{setting('.adobe')}}">
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M14.9889 11.0889C15.1333 11.0889 15.1333 11.0889 14.9889 11.0889C15.1333 10.5111 15.2778 10.2222 15.2778 9.78889V9.5C15.4222 8.77778 15.4222 8.2 15.2778 8.05556V7.91111L15.1333 7.76667C15.1333 7.76667 15.1333 7.91111 14.9889 7.91111C14.7 8.77778 14.7 9.78889 14.9889 11.0889ZM10.6556 21.0556C10.3667 21.2 10.0778 21.3444 9.93333 21.4889C8.92222 22.3556 8.2 23.3666 8.05556 23.8C8.92222 23.6556 9.78889 22.7889 10.6556 21.0556C10.8 21.0556 10.8 21.0556 10.6556 21.0556ZM23.9444 18.8889C23.8 18.7444 23.2222 18.3111 21.2 18.3111H20.9111V18.4556C21.9222 18.8889 22.9333 19.1778 23.6556 19.1778H24.0889V19.0333C24.0889 19.0333 23.9444 19.0333 23.9444 18.8889ZM26.1111 3H5.88889C4.3 3 3 4.3 3 5.88889V26.1111C3 27.7 4.3 29 5.88889 29H26.1111C27.7 29 29 27.7 29 26.1111V5.88889C29 4.3 27.7 3 26.1111 3ZM24.5222 20.0444C24.2333 20.1889 23.8 20.3333 23.2222 20.3333C22.0667 20.3333 20.3333 20.0444 18.8889 19.3222C16.4333 19.6111 14.5556 19.8999 13.1111 20.4777C12.9667 20.4777 12.9667 20.4777 12.8222 20.6222C11.0889 23.6556 9.64444 25.1 8.48889 25.1C8.2 25.1 8.05556 25.1 7.91111 24.9555L7.18889 24.5222V24.3778C7.04444 24.0888 7.04444 23.9444 7.04444 23.6556C7.18889 22.9333 8.05556 21.6333 9.78889 20.6222C10.0778 20.4777 10.5111 20.1889 11.0889 19.8999C11.5222 19.1777 11.9556 18.3111 12.5333 17.3C13.2556 15.8556 13.6889 14.4111 14.1222 13.1111C13.5444 11.3778 13.2556 10.3667 13.8333 8.34444C13.9778 7.76667 14.4111 7.18889 14.9889 7.18889H15.2778C15.5667 7.18889 15.8556 7.33333 16.1444 7.47778C17.1556 8.48889 16.7222 10.8 16.1444 12.6778V12.8222C16.7222 14.4111 17.5889 15.7111 18.4556 16.5778C18.8889 16.8667 19.1778 17.1556 19.7556 17.4444C20.4778 17.4444 21.0556 17.3 21.6333 17.3C23.3667 17.3 24.5222 17.5889 24.9555 18.3111C25.1 18.6001 25.1 18.8889 25.1 19.1778C24.9556 19.3222 24.8111 19.7556 24.5222 20.0444ZM15.1333 14.4111C14.8444 15.4222 14.2667 16.5778 13.6889 17.8778C13.4 18.4555 13.1111 18.8889 12.8222 19.4667H13.1111C14.9889 18.7444 16.7222 18.3111 17.8778 18.1667C17.5888 18.0222 17.4444 17.8778 17.3 17.7333C16.5778 16.8667 15.7111 15.7111 15.1333 14.4111Z"
                                        fill="white" />
                                </svg>
                            </a>
                        </li>
                    </div>
                </ul>
            </nav>
        </div>
        <div class="footer__bot">
            <div class="footer__container">
                <span>
                    {{setting('.member')}}
                    <img src="{{asset("svg/crown.svg")}}" alt="">
                </span>
                <span>{{setting('.copiright')}}</span>
                <span>Сайт разработан <a href="https://astanacreative.kz/"> Astana Creative</a></span>
                <a href="{{ route('policy', ['locale' => app()->getLocale()]) }}"><img class="footer-img" src="./svg/icon.svg" alt=""></a>
            </div>
        </div>
    </div>
</footer>
