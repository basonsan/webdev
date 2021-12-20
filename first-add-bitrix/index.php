<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetPageProperty("description", "Создание сайтов в Ульяновске, в рассрочку до 3-х месяцев, которые гарантированно приводят клиентов! Вернем деньги, если c сайта не будет заявок! Узнайте спрос на Ваш товар или услугу!");
$APPLICATION->SetPageProperty("keywords", "Создание сайтов в Ульяновске, в рассрочку до 3-х месяцев, которые гарантированно приводят клиентов! Вернем деньги, если c сайта не будет заявок! Узнайте спрос на Ваш товар или услугу!");
$APPLICATION->SetPageProperty("title", "Создание сайтов👍 в Ульяновске! Увеличим прибыль🚀 ");
$APPLICATION->SetTitle("Создание сайтов👍 в Ульяновске! Увеличим прибыль🚀 ");
CModule::IncludeModule("iblock");
global $arFilter2;
$filterNameHead = 'Все';
$filterCountHead = 20;
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);

}
echo '<script>
    let $mac = false; 
    </script>';

if(preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"])) {
    
}
$not_mobile = !(isMobile());
$mobile = isMobile();
use \Bas\Pict;
global $user_agent;
$user_agent = getenv("HTTP_USER_AGENT");
if(strpos($user_agent, "Win") !== FALSE) {
    $os = "Windows";
}
elseif(strpos($user_agent, "Mac") !== FALSE)
{
    $os = "Mac";
    echo '<script>
    $mac = true;
    </script>';
}

?>
<!-- main section -->
<section class="s-main section" id="main"">
	<div class="section__header-height"></div>
	<div class="container">
		<!-- main -->
		<div class="main s-main__main">
			<div class="row">
				<div class="col-xl-5 col-lg-6 col-12">
					<!-- main text -->
					<div class="main__text">
						<div class="section-title section-title_line-none section-title_left main__title">
							<h1 class="section-title__title h1">
								<span class="h1__xl">Создаем сайты</span> <span class="b-text-color">для&nbsp;бизнеса</span>
							</h1>
							<h3 class="section-title__subtitle h4">
								Приводим клиентов из
                                <span class="main__title-img-wrap">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/socico/4.svg" data-src2="<?=SITE_TEMPLATE_PATH?>/img/socico/4.svg" data-src="<?=SITE_TEMPLATE_PATH?>/img/socico/3.svg" alt>
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/socico/6.svg" data-src2="<?=SITE_TEMPLATE_PATH?>/img/socico/6.svg" data-src="<?=SITE_TEMPLATE_PATH?>/img/socico/5.svg" alt>
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/socico/8.svg" data-src2="<?=SITE_TEMPLATE_PATH?>/img/socico/8.svg" data-src="<?=SITE_TEMPLATE_PATH?>/img/socico/7.svg" alt>
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/socico/12.svg" data-src2="<?=SITE_TEMPLATE_PATH?>/img/socico/12.svg" data-src="<?=SITE_TEMPLATE_PATH?>/img/socico/11.svg" alt>
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/socico/10.svg" data-src2="<?=SITE_TEMPLATE_PATH?>/img/socico/10.svg" data-src="<?=SITE_TEMPLATE_PATH?>/img/socico/9.svg" alt>
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/socico/2.svg" data-src2="<?=SITE_TEMPLATE_PATH?>/img/socico/2.svg" data-src="<?=SITE_TEMPLATE_PATH?>/img/socico/1.svg" alt>
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/socico/14.svg" data-src2="<?=SITE_TEMPLATE_PATH?>/img/socico/14.svg" data-src="<?=SITE_TEMPLATE_PATH?>/img/socico/13.svg" alt>
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/socico/16.svg" data-src2="<?=SITE_TEMPLATE_PATH?>/img/socico/16.svg" data-src="<?=SITE_TEMPLATE_PATH?>/img/socico/15.svg" alt>
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/socico/18.svg" data-src2="<?=SITE_TEMPLATE_PATH?>/img/socico/18.svg" data-src="<?=SITE_TEMPLATE_PATH?>/img/socico/17.svg" alt>
                                </span>
								<br>
								с&nbsp;гарантией&nbsp;результата
							</h3>
                            <?php
                                
                            ?>
                        
						</div>
                        <div class="main__video main__video_2 js-main-video">
							<div class="b-video">
								<div class="main__btn-video-close js-main-video-close"></div>
								<a href="#popupVideo" data-src="nxrPy4Czdac" class="b-video__link js-video js-fancybox js-video-o-nas-verh-klik">
									<div class="b-video__img b-img">
										<div class="b-video__video">
											<!-- <video width="320" height="240" autoplay muted loop class="b-img__img">
												<source src="<?=SITE_TEMPLATE_PATH?>/img/main/video.mp4" type="video/mp4">
											</video> -->
                                            <img src="<?=SITE_TEMPLATE_PATH?>/img/video.jpg" class="js-gif" alt="">
										</div>
										<div class="b-video__img-center">
											<i class="b-video__play">
												<svg width="70" height="50" viewBox="0 0 70 50" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M68.5578 8.28036C67.7508 5.28164 65.3865 2.91791 62.3884 2.11042C56.9105 0.611328 34.9993 0.611328 34.9993 0.611328C34.9993 0.611328 13.0886 0.611328 7.61083 2.05328C4.67032 2.86024 2.24838 5.28218 1.44142 8.28036C3.8147e-06 13.7576 3.8147e-06 25.117 3.8147e-06 25.117C3.8147e-06 25.117 3.8147e-06 36.5335 1.44142 41.9536C2.24891 44.9518 4.61264 47.3161 7.61136 48.1236C13.1463 49.6227 34.9999 49.6227 34.9999 49.6227C34.9999 49.6227 56.9105 49.6227 62.3884 48.1807C65.3871 47.3737 67.7508 45.0095 68.5583 42.0113C69.9997 36.5335 69.9997 25.1747 69.9997 25.1747C69.9997 25.1747 70.0574 13.7576 68.5578 8.28036Z" fill="#EF430D" />
													<path d="M28.0229 35.611L46.2433 25.1168L28.0229 14.6226V35.611Z" fill="white" />
												</svg>
											</i>
										</div>
									</div>

									<div class="b-video__label">
										Посмотрите <b>видео о&nbsp;нас</b>
									</div>
								</a>
							</div>
						</div>


                        <?if($not_mobile):?>
						<!-- items top -->
						<div class="main__items main__items_desctop main__items_1 d-none d-lg-block">
							<div class="main__items-inner">
								<div class="main__items-scroll">
                                    <?  
                                        $coun_img_head = 1;
                                        $arSelect = Array("PREVIEW_PICTURE");
                                        $arFilter232 = Array("IBLOCK_ID"=>125, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "PROPERTY_CATEG_VALUE" => $filterNameHead, "PROPERTY_BTN_CORUSEL_VALUE" => 'Да');
                                        $res232 = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter232, false, Array('nPageSize' => $filterCountHead), $arSelect);
                                        while($ob = $res232->GetNextElement())
                                        {
                                            
                                            if(($coun_img_head % 2) == 0) {
                                                $arElement = $ob->GetFields();
                                                
                                                $arElement["PREVIEW_PICTURE"] = CFile::GetFileArray($arElement["PREVIEW_PICTURE"]);
                                                // var_dump($arElement['PREVIEW_PICTURE']);
                                                $arElement['PREVIEW_PICTURE'] = Pict::getWebp($arElement['PREVIEW_PICTURE']);
                                                $srcImg = CFile::GetPath($arElement["PREVIEW_PICTURE"]);?>
                                                    
                                                    <div class="main__items-item">
                                                        <div class="main__items-img b-img">
                                                            <picture>
                                                                <source type="image/webp" srcset="<?=$arElement['PREVIEW_PICTURE']['WEBP_SRC']?>">
                                                                <source type="<?=$arElement['PREVIEW_PICTURE']['CONTENT_TYPE']?>" srcset="<?=$arElement['PREVIEW_PICTURE']['SRC']?>">
                                                                <img src="<?=$arElement['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arElement['PREVIEW_PICTURE']['ALT']?>">
                                                            </picture>
                                                        </div>
                                                    </div>
                                                
                                                <?
                                            }
                                            $coun_img_head++;
                                        }
                                    ?>
								</div>
							</div>
						</div>
						<!-- /items top -->
						<!-- items bottom -->
						<div class="main__items main__items_desctop main__items_2 d-none d-lg-block">
							<div class="main__items-inner">
								<div class="main__items-scroll">
                                    <?  
                                        $coun_img_head = 1;
                                        $arSelect = Array("PREVIEW_PICTURE");
                                        $arFilter232 = Array("IBLOCK_ID"=>125, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "PROPERTY_CATEG_VALUE" => $filterNameHead, "PROPERTY_BTN_CORUSEL_VALUE" => 'Да');
                                        $res232 = CIBlockElement::GetList(Array("SORT"=>"ASC"), $arFilter232, false, Array('nPageSize' => $filterCountHead), $arSelect);
                                        while($ob = $res232->GetNextElement())
                                        {
                                            if(($coun_img_head % 2) != 0) {
                                                $arElement = $ob->GetFields();
                                                
                                                $arElement["PREVIEW_PICTURE"] = CFile::GetFileArray($arElement["PREVIEW_PICTURE"]);
                                                // var_dump($arElement['PREVIEW_PICTURE']);
                                                $arElement['PREVIEW_PICTURE'] = Pict::getWebp($arElement['PREVIEW_PICTURE']);
                                                $srcImg = CFile::GetPath($arElement["PREVIEW_PICTURE"]);?>
                                                    
                                                    <div class="main__items-item">
                                                        <div class="main__items-img b-img">
                                                            <picture>
                                                                <source type="image/webp" srcset="<?=$arElement['PREVIEW_PICTURE']['WEBP_SRC']?>">
                                                                <source type="<?=$arElement['PREVIEW_PICTURE']['CONTENT_TYPE']?>" srcset="<?=$arElement['PREVIEW_PICTURE']['SRC']?>">
                                                                <img src="<?=$arElement['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arElement['PREVIEW_PICTURE']['ALT']?>">
                                                            </picture>
                                                        </div>
                                                    </div>
                                                
                                                <?
                                            }
                                            $coun_img_head++;
                                        }
                                    ?>
								</div>
							</div>
						</div>
						<!-- /items bottom -->
                        <?else:?>
						<!-- items mobile -->
                        <script>
                            let imgArray = [];
                            let imgArraySrc = [];
                            let i;
                            let imggif = document.querySelector('.main__items-scroll2');
                        </script>
						<div class="main__items main__items_mobile d-block d-lg-none">
							<div class="main__items-scroll111111111 main__items-scroll2"> 
                                    <?  
                                        $arSelect = Array("ID", "PROPERTY_1038");
                                        $arFilter232 = Array("IBLOCK_ID"=>126, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "ID" => 1450);
                                        $res232 = CIBlockElement::GetList(Array(), $arFilter232, false, Array(), $arSelect);
                                        while($ob = $res232->Fetch())
                                        {
                                                //$arElement = $ob->GetFields();
                                                //$srcImg = CFile::GetPath($arElement["PREVIEW_PICTURE"]);
                                            foreach ($ob["PROPERTY_1038_VALUE"] as $key => $img) {
												
                                                // $srcImg = CFile::GetPath($img);
                                                // echo $srcImg;
                                                $arElement["PREVIEW_PICTURE"] = CFile::GetFileArray($img);
                                                // var_dump($arElement['PREVIEW_PICTURE']);
                                                $arElement['PREVIEW_PICTURE'] = Pict::getWebp($arElement['PREVIEW_PICTURE']);
                                                ?>
                                                <script>
                                                    
                                                    if (imgArray.length != 0) {
                                                        i = imgArray.length - 1;
                                                    } else {
                                                        i = 0;
                                                    }
                                                    imgArray.push(document.createElement('img'));
                                                    <?if($os == "Mac") {?>
                                                        imgArray[i].src = "<?=$arElement['PREVIEW_PICTURE']['SRC']?>";
                                                        imgArraySrc[i] = "<?=$arElement['PREVIEW_PICTURE']['SRC']?>"; 
													<?} else {?>
                                                        imgArray[i].src = "<?=$arElement['PREVIEW_PICTURE']['WEBP_SRC']?>";
                                                        imgArraySrc[i] = "<?=$arElement['PREVIEW_PICTURE']['WEBP_SRC']?>"; 
                                                    <?}?>
                                                </script>
                                                <?
                                            }
                                        }
                                    ?>
                                    <script>
                                        for (let index = 0; index < imgArray.length; index++) {
                                            imgArray[index].onload = function() {
                                                console.log('загрузил:' + index);
                                                let $elem = document.createElement('div');
                                                $elem.classList.add('main__items-item');
                                                $elem.innerHTML = '<div class="main__items-img b-img"><img class="js-lazy2 entered loaded no-absolute" src="'+imgArraySrc[index]+'" alt=""></div>'
                                                imggif.append($elem);
                                            };
                                        }
                                    </script>
                            </div>
                        </div>
                        <!-- /items mobile -->
                        <?endif;?>
						<div class="main__btn b-text-btn js-main-video">
							<div class="b-text-btn__text">
								<b>Получите расчет стоимости сайта</b>
								с&nbsp;анализом ваших конкурентов
							</div>
							<div class="b-text-btn__btn">
								<a href="#popupQuiz" class="btn js-fancybox js-poluchit-raschet-button" data-form="Получить расчет">
									<span class="btn__center">
										<span class="btn__text b-icon b-icon_right b-icon_btn b-icon_white b-icon_arrow">
											<i class="b-icon__icon"></i>
											<span class="b-icon__text">
												Получить расчет
											</span>
										</span>
									</span>
								</a>
								<!-- <div class="b-video main__btn-video main__btn-video_1">
									<a href="#popupVideo-2" data-src="RK1K2bCg4J8" class="b-video__link js-video js-fancybox">
										<i class="b-video__play">
											<svg width="70" height="50" viewBox="0 0 70 50" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M68.5578 8.28036C67.7508 5.28164 65.3865 2.91791 62.3884 2.11042C56.9105 0.611328 34.9993 0.611328 34.9993 0.611328C34.9993 0.611328 13.0886 0.611328 7.61083 2.05328C4.67032 2.86024 2.24838 5.28218 1.44142 8.28036C3.8147e-06 13.7576 3.8147e-06 25.117 3.8147e-06 25.117C3.8147e-06 25.117 3.8147e-06 36.5335 1.44142 41.9536C2.24891 44.9518 4.61264 47.3161 7.61136 48.1236C13.1463 49.6227 34.9999 49.6227 34.9999 49.6227C34.9999 49.6227 56.9105 49.6227 62.3884 48.1807C65.3871 47.3737 67.7508 45.0095 68.5583 42.0113C69.9997 36.5335 69.9997 25.1747 69.9997 25.1747C69.9997 25.1747 70.0574 13.7576 68.5578 8.28036Z" fill="#EF430D" />
												<path d="M28.0229 35.611L46.2433 25.1168L28.0229 14.6226V35.611Z" fill="white" />
											</svg>
										</i>
										<div class="b-video__label">
											Посмотрите <b>видео о&nbsp;нас</b>
										</div>
									</a>
								</div> -->
                                <div class="b-video main__btn-video main__btn-video_2">
									<div class="main__btn-video-close js-main-video-close"></div>
									<a href="#popupVideo" data-src="nxrPy4Czdac" class="b-video__link js-video js-fancybox js-video-o-nas-verh-klik">
										<div class="b-video__img b-img">
											<div class="b-video__video">
												<!-- <video width="320" height="240" autoplay muted loop class="b-img__img">
													<source src="<?=SITE_TEMPLATE_PATH?>/img/main/video.mp4" type="video/mp4">
												</video> -->
                                                <img src="<?=SITE_TEMPLATE_PATH?>/img/video.gif" alt="">
											</div>
											<div class="b-video__img-center">
												<i class="b-video__play">
													<svg width="70" height="50" viewBox="0 0 70 50" fill="none" xmlns="http://www.w3.org/2000/svg">
														<path d="M68.5578 8.28036C67.7508 5.28164 65.3865 2.91791 62.3884 2.11042C56.9105 0.611328 34.9993 0.611328 34.9993 0.611328C34.9993 0.611328 13.0886 0.611328 7.61083 2.05328C4.67032 2.86024 2.24838 5.28218 1.44142 8.28036C3.8147e-06 13.7576 3.8147e-06 25.117 3.8147e-06 25.117C3.8147e-06 25.117 3.8147e-06 36.5335 1.44142 41.9536C2.24891 44.9518 4.61264 47.3161 7.61136 48.1236C13.1463 49.6227 34.9999 49.6227 34.9999 49.6227C34.9999 49.6227 56.9105 49.6227 62.3884 48.1807C65.3871 47.3737 67.7508 45.0095 68.5583 42.0113C69.9997 36.5335 69.9997 25.1747 69.9997 25.1747C69.9997 25.1747 70.0574 13.7576 68.5578 8.28036Z" fill="#EF430D" />
														<path d="M28.0229 35.611L46.2433 25.1168L28.0229 14.6226V35.611Z" fill="white" />
													</svg>
												</i>
											</div>
										</div>

										<div class="b-video__label">
											Посмотрите <b>видео о&nbsp;нас</b>
										</div>
									</a>
								</div>
							</div>
							<div class="b-text-btn__img b-text-btn__img_position d-none d-lg-block img-scale">
								<picture>
									<!-- <source srcset="<?=SITE_TEMPLATE_PATH?>/img/bg/main-btn-img.webp" type="image/webp"> -->
									<img src="<?=SITE_TEMPLATE_PATH?>/img/bg/main-btn-img2.png" alt>
								</picture>
							</div>
							<div class="b-text-btn__img b-text-btn__img_position d-block d-lg-none">
								<picture>
									<source srcset="<?=SITE_TEMPLATE_PATH?>/img/bg/main-btn-img_mobile.webp" type="image/webp">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/bg/main-btn-img_mobile.png" alt>
								</picture>
							</div>
						</div>
					</div>
					<!-- main text -->
				</div>
				<div class="col-xl-7 col-lg-6 col-md-6 col-12 d-none d-md-block align-self-end">

				</div>
			</div>
		</div>
		<!-- /main -->
	</div>
