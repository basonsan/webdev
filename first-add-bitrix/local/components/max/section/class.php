<?php

use \Bitrix\Main\Loader;
use \Bitrix\Main\Data\Cache;

class PageComponent extends CBitrixComponent
{
    private $section = null;

    private function getBlocksIds()
    {
        $blocks = [];
        if($this->section){
            $cache = Bitrix\Main\Data\Cache::createInstance();

            if ($cache->initCache(3600, $this->section.'_blocksIds')) {
                $blocks = $cache->getVars();
            }
            elseif ($cache->startDataCache()) {
                $dbRes = CIBlockElement::GetList([],['CODE' => $this->section,'IBLOCK_ID' => $this->arParams['BLOCKS_BLOCK']],false,false,['ID','PROPERTY_BLOCKS']);
                if($item = $dbRes->Fetch()){
                    $blocks = $item['PROPERTY_BLOCKS_VALUE'];
                    $cache->endDataCache($blocks);
                }else{
                    $cache->abortDataCache();
                }
            }
        }
        return $blocks;
    }

    private function getBlocks()
    {
        $blocksIds = $this->getBlocksIds();
        $blocks = [];
        if(!empty($blocksIds)){
            $cache = Bitrix\Main\Data\Cache::createInstance();

            if ($cache->initCache(3600, $this->page.'_blocks')) {
                $blocks = $cache->getVars();
            }elseif ($cache->startDataCache()) {
                $tmp = [];
                $dbRes = CIBlockElement::GetList([],['ID' => $blocksIds],false,false,[
                    'ID','NAME', 'IBLOCK_CODE', 'IBLOCK_ID'
                ]);
                while ($item = $dbRes->Fetch()){
                    $tmp[$item['ID']] = $item;
                }
                foreach ($blocksIds as $blocksId){
                    if(isset($tmp[$blocksId])){
                        $blocks[] = $tmp[$blocksId];
                    }
                }
                $cache->endDataCache($blocks);
            }
        }

        $this->arResult['ITEMS'] = $blocks;
    }

    public function executeComponent()
    {
        $this->section = $this->arParams['SECTION'];
        Loader::includeModule('iblock');
        $this->getBlocks();
        $this->includeComponentTemplate();
    }
}