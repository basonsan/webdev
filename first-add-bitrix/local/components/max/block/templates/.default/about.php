<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>

<div class="js-header-fixed"></div>

<!-- main section -->
<section class="s-main section js-section" id="main">
    <? if($USER->IsAdmin()): ?>
        <a href='/bitrix/admin/iblock_element_edit.php?IBLOCK_ID=<?=$arResult['IB_ID']?>&type=blocks&lang=ru&ID=<?=$arResult['DATA']['ID']?>' class="fix-block" target="_blank">Изменить блок</a>
    <? endif; ?>
    <!-- section img -->
    <div class="section__img section__img_right s-main__img s-main__img_8">
        <img class="js-lazy" data-src="<?=$data['IMG']?>" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
    <div class="section__img-text">
        <div class="section__img-text-bg">
        <div class="section__img-position">
            <?=$data['WORK']?>
        </div>
        <div class="section__img-name h5 text-title">
            <?=$data['FIO']?>
        </div>
        </div>
    </div>
    </div>
    <!-- /section img -->
    <div class="header-height"></div>
    <!-- main -->
    <div class="container main main_8 s-main__main">
    <!-- main content -->
    <div class="main__content">
        <ul class="bread-crumbs main__bread-crumbs">
        <li class="bread-crumbs__item">
            <a href="index.html" class="bread-crumbs__link text-link">
            Главная
            </a>
        </li>
        <li class="bread-crumbs__item">
            <div class="bread-crumbs__active">
            Пройдите тест
            </div>
        </li>
        </ul>
        <div class="section__title section__title_left main__title">
        <h1 class="section__title-title section__title-title_underline-none h1">
            <b><?=$data['TITLE']?></b>
        </h1>
        <h3 class="section__title-subtitle h6">
            <?=$data['DESC']['TEXT']?>
        </h3>
        </div>
        <ul class="main__list main__list_block text-list">
            <?foreach($data['LIST'] as $i => $item):?>
                <li><?=$item?></li>
            <?endforeach;?>
        </ul>
        <div class="main__btn text-btn">
        <a href="#quiz" class="btn btn_xl btn_shadow js-scroll-to">
            Перейти к заполнению
        </a>
        </div>
    </div>
    <!-- /main content -->
    </div>
    <!-- /main -->
</section>
<!-- /main section -->

