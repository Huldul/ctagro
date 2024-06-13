@extends('layout')

@section('content')
        <main>
            <section class="first__block">
                <img src="./img/first-block-img.png" alt="">
                <div class="first__block-wrapper container">
                    <h1>Отзывы</h1>
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
                    <li>О компании</li>
                    <li>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.0037 8L6.00372 13L6.00372 3L11.0037 8Z" fill="#6EB513" />
                        </svg>
                    </li>
                    <li>Отзывы</li>
                </ul>
            </div>
            <section class="reviews container">
                <div class="reviews__wrapper">
                    <div class="reviews__card">
                        <div class="reviews__img">
                            <img src="./img/equipment-img.png" alt="">
                        </div>
                        <h2>ТОО «Магжан и К» Сагидула Сыздыков</h2>
                        <a href="#">Подробнее</a>
                    </div>
                </div>
            </section>
            <div class="pagination container">
                <ul>
                    <li>
                        <a class="active" href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">4</a>
                    </li>
                    <li>
                        <a href="#">5</a>
                    </li>
                    <li>
                        <a href="#">...</a>
                    </li>
                    <li>
                        <a href="#">159</a>
                    </li>
                </ul>
                <a href="#">Вперёд</a>
            </div>
        </main>
        @endsection
