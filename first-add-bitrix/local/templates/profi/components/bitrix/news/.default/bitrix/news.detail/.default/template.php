<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<!-- main section -->
<section class="s-main section js-section" id="main" style="background-position-y: top;">
    <!-- main -->
    <div class="container main main_reviews s-main__main">
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
                    <a href="/news/" class="bread-crumbs__link text-link">
                        Новости
                    </a>
                </li>
                <!-- <li class="bread-crumbs__item">
                    <div class="bread-crumbs__active">
                        <?= $arResult['NAME'] ?>
                    </div>
                </li> -->
            </ul>
            <!-- <div class="section__title section__title_left main__title main__title_mb-sm">
                <h1 class="section__title-title section__title-title_underline-none h1">
                    <b>Событие проекта</b>
                </h1>
            </div> -->
            <!-- <ul class="text-tags">
                <li>
                    <a href="javascript:void(0);">
                        Бесплатный английский
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);">
                        Помощь психологов
                    </a>
                </li>
            </ul>
            <div class="main__descr text-content">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra
                    nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus,
                    tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum
                </p>
            </div> -->
            <!-- <div class="text-line text-line_m-lg"></div> -->
        </div>
        <!-- /main content -->
        <div class="row section__content">
            <div class="col-lg-8 col-12 section__content-left">
                <div class="text-content text-descr_fz-16">
                    <h3>
                        <?= $arResult['NAME'] ?>
                    </h3>
                    <time>
                        <?= ConvertDateTime($arResult['ACTIVE_FROM'], "DD.MM.YYYY", "ru") ?>
                    </time>
                    <? if (count($arResult['PROPERTIES']['IMAGES']['VALUE'])): ?>
                        <? if (count($arResult['PROPERTIES']['IMAGES']['VALUE']) > 1): ?>
                            <!-- gallery -->
                            <div class="swiper-container item-items item-items_slider item-items_gallery js-swiper-gallery">
                                <!-- swiper slider -->
                                <div class="swiper-wrapper item-swiper">
                                    <? foreach ($arResult['PROPERTIES']['IMAGES']['VALUE'] as $img): ?>
                                        <? $src = CFile::GetPath($img) ?>
                                        <!-- swiper slide -->
                                        <div class="swiper-slide item-item">
                                            <div class="item-img img">
                                                <img class="js-lazy js-object-fit" data-src="<?= $src ?>" alt
                                                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                            </div>
                                        </div>
                                        <!-- /swiper slide -->
                                    <? endforeach; ?>
                                </div>
                                <!-- /swiper slider -->
                                <!-- swiper controls -->
                                <div class="swiper-controls item-controls">
                                    <div class="swiper-button-prev swiper-button-white">
                                        <svg width="8" height="12" viewBox="0 0 8 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7 11L1 6L7 1" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-next swiper-button-white">
                                        <svg width="8" height="12" viewBox="0 0 8 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 11L7 6L1 1" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </div>
                                <!-- swiper controls -->
                            </div>
                            <!-- /gallery -->
                        <? else: ?>
                            <!-- gallery -->
                            <div class="swiper-container item-items item-items_slider item-items_gallery js-swiper-gallery2">
                                <!-- swiper slider -->
                                <div class="swiper-wrapper item-swiper">
                                    <? foreach ($arResult['PROPERTIES']['IMAGES']['VALUE'] as $img): ?>
                                        <? $src = CFile::GetPath($img) ?>
                                        <!-- swiper slide -->
                                        <div class="swiper-slide item-item">
                                            <div class="item-img img">
                                                <img class="js-lazy js-object-fit" data-src="<?= $src ?>" alt
                                                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                            </div>
                                        </div>
                                        <!-- /swiper slide -->
                                    <? endforeach; ?>
                                </div>
                                <!-- /swiper slider -->
                            </div>
                            <!-- /gallery -->
                        <? endif; ?>
                    <? endif; ?>



                    <div class="detail" style="margin-top:20px">
                        <?=$arResult['DETAIL_TEXT']?>
                    </div>                    
                </div>
                <div class="messangers-group messangers-group_row main__messangers">
                    <div class="messangers-group__title">
                        Рассказать друзьям
                    </div>
                    <ul class="messangers ">
                        <li class="messangers__item">
                            <a href="#vk" onclick="window.open('https://vk.com/share.php?url='+ window.location.href +'')" class="messangers__link messangers__link_vk color-gray"
                               target="_blank">
                                <svg width="27" height="27" viewBox="0 0 27 27" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                              d="M23.2372 15.5755C24.1328 16.45 25.0781 17.2727 25.8814 18.2353C26.2363 18.663 26.5722 19.1045 26.8292 19.6009C27.1934 20.3066 26.8635 21.0831 26.2308 21.1253L22.2973 21.1235C21.2828 21.2077 20.4735 20.7993 19.793 20.1056C19.2484 19.5509 18.7441 18.9606 18.2205 18.3871C18.0058 18.1528 17.7811 17.9322 17.5126 17.7579C16.9757 17.4094 16.5096 17.5161 16.2027 18.0761C15.8902 18.6457 15.8193 19.2765 15.7886 19.9113C15.7465 20.8375 15.4665 21.081 14.5361 21.1234C12.5478 21.2172 10.6607 20.9164 8.90769 19.9133C7.36217 19.029 6.16369 17.7807 5.12054 16.3675C3.08951 13.6156 1.53414 10.5917 0.136237 7.48307C-0.17842 6.7827 0.0516957 6.40674 0.824455 6.39344C2.10766 6.36851 3.39068 6.37028 4.67539 6.39166C5.19692 6.39929 5.54218 6.69842 5.74355 7.19112C6.4378 8.89819 7.2873 10.5223 8.3536 12.0277C8.63756 12.4285 8.92712 12.8293 9.33944 13.1114C9.79559 13.4238 10.1429 13.3202 10.3575 12.8121C10.4937 12.4899 10.5533 12.1429 10.584 11.7978C10.6856 10.6106 10.699 9.4254 10.5207 8.24235C10.4112 7.50401 9.99537 7.02603 9.25863 6.88631C8.88267 6.81508 8.93865 6.67518 9.12068 6.46059C9.43685 6.09049 9.73421 5.86011 10.327 5.86011H14.7724C15.4722 5.99823 15.6276 6.31262 15.7234 7.01681L15.7272 11.9547C15.7196 12.2273 15.8634 13.0363 16.3544 13.2167C16.7474 13.3452 17.0064 13.0308 17.2422 12.7816C18.3066 11.6519 19.0662 10.3169 19.7449 8.93456C20.046 8.32671 20.305 7.69545 20.5559 7.06471C20.7419 6.59667 21.0336 6.36638 21.5609 6.37658L25.8393 6.3804C25.9661 6.3804 26.0945 6.38226 26.2174 6.40328C26.9383 6.52615 27.1359 6.83628 26.9132 7.54029C26.5624 8.64483 25.8797 9.56529 25.2123 10.49C24.4988 11.4773 23.7357 12.4307 23.0281 13.4239C22.3781 14.3307 22.4297 14.7879 23.2372 15.5755Z"/>
                                    </g>
                                </svg>
                            </a>
                        </li>
                        <!-- <li class="messangers__item">
                            <a href="http://instagram.com/" class="messangers__link messangers__link_inst color-gray"
                               target="_blank">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.3155 0H5.6845C2.55001 0 0 2.55001 0 5.6845V15.3156C0 18.4499 2.55001 21 5.6845 21H15.3156C18.4499 21 21 18.4499 21 15.3156V5.6845C21 2.55001 18.4499 0 15.3155 0V0ZM10.5 16.242C7.33377 16.242 4.75796 13.6662 4.75796 10.5C4.75796 7.33377 7.33377 4.75796 10.5 4.75796C13.6662 4.75796 16.242 7.33377 16.242 10.5C16.242 13.6662 13.6662 16.242 10.5 16.242ZM16.3793 6.11212C15.4436 6.11212 14.6826 5.35109 14.6826 4.41542C14.6826 3.47975 15.4436 2.71856 16.3793 2.71856C17.315 2.71856 18.0762 3.47975 18.0762 4.41542C18.0762 5.35109 17.315 6.11212 16.3793 6.11212Z"/>
                                    <path d="M10.5 5.98901C8.01274 5.98901 5.98904 8.01255 5.98904 10.4999C5.98904 12.9871 8.01274 15.0108 10.5 15.0108C12.9873 15.0108 15.0109 12.9871 15.0109 10.4999C15.0109 8.01255 12.9873 5.98901 10.5 5.98901Z"/>
                                    <path d="M16.3793 3.94971C16.1226 3.94971 15.9137 4.15863 15.9137 4.4153C15.9137 4.67197 16.1226 4.88089 16.3793 4.88089C16.6361 4.88089 16.8451 4.67213 16.8451 4.4153C16.8451 4.15847 16.6361 3.94971 16.3793 3.94971Z"/>
                                </svg>
                            </a>
                        </li> -->
                        <li class="messangers__item">
                            <a href="#facebook" onclick="window.open('https://www.facebook.com/sharer.php?src=sp&u='+ window.location.href +'')" class="messangers__link messangers__link_fb color-gray"
                               target="_blank">
                                <svg width="21" height="21" viewBox="0 0 21 21" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 10.5C21 4.70039 16.2996 0 10.5 0C4.70039 0 0 4.70039 0 10.5C0 16.2996 4.70039 21 10.5 21C10.5615 21 10.623 21 10.6846 20.9959V12.8256H8.42871V10.1965H10.6846V8.26055C10.6846 6.01699 12.0545 4.79473 14.0561 4.79473C15.0158 4.79473 15.8402 4.86445 16.0781 4.89727V7.24336H14.7C13.6131 7.24336 13.3998 7.76016 13.3998 8.51894V10.1924H16.0043L15.6639 12.8215H13.3998V20.5939C17.7885 19.3348 21 15.2947 21 10.5Z"
                                          fill="#D8D8D8"/>
                                </svg>
                            </a>
                        </li>
                        <li class="messangers__item">
                            <a href="#ok" onclick="window.open('https://connect.ok.ru/offer?url='+ window.location.href +'')" class="messangers__link messangers__link_ok color-gray"
                               target="_blank">
                                <svg width="17" height="25" viewBox="0 0 17 25" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.50275 13.529C12.2387 13.529 15.2673 10.5004 15.2673 6.76447C15.2673 3.02851 12.2387 0 8.50275 0C4.7668 0 1.73828 3.02856 1.73828 6.76452C1.74287 10.4985 4.76875 13.5244 8.50275 13.529ZM8.50275 3.12208C10.5144 3.12208 12.1452 4.75283 12.1452 6.76452C12.1452 8.77621 10.5144 10.407 8.50275 10.407C6.49106 10.407 4.86031 8.77621 4.86031 6.76452C4.86031 4.75283 6.49111 3.12208 8.50275 3.12208Z"
                                          fill="#CACDD0"/>
                                    <path d="M15.1267 16.7344C15.8619 16.2502 16.3048 15.4292 16.3059 14.5489C16.3161 13.8184 15.9038 13.1475 15.2475 12.8266C14.5731 12.4897 13.7659 12.5656 13.1661 13.0222C10.3863 15.0488 6.61604 15.0488 3.83627 13.0222C3.23556 12.568 2.42973 12.4922 1.75487 12.8266C1.09879 13.1475 0.686338 13.8176 0.695461 14.5479C0.697022 15.428 1.13982 16.2487 1.87458 16.7333C2.81726 17.3602 3.84383 17.8507 4.92383 18.1903C5.10701 18.2472 5.29604 18.2999 5.49102 18.3485L2.34607 21.4238C1.52106 22.2242 1.5011 23.5419 2.30158 24.367C3.10205 25.192 4.41971 25.2119 5.24477 24.4115C5.26194 24.3948 5.27882 24.3778 5.29541 24.3606L8.50076 21.0428L11.7124 24.3668C12.5121 25.1925 13.8299 25.2134 14.6555 24.4136C15.4811 23.6139 15.5021 22.2961 14.7023 21.4705C14.6856 21.4532 14.6686 21.4363 14.6513 21.4196L11.5115 18.3474C11.7064 18.2975 11.8962 18.2444 12.0807 18.1882C13.1595 17.85 14.1851 17.3605 15.1267 16.7344Z"
                                          fill="#CACDD0"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <aside class="col-lg-4 col-12 section__content-right">
                <ul class="text-tags section__content-block">
                    <li>
                        <a href="javascript:void(0);">
                            Бесплатный английский
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            Русский язык
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            Помощь психологов
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            Обучение маникюру
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            Бесплатный английский
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            Русский язык
                        </a>
                    </li>
                </ul>
                <div class="offer section__content-block">
                    <div class="offer__title section__title section__title_left">
                        <h2 class="section__title-title h3">
                            Интернет-школа за&nbsp;3&nbsp;дня
                        </h2>
                    </div>
                    <div class="offer__descr text-descr text-descr_fz-16">
                        <p>
                            Как мы начали дистанционное образование и&nbsp;не жалеем об&nbsp;этом.
                        </p>
                    </div>
                    <div class="offer__logo img img_contain">
                        <picture>
                            <source data-srcset="/img/partners/partner-7.webp" type="image/webp"
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                            <img class="js-lazy" data-src="/img/partners/partner-7.jpg" alt
                                 src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                        </picture>
                    </div>
                    <div class="offer__img">
                        <picture>
                            <source data-srcset="/img/offer/offer-1.webp" type="image/webp"
                                    srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                            <img class="js-lazy" data-src="/img/offer/offer-1.png" alt
                                 src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                        </picture>
                    </div>
                    <div class="offer__btn text-btn">
                        <a href="https://e-queo.com/blog/internet-shkola-na-600-uchenikov" class="btn btn_gray btn_border" target="_blank">
                            Подробнее
                        </a>
                    </div>
                </div>
            </aside> -->
            
            <?
                $APPLICATION->IncludeComponent('max:page', '', [
                    'PAGE' => 'banner',
                ]);
            ?>
        </div>
    </div>
    <!-- /main -->
</section>
<!-- /main section -->