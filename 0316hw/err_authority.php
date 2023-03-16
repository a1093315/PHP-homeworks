<?php
session_start();
?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        你的登入身分與欲前往的網頁所需權限不符。<br/>
        <span style="color: red; font-size: 35px;">請勿非法登入！</span><br/>
        <?php
        session_destroy();
        ?>
        <p>
        五秒後將回到登入頁面<br/>
        <a href="show.php">嗯...你也可以點這個啦</a>
        <?php
        header("Refresh:5;url=show.php")
        ?>
    </body>
</html>