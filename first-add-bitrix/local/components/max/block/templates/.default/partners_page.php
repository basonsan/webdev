<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>
<!-- main section -->
<section class="s-main section  section-bg js-section" id="main">
    <? if($USER->IsAdmin()): ?>
        <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
    <!-- main -->
    <div class="container main s-main__main">
    <div class="header-height"></div>
    <!-- main content -->
    <div class="row main__content">
        <div class="col-12">
        <ul class="bread-crumbs main__bread-crumbs">
            <li class="bread-crumbs__item">
            <a href="/" class="bread-crumbs__link text-link">
                Главная
            </a>
            </li>
            <li class="bread-crumbs__item">
            <div class="bread-crumbs__active">
                Партнеры
            </div>
            </li>
        </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-12">
        <div class="section__title section__title_left main__title main__title_mb-sm">
            <h1 class="section__title-title section__title-title_underline-none h1">
            <b><?=$data['TITLE']?></b>
            </h1>
        </div>
        <div class="main__descr text-content">
            <p>
            <?=$data['DESC']['TEXT']?>
            </p>
        </div>
        <div class="main__btn main__btn_mt-sm text-btn">
            <a href="<?=$data['LINK']?>" class="btn btn_xl js-popup-open" data-form="Стать партнером">
            Стать партнером
            </a>
        </div>
        </div>
        <div class="col-lg-5 col-md-6 col-12 d-none d-md-block">
        <!-- gallery -->
        <div class="swiper-container main__gallery item-items item-items_gallery js-swiper-gallery">
            <!-- swiper slider -->
            <div class="swiper-wrapper item-swiper">
            <?foreach ($data['IMG_S'] as $key => $value):?>
                <!-- swiper slide -->
                <div class="swiper-slide item-item">
                    <div class="item-img img">
                        <img class="js-lazy js-object-fit" data-src="<?=$value?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                    </div>
                </div>
                <!-- /swiper slide -->
            <?endforeach;?>
            </div>
            <!-- /swiper slider -->
            <!-- swiper controls -->
            <div class="swiper-controls gallery-controls">
            <div class="swiper-button-prev swiper-button-white">
                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 11L1 6L7 1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next swiper-button-white">
                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 11L7 6L1 1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            </div>
            <!-- swiper controls -->
        </div>
        <!-- /gallery -->
        </div>
    </div>
    <!-- /main content -->
    </div>
    <!-- /main -->
</section>
<!-- /main section -->

<!-- partners section -->
<section class="s-partners section section_bg-red js-section" id="partners">
    <!-- partners -->
    <div class="container partners s-partners__partners">
    <!-- partners items -->
    <div class="row row_m-94 partners__items item-items item-items_partners">
        <?foreach ($data['TITLE_P'] as $key => $value):?>
            <!-- partners item -->
            <div class="col-lg-4 col-sm-6 col-12 item-item">
                <a href="<?=$data['LINK_P'][$key]?>" class="item-inner" style="display:block;">
                    <div class="item-img img img_contain">
                        <img class="js-lazy js-object-fit" data-src="<?=$data['IMG_P'][$key]?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                    </div>
                    <div class="item-text">
                    <h3 class="item-title item-title_line h5">
                        <?=$data['TITLE_P'][$key]?>
                    </h3>
                    <div class="item-descr text-descr">
                        <p>
                            <?=$data['DESC_P'][$key]['TEXT']?>
                        </p>
                    </div>
                    </div>
                </a>
            </div>
            <!-- /partners item -->
        <?endforeach;?>
    </div>
    <!-- /partners items -->
    </div>
    <!-- /partners -->
</section>
<!-- /partners section -->