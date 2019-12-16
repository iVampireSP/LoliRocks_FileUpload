<!DOCTYPE html>
<html>
    <head>
    <?php include ('config/function.php');include ('config/today.php'); ?> <!-- 引入函数文件  -->
		<?php mduiHeader(); ?> <!-- 加载函数mduiHeader -->
    </head>
    <body <?php bodyClass();?>>
      <?php mduiToolbar();mduiMenu(); ?> <!-- 批量加载function.php函数 -->
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
          }else {
            echo "<h4 class=\"mdui-text-color-indigo\">您好，$ifuser 。请提交文件。如果不知道提交什么可以点击 “查看作业”。提交前请必须阅读“提交必看”！</h4>
              <form name=\"upload\" method=\"post\" action=\"done.php\" enctype=\"multipart/form-data\">
                <input type=\"file\" name=\"file\" />
                <button class=\"mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent\">提交文件</button>
              </form>
              <br />
              <button class=\"mdui-btn mdui-btn-raised mdui-color-theme-accent mdui-ripple\" mdui-dialog=\"{target: '#today'}\">查看作业</button>
              <button class=\"mdui-btn mdui-btn-raised mdui-color-theme-accent mdui-ripple\" mdui-dialog=\"{target: '#mustread'}\">提交必看</button>";
              today();
			  footer();
          }
           ?>

        </div>
        <script src="js/mdui.min.js"></script>
    </body>
</html>
