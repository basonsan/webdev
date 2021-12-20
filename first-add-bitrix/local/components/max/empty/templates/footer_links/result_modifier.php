<?php

use \Bitrix\Main\Data\Cache;

$res = [];

$cache = Bitrix\Main\Data\Cache::createInstance();

$dbRes = CIBlockElement::GetList(
    ['RAND' => 'asc'],
    [
        'IBLOCK_ID' => 1,
    ],
    false,
    ['nTopCount' => 12],
    [
        'ID',
        'CODE',
        'NAME',
        'PROPERTY_WORD_FORM',
    ]
);
while ($item = $dbRes->GetNext()){
    if($item['PREVIEW_PICTURE']){
        $item['PREVIEW_PICTURE'] = CFile::GetPath($item['PREVIEW_PICTURE']);
    }
    if($item['PROPERTY_IMAGES_VALUE']){
        $images = [];
        foreach ($item['PROPERTY_IMAGES_VALUE'] as $id){
            $images[] = CFile::GetPath($id);
        }
        $item['IMAGES'] = $images;
    }
    $res[] = $item;
}

$arResult['ITEMS'] = $res;