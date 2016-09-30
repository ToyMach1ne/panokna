<?php /* Template Name: Page Mail Template */get_header(); ?>
<section id="middle">
  <div class="content-box clearfix">
    <?php get_sidebar('left'); ?>
    <?php get_sidebar('right'); ?>
    <div id="container">
      <div id="content">
        <div class="content-header">
            <h1 umi:element-id="341" umi:field-name="h1"><?php the_title(); ?></h1>
        </div>
        <div class="breadcrumbs">
          <ul id="navibar">
            <?php easy_breadcrumbs(); ?>
          </ul>
        </div>
       <div class="content-block-2 central-content" umi:element-id="341" umi:field-name="content">
      <?php the_content(); ?>
    <div class="submit-reques-box asside-box" style="background: #e0e1e4; margin-bottom: 15px; display: block; float: left;">
      <form id="senddir" class="submit-reques" action="/">
        <div class="input-inline left block">
          <input placeholder="Имя" name="name" required="" type="text">
        </div>
        <div class="input-inline left block">
          <input placeholder="E-mail" name="mail" class="recall-form-text" id="mail" required="" type="email">
        </div>
        <div class="input-inline left block">
          <input pattern="8[0-9]{10}" placeholder="84951234567" name="phone" class="recall-form-text phonumb" id="phone" required="" type="tel">
        </div>
        <div class="input-inline left block">
          <input placeholder="Страница в соцсети" name="social" class="recall-form-text" id="social" type="text">
        </div>
        <div class="input-inline left block txt-fld" style="border-radius: 4px 4px 4px 4px; width: 100%; text-align: left;">
          <textarea class="textarea txtfield" style="margin: 0px; height: 150px; width: 644px; border-radius: 4px 4px 4px 4px;" name="text"></textarea>
        </div>
        <div class="input-inline-submit block">
          <input class="btn-orange" value="Отправить" type="submit">
        </div>
      </form>
    </div><!-- submit-reques-box asside-box -->
  </div>
      <?php get_template_part('free-measure'); ?>
    </div> <!-- #content-->
   </div><!-- #container-->
 </div>
</section><!-- #middle-->
<?php get_footer(); ?>
