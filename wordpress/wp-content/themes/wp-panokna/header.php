<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>
    <meta name="viewport" content="width=1200">
    <meta property="og:image" content="img/favicon.png">
    <meta name="Description" content="Пластиковые окна под ключ, комплексное остекление балконов под ключ по приятным ценам. Срок изготовления окон всего один день!">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <link href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" rel="shortcut icon">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="ck_overlay" style="display: none;">
        <div id="ck_box">
            <div id="dw_popup_site_logo_box"><img src="<?php echo get_template_directory_uri(); ?>/img/site_logo.png" id="dw_popup_site_logo" class="ck-form-image"></div>
            <div id="ck_close_box"><a href="<?php echo home_url(); ?>" id="ck_close_box_a" class="ck-box-link">спасибо, позже</a></div>
            <div id="ck_ajax_container">
                <div id="ck_phrase" class="ck-phrase">Хотите, мы перезвоним <span id="ck_phrase_time">за 25 секунд</span> и рассчитаем стоимость остекления для Вашей квартиры?</div>
                <form name="callkeep_form" id="callkeep_form" method="post" enctype="application/x-www-form-urlencoded">
                    <input type="text" name="ck_phone" id="ck_phone_input" placeholder="+7" class="ck-text-field ck-input">
                    <input type="submit" value="жду звонка" id="ck_phone_submit" class="callkeep-button" disabled="disabled">
                    <input type="hidden" name="ck_ep" id="ck_ep_hid" value="/">
                    <input type="hidden" name="ck_ep_title" id="ck_ep_title_hid" value="Остекление балконов и лоджий в Москве и Московской области по низким ценам.">
                    <input type="hidden" name="ck_act_phrase" id="ck_act_phrase_hid" value="  Хотите, мы перезвоним за 25 секунд и рассчитаем стоимость остекления для Вашей квартиры?">
                    <input type="hidden" name="ck_hint" id="ck_hint_hid" value="Остекление балконов и лоджий">
                    <input type="hidden" name="ck_phr_type" id="ck_phr_type_hid" value="def">
                    <input type="hidden" name="ck_actp" id="ck_actp_hid" value="/">
                    <input type="hidden" name="ck_actp_title" id="ck_actp_title_hid" value="Остекление балконов и лоджий в Москве и Московской области по низким ценам.">
                    <input type="hidden" name="ck_openstat" id="ck_openstat_hid" value="">
                    <input type="hidden" name="ck_camp" id="ck_camp_hid" value="">
                    <input type="hidden" name="op" value="lead">
                    <input type="hidden" name="wid" class="dw-wid-hid" value="5cOaC050B1UFu2p">
                    <input type="hidden" name="source" id="source_hid" value="">
                    <input type="hidden" name="utm_src" id="utm_src_hid" value="">
                    <input type="hidden" name="gclid" id="gclid_hid" value="">
                    <input type="hidden" name="ck_clip" id="ck_clip_hid" value="217.20.176.89">
                </form>
                <div id="callkeep_timer" class="ck-timer-inactive ">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/ck-timer.png" id="ck_timer_icon" class="ck-form-image">
                    <span id="ck_aftercall_timer" data-recallsec="25"><span id="ck_timer_seconds">25</span><span id="ck_timer_dots" class="ck-timer-dots">:</span><span id="ck_timer_milliseconds">00</span></span>
                </div>
                <div id="ck_aftercall_form_box" style="display:none;">
                    <form name="callkeep_aftercall_form" id="ck_aftercall_form" method="post" enctype="application/x-www-form-urlencoded" style="display:none;">
                        <input type="submit" value="нет, уведомить руководство" id="ck_aftercall_no" class="callkeep-button ck-aftercall-btn" data-answer="no">
                        <input type="submit" value="да, закрыть окно" id="ck_aftercall_yes" class="callkeep-button ck-aftercall-btn" data-answer="yes">
                        <input type="hidden" name="ck_aftercall_lid" id="ck_aftercall_lid_hid" value="">
                        <input type="hidden" name="ck_aftercall_answer" id="ck_aftercall_answer_hid" value="">
                        <input type="hidden" name="ck_aftercall_phone" id="ck_aftercall_phone_hid" value="">
                        <input type="hidden" name="op" value="answer">
                        <input type="hidden" name="wid" class="dw-wid-hid" value="5cOaC050B1UFu2p">
                    </form>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/loading.gif" id="ck_loading_icon" style="display:none !important;" class="ck-form-image">
            <div id="ck_autor_box">Интеллектуальный виджет <a href="http://dialogwidget.ru/" target="_blank" class="ck-box-link" id="ck_autor_link">Dialog Widget</a></div>
        </div>
    </div>
    <div id="wrapper">
        <header id="header">
            <div class="content-bar">
                <div class="content-box">
                    <a href="<?php echo home_url(); ?>" id="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Панокна - остекление балконов и лоджий"></a>
                    <a href="http://www.panokna.ru/osteklenie/tseny/" class="option_banner"><img src="<?php echo get_template_directory_uri(); ?>/img/reques-info-image-3.png"><span>Цены на<br>остекление</span></a>
                    <a href="http://www.panokna.ru/vyzov-zamerschika/" class="option_banner"><img src="<?php echo get_template_directory_uri(); ?>/img/reques-info-image-1.png"><span>Вызвать<br>замерщика</span></a>
                    <a href="http://www.panokna.ru/#" onclick="DialogWidget.globalDW.activatePopup(&#39;Мы перезвоним вам за 25 секунд, ответим на все вопросы и рассчитаем стоимость остекления для Вашей квартиры!&#39;,&#39;Мы ответим на все вопросы и рассчитаем стоимость остекления для Вашей квартиры!&#39;); return false;" class="option_banner dwcall"><img src="<?php echo get_template_directory_uri(); ?>/img/reques-info-image-2.png"><span>Перезвонить<br>за 25 секунд</span></a>
                    <div class="qr-code"><img src="<?php echo get_template_directory_uri(); ?>/img/qr-code.png" alt=""></div>
                    <div class="phones">
                        <p class="call_phone_1" style="margin: 0; padding: 0;"><span class="important">+7(495)241-81-16</span></p>
                    </div>
                </div>
            </div>
            <div class="content-box">
            </div>
        </header>
        <!-- #header-->
        <section id="block_1" style="background: none repeat scroll 0 0 #6d86b4;">
            <div class="content-box">

                <nav id="navigation">
                    <?php wpeHeadNav(); ?>
                </nav>
            </div>
        </section>
