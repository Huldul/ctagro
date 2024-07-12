<section class="form about__form indent">
    <div class="form__wrapper">
        <img src="{{asset("img/form-bg.png")}}" alt="">
        <div class="form__content container">
            <h2 class="form__title title">@trans('contact_us_for_details')</h2>
            <form action="/sendOrder" method="POST">
                @csrf
            <div class="form__group">
                                <div class="input-container">
                                    <input type="text" name="name" id="" required>
                                    <div>@trans('name')<span>*</span></div>
                                </div>
                                <div class="input-container">
                                    <input type="tel" name="number" id="" required>
                                    <div>@trans('phone')<span>*</span></div>
                                </div>
                                <div class="select-wrapp">
                                    <select name="region" id="" required>
                                        <option value="" disabled selected>Регионы</option>
                                        <option value="Astana">Астана</option>
                                        <option value="Almaty">Алматы</option>
                                        <option value="Shymkent">Шымкент</option>
                                        <option value="Akmola region">Акмолинская область</option>
                                        <option value="Almaty region">Алматинская область</option>
                                        <option value="Turkestan region">Туркестанская область</option>
                                        <option value="West Kazakhstan region">Западно-Казахстанская область</option>
                                        <option value="Atyrau region">Атырауская область</option>
                                        <option value="Mangystau region">Мангыстауская область</option>
                                        <option value="Aktobe region">Актюбинская область</option>
                                        <option value="Kostanayskaya region">Костанайская область</option>
                                        <option value="North Kazakhstan region">Северо-Казахстанская область</option>
                                        <option value="Pavlodar region">Павлодарская область</option>
                                        <option value="Karaganda region">Карагандинская область</option>
                                        <option value="Abai region">Абайская область</option>
                                        <option value="East Kazakhstan region">Восточно-Казахстанская область</option>
                                        <option value="Zhetysuyskaya region">Жетысуйская область</option>
                                        <option value="Zhambyl region">Жамбылская область</option>
                                        <option value="Kyzylorda region">Кызылординская область</option>
                                        <option value="Ulytauskaya region">Улытауская область</option>

                                    </select>
                                    <span>*</span>
                                </div>
                                <div class="input-container">
                                    <input type="email" name="email" id="" required pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$" title="@trans('enter_valid_email')">
                                    <div>@trans('email')<span>*</span></div>
                                </div>
                            </div>
                            <div class="form__group">
                <div class="select-wrapp">
                                    <select name="message" id="message" required>
                                        <option value="" disabled selected>Тема</option>
                                        <option value="Agricultural machinery">сельхозтехника</option>
                                        <option value="Vegetable growing">овощеводство</option>
                                        <option value="Irrigation">орошение</option>
                                        <option value="Service">сервис</option>
                                        <option value="Spare parts">запасные части</option>
                                        <option value="Other">другое</option>
                                    </select>
                                </div>
                    <textarea rows="1" name="text" placeholder="@trans('message')"></textarea>
                    <button type="submit">@trans('send')</button>
                </div>
                <span>@trans('consent_message')</span>
            </form>
        </div>
    </div>
</section>
