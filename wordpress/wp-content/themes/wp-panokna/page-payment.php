<?php /* Template Name: Page Payment Template */get_header(); ?>
<section id="middle">
  <div class="content-box clearfix">
    <?php get_sidebar('left'); ?>
    <?php get_sidebar('right'); ?>
    <div id="container">
      <div id="content">
        <div class="content-header">
         <h1 umi:element-id="354" umi:field-name="h1"><?php the_title(); ?></</h1>
        </div>
        <div class="breadcrumbs">
          <ul id="navibar">
            <?php easy_breadcrumbs(); ?>
          </ul>
        </div>
        <div class="content-block-2 central-content" umi:element-id="354" umi:field-name="content">
          <div class="phones">
             <h2>Введите ваши данные для оформления оплаты заказа:</h2>
            <div class="submit-reques-box asside-box">
              <form class="submit-reques" action="https://money.yandex.ru/eshop.xml" method="POST" name="ShopForm">
                <input name="scid" value="12324" type="hidden">
                <input name="ShopID" value="23129" type="hidden">
                <div class="input-inline">
                  <input name="CustomerNumber" class="recall-form-text" placeholder="Номер Вашего заказа" type="text">
                </div>
                <div class="input-inline">
                  <input name="Sum" class="recall-form-text" placeholder="Сумма" type="text">
                </div>
                <div class="input-inline">
                  <input name="custName" class="recall-form-text" placeholder="Ф.И.О." type="text">
                </div>
                <div class="input-inline">
                  <input name="custAddr" class="recall-form-text" placeholder="Адрес доставки" type="text">
                </div>
                <div class="input-inline" style="width: 649px;">
                  <input name="custEMail" class="recall-form-text" placeholder="E-mail" type="text">
                </div>
                <div style="clear: both;">&nbsp;</div>
                <div class="input-inline">
                  <textarea class="textarea txtfield" style="margin: 0px; height: 150px; width: 642px;" name="orderDetails"></textarea>
                </div>
                <div style="clear: both;">&nbsp;</div>
                <h3>Способ оплаты:</h3>
                <div style="width: 100%; text-align: center;">
                  <input name="paymentType" value="PC" class="recall-form-text" style="margin: 10px;" type="radio">Оплата со счета в Яндекс.Деньгах<br>
                  <input name="paymentType" value="AC" class="recall-form-text" style="margin: 10px;" type="radio">Оплата банковской картой<br>
                  <input name="paymentType" value="GP" class="recall-form-text" style="margin: 10px;" type="radio">Оплата по коду через терминал<br>
                  <input name="paymentType" value="WM" class="recall-form-text" style="margin: 10px;" type="radio">Оплата cо счета WebMoney<br>
                  <input name="paymentType" value="AB" class="recall-form-text" style="margin: 10px;" type="radio">Оплата через Альфа-Клик
                </div>
                <div class="input-inline-submit">
                  <input value="Оплатить" class="btn-orange" type="submit">
                </div>
              </form><!-- submit-reques -->
          </div>
        </div><!-- phones -->
       </div><!-- content-block-2 central-content -->
         <?php get_template_part('free-measure'); ?>
      </div>
    </div><!-- #content-->
  </div><!-- #container-->
</section><!-- #middle-->
<?php get_footer(); ?>
