<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>
 
 <!-- subjects section -->
 <section class="s-subjects section section_bg js-section" id="subjects">
    <? if($USER->IsAdmin()): ?>
        <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
    
    <div class="container">
    <!-- subjects title -->
    <div class="section__title section__title_mb-lg s-subjects__title">
        <h2 class="section__title-title h2 text-red">
            <?=$data['TITLE']?>
        </h2>
    </div>
    <!-- /subjects title -->
    <!-- subjects -->
    <div class="subjects s-subjects__subjects js-more" data-more-xl="8,4" data-more-lg="8,4" data-more-md="2,2" data-more-sm="2,2" data-more-xs="3,3">
        <!-- subjects items -->
        <div class="row justify-content-center subjects__items item-items item-items_help">
        <?if($data['WHO']==26) :?>
            <? foreach ($data['ELEMENTS'] as $item): ?> 
            
            <!-- subjects item -->
            <div class="col-xl-3 col-md-4 col-sm-6 col-12 item-item js-more-item">
                <a href="<?= (!$item["LINK"]) ? '/kviz1/'  :  $item["LINK"].'/'  ?>" class="item-inner item-inner_border item-inner_border-2 <?= ($item['CODE'] == '') ? ''  :  ''  ?>" data-form="Записаться на предмет <?=$item['TITLE']?>">
                <div class="item-img">
                    <!-- <picture> -->
                    <!-- <source data-srcset="./img/subjects/subject-13.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="> -->
                    <img class="js-lazy" data-src="<?=$item['IMG']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                    <!-- </picture> -->
                </div>
                <div class="item-text">
                    <h3 class="item-title h6 h6_fz-14">
                        <?=$item['TITLE']?>
                        <?if($item['DESC']):?>
                        <span class="text-hint">
                        <span class="text-hint__icon">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7.5 0.375C3.56641 0.375 0.375 3.56641 0.375 7.5C0.375 11.4336 3.56641 14.625 7.5 14.625C11.4336 14.625 14.625 11.4336 14.625 7.5C14.625 3.56641 11.4336 0.375 7.5 0.375ZM7.88742 11.582H6.76635C6.74112 11.5819 6.71695 11.5718 6.69915 11.554C6.68134 11.5361 6.67135 11.5119 6.67135 11.4867V10.366C6.67135 10.3407 6.68134 10.3165 6.69915 10.2986C6.71695 10.2808 6.74112 10.2707 6.76635 10.2706H7.88742C7.91265 10.2707 7.93681 10.2808 7.95462 10.2986C7.97242 10.3165 7.98242 10.3407 7.98242 10.366V11.4867C7.98242 11.5119 7.97242 11.5361 7.95462 11.554C7.93681 11.5718 7.91265 11.5819 7.88742 11.582ZM8.51828 7.9082C7.91674 8.31195 7.83398 8.68193 7.83398 9.02148V9.42969C7.83398 9.45921 7.82225 9.48753 7.80138 9.50841C7.7805 9.52929 7.75218 9.54102 7.72266 9.54102H6.90625C6.87672 9.54102 6.84841 9.52929 6.82753 9.50841C6.80665 9.48753 6.79492 9.45921 6.79492 9.42969V9.02148C6.79492 8.20842 7.16898 7.56197 7.93863 7.04504C8.6541 6.56484 9.05859 6.26055 9.05859 5.59146C9.05859 5.1365 8.79883 4.79102 8.26111 4.53533C8.13457 4.47521 7.85291 4.41658 7.50631 4.42066C7.07139 4.42623 6.73369 4.53014 6.47355 4.73943C5.98297 5.13428 5.94141 5.56437 5.94141 5.57031C5.92103 5.69646 5.91061 5.82401 5.91023 5.9518C5.91023 5.98132 5.89851 6.00964 5.87763 6.03052C5.85675 6.0514 5.82843 6.06312 5.79891 6.06312H5.01033C4.9827 6.06327 4.95599 6.05314 4.93541 6.03469C4.91484 6.01623 4.90186 5.99079 4.899 5.9633C4.88564 5.81511 4.88676 5.66596 4.90234 5.51799C4.91051 5.42781 4.96914 4.61549 5.82154 3.92971C6.26352 3.5742 6.82572 3.38939 7.49147 3.38123C7.96275 3.37566 8.40547 3.45545 8.70568 3.59721C9.6041 4.02434 10.0977 4.73275 10.0977 5.59146C10.0977 6.84688 9.25861 7.41057 8.51828 7.9082Z"></path>
                            </svg>
                        </span>
                        <span class="text-hint__hover">
                            (английский, немецкий, испанский, французский, китайскa
                        </span>
                        </span>
                        <?endif;?>
                    </h3>
                    <div class="item-link">
                    <div class="text-link text-link_border text-accent">
                        Записаться
                    </div>
                    </div>
                </div>
                </a>
            </div>
            <!-- /subjects item -->
            <?endforeach;?>
        <?endif;?>


        <?if($data['WHO']==27) :?>
            <? foreach ($data['ELEMENTS2'] as $item): ?> 
            
            <!-- subjects item -->
            <div class="col-xl-3 col-md-4 col-sm-6 col-12 item-item js-more-item ">
                <a href="<?= (!$item["LINK"]) ? '/kviz1/'  :  $item["LINK"].'/'  ?>" class="item-inner item-inner_border item-inner_border-2 <?= ($item['CODE'] == '') ? ''  :  ''  ?>" data-form="Записаться на предмет <?=$item['TITLE']?>">
                <div class="item-img">
                    <!-- <picture> -->
                    <!-- <source data-srcset="./img/subjects/subject-13.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="> -->
                    <img class="js-lazy" data-src="<?=$item['IMG']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                    <!-- </picture> -->
                </div>
                <div class="item-text">
                    <h3 class="item-title h6 h6_fz-14">
                        <?=$item['TITLE']?>
                        
                    </h3>
                    <div class="item-link">
                    <div class="text-link text-link_border text-accent">
                        Записаться
                    </div>
                    </div>
                </div>
                </a>
            </div>
            <!-- /subjects item -->
            <?endforeach;?>
        <?endif;?>
        </div>
        <!-- /subjects items -->
        <!-- subjects btn -->
        <div class="subjects__btn text-btn text-btn_center text-btn_mt-lg js-more-btn-toggle">
        <button class="btn btn_gray btn_border js-more-btn">
            Смотреть ещё
        </button>
        </div>
        <!-- /subjects btn -->
    </div>
    <!-- /subjects -->
    </div>
</section>
<!-- /subjects section -->