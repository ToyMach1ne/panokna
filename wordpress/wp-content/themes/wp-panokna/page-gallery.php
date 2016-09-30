<?php /* Template Name: Page Gallery Template */get_header(); ?>
<section id="middle">
  <div class="content-box clearfix">
    <?php get_sidebar('left'); ?>
      <?php get_sidebar('right'); ?>
        <div id="container">
          <div id="content">
            <div class="content-header">
             <h1 umi:element-id="193" umi:field-name="h1"><?php the_title(); ?></h1>
            </div>
            <div class="breadcrumbs">
              <ul id="navibar">
                <?php easy_breadcrumbs(); ?>
              </ul>
            </div>
            <div class="content-block-2 central-content" umi:element-id="193" umi:field-name="content">
              <div style="max-height: 200px; max-width: 250px; overflow: hidden; float: left; padding: 10px 20px 10px 0;" class="photos">
                <a href="#" class="fancybox fgallery" data-fancybox-group="gallery" style="display: block; float: left;">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/dsc0635411111_200_200_jpg.jpg" width="200" height="200" border="0">
                </a>
              </div>
              <a href="#" class="fancybox fgallery" data-fancybox-group="gallery" style="display: block; float: left;">
                <div style="max-height: 200px; max-width: 250px; overflow: hidden; float: left; padding: 10px 20px 10px 0;" class="photos">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/111_200_200_jpg.jpg" width="200" height="200" border="0">
                </div>
              </a>
              <a href="#" class="fancybox fgallery" data-fancybox-group="gallery" style="display: block; float: left;">
                <div style="max-height: 200px; max-width: 250px; overflow: hidden; float: left; padding: 10px 20px 10px 0;" class="photos">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/151456_200_200_jpg.jpg">
                </div>
              </a>
            </div>
            <?php get_template_part('free-measure'); ?>
          </div><!-- #content-->
        </div><!-- #container-->
      </div>
    </section><!-- #middle-->
<?php get_footer(); ?>
