<?php

class EmptyComponent extends CBitrixComponent
{
    public function executeComponent()
    {
        \Bitrix\Main\Loader::includeModule('iblock');
        $this->includeComponentTemplate();
    }
}