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
$data = $arResult;
?>




<!-- about -->
<div class="swiper-container swiper-container_visible-2 main__items item-items item-items_slider about-items js-swiper-about">
    <!-- swiper slider -->
    <div class="swiper-wrapper item-swiper about-items__swiper">
        <?foreach ($data['ITEMS'] as $key => $value):?>
            <!-- swiper slide -->
            <div class="swiper-slide item-item item-item_bg block-bg about-items__item">
                <div class="item-text about-items__text">
                <h1 class="item-title h2 text-white about-items__title">
                    <?=$value['NAME']?>
                </h1>
                <div class="item-descr text-descr about-items__descr">
                    <p>
                    <?=$value['PREVIEW_TEXT']?>
                    </p>
                </div>
                <div class="item-btn text-btn about-items__btn">
                    <a href="<?=$value['DETAIL_PAGE_URL']?>" class="btn btn_white btn_border text-white js-popup-open" data-form="Подробнее">
                    Подробнее
                    </a>
                </div>
                </div>
                <div class="about-items__img js-lazy" data-src="<?=$value['PREVIEW_PICTURE']['SRC']?>"></div>
            </div>
            <!-- /swiper slide -->
        <?endforeach;?>
    </div>
    <!-- /swiper slider -->
    <!-- swiper controls -->
    <div class="swiper-controls about-items__controls">
    <div class="swiper-button-prev swiper-button-white">
        <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M7 11L1 6L7 1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </div>
    <div class="swiper-pagination d-none"></div>
    <div class="swiper-button-next swiper-button-white">
        <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 11L7 6L1 1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </div>
    </div>
    <!-- swiper controls -->
</div>
<!-- /about -->
