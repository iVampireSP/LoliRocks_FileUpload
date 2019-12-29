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
          $guest = '';
          $filename = ($_GET["filename"]);
          if ($ifuser == $guest) {
            echo  '<h4 class="mdui-text-color-indigo">同学，您好。请设置姓名。</h4>
              <a href="setting.php"
              <button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent">设置姓名</button></a>';
			echo "&nbsp;<button class=\"mdui-btn mdui-btn-raised mdui-color-theme-accent mdui-ripple\" mdui-dialog=\"{target: '#today'}\">查看作业</button>";
			  today();
          }else {
            echo "<h4 class=\"mdui-text-color-indigo\">您好，$ifuser 。</h4>
              <br /><p>提交完成。如果您提交错误，可以重新提交以覆盖之前提交的文件，但是之前提交的文件无法找回。</p>";
              echo "如有需要，可以：<a class=\"mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent\" href=\"upload/$filename\"><i class=\"mdui-icon material-icons\">arrow_downward</i>下载/查看</button></a>";
          }
            today();
			footer();
           ?>
        </div>
        <script src="js/mdui.min.js"></script>
    </body>
</html>
