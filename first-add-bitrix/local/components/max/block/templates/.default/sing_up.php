<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>

<!-- sing-up section -->
<section class="s-sing-up section section_bg js-section" id="sing-up">
    <? if($USER->IsAdmin()): ?>
      <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
    <!-- sing-up -->
    <div class="container">
    <!-- sing-up title -->
    <div class="section__title section__title_mb-lg s-sing-up__title">
        <h2 class="section__title-title h2 text-red">
        <?=$data['TITLE']?>
        </h2>
    </div>
    <!-- /sing-up title -->
    <!-- sign up -->
    <div class="sign-up s_sign-up">
        <!-- sing-up items -->
        <div class="row justify-content-center sing-up__items item-items item-items_sign-up">
        <!-- sing-up item -->
        <div class="col-lg-6 col-sm-6 col-12 item-item">
            <div class="item-inner item-inner_center">
            <div class="item-check"></div>
            <h3 class="item-title item-title_line item-title_line-long h5">
            <?=$data['TITLE1']?>
            </h3>
            <div class="item-price">
            <?=$data['PRICE1']?>
            </div>
            </div>
        </div>
        <!-- /sing-up item -->
        <!-- sing-up item -->
        <div class="col-lg-6 col-sm-6 col-12 item-item item-item_red">
            <div class="item-inner item-inner_center">
            <div class="item-check"></div>
            <h3 class="item-title item-title_line item-title_line-long h5">
            <?=$data['TITLE2']?>
            </h3>
            <div class="item-price">
            <?=$data['PRICE2']?>
            </div>
            <div class="item-logo text-descr">
                <img class="js-lazy js-object-fit" data-src="<?=$data['IMG']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
            </div>
            </div>
        </div>
        <!-- /sing-up item -->
        </div>
        <!-- /sing-up items -->
        <div class="sign-up__btn text-btn text-btn_center text-btn_mt-lg">
        <a href="<?=$data['BTN_LINK']?>" class="btn btn_xl <?=(stripos($data['BTN_LINK'], "#") == 0) ? "js-popup-open" : ""?>" data-form="Записаться">
            <?=$data['BTN']?>
        </a>
        </div>
    </div>
    <!-- /sign up -->
    </div>
    <!-- /sing-up -->
</section>
<!-- /sing-up section -->