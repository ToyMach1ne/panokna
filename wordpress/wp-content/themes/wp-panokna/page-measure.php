<?php /* Template Name: Page Measure Template */get_header(); ?>
<section id="middle">
  <div class="content-box clearfix">
  <?php get_sidebar('left'); ?>
  <?php get_sidebar('right'); ?>
     <div id="container">
        <div id="content">
          <div class="content-header">
            <h1 umi:element-id="342" umi:field-name="h1"><?php the_title(); ?></h1>
          </div>
          <div class="breadcrumbs">
            <ul id="navibar">
              <?php easy_breadcrumbs(); ?>
            </ul>
          </div>
          <div class="content-block-2 central-content" umi:element-id="342" umi:field-name="content">
            <?php the_content(); ?>
                        </div>

            <div style="float:none; margin-top:20px">&nbsp;</div>
            <?php get_template_part('free-measure'); ?>

            </div>
                    <!-- #content-->
                </div><!-- #container-->
            </div>

            <!-- #middle-->

    </section>
<?php get_footer(); ?>
