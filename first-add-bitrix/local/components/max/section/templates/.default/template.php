<?
global $APPLICATION;
if(!empty($arResult['ITEMS'])){
    foreach ($arResult['ITEMS'] as $idx => $block){
        $APPLICATION->IncludeComponent('max:block','',[
            'BLOCK' => $block,
        ]);
        // if($idx == 0){
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

