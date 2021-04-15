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
<p>PHP課題1-4</p>
<div>
    <!-- 課題１ -->
    <p style="border-bottom:1px solid #ccc;">課題1<br>
    「はい」「いいえ」のアドベンチャーゲームを作ってください。</p>
    <p>解答例</p>
    <form action="課題1-4.php" method="get">
        <input type="radio" name="yes" value="はい">
        <input type="radio" name="no" value="はい">
    </form>
    <?php 
        if():
        else:
        endif;
    ?>
</div>
<!-- 課題２ -->
<div>
    <p style="border-bottom:1px solid #ccc;">課題2<br>
    キャラクターの変数を作り、<br>「はい」「いいえ」による選択肢で好感度が上下する<br>プログラムを作ってください。</p>
    <p>解答例</p>
    <?php 
        $min=1;
        $max=100;
        for ($i=1; $i < 100 ; $i++) { 
            $rand = mt_rand($min,$max);
            echo $rand."<br>";
         
        }
        echo "最小値は".$min."<br>";
        echo "最大値は".$max."<br>";
    ?>
</div>

    <!-- 課題３ -->
    <div>
    <p style="border-bottom:1px solid #ccc;">課題3<br>
    問題２にあったキャラクターの好感度の最低値（-100）と最高値（+100）を作り<br>
初期値０で初めて、－100になったらゲームオーバー。<br>＋100になったらエンディングになるようにプログラムを組んでください。</p>
    <p>解答例</p>
    <?php 
        $min=1;
        $max=100;
        for ($i=1; $i < 100 ; $i++) { 
            $rand = mt_rand($min,$max);
            echo $rand;
            switch ($rand) {
                case $rand<=26:
                    echo "(小)"."<br>";
                    break;
                case $rand<=51:
                    echo "(中)"."<br>";
                    break;
                case $rand<=76:
                    echo "(高)"."<br>";
                    break;                    
                default:
                echo "(特大)"."<br>";
                    break;
            }
            
        }
        echo "最小値は".$min."<br>";
        echo "最大値は".$max."<br>";
    ?>
</div>




</body>
</html>