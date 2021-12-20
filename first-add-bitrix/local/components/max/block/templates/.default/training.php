<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>

<!-- training section -->
<section class="s-training section section_bg js-section" id="training">
    <? if($USER->IsAdmin()): ?>
    <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
    <div class="container">
    <!-- training title -->
    <div class="section__title s-training__title">
        <h2 class="section__title-title h2 text-green">
            <?=$data['TITLE']?>
        </h2>
    </div>
    <!-- /training title -->
    <!-- training -->
    <div class="training s-training__training">
        <!-- training items -->
        <div class="row row_m-30 justify-content-center training__items training-items">
        <? foreach($data['TITLE_BLOCK'] as $key => $item): ?>
       
            <!-- training item -->
            <div class="col-lg-4 col-sm-6 col-12 training-items__item item-item">
                <div class="training-items__inner">
                <div class="training-items__icon">
                    <img class="js-lazy js-object-fit" data-src="<?=$data['ICON_BLOCK'][$key]?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                </div>
                <div class="training-items__text">
                    <h3 class="training-items__title h5">
                    <?=$data['TITLE_BLOCK'][$key]?>
                    </h3>
                    <div class="training-items__descr text-descr">
                    <p>
                    <?=$data['DESC_BLOCK'][$key]['TEXT']?>
                    </p>
                    </div>
                </div>
                </div>
            </div>
            <!-- /training item -->
        <? endforeach; ?>
        </div>
        <!-- /training items -->
    </div>
    <!-- /training -->
    </div>
</section>
<!-- /training section -->