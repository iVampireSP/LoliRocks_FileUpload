<!DOCTYPE html>
<html>
    <head>
    <?php include ('config/function.php');include ('config/today.php'); ?> <!-- 引入函数文件  -->
		<?php mduiHeader(); ?> <!-- 加载函数mduiHeader -->
    </head>
    <body <?php bodyClass();?>>
      <?php mduiToolbar(); mduiMenu(); ?> <!-- 批量加载function.php函数 -->
        <div class="mdui-container">
          <h3 class="mdui-text-color-indigo">
              欢迎使用Loli.Rocks在线提交系统。
          </h3>
          <?php
          $ifuser = ($_COOKIE["user"]);
          $guest = 'guest';
          if ($ifuser == $guest) {
            echo  '<h4 class="mdui-text-color-indigo">同学，您好。请设置姓名。</h4>
              <a href="setting.php"
              <button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent">设置姓名</button></a>';
			echo "&nbsp;<button class=\"mdui-btn mdui-btn-raised mdui-color-theme-accent mdui-ripple\" mdui-dialog=\"{target: '#today'}\">查看作业</button>";
			  today();
          }else {
            echo "<h4 class=\"mdui-text-color-indigo\">您好，$ifuser 。</h4>
              <a href=\"upload.php\"
              <button class=\"mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent\">提交文件</button></a>
              <button class=\"mdui-btn mdui-btn-raised mdui-color-theme-accent mdui-ripple\" mdui-dialog=\"{target: '#today'}\">查看作业</button>";
          }
            today();
			footer();
           ?>
        </div>
        <script src="js/mdui.min.js"></script>
    </body>
</html>