</section>
<!-- /main section -->
<div class="js-header-fixed"></div>

<!-- offer section -->
<section class="s-offer s-offer_1 section" id="offer-1">
	<div class="container">
		<!-- offer -->
		<div class="offer offer_1 s-offer__offer">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-12 ml-auto">
					<!-- offer text -->
					<div class="offer__text">
						<div class="section-title section-title_left offer__title">
							<h2 class="section-title__title h2">
								<span class="b-text-color">сколько клиентов</span> приведёт&nbsp;сайт?
							</h2>
						</div>
						<div class="offer__descr b-text-descr b-text-descr_fz-18">
							<p>
								<b>Сделаем расчет</b> спроса в интернете и&nbsp;<b>прогноз <br>
									количества клиентов.</b>
							</p>
						</div>
						<div class="offer__btn b-text-btn">
							<div class="b-text-btn__btn">
								<a href="#popupQuiz" class="btn js-fancybox js-poluchit-analiz-button" data-form="Получить расчет и анализ спроса">
									<span class="btn__center">
										<span class="btn__text b-icon b-icon_right b-icon_btn b-icon_white b-icon_arrow">
											<i class="b-icon__icon"></i>
											<span class="b-icon__text">
												Получить расчет и&nbsp;анализ&nbsp;спроса
											</span>
										</span>
									</span>
								</a>
								<div class="b-text-btn__img b-text-btn__img_position">
									<picture>
										<source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-1-btn.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
										<img data-src="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-1-btn.png" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
									</picture>
								</div>
							</div>
							<div class="b-text-btn__text">
								<div class="b-icon b-icon_fz-14 b-icon_info">
									<i class="b-icon__icon"></i>
									<div class="b-icon__text">
                                        Ответьте на несколько вопросов и мы проведем анализ<br> Вашей ситуации. 
										Результат отправим <b>в формате PDF</b> в течение 1-го дня.
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /offer text -->
				</div>
			</div>
		</div>
		<!-- /offer -->
	</div>
	<!-- offer img -->
	<div class="s-offer__bg-img s-offer__bg-img_1 b-bg-img b-bg-img_left">
        <?if($not_mobile):?>
		<div class="d-none d-md-block">
			<picture>
				<source srcset="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-img.webp" type="image/webp">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-img.png" alt>
			</picture>
		</div>
        <?else:?>
		<div class="d-block d-md-none">
			<picture>
				<source srcset="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-img-small.webp" type="image/webp">
				<img src="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-img-small.jpg" alt>
			</picture>
		</div>
        <?endif;?>
		<div class="b-bg-img__text">
			<div class="b-bg-img__title h5">
				Леонид Апполонов
			</div>
			<div class="b-bg-img__descr">
				основатель “Кейт и Лео”
			</div>
		</div>
	</div>
	<!-- offer img -->
</section>
<!-- /offer section -->

<section class="s-sites section" >
    <div class="container">

        <!-- sites title -->

        <div class="section-title s-sites__title" id="sites">
            <h2 class="section-title__title h2">
                <?
                    $count_sites = 0;
                    $arFilter = Array("IBLOCK_ID"=>125, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "PROPERTY_CATEG_VALUE" => ''); //PROPERTY_CATEG_VALUE указать категорию
                    $res2 = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
                    while ($ob2 = $res2->GetNext()) {
                        $count_sites++;
                    }
                ?>
                <!-- Создали <span class="b-text-color"><?=$count_sites .' '.plural_form($count_sites,['сайт','сайта','сайтов'])?></span> -->
                Создали <span class="b-text-color">более 300 сайтов</span>
                
            </h2>
        </div>

        <!-- /sites title -->



        <!-- sites -->

        <div class="sites s-sites__sites">

            <!-- sites tabs -->

            <div class="b-tabs sites__tabs js-tabs">

                <!-- tabs tab -->

                <div class="b-tabs__tabs js-tabs-tabs">
                    <div class="b-tabs__tabs-inner b-tabs__tabs-inner_center">
                        <?  
                            $count_tab = 0;
                            $property_enums = CIBlockPropertyEnum::GetList(Array( "SORT"=>"ASC"), Array("IBLOCK_ID"=>125, "CODE"=>"CATEG"));
                            while ($enum_fields = $property_enums->GetNext()) {
                                $arSelect = Array("NAME");
                                $arFilter = Array("IBLOCK_ID"=>125, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "PROPERTY_CATEG_VALUE" => $enum_fields["VALUE"]);
                                $res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
                                $res3 = $res;
                                // var_dump($res);
                                if($ob = $res->GetNextElement())
                                {
                                    if ($count_tab == 0) {
                                        echo '<button class="b-tabs__tabs-item js-tabs-tabs-item js-active" data-index="'.$count_tab.'">' . $enum_fields["VALUE"] . '</button>';
                                    } else {
                                        echo '<button class="b-tabs__tabs-item js-tabs-tabs-item" data-index="'.$count_tab.'">' . $enum_fields["VALUE"] . '</button>';
                                    }
                                    $count_tab++;
                                }
                            }
                        ?>
                    </div>
                </div>

                <!-- /tabs tab -->

                <!-- tabs content -->

                <div class="b-tabs__content b-tabs__content_mt-lg js-tabs-content">
                    <?  
                        $countTabGlobal = 1;
                        $property_enums = CIBlockPropertyEnum::GetList(Array( "SORT"=>"ASC"), Array("IBLOCK_ID"=>125, "CODE"=>"CATEG"));
                        while ($enum_fields = $property_enums->GetNext()) {
                            $arSelect = Array("NAME");
                            $arFilter = Array("IBLOCK_ID"=>125, "ACTIVE_DATE"=>"Y", "ACTIVE"=>"Y", "PROPERTY_CATEG_VALUE" => $enum_fields["VALUE"]);
                            $res = CIBlockElement::GetList(Array(), $arFilter, false, Array(), $arSelect);
                            $res3 = $res;
                            // var_dump($res);
                            if($ob = $res->GetNextElement()): 
                                // $arFilter2= array();
                                $arFilter2 = array('PROPERTY_CATEG_VALUE' => $enum_fields["VALUE"]);
                                if($countTabGlobal == 1) {
                                    $countItems = 8;
                                } else {
                                    $countItems = 8;
                                }
                                $APPLICATION->IncludeComponent(
                                    "bitrix:news.list",
                                    "sub_sites",
                                    Array(
                                        "DISPLAY_DATE" => "Y",
                                        "DISPLAY_NAME" => "Y",
                                        "DISPLAY_PICTURE" => "Y",
                                        "DISPLAY_PREVIEW_TEXT" => "Y",
                                        "AJAX_MODE" => "Y",
                                        "IBLOCK_TYPE" => "new_klweb",
                                        "IBLOCK_ID" => "125",
                                        "NEWS_COUNT" => $countItems,
                                        "SORT_BY1" => "ACTIVE_FROM",
                                        "SORT_ORDER1" => "DESC",
                                        "SORT_BY2" => "SORT",
                                        "SORT_ORDER2" => "ASC",
                                        "FILTER_NAME" => "arFilter2",
                                        "USE_FILTER" => "Y",
                                        "FIELD_CODE" => Array("ID"),
                                        "PROPERTY_CODE" => Array("DESCRIPTION"),
                                        "LIST_PROPERTY_CODE" => array("CATEG","",""),
                                        "CHECK_DATES" => "Y",
                                        "DETAIL_URL" => "",
                                        "PREVIEW_TRUNCATE_LEN" => "",
                                        "ACTIVE_DATE_FORMAT" => "d.m.Y",
                                        "SET_TITLE" => "N",
                                        "SET_BROWSER_TITLE" => "N",
                                        "SET_META_KEYWORDS" => "N",
                                        "SET_META_DESCRIPTION" => "N",
                                        "SET_LAST_MODIFIED" => "N",
                                        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                        "ADD_SECTIONS_CHAIN" => "N",
                                        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                        "PARENT_SECTION" => "",
                                        "PARENT_SECTION_CODE" => "",
                                        "INCLUDE_SUBSECTIONS" => "Y",
                                        "CACHE_TYPE" => "N",
                                        "CACHE_TIME" => "3600",
                                        "CACHE_FILTER" => "Y",
                                        "CACHE_GROUPS" => "Y",
                                        "DISPLAY_TOP_PAGER" => "N",
                                        "DISPLAY_BOTTOM_PAGER" => "N",
                                        "PAGER_TITLE" => "Новости",
                                        "PAGER_SHOW_ALWAYS" => "Y",
                                        "PAGER_TEMPLATE" => "",
                                        "PAGER_DESC_NUMBERING" => "Y",
                                        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                        "PAGER_SHOW_ALL" => "Y",
                                        "PAGER_BASE_LINK_ENABLE" => "Y",
                                        "SET_STATUS_404" => "N",
                                        "SHOW_404" => "N",
                                        "MESSAGE_404" => "",
                                        "PAGER_BASE_LINK" => "",
                                        "PAGER_PARAMS_NAME" => "arrPager",
                                        "AJAX_OPTION_JUMP" => "N",
                                        "AJAX_OPTION_STYLE" => "Y",
                                        "AJAX_OPTION_HISTORY" => "N",
                                        "AJAX_OPTION_ADDITIONAL" => "",
                                        "DATA_FILTER" => $enum_fields["VALUE"]
                                    )
                                );
                            endif;
                            $countTabGlobal++;
                        }
                    ?>
                </div>

                <!-- /tabs content -->

            </div>

            <!-- sites tabs -->

        </div>

        <!-- /sites -->

    </div>
