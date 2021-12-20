<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
$lastEl = count($data['ELEMENTS'])-1;
?>
 <!-- main section -->
 <section class="s-main section js-section" id="main">
    <!-- main -->
    <div class="container main s-main__main">
    <div class="header-height"></div>
    <!-- main content -->
    <div class="main__content">
        <ul class="bread-crumbs main__bread-crumbs">
        <li class="bread-crumbs__item">
            <a href="/" class="bread-crumbs__link text-link">
            Главная
            </a>
        </li>
        <li class="bread-crumbs__item">
            <div class="bread-crumbs__active">
            СМИ о нас
            </div>
        </li>
        </ul>
    </div>
    <!-- /main content -->
    <!-- main items -->
    <div class="main__items item-items item-items_mt-lg item-items_news">
        <div class="item-item">
        <div class="item-img item-img_news img">
            <img class="js-lazy js-object-fit" data-src="<?=$data['ELEMENTS'][0]['IMG']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
        </div>
        <div class="item-text">
            <h3 class="item-title item-title_font h3">
            <?=$data['ELEMENTS'][0]['NAME']?>
            </h3>
            <div class="item-descr text-descr">
            <p>
                <?=$data['ELEMENTS'][0]['DESC']['TEXT']?>
            </p>
            </div>
            <div class="item-btn text-btn">
            <a href="<?=$data['ELEMENTS'][0]['LINK']?>" class="btn btn_border btn_gray" data-form="Подробнее">
                Подробнее
            </a>
            </div>
        </div>
        </div>
    </div>
    <!-- /main items -->
    </div>
    <!-- /main -->
</section>
<!-- /main section -->

<!-- news section -->
<section class="s-news section section_bg js-section" id="news">
    <? if($USER->IsAdmin()): ?>
        <a href="/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=57&type=content&lang=ru&ID=0" class="fix-block fix-block-content" target="_blank">добавить новость</a>
    <? endif; ?>
    <div class="container">
    <!-- news -->
    <div class="news s-news__news">
        <!-- news items -->
        <div class="row news__items item-items">
            <div class="row justify-content-center results__items item-items">
                <?foreach ($data['ELEMENTS'] as $key => $value): ?>
                    <?if($key != 0):?>
                    <!-- news item -->
                    <div class="col-lg-4 col-sm-6 col-12 item-item" style='position:relative;'>
                        <? if($USER->IsAdmin()): ?>
                            <a href="/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=57&type=content&lang=ru&ID=<?=$value['ID']?>" class="fix-block fix-block-content" target="_blank">Изменить новость</a>
                        <? endif; ?>
                            
                        <div class="item-inner item-inner_border">
                            <div class="img item-img item-img_h-240">
                                <img class="js-lazy js-object-fit" data-src="<?=$value['IMG']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                            </div>
                            <div class="item-text item-text_padding">
                                <h3 class="item-title h5">

                                <?=$value['NAME']?>
                                </h3>
                                <div class="item-descr text-descr">
                                    <p>
                                        <?=$value['DESC']['TEXT']?>
                                    </p>
                                </div>
                                </div>
                                <div class="item-btn item-btn_padding">
                                    <a href="<?=$value['LINK']?>" class="btn btn_border btn_gray" target="_blank">
                                        Подробнее
                                    </a>
                            </div>
                        </div>
                    </div>
                    <!-- /news item -->
                    <?endif;?>
                <?endforeach;?>
            </div>
        </div>
        <!-- /news items -->
    </div>
    <!-- /news -->
    </div>
</section>
<!-- /news section -->