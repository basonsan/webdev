<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
$cnt = count($data['ELEMENTS']);
?>

<? if($cnt): ?>
<!-- results section -->
<section class="s-results section section-bg js-section <?= ($data['TYPE'] == 41) ? 's-main' : ''?>" id="results">

    <? if($USER->IsAdmin()): ?>
        <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
        <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=10&type=content&lang=ru&ID=0' class="fix-block" target="_blank" style='top:250px'>Добавить кейс</a>
    <? endif; ?>
    <div class="container">
    <?if($data['TYPE'] == 41):?>
    <div class="header-height"></div>
    <ul class="bread-crumbs main__bread-crumbs">
        <li class="bread-crumbs__item">
            <a href="/" class="bread-crumbs__link text-link">
            Главная
            </a>
        </li>
        <li class="bread-crumbs__item">
            <a href="/about/" class="bread-crumbs__link text-link">
            О нас
            </a>
        </li>
        <li class="bread-crumbs__item">
            <div class="bread-crumbs__active">
            <?$APPLICATION->ShowTitle();?>
            </div>
        </li>
    </ul>
    <!-- reviews title -->
    <div class="section__title section__title_left main__title">
        <h1 class="section__title-title section__title-title_underline-none h1">
            <b><?=$data['TITLE']['TEXT']?></b>
        </h1>
    </div>
    <!-- /reviews title -->
    <?else:?>
    <!-- results title -->
    <div class="section__title s-results__title">
        <a href='/results/'>
            <h2 class="section__title-title h2 text-red">
            <?=$data['TITLE']['TEXT']?>
            </h2>
        </a>
    </div>
    <!-- /results title -->
    <?endif;?>
    <!-- results -->
    <div class="results s-results__results">
        <!-- results items -->
        <div class="row justify-content-center results__items item-items" style='position:relative;'>
            <? foreach ($data['ELEMENTS'] as $element): ?>
                <!-- results item -->
                <div class="col-lg-4 col-sm-6 col-12 item-item">
                
                    <? if($USER->IsAdmin()): ?>
                        <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=10&type=content&lang=ru&ID=<?=$element['ID']?>' class="fix-block fix-block-content" target="_blank">Редакт.</a>
                    <? endif; ?>
                    <a href="/results/<?=$element['CODE']?>/" class="item-inner item-inner_border" >
                        <div class="img item-img item-img_h-240" style="background-image:url(<?=$element['PREVIEW_PICTURE']?>);background-clip: border-box;background-position: center;background-size: 110%;">
                            <!-- <img class="js-lazy js-object-fit" data-src="<?=$element['PREVIEW_PICTURE']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="> -->
                            <div class="img-hover">
                                <div class="img-hover__text">
                                Подробнее
                                </div>
                            </div>
                        </div>
                        <div class="item-text item-text_padding">
                            <h3 class="item-title h5">
                            <?=$element['NAME']?>
                            </h3>
                            <div class="item-descr text-descr">
                            <p>
                            <?=$element['PREVIEW_TEXT']?>
                            </p>
                            </div>
                        </div>
                        <div class="item-btn item-btn_padding">
                            <div  class="btn btn_border btn_gray">
                            Подробнее
                            </div>
                        </div>
                    </a>
                </div>
                <!-- /results item -->
            <? endforeach; ?>
        </div>
        <!-- /results items -->
    </div>
    <!-- /results -->
    </div>
</section>
<!-- /results section -->
<? endif ?>