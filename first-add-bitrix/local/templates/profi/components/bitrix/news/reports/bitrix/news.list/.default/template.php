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
<!-- 


<?
$APPLICATION->IncludeComponent('max:page', '', [
    'PAGE' => 'menu2',
]);
?>

<!-- main section -->
<section class="s-main section js-section" id="main">
    <!-- main -->
    <div class="container main s-main__main">
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
            Отчеты
            </div>
        </li>
        </ul>
    </div>
    <!-- /main content -->
    <!-- main items -->

    <div class="main__items item-items item-items_mt-xl item-items_news">
        <?foreach ($arResult['ITEMS'] as $key => $value):?>
        <div class="item-item"   style='position:relative;'>
            <? if($USER->IsAdmin()): ?>
                <a href="/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=53&type=content&lang=ru&ID=<?=$value['ID']?>" class="fix-block fix-block-content" target="_blank" style="left: -130px;">Изменить отчет</a>
            <? endif;?>
            <?if($value['PREVIEW_PICTURE']['SRC']):?>
            <div class="item-img item-img_news img">
                <img class="js-lazy js-object-fit" data-src="<?=$value['PREVIEW_PICTURE']['SRC']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
            </div>
            <?endif;?>
            <div class="item-text">
                <h3 class="item-title item-title_font h3">
                    <?=$value['NAME']?>
                </h3>
                <div class="item-descr text-descr">
                <p>
                    <?=$value["PREVIEW_TEXT"]?>
                </p>
                </div>
                <div class="item-btn text-btn">
                <?//$value['DETAIL_PAGE_URL']?>
                <a href="<?=$value["PROPERTIES"]["LINK"]["VALUE"]?>" class="btn btn_border btn_gray js-popup-open" data-form="Смотреть отчет" target="_blank">
                    Смотреть отчет
                </a>
                </div>
            </div>
        </div>
        <?endforeach;?>
    </div>
    <!-- /main items -->
    </div>
    <!-- /main -->
</section>
<!-- /main section -->

<?
$APPLICATION->IncludeComponent('max:page', '', [
    'PAGE' => 'kontakty-blok',
]);
?>