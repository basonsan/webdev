<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
$cnt = count($data['TEAM']);
?>


<?$test = $APPLICATION->GetTitle() ?>

<!-- team section -->
<section class="s-team section section_bg js-section" id="team">
    <? if($USER->IsAdmin()): ?>
        <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
        <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=8&type=content&lang=ru&ID=0&find_section_section=0&IBLOCK_SECTION_ID=0' class="fix-block" target="_blank" style="top: 250px;">Добавить человека</a>
    <? endif; ?>
    <div class="container">
    <!-- team title -->
    <div class="section__title s-team__title">
        <a href='/team/'>
            <h2 class="section__title-title h2 text-red">
                Наша команда
            </h2>
        </a>
    </div>
    <!-- /team title -->
    <!-- team -->
    <div class="team s-team__team <?=($data['MORE'] == '47') ? '' : 'js-more'?>" data-more-xl="3,3" data-more-lg="3,3" data-more-md="2,2" data-more-sm="2,2" data-more-xs="3,3">
        <!-- team items -->
        <div class="row team__items item-items item-items_line">
        <? foreach ($data['TEAM'] as $item): ?>
            <!-- team item -->
            <div class="col-lg-4 col-sm-6 col-12 item-item js-more-item">
                <a href="/team/<?=$item['CODE']?>/">
                    <div class="item-inner item-inner_center">
                        <div class="item-img item-img_team">
                            <img class="js-lazy" data-src="<?=$item['PREVIEW_PICTURE']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                            <div class="img-hover">
                                <div class="img-hover__text">
                                Подробнее
                                </div>
                            </div>
                        </div>
                        <div class="item-text">
                            <div class="item-title item-title_line h5">
                                <?=$item['NAME']?>
                            </div>
                            <div class="item-descr text-descr">
                            <p>
                                <?=$item['PREVIEW_TEXT']?>
                            </p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <!-- /team item -->
        <? endforeach; ?>
        </div>
        <!-- /team items -->

        <?if($data['MORE'] != '47'):?>
        <!-- team btn -->
        <div class="team__btn text-btn text-btn_center text-btn_mt-lg js-more-btn-toggle">
        <button class="btn btn_gray btn_border js-more-btn">
            Смотреть ещё
        </button>
        </div>
        <!-- /team btn -->
        <?endif;?>
    </div>
    <!-- /team -->
    </div>
</section>
<!-- /team section -->