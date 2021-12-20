<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>

<!-- main section -->
<section class="s-main section js-section" id="main">
    <? if($USER->IsAdmin()): ?>
      <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
    <!-- main -->
    <div class="container main s-main__main">
    <div class="header-height"></div>
    <!-- main content -->
    <div class="main__content">
        <ul class="bread-crumbs main__bread-crumbs">
        <li class="bread-crumbs__item">
            <a href="/" class="bread-crumbs__link text-link">
            Профи центр
            </a>
        </li>
        <li class="bread-crumbs__item">
            <div class="bread-crumbs__active">
            Реквизиты
            </div>
        </li>
        </ul>
        <div class="section__title section__title_left main__title">
        <h1 class="section__title-title section__title-title_underline-none h1">
            <b>Реквизиты</b>
        </h1>
        </div>
    </div>
    <!-- /main content -->
    <!-- main requisites -->
    <div class="row row_m-30 main__requisites requisites">
        <div class="col-lg-5 col-12 requisites__img">
        <div class="img requisites__img-img">
            <img class="js-lazy js-object-fit" data-src="<?=$data['IMG']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
        </div>
        </div>
        <div class="col-lg-7 col-12 requisites__content">
        <div class="requisites__content-items">
            <div class="requisites__content-item requisites__content-item_w-100">
            <h3 class="requisites__title h3">
                Общая информация
            </h3>
            <ul class="requisites__list requisites__list_1 text-list-line text-list-line_row">
                <?foreach ($data['TITLE_1'] as $key => $value):?>
                    <li>
                        <b><?=$data['TITLE_1'][$key]?></b>
                        <span>
                            <?=$data['DESC_1'][$key]?>
                        </span>
                    </li>
                <?endforeach;?>
                <li>
                <b>Контакты</b>
                <span>
                    <ul class="text-gray">
                    <li><b><a href="tel:<?=$data['TEL']?>" class="text-link text-link_underline text-accent"><?=$data['TEL']?></a></b></li>
                    <?foreach ($data['TEL_D'] as $key => $value): ?>
                        <li><?=$value?> </li>
                    <?endforeach;?>
                    <li><b><a href="mailto:<?=$data['EMAILS']?>" class="text-link text-link_underline text-accent"><?=$data['EMAILS']?></a></b></li>
                    </ul>
                </span>
                </li>
            </ul>
            </div>
            <div class="requisites__content-item">
            <h3 class="requisites__title h3">
                Коды статистики
            </h3>
            <ul class="requisites__list requisites__list_2 text-list-line text-list-line_row">
                <?foreach ($data['TITLE_2'] as $key => $value):?>
                <li>
                <b><?=$data['TITLE_2'][$key]?></b>
                <span>
                <?=$data['DESC_2'][$key]?>
                </span>
                </li>
                <?endforeach;?>
            </ul>
            </div>
            <div class="requisites__content-item">
            <h3 class="requisites__title h3">
                Банковские реквизиты
            </h3>
            <ul class="requisites__list requisites__list_3 text-list-line text-list-line_line-none">
                <?foreach ($data['TITLE_3'] as $key => $value):?>
                <li>
                <b><?=$data['TITLE_3'][$key]?></b>
                <span>
                <?=$data['DESC_3'][$key]?>
                </span>
                </li>
                <?endforeach;?>
            </ul>
            </div>
        </div>
        </div>
    </div>
    <!-- /main requisites -->
    </div>
    <!-- /main -->
</section>
<!-- /main section -->