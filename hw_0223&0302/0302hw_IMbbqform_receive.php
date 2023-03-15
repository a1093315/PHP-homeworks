<html>
<head>
    <meta charset="utf-8">
    <title>表單已收到回覆</title>
</head>
<body>
    <?php
    $stu_id = $_POST["stu_id"];
    $stu_name = $_POST["stu_name"];
    $partake = $_POST["partake"];
    $money = $_POST["money"];
    echo "你的學號:".$stu_id."<br/>";
    echo "你的名字:".$stu_name."<br/>";
    if($partake=="yes")
    {
        echo "太棒了!我們萬分歡迎你/妳的蒞臨。<br/>";
        echo "記得在3/22 17:00 到烤肉區喔!<br/>";
        if($money=="yes")
            echo "所需繳費金額為100元。<br/>";
        else
            echo "所需繳費金額為150元。<br/>";
    }
    else
        echo "可惜了，希望下次能與你/妳同樂。<br/>";
    ?>
</body>
</html>