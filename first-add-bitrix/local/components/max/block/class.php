<?php

use \Bitrix\Main\Loader;
use \Bitrix\Main\Data\Cache;

class BlockComponent extends CBitrixComponent
{
    private function getBlock($block)
    {
        $result = [];
        $cache = Bitrix\Main\Data\Cache::createInstance();

        if ($cache->initCache(3600, 'block_'.$block['ID']))
        {
            $result = $cache->getVars();
        }
        elseif ($cache->startDataCache())
        {
            $result['IB_ID'] = $block['IBLOCK_ID'];
            switch ($block['IBLOCK_CODE']){
                case 'header_1':
                    $result['TPL'] = 'header_1';
                    $result['DATA'] = $this->getHeader1($block);
                    break;
                case 'header_2':
                    $result['TPL'] = 'header_2';
                    $result['DATA'] = $this->getHeader2($block);
                    break;
                case 'free_help':
                    $result['TPL'] = 'free_help';
                    $result['DATA'] = $this->getFreeHelp($block);
                    break;
                case 'info':
                    $result['TPL'] = 'info';
                    $result['DATA'] = $this->getInfo($block);
                    break;
                case 'specialist':
                    $result['TPL'] = 'specialist';
                    $result['DATA'] = $this->getSpecialist($block);
                    break;
                case 'team':
                    $result['TPL'] = 'team';
                    $result['DATA'] = $this->getTeam($block);
                    break;
                case 'elements_list':
                    $result['TPL'] = 'elements_list';
                    $result['DATA'] = $this->getElementsList($block);
                    break;
                case 'case_list':
                    $result['TPL'] = 'case_list';
                    $result['DATA'] = $this->getElementsCaseList($block);
                    break;
                case 'faq':
                    $result['TPL'] = 'faq';
                    $result['DATA'] = $this->getFaq($block);
                    break;
                case 'partners':
                    $result['TPL'] = 'partners';
                    $result['DATA'] = $this->getPartners($block);
                    break;
                case 'advantages':
                    $result['TPL'] = 'advantages';
                    $result['DATA'] = $this->getAdvantages($block);
                    break;
                case 'contact':
                    $result['TPL'] = 'contact';
                    $result['DATA'] = $this->getContact($block);
                    break;
                case 'news_block':
                    $result['TPL'] = 'news_block';
                    $result['DATA'] = $this->getNewsBlock($block);
                    break;
                case 'about_projects':
                    $result['TPL'] = 'about_projects';
                    $result['DATA'] = $this->getAboutProjects($block);
                    break;
                case 'who':
                    $result['TPL'] = 'who';
                    $result['DATA'] = $this->getWho($block);
                    break;
                case 'quiz':
                    $result['TPL'] = 'quiz';
                    $result['DATA'] = $this->getQuiz($block);
                    break;
                case 'subjects':
                    $result['TPL'] = 'subjects';
                    $result['DATA'] = $this->getSubjects($block);
                    break;
                case 'steps':
                    $result['TPL'] = 'steps';
                    $result['DATA'] = $this->getSteps($block);
                    break;
                case 'training':
                    $result['TPL'] = 'training';
                    $result['DATA'] = $this->getTraining($block);
                    break;
                case 'reviews':
                    $result['TPL'] = 'reviews';
                    $result['DATA'] = $this->getReviews($block);
                    break;
                case 'locations':
                    $result['TPL'] = 'locations';
                    $result['DATA'] = $this->getLocations($block);
                    break;
                case 'level':
                    $result['TPL'] = 'level';
                    $result['DATA'] = $this->getLevel($block);
                    break;
                case 'html':
                    $result['TPL'] = 'html';
                    $result['DATA'] = $this->getHtmlBlock($block);
                    break;
                case 'benefits':
                    $result['TPL'] = 'benefits';
                    $result['DATA'] = $this->getFreeHelp($block);
                    break;
                case 'courses_li':
                    $result['TPL'] = 'courses_li';
                    $result['DATA'] = $this->getFreeHelp($block);
                    break;
                case 'help_psih':
                    $result['TPL'] = 'help_psih';
                    $result['DATA'] = $this->getFreeHelp($block);
                    break;
                case 'about':
                    $result['TPL'] = 'about';
                    $result['DATA'] = $this->getFreeHelp($block);
                    break;
                case 'menu':
                    $result['TPL'] = 'menu';
                    $result['DATA'] = $this->getFreeHelp($block);
                    break;
                case 'programs':
                    $result['TPL'] = 'programs';
                    $result['DATA'] = $this->getPrograms($block);
                    break;
                case 'sing_up':
                    $result['TPL'] = 'sing_up';
                    $result['DATA'] = $this->getFreeHelp($block);
                    break;
                case 'header_3':
                    $result['TPL'] = 'header_3';
                    $result['DATA'] = $this->getFreeHelp($block);
                    break;
                case 'header_4':
                    $result['TPL'] = 'header_4';
                    break;
                case 'about_us':
                    $result['TPL'] = 'about_us';
                    $result['DATA'] = $this->getFreeHelp($block);
                    break;
                case 'gallery':
                    $result['TPL'] = 'gallery';
                    $result['DATA'] = $this->getFreeHelp($block);
                    break;
                case 'partners_page':
                    $result['TPL'] = 'partners_page';
                    $result['DATA'] = $this->getFreeHelp($block);
                    break;
                case 'rekvizity':
                    $result['TPL'] = 'rekvizity';
                    $result['DATA'] = $this->getFreeHelp($block);
                    break;
                case 'why':
                    $result['TPL'] = 'why';
                    $result['DATA'] = $this->getFreeHelp($block);
                    break;
                case 'achievements':
                    $result['TPL'] = 'achievements';
                    $result['DATA'] = $this->getFreeHelp($block);
                    break;
                case 'smi':
                    $result['TPL'] = 'smi';
                    $result['DATA'] = $this->getSmi($block);
                    break;
                case 'header_5':
                    $result['TPL'] = 'header_5';
                    $result['DATA'] = $this->getFreeHelp($block);
                    break;
                case 'aside':
                    $result['TPL'] = 'aside';
                    $result['DATA'] = $this->getFreeHelp($block);
                    break;
                case 'seo_block':
                    $result['TPL'] = 'seo_block';
                    $result['DATA'] = $this->getFreeHelp($block);
                    break;
            }
            $cache->endDataCache($result);
        }

        return $result;
    }

