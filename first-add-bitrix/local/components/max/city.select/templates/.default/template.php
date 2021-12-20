<li class="menu__item menu__item_sub menu__item_city">
    <a href="javascript:void(0);" class="js-menu-sub">
        <div class="b-icon b-icon_location b-icon_orange b-icon_fz-14">
            <i class="b-icon__icon"></i>
            Ваш город:
            <span class="b-text-white city_select__current"> <?=$arResult['CURRENT_CITY']['NAME']?></span>
            <span class="menu__arrow"></span>
        </div>
    </a>

    <div class="city_select__wrapper">
        <div class="city_select__container">
            <div class="city_select__close fancybox-close"></div>
            <div class="city_select__title">Ваш город: <input name="search-city" type="text"></div>
            <div class="city_select__list">
                <? foreach ($arResult['CITIES'] as $char => $list): ?>
                    <div class="city_select__col">
                        <div class="city_select__char"><?=$char?></div>
                        <div class="city_select__list-items">
                            <? foreach ($list as $item): ?>
                                <div class="city_select__item">
                                    <a href="https://<?=$item['SUBDOMAIN']?>.woodgrand.ru/"><?=$item['NAME']?></a>
                                </div>
                            <? endforeach; ?>
                        </div>
                    </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
</li>
<script>
    window.citiesList = '<?=json_encode($arResult["CITIES_LIST"])?>';
</script>