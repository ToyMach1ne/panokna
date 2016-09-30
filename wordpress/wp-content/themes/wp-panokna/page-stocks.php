<?php /* Template Name: Page Stocks Template */get_header(); ?>
<section id="middle">
  <div class="content-box clearfix">
  <?php get_sidebar('left'); ?>
  <?php get_sidebar('right'); ?>
    <div id="container">
      <div id="content">
        <div class="content-header">
         <h1 umi:element-id="337" umi:field-name="h1"><?php the_title(); ?></h1>
        </div>
        <div class="breadcrumbs">
          <ul id="navibar">
            <?php easy_breadcrumbs(); ?>
          </ul>
         </div>
        <div class="content-block-2 central-content" umi:element-id="337" umi:field-name="content">
          <?php the_content(); ?>
        </div>
            <?php get_template_part('free-measure'); ?>
       </div><!-- #content-->
    </div><!-- #container-->
  </div>
</section><!-- #middle-->
<?php get_footer(); ?>
