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
              设置您的账号。
          </h3>
          <p>姓名必须保证真实性，否则提交时可能会覆盖他人文件或者提交无效。</p>
          <?php
          $ifuser = ($_COOKIE["user"]);
          $guest = 'guest';
          if ($ifuser == $guest) {
            echo  '<h4 class="mdui-text-color-indigo">同学，您好。请设置姓名。</h4>
            <form name="setname" method="post" action="finished.php">
              <div class="mdui-textfield mdui-textfield-floating-label">
                <label class="mdui-textfield-label">姓名</label>
                <input class="mdui-textfield-input" type="text" name="name" maxlength="3" />
              </div>
            <button class="mdui-btn mdui-btn-raised mdui-ripple mdui-color-theme-accent">确定设置</button>
            </form>';
          }else {
            echo "<h4 class=\"mdui-text-color-indigo\">您好，$ifuser 。</h4>
            <p>您已设置，在有效期内无需重复设置。</p>
            <a href=\"logout.php\">立即注销</a>
            ";
          }
			footer();
           ?>
        </div>
        <script src="js/mdui.min.js"></script>
    </body>
</html>
