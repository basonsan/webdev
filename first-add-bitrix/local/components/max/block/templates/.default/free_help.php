<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>


<!-- help section -->
<section class="s-help section section-bg js-section" id="help">
    <? if($USER->IsAdmin()): ?>
        <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
    <div class="container">
    <!-- help title -->
    <div class="section__title s-help__title">
    
        <h2 class="section__title-title h2 text-red">
            <?=$data['NAME']?>
        </h2>
        <?$test = $APPLICATION->GetTitle() ?>
        <?if($test == 'Профи центр'):?>
        <a href='https://vk.com/dobriedela73' target="_blank">
            <img class="js-lazy" data-src="/img/logo-free-help.png" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" style="height:80px;padding-left:20px;">
        </a>
        <?endif;?>
    </div>
    <!-- /help title -->
    <!-- help -->
    <div class="help s-help__help">
        <!-- help items -->
        <div class="row help__items item-items item-items_help justify-content-center">
        <? foreach ($data['IMAGES'] as $key => $image): ?>
        <!-- help item -->
        <div class="col-xl-4 col-md-4 col-sm-6 col-12 item-item">
            <a href="<?=$data['LINKS'][$key] ? $data['LINKS'][$key]  :'#popup-callback' ?>" class="item-inner item-inner_border item-inner_border-2 <?=$data['LINKS'][$key] ? ''  :'js-popup-open' ?>" data-form="Оставить заявку <?=$data['TITLE'][$key]?>">
            <div class="item-img">
                <img class="js-lazy" data-src="<?=$image?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
            </div>
            <div class="item-text">
                <h3 class="item-title h6 h6_fz-14">
                    <?=$data['TITLE'][$key]?>
                </h3>
                <div class="item-link">
                <div class="text-link text-link_border text-accent">
                    <?=$data['BTN'][$key] ? $data['BTN'][$key]  :'Оставить заявку' ?>
                </div>
                </div>
            </div>
            </a>
        </div>
        <!-- /help item -->
        <? endforeach; ?>
        </div>
        <!-- /help items -->
    </div>
    <!-- /help -->
    </div>
</section>
<!-- /help section -->