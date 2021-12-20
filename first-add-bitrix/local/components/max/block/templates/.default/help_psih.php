<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>

<!-- help section -->
<section class="s-help section section_bg js-section" id="help">
    <? if($USER->IsAdmin()): ?>
      <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
    <div class="container">
    <!-- help title -->
    <div class="section__title section__title_mb-lg s-help__title">
        <h2 class="section__title-title h2 text-red">
            <?=$data['TITLE']?>
        </h2>
    </div>
    <!-- /help title -->
    
    <!-- help -->
    <div class="help s-help__help">
        <!-- help items -->
        <div class="row help__items item-items item-items_help justify-content-center">
        <? foreach ($data['TITLE_HELP'] as $i => $item): ?>
            <!-- help item -->
            <div class="col-xl-3 col-md-4 col-sm-6 col-12 item-item">
                <div class="item-inner item-inner_border item-inner_border-2">
                <div class="item-img">
                    <!-- <picture>
                    <source data-srcset="./img/help/help-7.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="> -->
                    <img class="js-lazy" data-src="<?=$data['IMG_HELP'][$i]?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                    <!-- </picture> -->
                </div>
                <div class="item-text">
                    <h3 class="item-title h6 h6_fz-14">
                    <?=$data['TITLE_HELP'][$i]?>
                    </h3>
                    <div class="item-link">
                    <a href="https://b24-h7csnu.bitrix24.site/psiholog/" class="text-link text-link_border text-accent js-popup-open" data-form="Записаться виды псих.помощи - <?=$data['TITLE_HELP'][$i]?>" target="_blank">
                        Записаться
                    </a>
                    </div>
                </div>
                </div>
            </div>
            <!-- /help item -->
        <?endforeach;?>
        </div>
        <!-- /help items -->
    </div>
    <!-- /help -->
    </div>
</section>
<!-- /help section -->
