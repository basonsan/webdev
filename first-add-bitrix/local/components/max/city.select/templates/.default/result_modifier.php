<?php

if(!empty($arResult['CITIES'])){
    $arResult['CITIES_LIST'] = [];
    $res = [];
    foreach ($arResult['CITIES'] as $city) {
        $arResult['CITIES_LIST'][] = ['name' => $city['NAME'],'code' => $city['SUBDOMAIN']];
        $firstChar = mb_substr($city['NAME'],0,1);
        $res[$firstChar][] = $city;
    }

    $arResult['CITIES'] = $res;
}