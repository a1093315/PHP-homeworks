<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        這是一個登入頁面，請根據你的身分(校長/老師/學生)<br/>
        輸入相應的帳號及密碼。<br/>
        <font color="red">請注意，成功登入後校長僅能瀏覽校長及老師的網頁，</font><br/>
        <font color="red">老師僅能瀏覽老師及學生的網頁，</font><br/>
        <font color="red">學生僅能瀏覽學生的網頁。</font><br/>
        <font color="red">權限不符者將被強制登出。</font><br/>
        <p>
        <form method="POST" action="check.php">
            Your ID:<input type="text" name="id"><br/>
            Your password:<input type="password" name="pwd"><br/>
            <input type="submit"> <input type="reset">
        </form>
    </body>
</html>