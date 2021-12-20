<? if(!empty($arResult['ITEMS'])): ?>
    <div class="footer__bottom">
        <div class="container">
            <div class="footer__label h5">
                Мы в других городах:
            </div>
            <div class="row">
                <?
                    $cnt = count($arResult['ITEMS']);
                    $colsCnt = intval($cnt/2)
                ?>
                <? $cols = array_chunk($arResult['ITEMS'],$colsCnt); ?>
                <? foreach ($cols as $col): ?>
                    <div class="col-lg col-sm-6 col-6">
                    <ul class="footer-links">
                        <? foreach ($col as $item): ?>
                            <li class="footer-links__item">
                                <a
                                    href="http://<?=$item['CODE']?>.<?=$_SERVER['HTTP_HOST']?>"
                                    class="footer-links__link link">
                                    Производитель резервуаров <?=$item['NAME']?>
                                </a>
                            </li>
                        <? endforeach; ?>
                    </ul>
                </div>
                <? endforeach; ?>
            </div>
        </div>
    </div>
<? endif ?>
