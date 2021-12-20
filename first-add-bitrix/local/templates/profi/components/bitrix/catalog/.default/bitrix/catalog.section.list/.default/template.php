<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
//var_dump($arResult);
?>
<div class="katalog-items items wrap">
    <div class="row">
        <? foreach ($arResult['SECTIONS'] as $section): ?>
        <div class="col-md-3 col-12">
            <div class="katalog wrap">
                <div class="row justify-content-between">
                    <div class="col-12">
                        <a href="<?=$section['SECTION_PAGE_URL']?>">    
                            <div class="katalog-imgs">
                                <div class="katalog-imgs__carousel js-carousel-katalog">
                                    <div>
                                        <div class="katalog-imgs__item">
                                            <div class="katalog-imgs__img">
                                                <img data-src="<?=$section['PICTURE']['SRC']?>" src="img/logo.png"
                                                    alt="<?=$section['NAME']?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 align-self-center">
                        <div class="katalog__text">
                            <h3 class="katalog__title h3 h3_fz35">
                                <?=$section['NAME']?>
                            </h3>

                            <div class="katalog__btn-wrap">
                                <a href="<?=$section['SECTION_PAGE_URL']?>" class="btn btn2">
        								<span>
        									<span>Подробнее</span>
        								</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <? endforeach; ?>
    </div>
</div>
