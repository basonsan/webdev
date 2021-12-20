<script>
    console.log('подключил2');
</script>

<?
$data = $arResult['DATA'];


if ($data['TITLE']) {
    $APPLICATION->SetTitle($data['TITLE']);
    $APPLICATION->SetPageProperty("og:title", $data['TITLE']);
} else {
    $APPLICATION->SetTitle('Центр поддержки семей, оказавшихся в трудной жизненной ситуации');
}

if ($data['DESC']) {
    $APPLICATION->SetPageProperty("description", $data['DESC']);
    $APPLICATION->SetPageProperty('og:description', $data['DESC']);
} else {
    $APPLICATION->SetPageProperty("description", "Центр поддержки семей, оказавшихся в трудной жизненной ситуации");
}
if ($data['KEYWORDS']) {
    $APPLICATION->SetPageProperty("keywords", $data['KEYWORDS']);
} else {
    $APPLICATION->SetPageProperty("keywords", "Центр поддержки семей, оказавшихся в трудной жизненной ситуации");
}

if ($data['SEO_IMG']) {
    $APPLICATION->SetPageProperty("og:image", $data['SEO_IMG']);
    $APPLICATION->SetPageProperty("twitter:image", $data['SEO_IMG']);
} 


if ($data['CHAT']) {
    echo $data['CHAT'];
} else {
    echo "<script>
            (function(w,d,u){
                    var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                    var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
            })(window,document,'https://cdn-ru.bitrix24.ru/b12124356/crm/site_button/loader_1_0akuf3.js');
        </script>";
}


?>

<script>
    function reLink(className, data) {
        document.addEventListener("DOMContentLoaded", function(event) { 
            var vkLink = document.querySelectorAll(className);
            vkLink.forEach(function(item, i, arr) {
                if (item.href) {
                    item.href = data;
                    console.log('Нашел ' + className + ' поменял на ' + item.href);
                }
            });
            
        });
    }
</script>


<?if ($data['VK']):?>
    <script>
        reLink('.messangers__link_vk', "<?=$data['VK']?>");
    </script>
<?endif;?>

<?if ($data['IN']):?>
    <script>
        reLink('.messangers__link_inst', "<?=$data['IN']?>");
    </script>
<?endif;?>

<?if ($data['FB']):?>
    <script>
        reLink('.messangers__link_fb', "<?=$data['FB']?>");
    </script>
<?endif;?>

<?if ($data['TW']):?>
    <script>
        reLink('.messangers__link_tw', "<?=$data['TW']?>");
    </script>
<?endif;?>

<?if ($data['TG']):?>
    <script>
        reLink('.messangers__link_tg', "<?=$data['TG']?>");
    </script>
<?endif;?>

<?if ($data['WA']):?>
    <script>
        reLink('.messangers__link_wa', "<?=$data['WA']?>");
    </script>
<?endif;?>

<?if ($data['VB']):?>
    <script>
        reLink('.messangers__link_vb', "<?=$data['VB']?>");
    </script>
<?endif;?>

<script>
    function liCreate(name, link) {
        var articleDiv = document.querySelector(".header__menu-items");
        // создаем элемент
        var elem = document.createElement("li");
        // создаем элемент ссылку
        var elem2 = document.createElement("a");
        // создаем для него текст
        var elemText = document.createTextNode(name);
        // добавляем текст в элемент в качестве дочернего элемента
        if (articleDiv) {
            elem2.appendChild(elemText);
            elem.classList.add("header__menu-item");
            elem2.classList.add("header__menu-link", "js-menu-link", "js-scroll-to");
            elem2.href = "#"+link;
            elem.appendChild(elem2);
            // добавляем элемент в блок div
            articleDiv.appendChild(elem);
        }
    }
</script>

<?foreach ($data['LINK'] as $key => $item):?>
    <script>
        liCreate("<?=$data['TITLE_LINK'][$key]?>", "<?=$data['LINK'][$key]?>");
    </script>
<?endforeach;?>

    