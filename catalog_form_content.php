<div class="filter_container">
    <h3 class="visually-hidden">Список фильтров</h3>
    <p class="filter_heading">Фильтр:</p>
    <div class="catalog_filter">
        <fieldset class="catalog_filter-group">
            <legend class="catalog_filter-group_title">Стоимость</legend>
            <div class="price_container">
                <div class="slider">
                    <div class="progress"></div>
                </div>
                <div class="range-input">
                    <input name="filter[price][from]" type="range" class="range-min" min="0" max="100000" value="0"
                        step="1000">
                    <input name="filter[price][to]" type="range" class="range-max" min="0" max="100000" value="50000"
                        step="1000">
                </div>
                <div class="price-input">
                    <div class="field">
                        <span>от</span>
                        <input type="number" class="input-min" value="0">
                    </div>
                    <div class="field">
                        <span>до</span>
                        <input type="number" class="input-max" value="50000">
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="catalog_filter-group">
            <legend class="catalog_filter-group_title">Цвет</legend>
            <div class="filter_color-checkboxes">
                <label class="checkbox_label">
                    <input type="checkbox" class="checkbox_input" value="1" name="filter[color][]">
                    Черный</label>
                <label class="checkbox_label">
                    <input type="checkbox" class="checkbox_input" value="2" name="filter[color][]">
                    Белый</label>
                <label class="checkbox_label">
                    <input type="checkbox" class="checkbox_input" value="3" name="filter[color][]">
                    Синий</label>
                <label class="checkbox_label">
                    <input type="checkbox" class="checkbox_input" value="4" name="filter[color][]">
                    Красный</label>
                <label class="checkbox_label">
                    <input type="checkbox" class="checkbox_input" value="5" name="filter[color][]">
                    Розовый</label>
            </div>
        </fieldset>
        <fieldset class="catalog_filter-group">
            <legend class="catalog_filter-group_title">Bluetooth</legend>
            <div class="filter_bluetooth-radios">
                <div class="bluetooth-radio">
                    <input type="radio" name="filter[bluetooth]" value="1" id="radio__yes" checked>
                    <label class="radio_label" for="radio__yes">Есть</label>
                </div>
                <div class="bluetooth-radio">
                    <input type="radio" name="filter[bluetooth]" value="0" id="radio__no">
                    <label class="radio_label" for="radio__no">Нет</label>
                </div>
            </div>
        </fieldset>
        <div class="wrapper_for_yellow-line button">
            <span class="yellow-line"></span>
            <button type="submit" class="more show">Показать</button>
        </div>
    </div>
</div>
<div class="sort_container">
    <h3 class="visually-hidden">Тип сортировки</h3>
    <p class="sort_heading">Сортировка:</p>
    <div class="catalog-sorting">
        <label class="visually-hidden" for="sorting">Сортировка</label>
        <select name="sort" id="sorting" class="select_control">
            <option value="name" class="select_option">По названию</option>
            <option value="price" class="select_option">По стоимости</option>
        </select>
    </div>
    <div class="sorting_buttons">
        <div class="button-radio">
            <input type="radio" class="sorting_button descending" name="order" value="desc" id="radio__desc"
                checked></button>
            <label class="button_label desc" for="radio__desc"></label>
        </div>
        <div class="button-radio">
            <input type="radio" class="sorting_button ascending" name="order" value="asc" id="radio__asc"></button>
            <label class="button_label asc" for="radio__asc"></label>
        </div>
    </div>
</div>
<div class="catalog_cards__container">
    <div class="catalog_cards" id="catalog_cards">
        <template id="catalog_cards__template">
            <div class="catalog_card">
                <img class="catalog_card__img">
                <b class="catalog_card__name"></b>
                <p class="catalog_card__cost"></p>
            </div>
        </template>
    </div>
    <div class="catalog_pagination">
    </div>
</div>