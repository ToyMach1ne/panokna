<?php /* Template Name: Page Sertificat Template */get_header(); ?>
        <div class="remont_rentv">
      <div><a href="http://www.panokna.ru/stati/panokna-v-remont-po-chestnomy-ren-tv/"><img src="<?php echo get_template_directory_uri(); ?>/img/banner_remont_slim.png"></a></div>
    </div>
<section id="middle">
            <div class="content-box clearfix">
                <?php get_sidebar('left'); ?>
                <?php get_sidebar('right'); ?>
                <div id="container">
                    <div id="content">

                        <div class="content-header">
                            <h1 umi:element-id="191" umi:field-name="h1">Наши сертификаты</h1>
                        </div>
                        <div class="breadcrumbs"><ul id="navibar">
<li><a href="/">Главная</a>
    <!--noindex--></li><li> › Наши сертификаты</li><!--/noindex-->
</ul>
                 </div>
                        <div class="content-block-2 central-content" umi:element-id="191" umi:field-name="content">
                            <p><?php the_content(); ?></p>
                            <?php $images = get_field('image'); if( $images ): ?>
                            <p>
                            <?php $images = get_field('image'); if( $images ): foreach( $images as $image ): ?>
                              <a class="sert-href fancybox" title="Сертификат соответствия" href="<?php the_permalink(); ?>" rel="gallery-2">
                              <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
                              </a>
                              <?php endforeach; endif; ?>
                            </p>
                            <?php endif; ?>
                        </div>

                        <div style="float:none; margin-top:20px">&nbsp;</div>
                        <div id="sendorder" class="submit-reques-box asside-box">
<div class="asside-header">Оставить заявку на бесплатный замер</div>
<div class="submit-reques-info">
<table>
<tbody>
<tr>
<td class="submit-reques-info-image"><img src="<?php echo get_template_directory_uri(); ?>/img/reques-info-image-1.png" alt=""></td>
<td>Наш специалист произведет замер окон, измерит влажность, уровень шума и другие параметры</td>
<td class="submit-reques-info-image"><img src="<?php echo get_template_directory_uri(); ?>/img/reques-info-image-2.png" alt=""></td>
<td>Даст подробную консультацию</td>
<td class="submit-reques-info-image"><img src="<?php echo get_template_directory_uri(); ?>/img/reques-info-image-3.png" alt=""></td>
<td>Произведет расчет и предложит несколько ценовых вариантов</td>
</tr>
</tbody>
</table>
</div>
<div class="dw-uform-phrase" style="display: none;" data-dw-wh-phr="Вызов замерщика" data-dw-nwh-phr="Вызов замерщика">Вызов замерщика</div>
<img src="<?php echo get_template_directory_uri(); ?>/img/loading.gif" class="dw-uform-load-image"><form id="sendorder" class="submit-reques  dw-uform dw-uform-active" action="/">
<div class="input-inline"><input placeholder="Имя" name="name" id="fio" required="" type="text"></div>
<div class="input-inline"><input pattern="8[0-9]{10}" placeholder="+7 (___) ___-__-__" name="phone" class="pnonumb dw-uform-phone" id="phone" required="" type="tel"></div>
<div class="input-inline-submit"><input class="btn-orange dw-uform-submit" data-dw-uform-hint="Вызов замерщика" value="Отправить" type="submit" disabled="disabled"></div>
</form></div>

                        </div>
                    <!-- #content-->
                </div><!-- #container-->
            </div>

            <!-- #middle-->

    </section>
<?php get_footer(); ?>
