# fictional-university-theme

- <https://codex.wordpress.org>
- <https://developer.wordpress.org>

- wordpress 主题开发文档：<https://developer.wordpress.org/themes/getting-started/>

## 特殊模板文件

根据访问 URL 的不同，wordpress 会使用主题文件夹中的不同文件控制页面显示的模板

- header.php
- footer.php
- single.php : `文章 / posts`。点击 `the_permalink()` 作为连接跳转的文章，以该文件作为模板；不存在时，fallback 为默认模板
- page.php : `页面 / pages` 。
- functions.php : 和 wordpress 内置功能、函数进行交互

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
- wp_get_post_parent_id : 返回输入的页面 id 的父页面 id
- get_the_title : 获取指定 id 页面的标题
- get_permalink : 获取指定 id 页面的链接
- wp_list_pages
- get_pages
- language_attributes : 在 HTML 标签上设置当前浏览器所用语言
- body_class : 给 `<body>` 加上当前页面对应的特殊的 class 名

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
