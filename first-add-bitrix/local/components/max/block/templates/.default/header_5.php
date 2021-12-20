<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>
<!-- main section -->
<section class="s-main section js-section" id="main">
    <? if($USER->IsAdmin()): ?>
        <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
    <!-- main -->
    <div class="container main main_locations s-main__main">
    <div class="header-height"></div>
    <!-- main content -->
    <div class="main__content">
        <ul class="bread-crumbs main__bread-crumbs">
        <li class="bread-crumbs__item">
            <a href="/" class="bread-crumbs__link text-link">
            Главная
            </a>
        </li>
        <li class="bread-crumbs__item">
            <div class="bread-crumbs__active">
            <?$APPLICATION->ShowTitle();?>
            </div>
        </li>
        </ul>
        <div class="section__title section__title_left main__title">
        <h1 class="section__title-title section__title-title_underline-none h1">
            <b><?=$data['TITLE']?></b>
        </h1>
        </div>
    </div>
    <!-- /main content -->
    <!-- locations -->
    <div class="locations main__locations">
        <!-- locations item -->
        <div class="row row_m-50 locations__item">
        <!-- locations content -->
        <div class="col-lg-6 col-12 locations__content">
            <div class="locations__logo">
            <div class="locations__logo-img">
                <picture>
                <source data-srcset="/img/logo.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                <img class="js-lazy" data-src="/img/logo.png" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                </picture>
            </div>
            <div class="locations__logo-text">
                <?=$data['TRIG']?>
            </div>
            </div>
            <div class="locations__line text-line text-line_m-lg"></div>
            <div class="locations__list">
            <ul class="locations__list-list">
                <? foreach($data['DISTRICT'] as $key => $district): $address = explode(",", $data['COORD_ADRESS'][$key]);?>
                    <li class="locations__list-item  <?=($district == $data['DISTRICT'][$key-1]) ? 'locations__list-item_marker-none' : ''?>">
                        <div class="locations__list-value">
                            <b><?=$data['DISTRICT'][$key]?>:</b>
                            <ul>
                            <li>
                                <?=$data['ADDRESS'][$key]?>
                            </li>
                            </ul>
                        </div>
                        <div class="locations__list-link">
                            <a href="https://yandex.ru/maps/195/ulyanovsk/?&mode=routes&rtext=~<?=$address[0]?>%2C<?=$address[1]?>&rtt=pd&ruri=~&z=13" class="text-link text-link_border text-accent" target="_blank">
                            Как пройти
                            </a>
                        </div>
                    </li>
                <? endforeach;?>
                
            </ul>
            </div>
            <div class="locations__line text-line text-line_m-lg"></div>
            <div class="locations__contacts contacts">
            <!-- contacts item -->
            <div class="contacts__item contacts__item_icon contacts__item_fz-16">
                <a href="tel:<?=$data['TEL']?>" class="text-link">
                <i class="contacts__item-icon header-sidebar__icon-phone">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11.4331 12.0825L12.6931 10.8225C12.8628 10.6549 13.0775 10.5402 13.3112 10.4923C13.5448 10.4443 13.7874 10.4653 14.0094 10.5525L15.545 11.1656C15.7693 11.2567 15.9617 11.4121 16.0978 11.6123C16.2339 11.8125 16.3078 12.0486 16.31 12.2906V15.1031C16.3087 15.2678 16.2741 15.4306 16.2082 15.5815C16.1424 15.7325 16.0466 15.8685 15.9268 15.9815C15.807 16.0945 15.6655 16.1821 15.511 16.239C15.3564 16.2959 15.192 16.3209 15.0275 16.3125C4.26686 15.6431 2.09561 6.53065 1.68498 3.04315C1.66592 2.87189 1.68334 2.69853 1.73608 2.53448C1.78883 2.37044 1.87571 2.21942 1.99102 2.09136C2.10632 1.96331 2.24743 1.86111 2.40507 1.79151C2.5627 1.7219 2.73329 1.68647 2.90561 1.68752H5.62248C5.86492 1.68824 6.10161 1.76147 6.30209 1.8978C6.50257 2.03413 6.65769 2.22732 6.74748 2.45252L7.3606 3.98815C7.45075 4.20925 7.47375 4.45201 7.42673 4.6861C7.37971 4.9202 7.26476 5.13525 7.09623 5.3044L5.83623 6.5644C5.83623 6.5644 6.56186 11.475 11.4331 12.0825Z" fill="#CACDD0" />
                    </svg>
                </i>
                <?=$data['TEL']?>
                </a>
            </div>
            <!-- /contacts item -->
            <!-- contacts item -->
            <div class="contacts__item contacts__item_icon contacts__item_fz-16">
                <a href="mailto:<?=$data['EMAIL']?>" class="text-link">
                <i class="contacts__item-icon">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 3H3C2.175 3 1.5075 3.675 1.5075 4.5L1.5 13.5C1.5 14.325 2.175 15 3 15H15C15.825 15 16.5 14.325 16.5 13.5V4.5C16.5 3.675 15.825 3 15 3ZM15 6L9 9.75L3 6V4.5L9 8.25L15 4.5V6Z" fill="#CACDD0" />
                    </svg>
                </i>
                <?=$data['EMAIL']?>
                </a>
            </div>
            <!-- /contacts item -->
            </div>
            <div class="locations__btn text-btn">
            <a href="#popup-callback" class="btn btn_xl js-popup-open" data-form="Связаться с нами">
                Связаться с нами
            </a>
            </div>
        </div>
        <!-- /locations content -->
        <!-- locations map -->
        <div class="col-lg-6 col-12 locations__map">
            <? 
                $coord_adres = ''; 
                foreach($data['COORD_ADRESS'] as $coord): 
                $coord_adres = $coord_adres .'|' .$coord;
                endforeach; 
            ?>
            <div data-coords="<?= $coord_adres ?>" data-coords-center="<?= $data['COORD_CENTER'] ?>" data-coords-offset="0, 0" class="locations__map-map js-map" id="map"></div>
        </div>
        <!-- /locations map -->
        </div>
        <!-- /locations item -->
    </div>
    <!-- /locations -->
    </div>
    <!-- /main -->
</section>
<!-- /main section -->