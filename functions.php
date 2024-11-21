<?php
// Add feature image option for posts
add_theme_support('post-thumbnails');

function add_google_tag_to_head() {
    ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4RB72P4MEQ"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-4RB72P4MEQ');
    </script>
    <?php
}
add_action('wp_head', 'add_google_tag_to_head');

