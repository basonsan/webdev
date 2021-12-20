<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>

<aside class="col-lg-4 col-12 section__content-right">
    <? if($USER->IsAdmin()): ?>
        <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank"  style="top: 22px;right: -51px;left: auto;">Изменить баннер</a>
    <? endif; ?>
    <div class="category section__content-block">
        <?if($data['TEG']):?>
        <h4 class="category__title h6">
            <span>Категории событий:</span>
        </h4>
        <ul class="category__list">
            <? foreach ($data['TEG'] as $key => $item): ?>
                <li><a href="/news/?filter=<?=$item?>" class="text-link"><?=$item?></a></li>
            <?endforeach;?>
        </ul>
        <?endif?>
    </div>
    <div class="offer section__content-block">
        <div class="offer__title section__title section__title_left">
            <h2 class="section__title-title h3">
                <?=$data['TITLE']?>
            </h2>
        </div>
        <div class="offer__descr text-descr text-descr_fz-16">
            <p>
            <?=$data['SUBTITLE']['TEXT']?>
            </p>
        </div>
        <div class="offer__logo img img_contain">
            <!-- <picture>
                <source data-srcset="/img/partners/partner-7.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="> -->
                <img class="js-lazy" data-src="<?=$data['LOGO']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
            <!-- </picture> -->
        </div>
        <div class="offer__img">
            <!-- <picture>
                <source data-srcset="/img/offer/offer-1.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="> -->
                <img class="js-lazy" data-src="<?=$data['BG']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
            <!-- </picture> -->
        </div>
        <div class="offer__btn text-btn">
            <a href="<?=$data['BTN_LINK']?>" class="btn btn_gray btn_border" target="_blank">
                <?=$data['BTN']?>
            </a>
        </div>
    </div>
</aside>