</section>

<!-- offer section -->
<section class="s-offer s-offer_2 section section_yellow bg-1 b-text-white" id="offer-2">
	<div class="section__yellow"></div>
	<div class="container">

		<!-- offer -->

		<div class="offer offer_2 s-offer__offer">
			<div class="row">
				<div class="col-lg-7 col-md-9 col-12">

					<!-- offer text -->

					<div class="offer__text">
						<div class="section-title section-title_left offer__title">
							<h2 class="section-title__title h2">
								Получите презентацию <span class="b-text-color">с&nbsp;результатами работы</span>
								наших&nbsp;сайтов
							</h2>
						</div>

                        <?if($mobile):?>

						<div class="s-offer__bg-img s-offer__bg-img_2 b-bg-img b-bg-img_right d-block d-md-none">
							<picture>
								<source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-2-img.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
								<img data-src="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-2-img.png" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
							</picture>
						</div>
                        <?endif;?>
						<div class="offer__btn b-text-btn b-text-btn_inline">
							<div class="b-text-btn__btn">
								<a href="#popupForm-1" class="btn js-fancybox js-poluchit-prezentaciyu-button" data-form="Получить презентацию" data-title="<span class='b-text-color'>Получите презентацию</span>" data-subtitle="Мы вышлем в ближайшее время" data-btn="получить презентацию">
									<span class="btn__center">
										<span class="btn__text b-icon b-icon_right b-icon_btn b-icon_white b-icon_arrow">
											<i class="b-icon__icon"></i>
											<span class="b-icon__text">
												Получить презентацию
											</span>
										</span>
									</span>
								</a>
							</div>

							<div class="b-text-btn__text b-text-btn__text_line b-text-btn__text_line-3 b-text-btn__text_pdf b-text-btn__text_fz-14">
								<div class="b-text-btn__text-text">
									<b class="b-text-color d-block">Отправим в формате PDF</b>
									в течение 1 дня.
								</div>
							</div>

						</div>
					</div>
					<!-- /offer text -->

				</div>
			</div>
		</div>

		<!-- /offer -->

	</div>
    <?if(!$mobile):?>
	<!-- offer img -->

	<div class="s-offer__bg-img s-offer__bg-img_2 b-bg-img b-bg-img_right d-none d-md-block">
		<picture>
			<source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-2-img.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
			<img data-src="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-2-img.png" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
		</picture>
	</div>

	<!-- offer img -->
    <?endif;?>

</section>
<!-- /offer section -->

<!-- steps section -->

<section class="s-steps section" id="steps">
    <div class="container">

        <!-- steps title -->

        <div class="section-title s-steps__title">
            <h2 class="section-title__title h2">
                <span class="b-text-color">Гарантируем заявки и звонки</span> от клиентов
            </h2>
        </div>

        <!-- /steps title -->


        <!-- steps -->

        <div class="steps s-steps__steps">

            <!-- steps items -->

            <div class="steps-items steps__items b-items">
                <div class="steps-items__item b-items__item">
                    <div class="steps-items__line">
                        <div class="steps-items__line-dot">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="steps-items__text">
                                <div class="steps-items__number">
                                    <div class="steps-items__number-inner">
                                        шаг 1
                                    </div>
                                </div>

                                <div></div>

                                <h3 class="steps-items__title h3">
                                    <span class="b-text-color">Определяем цель</span> создания сайта
                                </h3>

                                <div class="steps-items__descr b-text-descr">
                                    <div class="b-icon b-icon_yellow b-icon_info">
                                        <i class="b-icon__icon"></i>
                                        <div class="b-icon__text">
                                            Например: получать каждый месяц 50-60 заявок. <br>
                                            Цель должна быть адекватной: соответствовать спросу и&nbsp;бюджету на рекламу.
                                        </div>
                                    </div>
                                </div>

                                <div class="steps-items__link">
                                    <a href="#popupQuiz" class="link b-text-color js-fancybox js-skolko-zayavok-klik" data-form="Узнать, сколько заявок можно получить">
												<span class="link__underline">
													Узнать, сколько заявок можно получить
												</span>
                                    </a>

                                    <div class="steps-items__link-img steps-items__link-img_1">
                                        <picture>
                                            <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/bg/step-item-1-link.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/bg/step-item-1-link.png" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="steps-items__img steps-items__img b-img">
                                <picture>
                                    <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/steps/step-1.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/steps/step-1.jpg" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                </picture>
                                
                                <picture>
                                    <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/steps/step_l_1.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/steps/step_l_1.png" alt class="js-lazy levitation levitation1" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="steps-items__item b-items__item">
                    <div class="steps-items__line">
                        <div class="steps-items__line-dot">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="steps-items__text">
                                <div class="steps-items__number">
                                    <div class="steps-items__number-inner">
                                        шаг 2
                                    </div>
                                </div>

                                <div></div>

                                <h3 class="steps-items__title h3">
                                    <span class="b-text-color">Анализируем ваш бизнес</span> и&nbsp;ваших&nbsp;конкурентов
                                </h3>

                                <div></div>

                                <div class="steps-items__descr b-text-descr">
                                    <div class="b-icon b-icon_yellow b-icon_info">
                                        <i class="b-icon__icon"></i>
                                        <div class="b-icon__text">
                                            Возможно, достаточно мини-сайта и рекламы <br>
                                            в Инстаграм, чтобы получать 5-10 заявок в день. <br>
                                            А может, нужен корпоративный сайт с большим <br>
                                            числом страниц.
                                        </div>
                                    </div>
                                </div>

                                <div class="steps-items__link" style="display: none;">
                                    <a href="#popupForm-3" class="link b-text-color js-fancybox" data-form="Пример анализа конкурентов">
												<span class="link__underline">
													Пример анализа конкурентов
												</span>
                                    </a>

                                    <div class="steps-items__link-img steps-items__link-img_2">
                                        <picture>
                                            <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/bg/step-item-2-link.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/bg/step-item-2-link.png" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="steps-items__img steps-items__img b-img">
                                <picture>
                                    <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/steps/step-2.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/steps/step-2.jpg" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="steps-items__item b-items__item">
                    <div class="steps-items__line">
                        <div class="steps-items__line-dot">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="steps-items__text">
                                <div class="steps-items__number">
                                    <div class="steps-items__number-inner">
                                        шаг 3
                                    </div>
                                </div>

                                <div></div>

                                <h3 class="steps-items__title h3">
                                    <span class="b-text-color">Создаем структуру</span> для&nbsp;получения&nbsp;заявок,
                                </h3>

                                <h4 class="steps-items__subtitle h5">
                                    используем метод многошаговых продаж
                                </h4>

                                <div class="steps-items__descr b-text-descr">
                                    <div class="b-icon b-icon_yellow b-icon_info">
                                        <i class="b-icon__icon"></i>
                                        <div class="b-icon__text">
                                            Заинтересовываем, вызываем доверие и предлагаем <br>
                                            первый шаг: получить расчет, прайс-лист, консультацию <br>
                                            в&nbsp;обмен на номер телефона.
                                        </div>
                                    </div>
                                </div>

                                <div class="steps-items__link">
                                    <a href="#popupForm-1" class="link b-text-color js-fancybox js-primer-saytov-klik" data-form="Посмотреть примеры сайтов с результатами" data-title="<span class='b-text-color'>Получите презентацию&nbsp;работ</span>" data-subtitle="Мы вышлем в ближайшее время" data-btn="Получить презентацию работ">
												<span class="link__underline">
													Посмотреть примеры сайтов с&nbsp;результатами
												</span>
                                    </a>

                                    <div class="steps-items__link-img steps-items__link-img_3">
                                        <picture>
                                            <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/bg/step-item-3-link.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/bg/step-item-3-link.png" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="steps-items__img steps-items__img b-img">
                                <picture>
                                    <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/steps/step-3.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/steps/step-3.jpg" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                </picture>
                                
                                <picture>
                                    <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/steps/step_l_2.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/steps/step_l_2.png" alt class="js-lazy levitation" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="steps-items__item b-items__item">
                    <div class="steps-items__line">
                        <div class="steps-items__line-dot">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="steps-items__text">
                                <div class="steps-items__number">
                                    <div class="steps-items__number-inner">
                                        шаг 4
                                    </div>
                                </div>

                                <div></div>

                                <h3 class="steps-items__title h3">
                                    <span class="b-text-color">Приводим на сайт потенциальных&nbsp;клиентов</span>
                                </h3>

                                <div></div>

                                <div class="steps-items__descr b-text-descr">
                                    <div class="b-icon b-icon_yellow b-icon_info">
                                        <i class="b-icon__icon"></i>
                                        <div class="b-icon__text">
                                            <p>
                                                Например, человек набрал в поиске Яндекса: <br>
                                                "Стоимость ремонта квартир в Ульяновске". <br>
                                                Очень вероятно, что его интересует ремонт.
                                            </p>

                                            <p>
                                                Настраиваем рекламу и ведём продвижение там, <br>где есть Ваши клиенты.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="steps-items__img steps-items__img b-img">
                                <picture>
                                    <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/steps/step-4.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/steps/step-4.jpg" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="steps-items__item b-items__item">
                    <div class="steps-items__line">
                        <div class="steps-items__line-dot">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="steps-items__text">
                                <div class="steps-items__number">
                                    <div class="steps-items__number-inner">
                                        шаг 5
                                    </div>
                                </div>

                                <div></div>

                                <h3 class="steps-items__title h3">
                                    <span class="b-text-color">Вы гарантированно получаете заявки и звонки</span>
                                </h3>

                                <div class="steps-items__descr b-text-descr">
                                    <div class="b-icon b-icon_yellow b-icon_info">
                                        <i class="b-icon__icon"></i>
                                        <div class="b-icon__text">
                                            <p>
                                                Вам остается отвечать на звонки/перезванивать и продавать.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="steps-items__img steps-items__img b-img">
                                <picture>
                                    <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/steps/step-5.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/steps/step-5.jpg" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                </picture>
                                <picture>
                                    <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/steps/step_l_3.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/steps/step_l_3.png" alt class="js-lazy levitation" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                </picture>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /steps items -->

        </div>

        <!-- /steps -->

    </div>

</section>

<!-- /steps section -->

<?if($not_mobile):?>

<!-- offer 3 desctop section -->

<section class="s-offer s-offer_3 section section_yellow section_yellow-right bg-1 b-text-white d-none d-md-block" id="offer-3">
	<div class="section__yellow section__yellow_right"></div>
	<div class="container">

		<!-- offer -->

		<div class="offer offer_3 s-offer__offer">
			<div class="row">
				<div class="col-lg-7 col-md-8 col-12 ml-auto">

					<!-- offer text -->

					<div class="offer__text">
						<div class="section-title section-title_left offer__title">
							<h2 class="section-title__title h2">
								<span class="b-text-color">Если нет заявок и звонков</span> <br>
								мы&nbsp;возвращаем деньги по&nbsp;договору
							</h2>

							<h3 class="section-title__subtitle h4">
								Вы ничем не рискуете
							</h3>
						</div>

						<div class="offer__btn b-text-btn">
							<div class="b-text-btn__btn">
								<a href="#popupForm-1" class="btn js-fancybox js-garantiya-button" data-form="Подробнее про гарантию" data-title="<span class='b-text-color'>Подробнее про гарантию</span>" data-subtitle="Мы вышлем в ближайшее время" data-btn="Подробнее про гарантию">
									<span class="btn__center">
										<span class="btn__text b-icon b-icon_right b-icon_btn b-icon_white b-icon_arrow">
											<i class="b-icon__icon"></i>
											<span class="b-icon__text">
												Подробнее про гарантию
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>

				<!-- /offer text -->

			</div>
		</div>

		<!-- /offer -->

	</div>

	<!-- offer img -->

	<!-- <a href="#popupForm-4" class="s-offer__bg-img s-offer__bg-img_3 b-bg-img b-bg-img_left d-none d-md-block js-fancybox"> -->
	<a href="javascript:void(0);" class="s-offer__bg-img s-offer__bg-img_3 b-bg-img b-bg-img_left d-none d-md-block js-fancybox2">
		<picture>
			<source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-3-img.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
			<img data-src="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-3-img.png" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
		</picture>

		<div class="b-img-hover b-img-hover_2 b-img-hover_visible"  >
			<div class="s-offer__bg-img-label-info b-text-label b-text-label_3">
				<div class="b-text-label__text">
					Посмотреть <br>
					договор
				</div>
			</div>
		</div>
	</a>

	<!-- offer img -->

</section>

<!-- /offer 3 desctop section -->
<?else:?>
<!-- offer 3 mobile section -->

