<?php 
/*
Template Name: Project
*/
get_header(); ?>
  
  <!-- Start Hero -->
  <div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="<?php echo get_bloginfo( 'template_directory' );?>/assets/img/portfolio_details_bg.jpg">
    <div class="container">
      <div class="cs-page_heading_in">
        <h1 class="cs-page_title cs-font_50 cs-white_color"><?php the_title(); ?></h1>
        <ol class="breadcrumb text-uppercase">
          <li class="breadcrumb-item"><a href="<?php echo home_url(); ?>">Home</a></li>
          <li class="breadcrumb-item active">Portfolio Details</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- End Hero -->
  <!-- End Why Choose -->
  <div class="cs-height_150 cs-height_lg_80"></div>
  <div class="container">
    <div class="cs-portfolio_details">
      <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="cs-radius_15 w-100">
      <div class="cs-height_90 cs-height_lg_40"></div>
      <div class="row">
        <div class="col-lg-6">
          <div class="cs-section_heading cs-style1">
            <h3 class="cs-section_subtitle">Creative</h3>
            <?php the_content(); ?>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="cs-height_60 cs-height_lg_40"></div>
          <h2 class="cs-font_30 cs-font_26_sm cs-m0">Project Info -</h2>
          <div class="cs-height_50 cs-height_lg_30"></div>
          <div class="row">
            <div class="col-6">
              <h3 class="cs-accent_color cs-font_22 cs-font_18_sm cs-m0">Category:</h3>
              <p class="cs-m0">Artwork</p>
              <div class="cs-height_30 cs-height_lg_30"></div>
            </div>
            <div class="col-6">
              <h3 class="cs-accent_color cs-font_22 cs-font_18_sm cs-m0">Location:</h3>
              <p class="cs-m0">United Kindom</p>
              <div class="cs-height_30 cs-height_lg_30"></div>
            </div>
            <div class="col-6">
              <h3 class="cs-accent_color cs-font_22 cs-font_18_sm cs-m0">Software:</h3>
              <p class="cs-m0">Adobe Illustrator</p>
              <div class="cs-height_30 cs-height_lg_30"></div>
            </div>
            <div class="col-6">
              <h3 class="cs-accent_color cs-font_22 cs-font_18_sm cs-m0">Dated:</h3>
              <p class="cs-m0">14-Aug-2022</p>
              <div class="cs-height_30 cs-height_lg_30"></div>
            </div>
            <div class="col-6">
              <h3 class="cs-accent_color cs-font_22 cs-font_18_sm cs-m0">Client:</h3>
              <p class="cs-m0">Andreo Bowla</p>
              <div class="cs-height_30 cs-height_lg_30"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cs-height_65 cs-height_lg_10"></div>

    <?php // Obtén el proyecto anterior y el siguiente dentro de la misma taxonomía.
    $prev_post = get_previous_post( true, '', 'project_category' ); // Cambia 'project_category' por la taxonomía asociada.
    $next_post = get_next_post( true, '', 'project_category' );
    ?>

    <div class="cs-page_navigation cs-center">
      <div>
        <?php // Botón para el proyecto anterior.
        if ( $prev_post ) : ?>
            <a href="<?php echo get_permalink( $prev_post->ID ); ?>" class="cs-text_btn cs-type1">
              <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.469669 5.46967C0.176777 5.76256 0.176777 6.23744 0.469669 6.53033L5.24264 11.3033C5.53553 11.5962 6.01041 11.5962 6.3033 11.3033C6.59619 11.0104 6.59619 10.5355 6.3033 10.2426L2.06066 6L6.3033 1.75736C6.59619 1.46447 6.59619 0.989593 6.3033 0.696699C6.01041 0.403806 5.53553 0.403806 5.24264 0.696699L0.469669 5.46967ZM26 5.25L1 5.25V6.75L26 6.75V5.25Z" fill="currentColor"/>
              </svg>            
              <span>Prev Project</span> 
            </a>
        <?php endif; ?>
      </div>
      <div>
        <?php // Botón para el proyecto siguiente.
        if ( $next_post ) : ?>
            <a href="<?php echo get_permalink( $next_post->ID ); ?>" class="button next-project">
              <span>Next Project</span>
              <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor"></path>
              </svg>
            </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
  
  <div class="cs-height_145 cs-height_lg_80"></div>
  <!-- Start CTA -->
  <section>
    <div class="cs-cta cs-style1 cs-bg text-center cs-shape_wrap_1 cs-position_1 rounded-0" data-src="assets/img/cta_bg_2.jpg" >
      <div class="cs-shape_1"></div>
      <div class="cs-shape_1"></div>
      <div class="cs-shape_1"></div>
      <div class="cs-cta_in">
        <h2 class="cs-cta_title cs-semi_bold cs-m0"><a href="mailto:info@gavaweb.com" class="">info@gavaweb.com</a></h2>
      </div>
    </div>
  </section>
  <!-- End CTA -->
  
<?php get_footer(); ?>