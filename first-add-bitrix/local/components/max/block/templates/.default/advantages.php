<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
$cnt = count($data['ELEMENTS']);
?>
<!-- <? if($cnt>3): ?>
<style>
.s-advantages::after {
    height: 1340px !important;
}
</style>
<? endif ?>

<? if($cnt>6): ?>
<style>
.s-advantages::after {
    height: 1800px !important;
}
</style>
<? endif ?> -->
<!-- advantages section -->
<section class="s-advantages section section_bg js-section" id="advantages">
    <? if($USER->IsAdmin()): ?>
        <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
    <div class="container">
    <?if($data['TITLE']):?>
    <!-- advantages title -->
    <div class="section__title s-advantages__title">
        <h2 class="section__title-title h2 text-green">
       <?=$data['TITLE']?>
        </h2>
    </div>
    <!-- /advantages title -->
    <?endif;?>
    <!-- advantages -->
    <div class="advantages s-advantages__advantages">
        <!-- advantages items -->
        <div class="row justify-content-center advantages__items item-items">
        <?foreach ($data['TITLE_1'] as $key => $value): ?>
        <!-- advantages item -->
        <div class="col-lg-4 col-sm-6 col-12 item-item">
            <?if($data['LINK'][$key]==''):?>
                <a href="#popup-callback" class="item-inner item-inner_border  js-popup-open" data-form="Подробнее">
            <?else:?>
                <a href="<?=$data['LINK'][$key]?>" class="item-inner item-inner_border" data-form="Подробнее">
            <?endif;?>
                <div class="img img_overlay item-img item-img_h-240" style="background:url(<?=$data['IMG_1'][$key]?>); background-clip: border-box;background-position: center;background-size: 110%;">
                    <!-- <img class="js-lazy js-object-fit" data-src="<?=$data['IMG_1'][$key]?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="> -->
                    <?if($data['TEGS_LINKS'][$key]):?>
                    <div class="img__text">
                        <?
                        $arrLink = explode(',', $data['TEGS_LINKS'][$key]);
                        $arrTeg = explode(',', $data['TEGS'][$key]);
                        foreach ($arrTeg as $key2 => $value2) :
                        ?>
                        <div href="<?=$arrLink[$key2]?>" class="img__text-item <?=($key2 % 2) ? 'img__text-item_bg-green' : ''?>">
                            <?=$arrTeg[$key2]?>
                        </div>
                        <?endforeach;?>
                    </div>
                    <?endif;?>
                    <div class="img-hover">
                        <div class="img-hover__text">
                        Подробнее
                        </div>
                    </div>
                </div>
                <div class="item-text item-text item-text_padding">
                    <h3 class="item-title h5">
                    <?=$data['TITLE_1'][$key]?>
                    </h3>
                    <div class="item-descr text-descr">
                    <p>
                        <?=$data['DESC_1'][$key]['TEXT']?>
                    </p>
                    </div>
                </div>
                <div class="item-btn item-btn_padding">
                    <?if($data['LINK'][$key]==''):?>
                        <div href="#popup-callback" class="btn btn_border btn_gray" data-form="Подробнее">
                    <?else:?>
                        <div href="<?=$data['LINK'][$key]?>" class="btn btn_border btn_gray" data-form="Подробнее">
                    <?endif;?>
                    Подробнее
                    </div>
                </div>
            </a>
        </div>
        <!-- /advantages item -->
        <?endforeach;?>
        </div>
        <!-- /advantages items -->
    </div>
    <!-- /advantages -->
    </div>
</section>
<!-- /advantages section -->