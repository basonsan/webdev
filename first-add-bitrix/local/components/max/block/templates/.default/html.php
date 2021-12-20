

<? if (!empty($arResult['DATA'])): ?>
    <span id="anchor<?= $arResult['DATA']['ID'] ?>" class="html-block">
        <? if($USER->IsAdmin()): ?>
            <div class="fix-html">
                этот блок HTML находится по адресу: <br>
                <?= $arResult['DATA']["HTML_FILE"]?>
            </div>
        <? endif; ?>
        
        <?= $arResult['DATA']['CONTENT'] ?>
    </span>
<? endif ?>