<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>

<!-- reviews section -->
<section class="s-reviews section section-bg js-section <?= ($data['TYPE'] == 39) ? 's-main' : ''?>" id="reviews">
    <? if($USER->IsAdmin()): ?>
        <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
        <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=30&type=content&lang=ru&ID=0' class="fix-block" target="_blank" style='top:250px'>Добавить отзыв</a>
    <? endif; ?>
    <div class="container">
    <?if($data['TYPE'] == 39):?>
    <div class="header-height"></div>
    <ul class="bread-crumbs main__bread-crumbs">
        <li class="bread-crumbs__item">
            <a href="/" class="bread-crumbs__link text-link">
            Главная
            </a>
        </li>
        <li class="bread-crumbs__item">
            <div class="bread-crumbs__active">
            Отзывы
            </div>
        </li>
    </ul>
    <!-- reviews title -->
    <div class="section__title section__title_left main__title">
        <h1 class="section__title-title section__title-title_underline-none h1">
            <b><?=$data['TITLE']?></b>
        </h1>
    </div>
    <!-- /reviews title -->
    <?else:?>
    <!-- reviews title -->
    <div class="section__title section__title_mb-lg s-reviews__title">
        <h2 class="section__title-title h2 text-red">
        <?=$data['TITLE']?>
        </h2>
    </div>
    <!-- /reviews title -->
    <?endif;?>
    <!-- reviews -->
    <div class="reviews s-reviews__reviews js-more" data-more-xl="3,3" data-more-lg="3,3" data-more-md="2,2" data-more-sm="2,2" data-more-xs="3,3">
        
        
        <!-- reviews-items -->
        <div class="row row_m-30 reviews__items item-items">
        <? foreach ($data['ELEMENTS'] as $item): ?>
                <? if ($item['LINK']): ?>
                    <!-- reviews item -->
                    <div class="col-lg-4 col-md-6 col-12 item-item js-more-item"  style='position:relative;'>
                        <? if($USER->IsAdmin()): ?>
                        <a href="/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=30&type=content&lang=ru&ID=<?=$item['ID']?>" class="fix-block fix-block-content" target="_blank">Изменить отзыв</a>
                        <? endif;?>
                        <div class="item-inner item-inner_bg-pink">
                        <div class="item-img item-img_video video video_img">
                            <a href="#popup-video" data-video="<?=$item['LINK']?>" class="video__link js-popup-open">
                            <div class="video__img img">
                                <img class="js-lazy js-object-fit" data-src="<?=$item['IMG']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                <div class="video__img-center">
                                <i class="video__play"></i>
                                </div>
                            </div>
                            </a>
                        </div>

                        <div class="item-text item-text_padding-2 text-author">
                            <?if($item['AVATAR']):?>
                                <div class="text-author__img">
                                    <img class="js-lazy" data-src="<?=$item['AVATAR']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                </div>
                            <?endif;?>
                            <div class="text-author__text">
                            <h3 class="text-author__title h5">
                                <?=$item['FIO']?>
                            </h3>
                            <?if($item['CURSE']):?>
                                <div class="text-author__descr text-descr">
                                    <span><?= ($item['POL'] == 46) ? 'Прошел курсы' : 'Прошла курсы:'?></span>
                                    <ul>
                                    <?foreach ($item['CURSE'] as $key => $value): ?>
                                        <li><?=$value?></li>
                                    <?endforeach;?>
                                    </ul>
                                </div>
                            <?endif;?>
                            </div>
                        </div>
                        </div>
                    </div>
                    <!-- /reviews item -->
                <? else: ?>
                    <? if ($item['IMG']): ?>
                        <!-- reviews item -->
                        <div class="col-lg-4 col-md-6 col-12 item-item js-more-item"  style='position:relative;'>
                            <? if($USER->IsAdmin()): ?>
                            <a href="/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=30&type=content&lang=ru&ID=<?=$item['ID']?>" class="fix-block fix-block-content" target="_blank">Изменить отзыв</a>
                            <? endif;?>
                            <div class="item-inner item-inner_bg-pink">
                            <div class="item-img img">
                                <img class="js-lazy" data-src="<?=$item['IMG']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                            </div>
                            <div class="item-text item-text_padding-2 text-author">
                                <?if($item['AVATAR']):?>
                                    <div class="text-author__img">
                                        <img class="js-lazy" data-src="<?=$item['AVATAR']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                    </div>
                                <?endif;?>
                                <div class="text-author__text">
                                <h3 class="text-author__title h5">
                                    <?=$item['FIO']?>
                                </h3>
                                <?if($item['CURSE']):?>
                                    <div class="text-author__descr text-descr">
                                        <span><?= ($item['POL'] == 46) ? 'Прошел курсы' : 'Прошла курсы:'?></span>
                                        <ul>
                                            <?foreach ($item['CURSE'] as $key => $value): ?>
                                                <li><?=$value?></li>
                                            <?endforeach;?>
                                        </ul>
                                    </div>
                                <?endif;?>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- /reviews item -->
                    <? else: ?>
                        <!-- reviews item -->
                        <div class="col-lg-4 col-md-6 col-12 item-item js-more-item"  style='position:relative;'>
                            <? if($USER->IsAdmin()): ?>
                            <a href="/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=30&type=content&lang=ru&ID=<?=$item['ID']?>" class="fix-block fix-block-content" target="_blank">Изменить отзыв</a>
                            <? endif;?>
                            <div class="item-inner item-inner_bg-pink">
                            <div class="item-img item-img_text item-text item-text_padding-2">
                                <p>
                                    <?=$item['DESC']['TEXT']?>
                                </p>
                            </div>

                            <div class="item-text item-text_padding-2 text-author">
                                <?if($item['AVATAR']):?>
                                    <div class="text-author__img">
                                        <img class="js-lazy" data-src="<?=$item['AVATAR']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                    </div>
                                <?endif;?>

                                <div class="text-author__text">
                                <h3 class="text-author__title h5">
                                    <?=$item['FIO']?>
                                </h3>
                                <?if($item['CURSE']):?>
                                <div class="text-author__descr text-descr">
                                    <span><?= ($item['POL'] == 46) ? 'Прошел курсы' : 'Прошла курсы:'?></span>
                                    <ul>
                                        <?foreach ($item['CURSE'] as $key => $value): ?>
                                            <li><?=$value?></li>
                                        <?endforeach;?>
                                    </ul>
                                </div>
                                <?endif;?>
                                </div>
                            </div>
                            </div>
                        </div>
                        <!-- /reviews item -->
                    <? endif; ?>
                <? endif; ?>
        <? endforeach; ?>
        </div>
        <!-- /reviews-items -->
        <!-- reviews btn -->
        <div class="reviews__btn text-btn text-btn_center text-btn_mt-lg js-more-btn-toggle">
        <a href="javascript:void(0);" class="btn btn_gray btn_border js-more-btn">
            Смотреть ещё
        </a>
        </div>
        <!-- /reviews btn -->
    </div>
    <!-- /reviews -->
    </div>
</section>
<!-- /reviews section -->