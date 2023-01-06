<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<div class="lead">
<div class="rw">
<h1 class="display-4"><center>COSMETOLOGY AND MASSAGE</h1>
<p class="tab"></p>
<p>Our beauticians will choose for you a complex care for your face, using different types of massage, as well as a unique machine without injection oxygen mesotherapy OXY JET. We also offer individual programs for body contouring.</p>
<p class="tab"></p>
<p align="center">BIOLOGIQUE RECHERCHE, ATACHE, DANNE, MEDIK 8. ✔<br> APPARATUS METHODS OF FACIAL AND BODY CARE - MICRODERMABRASION, MICROCURRENTS, INDUCTION-FREE MESOTHERAPY, VACUUM-ROLLER MASSAGE. ✔<br>BODY MASSAGE. ✔</p>
<p class="tab"></p>
<h1 class="display-4" align="center">Price</h1> 
<p align="center">COSMETOLOGY</p>

<ul>
<?php foreach ($service4 as $services4): ?>
    <li>
        <?= Html::encode("{$services4->name}") ?>:
        <?= $services4->price ?>
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

