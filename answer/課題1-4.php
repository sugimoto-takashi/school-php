<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            padding:1em;
            margin:1em;
            border-top:1px solid #ccc;
            border-bottom:1px solid #ccc;
        }
    </style>
</head>
<body>
<p>PHP問題1-4</p>
<div>
    <!-- 問題１ -->
    <p style="border-bottom:1px solid #ccc;">問題1<br>
    「はい」「いいえ」のアドベンチャーゲームを作ってください。</p>
    <p>解答例</p>
    <form action="課題1-4.php" method="get">
        <input type="hidden" name="sentaku">
        <input type="radio" name="sentaku" value="はい">
        <input type="radio" name="sentaku" value="いいえ">
        <input type="submit">
    </form>
    <?php 
        if(@$_GET["sentaku"]=="はい"):
            echo "好きです";
        elseif(@$_GET["sentaku"]=="いいえ"):
            echo "嫌いです";
        else:
        endif;
    ?>
</div>






</body>
</html>