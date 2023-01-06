<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<div class="lead">
<div class="rw">
<h1 class="display-4"><center>COLORING</h1>
<p class="tab"></p>
<p>Ombre, sombre, balayage, shade, tiger eye...? Our specialists will offer you trendy transformations using the most fashionable coloring techniques.</p>
<p class="tab"></p>
<p align="center">PROFESSIONAL COLORING INOA, MAJIREL, DIA. ✔<br> MOSSA BIO-CURL IS THE WORLD'S ONLY FORMULA FOR OBTAINING CURLS AND CURLS WITHOUT <br>AGGRESSIVE COMPONENTS. THE RESULT IS A LONG-LASTING CURL FOR UP TO 6 MONTHS. ✔<br>KERATIN HAIR STRAIGHTENING - INTENSIVE RESTORATION OF DAMAGED HAIR AS WELL AS STRAIGHTENING <br>OF FRIZZY AND UNRULY HAIR. AS A RESULT THE HAIR IS FILLED FROM THE INSIDE, BECOMES ELASTIC AND SHINY. ✔</p>
<p class="tab"></p>
<h1 class="display-4" align="center">Price</h1> 
<p align="center">COLORING</p>

<ul>
<?php foreach ($service1 as $services1): ?>
    <li>
        <?= Html::encode("{$services1->name}") ?>:
        <?= $services1->price ?>
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
</style>


</div>
<style type="text/css">
    .rw{
        font-size: 13pt;
    }
</style>
<style>
li{
 color: white;
}
h1{
 color: white;
}
.display-4{
    font-size: 35pt;
}
</style>
