<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>

<!-- achievements section -->
<section class="s-achievements section section_bg js-section" id="achievements">
    <? if($USER->IsAdmin()): ?>
      <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
    <div class="container">
    <!-- achievements title -->
    <div class="section__title s-achievements__title">
        <h2 class="section__title-title h2 text-der">
        <?=$data['TITLE']?>
        </h2>
        <h3 class="section__title-subtitle h3">
        <?=$data['DESC']['TEXT']?>
        </h3>
    </div>
    <!-- /achievements title -->
    <!-- achievements -->
    <div class="achievements s-achievements__achievements">
        <!-- achievements items -->
        <div class="row row_m-30 achievements__items item-items item-items_mt-lg">

            <?foreach ($data['TITLE_1'] as $key => $value):?>
            <!-- achievements item -->
            <div class="col-lg-4 col-md-6 col-12 item-item">
                <div class="item-inner">
                <div class="item-img item-img_radius img">
                    <img class="js-lazy js-object-fit" data-src="<?=$data['IMG'][$key]?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                </div>
                <h3 class="item-title h3">
                    <span><?=$data['TITLE_1'][$key]?></span> <?=$data['TITLE_2'][$key]?>
                </h3>
                <div class="item-descr text-descr text-descr_mt-8">
                    <p>
                        <?=$data['DESC_1'][$key]['TEXT']?>
                    </p>
                </div>
                </div>
            </div>
            <!-- /achievements item -->
            <?endforeach;?>
        
        </div>
        <!-- /achievements items -->
    </div>
    <!-- /achievements -->
    </div>
</section>
<!-- /achievements section -->