    private function getElementData($elementId,$ibID = null,$sort = [])
    {
        $res = [];
        $props = $this->getProps($ibID);

        $filter = [];
        if($elementId){
            $filter['ID'] = $elementId;
        }
        if($ibID){
            $filter['IBLOCK_ID'] = $ibID;
        }

        $dbRes = CIBlockElement::GetList($sort,$filter,false,false,[
            'ID','CODE','NAME','PREVIEW_PICTURE','SORT','PREVIEW_TEXT','DETAIL_PICTURE','DETAIL_TEXT','DETAIL_PAGE_URL','IBLOCK_SECTION_ID','PROPERTY_*',
        ]);
        while($item = $dbRes->GetNext())
        {
            $element = [];
            $element['ID'] = $item['ID'];
            $element['NAME'] = $item['NAME'];
            $element['CODE'] = $item['CODE'];
            $element['PREVIEW_PICTURE'] = ($item['PREVIEW_PICTURE']) ? CFile::GetPath($item['PREVIEW_PICTURE']) : '';
            $element['DETAIL_PICTURE'] = ($item['DETAIL_PICTURE']) ? CFile::GetPath($item['DETAIL_PICTURE']) : '';
            $element['PREVIEW_TEXT'] = $item['PREVIEW_TEXT'];
            $element['DETAIL_TEXT'] = $item['DETAIL_TEXT'];
            $element['DETAIL_PAGE_URL'] = $item['DETAIL_PAGE_URL'];
            $element['SECTION_ID'] = $item['IBLOCK_SECTION_ID'];
            $element['SORT'] = $item['SORT'];
            foreach ($props as $id => $prop){
                if(isset($item['PROPERTY_'.$id])){
                    if($prop['TYPE'] == 'F'){
                        if($prop['MULTIPLE'] != 'Y'){
                            $item['~PROPERTY_'.$id] = CFile::GetPath($item['PROPERTY_'.$id]);
                        }else{
                            $fls = [];
                            foreach ($item['PROPERTY_'.$id] as $file){
                                $fls[] = CFile::GetPath($file);
                            }
                            $item['~PROPERTY_'.$id] = $fls;
                        }
                    }
                    $element[$prop['CODE']] = $item['~PROPERTY_'.$id];
                    if(isset($item['DESCRIPTION_'.$id])){
                        $element[$prop['CODE'].'_DESCRIPTION'] = $item['DESCRIPTION_'.$id];
                    }

                }
            }
            $res[] = $element;

        }

        return (is_array($elementId)) ? $res : end($res);
    }

    private function getProps($ibId)
    {
        $res = [];
        $dbRes = CIBlockProperty::GetList(["sort"=>"asc", "name"=>"asc"], ["ACTIVE"=>"Y", "IBLOCK_ID"=>$ibId]);
        while ($item = $dbRes->GetNext()){
            $res[$item['ID']] = [
                'CODE' => $item['CODE'],
                'TYPE' => $item['PROPERTY_TYPE'],
                'MULTIPLE' => $item['MULTIPLE'],
            ];
        }
        return $res;
    }

