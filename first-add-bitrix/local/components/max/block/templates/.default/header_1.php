<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>
<!-- main section -->
<section class="s-main section section_bg-1 js-section" id="main anchor<?=$arResult['DATA']['ID'] . $arResult['IB_ID'] ?>" style="padding-top: 0px;">
    <? if($USER->IsAdmin()): ?>
    <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
    <!-- section img -->
    <div class="section__img section__img_right s-main__img s-main__img_1">
        <!-- <picture>
            <source data-srcset="/img/bg/main-img.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="> -->
            <img class="js-lazy js-object-fit" data-src="<?=$data['IMG_BG']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
        <!-- </picture> -->
    </div>
    <!-- /section img -->
    <div class="header-height d-block d-lg-none"></div>
    <div class="container">
        <!-- main -->
        <div class="row main s-main__main">
            <!-- main content -->
            <div class="col-lg-8 col-12 ml-auto main__content">
                <div class="main__logo">
                    <!-- <picture>
                        <source data-srcset="/img/logo-2.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                        <img class="js-lazy js-object-fit" data-src="/img/logo-2.png" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                    </picture> -->
                </div>
                <div class="section__title section__title_left main__title">
                    <h1 class="section__title-title h1">
                        <?=$data['TITLE']['TEXT']?>
                    </h1>
                    <h3 class="section__title-subtitle h3">
                        <?=$data['SUBTITLE']['TEXT']?>
                    </h3>
                </div>
                <? if(!empty($data['LIST'])): ?>
                    <ul class="main__list text-list">
                        <? foreach ($data['LIST'] as $item): ?> 
                            <li class="text-list__item"><?=$item?></li>
                        <? endforeach; ?>
                    </ul>
                <? endif ?>
                <div class="main__btn text-btn">
                    <a href="<?=$data['BTN_LINK']?>" class="btn btn_xl btn_shadow js-popup-open" data-form="Связаться с нами">
                        <?=$data['BTN_TEXT']?>
                    </a>
                </div>
                <? if(!empty($data['REVIEWS'])): ?>
                    <!-- reviews items -->
                    <div class="swiper-container swiper-container_visible main__reviews reviews-items js-swiper-reviews">
                        <!-- swiper slider -->
                        <div class="swiper-wrapper reviews-items__swiper">
                            <? foreach ($data['REVIEWS'] as $review): ?>
                                <!-- swiper slide -->
                                <div class="swiper-slide reviews-items__item">
                                    <div class="reviews-items__inner">
                                        <div class="reviews-items__descr text-descr">
                                            <p>
                                                <?=$review['DESC']['TEXT']?>
                                            </p>
                                        </div>
                                        <div class="reviews-items__author">
                                            <div class="reviews-items__author-img" >
                                                <img class="js-lazy js-object-fit" data-src="<?=$review['AVATAR']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" style="border-radius: 100%;">
                                            </div>
                                            <div class="reviews-items__author-text">
                                                <div class="reviews-items__author-name">
                                                    <?=$review['NAME']?>
                                                </div>
                                                <div class="reviews-items__author-info">
                                                    <?=$review['WHO']?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /swiper slide -->
                            <? endforeach; ?>
                        </div>
                        <!-- /swiper slider -->
                        <!-- swiper controls -->
                        <div class="swiper-controls reviews-items__controls">
                            <div class="swiper-button-prev d-none">
                                <svg width="20" height="15" viewBox="0 0 20 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18.6922 8.71436H19.6922V6.71436H18.6922V8.71436ZM1.56641 6.71436C1.01412 6.71436 0.566406 7.16207 0.566406 7.71436C0.566406 8.26664 1.01412 8.71436 1.56641 8.71436V6.71436ZM18.6922 6.71436H1.56641V8.71436H18.6922V6.71436Z" fill="#110A0A" />
                                    <path d="M7.41425 13.5624L1.56641 7.71454L7.41425 1.8667" stroke="#110A0A" stroke-width="2" stroke-linecap="square" />
                                </svg>
                            </div>
                            <div class="swiper-pagination d-none"></div>
                            <div class="swiper-button-next">
                                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 11L7 6L1 1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>
                        <!-- swiper controls -->
                    </div>
                    <!-- /reviews items -->
                <? endif ?>
            </div>
            <!-- /main content -->
        </div>
        <!-- /main -->
    </div>
</section>
<!-- /main section -->

<div class="js-header-fixed"></div>