<section class="s-offer s-offer_3-2 section d-block d-md-none" id="offer-3-2">
	<div class="container">

		<!-- offer -->

		<div class="offer offer_4 s-offer__offer">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-12">

					<!-- offer text -->

					<div class="offer__text">
						<div class="section-title section-title_left section-title_mb-30 offer__title">
							<h2 class="section-title__title h2">
								Если нет заявок и&nbsp;звонков от&nbsp;потенциальных клиентов — <span class="b-text-color">мы&nbsp;возвращаем
									деньги по&nbsp;договору</span>
							</h2>
						</div>

						<a href="#popupForm-4" class="s-offer__bg-img s-offer__bg-img_3 b-bg-img b-bg-img_left d-block d-md-none js-fancybox">
							<picture>
								<source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-3-img.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
								<img data-src="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-3-img.png" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
							</picture>

							<div class="b-img-hover b-img-hover_2 b-img-hover_visible" >
								<div class="s-offer__bg-img-label-info b-text-label b-text-label_3">
									<div class="b-text-label__text">
										Посмотреть <br>
										договор
									</div>
								</div>
							</div>
						</a>

						<div class="offer__btn b-text-btn">
							<div class="b-text-btn__btn">
								<a href="#popupForm-1" class="btn js-fancybox js-garantiya-button" data-form="Подробнее про гарантию" data-title="<span class='b-text-color'>Подробнее про гарантию</span>" data-subtitle="Мы вышлем в ближайшее время" data-btn="Подробнее про гарантию">
									<span class="btn__center">
										<span class="btn__text b-icon b-icon_right b-icon_btn b-icon_white b-icon_arrow">
											<i class="b-icon__icon"></i>
											<span class="b-icon__text">
												Подробнее про гарантию
											</span>
										</span>
									</span>
								</a>
							</div>
						</div>
					</div>
				</div>

				<!-- /offer text -->

			</div>
		</div>

		<!-- /offer -->

	</div>

	<!-- offer img -->

	<div class="s-offer__bg-img s-offer__bg-img_4 b-bg-img b-bg-img_right d-none d-md-block">
		<picture>
			<source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-4-img.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
			<img data-src="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-4-img.png" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
		</picture>

		<picture>
			<source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-4-img-money-1.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
			<img data-src="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-4-img-money-1.png" alt class="img-money img-money_1 animation-float-2 js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
		</picture>
		<picture>
			<source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-4-img-money-2.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
			<img data-src="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-4-img-money-2.png" alt class="img-money img-money_2 animation-float-2 js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
		</picture>
		<picture>
			<source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-4-img-money-3.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
			<img data-src="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-4-img-money-3.png" alt class="img-money img-money_3 animation-float-2 js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
		</picture>
	</div>

	<!-- offer img -->

</section>

<!-- /offer 3 mobile section -->
<?endif;?>

<!-- offer section -->

<section class="s-offer s-offer_4 section" id="offer-4">
	<div class="container">

		<!-- offer -->

		<div class="offer offer_4 s-offer__offer">
			<div class="row">
				<div class="col-lg-7 col-md-7 col-12">

					<!-- offer text -->

					<div class="offer__text">
						<div class="section-title section-title_left section-title_mb-30 offer__title">
							<h2 class="section-title__title h2">
								Сколько стоит <span class="b-text-color">создание&nbsp;сайта?</span>
							</h2>

							<h3 class="section-title__subtitle section-title__subtitle_fw-500 h4">
								Если Вы ищете по самой низкой цене — это&nbsp;не&nbsp;к&nbsp;нам.
							</h3>
						</div>

                        <?if($mobile):?>

						<div class="s-offer__bg-img s-offer__bg-img_4 b-bg-img b-bg-img_right d-block d-md-none">
							<picture>
								<source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-4-img.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
								<img data-src="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-4-img.png" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
							</picture>
						</div>
                        <?endif;?>
						<div class="offer__descr b-text-descr b-text-descr_fz-18">
							<p>
								Мы <b>погрузимся в Ваш бизнес,</b> Вашу модель продаж, сделаем
								сайт и настроим рекламу. Все это позволит Вам гарантированно
                                получать больше клиентов.
							</p>
						</div>

						<div class="offer__btn b-text-btn b-text-btn_inline">
							<div class="b-text-btn__btn">
								<a href="#popupQuiz" class="btn js-fancybox js-uznat-stoimost-button" data-form="Узнать стоимость">
									<span class="btn__center">
										<span class="btn__text b-icon b-icon_right b-icon_btn b-icon_white b-icon_arrow">
											<i class="b-icon__icon"></i>
											<span class="b-icon__text">
												Узнать стоимость
											</span>
										</span>
									</span>
								</a>

								<div class="b-text-btn__img b-text-btn__img_position">
									<picture>
										<source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-4-btn.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
										<img data-src="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-4-btn.png" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
									</picture>
								</div>
							</div>

							<div class="b-text-btn__text b-text-btn__text_line b-text-btn__text_line-3 b-text-btn__text_fz-14">
								<div class="b-text-btn__text-text">
									<b class="b-text-color d-block">Отправим в формате&nbsp;PDF</b>
									в течение 1 дня.
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- /offer text -->

			</div>
		</div>

		<!-- /offer -->

	</div>
    <?if($not_mobile):?>
	<!-- offer img -->

	<div class="s-offer__bg-img s-offer__bg-img_4 b-bg-img b-bg-img_right d-none d-md-block">
		<picture>
			<source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-4-img.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
			<img data-src="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-4-img.png" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
		</picture>

		<picture>
			<source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-4-img-money-1.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
			<img data-src="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-4-img-money-1.png" alt class="img-money img-money_1 animation-float-2 js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
		</picture>
		<picture>
			<source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-4-img-money-2.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
			<img data-src="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-4-img-money-2.png" alt class="img-money img-money_2 animation-float-2 js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
		</picture>
		<picture>
			<source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-4-img-money-3.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
			<img data-src="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-4-img-money-3.png" alt class="img-money img-money_3 animation-float-2 js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
		</picture>
	</div>

	<!-- offer img -->
    <?endif;?>

</section>

<!-- /offer section -->

<!-- gallery section -->

<section class="s-gallery section" >
    <div class="container">

        <!-- gallery title -->

        <div class="section-title s-gallery__title" id="gallery">
            <h2 class="section-title__title h2">
                <span class="b-text-color"><?=date(Y)-2014?> лет</span> приводим клиентов
            </h2>
        </div>

        <!-- /gallery title -->

        <!-- gallery -->

        <div class="gallery s-gallery__gallery">
            <div class="gallery__gallery js-gallery">

                <!-- gallery full -->

                <div class="gallery-items gallery__items b-items b-items_slider">
                    <div class="gallery-items__slider js-slider-gallery">
                        <div >
                            <div class="gallery-items__item b-items__item">
                                <a href="#popupVideo" data-src="nxrPy4Czdac" class="js-video js-fancybox js-video-o-kompanii-klik">
                                    <div class="gallery-items__img b-img">
                                        <picture>
                                            <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/gallery/office-2-2.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/gallery/office-2-2.jpg" alt class="js-lazy-v2" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                        </picture>

                                        <div class="b-img__label">
                                            <div class="b-img__label-bg">
                                                <div class="b-img__label-text">
                                                    Посмотрите видео о нашей компании
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wrap_opacity"></div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="136" height="84" viewBox="0 0 136 84" fill="none" class="youtube_btn">
                                            <path d="M133.112 13.1085C131.546 7.98287 126.955 3.9426 121.134 2.56237C110.498 0 67.955 0 67.955 0C67.955 0 25.413 0 14.7772 2.46469C9.06792 3.84401 4.36546 7.98378 2.79867 13.1085C0 22.4707 0 41.887 0 41.887C0 41.887 0 61.401 2.79867 70.6655C4.3665 75.7903 8.95594 79.8315 14.7783 81.2117C25.525 83.7741 67.956 83.7741 67.956 83.7741C67.956 83.7741 110.498 83.7741 121.134 81.3094C126.956 79.93 131.546 75.8889 133.113 70.7641C135.912 61.401 135.912 41.9856 135.912 41.9856C135.912 41.9856 136.024 22.4707 133.112 13.1085Z" fill="#EF430D"/>
                                            <path d="M53 63L87 43.5L53 24V63Z" fill="white"/>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="gallery-items__item b-items__item">
                                <div class="gallery-items__img b-img">
                                    <picture>
                                        <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/gallery/office-1-1.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                        <img data-src="<?=SITE_TEMPLATE_PATH?>/img/gallery/office-1-1.jpg" alt class="js-lazy-v2" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                    </picture>
                                    <div class="b-img__label">
                                        <div class="b-img__label-bg">
                                            <div class="b-img__label-text">
                                                Наша команда
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="gallery-items__item b-items__item">
                                <div class="gallery-items__img b-img">
                                    <picture>
                                        <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/gallery/office-3-3.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                        <img data-src="<?=SITE_TEMPLATE_PATH?>/img/gallery/office-3-3.jpg" alt class="js-lazy-v2" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                    </picture>
                                    <div class="b-img__label">
                                        <div class="b-img__label-bg">
                                            <div class="b-img__label-text">
                                                Наша команда
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="gallery-items__item b-items__item">
                                <div class="gallery-items__img b-img">
                                    <picture>
                                        <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/gallery/office-4-4.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                        <img data-src="<?=SITE_TEMPLATE_PATH?>/img/gallery/office-4-4.jpg" alt class="js-lazy-v2" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                    </picture>
                                    <div class="b-img__label">
                                        <div class="b-img__label-bg">
                                            <div class="b-img__label-text">
                                                Наша команда
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="gallery-items__item b-items__item">
                                <div class="gallery-items__img b-img">
                                    <picture>
                                        <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/gallery/office-5-5.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                        <img data-src="<?=SITE_TEMPLATE_PATH?>/img/gallery/office-5-5.jpg" alt class="js-lazy-v2" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                    </picture>
                                    <div class="b-img__label">
                                        <div class="b-img__label-bg">
                                            <div class="b-img__label-text">
                                                Наша команда
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="gallery-items__item b-items__item">
                                <div class="gallery-items__img b-img">
                                    <picture>
                                        <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/gallery/office-1-1.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                        <img data-src="<?=SITE_TEMPLATE_PATH?>/img/gallery/office-1-1.jpg" alt class="js-lazy-v2" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                    </picture>
                                    <div class="b-img__label">
                                        <div class="b-img__label-bg">
                                            <div class="b-img__label-text">
                                                Наша команда
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="gallery-items__item b-items__item">
                                <div class="gallery-items__img b-img">
                                    <picture>
                                        <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/gallery/office-2-2.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                        <img data-src="<?=SITE_TEMPLATE_PATH?>/img/gallery/office-2-2.jpg" alt class="js-lazy-v2" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                    </picture>
                                    <div class="b-img__label">
                                        <div class="b-img__label-bg">
                                            <div class="b-img__label-text">
                                                Наша команда
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="gallery-items__item b-items__item">
                                <div class="gallery-items__img b-img">
                                    <picture>
                                        <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/gallery/office-3-3.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                        <img data-src="<?=SITE_TEMPLATE_PATH?>/img/gallery/office-3-3.jpg" alt class="js-lazy-v2" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                    </picture>
                                    <div class="b-img__label">
                                        <div class="b-img__label-bg">
                                            <div class="b-img__label-text">
                                                Наша команда
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- gallery full -->

            </div>

            <div class="gallery__text">
                <div class="gallery__text-descr b-text-descr b-text-descr_fz-18 width100">
                    <div class="b-icon b-icon_yellow b-icon_info">
                        <i class="b-icon__icon"></i>
                        <div class="b-icon__text">
                            <p>
                                Мы <b>погрузимся в Ваш бизнес,</b> Вашу модель продаж, сделаем сайт и настроим
                                рекламу. Все это позволит Вам гарантированно получать больше клиентов.
                            </p>

                            <p>
                                Мы — живые, реальные люди, <b>не прячемся</b> от клиентов за мониторами
                                <b>и&nbsp;не&nbsp;скрываем</b> адрес.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- <div class="gallery__text-btn">
                    <a href="#popupForm-1" class="btn btn_black btn_sm btn_shadow-none js-fancybox" data-form="подробнее">
								<span class="btn__center">
									<span class="btn__text b-icon b-icon_right b-icon_btn b-icon_white b-icon_arrow">
										<i class="b-icon__icon"></i>
										<span class="b-icon__text">
											подробнее
										</span>
									</span>
								</span>
                    </a>
                </div> -->
            </div>
        </div>

        <!-- gallery -->

    </div>
</section>

<!-- /gallery section -->


<!-- team section -->

