<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>

<!-- about section -->
<section class="s-about section section_pt-0 section_pb-0 js-section" id="about">
    <? if($USER->IsAdmin()): ?>
        <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
    <div class="container">
        <!-- about -->
        <div class="row about s-about__about block-bg block-bg_green block-bg_p-0">
            <div class="col-md-6 col-12 align-self-center about__text">
            <div class="section__title section__title_left about__title">
                <h2 class="section__title-title h2 text-white">
                <?=$data['TITLE']['TEXT']?>
                </h2>
            </div>
            <div class="about__descr text-descr text-descr_fz-16">
                <p>
                <?=$data['PREVIEW_TEXT']?>
                </p>
            </div>
            <div class="about__btn text-btn">
                <a href="<?=$data['BTN_LINK']?>" class="btn btn_white btn_border">
                    <?=$data['BTN_TEXT']?>
                </a>
            </div>
            </div>
            <div class="col-md-6 col-12 order-md-first about__gallery">
            <!-- gallery -->
            <div class="swiper-container about__gallery-gallery item-items item-items_gallery js-swiper-gallery">
                <!-- swiper slider -->
                <div class="swiper-wrapper item-swiper">
                <? foreach ($data['PHOTOS'] as $photo): ?>
                    <!-- swiper slide -->
                    <div class="swiper-slide item-item">
                        <div class="item-img img">
                            <img class="js-lazy js-object-fit" data-src="<?=$photo?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                        </div>
                    </div>
                    <!-- /swiper slide -->
                <? endforeach; ?>
                </div>
                <!-- /swiper slider -->
                <!-- swiper controls -->
                <div class="swiper-controls item-controls">
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
<!-- /about section -->