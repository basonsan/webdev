<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>

<!-- level section -->
<section class="s-level section section_bg js-section" id="level">
    <? if($USER->IsAdmin()): ?>
    <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
    <div class="container">
    <!-- level title -->
    <div class="section__title s-level__title">
        <h2 class="section__title-title h2 text-red">
        <?=$data['TITLE']?> <br>
        <span class="subtitle">  
            <?=$data['SUBTITLE']['TEXT']?>
        </span>
        </h2>
    </div>
    <!-- /level title -->
    <!-- level -->
    <div class="level s-level__level">
        <!-- level items -->
        <div class="row justify-content-center level__items level-items">
        <!-- level item -->
        <div class="col-lg-4 col-md-6 col-12 level-items__item">
            <div class="level-items__inner">
            <div class="level-items__text">
                <h3 class="level-items__title level-items__title_1 h5">
                <?=$data['TITLE_DIAG'][0]?>
                <span class="level-items__title-cube">
                    <span class="level-items__title-cube-front"></span>
                    <span class="level-items__title-cube-border"></span>
                    <span class="level-items__title-cube-top"></span>
                    <span class="level-items__title-cube-right"></span>
                </span>
                </h3>
                <div class="level-items__descr text-descr">
                <p>
                <?=$data['DESC_DIAG'][0]?>
                </p>
                </div>
            </div>
            <!-- <div class="level-items__btn text-btn">
                <a href="<?=$data['LINK_DIAG'][0]?>" class="btn btn_border btn_gray js-popup-open" data-form='Записаться на <?=$data['TITLE_DIAG'][0]?>'>
                <?=$data['BTN_DIAG'][0]?>
                </a>
            </div> -->
            </div>
        </div>
        <!-- /level item -->
        <!-- level item -->
        <div class="col-lg-4 col-md-6 col-12 level-items__item">
            <div class="level-items__inner">
            <div class="level-items__text">
                <h3 class="level-items__title level-items__title_2 h5">
                <?=$data['TITLE_DIAG'][1]?>
                <span class="level-items__title-cube">
                    <span class="level-items__title-cube-front"></span>
                    <span class="level-items__title-cube-border"></span>
                    <span class="level-items__title-cube-top"></span>
                    <span class="level-items__title-cube-right"></span>
                </span>
                </h3>
                <div class="level-items__descr text-descr">
                <p>
                <?=$data['DESC_DIAG'][1]?>
                </p>
                </div>
            </div>
            <div class="level-items__btn text-btn" style="text-align: center;">
                <a href="<?=$data['LINK_DIAG'][0]?>" class="btn btn_border btn_gray js-popup-open" data-form='Записаться на <?=$data['TITLE_DIAG'][1]?>'>
                <?=$data['BTN_DIAG'][1]?>
                </a>
            </div>
            </div>
        </div>
        <!-- /level item -->
        <!-- level item -->
        <div class="col-lg-4 col-md-6 col-12 level-items__item">
            <div class="level-items__inner">
            <div class="level-items__text">
                <h3 class="level-items__title level-items__title_3 h5">
                <?=$data['TITLE_DIAG'][2]?>
                <span class="level-items__title-cube">
                    <span class="level-items__title-cube-front"></span>
                    <span class="level-items__title-cube-border"></span>
                    <span class="level-items__title-cube-top"></span>
                    <span class="level-items__title-cube-right"></span>
                </span>
                </h3>
                <div class="level-items__descr text-descr">
                <p>
                <?=$data['DESC_DIAG'][2]?>
                </p>
                </div>
            </div>
            <!-- <div class="level-items__btn text-btn">
                <a href="<?=$data['LINK_DIAG'][2]?>" class="btn btn_border btn_gray js-popup-open" data-form='Записаться на <?=$data['TITLE_DIAG'][2]?>'>
                <?=$data['BTN_DIAG'][2]?>
                </a>
            </div> -->
            </div>
        </div>
        <!-- /level item -->
        </div>
        <!-- /level items -->
    </div>
    <!-- /level -->
    </div>
</section>
<!-- /level section -->