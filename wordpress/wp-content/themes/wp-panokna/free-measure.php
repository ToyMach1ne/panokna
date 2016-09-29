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
  <img src="<?php echo get_template_directory_uri(); ?>/img/loading.gif" class="dw-uform-load-image"><form id="sendorder" class="submit-reques  dw-uform dw-uform-active" action="http://www.panokna.ru/">
  <div class="input-inline"><input placeholder="Имя" name="name" id="fio" required="" type="text"></div>
  <div class="input-inline"><input pattern="8[0-9]{10}" placeholder="+7 (___) ___-__-__" name="phone" class="pnonumb dw-uform-phone" id="phone" required="" type="tel"></div>
  <div class="input-inline-submit"><input class="btn-orange dw-uform-submit" data-dw-uform-hint="Вызов замерщика" value="Отправить" type="submit" disabled="disabled"></div>
  </form>
</div>
