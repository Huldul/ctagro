<section class="form about__form indent">
    <div class="form__wrapper">
        <img src="{{asset("img/form-bg.png")}}" alt="">
        <div class="form__content container">
            <h2 class="form__title title">Свяжитесь с нами для обсуждения деталей</h2>
            <form action="#">
            <div class="form__group">
                                <div class="input-container">
                                    <input type="text" name="" id="" required>
                                    <div>Имя<span>*</span></div>
                                </div>
                                <div class="input-container">
                                    <input type="tel" name="" id="" required>
                                    <div>Телефон<span>*</span></div>
                                </div>
                                <div class="select-wrapp">
                                    <select name="" id="" required>
                                        <option value="" disabled selected>Регионы</option>
                                        <option value="Astana">Астана</option>
                                        <option value="Astana">Астана</option>
                                    </select>
                                    <span>*</span>
                                </div>
                                <div class="input-container">
                                    <input type="email" name="" id="" required pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$" title="Введите корректный email в формате user@example.com">
                                    <div>Почта<span>*</span></div>
                                </div>
                            </div>
                <div class="form__group">
                    <textarea rows="1" placeholder="Тема"></textarea>
                    <button type="submit">Отправить</button>
                </div>
                <span>Нажимая кнопку “Отправить” вы даёте согласие на обработку  <a href="#">персональных данных</a></span>
            </form>
        </div>
    </div>
</section>
