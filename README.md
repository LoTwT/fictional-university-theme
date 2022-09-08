# fictional-university-theme

## 特殊模板文件

根据访问 URL 的不同，wordpress 会使用主题文件夹中的不同文件控制页面显示的模板

- single.php : `文章 / posts`。点击 `the_permalink()` 跳转文章，以该文件作为模板；不存在时，fallback 为默认模板
- page.php : `页面 / pages` 。

## wordpress 内置函数

- bloginfo() : 提供网站的各种信息

### posts

- have_posts() : 是否有文章
- the_post() : 当前文章
- the_title() : 当前文章标题
- the_content() : 当前文章内容
- the_permalink() : 当前文章链接
