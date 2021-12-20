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

if (!$arResult["NavShowAlways"]) {
    if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
        return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");
?>

<!-- news pagination -->
<div class="pagination pagination_mt-md">
    <!--<a href="javascript:void(0);" class="pagination__arrow pagination__arrow_prev d-none">
        <svg width="21" height="14" viewBox="0 0 21 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 6.5752L2.04738 6.57519" stroke-width="1.3" stroke-linecap="square" />
            <path d="M7.29688 12.5566L0.998245 6.77847L7.29688 1.0003" stroke-width="1.3" stroke-linecap="square" />
        </svg>
    </a>-->
    <div class="pagination__pages">
        <? if ($arResult["bDescPageNumbering"] === true): ?>

            <? while ($arResult["nStartPage"] >= $arResult["nEndPage"]): ?>
                <? $NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1; ?>

                <? if ($arResult["nStartPage"] == $arResult["NavPageNomer"]): ?>
                    <a class="pagination__page pagination__page_active" href="javascript:void(0);">
                        <?= $NavRecordGroupPrint ?>
                    </a>
                <? elseif ($arResult["nStartPage"] == $arResult["NavPageCount"] && $arResult["bSavePage"] == false): ?>
                    <a class="pagination__page" href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>"><?= $NavRecordGroupPrint ?></a>
                <? else: ?>
                    <a class="pagination__page" href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>"><?= $NavRecordGroupPrint ?></a>
                <? endif ?>

                <? $arResult["nStartPage"]-- ?>
            <? endwhile ?>

        <? else: ?>

            <? while ($arResult["nStartPage"] <= $arResult["nEndPage"]): ?>

                <? if ($arResult["nStartPage"] == $arResult["NavPageNomer"]): ?>
                    <a class="pagination__page pagination__page_active" href="javascript:void(0);">
                        <?= $arResult["nStartPage"] ?>
                    </a>
                <? elseif ($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false): ?>
                    <a class="pagination__page" href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>"><?= $arResult["nStartPage"] ?></a>
                <? else: ?>
                    <a class="pagination__page" href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>"><?= $arResult["nStartPage"] ?></a>
                <? endif ?>
                <? $arResult["nStartPage"]++ ?>
            <? endwhile ?>

        <? endif ?>

    </div>
    <!--<a href="javascript:void(0);" class="pagination__arrow pagination__arrow_next d-none">
        <svg width="21" height="14" viewBox="0 0 21 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M20 6.5752L2.04738 6.57519" stroke-width="1.3" stroke-linecap="square" />
            <path d="M7.29688 12.5566L0.998245 6.77847L7.29688 1.0003" stroke-width="1.3" stroke-linecap="square" />
        </svg>
    </a>-->
</div>
