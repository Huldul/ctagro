<section class="form about__form indent">
    <div class="form__wrapper">
        <img src="{{asset("img/form-bg.png")}}" alt="">
        <div class="form__content container">
            <h2 class="form__title title">Свяжитесь с нами для обсуждения деталей</h2>
            <form action="/sendOrder" method="POST">
                @csrf
            <div class="form__group">
                                <div class="input-container">
                                    <input type="text" name="name" id="" required>
                                    <div>Имя<span>*</span></div>
                                </div>
                                <div class="input-container">
                                    <input type="tel" name="number" id="" required>
                                    <div>Телефон<span>*</span></div>
                                </div>
                                <div class="select-wrapp">
                                    <select name="region" id="" required>
                                        <option value="" disabled selected>Регионы</option>
                                        <option value="Astana">Астана</option>
                                        <option value="Astana">Алматы</option>
                                        <option value="Astana">Шымкент</option>
                                        <option value="Astana">Кокшетау</option>
                                        <option value="Astana">Есиль</option>
                                        <option value="Astana">Акколь</option>
                                        <option value="Astana">Акмолинская область</option>
                                        <option value="Astana">Алматинская область</option>
                                        <option value="Astana">Туркестанская область</option>
                                        <option value="Astana">Уральск</option>
                                        <option value="Astana">ЗКО</option>
                                        <option value="Astana">Атырауская область</option>
                                        <option value="Astana">Мангыстауская область</option>
                                        <option value="Astana">Актобе</option>
                                        <option value="Astana">Актюбинская область</option>
                                        <option value="Astana">Костанай</option>
                                        <option value="Astana">Костанайская область</option>
                                        <option value="Astana">Петропавловск</option>
                                        <option value="Astana">СКО</option>
                                        <option value="Astana">Павлодар</option>
                                        <option value="Astana">Павлодарская область</option>
                                        <option value="Astana">Карагандинская область</option>
                                        <option value="Astana">Абайская область</option>
                                        <option value="Astana">Усть-Каменогорск</option>
                                        <option value="Astana">ВКО</option>
                                        <option value="Astana">Сарканд</option>
                                        <option value="Astana">Талдыкорган</option>
                                        <option value="Astana">Жетысуйскаая область</option>
                                        <option value="Astana">Жамбылская область</option>
                                        <option value="Astana">Кызылорда</option>
                                        <option value="Astana">Кызылординская область</option>
                                    </select>
                                    <span>*</span>
                                </div>
                                <div class="input-container">
                                    <input type="email" name="email" id="" required pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$" title="Введите корректный email в формате user@example.com">
                                    <div>Почта<span>*</span></div>
                                </div>
                            </div>
                            <div class="form__group">
                <div class="select-wrapp">
                                    <select name="message" id="message" required>
                                        <option value="" disabled selected>Тема</option>
                                        <option value="selhoztehnika">сельхозтехника</option>
                                        <option value="ovoshevodstvo">овощеводство</option>
                                        <option value="oroshenie">орошение</option>
                                        <option value="servis">сервис</option>
                                        <option value="zapasnyse chasti">запасные части</option>
                                        <option value="Other">другое</option>
                                    </select>
                                </div>
                    <textarea rows="1" name="text" placeholder="Сообщение"></textarea>
                    <button type="submit">Отправить</button>
                </div>
                <span>Нажимая кнопку “Отправить” вы даёте согласие на обработку  <a href="#">персональных данных</a></span>
            </form>
        </div>
    </div>
</section>
