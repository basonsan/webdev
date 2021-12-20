<?
/**
 * @var $arResult array
 */
$data = $arResult['DATA'];
?>

<div class="wrapper" id="wrapper">
    <!-- header  -->
    
      <?if($data['VAR']==30):?>
    <header class="header header_sidebar js-header" id="header">
      <!-- header line -->
      <div class="container header__line-wrap">
        <div class="header__line header__height js-header-height">
          <!-- header menu-burger -->
          <div class="header__line-item header__line-item_burger">
            <div class="menu-burger header__burger js-menu-burger">
              <div class="menu-burger__lines">
                <div class="menu-burger__hamburger">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
                <div class="menu-burger__cross">
                  <span></span>
                  <span></span>
                </div>
              </div>
              <div class="menu-burger__label">
                Меню
              </div>
            </div>
          </div>
          <!-- /header menu-burger -->
          <!-- header search -->
          <div class="header__line-item header__line-item_search">
            <form class="header__search">
              <div class="header__search-icon js-menu-search">
                <svg width="20" height="26" viewBox="0 0 20 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="9.69389" cy="9.69389" r="8.69389" stroke="#258ECC" stroke-width="2" />
                  <path d="M5.61221 18.3674L2.04077 25.0001" stroke="#258ECC" stroke-width="2" stroke-linecap="round" stroke-linejoin="bevel" />
                </svg>
              </div>
              <div class="header__search-input">
                <div class="input input_search">
                  <input type="text" name="search2" placeholder="Поиск" class="input__input">
                </div>
              </div>
            </form>
          </div>
          <!-- /header search -->
          <!-- header logo -->
          <div class="header__line-item header__line-item_logo">
            <div class="header__logo">
              <div class="header__logo-item header__logo-item_mobile">
                <a href="/" class="header__logo-img">
                  <picture>
                    <source data-srcset="/img/logo.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                    <img class="js-lazy" data-src="/img/logo.png" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                  </picture>
                </a>
              </div>
            </div>
          </div>
          <!-- /header logo -->
          <!-- header menu -->
          <div class="header__line-item header__line-item_menu">
            <nav class="header__menu js-menu">

              <ul class="header__menu-items">
                <!-- <li class="header__menu-item">
                  <a href="/psychologist/" class="header__menu-link js-menu-link js-scroll-to">
                    Помощь психологов
                  </a>
                </li> 
                <li class="header__menu-item">
                  <a href="/about/" class="header__menu-link js-menu-link js-scroll-to">
                    О нас
                  </a>
                </li>
                <li class="header__menu-item">
                  <a href="/team/" class="header__menu-link js-menu-link js-scroll-to">
                    Команда
                  </a>
                </li>
                <li class="header__menu-item">
                  <a href="#faq" class="header__menu-link js-menu-link js-scroll-to">
                    Вопросы и ответы
                  </a>
                </li>
                <li class="header__menu-item">
                  <a href="/contacts/" class="header__menu-link js-menu-link js-scroll-to">
                    Контакты
                  </a>
                </li> -->
              </ul>
            </nav>
          </div>
          <!-- /header menu -->
        </div>
      </div>
      <!-- /header line -->
      <?endif;?>
      <?if($data['VAR']==31):?>
    <header class="header header_sidebar-none js-header" id="header">
      <!-- header line -->
      <div class="container header__line-wrap">
        <div class="header__line header__height js-header-height">
          <!-- header menu-burger -->
          <div class="header__line-item header__line-item_burger">
            <div class="menu-burger header__burger js-menu-burger">
              <div class="menu-burger__lines">
                <div class="menu-burger__hamburger">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
                <div class="menu-burger__cross">
                  <span></span>
                  <span></span>
                </div>
              </div>
              <div class="menu-burger__label">
                Меню
              </div>
            </div>
          </div>
          <!-- /header menu-burger -->
          <!-- header search -->
          <div class="header__line-item header__line-item_search">
            <form class="header__search" >
              <div class="header__search-icon js-menu-search">
                <svg width="20" height="26" viewBox="0 0 20 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="9.69389" cy="9.69389" r="8.69389" stroke="#258ECC" stroke-width="2" />
                  <path d="M5.61221 18.3674L2.04077 25.0001" stroke="#258ECC" stroke-width="2" stroke-linecap="round" stroke-linejoin="bevel" />
                </svg>
              </div>
              <div class="header__search-input">
                <div class="input input_search">
                  <input type="text" name="search2" placeholder="Поиск" class="input__input" >
                </div>
              </div>
            </form>
          </div>
          <!-- /header search -->
          <!-- header logo -->
          <div class="header__line-item header__line-item_logo">
            <div class="header__logo">
              <div class="header__logo-item header__logo-item_mobile">
                <a href="/" class="header__logo-img">
                  <picture>
                    <source data-srcset="/img/logo.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                    <img class="js-lazy" data-src="/img/logo.png" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                  </picture>
                </a>
              </div>
            </div>
          </div>
          <!-- /header logo -->
          <!-- header menu -->
          <div class="header__line-item header__line-item_menu">
            <nav class="header__menu js-menu">

            </nav>
          </div>
          <!-- /header menu -->
          <!-- header btn -->
          <div class="header__line-item header__line-item_btn">
            <!--<div class="header__btn">
              <a href="#popup-callback" class="btn btn_border btn_blue btn_text-accent js-popup-open" data-form="Записаться">
              Связаться с нами2
              <?$title = $APPLICATION->GetTitle() ?>
               <?= ($title == 'Поиск') ? 'Связаться с нами' : 'Связаться с нами'?> 
              </a>
            </div>-->
             <!-- sidebar contacts -->
             <div class="header-sidebar__contacts contacts" style="margin-top: 0px;">
              <!-- contacts item -->
              <div class="contacts__item contacts__item_icon contacts__item_fz-16" style="margin-top: 0px;">
                <a href="tel:88422315130" class="text-link" style="color: #258ecc;">
                  <i class="contacts__item-icon header-sidebar__icon-phone">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.4331 12.0825L12.6931 10.8225C12.8628 10.6549 13.0775 10.5402 13.3112 10.4923C13.5448 10.4443 13.7874 10.4653 14.0094 10.5525L15.545 11.1656C15.7693 11.2567 15.9617 11.4121 16.0978 11.6123C16.2339 11.8125 16.3078 12.0486 16.31 12.2906V15.1031C16.3087 15.2678 16.2741 15.4306 16.2082 15.5815C16.1424 15.7325 16.0466 15.8685 15.9268 15.9815C15.807 16.0945 15.6655 16.1821 15.511 16.239C15.3564 16.2959 15.192 16.3209 15.0275 16.3125C4.26686 15.6431 2.09561 6.53065 1.68498 3.04315C1.66592 2.87189 1.68334 2.69853 1.73608 2.53448C1.78883 2.37044 1.87571 2.21942 1.99102 2.09136C2.10632 1.96331 2.24743 1.86111 2.40507 1.79151C2.5627 1.7219 2.73329 1.68647 2.90561 1.68752H5.62248C5.86492 1.68824 6.10161 1.76147 6.30209 1.8978C6.50257 2.03413 6.65769 2.22732 6.74748 2.45252L7.3606 3.98815C7.45075 4.20925 7.47375 4.45201 7.42673 4.6861C7.37971 4.9202 7.26476 5.13525 7.09623 5.3044L5.83623 6.5644C5.83623 6.5644 6.56186 11.475 11.4331 12.0825Z" fill="#CACDD0" />
                    </svg>
                  </i>
                  8 (8422) <b>31-51-30</b>
                </a>
              </div>
              <!-- /contacts item -->
              <!-- contacts item -->
              <div class="contacts__item contacts__item_icon" style="margin-top: 0px;">
                <a href="mailto:office@ul-profi.ru" class="text-link">
                  <i class="contacts__item-icon">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M15 3H3C2.175 3 1.5075 3.675 1.5075 4.5L1.5 13.5C1.5 14.325 2.175 15 3 15H15C15.825 15 16.5 14.325 16.5 13.5V4.5C16.5 3.675 15.825 3 15 3ZM15 6L9 9.75L3 6V4.5L9 8.25L15 4.5V6Z" fill="#CACDD0" />
                    </svg>
                  </i>
                  office@ul-profi.ru
                </a>
              </div>
              <!-- /contacts item -->
            </div>
            <!-- /sidebar contacts -->
          </div>
          <!-- /header btn -->
        </div>
      </div>
      <!-- /header line -->
      <?endif;?>
      <?if($data['VAR']==33):?>
    <header class="header header_sidebar-none js-header" id="header">
      <!-- header line -->
      <div class="container header__line-wrap">
        <div class="header__line header__height js-header-height">
          <!-- header menu-burger -->
          <div class="header__line-item header__line-item_burger">
            <div class="menu-burger header__burger js-menu-burger">
              <div class="menu-burger__lines">
                <div class="menu-burger__hamburger">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
                <div class="menu-burger__cross">
                  <span></span>
                  <span></span>
                </div>
              </div>
              <div class="menu-burger__label">
                Меню
              </div>
            </div>
          </div>
          <!-- /header menu-burger -->
          <!-- header search -->
          <div class="header__line-item header__line-item_search">
            <form class="header__search">
              <div class="header__search-icon js-menu-search">
                <svg width="20" height="26" viewBox="0 0 20 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <circle cx="9.69389" cy="9.69389" r="8.69389" stroke="#258ECC" stroke-width="2" />
                  <path d="M5.61221 18.3674L2.04077 25.0001" stroke="#258ECC" stroke-width="2" stroke-linecap="round" stroke-linejoin="bevel" />
                </svg>
              </div>
              <div class="header__search-input">
                <div class="input input_search">
                  <input type="text" name="search2" placeholder="Поиск" class="input__input">
                </div>
              </div>
            </form>
          </div>
          <!-- /header search -->
          <!-- header logo -->
          <div class="header__line-item header__line-item_logo">
            <div class="header__logo">
              <!-- <div class="header__logo-item">
                <a href="javascript:void(0);" class="header__logo-img">
                  <picture>
                    <source data-srcset="/img/main/logo-1.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                    <img class="js-lazy" data-src="/img/main/logo-1.png" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                  </picture>
                </a>
              </div> -->
              <div class="header__logo-item header__logo-item_mobile">
                <a href="/" class="header__logo-img">
                  <picture>
                    <source data-srcset="/img/logo.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                    <img class="js-lazy" data-src="/img/logo.png" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                  </picture>
                </a>
              </div>
              <!-- <div class="header__logo-item">
                <div class="header__logo-text">
                  Единый центр
                  поддержки семей
                </div>
              </div> -->
            </div>
          </div>
          <!-- /header logo -->
          <!-- header menu -->
          <div class="header__line-item header__line-item_menu">
            <nav class="header__menu js-menu">

            </nav>
          </div>
          <!-- /header menu -->
          <!-- header btn -->
          <div class="header__line-item header__line-item_btn">
            <div class="header__btn">
            
              <a href="#popup-callback" class="btn btn_border btn_blue btn_text-accent js-popup-open" data-form="Записаться">
                Связаться с нами
              </a>
            </div>
          </div>
          <!-- /header btn -->
        </div>
      </div>
      <!-- /header line -->
      <?endif;?>
      <!-- header sidebar -->
      <div class="header__sidebar header-sidebar">
        <div class="header-sidebar__overlay js-menu-close"></div>
        <div class="container header-sidebar__container">
          <div class="header-sidebar__close js-menu-close"></div>
          <div class="header-sidebar__inner">
            <!-- sidebar logo -->
            <a href="/" class="header-sidebar__logo">
              <picture>
                <source data-srcset="/img/logo.webp" type="image/webp" srcset="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
                <img class="js-lazy" data-src="/img/logo.png" alt src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==">
              </picture>
            </a>
            <!-- /sidebar logo -->
            <!-- sidebar menu -->
            <nav class="header-sidebar__menu js-menu">
              <ul class="header-sidebar__menu-items">
                <li class="header-sidebar__menu-item">
                  <a href="" class="header-sidebar__menu-link js-menu-link js-menu-link-sub">
                    <i class="header-sidebar__menu-icon">
                      <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                          <path d="M9.5 18.2083C6.74579 18.2083 4.237 16.8157 2.78271 14.4835C2.774 14.4724 2.76608 14.4613 2.75975 14.451C2.58004 14.162 2.41379 13.8454 2.2515 13.486C1.80738 12.4671 1.58333 11.3944 1.58333 10.2916C1.57146 10.2417 1.1875 7.66958 1.1875 6.33325C1.1875 2.51188 4.58454 2.044 5.37779 1.987C5.80133 1.60938 7.334 0.395752 9.5 0.395752C12.9517 0.395752 17.8125 2.23796 17.8125 6.33325C17.8125 7.64504 17.4285 10.2401 17.4127 10.3494C17.4167 11.3904 17.1934 12.4663 16.7517 13.4883C16.5751 13.877 16.382 14.2325 16.1738 14.5531C16.1587 14.5761 16.1413 14.5983 16.1215 14.6173C14.7123 16.8434 12.2202 18.2083 9.5 18.2083ZM3.41683 14.0092C3.42554 14.0203 3.43346 14.0306 3.43979 14.0417C4.74683 16.1547 7.01179 17.4166 9.5 17.4166C11.9478 17.4166 14.1906 16.1887 15.4992 14.1327C15.5151 14.109 15.5325 14.0853 15.5531 14.0655C15.6956 13.8351 15.8698 13.5145 16.0273 13.1677C16.4231 12.2525 16.625 11.282 16.625 10.2916C16.6329 10.2077 17.0208 7.58725 17.0208 6.33325C17.0208 2.78421 12.6231 1.18742 9.5 1.18742C7.31421 1.18742 5.83617 2.64013 5.82192 2.65517C5.7475 2.72879 5.64696 2.76996 5.54246 2.77075C5.39679 2.77154 1.97917 2.82617 1.97917 6.33325C1.97917 7.611 2.36708 10.2069 2.37104 10.233C2.375 11.2843 2.57688 12.2517 2.97588 13.1653C3.116 13.4788 3.26167 13.7567 3.41683 14.0092Z" />
                          <path d="M16.853 12.2709C16.6812 12.2709 16.5229 12.1577 16.473 11.9843L15.5349 8.70682C9.80797 8.65932 7.48839 7.23273 6.5653 6.23602C5.9676 7.77186 4.13805 8.44161 3.48572 8.63557L2.5278 11.9835C2.46764 12.1949 2.24756 12.3168 2.03856 12.2551C1.82876 12.1949 1.70685 11.9756 1.76701 11.7658L2.78668 8.20332C2.82547 8.06557 2.9371 7.95948 3.07643 7.92703C3.10572 7.9199 5.96522 7.22165 5.96522 5.19261C5.96522 4.99232 6.11485 4.82369 6.31355 4.79994C6.51305 4.77065 6.69751 4.90365 6.7458 5.0984C6.75214 5.11977 7.64672 7.91673 15.8333 7.91673C16.0099 7.91673 16.1651 8.03311 16.2133 8.20332L17.233 11.7658C17.2932 11.9764 17.1713 12.1949 16.9615 12.2551C16.9258 12.2662 16.8886 12.2709 16.853 12.2709Z" />
                          <path d="M17.005 12.6667C16.9132 12.6667 16.8206 12.658 16.7287 12.6501C16.511 12.6287 16.3519 12.4347 16.3733 12.217C16.3946 12.0001 16.5854 11.8505 16.8055 11.8616C16.872 11.8679 16.9385 11.875 17.005 11.875C17.6597 11.875 18.1925 11.3422 18.1925 10.6875C18.1925 10.0843 17.7436 9.57682 17.1483 9.50478C16.9314 9.47944 16.7762 9.28232 16.8023 9.06461C16.8285 8.84848 17.0272 8.68778 17.2425 8.71865C18.2353 8.8374 18.9842 9.68448 18.9842 10.6867C18.9842 11.7792 18.0959 12.6667 17.005 12.6667Z" />
                          <path d="M1.97917 12.6667C0.88825 12.6667 0 11.7792 0 10.6875C0 9.67577 0.757625 8.82868 1.76146 8.71864C1.98471 8.69964 2.17392 8.85164 2.19846 9.06856C2.223 9.28548 2.06546 9.48102 1.84854 9.50556C1.25558 9.57048 0.791667 10.0898 0.791667 10.6875C0.791667 11.3422 1.32446 11.875 1.97917 11.875C2.0425 11.875 2.10188 11.8695 2.15254 11.8592C2.3655 11.8101 2.57608 11.9534 2.61963 12.1671C2.66396 12.3817 2.52542 12.5899 2.31167 12.6342C2.20875 12.6556 2.09633 12.6667 1.97917 12.6667Z" />
                          <path d="M6.33325 11.875C5.67854 11.875 5.14575 11.3422 5.14575 10.6875C5.14575 10.0328 5.67854 9.5 6.33325 9.5C6.98796 9.5 7.52075 10.0328 7.52075 10.6875C7.52075 11.3422 6.98796 11.875 6.33325 11.875ZM6.33325 10.2917C6.11475 10.2917 5.93742 10.4698 5.93742 10.6875C5.93742 10.9052 6.11475 11.0833 6.33325 11.0833C6.55175 11.0833 6.72909 10.9052 6.72909 10.6875C6.72909 10.4698 6.55175 10.2917 6.33325 10.2917Z" />
                          <path d="M12.6667 11.875C12.012 11.875 11.4792 11.3422 11.4792 10.6875C11.4792 10.0328 12.012 9.5 12.6667 9.5C13.3215 9.5 13.8542 10.0328 13.8542 10.6875C13.8542 11.3422 13.3215 11.875 12.6667 11.875ZM12.6667 10.2917C12.4482 10.2917 12.2709 10.4698 12.2709 10.6875C12.2709 10.9052 12.4482 11.0833 12.6667 11.0833C12.8852 11.0833 13.0626 10.9052 13.0626 10.6875C13.0626 10.4698 12.8852 10.2917 12.6667 10.2917Z" />
                          <path d="M9.5 15.06C8.68933 15.06 7.87787 14.7512 7.26037 14.1337C7.106 13.9794 7.106 13.7284 7.26037 13.574C7.41475 13.4197 7.66571 13.4197 7.82008 13.574C8.74633 14.5003 10.2529 14.5003 11.1791 13.574C11.3335 13.4197 11.5845 13.4197 11.7388 13.574C11.8932 13.7284 11.8932 13.9794 11.7388 14.1337C11.1221 14.752 10.3107 15.06 9.5 15.06Z" />
                        </g>
                      </svg>
                    </i>Детям
                  </a>
                  <!-- menu sub -->
                  <div class="header-sidebar__submenu js-menu-sub">
                    <div class="header-sidebar__submenu-top">
                      <div class="header-sidebar__submenu-close js-menu-sub-close js-menu-close">
                        <span class="d-none d-lg-block">Закрыть</span>
                        <span class="d-block d-lg-none">Обратно в меню</span>
                      </div>
                      <div class="header-sidebar__submenu-title h2">Детям</div>
                      <!-- <div class="header-sidebar__submenu-link">
                        <a href="/child/" class="text-link text-link_arrow">Перейти</a>
                      </div> -->
                    </div>
                    <ul class="header-sidebar__submenu-items">
                      <li><a href="/english/" class="js-menu-link">Бесплатный английский</a></li>
                      <li>
                        <a href="/courses/" class="js-menu-link js-menu-dbc">Курсы по школьным предметам</a>
                        <!-- <a href="/courses/" class="js-menu-link js-menu-link-sub js-menu-dbc">Курсы по школьным предметам</a>
                        <div class="header-sidebar__submenu-sub js-menu-sub">
                          <div class="header-sidebar__submenu-input input input_search input_icon">
                            <input type="text" name="search" placeholder="Быстрый поиск" class="input__input">
                          </div>
                          <div class="header-sidebar__submenu-scroll js-simpleBar">
                            <ul class="header-sidebar__submenu-items js-simpleBar">
                              <li>
                                <a href="/courses/">Русский язык и литература</a>
                              </li>
                              <li>
                                <a href="/courses/">Математика, алгебра, геометрия</a>
                              </li>
                              <li>
                                <a href="/courses/">Иностранные языки </a>
                                <small>(английский, немецкий, испанский, французский, китайский)</small>
                              </li>
                              <li>
                                <a href="/courses/">География, биология</a>
                              </li>
                              <li>
                                <a href="/courses/">Химия</a>
                              </li>
                              <li>
                                <a href="/courses/">Физика</a>
                              </li>
                              <li>
                                <a href="/courses/">История</a>
                              </li>
                              <li>
                                <a href="/courses/">Обществознание</a>
                              </li>
                              <li>
                                <a href="/courses/">Математика, информатика</a>
                              </li>
                              <li>
                                <a href="/courses/">Музыка</a>
                              </li>
                            </ul>
                          </div>
                        </div> -->
                      </li>
                      <li><a href="/start/" class="js-menu-link">Старт в будущее</a></li>
                      <!-- <li><a href="javascript:void(0);" class="js-menu-link">Школа Soft-skill</a></li> -->
                      <li><a href="/psychologist/" class="js-menu-link">Помощь психологов</a></li>
                    </ul>
                  </div>
                  <!-- /menu sub -->
                </li>
                <li class="header-sidebar__menu-item">
                  <a href="" class="header-sidebar__menu-link js-menu-link js-menu-link-sub">
                    <i class="header-sidebar__menu-icon">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.1046 14.7258L16.3446 14.2477L15.8166 13.4581C15.4993 12.9837 14.8456 12.8454 14.3585 13.1881V12.2553C15.3729 11.5743 16.0772 10.466 16.2115 9.19009H16.5149C17.0603 9.19009 17.504 8.74647 17.504 8.20108V7.50879C17.504 7.14922 17.3105 6.83476 17.0227 6.66167V4.6438C17.0227 2.62597 15.3811 0.984375 13.3633 0.984375H10.6552C8.63741 0.984375 6.99581 2.62597 6.99581 4.6438V6.66167C6.70806 6.83481 6.51455 7.14922 6.51455 7.50879V8.20108C6.51455 8.74642 6.95822 9.19009 7.50357 9.19009H7.80699C7.94136 10.466 8.64566 11.5743 9.66003 12.2553V13.1881C9.17357 12.8456 8.51949 12.9832 8.20188 13.4581L7.67376 14.2477L5.91389 14.7258C4.25342 15.1768 3.09375 16.6935 3.09375 18.4142V18.794C3.09375 19.0076 3.26689 19.1807 3.48044 19.1807C3.694 19.1807 3.86714 19.0076 3.86714 18.794V18.4142C3.86714 17.0417 4.79216 15.8319 6.11657 15.4721L7.81596 15.0105L9.69994 16.6604C10.1476 17.0525 10.8248 17.0546 11.2748 16.6654L12.0092 16.0302L12.7436 16.6654C13.1946 17.0555 13.8717 17.0518 14.3184 16.6605L16.2024 15.0105L17.9018 15.4721C19.2262 15.8319 20.1512 17.0416 20.1512 18.4142V20.9785C20.1512 21.6495 19.6054 22.1954 18.9344 22.1954H18.0886V20.3403C18.0886 20.1267 17.9155 19.9536 17.7019 19.9536C17.4883 19.9536 17.3152 20.1267 17.3152 20.3403V22.1954H6.70311V20.3403C6.70311 20.1267 6.52997 19.9536 6.31641 19.9536C6.10285 19.9536 5.92972 20.1267 5.92972 20.3403V22.1954H5.08399C4.413 22.1954 3.86714 21.6495 3.86714 20.9785V20.6018C3.86714 20.3882 3.694 20.2151 3.48044 20.2151C3.26689 20.2151 3.09375 20.3882 3.09375 20.6018V20.9785C3.09375 22.0759 3.98655 22.9688 5.08399 22.9688H18.9345C20.0319 22.9688 20.9247 22.0759 20.9247 20.9785V18.4142C20.9247 16.6935 19.765 15.1769 18.1046 14.7258ZM16.7306 7.50884V8.20113C16.7306 8.32003 16.6338 8.41675 16.5149 8.41675H16.2352V7.29328H16.5149C16.6338 7.29328 16.7306 7.39 16.7306 7.50884ZM7.78328 8.41675H7.50351C7.38462 8.41675 7.28789 8.32003 7.28789 8.20113V7.50884C7.28789 7.38995 7.38462 7.29322 7.50351 7.29322H7.78328V8.41675ZM8.16997 6.51989H7.76915V4.64385C7.76915 3.05252 9.0638 1.75782 10.6551 1.75782H13.3632C14.9546 1.75782 16.2493 3.05247 16.2493 4.64385V6.51989H15.8485C15.6244 6.51989 15.442 6.33757 15.442 6.11344V5.29783C15.442 4.65633 14.9201 4.13439 14.2786 4.13439C14.1132 4.13439 13.9529 4.16873 13.8022 4.23638C12.6627 4.74779 11.3557 4.74774 10.2163 4.23643C10.0655 4.16878 9.90525 4.13439 9.73985 4.13439C9.09829 4.13439 8.57636 4.65633 8.57636 5.29783V6.11344C8.57636 6.33757 8.39405 6.51989 8.16997 6.51989ZM8.55666 8.74452V7.22816C9.01791 7.06775 9.3498 6.62862 9.3498 6.11344V5.29783C9.3498 5.08272 9.52479 4.90778 9.7399 4.90778C9.79538 4.90778 9.8491 4.91928 9.89963 4.94196C11.2403 5.54356 12.7782 5.54361 14.119 4.94191C14.1695 4.91928 14.2231 4.90778 14.2786 4.90778C14.4937 4.90778 14.6687 5.08277 14.6687 5.29783V6.11344C14.6687 6.62862 15.0006 7.06775 15.4618 7.22816V8.74452C15.4618 10.6433 13.9164 12.1971 12.0093 12.1971C10.1028 12.1971 8.55666 10.644 8.55666 8.74452ZM10.7689 16.0804C10.609 16.2187 10.3685 16.218 10.2095 16.0786L8.42488 14.5158L8.84462 13.8881C8.93037 13.7598 9.10608 13.7332 9.22611 13.8273L11.4012 15.5335L10.7689 16.0804ZM12.0092 15.0274L10.4334 13.7913V12.6645C10.9207 12.8612 11.4523 12.9705 12.0093 12.9705C12.5662 12.9705 13.0978 12.8612 13.5851 12.6645V13.7913L12.0092 15.0274ZM13.8089 16.0787C13.6499 16.2179 13.4095 16.2187 13.2495 16.0804L12.6172 15.5335L14.7923 13.8272C14.9121 13.7333 15.0878 13.7595 15.1738 13.8881L15.5935 14.5158L13.8089 16.0787Z" />
                      </svg>
                    </i>Взрослым
                  </a>
                  <!-- menu sub -->
                  <div class="header-sidebar__submenu js-menu-sub">
                    <div class="header-sidebar__submenu-top">
                      <div class="header-sidebar__submenu-close js-menu-sub-close js-menu-close">
                        <span class="d-none d-lg-block">Закрыть</span>
                        <span class="d-block d-lg-none">Обратно в меню</span>
                      </div>
                      <div class="header-sidebar__submenu-title h2">Взрослым</div>
                      <!-- <div class="header-sidebar__submenu-link">
                        <a href="/grown/" class="text-link text-link_arrow">Перейти</a>
                      </div> -->
                    </div>
                    <ul class="header-sidebar__submenu-items">
                      <!-- <li><a href="/english/" class="js-menu-link">Бесплатный английский</a></li> -->
                      <li>
                        <a href="/retraining/" class="js-menu-link js-menu-link-sub  js-menu-dbc">Переобучение по специальностям</a>
                        <div class="header-sidebar__submenu-sub js-menu-sub">
                          <div class="header-sidebar__submenu-input input input_search input_icon">
                            <input type="text" name="search" placeholder="Быстрый поиск" class="input__input">
                          </div>
                          <div class="header-sidebar__submenu-scroll js-simpleBar">
                            <ul class="header-sidebar__submenu-items swiper-slide">
                              <li>
                                <a href="/retraining/targetolog/">Таргетолог</a>
                              </li>
                              <li>
                                <a href="/retraining/kopirayter/">Копирайтер</a>
                              </li>
                              <li>
                                <a href="/retraining/direktolog/">Директолог</a>
                              </li>
                              <li>
                                <a href="/retraining/menedzher-po-prodazham/">Менеджер по продажам</a>
                              </li>
                              <li>
                                <a href="/retraining/smm-menedzher/">SMM-менеджер</a>
                              </li>
                              <li>
                                <a href="/retraining/pr-menedzher-s-nulya/">PR-менеджер с нуля</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li>
                      <!-- <li><a href="javascript:void(0);" class="js-menu-link">Школа Soft-skill</a></li> -->
                      <li><a href="/mama/" class="js-menu-link">Мама Может!</a></li>
                      <li><a href="/psychologist/" class="js-menu-link">Помощь психологов</a></li>
                      <li><a href="/volunteer/" class="js-menu-link">Педагоги-волонтёры России</a></li>
                    </ul>
                  </div>
                  <!-- /menu sub -->
                </li>
                <li class="header-sidebar__menu-item">
                  <a href="" class="header-sidebar__menu-link js-menu-link js-menu-link-sub">
                    <i class="header-sidebar__menu-icon">
                      <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                          <path d="M8.43772 8.04688C7.30266 8.04688 6.48462 8.99671 6.48462 10.15C6.48462 11.4175 7.46019 12.2487 8.93693 13.5069C9.19427 13.7262 9.4604 13.9529 9.74302 14.2002C9.81665 14.2646 9.90841 14.2968 10.0002 14.2968C10.092 14.2968 10.1838 14.2646 10.2574 14.2002C10.54 13.9529 10.8061 13.7262 11.0635 13.5069C12.5402 12.2487 13.5158 11.4175 13.5158 10.15C13.5158 8.99659 12.6976 8.04688 11.5627 8.04688C10.7868 8.04688 10.2946 8.48992 10.0002 8.91776C9.70583 8.48992 9.21365 8.04688 8.43772 8.04688ZM10.3769 9.90802C10.3799 9.89724 10.6833 8.82812 11.5627 8.82812C12.2308 8.82812 12.7345 9.39639 12.7345 10.15C12.7345 11.0568 11.9148 11.7552 10.5568 12.9123C10.3766 13.0658 10.1922 13.223 10.0002 13.3887C9.80825 13.223 9.6238 13.0658 9.44361 12.9123C8.08558 11.7552 7.26586 11.0568 7.26586 10.15C7.26586 9.39639 7.76964 8.82812 8.43772 8.82812C9.30591 8.82812 9.61001 9.86052 9.6238 9.90916C9.67071 10.0782 9.82466 10.1953 10.0002 10.1953C10.1761 10.1953 10.3304 10.0777 10.3769 9.90802Z" />
                          <path d="M4.92206 4.37524C5.13779 4.37524 5.31268 4.20036 5.31268 3.98462C5.31268 3.76888 5.13779 3.59399 4.92206 3.59399C4.70632 3.59399 4.53143 3.76888 4.53143 3.98462C4.53143 4.20036 4.70632 4.37524 4.92206 4.37524Z" />
                          <path d="M17.4916 9.29126C17.7655 9.49996 18.0926 9.61024 18.4377 9.61024C19.2992 9.61024 20.0002 8.90931 20.0002 8.04776C20.0002 7.55561 19.7754 7.10234 19.3851 6.80523L17.4221 5.29662V0.391597C17.4221 0.175896 17.2472 0.000976562 17.0315 0.000976562H14.6877C14.472 0.000976562 14.2971 0.175896 14.2971 0.391597V2.89504L10.9464 0.319957C10.6725 0.111249 10.3453 0.000976562 10.0003 0.000976562C9.65525 0.000976562 9.3281 0.111249 9.05287 0.320934L6.07873 2.60665C5.90768 2.73809 5.87557 2.98336 6.00705 3.15438C6.13849 3.32539 6.38376 3.35754 6.55482 3.22606L9.52763 0.941356C9.66431 0.837256 9.82775 0.782217 10.0003 0.782217C10.1728 0.782217 10.3363 0.837256 10.4716 0.940379L18.9105 7.42577C19.1065 7.57495 19.2189 7.80166 19.2189 8.04776C19.2189 8.47853 18.8685 8.829 18.4377 8.829C18.2651 8.829 18.1017 8.77396 17.9664 8.67091C17.5289 8.33439 10.5914 2.99871 10.2384 2.72723C10.103 2.62305 9.9156 2.61899 9.77575 2.71723C9.75806 2.72962 2.0362 8.66931 2.03538 8.66998C1.87878 8.78943 1.683 8.84439 1.48331 8.82497C1.09652 8.78751 0.88668 8.6056 0.802853 8.23498C0.732619 7.92448 0.842735 7.61432 1.09152 7.42468L3.7684 5.36747C3.93946 5.23603 3.97157 4.99076 3.84008 4.81975C3.7086 4.64873 3.46333 4.61659 3.29232 4.74807L0.616722 6.80429C0.122978 7.1807 -0.0976446 7.79495 0.0409085 8.40736C0.199383 9.10806 0.684924 9.53254 1.40773 9.6025C1.80401 9.64129 2.1951 9.53067 2.50916 9.29114L2.50857 9.2904C2.52518 9.27817 2.54783 9.2611 2.57854 9.23766V14.5969C1.68476 14.8113 0.993593 15.5385 0.828556 16.4593C0.313249 16.8237 0.000440191 17.4157 0.000440191 18.0476C0.000440191 19.1245 0.876602 20.0007 1.95354 20.0007H18.0471C19.124 20.0007 20.0002 19.1245 20.0002 18.0476C20.0002 17.4157 19.6874 16.8237 19.1721 16.4593C19.007 15.5381 18.3154 14.8107 17.4221 14.5968V9.23778L17.4916 9.29126ZM15.0783 0.782217H16.6408V4.69623L15.0783 3.49543V0.782217ZM6.25033 19.2195H1.9535C1.30734 19.2195 0.781642 18.6938 0.781642 18.0476C0.781642 17.6303 1.01191 17.2411 1.38257 17.032C1.49386 16.9693 1.56737 16.856 1.57952 16.7288C1.65589 15.9267 2.31991 15.3133 3.1254 15.3133C3.62841 15.3133 4.10438 15.561 4.39851 15.9759C4.4907 16.1059 4.65261 16.1669 4.80769 16.13C4.9078 16.1061 4.9964 16.0945 5.07851 16.0945C5.70932 16.0945 6.24263 16.6012 6.25029 17.2526C6.21701 17.4874 6.34255 17.648 6.50544 17.7048C6.80778 17.8101 7.03161 18.096 7.03161 18.4382C7.03157 18.869 6.6811 19.2195 6.25033 19.2195ZM12.9774 17.085C12.736 17.2216 12.5367 17.4186 12.3983 17.6571H7.60215C7.46367 17.4185 7.26446 17.2216 7.02313 17.085C7.01657 17.0146 7.00618 16.9448 6.99212 16.8754H13.0085C12.9944 16.9448 12.984 17.0146 12.9774 17.085ZM7.60312 19.2195C7.73644 18.9895 7.81281 18.7226 7.81281 18.4383H12.1878C12.1878 18.7226 12.2642 18.9895 12.3974 19.2195H7.60312ZM18.4211 16.7288C18.4332 16.856 18.5067 16.9692 18.618 17.032C18.9887 17.2411 19.219 17.6303 19.219 18.0476C19.219 18.6938 18.6933 19.2195 18.0471 19.2195H13.7503C13.3195 19.2195 12.969 18.869 12.969 18.4383C12.969 18.0956 13.1933 17.81 13.4952 17.7048C13.6595 17.6476 13.7834 17.4861 13.7504 17.2526C13.758 16.6028 14.2898 16.0946 14.9221 16.0946C15.0042 16.0946 15.0928 16.1062 15.193 16.13C15.3479 16.1669 15.5099 16.106 15.6021 15.9759C15.8963 15.5611 16.3722 15.3133 16.8752 15.3133C17.6804 15.3133 18.3446 15.926 18.4211 16.7288ZM16.6408 14.5444C16.057 14.6038 15.5137 14.8832 15.1226 15.325C15.0544 15.3172 14.9878 15.3133 14.9221 15.3133C14.3058 15.3133 13.7269 15.6078 13.3604 16.0945H6.64017C6.27388 15.6079 5.69483 15.3133 5.07847 15.3133C5.01269 15.3133 4.94612 15.3172 4.87792 15.325C4.48691 14.8831 3.94356 14.6038 3.35974 14.5444V8.63705C3.92676 8.20092 9.34779 4.03136 10.0002 3.52965L16.6408 8.63697V14.5444Z" />
                        </g>
                      </svg>
                    </i>О нас
                  </a>
                  <!-- menu sub -->
                  <div class="header-sidebar__submenu js-menu-sub">
                    <div class="header-sidebar__submenu-top">
                      <div class="header-sidebar__submenu-close js-menu-sub-close js-menu-close">
                        <span class="d-none d-lg-block">Закрыть</span>
                        <span class="d-block d-lg-none">Обратно в меню</span>
                      </div>
                      <div class="header-sidebar__submenu-title h2">О нас</div>
                      <!-- <div class="header-sidebar__submenu-link">
                        <a href="/grown/" class="text-link text-link_arrow">Перейти</a>
                      </div> -->
                    </div>
                    <ul class="header-sidebar__submenu-items">
                      <!-- <li><a href="/english/" class="js-menu-link">Бесплатный английский</a></li> -->
                      <li><a href="/about/" class="js-menu-link">О Профи-центре</a></li>
                      <li><a href="/case/" class="js-menu-link">Кейсы</a></li>
                      <li><a href="/team/" class="js-menu-link">Команда</a></li>
                      <li><a href="/reviews/" class="js-menu-link">Отзывы</a></li>
                      <li><a href="/results/" class="js-menu-link">Они смогли</a></li>
                      <li><a href="/partners/" class="js-menu-link">Партнеры</a></li>
                      <li><a href="/reports/" class="js-menu-link">Отчеты</a></li>
                      <li><a href="/smi/" class="js-menu-link">СМИ о нас</a></li>
                      <li><a href="/rekvizity/" class="js-menu-link">Реквизиты</a></li>


                      <!-- <li>
                        <a href="/results/" class="js-menu-link js-menu-link-sub  js-menu-dbc">Они смогли</a>
                        <div class="header-sidebar__submenu-sub js-menu-sub">
                          <div class="header-sidebar__submenu-input input input_search input_icon">
                            <input type="text" name="search" placeholder="Быстрый поиск" class="input__input">
                          </div>
                          <div class="header-sidebar__submenu-scroll js-simpleBar">
                            <ul class="header-sidebar__submenu-items swiper-slide">
                              <li>
                                <a href="/results/ege/">99 баллов ЕГЭ</a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </li> -->
                    </ul>
                  </div>
                  <!-- /menu sub -->
                </li>
                <li class="header-sidebar__menu-item">
                  <a href="/news/" class="header-sidebar__menu-link js-menu-link js-scroll-to">
                    <i class="header-sidebar__menu-icon">
                      <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                          <path d="M15.3125 21C12.1765 21 9.625 18.4485 9.625 15.3125C9.625 12.1765 12.1765 9.625 15.3125 9.625C18.4485 9.625 21 12.1765 21 15.3125C21 18.4485 18.4485 21 15.3125 21ZM15.3125 10.5C12.6586 10.5 10.5 12.6595 10.5 15.3125C10.5 17.9655 12.6586 20.125 15.3125 20.125C17.9664 20.125 20.125 17.9655 20.125 15.3125C20.125 12.6595 17.9664 10.5 15.3125 10.5Z" fill="white" />
                          <path d="M15.3125 18.375C15.071 18.375 14.875 18.179 14.875 17.9375V14.4375C14.875 14.196 15.071 14 15.3125 14C15.554 14 15.75 14.196 15.75 14.4375V17.9375C15.75 18.179 15.554 18.375 15.3125 18.375Z" fill="white" />
                          <path d="M15.3125 13.125C15.5541 13.125 15.75 12.9291 15.75 12.6875C15.75 12.4459 15.5541 12.25 15.3125 12.25C15.0709 12.25 14.875 12.4459 14.875 12.6875C14.875 12.9291 15.0709 13.125 15.3125 13.125Z" fill="white" />
                          <path d="M8.3125 18.375H2.1875C0.98175 18.375 0 17.3941 0 16.1875V4.8125C0 3.60588 0.98175 2.625 2.1875 2.625H3.9375C4.179 2.625 4.375 2.821 4.375 3.0625C4.375 3.304 4.179 3.5 3.9375 3.5H2.1875C1.46387 3.5 0.875 4.08887 0.875 4.8125V16.1875C0.875 16.9111 1.46387 17.5 2.1875 17.5H8.3125C8.554 17.5 8.75 17.696 8.75 17.9375C8.75 18.179 8.554 18.375 8.3125 18.375Z" fill="white" />
                          <path d="M10.0625 5.25H4.8125C4.08887 5.25 3.5 4.66113 3.5 3.9375V2.1875C3.5 1.946 3.696 1.75 3.9375 1.75H5.29375C5.49763 0.7525 6.3805 0 7.4375 0C8.4945 0 9.37737 0.7525 9.58125 1.75H10.9375C11.179 1.75 11.375 1.946 11.375 2.1875V3.9375C11.375 4.66113 10.7861 5.25 10.0625 5.25ZM4.375 2.625V3.9375C4.375 4.17812 4.571 4.375 4.8125 4.375H10.0625C10.304 4.375 10.5 4.17812 10.5 3.9375V2.625H9.1875C8.946 2.625 8.75 2.429 8.75 2.1875C8.75 1.46387 8.16113 0.875 7.4375 0.875C6.71388 0.875 6.125 1.46387 6.125 2.1875C6.125 2.429 5.929 2.625 5.6875 2.625H4.375Z" fill="white" />
                          <path d="M11.8125 7.875H3.0625C2.821 7.875 2.625 7.679 2.625 7.4375C2.625 7.196 2.821 7 3.0625 7H11.8125C12.054 7 12.25 7.196 12.25 7.4375C12.25 7.679 12.054 7.875 11.8125 7.875Z" fill="white" />
                          <path d="M9.1875 10.5H3.0625C2.821 10.5 2.625 10.304 2.625 10.0625C2.625 9.821 2.821 9.625 3.0625 9.625H9.1875C9.429 9.625 9.625 9.821 9.625 10.0625C9.625 10.304 9.429 10.5 9.1875 10.5Z" fill="white" />
                          <path d="M7.4375 13.125H3.0625C2.821 13.125 2.625 12.929 2.625 12.6875C2.625 12.446 2.821 12.25 3.0625 12.25H7.4375C7.679 12.25 7.875 12.446 7.875 12.6875C7.875 12.929 7.679 13.125 7.4375 13.125Z" fill="white" />
                          <path d="M14.4375 7.875C14.196 7.875 14 7.679 14 7.4375V4.8125C14 4.08887 13.4111 3.5 12.6875 3.5H10.9375C10.696 3.5 10.5 3.304 10.5 3.0625C10.5 2.821 10.696 2.625 10.9375 2.625H12.6875C13.8932 2.625 14.875 3.60588 14.875 4.8125V7.4375C14.875 7.679 14.679 7.875 14.4375 7.875Z" fill="white" />
                        </g>
                      </svg>
                    </i>Новости
                  </a>
                </li>
                <li class="header-sidebar__menu-item">
                  <a href="/contacts/" class="header-sidebar__menu-link js-menu-link js-scroll-to">
                    <i class="header-sidebar__menu-icon">
                      <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.02053 19.0686H7.70545C7.53523 19.0686 7.39722 19.2066 7.39722 19.3768C7.39722 19.5471 7.53523 19.6851 7.70545 19.6851H9.02053C9.19075 19.6851 9.32877 19.5471 9.32877 19.3768C9.32872 19.2066 9.19075 19.0686 9.02053 19.0686Z" />
                        <path d="M8.40408 0.986328H8.36298C8.19277 0.986328 8.05475 1.12435 8.05475 1.29456C8.05475 1.46478 8.19277 1.60279 8.36298 1.60279H8.40408C8.57429 1.60279 8.71231 1.46478 8.71231 1.29456C8.71231 1.12435 8.57429 0.986328 8.40408 0.986328Z" />
                        <path d="M9.71914 0.986328H9.67804C9.50783 0.986328 9.36981 1.12435 9.36981 1.29456C9.36981 1.46478 9.50783 1.60279 9.67804 1.60279H9.71914C9.88936 1.60279 10.0274 1.46478 10.0274 1.29456C10.0274 1.12435 9.88936 0.986328 9.71914 0.986328Z" />
                        <path d="M7.08902 0.986328H7.04792C6.8777 0.986328 6.73969 1.12435 6.73969 1.29456C6.73969 1.46478 6.8777 1.60279 7.04792 1.60279H7.08902C7.25923 1.60279 7.39725 1.46478 7.39725 1.29456C7.39725 1.12435 7.25923 0.986328 7.08902 0.986328Z" />
                        <path d="M18.861 6.5212C18.8442 6.36739 18.7096 6.2466 18.5547 6.2466H14.589V1.62328C14.589 0.728232 13.8608 0 12.9657 0H3.76024C2.86515 0 2.13696 0.728232 2.13696 1.62328V19.3767C2.13696 20.2718 2.8652 21 3.76024 21H12.9657C13.8608 21 14.589 20.2717 14.589 19.3767V14.7534H18.5547C18.725 14.7534 18.863 14.6154 18.863 14.4452V6.55479C18.863 6.54343 18.8623 6.53223 18.861 6.5212ZM17.8398 6.86302L13.2197 11.7548C13.0836 11.8989 12.8478 11.8989 12.7118 11.7548L8.09169 6.86302H17.8398ZM13.9726 19.3767C13.9726 19.9319 13.5208 20.3836 12.9657 20.3836H3.76024C3.20509 20.3836 2.75339 19.9319 2.75339 19.3767V18.3699H13.9726V19.3767ZM13.9726 17.7534H2.75339V2.58903H10.8287C10.999 2.58903 11.137 2.45101 11.137 2.2808C11.137 2.11058 10.999 1.97256 10.8287 1.97256H2.75339V1.62323C2.75339 1.06809 3.20509 0.616383 3.76024 0.616383H12.9657C13.5208 0.616383 13.9726 1.06809 13.9726 1.62323V1.97256H12.3082C12.138 1.97256 11.9999 2.11058 11.9999 2.2808C11.9999 2.45101 12.138 2.58903 12.3082 2.58903H13.9726V6.24656H7.37667C7.20908 6.24656 7.06843 6.38736 7.06843 6.55479V14.4452C7.06843 14.6154 7.20645 14.7534 7.37667 14.7534H13.9726V17.7534ZM18.2465 14.137H7.6849V7.33007L12.2636 12.1781C12.4439 12.3691 12.7031 12.4808 12.9657 12.4808C13.2283 12.4808 13.4875 12.3691 13.6678 12.1782L18.2465 7.33007V14.137H18.2465Z" />
                      </svg>
                    </i>Контакты
                  </a>
                </li>
              </ul>
            </nav>
            <!-- /sidebar menu -->
            <!-- sidebar link -->
            <div class="header-sidebar__link">
              <a href="/edu/" class="text-link text-link_arrow">
                Вход в интернет-школу
              </a>
            </div>
            <!-- /sidebar link -->
            <!-- sidebar search form -->
            <form class="header-sidebar__search" action="/search/?">
              <div class="input input_search input_icon">
                <input type="text" name="q" placeholder="Поиск" class="input__input">
              </div>
            </form>
            <!-- /sidebar search form -->
            <!-- sidebar contacts -->
            <div class="header-sidebar__contacts contacts">
              <!-- contacts item -->
              <div class="contacts__item contacts__item_icon contacts__item_fz-16">
                <a href="tel:88422315130" class="text-link">
                  <i class="contacts__item-icon header-sidebar__icon-phone">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.4331 12.0825L12.6931 10.8225C12.8628 10.6549 13.0775 10.5402 13.3112 10.4923C13.5448 10.4443 13.7874 10.4653 14.0094 10.5525L15.545 11.1656C15.7693 11.2567 15.9617 11.4121 16.0978 11.6123C16.2339 11.8125 16.3078 12.0486 16.31 12.2906V15.1031C16.3087 15.2678 16.2741 15.4306 16.2082 15.5815C16.1424 15.7325 16.0466 15.8685 15.9268 15.9815C15.807 16.0945 15.6655 16.1821 15.511 16.239C15.3564 16.2959 15.192 16.3209 15.0275 16.3125C4.26686 15.6431 2.09561 6.53065 1.68498 3.04315C1.66592 2.87189 1.68334 2.69853 1.73608 2.53448C1.78883 2.37044 1.87571 2.21942 1.99102 2.09136C2.10632 1.96331 2.24743 1.86111 2.40507 1.79151C2.5627 1.7219 2.73329 1.68647 2.90561 1.68752H5.62248C5.86492 1.68824 6.10161 1.76147 6.30209 1.8978C6.50257 2.03413 6.65769 2.22732 6.74748 2.45252L7.3606 3.98815C7.45075 4.20925 7.47375 4.45201 7.42673 4.6861C7.37971 4.9202 7.26476 5.13525 7.09623 5.3044L5.83623 6.5644C5.83623 6.5644 6.56186 11.475 11.4331 12.0825Z" fill="#CACDD0" />
                    </svg>
                  </i>
                  8 (8422) <b>31-51-30</b>
                </a>
              </div>
              <!-- /contacts item -->
              <!-- contacts item -->
              <div class="contacts__item contacts__item_icon">
                <a href="mailto:office@ul-profi.ru" class="text-link">
                  <i class="contacts__item-icon">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M15 3H3C2.175 3 1.5075 3.675 1.5075 4.5L1.5 13.5C1.5 14.325 2.175 15 3 15H15C15.825 15 16.5 14.325 16.5 13.5V4.5C16.5 3.675 15.825 3 15 3ZM15 6L9 9.75L3 6V4.5L9 8.25L15 4.5V6Z" fill="#CACDD0" />
                    </svg>
                  </i>
                  office@ul-profi.ru
                </a>
              </div>
              <!-- /contacts item -->
              <div class="contacts__line text-line"></div>
              <!-- contacts item -->
              <div class="contacts__item contacts__item_messangers">
                <ul class="messangers">
                  <li class="messangers__item">
                    <a href="https://vk.com/proficentre73" class="messangers__link messangers__link_vk color-gray" target="_blank">
                      <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M23.2372 15.5755C24.1328 16.45 25.0781 17.2727 25.8814 18.2353C26.2363 18.663 26.5722 19.1045 26.8292 19.6009C27.1934 20.3066 26.8635 21.0831 26.2308 21.1253L22.2973 21.1235C21.2828 21.2077 20.4735 20.7993 19.793 20.1056C19.2484 19.5509 18.7441 18.9606 18.2205 18.3871C18.0058 18.1528 17.7811 17.9322 17.5126 17.7579C16.9757 17.4094 16.5096 17.5161 16.2027 18.0761C15.8902 18.6457 15.8193 19.2765 15.7886 19.9113C15.7465 20.8375 15.4665 21.081 14.5361 21.1234C12.5478 21.2172 10.6607 20.9164 8.90769 19.9133C7.36217 19.029 6.16369 17.7807 5.12054 16.3675C3.08951 13.6156 1.53414 10.5917 0.136237 7.48307C-0.17842 6.7827 0.0516957 6.40674 0.824455 6.39344C2.10766 6.36851 3.39068 6.37028 4.67539 6.39166C5.19692 6.39929 5.54218 6.69842 5.74355 7.19112C6.4378 8.89819 7.2873 10.5223 8.3536 12.0277C8.63756 12.4285 8.92712 12.8293 9.33944 13.1114C9.79559 13.4238 10.1429 13.3202 10.3575 12.8121C10.4937 12.4899 10.5533 12.1429 10.584 11.7978C10.6856 10.6106 10.699 9.4254 10.5207 8.24235C10.4112 7.50401 9.99537 7.02603 9.25863 6.88631C8.88267 6.81508 8.93865 6.67518 9.12068 6.46059C9.43685 6.09049 9.73421 5.86011 10.327 5.86011H14.7724C15.4722 5.99823 15.6276 6.31262 15.7234 7.01681L15.7272 11.9547C15.7196 12.2273 15.8634 13.0363 16.3544 13.2167C16.7474 13.3452 17.0064 13.0308 17.2422 12.7816C18.3066 11.6519 19.0662 10.3169 19.7449 8.93456C20.046 8.32671 20.305 7.69545 20.5559 7.06471C20.7419 6.59667 21.0336 6.36638 21.5609 6.37658L25.8393 6.3804C25.9661 6.3804 26.0945 6.38226 26.2174 6.40328C26.9383 6.52615 27.1359 6.83628 26.9132 7.54029C26.5624 8.64483 25.8797 9.56529 25.2123 10.49C24.4988 11.4773 23.7357 12.4307 23.0281 13.4239C22.3781 14.3307 22.4297 14.7879 23.2372 15.5755Z" />
                        </g>
                      </svg>
                    </a>
                  </li>
                  <li class="messangers__item">
                    <a href="https://www.instagram.com/proficentre73/" class="messangers__link messangers__link_inst color-gray" target="_blank">
                      <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.3155 0H5.6845C2.55001 0 0 2.55001 0 5.6845V15.3156C0 18.4499 2.55001 21 5.6845 21H15.3156C18.4499 21 21 18.4499 21 15.3156V5.6845C21 2.55001 18.4499 0 15.3155 0V0ZM10.5 16.242C7.33377 16.242 4.75796 13.6662 4.75796 10.5C4.75796 7.33377 7.33377 4.75796 10.5 4.75796C13.6662 4.75796 16.242 7.33377 16.242 10.5C16.242 13.6662 13.6662 16.242 10.5 16.242ZM16.3793 6.11212C15.4436 6.11212 14.6826 5.35109 14.6826 4.41542C14.6826 3.47975 15.4436 2.71856 16.3793 2.71856C17.315 2.71856 18.0762 3.47975 18.0762 4.41542C18.0762 5.35109 17.315 6.11212 16.3793 6.11212Z" />
                        <path d="M10.5 5.98901C8.01274 5.98901 5.98904 8.01255 5.98904 10.4999C5.98904 12.9871 8.01274 15.0108 10.5 15.0108C12.9873 15.0108 15.0109 12.9871 15.0109 10.4999C15.0109 8.01255 12.9873 5.98901 10.5 5.98901Z" />
                        <path d="M16.3793 3.94971C16.1226 3.94971 15.9137 4.15863 15.9137 4.4153C15.9137 4.67197 16.1226 4.88089 16.3793 4.88089C16.6361 4.88089 16.8451 4.67213 16.8451 4.4153C16.8451 4.15847 16.6361 3.94971 16.3793 3.94971Z" />
                      </svg>
                    </a>
                  </li>
                  <li class="messangers__item">
                    <a href="https://www.facebook.com/ulproficentre" class="messangers__link messangers__link_fb color-gray" target="_blank">
                      <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21 10.5C21 4.70039 16.2996 0 10.5 0C4.70039 0 0 4.70039 0 10.5C0 16.2996 4.70039 21 10.5 21C10.5615 21 10.623 21 10.6846 20.9959V12.8256H8.42871V10.1965H10.6846V8.26055C10.6846 6.01699 12.0545 4.79473 14.0561 4.79473C15.0158 4.79473 15.8402 4.86445 16.0781 4.89727V7.24336H14.7C13.6131 7.24336 13.3998 7.76016 13.3998 8.51894V10.1924H16.0043L15.6639 12.8215H13.3998V20.5939C17.7885 19.3348 21 15.2947 21 10.5Z" fill="#D8D8D8" />
                      </svg>
                    </a>
                  </li>
                  <li class="messangers__item">
                    <a href="https://www.twitter.com/teachervolunter" class="messangers__link messangers__link_tw color-gray" target="_blank">
                      <svg width="26" height="23" viewBox="0 0 26 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26 3.43837C25.0331 3.8625 24.0029 4.14362 22.9287 4.28012C24.0337 3.62037 24.8771 2.58362 25.2736 1.334C24.2434 1.94825 23.1059 2.38213 21.8936 2.62425C20.9154 1.58263 19.5211 0.9375 18.0001 0.9375C15.0491 0.9375 12.6734 3.33275 12.6734 6.26912C12.6734 6.69163 12.7091 7.09787 12.7969 7.48462C8.3655 7.2685 4.44438 5.14463 1.81025 1.90925C1.35037 2.70713 1.08063 3.62038 1.08063 4.6035C1.08063 6.4495 2.03125 8.08587 3.44825 9.03325C2.59187 9.017 1.75175 8.76837 1.04 8.37675C1.04 8.393 1.04 8.41412 1.04 8.43525C1.04 11.0255 2.88762 13.177 5.3105 13.6726C4.87663 13.7913 4.40375 13.8481 3.913 13.8481C3.57175 13.8481 3.22725 13.8286 2.90387 13.7571C3.5945 15.868 5.55425 17.4199 7.8845 17.4702C6.071 18.8889 3.76838 19.7436 1.27562 19.7436C0.8385 19.7436 0.41925 19.7241 0 19.6705C2.36112 21.1931 5.15938 22.0625 8.177 22.0625C17.9855 22.0625 23.348 13.9375 23.348 6.89475C23.348 6.65912 23.3399 6.43163 23.3285 6.20575C24.3864 5.455 25.2752 4.51737 26 3.43837Z" fill="#CACDD0" />
                      </svg>
                    </a>
                  </li>
                </ul>
                <ul class="messangers">
                  <li class="messangers__item">
                    <a href="http://t.me/proficenter_bot" class="messangers__link messangers__link_tg color-gray" target="_blank">
                      <svg width="26" height="21" viewBox="0 0 26 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.88826 13.8408L9.4714 19.7041C10.0678 19.7041 10.3261 19.4479 10.6359 19.1403L13.4321 16.4679L19.2261 20.7111C20.2887 21.3033 21.0374 20.9914 21.3241 19.7335L25.1273 1.91252L25.1283 1.91147C25.4654 0.340633 24.5602 -0.27363 23.5249 0.111728L1.16991 8.67047C-0.355771 9.26268 -0.332671 10.1132 0.910557 10.4986L6.62584 12.2763L19.9013 3.96952C20.526 3.55581 21.0941 3.78471 20.6269 4.19842L9.88826 13.8408Z" fill="#CACDD0" />
                      </svg>
                    </a>
                  </li>
                  <li class="messangers__item">
                    <a href="https://api.whatsapp.com/send/?phone=79603727278&text&app_absent=0" class="messangers__link messangers__link_wa" target="_blank">
                      <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.5026 0H10.4974C4.70794 0 0 4.70925 0 10.5C0 12.7969 0.74025 14.9257 1.99894 16.6543L0.690375 20.5551L4.72631 19.2649C6.38663 20.3647 8.36719 21 10.5026 21C16.2921 21 21 16.2894 21 10.5C21 4.71056 16.2921 0 10.5026 0ZM16.6123 14.8273C16.359 15.5426 15.3536 16.1359 14.5517 16.3091C14.0031 16.4259 13.2864 16.5191 10.8741 15.519C7.78837 14.2406 5.80125 11.1051 5.64638 10.9016C5.49806 10.6982 4.3995 9.24131 4.3995 7.73456C4.3995 6.22781 5.16469 5.49412 5.47312 5.17913C5.72644 4.92056 6.14512 4.80244 6.54675 4.80244C6.67669 4.80244 6.7935 4.809 6.8985 4.81425C7.20694 4.82737 7.36181 4.84575 7.56525 5.33269C7.81856 5.943 8.43544 7.44975 8.50894 7.60463C8.58375 7.7595 8.65856 7.9695 8.55356 8.17294C8.45512 8.38294 8.3685 8.47612 8.21362 8.65462C8.05875 8.83313 7.91175 8.96963 7.75688 9.16125C7.61512 9.32794 7.455 9.50644 7.6335 9.81488C7.812 10.1167 8.42887 11.1234 9.33712 11.9319C10.5092 12.9754 11.4594 13.3088 11.7994 13.4505C12.0527 13.5555 12.3546 13.5306 12.5396 13.3337C12.7746 13.0804 13.0646 12.6604 13.3599 12.2469C13.5699 11.9503 13.8351 11.9136 14.1133 12.0186C14.3968 12.117 15.897 12.8586 16.2054 13.0121C16.5139 13.167 16.7173 13.2405 16.7921 13.3704C16.8656 13.5004 16.8656 14.1107 16.6123 14.8273Z" fill="#CACDD0" />
                      </svg>
                    </a>
                  </li>
                  <li class="messangers__item">
                    <a href="viber://pa?chatURI=profi-centr-viber" class="messangers__link messangers__link_vb d-none d-lg-block" target="_blank">
                      <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                          <path d="M21.2254 12.7352C21.8818 7.2104 20.9101 3.72248 19.1574 2.1449L19.1583 2.14398C16.3295 -0.550099 6.77601 -0.94885 3.39168 2.26498C1.87185 3.83707 1.33651 6.14432 1.27785 9.00065C1.21918 11.8579 1.14951 17.2103 6.13709 18.6623H6.14168L6.13709 20.8797C6.13709 20.8797 6.10318 21.7781 6.67701 21.9587C7.33334 22.1713 7.63034 21.7542 9.67176 19.3159C13.0854 19.612 15.7071 18.9337 16.005 18.8347C16.6943 18.6037 20.5948 18.0876 21.2254 12.7352Z" fill="#CACDD0" />
                          <path d="M11.2035 3.93872C10.8506 3.93872 10.8506 4.48872 11.2035 4.4933C13.9416 4.51439 16.1966 6.42289 16.2214 9.92364C16.2214 10.2931 16.7622 10.2885 16.7576 9.91905H16.7567C16.7274 6.14697 14.2652 3.9598 11.2035 3.93872Z" fill="white" />
                          <path d="M14.8051 9.34362C14.7969 9.70845 15.3368 9.72587 15.3414 9.35645C15.3863 7.27653 14.1039 5.56328 11.6939 5.3827C11.341 5.35703 11.3043 5.91162 11.6563 5.93728C13.7464 6.09587 14.8473 7.5222 14.8051 9.34362Z" fill="white" />
                          <path d="M14.2276 11.7097C13.7747 11.4475 13.3136 11.6107 13.123 11.8683L12.7242 12.3843C12.5216 12.6465 12.1431 12.6117 12.1431 12.6117C9.38022 11.8811 8.64139 8.98993 8.64139 8.98993C8.64139 8.98993 8.60747 8.59851 8.86047 8.38859L9.35914 7.97609C9.60847 7.77809 9.76614 7.30143 9.51222 6.83301C8.83389 5.60743 8.3783 5.18484 8.14639 4.86034C7.90255 4.55509 7.53589 4.48634 7.15455 4.69259H7.1463C6.35339 5.15643 5.48531 6.02451 5.76306 6.91826C6.23697 7.86059 7.1078 10.8645 9.88347 13.1342C11.1879 14.2076 13.2522 15.3076 14.1286 15.5615L14.1368 15.5743C15.0003 15.8622 15.84 14.9602 16.2882 14.1434V14.137C16.4871 13.7419 16.4211 13.3679 16.1306 13.1232C15.6154 12.6208 14.8381 12.0663 14.2276 11.7097Z" fill="white" />
                          <path d="M12.0716 7.42846C12.9525 7.47979 13.3796 7.93996 13.4255 8.88505C13.442 9.25446 13.9782 9.2288 13.9617 8.85938C13.9031 7.62554 13.2596 6.93804 12.1009 6.87388C11.748 6.85279 11.715 7.40738 12.0716 7.42846Z" fill="white" />
                        </g>
                      </svg>
                    </a>
                    <a href="viber://pa?chatURI=profi-centr-viber" class="messangers__link messangers__link_vb d-block d-lg-none" target="_blank">
                      <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                          <path d="M21.2254 12.7352C21.8818 7.2104 20.9101 3.72248 19.1574 2.1449L19.1583 2.14398C16.3295 -0.550099 6.77601 -0.94885 3.39168 2.26498C1.87185 3.83707 1.33651 6.14432 1.27785 9.00065C1.21918 11.8579 1.14951 17.2103 6.13709 18.6623H6.14168L6.13709 20.8797C6.13709 20.8797 6.10318 21.7781 6.67701 21.9587C7.33334 22.1713 7.63034 21.7542 9.67176 19.3159C13.0854 19.612 15.7071 18.9337 16.005 18.8347C16.6943 18.6037 20.5948 18.0876 21.2254 12.7352Z" fill="#CACDD0" />
                          <path d="M11.2035 3.93872C10.8506 3.93872 10.8506 4.48872 11.2035 4.4933C13.9416 4.51439 16.1966 6.42289 16.2214 9.92364C16.2214 10.2931 16.7622 10.2885 16.7576 9.91905H16.7567C16.7274 6.14697 14.2652 3.9598 11.2035 3.93872Z" fill="white" />
                          <path d="M14.8051 9.34362C14.7969 9.70845 15.3368 9.72587 15.3414 9.35645C15.3863 7.27653 14.1039 5.56328 11.6939 5.3827C11.341 5.35703 11.3043 5.91162 11.6563 5.93728C13.7464 6.09587 14.8473 7.5222 14.8051 9.34362Z" fill="white" />
                          <path d="M14.2276 11.7097C13.7747 11.4475 13.3136 11.6107 13.123 11.8683L12.7242 12.3843C12.5216 12.6465 12.1431 12.6117 12.1431 12.6117C9.38022 11.8811 8.64139 8.98993 8.64139 8.98993C8.64139 8.98993 8.60747 8.59851 8.86047 8.38859L9.35914 7.97609C9.60847 7.77809 9.76614 7.30143 9.51222 6.83301C8.83389 5.60743 8.3783 5.18484 8.14639 4.86034C7.90255 4.55509 7.53589 4.48634 7.15455 4.69259H7.1463C6.35339 5.15643 5.48531 6.02451 5.76306 6.91826C6.23697 7.86059 7.1078 10.8645 9.88347 13.1342C11.1879 14.2076 13.2522 15.3076 14.1286 15.5615L14.1368 15.5743C15.0003 15.8622 15.84 14.9602 16.2882 14.1434V14.137C16.4871 13.7419 16.4211 13.3679 16.1306 13.1232C15.6154 12.6208 14.8381 12.0663 14.2276 11.7097Z" fill="white" />
                          <path d="M12.0716 7.42846C12.9525 7.47979 13.3796 7.93996 13.4255 8.88505C13.442 9.25446 13.9782 9.2288 13.9617 8.85938C13.9031 7.62554 13.2596 6.93804 12.1009 6.87388C11.748 6.85279 11.715 7.40738 12.0716 7.42846Z" fill="white" />
                        </g>
                      </svg>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- /contacts item -->
            </div>
            <!-- /sidebar contacts -->

          </div>
        </div>
      </div>
      <!-- /header sidebar -->
    </header>
    <!-- /header -->
