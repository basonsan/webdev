<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>


<!-- main section -->
<section class="s-main s-main_sidebar section js-section" id="main">
    <? if($USER->IsAdmin()): ?>
        <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
    <!-- section img -->
    <div class="section__img section__img_right s-main__img  <?= ($data['TYPE_IMG'] == '5') ? 's-main__img_2' : ''  ?> <?= ($data['TYPE_IMG'] == '6') ? 's-main__img_3'  : '' ?> <?= ($data['TYPE_IMG'] == '22') ? 's-main__img_4'  : ''  ?> <?= ($data['TYPE_IMG'] == '25') ? 's-main__img_5' : ''  ?> <?= ($data['TYPE_IMG'] == '28') ? 's-main__img_6' : ''  ?> <?= ($data['TYPE_IMG'] == '32') ? 's-main__img_7' : ''  ?> <?= ($data['TYPE_IMG'] == '40') ? 's-main__img_13' : ''  ?>">
    <!-- <picture>
        <source data-srcset="./img/bg/main-img-4.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="> -->
        <img class="js-lazy" data-src="<?=$data['IMG_BG']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
    <!-- </picture> -->
        <?if($data['FIO']):?>
            <div class="section__img-text">
                <div class="section__img-text-bg">
                    <div class="section__img-position">
                        <?=$data['WORK']?>
                    </div>
                    <div class="section__img-name h5 text-title">
                        <?=$data['FIO']?>
                    </div>
                </div>
            </div>
        <?endif;?>
    </div>
    <!-- /section img -->
    <!-- main -->
    <div class="container main <?= ($data['TYPE_IMG'] == '5') ? 'main_2' : ''  ?> <?= ($data['TYPE_IMG'] == '6') ? 'main_3'  : '' ?> <?= ($data['TYPE_IMG'] == '22') ? 'main_4'  : ''  ?> <?= ($data['TYPE_IMG'] == '25') ? 'main_5' : ''  ?> <?= ($data['TYPE_IMG'] == '28') ? 'main_6' : ''  ?> <?= ($data['TYPE_IMG'] == '32') ? 'main_7' : ''  ?> <?= ($data['TYPE_IMG'] == '40') ? 'main_13' : ''  ?> s-main__main">
        <div class="header-height"></div>
        <!-- main content -->
        <div class="main__content">
            <ul class="bread-crumbs main__bread-crumbs">
            <li class="bread-crumbs__item">
                <a href="/" class="bread-crumbs__link text-link">
                Главная
                </a>
            </li>
            <!-- <li class="bread-crumbs__item">
                <a href="2.html" class="bread-crumbs__link text-link">
                Детям
                </a>
            </li> -->
            <li class="bread-crumbs__item">
                <div class="bread-crumbs__active">
                <?$APPLICATION->ShowTitle();?>
                </div>
            </li>
            </ul>
            <div class="main__logo <?= ($data['TYPE_LOGO'] == '24') ? 'main__logo_3' : ''  ?>">
            <!-- <picture>
                <source data-srcset="./img/main/logo-3.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="> -->
                <?if($data['LOGO_LINK']):?>
                <a href="<?=$data['LOGO_LINK']?>" target="_blank">
                    <img class="js-lazy" data-src="<?=$data['LOGO']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                </a>
                <?else:?>
                    <img class="js-lazy" data-src="<?=$data['LOGO']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                <?endif;?>
            <!-- </picture> -->
            </div>
            <div class="section__title section__title_left main__title">
            <h1 class="section__title-title section__title-title_underline-none h1">
                <?=$data['TITLE']['TEXT']?>
            </h1>
            <h3 class="section__title-subtitle h3">
            <?=$data['SUBTITLE']['TEXT']?>
            </h3>
            </div>

            <? if(!empty($data['LIST'])): ?>
                <ul class="main__list main__list_mt-lg <?= ($data['TYPE_LIST'] == '8') ? 'main__list_block' :'' ?>  text-list">
                    <? foreach ($data['LIST'] as $item): ?>
                        <li><?=$item?></li>
                    <? endforeach; ?>
                </ul>
            <? endif ?>
            <? if(!empty($data['BTN_TEXT'])): ?>
            <div class="main__btn text-btn">
                <a href="<?=$data['BTN_LINK']?>" class="btn btn_xl btn_shadow js-popup-open" data-form="<?=$data['BTN_TEXT']?>">
                    <?=$data['BTN_TEXT']?>
                </a>
            </div>
            <? endif ?>
        </div>
        <!-- /main content -->
    </div>
    <!-- /main -->
</section>
<!-- /main section -->

<div class="js-header-fixed"></div>