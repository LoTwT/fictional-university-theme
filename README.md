# fictional-university-theme

- <https://codex.wordpress.org>
- <https://developer.wordpress.org>

- wordpress 主题开发文档：<https://developer.wordpress.org/themes/getting-started/>

- wordpress dashicons：<https://developer.wordpress.org/resource/dashicons>

## 特殊文件夹

`wp-content/mu-plugins` 强制启用的插件存放目录

```php
// wp-content/muplugins/university-post-types.php
// 注册文章类型 event
<?php
  // 自定义 posts 类型
  function university_post_types() {
    register_post_type("event", array(
      "supports" => array("title", "editor", "excerpt"),
      "rewrite" => array("slug" => "events"),
      "has_archive" => true, // 归档 URL
      "public" => true,
      'show_in_rest' => true,
      "labels" => array(
        "name" => "Events",
        "add_new_item" => "Add New Event",
        "edit_item" => "Edit Event",
        "all_items" => "All Events",
        "singular_name" => "Event"
      ),
      "menu_icon" => "dashicons-calendar",
    ));
  }

  add_action("init", "university_post_types");
?>
```

## 特殊模板文件

根据访问 URL 的不同，wordpress 会使用主题文件夹中的不同文件控制页面显示的模板

- header.php
- footer.php
- single.php : `文章 / posts`。点击 `the_permalink()` 作为连接跳转的文章，以该文件作为模板；不存在时，fallback 为默认模板
- page.php : `页面 / pages` 。
- functions.php : 和 wordpress 内置功能、函数进行交互
- front-page.php : 自定义首页 ( 替代 index.php )
- archive.php : 展示通过类别筛选后的归档页
- single-xxx.php : 新建文章类型后，使用 `single-新文章类型.php` 作为模板
- archive-xxx.php : 归档页，使用 `archive-新文章类型.php` 作为模板

## wordpress 内置函数

get 开头的函数返回对应结果；the 开头的函数会进行输出 ( echo ) 。

- bloginfo : 提供网站的各种信息
- add_action : 注册自定义 action 
- wp_enqueue_style : 加载 css 文件
- get_stylesheet_uri : 获取 `style.css` 资源路径
- get_theme_file_uri : 获取自定义 css 文件路径，会添加相当于当前项目的静态资源路径
- add_theme_support : 主题支持
- site_url : 当前网站根 URL
- get_the_ID : 获取当前页面的 id
- wp_get_post_parent_id : 返回输入的页面 id 的父页面 id ( 参数给 0 时，默认查找当前页面的父页面 )
- get_the_title : 获取指定 id 页面的标题
- get_permalink : 获取指定 id 页面的链接
- wp_list_pages
- get_pages
- language_attributes : 在 HTML 标签上设置当前浏览器所用语言
- body_class : 给 `<body>` 加上当前页面对应的特殊的 class 名
- register_nav_menu : 注册动态导航栏
- wp_nav_menu : 动态导航栏占位
- is_page : 是不是某一个指定页面
- is_category : 归档页，是类别
- single_cat_title : 显示当前类别名称
- is_author : 归档页，是作者
- the_archive_title : 归档页标题
- the_archive_description : 归档页描述 ( 需对应设置，如作者设置个人说明 )
- the_time : 获取文章的时间 ( 通过参数控制需要的年月日及其格式 )
- wp_trim_words : 裁剪文章内容，可用作摘要
- wp_reset_postdata : 重置自定义查询数据，让 wordpress 重新按默认行为工作
- get_post_type
- get_post_type_archive_link : 获取指定文章类型的归档链接

### header

- get_header : 给当前模板注入 `header.php`
- wp_head : 让 wordpress 能在 `<head>` 标签中进行操作的钩子

### footer

- get_footer : 给当前模板注入 `footer.php`
- wp_footer : 让 wordpress 能在 `</body>` 前进行操作的钩子
### posts

- have_posts : 是否有文章
- the_post : 当前文章
- the_title : 当前文章标题
- the_content : 当前文章内容
- the_permalink : 当前文章链接
- has_excerpt : 当前文章是否手动设置了摘要
- the_excerpt : 当前文章摘要
- get_the_excerpt
- the_author
- the_author_posts_link
- get_the_category_list : 文章类别
- the_field : 获取对应字段
- get_field

## plugins

### Custom fields

- Advanced Custom Fields ( ACF )
- Custom Metaboxes 2 ( CMB2 )
