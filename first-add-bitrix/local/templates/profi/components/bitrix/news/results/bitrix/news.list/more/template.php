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


<? if($arResult['ITEMS']): ?>
<!-- news section -->
<section class="s-news section section_bg-red js-section" id="news">
    <div class="container">
        <!-- news title -->
        <div class="section__title s-news__title">

            <h2 class="section__title-title h2 text-red">
                Также посмотрите
            </h2>

        </div>
        <!-- /news title -->
        <!-- news -->
        <div class="news s-news__news js-more" data-more-xl="3,3" data-more-lg="3,3" data-more-md="2,2" data-more-sm="2,2" data-more-xs="3,3">
            <!-- news items -->
            <div class="row news__items item-items">
                <? foreach ($arResult['ITEMS'] as $item): ?>
                    <!-- news item -->
                    <div class="col-lg-4 col-sm-6 col-12 item-item js-more-item">
                        <a href="<?=$item['DETAIL_PAGE_URL']?>"  class="item-inner item-inner_border">
                            <div class="item-img item-img_h-240 img" style="background-image:url(<?=$item['PREVIEW_PICTURE']['SRC']?>);background-clip: border-box;background-position: center;background-size: 110%;">
                                <!-- <img class="js-lazy js-object-fit" data-src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="> -->
                                <div class="img-hover">
                                    <div class="img-hover__text">
                                    Подробнее
                                    </div>
                                </div>
                            </div>
                            <div class="item-text item-text_padding">
                                <h3 class="item-title h5">
                                    <?=$item['NAME']?>
                                </h3>
                                <div class="item-descr text-descr">
                                    <p>
                                        <?=$item['PREVIEW_TEXT']?>
                                    </p>
                                </div>
                            </div>
                            <div class="item-btn item-btn_padding">
                                <div class="btn btn_border btn_gray js-popup-open">
                                    Подробнее
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- /news item -->
                <? endforeach; ?>
            </div>
            <!-- /news items -->
            <!-- news btn -->
            <div class="news__btn text-btn text-btn_center text-btn_mt-lg js-more-btn-toggle">
                <a href="javascript:void(0);" class="btn btn_gray btn_border js-more-btn">
                    Смотреть ещё
                </a>
            </div>
            <!-- /news btn -->
        </div>
        <!-- /news -->
    </div>
</section>
<!-- /news section -->
<? endif; ?>

