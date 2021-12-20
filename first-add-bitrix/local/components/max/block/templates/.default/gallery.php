<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>
<!-- gallery section -->
<section class="s-gallery section section_bg-blue js-section" id="gallery">
    <? if($USER->IsAdmin()): ?>
        <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
    <!-- gallery -->
    <div class="container">
    <!-- gallery title -->
    <div class="section__title s-gallery__title">
        <h2 class="section__title-title h2">
        Наши фото
        </h2>
    </div>
    <!-- /gallery title -->
    <!-- gallery -->
    <div class="gallery s-gallery__gallery">
        <!-- gallery -->
        <div class="swiper-container swiper-container_visible-2 gallery__gallery js-swiper-gallery-all">
        <!-- swiper slider -->
        <div class="swiper-wrapper item-swiper">

            <?foreach ($data['IMG'] as $key => $value):?>
            <!-- swiper slide -->
            <div class="swiper-slide item-item">
                <a href="<?=$value?>" data-fslightbox="gallery" class="item-img item-img_gallery img">
                    <!-- <picture>
                    <source data-srcset="./img/gallery/gallery-1.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="> -->
                    <img class="js-lazy js-object-fit" data-src="<?=$value?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                    <!-- </picture> -->
                    <div class="img-hover img-hover_2"></div>
                </a>
            </div>
            <!-- /swiper slide -->
            <?endforeach;?>
            
        </div>
        <!-- /swiper slider -->
        <!-- swiper controls -->
        <div class="swiper-controls item-controls">
            <div class="swiper-button-prev d-none">
            <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 11L1 6L7 1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            </div>
            <div class="swiper-pagination d-none"></div>
            <div class="swiper-button-next d-none">
            <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 11L7 6L1 1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            </div>
        </div>
        <!-- swiper controls -->
        </div>
        <!-- /gallery -->
    </div>
    <!-- /gallery -->
    </div>
    <!-- /gallery -->
</section>
<!-- /gallery section -->