<section class="s-team section" id="team">
    <div class="container">

        <!-- team title -->

        <div class="section-title s-team__title">
            <h2 class="section-title__title h2">
                <span class="b-text-color">Наша команда</span>
            </h2>
        </div>

        <!-- /team title -->


        <!-- team -->

        <div class="team s-team__team">
            <div class="team__label-info b-text-label b-text-label_4">
                <div class="b-text-label__text">
                    Свайпни
                </div>
            </div>

            <!-- team items -->

            <div class="team-items team__items b-items">
                <div class="team-items__slider slick-slider_shadow js-slider-team">
                    <div>
                        <div class="team-items__item b-items__item">
                            <div class="team-items__img b-img">
                                <picture>
                                    <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/team/irina-photo.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/team/irina-photo.jpg" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                </picture>
                            </div>
                            <div class="team-items__text">
                                <div class="team-items__title h5">
                                    Дизайнер
                                </div>

                                <div class="team-items__descr b-text-descr">
                                    <ul>
                                        <li>
                                            Ирина Давыдова
                                        </li>
                                        <li>
                                            6 лет опыта
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="team-items__item b-items__item">
                            <div class="team-items__img b-img">
                                <picture>
                                    <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/team/vas-photo.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/team/vas-photo.jpg" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                </picture>
                            </div>
                            <div class="team-items__text">
                                <div class="team-items__title h5">
                                    Разработчик
                                </div>

                                <div class="team-items__descr b-text-descr">
                                    <ul>
                                        <li>
                                            Василий Климанов
                                        </li>
                                        <li>
                                            4 года опыта
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="team-items__item b-items__item">
                            <div class="team-items__img b-img">
                                <picture>
                                    <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/team/leonid-photo.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/team/leonid-photo.jpg" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                </picture>
                            </div>
                            <div class="team-items__text">
                                <div class="team-items__title h5">
                                    Ген. директор
                                </div>

                                <div class="team-items__descr b-text-descr">
                                    <ul>
                                        <li>
                                            Леонид Апполонов
                                        </li>
                                        <li>
                                            7 лет опыта
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="team-items__item b-items__item">
                            <div class="team-items__img b-img">
                                <picture>
                                    <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/team/alex-photo.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/team/alex-photo.jpg" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                </picture>
                            </div>
                            <div class="team-items__text">
                                <div class="team-items__title h5">
                                    Отдел рекламы
                                </div>

                                <div class="team-items__descr b-text-descr">
                                    <ul>
                                        <li>
                                            Александр Лукашин
                                        </li>
                                        <li>
                                            4 года опыта
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="team-items__item b-items__item">
                            <div class="team-items__img b-img">
                                <picture>
                                    <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/team/leisan_photo.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/team/leisan_photo.jpg" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                </picture>
                            </div>
                            <div class="team-items__text">
                                <div class="team-items__title h5">
                                    Отдел разработки
                                </div>

                                <div class="team-items__descr b-text-descr">
                                    <ul>
                                        <li>
                                            Лейсан Туктамышева
                                        </li>
                                        <li>
                                            2 года опыта
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /team items -->

        </div>

        <!-- /team -->

    </div>
</section>

<!-- /team section -->


<!-- reviews section -->

<section class="s-reviews section bg-1 b-text-white" id="reviews">
    <div class="container">

        <!-- reviews title -->

        <div class="section-title section-title_left s-reviews__title">
            <h2 class="section-title__title h2">
                Посмотрите <span class="b-text-color">реальные отзывы</span> о нас
            </h2>
        </div>

        <!-- /reviews title -->

        <!-- reviews -->

        <div class="reviews s-reviews__reviews js-more" data-more-xl="3,3" data-more-lg="3,3" data-more-md="2,2" data-more-sm="2,2" data-more-xs="2,2">

            <!-- reviews items -->

            <div class="reviews-items reviews__items b-items b-text-dark">
                <div class="row justify-content-center">

                    <div class="col-lg-4 col-md-6 col-12 js-more-item2">
                        <div class="reviews-items__item b-items__item">
                            <a href="#popupVideo" data-src="UUZcfWOYfDs"  data-src-mobile="jhXhL42tbVs" class="reviews-items__img b-img js-fancybox js-video js-video-otzivi-klik">
                                <picture>
                                    <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/reviews/1preview.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/reviews/1preview.jpg" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                </picture>
                                <div class="b-img-hover b-img-hover_video b-img-hover_visible"></div>
                            </a>

                            <div class="reviews-items__text">
                                <div class="reviews-items__text-top">
                                    <div class="reviews-items__starts b-stars">
                                        <ul class="b-stars__items">
                                            <li class="b-stars__item b-stars__item_active"></li>
                                            <li class="b-stars__item b-stars__item_active"></li>
                                            <li class="b-stars__item b-stars__item_active"></li>
                                            <li class="b-stars__item b-stars__item_active"></li>
                                            <li class="b-stars__item"></li>
                                        </ul>
                                    </div>

                                    <!-- <div class="reviews-items__logo">
                                        <picture>
                                            <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/reviews/1-logo.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/reviews/1-logo.jpg" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                        </picture>
                                    </div> -->
                                </div>

                                <div class="reviews-items__author b-author b-author_sm">
                                    <div class="b-author__img">
                                        <picture>
                                            <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/reviews/1icon.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/reviews/1icon.jpg" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                        </picture>
                                    </div>

                                    <div class="b-author__text">
                                        <div class="b-author__name h5">
                                            Максим Валеев
                                        </div>

                                        <div class="b-author__position">
                                            Генеральный директор <br>
                                            "Мосцентргаз"
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 js-more-item2">
                        <div class="reviews-items__item b-items__item">
                            <a href="#popupVideo" data-src="w-xs5cZ3Uqk"  data-src-mobile="sdkq4WeXZgA" class="reviews-items__img b-img js-fancybox js-video js-video-otzivi-klik">
                                <picture>
                                    <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/reviews/2preview.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/reviews/2preview.jpg" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                </picture>

                                <div class="b-img-hover b-img-hover_video b-img-hover_visible"></div>
                            </a>

                            <div class="reviews-items__text">
                                <div class="reviews-items__text-top">
                                    <div class="reviews-items__starts b-stars">
                                        <ul class="b-stars__items">
                                            <li class="b-stars__item b-stars__item_active"></li>
                                            <li class="b-stars__item b-stars__item_active"></li>
                                            <li class="b-stars__item b-stars__item_active"></li>
                                            <li class="b-stars__item b-stars__item_active"></li>
                                            <li class="b-stars__item"></li>
                                        </ul>
                                    </div>

                                    <!-- <div class="reviews-items__logo">
                                        <picture>
                                            <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/reviews/1-logo.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/reviews/1-logo.jpg" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                        </picture>
                                    </div> -->
                                </div>

                                <div class="reviews-items__author b-author b-author_sm">
                                    <div class="b-author__img">
                                        <picture>
                                            <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/reviews/2icon.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/reviews/2icon.jpg" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                        </picture>
                                    </div>

                                    <div class="b-author__text">
                                        <div class="b-author__name h5">
                                        Николай Кондрахин
                                        </div>

                                        <div class="b-author__position">
                                            Совладелец магазина <br>
                                            "VKorobke"
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 js-more-item2">
                        <div class="reviews-items__item b-items__item">
                            <a href="#popupVideo" data-src="ib-Hj0oOcEk" data-src-mobile="ojNPGvJTDNM" class="reviews-items__img b-img js-fancybox js-video js-video-otzivi-klik">
                                <picture>
                                    <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/reviews/3preview.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/reviews/3preview.jpg" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                </picture>

                                <div class="b-img-hover b-img-hover_video b-img-hover_visible"></div>
                            </a>

                            <div class="reviews-items__text">
                                <div class="reviews-items__text-top">
                                    <div class="reviews-items__starts b-stars">
                                        <ul class="b-stars__items">
                                            <li class="b-stars__item b-stars__item_active"></li>
                                            <li class="b-stars__item b-stars__item_active"></li>
                                            <li class="b-stars__item b-stars__item_active"></li>
                                            <li class="b-stars__item b-stars__item_active"></li>
                                            <li class="b-stars__item"></li>
                                        </ul>
                                    </div>

                                    <!-- <div class="reviews-items__logo">
                                        <picture>
                                            <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/reviews/1-logo.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/reviews/1-logo.jpg" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                        </picture>
                                    </div> -->
                                </div>

                                <div class="reviews-items__author b-author b-author_sm">
                                    <div class="b-author__img">
                                        <picture>
                                            <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/reviews/3icon.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/reviews/3icon.jpg" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                        </picture>
                                    </div>

                                    <div class="b-author__text">
                                        <div class="b-author__name h5">
                                            Валерий Казаков
                                        </div>

                                        <div class="b-author__position">
                                            Руководитель компании <br>
                                            "Васманн РУС"
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- /reviews items -->

            <!-- reviews more  -->

            <!-- <div class="reviews__btn b-text-btn b-text-btn_center js-more-btn-toggle">
                <a href="javascript:void(0);" class="btn btn_white btn_sm btn_shadow-none js-more-btn">
							<span class="btn__center">
								<span class="btn__text b-icon b-icon_right b-icon_btn b-icon_arrow">
									<i class="b-icon__icon"></i>
									<span class="b-icon__text">
										Смотреть ещё
									</span>
								</span>
							</span>
                </a>
            </div> -->

            <!-- /reviews more  -->

        </div>

        <!-- /reviews -->

    </div>
</section>

<!-- /reviews section -->


<!-- faq section -->

<section class="s-faq section" id="faq">
    <div class="container">

        <!-- faq title -->

        <div class="section-title s-faq__title">
            <h2 class="section-title__title h2">
                Часто задаваемые <span class="b-text-color">вопросы</span>
            </h2>
        </div>

        <!-- /faq title -->


        <!-- faq -->

        <div class="faq s-faq__faq">
            <div class="row">
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="faq__block faq__block_right">

                        <!-- faq items -->

                        <div class="faq-items faq__items b-items js-accordion">
                            <a href="javascript:void(0);" class="faq-items__item b-items__item js-accordion-item js-active">
                                <div class="faq-items__text">
                                    <h3 class="faq-items__title h5">
                                        На чем вы делаете сайты&nbsp;?  
                                    </h3>

                                    <div class="faq-items__descr b-text-descr js-accordion-descr" style="display: block;">
                                        <p>
                                            Используем html/css, для административной части 1C-Bitrix, ModX. В некоторых проектах для
                                            тестирования можем использовать конструкторы, например ТИльда и платформа ЛП. Для сложных
                                            проектов используем Angular и Yii2.
                                        </p>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript:void(0);" class="faq-items__item b-items__item js-accordion-item">
                                <div class="faq-items__text">
                                    <h3 class="faq-items__title h5">
                                         Есть сайт, нужно его улучшить. Возьмётесь?
                                    </h3>

                                    <div class="faq-items__descr b-text-descr js-accordion-descr">
                                        <p>
                                            Для начала мы сделаем аудит сайта и рекламных кампаний, посмотрим сколько заявок приходило, 
                                        настроены ли метрики и цели. После этого станет ясно, есть ли смысл в улучшении сайта или проще создать новый.
                                        </p>
                                    </div>
                                </div>
                            </a>

                            <a href="javascript:void(0);" class="faq-items__item b-items__item js-accordion-item">
                                <div class="faq-items__text">
                                    <h3 class="faq-items__title h5">
                                            Как проходит оплата работ? Есть ли скидки?
                                    </h3>

                                    <div class="faq-items__descr b-text-descr js-accordion-descr">
                                        <p>
                                        Стоимость работ разбивается на 4-6 траншей в зависимости от типа сайта (корпоративный, лендинг,
                                        квиз или интернет-магазин). Далее происходит предоплата 1-го этапа и мы начинаем анализ и проектирование. 
                                        Затем происходит согласование и сдача первого этапа, после которого переходим на следующий. Вам не придется вносить сразу большие суммы, 
                                        Вы будете всегда в курсе текущей ситуации.
                                        <p>По поводу скидок: да, они есть. <br> Но только за рекомендации.<br>  Просто так скидок не даём.</p>
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <!-- faq items -->

                    </div>
                </div>
                <div class="col-lg-4 col-md-5 col-12 order-md-first">
                    <div class="faq__block_left">
                        <div class="faq__author b-author">

                            <div class="b-author__img">
                                <picture>
                                    <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/team/consultant-faq.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/team/consultant-faq.jpg" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" style="max-width: 240px;">
                                </picture>
                            </div>

                            <div class="b-author__text">
                                <div class="b-author__info">
                                    На вопросы отвечает
                                </div>

                                <div class="b-author__name h4">
                                    Леонид Апполонов
                                </div>

                                <div class="b-author__line"></div>

                                <div class="b-author__position">
                                    Ген. директор
                                </div>

                                <div class="b-author__btn">
                                    <a href="#popupForm-2" class="btn btn_max js-fancybox js-zadat-vopros-button" data-form="Задать вопрос" data-title="<span class='b-text-color'>Задайте вопрос</span>" data-subtitle="Мы ответим в ближайшее время" data-btn="Задать вопрос">
												<span class="btn__center">
													<span class="btn__text">
														<span class="b-icon b-icon_right b-icon_btn b-icon_white b-icon_arrow">
															<i class="b-icon__icon"></i>
															<span class="b-icon__text">
																Задать вопрос
															</span>
														</span>
													</span>
												</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /faq -->

    </div>
</section>

<!-- /faq section -->


<!-- contacts section -->

