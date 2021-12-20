<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>

<!-- locations section -->
<section class="s-locations section section-bg" id="locations">
    <? if($USER->IsAdmin()): ?>
    <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
    <div class="container">
    <!-- locations title -->
    <div class="section__title s-locations__title">
        <h2 class="section__title-title h2">
        <?= $data['TITLE'] ?>
        </h2>
    </div>
    <!-- /locations title -->
    <!-- locations -->
    <div class="locations s-locations__locations">

        <?if($data['DISTRICT']):?>
            <!-- locations item -->
            <div class="row row_m-50 locations__item">
                <!-- locations content -->
                <div class="col-lg-6 col-12 locations__content">
                    <?if($data['TITLE1']):?>
                    <h3 class="locations__title h3">
                    <?= $data['TITLE1'] ?>
                    </h3>
                    <?endif;?>
                    <?if($data['DESC1']['TEXT'] ):?>
                    <div class="locations__descr text-descr text-descr_fz-16">
                    <p>
                        <?= $data['DESC1']['TEXT'] ?>
                    </p>
                    </div>
                    <?endif;?>
                    <div class="locations__line text-line text-line_m-lg"></div>
                    <div class="locations__list">
                    <div class="locations__list-label h6">
                        <?= ($data['TITLE2']) ? $data['TITLE2'] : 'Очно мы проводим консультации:' ?>
                    </div>
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
                </div>
                <!-- /locations content -->
                <!-- locations map -->
                <div class="col-lg-6 col-12 order-lg-first locations__map">
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
        <?endif;?> 
        <?if($data['TABS'] == 29):?>
        <!-- locations item -->
        <div class="row row_m-50 locations__item js-tabs">
            <!-- locations content -->
            <div class="col-lg-6 col-12 locations__content">
                <?if($data['TITLE'] == ''):?>
                <h3 class="locations__title h3">
                Онлайн-обучение на собственной платформе
                </h3>
                <?endif;?>
                <!-- locations items -->
                <div class="locations__items locations-items js-tabs-nav">
                    <? foreach($data['ELEMENTS'] as $key2 => $item):?>
                    
                    <!-- locations item -->
                    <div class="locations-items__item js-tabs-nav-item <?= ($key2 == '0') ? 'js-active' :'' ?>" style='position:relative;'>
                        <? if($USER->IsAdmin()): ?>
                            <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=31&type=content&lang=ru&ID=<?=$item['ID']?>' class="fix-block" target="_blank" style='top:0;left:auto;right:-100px'>Редакт</a>
                        <? endif; ?>
                        <div class="locations-items__icon">
                        <?= $item['ICON']['TEXT'] ?>
                        </div>
                        <div class="locations-items__text">
                        <h3 class="locations-items__title h6">
                            <?= $item['TITLE'] ?>
                        </h3>
                        <div class="locations-items__descr text-descr text-descr_fz-10">
                            <p>
                            <?= $item['DESC']['TEXT'] ?>
                            </p>
                        </div>
                        </div>
                    </div>
                    <!-- /locations item -->
                    <? endforeach;?>
                </div>
                <!-- /locations items -->
            </div>
            <!-- /locations content -->

            <!-- locations gallery -->
            <div class="col-lg-6 col-12 order-lg-first locations__gallery js-tabs-content">
                
                <? foreach($data['ELEMENTS'] as $key3 => $item):?>
                    <!-- locations gallery item -->
                    <div class="locations__gallery-item js-tabs-content-item <?= ($key3 == '0') ? 'js-active' :'' ?>">
                        <!-- locations gallery -->
                        <div class="swiper-container locations__gallery-gallery locations-gallery js-swiper-locations-gallery">
                            <!-- swiper slider -->
                            <div class="swiper-wrapper locations-gallery__swiper">
                                <? foreach($item['IMG'] as $img): ?>
                                    <!-- swiper slide -->
                                    <div class="swiper-slide locations-gallery__item">
                                        <div class="locations-gallery__img">
                                        <!-- <picture>
                                            <source data-srcset="./img/locations/1-1.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="> -->
                                            <img class="js-lazy" data-src="<?=$img?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                        <!-- </picture> -->
                                        </div>
                                    </div>
                                    <!-- /swiper slide -->
                                <? endforeach; ?>
                            </div>
                            <!-- /swiper slider -->
                            <!-- swiper controls -->
                            <div class="swiper-controls locations-gallery__controls">
                            <div class="swiper-button-prev">
                                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 11L1 6L7 1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            <div class="swiper-pagination d-none"></div>
                            <div class="swiper-button-next">
                                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 11L7 6L1 1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            </div>
                            <!-- swiper controls -->
                        </div>
                        <!-- /locations gallery -->
                        <div class="locations__gallery-btn">
                            <a href="https://e-queo.com/" class="btn btn_shadow" target="_blank">
                            Сделано в Эквио
                            </a>
                        </div>
                    </div>
                    <!-- /locations gallery item -->
                <? endforeach;?>
            </div>
            <!-- /locations gallery -->
        </div>
        <!-- /locations item -->
        <?endif;?>
    </div>
    <!-- /locations -->
    </div>
</section>
<!-- /locations section -->