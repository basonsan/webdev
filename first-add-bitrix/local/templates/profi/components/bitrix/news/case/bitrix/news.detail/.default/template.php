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
$APPLICATION->SetPageProperty("title", $arResult['NAME']);
$APPLICATION->SetTitle($arResult['NAME']); 


?>
 <!-- main section -->
<section class="s-main section js-section" id="main">
  <!-- main -->
  <div class="container main main_reviews s-main__main">
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
              <a href="/about/" class="bread-crumbs__link text-link">
              О нас
              </a>
          </li>
          <li class="bread-crumbs__item">
              <a href="/case/" class="bread-crumbs__link text-link">
              Кейсы
              </a>
          </li>
          <li class="bread-crumbs__item">
              <div class="bread-crumbs__active">
              <?$APPLICATION->ShowTitle();?>
              </div>
          </li>
      </ul>
      <div class="section__title section__title_left main__title">
        <h1 class="section__title-title section__title-title_underline-none h2 text-black">
          <?=$arResult['NAME']?>
        </h1>
      </div>
    </div>
    <!-- /main content -->
    <div class="row section__content">
      <div class="col-lg-8 col-12 section__content-left">
        <div class="text-content text-descr_fz-16">
          <!-- gallery -->
          <div class="swiper-container2 item-items item-items_slider item-items_gallery js-swiper-gallery" style="margin-bottom:40px">
            <!-- swiper slider -->
            <div class="swiper-wrapper2 item-swiper">
                <?if($arResult["DETAIL_PICTURE"]['SRC']):?>
              <!-- swiper slide -->
              <div class="swiper-slide2 item-item">
                <div class="item-img img">
                    <img class="js-lazy js-object-fit" data-src="<?=$arResult["DETAIL_PICTURE"]['SRC']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                </div>
              </div>
              <!-- /swiper slide -->
              <?endif;?>
            </div>
            <!-- /swiper slider -->
            <!-- swiper controls -->
            <!-- <div class="swiper-controls item-controls">
              <div class="swiper-button-prev swiper-button-white">
                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7 11L1 6L7 1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-next swiper-button-white">
                <svg width="8" height="12" viewBox="0 0 8 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M1 11L7 6L1 1" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
            </div> -->
            <!-- swiper controls -->
          </div>
          <!-- /gallery -->
          <?=$arResult['DETAIL_TEXT']?>            
        </div>