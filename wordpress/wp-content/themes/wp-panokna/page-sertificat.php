<?php /* Template Name: Page Sertificat Template */get_header(); ?>
<div class="remont_rentv">
  <div><a href="#">
    <img src="<?php echo get_template_directory_uri(); ?>/img/banner_remont_slim.png"></a>
  </div>
</div>
<section id="middle">
  <div class="content-box clearfix">
    <?php get_sidebar('left'); ?>
    <?php get_sidebar('right'); ?>
    <div id="container">
      <div id="content">
        <div class="content-header">
          <h1 umi:element-id="191" umi:field-name="h1"><?php the_title(); ?></h1>
        </div>
        <div class="breadcrumbs">
          <ul id="navibar">
            <?php easy_breadcrumbs(); ?>
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
        <?php get_template_part('free-measure'); ?>
      </div><!-- #content-->
    </div><!-- #container-->
  </div>
</section><!-- #middle-->
<?php get_footer(); ?>
