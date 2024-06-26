@extends('layout')

@section('content')
        <main>
            <section class="first__block">
                <img src="{{asset("img/first-block-img.png")}}" alt="">
                <div class="first__block-wrapper container">
                    <h1>{{$partner->title}}</h1>
                </div>
            </section>
            <div class="breadcrumbs container">
                <ul>
                    <li>
                        <a href="/">Главная</a>
                    </li>
                    <li>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.0037 8L6.00372 13L6.00372 3L11.0037 8Z" fill="#6EB513" />
                        </svg>
                    </li>
                    <li><a href="{{ route('about', ['locale' => app()->getLocale()]) }}">О компании</a></li>
                    <li>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.0037 8L6.00372 13L6.00372 3L11.0037 8Z" fill="#6EB513" />
                        </svg>
                    </li>
                    <li><a href="{{ route('partners', ['locale' => app()->getLocale()]) }}">Наши партнеры</a></li>
                    <li>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.0037 8L6.00372 13L6.00372 3L11.0037 8Z" fill="#6EB513" />
                        </svg>
                    </li>
                    <li>{{$partner->title}}</li>
                </ul>
            </div>
            <section class="partners-inner container">
                <div class="partners-inner__wrapper">
                    <div class="partners-inner__left">
                        <h2 class="title">{{$partner->name}}</h2>
                        {!!$partner->desc!!}
                    </div>
                    <div class="partners-inner__right">
                        <img src="{{asset("storage/".$partner->image)}}" alt="">
                    </div>
                </div>
            </section>
            <section class="form about__form indent">
                <div class="form__wrapper">
                    <img src="{{asset("img/form-bg.png")}}" alt="">
                    <div class="form__content container">
                        <h2 class="form__title title">Свяжитесь с нами для обсуждения деталей</h2>
                        <form action="#">
                            <div class="form__group">
                                <input type="text" name="" id="" placeholder="Имя*" required>
                                <input type="tel" name="" id="" placeholder="Телефон*" required>
                                <div class="select-wrapp">
                                    <select name="" id="" required>
                                        <option value="" disabled selected>Регион*</option>
                                        <option value="Astana">Астана</option>
                                        <option value="Astana">Астана</option>
                                    </select>
                                </div>
                                <input type="email" name="" id="" placeholder="Почта*" required pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$" title="Введите корректный email в формате user@example.com">
                            </div>
                            <div class="form__group">
                                <div class="select-wrapp">
                                    <select>
                                        <option value="" disabled selected>Тема</option>
                                        <option value="lorem">lorem</option>
                                    </select>
                                </div>
                                <button type="submit">Отправить</button>
                            </div>
                            <span>Нажимая кнопку “Отправить” вы даёте согласие на обработку  <a href="#">персональных данных</a></span>
                        </form>
                    </div>
                </div>
            </section>
        </main>
        @endsection
