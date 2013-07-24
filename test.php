
<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Round Color Test</title>

    <style>
        body {
            margin: 0px;padding:0px;
        }
        .box {
            width: 25%;
            height: 200px;
            float: left;
            margin:0px;
            padding:0px;
            text-align: center;
        }
        .clear {
            display: block;
            line-height: 1px;
            height: 1px;
            font-size: 1px;
            clear: both;
        }

    </style>
</head>
<body>
<?php

require "PKRoundColor.php";
$color = "#f3f3dd";
$PKR = new PKRoundColor();
$baseColors = $PKR->getBaseColors();
$roundedColor = $PKR->getRoundedColor($color);
?>
<strong>Color : </strong>
<div class='clear'></div>
<div class='box' style="background: <?=$color;?>">Your Color <br/> <?=$color;?></div>
<div class="clear"></div>
<strong>Rounded color : </strong>

<div class="clear"></div>
<div class='box' style="background: <?=$roundedColor;?>">Rounded Color <br/> <?=$roundedColor;?></div>
<div class="clear"></div>

<strong>Base colors : </strong>
<div class='clear'></div>
<?php foreach($baseColors as $baseColor): ?>
    <div class='box' style="background: #<?=$baseColor;?>"><?=$baseColor;?></div>
<?php endforeach; ?>



</body>
</html>