<section class="s-contacts section" id="contacts">

    <!-- contacts map desctop -->

    <div id="map" class="s-contacts__map s-contacts__map_desctop js-map2" data-cords-markers="54.321255,48.400401" data-cords-center="54.321255,48.400401" data-cords-center-offset="0, 0.01" data-balloon="true"></div>

    <!-- /contacts map desctop -->

    <div class="container">

        <!-- contacts -->

        <div class="contacts s-contacts__contacts">
            <div class="row">
                <div class="col-md-5 col-12">
                    <div class="contacts__block contacts__block_left">

                        <!-- contacts items -->

                        <div class="contacts-items contacts__items b-items">
                            <div class="contacts-items__item b-items__item">
                                <div class="contacts-items__label">
                                    Звоните
                                </div>

                                <div class="contacts-items__value">
                                    <ul>
                                        <li>
                                            <a href="tel:88422728758" class="link">
                                                8 (8422) 728 758
                                            </a>
                                        </li>
                                        <!-- <li>
                                            <a href="tel:88003566666" class="link">
                                                8 (800) 356 66 66
                                            </a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>

                            <div class="contacts-items__item b-items__item">
                                <div class="contacts-items__label">
                                    Пишите:
                                </div>

                                <div class="contacts-items__value">
                                    <ul>
                                        <li>
                                            <a href="mailto:info@klweb.ru" class="link">
                                                info@klweb.ru
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="contacts-items__item b-items__item">
                                <div class="contacts-items__label">
                                    Мессенджеры:
                                </div>

                                <div class="contacts-items__value">
                                    <div class="b-messanger">
                                        <ul class=" b-messanger__items">
                                            <li class="b-messanger__item">
                                                <a href="https://api.whatsapp.com/send?phone=88003566666" class="b-messanger__link b-messanger__link_wa" target="_blank">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path class="hover" d="M9.95472 2.21191H9.95085C5.68276 2.21191 2.21198 5.68367 2.21198 9.95273C2.21198 11.646 2.7577 13.2155 3.68563 14.4898L2.72093 17.3655L5.69631 16.4144C6.92032 17.2252 8.38043 17.6935 9.95472 17.6935C14.2228 17.6935 17.6936 14.2208 17.6936 9.95273C17.6936 5.68464 14.2228 2.21191 9.95472 2.21191Z" fill="#4CAF50" />
                                                        <path d="M14.4591 13.143C14.2724 13.6703 13.5312 14.1077 12.94 14.2354C12.5355 14.3215 12.0072 14.3902 10.2287 13.6529C7.95391 12.7105 6.48896 10.3989 6.37479 10.2489C6.26545 10.0989 5.45557 9.02487 5.45557 7.91406C5.45557 6.80326 6.01968 6.26237 6.24706 6.03014C6.43381 5.83953 6.74248 5.75244 7.03856 5.75244C7.13435 5.75244 7.22047 5.75728 7.29788 5.76115C7.52527 5.77083 7.63944 5.78437 7.78942 6.14335C7.97617 6.59329 8.43094 7.70409 8.48513 7.81827C8.54028 7.93245 8.59543 8.08726 8.51803 8.23724C8.44546 8.39206 8.38159 8.46076 8.26742 8.59235C8.15324 8.72394 8.04487 8.82457 7.93069 8.96584C7.82619 9.08873 7.70814 9.22032 7.83974 9.44771C7.97133 9.67026 8.4261 10.4124 9.09568 11.0084C9.95975 11.7777 10.6603 12.0235 10.9109 12.128C11.0977 12.2054 11.3202 12.187 11.4566 12.0418C11.6298 11.8551 11.8437 11.5455 12.0614 11.2407C12.2162 11.022 12.4117 10.9949 12.6168 11.0723C12.8258 11.1449 13.9318 11.6916 14.1591 11.8048C14.3865 11.919 14.5365 11.9731 14.5917 12.0689C14.6458 12.1647 14.6458 12.6147 14.4591 13.143Z" fill="#fff" />
                                                    </svg>
                                                </a>
                                            </li>

                                            <!-- <li class="b-messanger__item">
                                                <a href="viber://chat?number=88003566666" class="b-messanger__link b-messanger__link_vb d-none d-lg-block" target="_blank">
                                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.8949 12.9091C16.6456 13.9198 15.3671 15.1763 14.3512 15.4084C13.0214 15.6679 11.681 15.7788 10.342 15.7407C10.3153 15.74 10.2897 15.7505 10.2712 15.7701L9.02431 17.0834L7.69809 18.4799C7.60113 18.5836 7.43079 18.513 7.43079 18.3698V15.5051C7.43079 15.4578 7.39786 15.4176 7.35256 15.4085L7.35179 15.4083C6.33596 15.1762 5.05797 13.9197 4.80811 12.9091C4.39255 10.9535 4.39255 8.97118 4.80811 7.01566C5.05797 6.005 6.33596 4.74851 7.35179 4.51638C9.67434 4.06316 12.0292 4.06316 14.3512 4.51638C15.3676 4.74851 16.6456 6.005 16.8949 7.01566C17.311 8.97123 17.311 10.9536 16.8949 12.9091Z" fill="#7D3DAF" class="hover" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.2463 6.70198L18.2417 6.68303C17.8682 5.13388 16.1844 3.47156 14.638 3.12572L14.6206 3.12204C12.1195 2.6325 9.58353 2.6325 7.08295 3.12204L7.06499 3.12572C5.51919 3.47156 3.83538 5.13388 3.46137 6.68303L3.45727 6.70198C2.99553 8.86543 2.99553 11.0594 3.45727 13.2228L3.46137 13.2418C3.81942 14.7248 5.37785 16.3108 6.86645 16.7469V18.4762C6.86645 19.1021 7.60985 19.4095 8.0326 18.9579L9.74026 17.1366C10.1106 17.1579 10.4812 17.1697 10.8518 17.1697C12.1108 17.1697 13.3703 17.0476 14.6206 16.8028L14.638 16.7992C16.1844 16.4533 17.8682 14.791 18.2417 13.2418L18.2463 13.2229C18.708 11.0594 18.708 8.86543 18.2463 6.70198ZM14.3512 15.4084C15.3671 15.1763 16.6456 13.9198 16.8949 12.9091C17.311 10.9536 17.311 8.97123 16.8949 7.01566C16.6456 6.005 15.3676 4.74851 14.3512 4.51638C12.0292 4.06316 9.67434 4.06316 7.35179 4.51638C6.33596 4.74851 5.05797 6.005 4.80811 7.01566C4.39255 8.97118 4.39255 10.9535 4.80811 12.9091C5.05797 13.9197 6.33596 15.1762 7.35179 15.4083L7.35256 15.4085C7.39786 15.4176 7.43079 15.4578 7.43079 15.5051V18.3698C7.43079 18.513 7.60113 18.5836 7.69809 18.4799L9.02431 17.0834L10.2712 15.7701C10.2897 15.7505 10.3153 15.74 10.342 15.7407C11.681 15.7788 13.0214 15.6679 14.3512 15.4084Z" fill="#7D3DAF" class="hover" />
                                                        <path d="M13.0617 14.3645C12.9055 14.3153 12.7567 14.2823 12.6185 14.2227C11.1862 13.606 9.86814 12.8104 8.82404 11.5907C8.23029 10.8972 7.76558 10.1141 7.37274 9.2855C7.18645 8.89252 7.02946 8.48416 6.86944 8.07846C6.72353 7.70849 6.93845 7.32628 7.16475 7.04752C7.3771 6.78591 7.65035 6.5857 7.94627 6.43815C8.17724 6.32297 8.40509 6.38937 8.57378 6.59257C8.93845 7.03187 9.27341 7.49364 9.54466 8.00285C9.71145 8.31606 9.66569 8.69891 9.3634 8.91207C9.28993 8.96388 9.22298 9.02469 9.15454 9.08321C9.09452 9.13448 9.03803 9.18629 8.99688 9.25573C8.92167 9.38278 8.91808 9.53262 8.96651 9.67075C9.33929 10.734 9.96761 11.5608 10.9987 12.0061C11.1637 12.0774 11.3294 12.1603 11.5195 12.1373C11.8379 12.0987 11.9409 11.7363 12.164 11.547C12.3821 11.3619 12.6607 11.3595 12.8956 11.5137C13.1305 11.668 13.3582 11.8337 13.5846 12.0011C13.8068 12.1654 14.028 12.3262 14.233 12.5135C14.43 12.6937 14.4979 12.93 14.3869 13.1744C14.1838 13.6221 13.8881 13.9946 13.4617 14.2324C13.3413 14.2994 13.1975 14.3211 13.0617 14.3645Z" fill="white" />
                                                        <path d="M10.8555 5.9261C12.7289 5.98057 14.2676 7.27094 14.5973 9.19321C14.6535 9.52074 14.6735 9.85562 14.6985 10.1881C14.709 10.3279 14.6327 10.4607 14.4873 10.4625C14.3371 10.4644 14.2696 10.334 14.2598 10.1942C14.2405 9.91755 14.2271 9.63965 14.1904 9.36526C13.9965 7.91685 12.8837 6.71855 11.4946 6.46141C11.2856 6.4227 11.0716 6.41253 10.8599 6.38947C10.7261 6.37488 10.5508 6.36647 10.5211 6.19378C10.4962 6.049 10.614 5.93372 10.7468 5.92632C10.7829 5.92424 10.8192 5.92594 10.8555 5.9261Z" fill="white" />
                                                        <path d="M13.7029 9.75647C13.6998 9.78075 13.6982 9.83783 13.6845 9.89161C13.6348 10.0868 13.3496 10.1113 13.284 9.91424C13.2645 9.85578 13.2616 9.78927 13.2615 9.72633C13.2608 9.31451 13.1746 8.90311 12.9745 8.5448C12.7688 8.17653 12.4546 7.86695 12.086 7.67962C11.8631 7.56636 11.6221 7.49597 11.3779 7.45401C11.2711 7.43569 11.1632 7.42456 11.0559 7.40906C10.9259 7.39032 10.8565 7.30432 10.8627 7.17136C10.8684 7.04676 10.9561 6.95714 11.087 6.96481C11.5169 6.99016 11.9321 7.08659 12.3144 7.29666C13.0916 7.72387 13.5356 8.39821 13.6652 9.29864C13.6711 9.33943 13.6805 9.37984 13.6835 9.42079C13.6908 9.52191 13.6954 9.62313 13.7029 9.75647C13.6998 9.78075 13.6954 9.62313 13.7029 9.75647Z" fill="white" />
                                                        <path d="M12.5374 9.70964C12.3807 9.71257 12.2968 9.62252 12.2807 9.47338C12.2694 9.36938 12.2605 9.264 12.2366 9.16283C12.1895 8.96357 12.0875 8.77891 11.926 8.65681C11.8497 8.59914 11.7634 8.55713 11.6729 8.53003C11.5579 8.49557 11.4385 8.50505 11.3238 8.47587C11.1992 8.44419 11.1303 8.3395 11.1499 8.2182C11.1677 8.10782 11.2712 8.02166 11.3874 8.03039C12.1137 8.08481 12.6328 8.47454 12.7069 9.36198C12.7121 9.4246 12.7183 9.49079 12.7049 9.55069C12.682 9.65325 12.6088 9.70463 12.5374 9.70964C12.3807 9.71257 12.6088 9.70463 12.5374 9.70964Z" fill="white" />
                                                    </svg>
                                                </a>

                                                <a href="viber://add?number=88003566666" class="b-messanger__link b-messanger__link_vb d-block d-lg-none" target="_blank">
                                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M16.8949 12.9091C16.6456 13.9198 15.3671 15.1763 14.3512 15.4084C13.0214 15.6679 11.681 15.7788 10.342 15.7407C10.3153 15.74 10.2897 15.7505 10.2712 15.7701L9.02431 17.0834L7.69809 18.4799C7.60113 18.5836 7.43079 18.513 7.43079 18.3698V15.5051C7.43079 15.4578 7.39786 15.4176 7.35256 15.4085L7.35179 15.4083C6.33596 15.1762 5.05797 13.9197 4.80811 12.9091C4.39255 10.9535 4.39255 8.97118 4.80811 7.01566C5.05797 6.005 6.33596 4.74851 7.35179 4.51638C9.67434 4.06316 12.0292 4.06316 14.3512 4.51638C15.3676 4.74851 16.6456 6.005 16.8949 7.01566C17.311 8.97123 17.311 10.9536 16.8949 12.9091Z" fill="#7D3DAF" class="hover" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M18.2463 6.70198L18.2417 6.68303C17.8682 5.13388 16.1844 3.47156 14.638 3.12572L14.6206 3.12204C12.1195 2.6325 9.58353 2.6325 7.08295 3.12204L7.06499 3.12572C5.51919 3.47156 3.83538 5.13388 3.46137 6.68303L3.45727 6.70198C2.99553 8.86543 2.99553 11.0594 3.45727 13.2228L3.46137 13.2418C3.81942 14.7248 5.37785 16.3108 6.86645 16.7469V18.4762C6.86645 19.1021 7.60985 19.4095 8.0326 18.9579L9.74026 17.1366C10.1106 17.1579 10.4812 17.1697 10.8518 17.1697C12.1108 17.1697 13.3703 17.0476 14.6206 16.8028L14.638 16.7992C16.1844 16.4533 17.8682 14.791 18.2417 13.2418L18.2463 13.2229C18.708 11.0594 18.708 8.86543 18.2463 6.70198ZM14.3512 15.4084C15.3671 15.1763 16.6456 13.9198 16.8949 12.9091C17.311 10.9536 17.311 8.97123 16.8949 7.01566C16.6456 6.005 15.3676 4.74851 14.3512 4.51638C12.0292 4.06316 9.67434 4.06316 7.35179 4.51638C6.33596 4.74851 5.05797 6.005 4.80811 7.01566C4.39255 8.97118 4.39255 10.9535 4.80811 12.9091C5.05797 13.9197 6.33596 15.1762 7.35179 15.4083L7.35256 15.4085C7.39786 15.4176 7.43079 15.4578 7.43079 15.5051V18.3698C7.43079 18.513 7.60113 18.5836 7.69809 18.4799L9.02431 17.0834L10.2712 15.7701C10.2897 15.7505 10.3153 15.74 10.342 15.7407C11.681 15.7788 13.0214 15.6679 14.3512 15.4084Z" fill="#7D3DAF" class="hover" />
                                                        <path d="M13.0617 14.3645C12.9055 14.3153 12.7567 14.2823 12.6185 14.2227C11.1862 13.606 9.86814 12.8104 8.82404 11.5907C8.23029 10.8972 7.76558 10.1141 7.37274 9.2855C7.18645 8.89252 7.02946 8.48416 6.86944 8.07846C6.72353 7.70849 6.93845 7.32628 7.16475 7.04752C7.3771 6.78591 7.65035 6.5857 7.94627 6.43815C8.17724 6.32297 8.40509 6.38937 8.57378 6.59257C8.93845 7.03187 9.27341 7.49364 9.54466 8.00285C9.71145 8.31606 9.66569 8.69891 9.3634 8.91207C9.28993 8.96388 9.22298 9.02469 9.15454 9.08321C9.09452 9.13448 9.03803 9.18629 8.99688 9.25573C8.92167 9.38278 8.91808 9.53262 8.96651 9.67075C9.33929 10.734 9.96761 11.5608 10.9987 12.0061C11.1637 12.0774 11.3294 12.1603 11.5195 12.1373C11.8379 12.0987 11.9409 11.7363 12.164 11.547C12.3821 11.3619 12.6607 11.3595 12.8956 11.5137C13.1305 11.668 13.3582 11.8337 13.5846 12.0011C13.8068 12.1654 14.028 12.3262 14.233 12.5135C14.43 12.6937 14.4979 12.93 14.3869 13.1744C14.1838 13.6221 13.8881 13.9946 13.4617 14.2324C13.3413 14.2994 13.1975 14.3211 13.0617 14.3645Z" fill="white" />
                                                        <path d="M10.8555 5.9261C12.7289 5.98057 14.2676 7.27094 14.5973 9.19321C14.6535 9.52074 14.6735 9.85562 14.6985 10.1881C14.709 10.3279 14.6327 10.4607 14.4873 10.4625C14.3371 10.4644 14.2696 10.334 14.2598 10.1942C14.2405 9.91755 14.2271 9.63965 14.1904 9.36526C13.9965 7.91685 12.8837 6.71855 11.4946 6.46141C11.2856 6.4227 11.0716 6.41253 10.8599 6.38947C10.7261 6.37488 10.5508 6.36647 10.5211 6.19378C10.4962 6.049 10.614 5.93372 10.7468 5.92632C10.7829 5.92424 10.8192 5.92594 10.8555 5.9261Z" fill="white" />
                                                        <path d="M13.7029 9.75647C13.6998 9.78075 13.6982 9.83783 13.6845 9.89161C13.6348 10.0868 13.3496 10.1113 13.284 9.91424C13.2645 9.85578 13.2616 9.78927 13.2615 9.72633C13.2608 9.31451 13.1746 8.90311 12.9745 8.5448C12.7688 8.17653 12.4546 7.86695 12.086 7.67962C11.8631 7.56636 11.6221 7.49597 11.3779 7.45401C11.2711 7.43569 11.1632 7.42456 11.0559 7.40906C10.9259 7.39032 10.8565 7.30432 10.8627 7.17136C10.8684 7.04676 10.9561 6.95714 11.087 6.96481C11.5169 6.99016 11.9321 7.08659 12.3144 7.29666C13.0916 7.72387 13.5356 8.39821 13.6652 9.29864C13.6711 9.33943 13.6805 9.37984 13.6835 9.42079C13.6908 9.52191 13.6954 9.62313 13.7029 9.75647C13.6998 9.78075 13.6954 9.62313 13.7029 9.75647Z" fill="white" />
                                                        <path d="M12.5374 9.70964C12.3807 9.71257 12.2968 9.62252 12.2807 9.47338C12.2694 9.36938 12.2605 9.264 12.2366 9.16283C12.1895 8.96357 12.0875 8.77891 11.926 8.65681C11.8497 8.59914 11.7634 8.55713 11.6729 8.53003C11.5579 8.49557 11.4385 8.50505 11.3238 8.47587C11.1992 8.44419 11.1303 8.3395 11.1499 8.2182C11.1677 8.10782 11.2712 8.02166 11.3874 8.03039C12.1137 8.08481 12.6328 8.47454 12.7069 9.36198C12.7121 9.4246 12.7183 9.49079 12.7049 9.55069C12.682 9.65325 12.6088 9.70463 12.5374 9.70964C12.3807 9.71257 12.6088 9.70463 12.5374 9.70964Z" fill="white" />
                                                    </svg>
                                                </a>
                                            </li> -->

                                            <li class="b-messanger__item">
                                                <a href="tg://resolve?domain=nikname" class="b-messanger__link b-messanger__link_tg" target="_blank">
                                                    <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10.6921 18.731C15.2126 18.731 18.8752 15.0684 18.8752 10.5479C18.8752 6.02738 15.2126 2.36475 10.6921 2.36475C6.17156 2.36475 2.50892 6.02738 2.50892 10.5479C2.50892 15.0684 6.17156 18.731 10.6921 18.731ZM6.25339 10.3706L14.1433 7.3285C14.5095 7.19621 14.8293 7.41784 14.7107 7.97156L14.7113 7.97088L13.3679 14.2999C13.2684 14.7486 13.0018 14.8577 12.6287 14.6463L10.583 13.1385L9.5962 14.0891C9.48709 14.1983 9.39503 14.2903 9.18364 14.2903L9.32889 12.2084L13.1204 8.78306C13.2854 8.63781 13.0836 8.55598 12.866 8.70054L8.18052 11.6506L6.16065 11.0205C5.72217 10.8814 5.71262 10.582 6.25339 10.3706Z" fill="#039BE5" class="hover" />
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="contacts-items__item b-items__item d-none">
                                <div class="contacts-items__label">
                                    Мы в соц. сетях:
                                </div>

                                <div class="contacts-items__value">
                                    <div class="b-messanger">
                                        <ul class="b-messanger__items">
                                            <li class="b-messanger__item">
                                                <a href="http://instagram.com/" class="b-messanger__link b-messanger__link_inst" target="_blank">
                                                    <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0)">
                                                            <path d="M26.5378 4.82932C26.292 2.52672 24.4735 0.707794 22.1707 0.46225C16.3959 -0.154083 10.6041 -0.154083 4.82952 0.46225C2.52672 0.708 0.708 2.52672 0.46225 4.82932C-0.154083 10.6039 -0.154083 16.3959 0.46225 22.1705C0.708 24.4733 2.52672 26.292 4.82932 26.5378C10.6039 27.1541 16.3959 27.1541 22.1707 26.5378C24.4735 26.292 26.292 24.4733 26.5378 22.1705C27.1541 16.3959 27.1541 10.6041 26.5378 4.82932Z" fill="url(#paint0_radial)" class="hover" />
                                                            <path d="M25.0691 5.80602C24.8512 3.76277 23.2374 2.14881 21.1939 1.93066C16.0697 1.38395 10.9301 1.38395 5.80581 1.93066C3.76256 2.14881 2.1486 3.76277 1.93045 5.80602C1.38374 10.9303 1.38374 16.0699 1.93045 21.194C2.1486 23.2374 3.76256 24.8514 5.80581 25.0693C10.9301 25.6162 16.0697 25.6162 21.1937 25.0693C23.2372 24.8514 24.8512 23.2374 25.0691 21.194C25.616 16.0699 25.616 10.9303 25.0691 5.80602Z" fill="url(#paint1_linear)" class="hover" />
                                                            <path d="M0.404589 21.6108C0.423128 21.7975 0.442286 21.9841 0.462267 22.1707C0.708017 24.4733 2.52674 26.292 4.82954 26.5378C10.6042 27.1541 16.3961 27.1541 22.1707 26.5378C24.4735 26.292 26.292 24.4733 26.5378 22.1707C26.5578 21.9841 26.5769 21.7975 26.5957 21.6108H0.404589Z" fill="url(#paint2_linear)" class="hover" />
                                                            <path d="M26.5377 22.1705C26.869 19.0676 27.0218 15.9598 26.9971 12.8524L20.8255 6.68079C20.0545 5.80058 18.9283 5.25119 17.605 5.20361C14.8836 5.10555 12.1536 5.1105 9.43182 5.20402C7.17125 5.28188 5.59045 6.80129 5.18505 9.03447C5.11357 9.42874 5.07073 9.82816 5.01449 10.2253V16.7722C5.0456 16.9844 5.09133 17.1955 5.10554 17.4089C5.19618 18.7673 5.75442 19.9307 6.64823 20.7178L12.9286 26.9979C16.0106 27.0196 19.0929 26.8663 22.1707 26.5378C24.4735 26.292 26.292 24.4733 26.5377 22.1705Z" fill="url(#paint3_linear)" class="hover" />
                                                            <path d="M26.5379 22.1706C26.2924 24.473 24.4733 26.2921 22.1709 26.5377C19.0935 26.866 16.0106 27.0195 12.929 26.9979L6.65812 20.727C7.38507 21.3633 8.33264 21.7508 9.43223 21.7922C12.1534 21.8944 14.8841 21.8917 17.6052 21.7936C20.0664 21.7046 21.8475 19.883 21.9243 17.4218C22.0063 14.8086 22.0063 12.1886 21.9243 9.57532C21.8893 8.43988 21.4907 7.44081 20.8299 6.68481L26.9975 12.8525C27.0218 15.9595 26.869 19.0677 26.5379 22.1706Z" fill="url(#paint4_linear)" class="hover" />
                                                            <path d="M16.6861 10.5763C15.8955 9.71541 14.7611 9.17529 13.5002 9.17529C11.1119 9.17529 9.17556 11.1116 9.17556 13.4999C9.17556 14.7608 9.71568 15.8952 10.5765 16.6858L20.5823 26.6916C21.1119 26.6454 21.6415 26.5941 22.1707 26.5377C24.4735 26.2919 26.2922 24.4732 26.5379 22.1704C26.5944 21.6412 26.6457 21.1116 26.6918 20.582L16.6861 10.5763Z" fill="url(#paint5_linear)" class="hover" />
                                                            <path d="M26.9476 16.4083L18.8949 8.35585C18.7071 8.10928 18.411 7.94922 18.0771 7.94922C17.509 7.94922 17.0482 8.40982 17.0482 8.97816C17.0482 9.31207 17.2082 9.60809 17.4548 9.79595L26.8036 19.145C26.8671 18.233 26.9151 17.3207 26.9476 16.4083Z" fill="url(#paint6_linear)" class="hover" />
                                                            <path d="M5.01449 10.2253C5.07073 9.82816 5.11357 9.42874 5.18505 9.03447C5.59024 6.80129 7.17125 5.28188 9.43182 5.20402C12.1536 5.1105 14.8836 5.10555 17.605 5.20361C20.0654 5.29218 21.8473 7.11399 21.9241 9.5752C22.0059 12.1886 22.0059 14.8085 21.9241 17.4219C21.8473 19.8831 20.066 21.7047 17.6052 21.7935C14.8839 21.8918 12.1532 21.8942 9.43203 21.7921C6.97123 21.6996 5.27013 19.8737 5.10554 17.4087C5.09133 17.1955 5.0456 16.9842 5.01449 16.772C5.01449 14.5897 5.01449 12.4074 5.01449 10.2253ZM13.5023 20.3349C14.7477 20.3349 15.9944 20.3722 17.2382 20.3262C19.1883 20.2539 20.3878 19.0901 20.4333 17.1418C20.4898 14.7141 20.4898 12.2832 20.4333 9.85536C20.3878 7.90748 19.1875 6.71642 17.2382 6.67502C14.764 6.6227 12.2871 6.62311 9.81291 6.67502C7.87842 6.7156 6.67542 7.88255 6.62289 9.80901C6.55615 12.2673 6.55615 14.73 6.62289 17.1883C6.67542 19.1146 7.87842 20.2545 9.81311 20.3262C11.0412 20.372 12.2725 20.3349 13.5023 20.3349Z" fill="url(#paint7_linear)" class="hover" />
                                                            <path d="M5.01449 10.2253C5.07073 9.82816 5.11357 9.42874 5.18505 9.03447C5.59024 6.80129 7.17125 5.28188 9.43182 5.20402C12.1536 5.1105 14.8836 5.10555 17.605 5.20361C20.0654 5.29218 21.8473 7.11399 21.9241 9.5752C22.0059 12.1886 22.0059 14.8085 21.9241 17.4219C21.8473 19.8831 20.066 21.7047 17.6052 21.7935C14.8839 21.8918 12.1532 21.8942 9.43203 21.7921C6.97123 21.6996 5.27013 19.8737 5.10554 17.4087C5.09133 17.1955 5.0456 16.9842 5.01449 16.772C5.01449 14.5897 5.01449 12.4074 5.01449 10.2253ZM13.5023 20.3349C14.7477 20.3349 15.9944 20.3722 17.2382 20.3262C19.1883 20.2539 20.3878 19.0901 20.4333 17.1418C20.4898 14.7141 20.4898 12.2832 20.4333 9.85536C20.3878 7.90748 19.1875 6.71642 17.2382 6.67502C14.764 6.6227 12.2871 6.62311 9.81291 6.67502C7.87842 6.7156 6.67542 7.88255 6.62289 9.80901C6.55615 12.2673 6.55615 14.73 6.62289 17.1883C6.67542 19.1146 7.87842 20.2545 9.81311 20.3262C11.0412 20.372 12.2725 20.3349 13.5023 20.3349Z" fill="white" />
                                                            <path d="M13.5002 9.17566C11.1119 9.17566 9.17556 11.1118 9.17556 13.5001C9.17556 15.8886 11.1119 17.8247 13.5002 17.8247C15.8887 17.8247 17.8248 15.8886 17.8248 13.5001C17.8248 11.1118 15.8887 9.17566 13.5002 9.17566ZM13.5002 16.3358C11.934 16.3358 10.6645 15.0663 10.6645 13.5001C10.6645 11.9339 11.934 10.6644 13.5002 10.6644C15.0664 10.6644 16.3359 11.9339 16.3359 13.5001C16.3359 15.0663 15.0664 16.3358 13.5002 16.3358Z" fill="white" />
                                                            <path d="M19.1059 8.97816C19.1059 9.54629 18.6453 10.0069 18.0772 10.0069C17.5091 10.0069 17.0483 9.54629 17.0483 8.97816C17.0483 8.40982 17.5091 7.94922 18.0772 7.94922C18.6453 7.94922 19.1059 8.40982 19.1059 8.97816Z" fill="white" />
                                                        </g>

                                                    </svg>
                                                </a>
                                            </li>

                                            <li class="b-messanger__item">
                                                <a href="https://vk.com/" class="b-messanger__link b-messanger__link_vk" target="_blank">
                                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14 28C21.732 28 28 21.732 28 14C28 6.26801 21.732 0 14 0C6.26801 0 0 6.26801 0 14C0 21.732 6.26801 28 14 28Z" fill="#4D76A1" class="hover" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.4713 20.1403H14.5701C14.5701 20.1403 14.902 20.1038 15.0715 19.9211C15.2274 19.7534 15.2224 19.4385 15.2224 19.4385C15.2224 19.4385 15.201 17.9641 15.8853 17.7469C16.5598 17.5331 17.4261 19.172 18.3442 19.8021C19.0385 20.279 19.5661 20.1744 19.5661 20.1744L22.021 20.1403C22.021 20.1403 23.3053 20.0611 22.6964 19.0514C22.6464 18.9688 22.3417 18.3045 20.8711 16.9394C19.3317 15.5106 19.5379 15.7417 21.3921 13.2703C22.5214 11.7652 22.9729 10.8463 22.8319 10.4527C22.6974 10.0779 21.8668 10.1769 21.8668 10.1769L19.1026 10.1942C19.1026 10.1942 18.8978 10.1662 18.7458 10.2571C18.5973 10.3462 18.5017 10.5538 18.5017 10.5538C18.5017 10.5538 18.0642 11.7185 17.4807 12.709C16.2499 14.7991 15.7578 14.9094 15.5566 14.7796C15.0887 14.4772 15.2055 13.5645 15.2055 12.9162C15.2055 10.8907 15.5127 10.0462 14.6073 9.82756C14.3068 9.75494 14.0857 9.70702 13.3173 9.69928C12.331 9.68905 11.4962 9.70228 11.0235 9.93387C10.7091 10.0879 10.4665 10.431 10.6143 10.4507C10.7969 10.4752 11.2107 10.5623 11.4301 10.861C11.7133 11.2463 11.7033 12.1118 11.7033 12.1118C11.7033 12.1118 11.8661 14.4961 11.3233 14.7924C10.9507 14.9955 10.4396 14.5807 9.34223 12.6846C8.77996 11.7133 8.35546 10.6396 8.35546 10.6396C8.35546 10.6396 8.2736 10.439 8.12761 10.3317C7.95042 10.2017 7.70285 10.1602 7.70285 10.1602L5.0762 10.1774C5.0762 10.1774 4.68189 10.1884 4.53714 10.3599C4.40836 10.5124 4.52691 10.8278 4.52691 10.8278C4.52691 10.8278 6.58331 15.6389 8.91173 18.0634C11.0467 20.2863 13.4713 20.1403 13.4713 20.1403Z" fill="white" />
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="contacts-items__item b-items__item">
                                <div class="contacts-items__label">
                                    Заезжайте:
                                </div>

                                <div class="contacts-items__value">
                                    г. Ульяновск,
                                    <span class="d-block">
                                                Гончарова 31/1,&nbsp;оф.&nbsp;411
											</span>
                                </div>
                            </div>
                        </div>

                        <!-- /contacts items -->

                    </div>
                </div>

                <div class="col-12 d-block d-md-none">

                    <!-- contacts map mobile -->

                    <!-- <div id="map_mobile" class="s-contacts__map s-contacts__map_mobile js-map2" data-cords-markers="54.321255,48.400401" data-cords-center="54.321255,48.400401" data-cords-center-offset="0, 0"></div> -->

                    <!-- /contacts map mobile -->

                </div>

                <div class="col-md-7 col-12">
                    <div class="contacts__block contacts__block_right form bg-1 b-text-white">
                        <div class="form__heading">
                            <div class="section-title section-title_left section-title_mb-0 contacts__title">
                                <h2 class="section-title__title h2">
                                    Напишите нам
                                </h2>
                            </div>
                        </div>

                        <form class="form__form js-form">
                            <div class="input input_white input_icon input_name js-required">
                                <input type="text" name="name" placeholder="Имя" class="input__input">
                            </div>

                            <div class="input input_white input_icon input_phone js-required">
                                <input type="tel" name="phone" placeholder="Номер" class="input__input">
                            </div>

                            <div class="input input_white input_textarea input_icon input_comment js-required">
                                <textarea name="comment" placeholder="Задайте вопрос" class="input__input"></textarea>
                            </div>

                            <div class="input input_btn">
                                <input type="hidden" name="form" value="отправить вопрос">

                                <button class="btn btn_max">
											<span class="btn__center">
												<span class="btn__text b-icon b-icon_right b-icon_btn b-icon_white b-icon_arrow">
													<i class="b-icon__icon"></i>
													<span class="b-icon__text">
														отправить вопрос
													</span>
												</span>
											</span>
                                </button>
                            </div>

                            <div class="form__info">
                                Нажимая на кнопку, Вы принимаете условия <br>
                                <a href="#popupPolicy" class="link link_underline js-fancybox">
                                    политики конфиденциальности
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <!-- /contacts -->

    </div>
