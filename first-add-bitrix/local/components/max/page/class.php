<?php

use \Bitrix\Main\Loader;
use \Bitrix\Main\Data\Cache;

class PageComponent extends CBitrixComponent
{
    private $page = null;

    private function getBlocksIds($ibID)
    {
        $blocks = [];
        if($this->page){
            $cache = Bitrix\Main\Data\Cache::createInstance();

            if ($cache->initCache(3600, $this->page.'_blocksIds')) {
                $blocks = $cache->getVars();
            }
            elseif ($cache->startDataCache()) {
                $dbRes = CIBlockElement::GetList([],['CODE' => $this->page,'IBLOCK_ID' => $ibID],false,false,['ID','PROPERTY_BLOCKS']);
                if($item = $dbRes->Fetch()){
                    $blocks = $item['PROPERTY_BLOCKS_VALUE'];
                    $this->arResult['PAGE_ID'] = $item['ID'];
                    $this->arResult['PAGE_BLOCK_ID'] = $ibID;
                    $cache->endDataCache($blocks);
                }else{
                    $cache->abortDataCache();
                }
            }
        }
        return $blocks;
    }

    private function getBlocks($id)
    {
        $blocksIds = $this->getBlocksIds($id);
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
        $this->page = $this->arParams['PAGE'];
        Loader::includeModule('iblock');
        $id = 4;
        if($this->arParams['IBLOCK_ID']){
            $id = $this->arParams['IBLOCK_ID'];
        }
        $this->getBlocks($id);
        $this->includeComponentTemplate();
    }
}