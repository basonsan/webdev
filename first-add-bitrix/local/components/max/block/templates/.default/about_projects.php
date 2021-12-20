<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>

<!-- about projects section -->
<section class="s-about section section_bg js-section" id="about-projects">
    <? if($USER->IsAdmin()): ?>
        <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
    <div class="container">
    <!-- about -->
    <div class="row row_m-40 about_2 s-about__about">
        <div class="col-md-6 col-12 about__text">

        <div class="section__title section__title_left about__title">
            <h2 class="section__title-title h2 text-green">
            <?=$data['TITLE']?>
            </h2>
        </div>
        <div class="about__descr text-descr text-descr_fz-16">
            <?=$data['DESC']['TEXT']?>
        </div>
        <?if($data['TITLE_BTN']):?>
        <div class="about__btn text-btn">
            <a href="<?=$data['LINK_BTN']?>" class="btn btn_border btn_gray">
            <?=$data['TITLE_BTN']?>
            </a>
        </div>
        <?endif;?>
        </div>
        <div class="col-md-6 col-12 order-md-first about__gallery">
        <!-- gallery -->
        <div class="swiper-container about__gallery-gallery gallery-items js-swiper-gallery">
            
            <!-- swiper slider -->
            <div class="swiper-wrapper gallery-items__swiper">
                <? foreach ($data['IMG'] as $item): ?>
                <!-- swiper slide -->
                <div class="swiper-slide gallery-items__item">
                    <div class="item-img item-img_radius img">
                        <img class="js-lazy js-object-fit" data-src="<?=$item?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                    </div>
                </div>
                <!-- /swiper slide -->            
                <?endforeach;?>
            </div>            
            <!-- /swiper slider -->
            <!-- swiper controls -->
            <div class="swiper-controls gallery-items__controls">
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
    <!-- /about -->
    </div>
</section>
<!-- /about projects section -->
