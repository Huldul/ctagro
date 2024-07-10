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
                                        <option value="Астана">Астана</option>
                                        <option value="Алматы">Алматы</option>
                                        <option value="Шымкент">Шымкент</option>
                                        <option value="Акмолинская область">Акмолинская область</option>
                                        <option value="Алматинская область">Алматинская область</option>
                                        <option value="Туркестанская область">Туркестанская область</option>
                                        <option value="Западно-Казахстанская область">Западно-Казахстанская область</option>
                                        <option value="Атырауская область">Атырауская область</option>
                                        <option value="Мангыстауская область">Мангыстауская область</option>
                                        <option value="Актюбинская область">Актюбинская область</option>
                                        <option value="Костанайская область">Костанайская область</option>
                                        <option value="Северо-Казахстанская область">Северо-Казахстанская область</option>
                                        <option value="Павлодарская область">Павлодарская область</option>
                                        <option value="Карагандинская область">Карагандинская область</option>
                                        <option value="Абайская область">Абайская область</option>
                                        <option value="Восточно-Казахстанская область">Восточно-Казахстанская область</option>
                                        <option value="Жетысуйская область">Жетысуйская область</option>
                                        <option value="Жамбылская область">Жамбылская область</option>
                                        <option value="Кызылординская область">Кызылординская область</option>
                                        <option value="Улытауская область">Улытауская область</option>

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
                                        <option value="сельхозтехника">сельхозтехника</option>
                                        <option value="овощеводство">овощеводство</option>
                                        <option value="орошение">орошение</option>
                                        <option value="сервис">сервис</option>
                                        <option value="запасные части">запасные части</option>
                                        <option value="другое">другое</option>
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
