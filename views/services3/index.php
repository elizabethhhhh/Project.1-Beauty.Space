<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<div class="lead">
<div class="rw">
<h1 class="display-4"><center>MANICURE AND PEDICURE</h1>
<p class="tab"></p>
<p>We offer safe manicures and pedicures, different types of coatings, as well as nail extensions.</p>
<p class="tab"></p>
<p align="center">MANICURE, PEDICURE, SPA-CARE FOR HANDS AND FEET. ✔<br>
THE WORLD'S BEST BRANDS: GEHWOL, OPI, LUXIO, REFORMA. ✔<br>ALL STAGES OF DISINFECTION AND STERILIZATION OF INSTRUMENTS. ✔</p>
<p class="tab"></p>
<h1 class="display-4" align="center">Price</h1> 
<p align="center">MANICURE/PEDICURE</p>

<ul>
<?php foreach ($service3 as $services3): ?>
    <li>
        <?= Html::encode("{$services3->name}") ?>:
        <?= $services3->price ?>
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

