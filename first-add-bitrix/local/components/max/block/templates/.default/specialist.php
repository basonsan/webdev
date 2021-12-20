<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>

<!-- info section -->
<section class="s-info section section_pt-0 section_pb-0 js-section" id="<?= ($data['LEFT'] == '1') ? 'info-3' :'info-2' ?>" >
    <? if($USER->IsAdmin()): ?>
    <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
    <div class="container">
    <div class="row info <?= ($data['LEFT'] == '1') ? 'info_3' :'info_2' ?> section block-bg <?= ($data['BG'] == '3') ? 'block-bg_green' :'' ?> block-bg_r-35">
        <div class="col-lg-7 col-md-7 col-12 ml-auto info__content">
            <div class="section__title section__title_left info__title">
                <h2 class="section__title-title section__title-title_underline-none h2 text-white">
                <?=$data['TITLE']['TEXT']?>
                </h2>
            </div>
            <div class="info__descr text-descr text-descr_fz-16">
                <p>
                <?=$data['SUBTITLE']['TEXT']?>
                </p>
            </div>
            <div class="info__btn text-btn">
                <a href="<?=$data['BTN_LINK']?>" class="btn btn_white btn_border js-popup-open" data-form="Подать заявку">
                    <?=$data['BTN_TEXT']?>
                </a>
            </div>
        </div>
        <!-- section img -->
        <div class="section__img section__img_left info__img info__img_2" >
        <!-- <picture>
            <source data-srcset="./img/bg/info-img-2.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="> -->
            <img class="js-lazy js-object-fit" data-src="<?=$data['IMG']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
        <!-- </picture> -->
        <? if($data['WORK_SPEC']): ?>
        <div class="section__img-text">
            <div class="section__img-text-bg">
            <div class="section__img-position">
                <?=$data['WORK_SPEC']?>
            </div>
            <div class="section__img-name h5 text-title">
                <?=$data['NAME_SPEC']?>
            </div>
            </div>
        </div>
        <? endif ?>
        </div>
        <!-- /section img -->
    </div>
    </div>
</section>
<!-- /info section -->