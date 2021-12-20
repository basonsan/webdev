<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>


<!-- benefits section -->
<section class="s-benefits section section-bg js-section" id="benefits">
    <? if($USER->IsAdmin()): ?>
        <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
    <!-- benefits -->
    <div class="container benefits s-benefits__benefits">
    <!-- benefits items -->
    <div class="benefits__items item-items item-items_benefits">
        <? foreach ($data['IMG'] as $i => $item):?>
        <!-- benefits item -->
        <div class="row row_m-40 benefits-items__item item-item">
        <div class="col-md-6 col-12">
            <div class="item-img img">
            <!-- <picture>
                <source data-srcset="./img/benefits/benefit-1.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="> -->
                <img class="js-lazy js-object-fit" data-src="<?=$data['IMG'][$i]?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
            <!-- </picture> -->
            </div>
        </div>
        <div class="col-md-6 col-12">
            <div class="item-text">
            <div class="item-title section__title section__title_left">
                <h3 class="item-title section__title-title h2 text-red">
                <?=$data['TITLE'][$i]?>
                </h3>
            </div>
            <div class="item-descr text-descr">
                <p>
                <?=$data['DESC'][$i]['TEXT']?>
                </p>
            </div>
            </div>
        </div>
        </div>
        <!-- /benefits item -->
        <? endforeach; ?>
    </div>
    <!-- /benefits items -->
    </div>
    <!-- /benefits -->
</section>
<!-- /benefits section -->