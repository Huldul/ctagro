@extends('layout')

@section('content')
        <main>
            <section class="first__block">
                <img src="./img/first-block-img.png" alt="">
                <div class="first__block-wrapper container">
                    <h1>Тракторы</h1>
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
                    <li><a href="./catalog.html">Каталог</a></li>
                    <li>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.0037 8L6.00372 13L6.00372 3L11.0037 8Z" fill="#6EB513" />
                        </svg>
                    </li>
                    <li><a href="./catalog-inner.html">Техника для овощеводства</a></li>
                    <li>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.0037 8L6.00372 13L6.00372 3L11.0037 8Z" fill="#6EB513" />
                        </svg>
                    </li>
                    <li>Тракторы</li>
                </ul>
            </div>
            <section class="products container">
                <div class="products__wrapper">
                    <div class="products__card">
                        <div class="products__img">
                            <img src="./img/products-img.png" alt="">
                        </div>
                        <h2>XERION 5000 - 4500</h2>
                        <span>500 л.с.</span>
                        <a href="./products-inner.html">Подробнее</a>
                    </div>
                </div>
                <h3 class="title">Подзаголовок</h3>
                <p>Дисковая борона Qualidisc Pro – универсальная машина, готовая как к мелкой, так и к более глубокой культивации, а также к перемешиванию соломы. Пожнивная обработка почвы очень важна в почвозащитном земледелии: она обеспечивает заделку сорняков и самосева в почву при интенсивном перемешивании и способствует их прорастанию для более эффективной последующей обработки. Равномерная заделка даже соломы является ключевым фактором для прорастания семян.</p>
                <p>Пожнивная обработка почвы очень важна в почвозащитном земледелии: она обеспечивает заделку сорняков и самосева в почву при интенсивном перемешивании и способствует их прорастанию для более эффективной последующей обработки. Равномерная заделка даже соломы является ключевым фактором для прорастания семян.</p>
            </section>
            <section class="form about__form indent">
                <div class="form__wrapper">
                    <img src="./img/form-bg.png" alt="">
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
