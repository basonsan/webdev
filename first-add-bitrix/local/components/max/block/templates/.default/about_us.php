<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>
<!-- about-us section -->
<section class="s-about-us section section_bg js-section" id="about-us">
    <? if($USER->IsAdmin()): ?>
        <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
    <div class="container">
    <!-- about-us title -->
    <div class="section__title  section__title_left s-about-us__title">
        <h2 class="section__title-title h2 text-red">
        О Профи-центре
        </h2>
    </div>
    <!-- /about-us title -->
    <!-- about-us -->
    <div class="about-us s-about-us__about-us">
        <!-- about us swiper -->
        <div class="swiper-container swiper-container_arrow-top item-items item-items_slider js-swiper-about-us">
        <!-- swiper slider -->
        <div class="swiper-wrapper item-swiper">
            <?foreach ($data['TITLE'] as $key => $value):?>
            <!-- swiper slide --> 
            <div class="swiper-slide item-item">
                <div class="item-icon item-icon_h-70">
                    <img src="<?=$data['IMG'][$key]?>" alt="<?=$data['TITLE'][$key]?>">
                </div>
                <h3 class="item-title h5">
                <?=$data['TITLE'][$key]?>
                </h3>
                <div class="item-descr text-descr">
                    <p>
                        <?=$data['DESC'][$key]['TEXT']?>
                    </p>
                </div>
            </div>
            <!-- /swiper slide -->
            <?endforeach;?>
        </div>
        <!-- /swiper slider -->
        <!-- swiper controls -->
        <div class="swiper-controls swiper-controls_top item-controls">
            <div class="swiper-button-prev swiper-button-blue">
            <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 11L1 6L7 1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            </div>
            <div class="swiper-pagination d-none"></div>
            <div class="swiper-button-next swiper-button-blue">
            <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 11L7 6L1 1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            </div>
        </div>
        <!-- swiper controls -->
        </div>
        <!-- /about us swiper -->
    </div>
    <!-- /about-us -->
    </div>
</section>
<!-- /about-us section -->