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

  add_action("wp_enqueue_scripts", "load_css");

  function university_features() {
    // 注册动态导航栏 ( 第二个参数显示在控制台中 )
    register_nav_menu("headerMenuLocation", "Header Menu Location");
    // 也可以用作底部动态导航
    register_nav_menu("footerLocationOne", "Footer Location One");
    register_nav_menu("footerLocationTwo", "Footer Location Two");

    // 每个页面自动生成标题
    add_theme_support("title-tag");
  }

  add_action("after_setup_theme", "university_features");

?>
