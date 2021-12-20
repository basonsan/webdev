<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
$cnt = count($data['ELEMENTS']);
$cnt2 = count($data['ELEMENTS'])/2;
?>


<? if($cnt):?>
<? $cols = array_chunk($data['ELEMENTS'],$cnt2); ?>



<!-- faq section -->
<section class="s-faq section  section-bg js-section" id="faq">
    <? if($USER->IsAdmin()): ?>
        <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
    <div class="container">
    <!-- faq title -->
    <div class="section__title s-faq__title">
        <h2 class="section__title-title h2 text-red">
        <?=$data['TITLE']['TEXT']?>
        </h2>
    </div>
    <!-- /faq title -->
    <!-- faq -->
    <div class="faq s-faq__faq js-more" data-more-xl="6,99" data-more-lg="6,99" data-more-md="3,99" data-more-sm="3,99" data-more-xs="3,99">
        <!-- faq items -->
        <div class="row row_m-30 accordion faq__items item-items js-accordion">
                <? foreach ($cols as $col): ?>
                    <div class="col-lg-6 col-12 js-more-col">
                        <? foreach ($col as $item): ?>
                            <!-- accordion item -->
                            <div class="accordion__item item-item js-more-item js-accordion-item" style='position:relative;'>
                            <? if($USER->IsAdmin()): ?>
                                <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=12&type=content&lang=ru&ID=<?=$item['ID']?>' class="fix-block" target="_blank" style='top:0;left:-50px'>Редакт</a>
                            <? endif; ?>
                                <div class="accordion__head js-accordion-head">
                                    <h3 class="accordion__title h6">
                                    <?=$item['PREVIEW_TEXT']?>
                                    </h3>
                                </div>
                                <div class="accordion__descr text-descr js-accordion-descr">
                                    <p>
                                    <?=$item['DETAIL_TEXT']?>
                                    </p>
                                </div>
                            </div>
                        <? endforeach; ?>
                </div>
                <? endforeach; ?>
            
            <div class="col-lg-6 col-12 js-more-col">
                
                
                
            </div>
        </div>
        <!-- /faq items -->
        <!-- faq btn -->
        <div class="faq__btn text-btn text-btn_center text-btn_mt-lg text-btn_btns">
        <a href="javascript:void(0);" class="btn btn_xl btn_gray btn_border js-more-btn js-more-btn-toggle">
            Смотреть ещё
        </a>
        <a href="" class="btn btn_xl btn_shadow js-popup-open js-click-chat2">
            Задать вопрос<i class="text-icon text-icon_right">
            <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.5 14.1667H14.875" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M11.6875 2.47916C11.9693 2.19737 12.3515 2.03906 12.75 2.03906C12.9473 2.03906 13.1427 2.07793 13.325 2.15344C13.5073 2.22895 13.673 2.33963 13.8125 2.47916C13.952 2.61869 14.0627 2.78434 14.1382 2.96664C14.2137 3.14895 14.2526 3.34434 14.2526 3.54166C14.2526 3.73899 14.2137 3.93438 14.1382 4.11669C14.0627 4.29899 13.952 4.46463 13.8125 4.60416L4.95833 13.4583L2.125 14.1667L2.83333 11.3333L11.6875 2.47916Z" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            </i>
        </a>
        </div>
        <!-- /faq btn -->
    </div>
    <!-- /faq -->
    </div> 
</section>
<!-- /faq section -->


<? endif; ?>
