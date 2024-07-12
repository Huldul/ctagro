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
                                        <option data-value="regions" value="regions" disabled selected>Регионы</option>
                                        <option data-value="Astana" value="Астана">Астана</option>
                                        <option data-value="Almaty" value="Алматы">Алматы</option>
                                        <option data-value="Shymkent" value="Шымкент">Шымкент</option>
                                        <option data-value="Akmola region" value="Акмолинская область">Акмолинская область</option>
                                        <option data-value="Almaty region" value="Алматинская область">Алматинская область</option>
                                        <option data-value="Turkestan region" value="Туркестанская область">Туркестанская область</option>
                                        <option data-value="West Kazakhstan region" value="Западно-Казахстанская область">Западно-Казахстанская область</option>
                                        <option data-value="Atyrau region" value="Атырауская область">Атырауская область</option>
                                        <option data-value="Mangystau region" value="Мангыстауская область">Мангыстауская область</option>
                                        <option data-value="Aktobe region" value="Актюбинская область">Актюбинская область</option>
                                        <option data-value="Kostanayskaya region" value="Костанайская область">Костанайская область</option>
                                        <option data-value="North Kazakhstan region" value="Северо-Казахстанская область">Северо-Казахстанская область</option>
                                        <option data-value="Pavlodar region" value="Павлодарская область">Павлодарская область</option>
                                        <option data-value="Karaganda region" value="Карагандинская область">Карагандинская область</option>
                                        <option data-value="Abai region" value="Абайская область">Абайская область</option>
                                        <option data-value="East Kazakhstan region" value="Восточно-Казахстанская область">Восточно-Казахстанская область</option>
                                        <option data-value="Zhetysuyskaya region" value="Жетысуйская область">Жетысуйская область</option>
                                        <option data-value="Zhambyl region" value="Жамбылская область">Жамбылская область</option>
                                        <option data-value="Kyzylorda region" value="Кызылординская область">Кызылординская область</option>
                                        <option data-value="Ulytauskaya region" value="Улытауская область">Улытауская область</option>

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
                                        <option data-value="Agricultural machinery" value="сельхозтехника">сельхозтехника</option>
                                        <option data-value="Vegetable growing" value="овощеводство">овощеводство</option>
                                        <option data-value="Irrigation" value="орошение">орошение</option>
                                        <option data-value="Service" value="сервис">сервис</option>
                                        <option data-value="Spare parts" value="запасные части">запасные части</option>
                                        <option id="other-value" data-value="Other" value="другое">другое</option>
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
