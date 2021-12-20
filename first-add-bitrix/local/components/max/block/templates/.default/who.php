<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>

<!-- who section -->
<section class="s-who section section-bg js-section" id="who">
    <? if($USER->IsAdmin()): ?>
      <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
  <div class="container">
    <!-- who title -->
    <div class="section__title section__title_mb-lg s-who__title">
      <h2 class="section__title-title h2">
        <?=$data['TITLE']?>
      </h2>
    </div>
    <!-- /who title -->
    <!-- who -->
    <div class="who s-who__who">
      <!-- who items -->
      <div class="row who__items item-items item-items_line justify-content-center">
        <? foreach ($data['SUBTITLE'] as $key => $item): ?>
        <!-- who item -->
        <div class="col-lg-4 col-sm-6 col-12 item-item">
          <div class="item-inner">
            <h3 class="item-title h5">
              <?=$data['SUBTITLE'][$key]?>
            </h3>
            <div class="item-descr text-descr">
              <p>
                <?=$data['DESC'][$key]['TEXT']?>
              </p>
            </div>
          </div>
        </div>
        <!-- /who item -->
        <?endforeach;?>
      </div>
      <!-- /who items -->
    </div>
    <!-- /who -->
  </div>
</section>
<!-- /who section -->