<?
global $APPLICATION;
$dir = $APPLICATION->GetCurDir();
if(!empty($arResult['ITEMS'])){
    foreach ($arResult['ITEMS'] as $idx => $block){
        $APPLICATION->IncludeComponent('max:block','',[
            'BLOCK' => $block,
        ]);
        // if($idx == 1 && $dir != '/'){
        //     $APPLICATION->IncludeComponent(
        //         "bitrix:breadcrumb",
        //         "",
        //         Array(
        //             "PATH" => "",
        //             "SITE_ID" => "s1",
        //             "START_FROM" => "0"
        //         )
        //     );
        // }
    }
}

?>
<? if($USER->IsAdmin()): ?>
<!-- <a href="/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?= $arResult['PAGE_BLOCK_ID']?>&type=content&lang=ru&ID=<?= $arResult['PAGE_ID']?>" class='fix-page' target='_blank'>Изменить страницу</a> -->
<?endif;?>


