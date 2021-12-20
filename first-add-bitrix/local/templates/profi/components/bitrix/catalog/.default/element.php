<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

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

$APPLICATION->IncludeComponent('max:page', '', [
    'PAGE' => $arResult['VARIABLES']['ELEMENT_CODE'],
    'IBLOCK_ID' => $arParams['IBLOCK_ID']
]);

$sectionPath = $arResult['VARIABLES']['SECTION_CODE_PATH'];
$sectionCode = $arResult['VARIABLES']['SECTION_CODE'];
$elementCode = $arResult['VARIABLES']['ELEMENT_CODE'];

$sectionDBRes = CIBlockSection::GetList([],['CODE' => $sectionCode,'IBLOCK_ID' => $arParams['IBLOCK_ID']],false,['ID','NAME']);
$section = $sectionDBRes->Fetch();

$elementDBRes = CIBlockElement::GetList([],['CODE' => $elementCode,'IBLOCK_ID' => $arParams['IBLOCK_ID']],false,false,['ID','NAME']);
$element = $elementDBRes->Fetch();

global $APPLICATION;

$APPLICATION->AddChainItem($section['NAME'],'/'.$sectionPath.'/');
$APPLICATION->AddChainItem($element['NAME']);