<!-- quiz section -->
<section class="s-quiz s-quiz_bg section js-section" id="quiz">
    <!-- quiz -->
    <div class="container quiz s-quiz__container">
    <!-- quiz bg -->
    <div class="quiz__bg js-quiz">
        <!-- quiz reset -->
        <div class="js-quiz-reset"></div>
        <!-- quiz reset -->
        <!-- quiz next -->
        <div class="js-quiz-next"></div>
        <!-- /quiz next -->
        <!-- quiz pagination -->
        <div class="quiz__pagination js-quiz-pagination">
        <div class="quiz__pagination-item js-quiz-pagination-item">
            <span>1 шаг</span>
        </div>
        <div class="quiz__pagination-item js-quiz-pagination-item">
            <span>2 шаг</span>
        </div>
        <div class="quiz__pagination-item js-quiz-pagination-item">
            <span>3 шаг</span>
        </div>
        </div>
        <!-- /quiz pagination -->
        <!-- quiz row -->
        <div class="row quiz__row">
        <!-- quiz steps -->
        <form class="col-lg-8 col-12 order-last quiz__steps js-form js-quiz-form" data-thanks="none">
            <!-- quiz step -->
            <div class="quiz__step quiz__step_1 js-quiz-step js-active" data-step="1">
            <!-- quiz heading -->
            <div class="quiz__heading js-accordion-title">
                <h3 class="quiz__heading-title h5">
                Как хотите обучаться?
                </h3>
            </div>
            <!-- /quiz heading -->
            <!-- quiz inputs -->
            <div class="quiz__inputs row js-input">
                <div class="col-md-6 col-12">
                <!-- input checkbox group -->
                <div class="input-checkbox-group">
                    <!-- input checkbox -->
                    <label class="input input_checkbox input_mb input-checkbox input-checkbox_img">
                    <input class="input-checkbox__input js-quiz-sub-value js-input-required" type="radio" name="quiz-2-1" value="Очно" data-img="1-1">
                    <span class="input-checkbox__img img">
                        <picture>
                        <source data-srcset="/img/quiz/quiz-1-1.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                        <img class="js-lazy js-object-fit" data-src="/img/quiz/quiz-1-1.jpg" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                        </picture>
                    </span>
                    <span class="input-checkbox__text">
                        <i class="input-checkbox__check"></i>
                        Очно
                    </span>
                    </label>
                    <!-- /input checkbox -->
                    <!-- input checkbox -->
                    <label class="input input_checkbox input_mb input-checkbox input-checkbox_img">
                    <input class="input-checkbox__input js-quiz-input-another js-input-required" type="radio" name="quiz-2-1" value="Онлайн" data-img="1-2">
                    <span class="input-checkbox__img img">
                        <picture>
                        <source data-srcset="/img/quiz/quiz-1-2.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                        <img class="js-lazy js-object-fit" data-src="/img/quiz/quiz-1-2.jpg" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                        </picture>
                    </span>
                    <span class="input-checkbox__text">
                        <i class="input-checkbox__check"></i>
                        Онлайн
                    </span>
                    </label>
                    <!-- /input checkbox -->
                </div>
                <!-- input checkbox group -->
                </div>
                <!-- quiz additionally -->
                <div class="col-12 quiz__additionally">
                <!-- quiz heading -->
                <div class="quiz__heading">
                    <h3 class="quiz__heading-title h5">
                    Выберите адрес:
                    </h3>
                </div>
                <!-- /quiz heading -->
                <!-- quiz inputs -->
                <div class="quiz__inputs">
                    <!-- input checkbox text -->
                    <div class="input-checkbox-group input-checkbox-group_text">
                        <?foreach($data['REGION'] as $i => $item):?>
                            <label class="input input_checkbox input_mb input-checkbox input-checkbox_text">
                                <input class="input-checkbox__input js-quiz-sub-input" type="radio" name="quiz-2-1-sub" value="Очно. <?=$data['REGION'][$i]?>, <?=$data['REGION_0'][$i]?>" >
                                <span class="input-checkbox__text input-checkbox__text_location">
                                    <b><?=$data['REGION'][$i]?>:</b>
                                        <?=$data['REGION_0'][$i]?> <br>
                                        <a href="<?=$data['COORD_0'][$i]?>" class="text-link text-link_border text-accent" target="_blank">
                                            Как пройти
                                        </a>
                                </span>
                            </label>
                        <?endforeach;?>
                    </div>
                    <!-- input checkbox text -->
                </div>
                <!-- /quiz inputs -->
                </div>
                <!-- quiz additionally -->
            </div>
            <!-- /quiz inputs -->
            <!-- quiz btns -->
            <div class="quiz__btns">
                <div class="quiz__btns-item quiz__btns-item_next">
                <button class="btn btn_xl js-quiz-next">
                    Дальше<i class="btn-arrow"></i>
                </button>
                </div>
            </div>
            <!-- /quiz btns -->
            </div>
            <!-- /quiz step -->
            <!-- quiz step -->
            <div class="quiz__step quiz__step_2 js-quiz-step" data-step="2">
            <!-- quiz heading -->
            <div class="quiz__heading">
                <h3 class="quiz__heading-title h5">
                Данные об ученике:
                </h3>
            </div>
            <!-- /quiz heading -->
            <!-- quiz inputs -->
            <div class="quiz__inputs row">
                <div class="col-md-6 col-12">
                <div class="input-label">
                    ФИО ученика
                </div>
                <div class="input input_2 input_name input_icon js-input">
                    <input type="text" name="disciple_fio" placeholder="Сидоров Данил Николаевич" class="input__input js-input-name js-input-required">
                </div>
                <div class="input-label">
                    Номер телефона ученика
                </div>
                <div class="input input_2 input_phone input_icon js-input2">
                    <input type="text" name="disciple_phone" placeholder="+ 7 ( 900) 300 - 76 - 76" class="input__input js-input-phone js-input-required2">
                </div>
                </div>
                <div class="col-md-6 col-12">
                <div class="input-label">
                    Дата рождения:
                </div>
                <div class="input input_2 input_3 input_date input_icon js-input">
                    <input type="text" name="disciple_birthday" placeholder="01.01.2001" class="input__input js-input-date js-input-required">
                </div>
                </div>
                <div class="col-12">
                <div class="input-label">
                    Муниципальное образование:
                </div>
                <div class="input input_3 input_select js-input">
                    <select name="disciple_education" class="input__input js-input-select js-input-required">
                    <option value="">Выбрать</option>
                    <?foreach ($data['MUNIC'] as $key => $value): ?>
                        <option value="<?=$value?>"><?=$value?></option>
                    <?endforeach;?>
                    </select>
                </div>
                <div class="input input_2 js-input">
                    <input type="text" name="disciple_place_of_study" placeholder="Место учёбы (также группа или класс):" class="input__input js-input-required">
                </div>
                </div>
            </div>
            <!-- /quiz inputs -->
            <!-- quiz btns -->
            <div class="quiz__btns">
                <div class="quiz__btns-item quiz__btns-item_prev">
                <button class="btn btn_gray btn_xl js-quiz-prev">
                    <i class="btn-arrow btn-arrow_reverse"></i>Назад
                </button>
                </div>
                <div class="quiz__btns-item quiz__btns-item_next">
                <button class="btn btn_xl js-quiz-next">
                    Дальше<i class="btn-arrow"></i>
                </button>
                </div>
            </div>
            <!-- /quiz btns -->
            </div>
            <!-- /quiz step -->
            <!-- quiz step -->
            <div class="quiz__step quiz__step_3 js-quiz-step" data-step="3">
            <!-- quiz heading -->
            <div class="quiz__heading">
                <h3 class="quiz__heading-title h5">
                Данные взрослого <small>(папа, мама или законный представитель):</small>
                </h3>
            </div>
            <!-- /quiz heading -->
            <!-- quiz inputs -->
            <div class="quiz__inputs row">
                <div class="col-md-6 col-12">
                <div class="input-label">
                    ФИО взрослого
                </div>
                <div class="input input_2 input_name input_icon js-input">
                    <input type="text" name="parent_fio" placeholder="Сидоров Данил Николаевич" class="input__input js-input-name js-input-required">
                </div>
                <div class="input-label">
                    Номер телефона
                </div>
                <div class="input input_2 input_phone input_icon js-input">
                    <input type="text" name="parent_phone" placeholder="+ 7 ( 900) 300 - 76 - 76" class="input__input js-input-phone js-input-required">
                </div>
                <div class="input-label">
                    Электронная почта
                </div>
                <div class="input input_2 input_email input_icon js-input">
                    <input type="text" name="parent_email" placeholder="roditel@mail.ru" class="input__input js-input-email js-input-required">
                </div>
                </div>
                <div class="col-md-6 col-12">
                <div class="input-label">
                    Дата рождения:
                </div>
                <div class="input input_2 input_3 input_date input_icon js-input">
                    <input type="text" name="parent_birthday" placeholder="01.01.2001" class="input__input js-input-date js-input-required">
                </div>
                </div>
                <div class="col-12">
                <label class="input input_checkbox input-checkbox js-input js-success">
                    <input class="input-checkbox__input js-input-required" type="checkbox" name="policy" value="Я ознакомился с договором-офертой на обучение в АНО “Профи-центр” и согласен с его положениями">
                    <span class="input-checkbox__text input-checkbox__text_fz-xs">
                    <i class="input-checkbox__check"></i>
                    <span>
                        Ознакомился и согласен с <a href="/offer-contract/" class="text-link text-link_underline text-red js-popup-open">Договором-офертой</a> в котором оговорены обязательства «Профи-центра», мои и учащегося.
                    </span>
                    </span>
                </label>
                <label class="input input_checkbox input-checkbox js-input js-success">
                    <input class="input-checkbox__input js-input-required" type="checkbox" name="policy" value="Даю согласие АНО «Профи-центр» на отправку мне информационных сообщений в sms или e-mail с информацией о ходе рассмотрения моей заявки, а также о возможностях участия в иных проектах. ">
                    <span class="input-checkbox__text input-checkbox__text_fz-xs">
                    <i class="input-checkbox__check"></i>
                    <span>
                    Даю согласие АНО «Профи-центр» на отправку мне информационных сообщений в sms или e-mail с информацией о ходе рассмотрения моей заявки, а также о возможностях участия в иных проектах. 
                    </span>
                    </span>
                </label>
                </div>
            </div>
            <!-- /quiz inputs -->
            <!-- quiz btns -->
            <div class="quiz__btns">
                <div class="quiz__btns-item quiz__btns-item_prev">
                <button class="btn btn_gray btn_xl js-quiz-prev">
                    <i class="btn-arrow btn-arrow_reverse"></i>Назад
                </button>
                </div>
                <div class="quiz__btns-item quiz__btns-item_next">
                <button class="btn btn_xl">
                    <input type="hidden" name="form" value="Квиз">
                    Отправить заявку<i class="btn-arrow"></i>
                </button>
                </div>
                <div class="quiz__btns-item quiz__btns-item_info">
                <div class="form__info">
                    Нажимая на кнопку, Вы соглашаетесь
                    с&nbsp;<a href="#popup-policy" class="text-link text-link_underline text-secondary js-popup-open">политикой конфиденциальности</a> 
                </div>
                </div>
            </div>
            <!-- /quiz btns -->
            </div>
            <!-- /quiz step -->
            <!-- quiz step -->
            <div class="quiz__step quiz__step_process js-quiz-step" data-step="process">
            <!-- quiz heading -->
            <div class="quiz__heading">
                <h3 class="quiz__heading-title h3">
                Пожалуйста, подождите, Ваши данные отправляются!
                </h3>
            </div>
            <!-- /quiz heading -->
            <!-- quiz process -->
            <div class="quiz__process js-quiz-process">
                <div class="quiz__process-fill js-quiz-process-fill" style="width: 50%;"></div>
                <div class="quiz__process-number">Идет загрузка</div>
            </div>
            <!-- /quiz process -->
            </div>
            <!-- /quiz step -->
            <!-- quiz step -->
            <div class="quiz__step quiz__step_finish js-quiz-step" data-step="finish">
            <div class="quiz__finish">
                <h3 class="quiz__finish-title h3">
                Ваша заявка отправлена!
                </h3>
                <div class="quiz__finish-descr text-descr">
                <p>
                    Время начала рассмотрения заявки может составлять до 10 дней. Сообщения о начале и процессе рассмотрения придут Вам на e-mail.
                </p>
                </div>
                <div class="quiz__finish-btn text-btn">
                <a href="/" class="btn btn_xl" data-form="Вернуться на сайт">
                    Вернуться на сайт<i class="btn-arrow"></i>
                </a>
                </div>
                <div class="quiz__finish-img">
                <picture>
                    <source data-srcset="/img/bg/quiz-img.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                    <img class="js-lazy" data-src="/img/bg/quiz-img.png" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                </picture>
                </div>
            </div>
            </div>
            <!-- /quiz step -->
        </form>
        <!-- /quiz steps -->
        <!-- quiz params -->
        <div class="col-lg-4 col-12 quiz__params">
            <div class="quiz__params-inner">
            <div class="quiz__params-img img js-quiz-img" data-img="1-1">
                <picture>
                <source data-srcset="/img/quiz/quiz-img-1.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                <img class="js-lazy js-object-fit" data-src="/img/quiz/quiz-img-1.jpg" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                </picture>
            </div>
            <div class="quiz__params-img img js-quiz-img" data-img="1-2">
                <picture>
                <source data-srcset="/img/quiz/quiz-img-2.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                <img class="js-lazy js-object-fit" data-src="/img/quiz/quiz-img-2.jpg" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                </picture>
            </div>
            <div class="quiz__params-text">
                Выберите вариант <br>ответа
            </div>
            </div>
        </div>
        <!-- /quiz params -->
        </div>
        <!-- /quiz row -->
    </div>
    <!-- /quiz bg -->
    </div>
    <!-- /quiz -->
</section>
<!-- /quiz section -->