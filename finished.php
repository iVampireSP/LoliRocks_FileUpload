<!DOCTYPE html>
<html>
    <head>
    <?php include ('config/function.php'); ?> <!-- 引入函数文件  -->
		<?php mduiHeader(); ?> <!-- 加载函数mduiHeader -->
    </head>
    <body <?php bodyClass();?>>
      <?php mduiToolbar();mduiMenu(); ?> <!-- 批量加载function.php函数 -->
        <div class="mdui-container">
          <h3 class="mdui-text-color-indigo">
              欢迎使用Loli.Rocks在线提交系统。
          </h3>
          <?php
            $getuser = htmlspecialchars($_POST["name"]);
            setcookie ("user","$getuser");
            header ("location: start.php");
           ?>
        </div>
    </body>
</html>