</section>

<!-- /contacts section -->


<!-- offer section -->

<section class="s-offer s-offer_5 section section_yellow section_yellow-right" id="offer-5">
    <div class="container">

        <!-- offer -->

        <div class="offer offer_5 s-offer__offer">

            <div class="row">
                <div class="col-lg-7 col-md-8 col-12 ml-auto">

                    <!-- offer text -->

                    <div class="offer__text">
                        <div class="section-title section-title_left offer__title">
                            <h2 class="section-title__title h2">
                                Долистали до конца страницы, <br>
                                но&nbsp;так&nbsp;и <span class="b-text-color">не&nbsp;решились оставить заявку на&nbsp;расчет?</span>
                            </h2>
                        </div>
                        <?if($mobile):?>
                            <div class="offer__img">
                                <picture>
                                    <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-5-img.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-5-img.png" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                </picture>
                            </div>
                        <?endif;?>
                        <div class="offer__descr b-text-descr">
                            <p>
                                Мы бесплатно проанализируем Ваших конкурентов
                                в&nbsp;интернете и сделаем расчет количества клиентов,
                                которых Вы сможете получить.
                            </p>

                            <p>
                                Сделать расчет и анализ конкурентов?
                            </p>
                        </div>

                        <div class="offer__btn b-text-btn b-text-btn_mt-30">
                            <div class="b-text-btn__btn">
                                <a href="#popupQuiz" class="btn js-fancybox js-poluchit-konkurentov-button" data-form="Получить расчет и анализ конкурентов бесплатно">
											<span class="btn__center">
												<span class="btn__text b-icon b-icon_right b-icon_btn b-icon_white b-icon_arrow">
													<i class="b-icon__icon"></i>
													<span class="b-icon__text">
														Получить расчет и анализ конкурентов&nbsp;бесплатно
													</span>
												</span>
											</span>
                                </a>
                            </div>

                            <div class="b-text-btn__text b-text-btn__text_line b-text-btn__text_line-4 b-text-btn__text_pdf b-text-btn__text_pdf-sm b-text-btn__text_fz-14">
                                <div class="b-text-btn__text-text">
                                    <b class=" b-text-color">
                                        Отправим в формате PDF
                                    </b>
                                    в&nbsp;течение 1 дня.
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- /offer text -->

                </div>
            </div>

            <!-- /offer -->

        </div>
    </div>

    <!-- offer img -->
    <?if($not_mobile):?>
    <div class="s-offer__bg-img s-offer__bg-img_5 b-bg-img b-bg-img_left d-none d-md-block">
        <picture>
            <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-5-img.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/bg/offer-5-img.png" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
        </picture>
    </div>
    <?endif;?>

    <!-- offer img -->

