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
    <!-- section img -->
    <div class="section__img section__img_right s-main__img <?= ($data['TYPE']==34) ? 's-main__img_9' : ''?><?= ($data['TYPE']==35) ? 's-main__img_10' : ''?><?= ($data['TYPE']==36) ? 's-main__img_11' : ''?><?= ($data['TYPE']==37) ? 's-main__img_12' : ''?>">
        <img class="js-lazy" data-src="<?=$data['IMG']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
    </div>
    <!-- /section img -->
    <div class="header-height"></div>
    <div class="container">
    <!-- main -->
    <div class="main <?= ($data['TYPE']==34) ? 'main_9' : ''?><?= ($data['TYPE']==35) ? 'main_10' : ''?><?= ($data['TYPE']==36) ? 'main_11' : ''?><?= ($data['TYPE']==37) ? 'main_12' : ''?> s-main__main">
        <!-- bread crumbs -->
        <ul class="bread-crumbs main__bread-crumbs">
        <li class="bread-crumbs__item">
            <a href="/" class="bread-crumbs__link text-link">
            Главная
            </a>
        </li>
        <li class="bread-crumbs__item">
            <div class="bread-crumbs__active">
            <?$APPLICATION->ShowTitle();?>
            </div>
        </li>
        </ul>
        <!-- /bread crumbs -->
        <!-- main content -->
        <div class="main__content">
        <div class="section__title section__title_left main__title">
            <h1 class="section__title-title section__title-title_underline-none h1">
            <b><?=$data['TITLE']?></b>
            </h1>
            <div class="section__title-descr">
            <?=$data['DESC']['TEXT']?>
            </div>
        </div>
        </div>
        <!-- /main content -->
    </div>
    <!-- /main -->
    </div>
</section>
<!-- /main section -->