<?php

use Bitrix\Main\Application;
use Bitrix\Main\Data\Cache;
use \Bitrix\Main\Loader;
use Bitrix\Main\Web\Cookie;

class CitySelect extends CBitrixComponent{

    private $cId = 'city.select';

    private function getCitiesList()
    {
        $res = [];
        $cache = Cache::createInstance();
        if ($cache->initCache(60 * 60 * 24 * 7, "cities_list_" . $this->cId)) {
            $res = $cache->getVars();
        } elseif ($cache->startDataCache()) {
            $dbRes = CIBlockElement::GetList(['NAME'=>'asc'],[
                'IBLOCK_ID' => 1,
                'ACTIVE' => 'Y',
            ],false,false,['ID','NAME','CODE','PROPERTY_WORD_FORM']);
            while ($item = $dbRes->Fetch()){
                $res[$item['CODE']] = [
                    'NAME' => $item['NAME'],
                    'CODE' => $item['CODE'],
                    'WORD_FORM' => $item['PROPERTY_WORD_FORM_VALUE'],
                ];
            }
            $cache->endDataCache($res);
        }
        return $res;
    }


    public function executeComponent()
    {
        Loader::includeModule('iblock');
        //$this->arResult['AJAX_URL'] = dirname(__FILE__);
        $cities = $this->getCitiesList();
        $uri = explode('.',$_SERVER['HTTP_HOST']);
        if(count($uri) == 3 && $cities[$uri[0]]){
            $this->arResult['CURRENT_CITY'] = $cities[$uri[0]];
        }else{
            $this->arResult['CURRENT_CITY'] = ['NAME' => 'Выберите'];
        }

        $this->arResult['CITIES'] = $cities;

        $this->includeComponentTemplate();
    }
}