    private function getHeader1($block)
    {
        $data = $this->getElementData($block['ID'],$block['IBLOCK_ID']);
        $data['REVIEWS'] = $this->getElementData($data['REVIEWS'],30,['sort' => 'asc']);
        return $data;
    }
    private function getHeader2($block)
    {
        $data = $this->getElementData($block['ID'],$block['IBLOCK_ID']);
        return $data;
    }
    private function getFreeHelp($block)
    {
        $data = $this->getElementData($block['ID'],$block['IBLOCK_ID']);
        return $data;
    }
    private function getInfo($block)
    {
        $data = $this->getElementData($block['ID'],$block['IBLOCK_ID']);
        return $data;
    }
    private function getSpecialist($block)
    {
        $data = $this->getElementData($block['ID'],$block['IBLOCK_ID']);
        return $data;
    }
    private function getTeam($block)
    {
        $data = $this->getElementData($block['ID'],$block['IBLOCK_ID']);
        $data['TEAM'] = $this->getElementData($data['ELEMENTS'],8);
        return $data;
    }
    private function getElementsList($block)
    {
        $data = $this->getElementData($block['ID'],$block['IBLOCK_ID']);
        $data['ELEMENTS'] = $this->getElementData($data['ELEMENTS'],10);
        return $data;
    }
    private function getElementsCaseList($block)
    {
        $data = $this->getElementData($block['ID'],$block['IBLOCK_ID']);
        $data['ELEMENTS'] = $this->getElementData($data['ELEMENTS'],60);
        return $data;
    }
    private function getFaq($block)
    {
        $data = $this->getElementData($block['ID'],$block['IBLOCK_ID']);
        $data['ELEMENTS'] = $this->getElementData($data['ELEMENTS'],12);
        return $data;
    }
    private function getAdvantages($block)
    {
        $data = $this->getElementData($block['ID'],$block['IBLOCK_ID']);
        $data['ELEMENTS'] = $this->getElementData($data['ELEMENTS'],16);
        $data['ELEMENTS2'] = $this->getElementData($data['ELEMENTS2'],17);
        return $data;
    }
    private function getPartners($block)
    {
        $data = $this->getElementData($block['ID'],$block['IBLOCK_ID']);
        return $data;
    }
    private function getContact($block)
    {
        $data = $this->getElementData($block['ID'],$block['IBLOCK_ID']);
        return $data;
    }
    private function getNewsBlock($block)
    {
        $data = $this->getElementData($block['ID'],$block['IBLOCK_ID']);
        $data['ELEMENTS'] = $this->getElementData($data['ELEMENTS'],19);
        return $data;
    }
    private function getAboutProjects($block)
    {
        $data = $this->getElementData($block['ID'],$block['IBLOCK_ID']);
        return $data;
    }
    private function getWho($block)
    {
        $data = $this->getElementData($block['ID'],$block['IBLOCK_ID']);
        return $data;
    }
    private function getQuiz($block)
    {
        $data = $this->getElementData($block['ID'],$block['IBLOCK_ID']);
        return $data;
    }
    private function getSubjects($block)
    {
        $data = $this->getElementData($block['ID'],$block['IBLOCK_ID']);
        $data['ELEMENTS'] = $this->getElementData($data['ELEMENTS'],37);
        $data['ELEMENTS2'] = $this->getElementData($data['ELEMENTS2'],40);
        return $data;
    }
    private function getSteps($block)
    {
        $data = $this->getElementData($block['ID'],$block['IBLOCK_ID']);
        return $data;
    }
    private function getTraining($block)
    {
        $data = $this->getElementData($block['ID'],$block['IBLOCK_ID']);
        return $data;
    }
    private function getReviews($block)
    {
        $data = $this->getElementData($block['ID'],$block['IBLOCK_ID']);
        $data['ELEMENTS'] = $this->getElementData($data['ELEMENTS'],30,['sort' => 'asc']);
        return $data;
    }
    private function getLocations($block)
    {
        $data = $this->getElementData($block['ID'],$block['IBLOCK_ID']);
        $data['ELEMENTS'] = $this->getElementData($data['ELEMENTS'],31);
        return $data;
    }
    private function getPrograms($block)
    {
        $data = $this->getElementData($block['ID'],$block['IBLOCK_ID']);
        $data['ELEMENTS'] = $this->getElementData($data['ELEMENTS'],45);
        return $data;
    }
    private function getSmi($block)
    {
        $data = $this->getElementData($block['ID'],$block['IBLOCK_ID']);
        $data['ELEMENTS'] = $this->getElementData($data['ELEMENTS'],57,['DATE_ACTIVE_FROM' => 'desc']);
        return $data;
    }
    private function getLevel($block)
    {
        $data = $this->getElementData($block['ID'],$block['IBLOCK_ID']);
        return $data;
    }

    private function getHtmlBlock($block)
    {
        $data = $this->getElementData($block['ID'],$block['IBLOCK_ID']);
        $items = $data['PREVIEW_TEXT'];
        if(isset($data['HTML_FILE']) && !empty($data['HTML_FILE'])){
            $items = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/'.$data['HTML_FILE']);
        }
        $data['CONTENT'] = $items;
        return $data;
    }
    

    
    public function executeComponent()
    {
        Loader::includeModule('iblock');
        $block = $this->arParams['BLOCK'];
        $this->arResult = $this->getBlock($block);
        $this->includeComponentTemplate($this->arResult['TPL']);
        return $this->arResult;
    }
}