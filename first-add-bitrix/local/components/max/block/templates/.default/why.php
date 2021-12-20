<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>
<!-- why section -->
<section class="s-why section section-bg js-section" id="why">
    <? if($USER->IsAdmin()): ?>
      <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
    <div class="container">
    <!-- why title -->
    <div class="section__title s-why__title">
        <h2 class="section__title-title h2">
        <?=$data['TITLE']?>
        </h2>
        <h3 class="section__title-subtitle h3">
        <?=$data['DESC']['TEXT']?>
        </h3>
    </div>
    <!-- /why title -->
    <!-- why -->
    <div class="why s-why__why">
        <!-- why items -->
        <div class="row why__items item-items <?=($data['IMG']) ? 'item-items_help item-items_mt-lg' : 'item-items_line'?>">
            <?foreach ($data['TITLE_1'] as $key => $value):?>
                <!-- why item -->
                <div class="col-lg-4 col-md-6 col-12 item-item">
                    <div class="item-inner">
                        <?if($data['IMG']):?>
                            <div class="item-img">
                                <img class="js-lazy" data-src="<?=$data['IMG'][$key]?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                            </div>
                        <?endif;?>
                        <div class="item-text">
                            <h3 class="item-title h5">
                            <?=$value?>
                            </h3>
                            <div class="item-descr text-descr">
                            <p>
                            <?=$data['DESC_1'][$key]['TEXT']?>
                            </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /why item -->
            <?endforeach;?>
        </div>
        <!-- /why items -->
    </div>
    <!-- /why -->
    </div>
</section>
<!-- /why section -->