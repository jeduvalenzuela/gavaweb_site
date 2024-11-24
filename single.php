<?php get_header(); ?>

    <!-- Start Hero -->
    <div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="<?php echo get_bloginfo( 'template_directory' );?>/assets/img/blog_details_hero_bg.jpg">
      <div class="container">
        <div class="cs-page_heading_in">
          <h1 class="cs-page_title cs-font_50 cs-white_color"><?php the_title(); ?></h1>
          <ol class="breadcrumb text-uppercase">
            <li class="breadcrumb-item">
              <a href="index-2.html">Home</a>
            </li>
            <li class="breadcrumb-item active"><?php the_title(); ?></li>
          </ol>
        </div>
      </div>
    </div>
    <!-- End Hero -->
    <div class="cs-height_150 cs-height_lg_80"></div>
    <!-- Start Blogs -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="cs-post cs-style2">
              <div class="cs-post_thumb cs-radius_15">
                <?php $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large'); 
                  if(!empty($thumbnail_url)){
                    echo '<img src="' . $thumbnail_url . '" alt="Post" class="w-100 cs-radius_15">';
                  }
                ?>
              </div>
              <div class="cs-post_info">
                <div class="cs-post_meta cs-style1 cs-ternary_color cs-semi_bold cs-primary_font">
                  <span class="cs-posted_by">07 Mar 2022</span>
                  <a href="#" class="cs-post_avatar">Tech</a>
                </div>
                
                <?php the_content(); ?>                
                
              </div>
            </div>
            <div class="cs-height_30 cs-height_lg_30"></div>
            <h2 class="cs-font_50 cs-m0">Leave A Reply</h2>
            <div class="cs-height_5 cs-height_lg_5"></div>
            <p class="cs-m0">Your email address will not be published. Required fields are marked *</p>
            <div class="cs-height_40 cs-height_lg_30"></div>
            <form action="#" class="row">
              <div class="col-lg-6">
                <label>Full Name*</label>
                <input type="text" class="cs-form_field">
                <div class="cs-height_20 cs-height_lg_20"></div>
              </div>
              <div class="col-lg-6">
                <label>Email*</label>
                <input type="text" class="cs-form_field">
                <div class="cs-height_20 cs-height_lg_20"></div>
              </div>
              <div class="col-lg-12">
                <label>Website*</label>
                <input type="text" class="cs-form_field">
                <div class="cs-height_20 cs-height_lg_20"></div>
              </div>
              <div class="col-lg-12">
                <label>Write Your Comment*</label>
                <textarea cols="30" rows="7" class="cs-form_field"></textarea>
                <div class="cs-height_25 cs-height_lg_25"></div>
              </div>
              <div class="col-lg-12">
                <button class="cs-btn cs-style1">
                  <span>Send Message</span>
                  <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor" />
                  </svg>
                </button>
              </div>
            </form>
          </div>
          <div class="col-xl-3 col-lg-4 offset-xl-1">
            <div class="cs-height_0 cs-height_lg_80"></div>
            <div class="cs-sidebar cs-right_sidebar cs-accent_5_bg_2">
              <div class="cs-sidebar_item author_search text-center">
                <div class="cs-author_card">
                  <img src="<?php echo get_bloginfo( 'template_directory' );?>/assets/img/avatar_1.png" alt="Aauthor">
                  <h3>Kuber Jontra</h3>
                  <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                </div>
              </div>
              <div class="cs-sidebar_item widget_search">
                <h4 class="cs-sidebar_widget_title">Search</h4>
                <form class="cs-sidebar_search" action="#">
                  <input type="text" placeholder="Search...">
                  <button class="cs-sidebar_search_btn">
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M11.4351 10.0629H10.7124L10.4563 9.81589C11.3528 8.77301 11.8925 7.4191 11.8925 5.94625C11.8925 2.66209 9.23042 0 5.94625 0C2.66209 0 0 2.66209 0 5.94625C0 9.23042 2.66209 11.8925 5.94625 11.8925C7.4191 11.8925 8.77301 11.3528 9.81589 10.4563L10.0629 10.7124V11.4351L14.6369 16L16 14.6369L11.4351 10.0629ZM5.94625 10.0629C3.66838 10.0629 1.82962 8.22413 1.82962 5.94625C1.82962 3.66838 3.66838 1.82962 5.94625 1.82962C8.22413 1.82962 10.0629 3.66838 10.0629 5.94625C10.0629 8.22413 8.22413 10.0629 5.94625 10.0629Z" fill="currentColor" />
                    </svg>
                  </button>
                </form>
              </div>
              <!--div class="cs-sidebar_item widget_categories">
                <h4 class="cs-sidebar_widget_title">Categories</h4>
                <ul>
                  <li class="cat-item">
                    <a href="#">Corporate</a>
                  </li>
                  <li class="cat-item">
                    <a href="#">Company</a>
                  </li>
                  <li class="cat-item">
                    <a href="#">Search Engine</a>
                  </li>
                  <li class="cat-item">
                    <a href="#">Information</a>
                  </li>
                  <li class="cat-item">
                    <a href="#">Painting</a>
                  </li>
                </ul>
              </div-->
              <div class="cs-sidebar_item">
                  <h4 class="cs-sidebar_widget_title">Recent Posts</h4>
                  <ul class="cs-recent_posts">
                      <?php
                      // Define the query to get the recent posts
                      $recent_posts_query = new WP_Query(array(
                          'post_type'      => 'post',      // Tipo de post (puedes cambiarlo si necesitas otro CPT)
                          'posts_per_page' => 4,           // Número de posts a mostrar
                          'orderby'        => 'date',      // Ordenar por fecha
                          'order'          => 'DESC'       // Orden descendente (post más reciente primero)
                      ));

                      // Loop para mostrar los posts recientes
                      if ($recent_posts_query->have_posts()) :
                          while ($recent_posts_query->have_posts()) : $recent_posts_query->the_post(); ?>
                              <li>
                                  <div class="cs-recent_post">
                                      <a href="<?php the_permalink(); ?>" class="cs-recent_post_thumb">
                                          <div class="cs-recent_post_thumb_in cs-bg" data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>"></div>
                                      </a>
                                      <div class="cs-recent_post_info">
                                          <h3 class="cs-recent_post_title">
                                              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                          </h3>
                                          <div class="cs-recent_post_date cs-primary_40_color"><?php echo get_the_date(); ?></div>
                                      </div>
                                  </div>
                              </li>
                          <?php endwhile;
                          // Reset post data after the loop
                          wp_reset_postdata();
                      else : ?>
                          <li>No recent posts found.</li>
                      <?php endif; ?>
                  </ul>
              </div>

              <!--div class="cs-sidebar_item widget_archive">
                <h4 class="cs-sidebar_widget_title">Archives</h4>
                <ul>
                  <li>
                    <a href="#">Archives</a>
                  </li>
                  <li>
                    <a href="#">15 Aug 2022</a>
                  </li>
                  <li>
                    <a href="#">20 Sep 2021</a>
                  </li>
                  <li>
                    <a href="#">11 Dec 2020</a>
                  </li>
                  <li>
                    <a href="#">25 jun 2020</a>
                  </li>
                </ul>
              </div-->
              <div class="cs-sidebar_item widget_tag_cloud">
                <h4 class="cs-sidebar_widget_title">Tags</h4>
                <div class="tagcloud">
                  <a href="#" class="tag-cloud-link">Business</a>
                  <a href="#" class="tag-cloud-link">Agency</a>
                  <a href="#" class="tag-cloud-link">Artwork</a>
                  <a href="#" class="tag-cloud-link">Marketing</a>
                  <a href="#" class="tag-cloud-link">Information</a>
                  <a href="#" class="tag-cloud-link">Design</a>
                  <a href="#" class="tag-cloud-link">Wordpress</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Blogs -->
    <div class="cs-height_150 cs-height_lg_80"></div>
    <!-- Start CTA -->
    <section>
      <div class="container">
        <div class="cs-cta cs-style1 cs-bg text-center cs-shape_wrap_1 cs-position_1" data-src="<?php echo get_bloginfo( 'template_directory' );?>/assets/img/cta_bg.jpg">
          <div class="cs-shape_1"></div>
          <div class="cs-shape_1"></div>
          <div class="cs-shape_1"></div>
          <div class="cs-cta_in">
            <h2 class="cs-cta_title cs-semi_bold cs-m0">Let’s disscuse make <br>something <i>cool</i> together </h2>
            <div class="cs-height_70 cs-height_lg_30"></div>
            <a href="contact.html" class="cs-text_btn">
              <span>Apply For Meeting</span>
              <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.5307 6.53033C25.8236 6.23744 25.8236 5.76256 25.5307 5.46967L20.7577 0.696699C20.4648 0.403806 19.99 0.403806 19.6971 0.696699C19.4042 0.989593 19.4042 1.46447 19.6971 1.75736L23.9397 6L19.6971 10.2426C19.4042 10.5355 19.4042 11.0104 19.6971 11.3033C19.99 11.5962 20.4648 11.5962 20.7577 11.3033L25.5307 6.53033ZM0.000366211 6.75H25.0004V5.25H0.000366211V6.75Z" fill="currentColor" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </section>
    <!-- End CTA -->



<?php get_footer(); ?>