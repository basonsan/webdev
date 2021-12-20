<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>


 <!-- steps section -->
 <section class="s-steps section  section-bg js-section" id="steps">
    <? if($USER->IsAdmin()): ?>
      <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
    <div class="container">
      <!-- steps title -->
      <div class="section__title section__title_mb-lg s-steps__title">
        <h2 class="section__title-title h2">
          <?=$data['TITLE']?>
        </h2>
      </div>
      <!-- /steps title -->
      <!-- steps -->
      <div class="steps s-steps__steps">
        <!-- steps items -->
        <div class="row steps__items steps-items item-items item-items_line justify-content-center">
          <? foreach ($data['TITILE_BLOCK'] as $key => $item): ?>
            <!-- steps item -->
            <div class="col-lg-4 col-md-6 col-12 item-item">
              <div class="item-inner">
                <?$test = $APPLICATION->GetTitle() ?>
                <?if($test != 'Мама может!'):?>
                <div class="item-number text-accent">
                  <?=$key + 1?>
                </div>
                <?endif;?>
                <h3 class="item-title item-title_bold h6 text-accent">
                  <?=$data['TITILE_BLOCK'][$key]?>
                </h3>
                <div class="item-descr text-descr text-descr_mt-8">
                  <p>
                    <?=$data['DESC_BLOCK'][$key]['TEXT']?>
                  </p>
                </div>
              </div>
            </div>
            <!-- /steps item -->
          <? endforeach; ?>

        </div>
        <!-- /steps items -->
      </div>
      <!-- /steps -->
    </div>
  </section>
  <!-- /steps section -->