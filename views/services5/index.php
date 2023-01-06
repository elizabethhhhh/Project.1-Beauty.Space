<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<div class="lead">
<div class="rw">
<h1 class="display-4"><center>MAKEUP</h1>
<p class="tab"></p>
<p>Now you can not worry about how you will look at a birthday party, wedding or photo shoot! With years of experience our salon specialists will create an exclusive image that will emphasize your beauty.</p>
<p class="tab"></p>
<p align="center">MANY YEARS OF EXPERIENCE AND PROFESSIONALISM ✔<br>
SAFE SERVICE ✔<br>BEST COSMETICS WORLD BRANDS ✔</p>
<p class="tab"></p>
<h1 class="display-4" align="center">Price</h1> 
<p align="center">MAKEUP</p>

<ul>
<?php foreach ($service5 as $services5): ?>
    <li>
        <?= Html::encode("{$services5->name}") ?>:
        <?= $services5->price ?>
    </li>
<?php endforeach; ?>
</ul>

<p>*The cost depends on the category of the master and the amount of materials used for services</p>

<!-- <?= LinkPager::widget(['pagination' => $pagination]) ?> -->
<style>
    body{ 
        background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAA1BMVEVTaluqK6ZiAAAASElEQVR4nO3BgQAAAADDoPlTX+AIVQEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADwDcaiAAFXD1ujAAAAAElFTkSuQmCC) no-repeat;
        -moz-background-size: 100%;
        -webkit-background-size: 100%;
        -o-background-size: 100%;
        background-size: 100%;
     }
</style> 
<body>
</div>
</div>

<style type="text/css">
    .rw{
        font-size: 14pt;
    }
    .tab { margin: 20px; }
</style>
<style>
li{
 color: white;
}
h1{
 color: white;
}
p{
 color: white;
}
.display-4{
    font-size: 35pt;
}
</style>

