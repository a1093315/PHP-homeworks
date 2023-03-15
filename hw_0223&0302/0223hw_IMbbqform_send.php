<html>
<head>
    <meta charset="utf-8">
    <title>資管111學年系烤-報名表單</title>
</head>
<body>
    <h1>系烤</h1>
<?php
echo"哈囉大家～<br/>新學期開始囉<br/>";
echo"這學期我們有一個活動「系烤」<br/>顧名思義就是要烤肉啦！<br/>";
echo"大家應該都看過宿舍旁邊的烤肉區<br/>我們3/22即將在那邊舉辦烤肉活動唷～<br/>";
echo"歡迎大家來共襄盛舉！<br/>在繁忙的課程中給自己一個喘息的晚上<br/>一起來吃吃喝喝玩樂吧<br/>";
echo"-----------------------------------------------<br/>";
echo"時間：3/22 17:00<br/>地點：宿舍烤肉區<br/>費用：$100(有繳系費)、$150(未繳系費)<br/>";
echo"#表單至3/8截止<br/>"
?>
<p>
<table style="text-align:center;" border="4">
    <tr>
        <td colspan="2">參加系烤的好處</td>
    </tr>
    <tr>
        <td>與系上同學好友一起娛樂</td>
        <td>調適校園生活緊湊的步調</td>
    </tr>
    <tr>
        <td>增加野外露營等相關經驗</td>
        <td>What else do you think of?</td>
    </tr>
</table>
<br/>
<table>
    <tr>
        <td><img src="plates.png" width="100" height="100"></td>
        <td><img src="cups.png" width="100" height="100"></td>
        <td><img src="sp&fo.png" width="100" height="100"></td>
    </tr>
</table>
<form method="post" action="0302hw_IMbbqform_receive.php">
請輸入你的學號:<input type="text" name="stu_id"><br/>
請輸入你的姓名:<input type="text" name="stu_name"><br/>
參加嗎？
<input type="radio" name="partake" value="yes">是
<input type="radio" name="partake" value="no">否
<br/>
有繳系費?
<input type="radio" name="money" value="yes">是
<input type="radio" name="money" value="no">否
<br/>
<input type="submit"><input type="reset">
</form>

</body>
</html>