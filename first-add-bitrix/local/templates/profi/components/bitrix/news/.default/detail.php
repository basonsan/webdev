<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
?>


<?
$APPLICATION->IncludeComponent('max:page', '', [
    'PAGE' => 'menu2',
]);
?>



    <? 
    $ElementID = $APPLICATION->IncludeComponent(
    "bitrix:news.detail",
    "",
    [
        "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
        "DISPLAY_NAME" => $arParams["DISPLAY_NAME"],
        "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
        "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
        "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
        "FIELD_CODE" => $arParams["DETAIL_FIELD_CODE"],
        "PROPERTY_CODE" => $arParams["DETAIL_PROPERTY_CODE"],
        "DETAIL_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["detail"],
        "SECTION_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["section"],
        "META_KEYWORDS" => $arParams["META_KEYWORDS"],
        "META_DESCRIPTION" => $arParams["META_DESCRIPTION"],
        "BROWSER_TITLE" => $arParams["BROWSER_TITLE"],
        "SET_CANONICAL_URL" => $arParams["DETAIL_SET_CANONICAL_URL"],
        "DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
        "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
        "SET_TITLE" => $arParams["SET_TITLE"],
        "MESSAGE_404" => $arParams["MESSAGE_404"],
        "SET_STATUS_404" => $arParams["SET_STATUS_404"],
        "SHOW_404" => $arParams["SHOW_404"],
        "FILE_404" => $arParams["FILE_404"],
        "INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
        "ADD_SECTIONS_CHAIN" => $arParams["ADD_SECTIONS_CHAIN"],
        "ACTIVE_DATE_FORMAT" => $arParams["DETAIL_ACTIVE_DATE_FORMAT"],
        "CACHE_TYPE" => $arParams["CACHE_TYPE"],
        "CACHE_TIME" => $arParams["CACHE_TIME"],
        "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
        "USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
        "GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
        "DISPLAY_TOP_PAGER" => $arParams["DETAIL_DISPLAY_TOP_PAGER"],
        "DISPLAY_BOTTOM_PAGER" => $arParams["DETAIL_DISPLAY_BOTTOM_PAGER"],
        "PAGER_TITLE" => $arParams["DETAIL_PAGER_TITLE"],
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMPLATE" => $arParams["DETAIL_PAGER_TEMPLATE"],
        "PAGER_SHOW_ALL" => $arParams["DETAIL_PAGER_SHOW_ALL"],
        "CHECK_DATES" => $arParams["CHECK_DATES"],
        "ELEMENT_ID" => $arResult["VARIABLES"]["ELEMENT_ID"],
        "ELEMENT_CODE" => $arResult["VARIABLES"]["ELEMENT_CODE"],
        "SECTION_ID" => $arResult["VARIABLES"]["SECTION_ID"],
        "SECTION_CODE" => $arResult["VARIABLES"]["SECTION_CODE"],
        "IBLOCK_URL" => $arResult["FOLDER"] . $arResult["URL_TEMPLATES"]["news"],
        "USE_SHARE" => $arParams["USE_SHARE"],
        "SHARE_HIDE" => $arParams["SHARE_HIDE"],
        "SHARE_TEMPLATE" => $arParams["SHARE_TEMPLATE"],
        "SHARE_HANDLERS" => $arParams["SHARE_HANDLERS"],
        "SHARE_SHORTEN_URL_LOGIN" => $arParams["SHARE_SHORTEN_URL_LOGIN"],
        "SHARE_SHORTEN_URL_KEY" => $arParams["SHARE_SHORTEN_URL_KEY"],
        "ADD_ELEMENT_CHAIN" => (isset($arParams["ADD_ELEMENT_CHAIN"]) ? $arParams["ADD_ELEMENT_CHAIN"] : ''),
        'STRICT_SECTION_CHECK' => (isset($arParams['STRICT_SECTION_CHECK']) ? $arParams['STRICT_SECTION_CHECK'] : ''),
    ],
    $component
); ?>


    <?
    global $arFilter;
    $arFilter = array( "!ID" => $ElementID );
    $APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "more",
    Array(
        "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
        "NEWS_COUNT" => $arParams["NEWS_COUNT"],
        "SORT_BY1" => $arParams["SORT_BY1"],
        "SORT_ORDER1" => $arParams["SORT_ORDER1"],
        "SORT_BY2" => $arParams["SORT_BY2"],
        "SORT_ORDER2" => $arParams["SORT_ORDER2"],
        "FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
        "PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
        "DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
        "SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
        "IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
        "DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
        "SET_TITLE" => $arParams["SET_TITLE"],
        "SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
        "MESSAGE_404" => $arParams["MESSAGE_404"],
        "SET_STATUS_404" => $arParams["SET_STATUS_404"],
        "SHOW_404" => $arParams["SHOW_404"],
        "FILE_404" => $arParams["FILE_404"],
        "INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
        "CACHE_TYPE" => $arParams["CACHE_TYPE"],
        "CACHE_TIME" => $arParams["CACHE_TIME"],
        "CACHE_FILTER" => $arParams["CACHE_FILTER"],
        "CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
        "DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
        "DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
        "PAGER_TITLE" => $arParams["PAGER_TITLE"],
        "PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
        "PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
        "PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
        "PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
        "PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
        "PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
        "PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
        "PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
        "DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
        "DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
        "PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
        "ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
        "USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
        "GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
        "FILTER_NAME" => $arParams["FILTER_NAME"],
        "HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
        "CHECK_DATES" => $arParams["CHECK_DATES"],
    ),
    $component
);?>

    <!-- contacts section -->
    <section class="s-contacts section js-section" id="contacts">
        <div class="container">
            <!-- contacts -->
            <div class="row contacts contacts_blocks s-contacts__contacts">
                <!-- contacts block -->
                <div class="col-lg-6 col-12 contacts__block">
                    <div class="section__title contacts__title">
                        <h2 class="section__title-title h2 text-green">
                            ???? ?? ???????????????????? ??????????
                        </h2>
                    </div>
                    <!-- contacts items -->
                    <div class="row contacts__items contacts__items_social contacts-social">
                        <!-- contacts item -->
                        <div class="col-6 contacts-social__item contacts-social__item_vk">
                            <a href="https://vk.com/" class="contacts-social__inner">
                                <div class="contacts-social__icon">
                                    <svg width="63" height="36" viewBox="0 0 63 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M52.2787 20.6434C51.2602 19.3834 51.5515 18.8229 52.2787 17.6966C52.2918 17.6837 60.7 6.30257 61.5663 2.44286L61.5715 2.44029C62.002 1.03371 61.5715 0 59.4898 0H52.6016C50.848 0 50.0395 0.887143 49.6063 1.87971C49.6063 1.87971 46.0992 10.1031 41.1378 15.4337C39.5365 16.974 38.7962 17.4677 37.9221 17.4677C37.4916 17.4677 36.8222 16.974 36.8222 15.5674V2.44029C36.8222 0.753428 36.3313 0 34.8796 0H24.0485C22.9485 0 22.2949 0.786857 22.2949 1.51971C22.2949 3.11914 24.7756 3.48686 25.0329 7.98686V17.7506C25.0329 19.89 24.6365 20.2834 23.7571 20.2834C21.4155 20.2834 15.7322 12.0266 12.3642 2.57657C11.6843 0.743142 11.0201 0.00257124 9.25345 0.00257124H2.36258C0.396389 0.00257124 0 0.889714 0 1.88229C0 3.636 2.34158 12.3557 10.8889 23.8757C16.5853 31.7391 24.6076 36 31.9054 36C36.2919 36 36.8274 35.0537 36.8274 33.426C36.8274 25.9123 36.431 25.2026 38.6282 25.2026C39.6468 25.2026 41.4003 25.6963 45.4955 29.4891C50.176 33.9866 50.9451 36 53.565 36H60.4532C62.4168 36 63.4117 35.0537 62.8394 33.1869C61.5295 29.2603 52.6777 21.1834 52.2787 20.6434Z" fill="#477FBF" />
                                    </svg>
                                </div>
                                <div class="contacts-social__link">
                                    ??????????????<i class="text-icon">
                                        <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 5.5H12.125" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M7.75 1.125L12.125 5.5L7.75 9.875" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </i>
                                </div>
                            </a>
                        </div>
                        <!-- /contacts item -->
                        <!-- contacts item -->
                        <div class="col-6 contacts-social__item contacts-social__item_inst">
                            <a href="http://instagram.com/" class="contacts-social__inner">
                                <div class="contacts-social__icon">
                                    <svg width="43" height="43" viewBox="0 0 43 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M36.7012 0H6.29883C2.82594 0 0 2.82594 0 6.29883V36.7012C0 40.1741 2.82594 43 6.29883 43H36.7012C40.1741 43 43 40.1741 43 36.7012V6.29883C43 2.82594 40.1741 0 36.7012 0ZM21.584 32.7539C15.3321 32.7539 10.2461 27.6679 10.2461 21.416C10.2461 15.1641 15.3321 10.0781 21.584 10.0781C27.8359 10.0781 32.9219 15.1641 32.9219 21.416C32.9219 27.6679 27.8359 32.7539 21.584 32.7539ZM34.1816 12.5977C32.0978 12.5977 30.4023 10.9022 30.4023 8.81836C30.4023 6.7345 32.0978 5.03906 34.1816 5.03906C36.2655 5.03906 37.9609 6.7345 37.9609 8.81836C37.9609 10.9022 36.2655 12.5977 34.1816 12.5977Z" fill="#A02AA1" />
                                        <path d="M34.1816 7.55859C33.4865 7.55859 32.9219 8.12319 32.9219 8.81836C32.9219 9.51353 33.4865 10.0781 34.1816 10.0781C34.8768 10.0781 35.4414 9.51353 35.4414 8.81836C35.4414 8.12319 34.8768 7.55859 34.1816 7.55859Z" fill="#A02AA1" />
                                        <path d="M21.584 12.5977C16.7221 12.5977 12.7656 16.5541 12.7656 21.416C12.7656 26.2779 16.7221 30.2344 21.584 30.2344C26.4459 30.2344 30.4023 26.2779 30.4023 21.416C30.4023 16.5541 26.4459 12.5977 21.584 12.5977Z" fill="#A02AA1" />
                                    </svg>
                                </div>
                                <div class="contacts-social__link">
                                    ??????????????<i class="text-icon">
                                        <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 5.5H12.125" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M7.75 1.125L12.125 5.5L7.75 9.875" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </i>
                                </div>
                            </a>
                        </div>
                        <!-- /contacts item -->
                        <!-- contacts item -->
                        <div class="col-6 contacts-social__item contacts-social__item_fb">
                            <a href="https://www.facebook.com/" class=" contacts-social__inner">
                                <div class="contacts-social__icon">
                                    <svg width="22" height="43" viewBox="0 0 22 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17.6614 7.13979H21.5869V0.302792C20.9097 0.209625 18.5805 0 15.8679 0C10.2081 0 6.33089 3.56004 6.33089 10.1032V16.125H0.085144V23.7682H6.33089V43H13.9885V23.77H19.9816L20.933 16.1268H13.9867V10.8611C13.9885 8.65196 14.5833 7.13979 17.6614 7.13979Z" fill="#518101" />
                                    </svg>
                                </div>
                                <div class="contacts-social__link">
                                    ??????????????<i class="text-icon">
                                        <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 5.5H12.125" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M7.75 1.125L12.125 5.5L7.75 9.875" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </i>
                                </div>
                            </a>
                        </div>
                        <!-- /contacts item -->
                        <!-- contacts item -->
                        <div class="col-6 contacts-social__item contacts-social__item_tw">
                            <a href="https://twitter.com/" class="contacts-social__inner">
                                <div class="contacts-social__icon">
                                    <svg width="52" height="43" viewBox="0 0 52 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M52 5.00175C50.0662 5.85 48.0057 6.41225 45.8575 6.68525C48.0675 5.36575 49.7542 3.29225 50.5473 0.793C48.4868 2.0215 46.2118 2.88925 43.7872 3.3735C41.8307 1.29025 39.0422 0 36.0002 0C30.0982 0 25.3467 4.7905 25.3467 10.6632C25.3467 11.5083 25.4182 12.3207 25.5938 13.0942C16.731 12.662 8.88875 8.41425 3.6205 1.9435C2.70075 3.53925 2.16125 5.36575 2.16125 7.332C2.16125 11.024 4.0625 14.2967 6.8965 16.1915C5.18375 16.159 3.5035 15.6617 2.08 14.8785C2.08 14.911 2.08 14.9532 2.08 14.9955C2.08 20.176 5.77525 24.479 10.621 25.4702C9.75325 25.7075 8.8075 25.8212 7.826 25.8212C7.1435 25.8212 6.4545 25.7822 5.80775 25.6392C7.189 29.861 11.1085 32.9647 15.769 33.0655C12.142 35.9027 7.53675 37.6123 2.55125 37.6123C1.677 37.6123 0.8385 37.5732 0 37.466C4.72225 40.5112 10.3188 42.25 16.354 42.25C35.971 42.25 46.696 26 46.696 11.9145C46.696 11.4432 46.6797 10.9883 46.657 10.5365C48.7728 9.035 50.5505 7.15975 52 5.00175Z" fill="#FC9300" />
                                    </svg>
                                </div>
                                <div class="contacts-social__link">
                                    ??????????????<i class="text-icon">
                                        <svg width="13" height="11" viewBox="0 0 13 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1.5 5.5H12.125" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M7.75 1.125L12.125 5.5L7.75 9.875" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </i>
                                </div>
                            </a>
                        </div>
                        <!-- /contacts item -->
                    </div>
                    <!-- /contacts items -->
                </div>
                <!-- /contacts block -->
                <!-- contacts block -->
                <div class="col-lg-6 col-12 contacts__block">
                    <div class="section__title contacts__title">
                        <h2 class="section__title-title h2 text-green">
                            ??????????????????????
                        </h2>
                    </div>
                    <!-- contacts items -->
                    <div class="contacts__items contacts__items_messangers contacts-messangers">
                        <!-- contacts item -->
                        <div class="contacts-messangers__item contacts-messangers__item_chat">
                            <a href="javascript:void(0);" class="contacts-messangers__inner">
                                <div class="contacts-messangers__icon">
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.4688 3.9375H4.59375C4.2315 3.9375 3.9375 4.2315 3.9375 4.59375C3.9375 4.956 4.2315 5.25 4.59375 5.25H12.4688C12.831 5.25 13.125 4.956 13.125 4.59375C13.125 4.2315 12.831 3.9375 12.4688 3.9375Z" fill="#184EA6" />
                                        <path d="M9.84375 6.5625H4.59375C4.2315 6.5625 3.9375 6.8565 3.9375 7.21875C3.9375 7.581 4.2315 7.875 4.59375 7.875H9.84375C10.206 7.875 10.5 7.581 10.5 7.21875C10.5 6.8565 10.206 6.5625 9.84375 6.5625Z" fill="#184EA6" />
                                        <path d="M14.4375 0H2.625C1.17731 0 0 1.17731 0 2.625V15.75C0 16.0046 0.147 16.2369 0.378 16.3446C0.465937 16.3853 0.56175 16.4062 0.65625 16.4062C0.807187 16.4062 0.956813 16.3538 1.07625 16.254L4.83131 13.125H14.4375C15.8852 13.125 17.0625 11.9477 17.0625 10.5V2.625C17.0625 1.17731 15.8852 0 14.4375 0ZM15.75 10.5C15.75 11.2232 15.162 11.8125 14.4375 11.8125H4.59375C4.44019 11.8125 4.29187 11.8663 4.17375 11.9648L1.3125 14.3496V2.625C1.3125 1.90181 1.9005 1.3125 2.625 1.3125H14.4375C15.162 1.3125 15.75 1.90181 15.75 2.625V10.5Z" fill="#184EA6" />
                                        <path d="M18.375 5.25C18.0127 5.25 17.7188 5.544 17.7188 5.90625C17.7188 6.2685 18.0127 6.5625 18.375 6.5625C19.0995 6.5625 19.6875 7.15181 19.6875 7.875V18.9774L17.472 17.2056C17.3565 17.1137 17.2108 17.0625 17.0625 17.0625H7.875C7.1505 17.0625 6.5625 16.4732 6.5625 15.75V15.0938C6.5625 14.7315 6.2685 14.4375 5.90625 14.4375C5.544 14.4375 5.25 14.7315 5.25 15.0938V15.75C5.25 17.1977 6.42731 18.375 7.875 18.375H16.8315L19.9329 20.8569C20.0524 20.9514 20.1981 21 20.3438 21C20.4396 21 20.5367 20.979 20.6286 20.9357C20.8556 20.8254 21 20.5957 21 20.3438V7.875C21 6.42731 19.8227 5.25 18.375 5.25Z" fill="#184EA6" />
                                    </svg>
                                </div>
                                <div class="contacts-messangers__text">
                                    ????????????-??????
                                </div>
                            </a>
                        </div>
                        <!-- /contacts item -->
                        <!-- contacts item -->
                        <div class="contacts-messangers__item contacts-messangers__item_wa">
                            <a href="javascript:void(0);" class="contacts-messangers__inner">
                                <div class="contacts-messangers__icon">
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path d="M10.9998 21.9119H10.9955C9.27906 21.9112 7.57726 21.506 6.05221 20.7373L1.35116 21.8066C1.06431 21.8718 0.763865 21.7857 0.555063 21.5784C0.346262 21.3711 0.258142 21.0713 0.321253 20.784L1.33991 16.1537C0.464762 14.5375 0.00267982 12.7674 0.000162125 11.0123C-5.72205e-06 11.0062 -5.72205e-06 11.0002 -5.72205e-06 10.9943C0.00116921 8.08568 1.15142 5.34642 3.2386 3.28123C5.32107 1.22075 8.07728 0.0859375 10.9997 0.0859375C13.9286 0.0871124 16.6804 1.22293 18.7491 3.28392C20.8466 5.37361 22.001 8.11505 22 11.003C21.9992 13.1855 21.3447 15.2949 20.1075 17.1027C19.8395 17.4945 19.3047 17.5947 18.913 17.3266C18.5214 17.0586 18.421 16.5238 18.6891 16.1321C19.7299 14.6111 20.2804 12.8372 20.2812 11.0023C20.2821 8.57478 19.3072 6.26605 17.5361 4.50148C15.7917 2.76343 13.4702 1.80569 10.9993 1.80469C5.88957 1.80469 1.72949 5.91861 1.71874 10.9789C1.71874 10.9844 1.71891 10.9898 1.71891 10.9951C1.71824 12.5615 2.15884 14.1496 2.99287 15.5879C3.10079 15.7741 3.13503 15.9938 3.08871 16.2038L2.29093 19.8301L5.97936 18.991C6.18296 18.9449 6.39646 18.9742 6.58009 19.0738C7.92773 19.8054 9.45463 20.1925 10.9958 20.1931H10.9997C12.6756 20.1931 14.3215 19.7399 15.7593 18.8828C16.1668 18.6395 16.6944 18.773 16.9374 19.1807C17.1804 19.5884 17.0472 20.1158 16.6395 20.359C14.9357 21.3748 12.9855 21.9119 10.9997 21.9119H10.9998ZM8.57276 6.62659C8.38427 6.20898 8.18588 6.19472 8.00662 6.1875H7.52439C7.35655 6.1875 7.08396 6.25027 6.85351 6.50121C6.62289 6.75214 5.97282 7.35873 5.97282 8.59258C5.97282 9.82642 6.87449 11.0188 7.00021 11.1863C7.12609 11.3535 8.74095 13.9664 11.2983 14.9716C13.4237 15.807 13.8562 15.6408 14.3175 15.5988C14.7789 15.5572 15.8063 14.9924 16.0158 14.4068C16.2256 13.8213 16.2256 13.3195 16.1626 13.2146C16.0998 13.1102 15.932 13.0474 15.6804 12.922C15.4286 12.7966 14.1955 12.1795 13.9648 12.0959C13.7342 12.0123 13.5665 11.9705 13.3987 12.2216C13.2308 12.4724 12.7367 13.0523 12.5898 13.2194C12.4431 13.3871 12.2963 13.4079 12.0447 13.2825C11.7931 13.1567 10.9909 12.8873 10.0297 12.0331C9.28158 11.3683 8.7626 10.5206 8.61573 10.2695C8.46887 10.0188 8.59995 9.88281 8.72618 9.75777C8.83914 9.64548 8.99204 9.4919 9.11793 9.34554C9.24348 9.19917 9.2794 9.0946 9.36315 8.92726C9.44708 8.75992 9.40512 8.61356 9.34234 8.48801C9.2794 8.36263 8.79634 7.12241 8.5726 6.62659" fill="#88B935" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="contacts-messangers__text">
                                    WhatsApp
                                </div>
                            </a>
                        </div>
                        <!-- /contacts item -->
                        <!-- contacts item -->
                        <div class="contacts-messangers__item contacts-messangers__item_vb">
                            <a href="javascript:void(0);" class="contacts-messangers__inner">
                                <div class="contacts-messangers__icon">
                                    <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20.2227 2.57356C18.4046 0.79114 15.4653 -0.072508 11.4849 0.00531453C7.47135 0.0842517 4.7885 0.788708 3.04185 2.22234C1.35306 3.60836 0.566525 5.6365 0.566525 8.60501V11.6346C0.566525 15.1391 2.4444 18.9918 6.03346 19.5747C6.4478 19.6425 6.83813 19.3608 6.90541 18.9464C6.9727 18.5321 6.6914 18.1417 6.27706 18.0744C3.55519 17.6323 2.0865 14.4265 2.0865 11.6346V8.60501C2.0865 4.34848 3.66372 1.67931 11.5147 1.52488C15.0739 1.45435 17.6429 2.17289 19.1584 3.65882C20.3394 4.81694 20.9136 6.43479 20.9136 8.60501V11.6346C20.9136 16.2223 18.8544 18.2458 13.573 18.8416H9.82801C9.62646 18.8416 9.43312 18.9217 9.29065 19.0642L6.65188 21.703C6.35508 21.9998 6.35508 22.481 6.65188 22.7778C6.80023 22.9262 6.99479 23.0005 7.18924 23.0005C7.3837 23.0005 7.57825 22.9263 7.7266 22.7778L10.1428 20.3616H13.6155C13.6434 20.3616 13.6715 20.3601 13.6994 20.3569C16.7219 20.0212 18.7917 19.2346 20.2129 17.8812C21.7072 16.4581 22.4336 14.4148 22.4336 11.6345V8.60501C22.4336 6.04142 21.6898 4.01216 20.2227 2.57356Z" fill="#FC9300" />
                                        <path d="M11.9743 4.96469C11.9744 4.96469 11.9744 4.96469 11.9746 4.96469C13.1992 4.96469 14.3505 5.44166 15.2165 6.30764C16.0826 7.17372 16.5595 8.32525 16.5594 9.55004C16.5594 9.96976 16.8996 10.31 17.3193 10.31C17.3194 10.31 17.3194 10.31 17.3194 10.31C17.7391 10.31 18.0794 9.96986 18.0794 9.55014C18.0795 7.91931 17.4444 6.38607 16.2913 5.23292C15.1382 4.07977 13.6053 3.44482 11.9746 3.44482C11.9745 3.44482 11.9742 3.44482 11.9741 3.44482C11.5544 3.44482 11.2142 3.7851 11.2142 4.20481C11.2143 4.62442 11.5546 4.96469 11.9743 4.96469Z" fill="#FC9300" />
                                        <path d="M11.9741 7.63716C13.0287 7.63736 13.8869 8.49544 13.887 9.54999C13.8871 9.96971 14.2273 10.31 14.6471 10.3099C15.0669 10.3099 15.4071 9.9695 15.407 9.54979C15.4067 7.65732 13.8668 6.11749 11.9743 6.11719H11.9742C11.5545 6.11719 11.2143 6.45736 11.2142 6.87707C11.2142 7.29679 11.5544 7.63716 11.9741 7.63716Z" fill="#FC9300" />
                                        <path d="M8.56642 8.939C8.21997 9.17591 8.1311 9.64883 8.36791 9.99528C8.60473 10.3417 9.07774 10.4305 9.42419 10.1937C9.69667 10.0074 10.3349 9.5711 10.2901 8.69884C10.2617 8.17678 9.79081 7.43139 9.40078 6.89798C8.83029 6.11753 8.33863 5.64745 7.94252 5.50173C7.57266 5.36402 7.18588 5.36109 6.79211 5.49322C5.97649 5.76803 5.38431 6.26466 5.07971 6.92939C4.78311 7.5765 4.7897 8.32017 5.09886 9.08046C5.82906 10.8718 6.85129 12.4401 8.14397 13.7485C9.44557 15.0343 11.0138 16.0565 12.8058 16.7871C13.1936 16.9449 13.5773 17.0238 13.946 17.0238C14.2997 17.0238 14.6396 16.9513 14.9564 16.8061C15.6211 16.5014 16.1176 15.9093 16.3928 15.0927C16.5245 14.6998 16.5215 14.3132 16.3849 13.9459C16.2382 13.5469 15.768 13.0554 14.9877 12.4849C14.4542 12.0949 13.7088 11.624 13.1847 11.5955C12.3143 11.5517 11.8783 12.1888 11.6921 12.4613C11.4552 12.8077 11.5438 13.2806 11.8903 13.5177C12.2368 13.7547 12.7097 13.6659 12.9467 13.3195C13.0294 13.1986 13.0766 13.1436 13.1036 13.1196C13.5302 13.2563 14.7467 14.1501 14.9657 14.4926C14.9711 14.5145 14.9723 14.5478 14.952 14.6085C14.8562 14.8931 14.6692 15.2657 14.3232 15.4244C13.999 15.5728 13.6307 15.4818 13.3792 15.3795C11.7734 14.7248 10.3714 13.8123 9.21869 12.6737C8.07355 11.5145 7.16106 10.1126 6.50676 8.50743C6.40421 8.25532 6.31312 7.88677 6.46157 7.56292C6.62015 7.21687 6.99285 7.02981 7.27657 6.93416C7.33717 6.91389 7.37051 6.915 7.39361 6.92058C7.73621 7.13996 8.62945 8.35573 8.76625 8.78244C8.74213 8.80909 8.68731 8.85641 8.56642 8.939Z" fill="#FC9300" />
                                    </svg>
                                </div>
                                <div class="contacts-messangers__text">
                                    Viber
                                </div>
                            </a>
                        </div>
                        <!-- /contacts item -->
                        <!-- contacts item -->
                        <div class="contacts-messangers__item contacts-messangers__item_tg">
                            <a href="javascript:void(0);" class="contacts-messangers__inner">
                                <div class="contacts-messangers__icon">
                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path d="M0.363063 9.7962L5.49844 12.3556C5.69706 12.4536 5.93156 12.4466 6.12144 12.3355L10.6924 9.67808L7.92569 12.1298C7.78481 12.255 7.70431 12.4335 7.70431 12.6216V18.5935C7.70431 19.2235 8.50844 19.4886 8.88556 18.9881L11.1054 16.0367L16.5952 19.1631C16.9802 19.3845 17.4737 19.1622 17.5629 18.7221L20.9868 1.65958C21.0892 1.14683 20.5791 0.728577 20.1048 0.919327L0.417313 8.59745C-0.111187 8.80395 -0.145312 9.54333 0.363063 9.7962ZM19.4643 2.57833L16.4552 17.5732L11.2533 14.6105C10.9698 14.4486 10.6049 14.5203 10.4037 14.7863L9.01681 16.63V12.9165L16.4989 6.28745C17.0913 5.76333 16.4106 4.83145 15.7342 5.2287L5.76794 11.023L2.27494 9.28258L19.4643 2.57833Z" fill="#F83648" />
                                        </g>
                                    </svg>
                                </div>
                                <div class="contacts-messangers__text">
                                    Telegram
                                </div>
                            </a>
                        </div>
                        <!-- /contacts item -->
                    </div>
                    <!-- /contacts items -->
                </div>
                <!-- /contacts block -->
            </div>
            <!-- /contacts -->
        </div>
    </section>
    <!-- /contacts section -->