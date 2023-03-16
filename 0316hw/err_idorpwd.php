<html>
    <head>
    <meta charset="utf-8">
    </head>
    <body>
        1.你的登入身分不屬於校長、老師、學生任一者<br/>
        2.你沒有正常登入<br/>
        <span style="color: red; font-size: 35px;">你將被強制登出！</span><br/>
        <p>
        五秒後將回到登入頁面<br/>
        <a href="show.php">嗯...你也可以點這個啦</a>
        <?php
        header("Refresh:5;url=show.php")
        ?>
    </body>
</html>