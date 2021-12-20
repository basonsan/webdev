<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>

<!-- courses section -->
<section class="s-courses section section_bg js-section" id="courses">
    <? if($USER->IsAdmin()): ?>
        <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
    <div class="container">
    <!-- courses title -->
    <div class="section__title s-courses__title">
        <h2 class="section__title-title h2">
        <b><?=$data['TITLE']?></b>
        </h2>
        <h3 class="section__title-subtitle h3">
            <?=$data['SUBTITLE']['TEXT']?>
        </h3>
    </div>
    <!-- /courses title -->
    <!-- courses -->
    <div class="courses s-courses__courses">
        <!-- courses items -->
        <div class="row row_m-30 courses__items item-items item-items_courses">
        <? foreach ($data['IMG_CURSES'] as $i => $item):?>
        <!-- courses item -->
        <div class="col-lg-4 col-sm-6 col-12 item-item">
            <div class="item-inner item-inner_bg-white item-inner_padding">
            <div class="item-img img img_contain">
                <!-- <picture>
                <source data-srcset="./img/courses/course-1.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="> -->
                <img class="js-lazy" data-src="<?=$data['IMG_CURSES'][$i]?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                <!-- </picture> -->
            </div>
            <div class="item-text">
                <h3 class="item-title h5">
                <?=$data['TITLE_CURSES'][$i]?>
                </h3>
                <div class="item-descr text-descr">
                <p>
                    <?=$data['DESC_CURSES'][$i]['TEXT']?>
                </p>
                </div>
            </div>
            </div>
        </div>
        <!-- /courses item -->
        <? endforeach; ?>

        </div>
        <!-- /courses items -->
    </div>
    <!-- /courses -->
    </div>
</section>
<!-- /courses section -->