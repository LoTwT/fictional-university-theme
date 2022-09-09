# fictional-university-theme

## 特殊模板文件

根据访问 URL 的不同，wordpress 会使用主题文件夹中的不同文件控制页面显示的模板

- header.php
- footer.php
- single.php : `文章 / posts`。点击 `the_permalink()` 作为连接跳转的文章，以该文件作为模板；不存在时，fallback 为默认模板
- page.php : `页面 / pages` 。
- functions.php : 和 wordpress 内置功能、函数进行交互

## wordpress 内置函数

- bloginfo : 提供网站的各种信息
- add_action : 注册自定义 action 
- wp_enqueue_style : 加载 css 文件
- get_stylesheet_uri : 获取 `style.css` 资源路径

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