</section>

<!-- /offer section -->


<!-- about section -->

<section class="s-about section" id="about">
    <div class="container">

        <!-- about title -->

        <div class="section-title section-title_left s-about__title">
            <h2 class="section-title__title h2">
                Создание продающих сайтов в Ульяновске и&nbsp;по&nbsp;всему&nbsp;миру&nbsp;–<br>
                <span class="b-text-color">компания «Кейт и Лео»</span>
            </h2>
        </div>

        <!-- /about title -->

        <!-- about -->

        <div class="about s-about__about">
            <div class="about__blocks">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="about__block about__block_left">
                            <div class="about__descr b-text-descr">
                                <p>
                                    Знаменитая фраза Билла Гейтса  <b>"Если Вашего бизнеса нет в Интернете, то Вас нет в&nbsp;бизнесе!"</b>
                                    актуальна
                                    сейчас
                                    как никогда. Большинство людей сегодня просто живет в сети Интернет, проводя там большую часть своей жизни.
                                    Появился какой-то вопрос? Нужна информация? Возникла потребность что-то купить? Все это можно сделать во всемирной паутине.
                                    По статистике человек открывает только первые 5-6 сайтов, выданных поисковиком Яндекс или Google,
                                     3-4 из них он закрывает сразу, без просмотра.
                                </p>
                            </div>

                            <div class="about__form b-text-descr">
                                <div class="about__form-form">
                                    <div class="about__form-input">
                                        Почему мой сайт не продает?
                                    </div>
                                    <div class="about__form-btn">
                                        Найти
                                    </div>
                                </div>
                                <div class="about__form-descr b-text-descr">
                                    <ul>
                                        <li>
                                            <b> 1. Если Ваш сайт ниже 5 позиции по нужным запросам</b> – вы отдаете своих клиентов
                                            конкурентам.
                                        </li>
                                        <li>
                                            <b> 2. Если Ваш сайт не продающий и не имеет продуманную структуру,</b> <br>
                                            люди уйдут с сайта, так ничего не заказав и не позвонив.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="about__block about__block_right">
                            <div class="about__img b-img b-img_max">
                                <picture>
                                    <source data-srcset="<?=SITE_TEMPLATE_PATH?>/img/bg/office-img.webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" type="image/webp">
                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/bg/office-img.jpg" alt class="js-lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                                </picture>

                                <div class="b-img__label">
                                    <div class="b-img__label-bg">
                                        <div class="b-img__label-text">
                                            Наш офис
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="about__block about__block_left about__block_line">
                            <div class="about__descr b-text-descr">
                                <p>
                                    В <b>веб студии Ульяновска «Кейт и Лео»</b> мы создаем в первую очередь продающие сайты – такие,
                                    которые
                                    приводят клиентов, а не просто существуют в интернете. При разработке сайтов в Ульяновске мы используем 
                                    самые современные маркетинговые инструменты. Мы в курсе всех современных тенденций веб-дизайна – наши сайты гармоничны, 
                                    просты и удобны для пользоватей. Их главная задача – привлечение клиентов и они отлично с этим справляются. 
                                    Посмотрите выполненные нами работы в портфолио и Вы убедитесь в этом сами. Наша веб-студия создает сайты в Ульяновске уже более 
                                    трех лет и за этот относительно недолгий срок мы создали уже более 300 сайтов. Большая часть созданных нами сайтов окупилась в среднем за 21 день. 
                                    Такая эффективность наших работ привела к тому, что 80% наших клиентов приходит к нам по рекомендациям знакомых.
                                </p>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="about__block about__block_right">
                            <div class="about__form b-text-descr">
                                <div class="about__form-form">
                                    <div class="about__form-input">
                                        Чем мы отличаемся от других?
                                    </div>
                                    <div class="about__form-btn">
                                        Найти
                                    </div>
                                </div>
                                <div class="about__form-descr b-text-descr">
                                    <p>
                                     В отличие от большинства веб-студий, в которых работают одни программисты и дизайнеры (а чаще только программисты), 
                                     у нас работают интернет-маркетологи, веб-дизайнеры, программисты и SEO оптимизаторы – и результатом труда такой большой 
                                     команды специалистов становятся действительно качественные веб-сайты.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about__advantages">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="about__block about__block_left">
                            <div class="about__advantages-item">
                                <div class="about__advantages-number">
                                    1
                                </div>
                                <div class="about__advantages-text">
                                    <p>
                                        Мы, в первую очередь, <b>маркетологи</b>, и главное для нас – это заявки и&nbsp;звонки
                                        с&nbsp;сайта.
                                    </p>
                                </div>
                            </div>

                            <div class="about__advantages-item">
                                <div class="about__advantages-number">
                                    2
                                </div>
                                <div class="about__advantages-text">
                                    <p>
                                        <b>Современный и адаптивный веб-дизайн</b> – мы разрабатываем <br>
                                        сайты, которые удобно просматривать с любых устройств <br>
                                        (мобильные телефоны, планшеты, компьютеры).
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-12">
                        <div class="about__block about__block_right">
                            <div class="about__advantages-item">
                                <div class="about__advantages-number">
                                    3
                                </div>
                                <div class="about__advantages-text">
                                    <p>
                                        Профессиональное программирование обеспечит <b>быструю скорость загрузки и удобство
                                            пользования
                                            сайтом.</b>
                                    </p>
                                </div>
                            </div>

                            <div class="about__advantages-item">
                                <div class="about__advantages-number">
                                    4
                                </div>
                                <div class="about__advantages-text">
                                    <p>
                                        Стартовая внутренняя оптимизация поможет <b>с&nbsp;минимальными затратами продвинуть Ваш
                                            сайт.</b>
                                        Наши сайты при небольшой конкуренции в поисковике сами, без лишнего продвижения, попадают в
                                        ТОП
                                        Яндекса и Google.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /about -->

    </div>
</section>

<!-- /about section -->
<?php 

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php")

?>