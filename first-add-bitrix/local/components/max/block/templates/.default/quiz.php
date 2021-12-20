<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>

    <!-- quiz section -->
    <section class="s-quiz section section_pt-0 section_pb-0 js-section" id="quiz">
    <? if($USER->IsAdmin()): ?>
    <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
      <div class="container">
        <!-- quiz -->
        <div class="quiz-offer s-quiz__quiz-offer section block-bg block-bg_green">
          <div class="section__title section__title_left quiz-offer__title">
            <h2 class="section__title-title section__title-title_underline-none h2 text-white">
                <?=$data['TITLE']['TEXT']?>
            </h2>
          </div>
          <div class="quiz-offer__btn text-btn">
            <div class="text-btn__text">
                <?=$data['DESC']?>
            </div>
            <a href="<?=$data['LINK_BTN']?>" class="btn btn_border btn_white text-white js-popup-open">
                <?=$data['TITLE_BTN']?>
            </a>
          </div>
          <div class="quiz-offer__img">
            <!-- <picture>
              <source data-srcset="./img/bg/quiz-img.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw=="> -->
              <img class="js-lazy js-object-fit" data-src="<?=$data['IMG']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
            <!-- </picture> -->
          </div>
        </div>
        <!-- /quiz -->
      </div>
    </section>
    <!-- /quiz section -->

        