<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>
<!-- programs section -->
<section class="s-programs section section_bg js-section" id="programs">
    <? if($USER->IsAdmin()): ?>
        <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
    <div class="container">
    <!-- programs title -->
    <div class="section__title section__title_mb-lg programs__title">
        <h2 class="section__title-title h2">
        Программа обучения
        </h2>
    </div>
    <!-- /programs title -->
    <!-- programs -->
    <div class="programs s-programs__programs">
        <!-- programs items -->
        <div class="accordion programs__items item-items js-accordion">
        <?foreach ($data['ELEMENTS'] as $key => $value) :?>
            
        <!-- accordion item -->
        <div class="accordion__item item-item js-accordion-item <?= ($key == 0) ? 'js-active' : ''?>" style="position:relative;"> 
            <? if($USER->IsAdmin()): ?>
                <a href="http://profi.klweb.ru/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=45&type=content&lang=ru&ID=<?=$value['ID']?>" class="fix-block fix-block-content2" target="_blank" style="top:0;">Редакт</a>
            <?endif;?>
            <div class="accordion__head js-accordion-head">
            <h3 class="accordion__title h5">
                <?=$value['NAME']?>
            </h3>
            <div class="accordion__time">
                <?=$value['TIME']?>
            </div>
            </div>
            <div class="accordion__descr text-content js-accordion-descr">
            <p>
                <?=$value['DESC']['TEXT']?>
            </p>
            <ul>
                <?foreach ($value['LIST'] as $key => $list):?>
                <li><?=$list?> </li>
                <?endforeach;?>
            </ul>
            </div>
        </div>
        <!-- /accordion item -->
        <?endforeach;?>
        </div>
        <!-- /programs items -->
    </div>
    <!-- /programs -->
    </div>
</section>
<!-- /programs section -->