<div style="float:none; margin-top:20px">&nbsp;</div>
<div id="sendorder" class="submit-reques-box asside-box">
  <div class="asside-header">Оставить заявку на бесплатный замер</div>
  <div class="submit-reques-info">
    <table>
      <tbody>
        <tr>
          <td class="submit-reques-info-image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/reques-info-image-1.png" alt="">
          </td>
          <td>Наш специалист произведет замер окон, измерит влажность, уровень шума и другие параметры</td>
          <td class="submit-reques-info-image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/reques-info-image-2.png" alt="">
          </td>
          <td>Даст подробную консультацию</td>
          <td class="submit-reques-info-image">
            <img src="<?php echo get_template_directory_uri(); ?>/img/reques-info-image-3.png" alt="">
          </td>
          <td>Произведет расчет и предложит несколько ценовых вариантов</td>
        </tr>
      </tbody>
    </table>
  </div><!-- submit-reques-info -->
  <div class="dw-uform-phrase" style="display: none;" data-dw-wh-phr="Вызов замерщика" data-dw-nwh-phr="Вызов замерщика">Вызов замерщика</div>
  <img src="<?php echo get_template_directory_uri(); ?>/img/loading.gif" class="dw-uform-load-image">
  <?php echo do_shortcode('[contact-form-7 id="161" title="free-measure"]'); ?>
</div>
