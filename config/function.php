<?php
function mduiHeader() {
  // 自定义php
  // 判断页面文件名，实现不同文件名设置不同变量，达到不同标题的结果。
  $ourl = htmlspecialchars($_SERVER['PHP_SELF']); // 获取当前文件名
  if ($ourl == '/index.php') { // 判断文件名为'/index.php'
      $checkurl = '首页'; // 如果是，则设置$checkurl变量为'首页'
  }
  elseif ($ourl == '/finished.php') { // 否则再判断文件名为'/about.php'
    $checkurl = '正在完成。。。'; // 如果是，则给变量$checkurl 赋值为'首页'
  }
  elseif ($ourl == '/setting.php') {
    $checkurl = '设置';
  }
  elseif ($ourl == '/upload.php') {
    $checkurl = '提交';
  }
  elseif ($ourl == '/start.php') {
    $checkurl = '首页';
  }
  elseif ($ourl == '/is_ok.php') {
    $checkurl = '完成';
  }
  else { // 没有条件判断后，否则 输出最后结果
    $checkurl = null; // 变量$checkurl被复制为null
  }
  // 自定义结束
  echo "
         <meta charset=\"utf-8\" />
         <link rel=\"stylesheet\" type=\"text/css\" href=\"css/mdui.min.css\" />
         <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\" />
         <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no \" />
         <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
         <meta name=\"renderer\" content=\"webkit\">
         <meta http-equiv=\"Cache-Control\" content=\"no-siteapp\" />
         <title>Loli.Rocks[洛丽柔可]:$checkurl</title>
 ";
}
function bodyClass() {
  echo 'class="mdui-drawer-body-left mdui-appbar-with-toolbar mdui-theme-primary-indigo mdui-theme-accent-pink"';
}
function mduiMenu() {
  echo '
  <div class="mdui-drawer" id="main-drawer">
<div class="mdui-list" mdui-collapse="{accordion: true}" style="margin-bottom: 76px;">
<div class="mdui-collapse-item ">
<div class="mdui-collapse-item-header mdui-list-item mdui-ripple">
<i class="mdui-list-item-icon mdui-icon material-icons mdui-text-color-blue">near_me</i>
<div class="mdui-list-item-content">想要干什么呢？</div>
<i class="mdui-collapse-item-arrow mdui-icon material-icons">keyboard_arrow_down</i>
</div>
<div class="mdui-collapse-item-body mdui-list">
<a href="./start.php" class="mdui-list-item mdui-ripple ">首页</a>
<a href="./upload.php" class="mdui-list-item mdui-ripple ">提交</a>
<a href="./setting.php" class="mdui-list-item mdui-ripple ">设置</a>
</div>
</div>
</div>
</div>
  ';
}
function mduiToolbar() {
  // 自定义php
  // 判断页面文件名，实现不同文件名设置不同变量，达到不同标题的结果。
  $ourl = htmlspecialchars($_SERVER['PHP_SELF']); // 获取当前文件名
  if ($ourl == '/index.php') { // 判断文件名为'/index.php'
      $checkurl = '首页'; // 如果是，则设置$checkurl变量为'首页'
  }
  elseif ($ourl == '/finished.php') { // 否则再判断文件名为'/about.php'
    $checkurl = '正在完成。。。'; // 如果是，则给变量$checkurl 赋值为'首页'
  }
  elseif ($ourl == '/setting.php') {
    $checkurl = '设置';
  }
  elseif ($ourl == '/upload.php') {
    $checkurl = '提交';
  }
  elseif ($ourl == '/start.php') {
    $checkurl = '首页';
  }
  elseif ($ourl == '/is_ok.php') {
    $checkurl = '完成';
  }
  else { // 没有条件判断后，否则 输出最后结果
    $checkurl = null; // 变量$checkurl被复制为null
  }
  // 自定义结束
  echo "<div class=\"mdui-appbar mdui-appbar-fixed\">
         		<div class=\"mdui-toolbar mdui-color-indigo\">
              <span class=\"mdui-btn mdui-btn-icon mdui-ripple mdui-ripple-white\" mdui-drawer=\"{target: '#main-drawer', swipe: true}\"><i class=\"mdui-icon material-icons\">menu</i></span>
             <a href=\"javascript:;\" class=\"mdui-typo-headline\">Loli.Rocks</a>
             <a href=\"javascript:;\" onclick=\"location.reload();\" class=\"mdui-typo-title\">$checkurl</a>
          <div class=\"mdui-toolbar-spacer\"></div>
          </div>
          </div>";
        }
function footer() {
	echo '<div class="footer"><p> &copy; <a href="https://ivampiresp.com" target="_blank">iVampireSP.com</a>版权所有</p></div>';
}
 ?>
