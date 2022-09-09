<?php

  function load_css() {
    // js
    wp_enqueue_script("main-university-js", get_theme_file_uri("/build/index.js"), array("jquery"), "0.1", true);
    // 字体
    wp_enqueue_style("custom-google-fonts", "//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i");
    wp_enqueue_style("font_awesome", "//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    // css
    wp_enqueue_style("university_main_style", get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style("university_extra_style", get_theme_file_uri('/build/index.css'));
  }

  add_action("wp_enqueue_scripts", "load_css")

?>
