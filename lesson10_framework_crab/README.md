#crabPHP

尝试写一个简单的框架，学习MVC及设计模式

#### 如果你的项目没有使用composer，使用下面的方式加载类
<pre>
require __DIR__ . '/src/ClassLoader.php';
Crab\ClassLoader::register();
</pre>

## Url
通过Get参数传递, 如 `index.php?c=site&a=index`
c参数接受控制器
a参数接受方法

## 文件目录
- controllers 控制器
- runtime 临时文件夹
- src 框架核心文件
- vendor 加载其他插件
- views 视图文件
