<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>

<?if($data['PREVIEW_TEXT']) :?>

<!-- partners section -->
<section class="s-partners section section_bg js-section" id="partners">
    <? if($USER->IsAdmin()): ?>
        <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
    <div class="container">
    <!-- partners -->
    <div class="row row_m-50 partners s-partners__partners">
        <div class="col-12 section__title section__title_left partners__title d-block d-md-none">
        <h2 class="section__title-title h2 text-green">
            <?=$data['TITLE']['TEXT']?>
        </h2>
        </div>
        <div class="col-md-6 col-12 partners__img">
        <div class="partners__img-img img">
            <img class="js-lazy js-object-fit" data-src="<?=$data['PREVIEW_PICTURE']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
        </div>
        </div>
        <div class="col-md-6 col-12 partners__text">
        <div class="section__title section__title_left partners__title d-none d-md-block">
            <a href='/partners/'>
                <h2   h2 class="section__title-title h2 text-green">
                    <?=$data['TITLE']['TEXT']?>
                </h2>
            </a>
        </div>
        <div class="partners__descr text-descr text-descr_fz-16">
            <p>
                <?=$data['PREVIEW_TEXT']?>
            </p>
        </div>
        </div>
    </div>
    <!-- /partners -->
    <? if(count($data['LOGOS'])): ?>
    <!-- partners items -->
    <div class="swiper-container swiper-container_visible s-partners__items item-items item-items_slider item-items_partners js-swiper-partners">
        <!-- swiper slider -->
        <div class="swiper-wrapper item-swiper">
            <? foreach ($data['LOGOS'] as $logo): ?>
            <!-- swiper slide -->
            <div class="swiper-slide item-item">
                <div class="item-img img img_contain">
                    <img class="js-lazy" data-src="<?=$logo?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                </div>
            </div>
            <!-- /swiper slide -->  
            <?endforeach;?>
        </div>
        <!-- /swiper slider -->
        <!-- swiper controls -->
        <div class="swiper-controls item-controls">
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
    <!-- /partners items -->
    
    <?endif;?>
    </div>
</section>
<!-- /partners section -->

<?else:?>

<!-- partners section -->
<section class="s-partners section  js-section" id="partners">
    <div class="container">
    <div class="section__title s-partners__titlek">
        <h2 class="section__title-title h2 text-red">
        Наши партнеры
        </h2>
    </div>
     <!-- /partners -->
     <? if(count($data['LOGOS'])): ?>
    <!-- partners items -->
    <div class="swiper-container swiper-container_visible s-partners__items item-items item-items_slider item-items_partners js-swiper-partners">
        <!-- swiper slider -->
        <div class="swiper-wrapper item-swiper">
            <? foreach ($data['LOGOS'] as $logo): ?>
            <!-- swiper slide -->
            <div class="swiper-slide item-item">
                <div class="item-img img img_contain">
                    <img class="js-lazy" data-src="<?=$logo?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                </div>
            </div>
            <!-- /swiper slide -->  
            <?endforeach;?>
        </div>
        <!-- /swiper slider -->
        <!-- swiper controls -->
        <div class="swiper-controls item-controls">
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
    <!-- /partners items -->
    <?endif;?>
    </div>
</section>
<!-- /partners section -->

<?endif;?>