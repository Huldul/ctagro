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
