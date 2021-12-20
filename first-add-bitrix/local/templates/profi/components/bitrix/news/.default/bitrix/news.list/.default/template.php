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


<?
$APPLICATION->IncludeComponent('max:page', '', [
    'PAGE' => 'menu2',
]);
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
                    <div class="bread-crumbs__active">
                        Новости
                    </div>
                </li>
            </ul>
            <div class="section__title section__title_left main__title">
                <h1 class="section__title-title section__title-title_underline-none h1">
                    <b>Новости</b>
                    
                </h1>
            </div>
        </div>
        <!-- /main content -->
        <!-- news -->
        <div class="row section__content main__news">
            <div class="col-lg-8 col-12 section__content-left">
                
                <!-- news items -->
                <div class="row item-items">
                    
                    <? foreach ($arResult['ITEMS'] as $item): ?>
                        <!-- news item -->
                        <div class="col-sm-6 col-12 item-item">
                            <a href="<?=$item['DETAIL_PAGE_URL']?>"  class="item-inner item-inner_border">
                                <div class="item-img item-img_h-240 img" style="background-image:url(<?=$item['PREVIEW_PICTURE']['SRC']?>);background-clip: border-box;background-position: center;background-size: 110%;">
                                    <!-- <img class="js-lazy js-object-fit" data-src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="> -->
                                    <? if($item['PROPERTIES']['TAG']['VALUE']): ?>
                                        <div class="img__text img__text_left-0">
                                            <div class="img__text-item img__text-item_bg-red">
                                                <?=current($item['PROPERTIES']['TAG']['VALUE'])?>
                                            </div>
                                        </div>
                                    <? endif; ?>
                                    <div class="img-hover">
                                        <div class="img-hover__text">
                                        Подробнее
                                        </div>
                                    </div>
                                </div>
                                <div class="item-text item-text_padding">
                                    <? if($item['ACTIVE_FROM']): ?>
                                    <time class="item-date">
                                        <?=ConvertDateTime($item['ACTIVE_FROM'], "DD.MM.YYYY", "ru")?>
                                    </time>
                                    <? endif; ?>
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
                                    <div class="btn btn_border btn_gray">
                                        Подробнее
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- /news item -->
                    <? endforeach; ?>

                </div>
                <!-- /news items -->
                <?=$arResult["NAV_STRING"]?>
                
            </div>
            <!-- <aside class="col-lg-4 col-12 section__content-right">
                <div class="category section__content-block">
                    <h4 class="category__title h6">
                        <span>Категории событий:</span>
                    </h4>
                    <ul class="category__list">
                        <li><a href="javascript:void(0);" class="text-link">Бесплатный английский</a></li>
                        <li><a href="javascript:void(0);" class="text-link">Курсы по школьным предметам</a></li>
                        <li><a href="javascript:void(0);" class="text-link">Интерннет-школа Sodt-skoll</a></li>
                    </ul>
                </div>
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
                            <source data-srcset="/img/partners/partner-7.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                            <img class="js-lazy" data-src="/img/partners/partner-7.jpg" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                        </picture>
                    </div>
                    <div class="offer__img">
                        <picture>
                            <source data-srcset="/img/offer/offer-1.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                            <img class="js-lazy" data-src="/img/offer/offer-1.png" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
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
        <!-- /news -->
    </div>
    <!-- /main -->
</section>
<!-- /main section -->

