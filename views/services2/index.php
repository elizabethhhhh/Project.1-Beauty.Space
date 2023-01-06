<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<div class="lead">
<div class="rw">
<h1 class="display-4"><center>HAIR CARE</h1>
<p class="tab"></p>
<p>The specialists of our salon will offer you Rituals for the health of your hair, and comprehensive programs for scalp treatment against hair loss and for hair growth.</p>
<p class="tab"></p>
<p align="center">SMARTBOND BONDING PROVIDES PROTECTION AND RESTORATION DURING <br>COLORING/WHITENING AND PRESERVES THE QUALITY OF THE HAIR. ✔<br> THE EXCLUSIVE KERASTASE FUSIO-DOSE RITUAL TREATMENT - AN INSTANT HAIR <br>TRANSFORMATION THANKS TO AN INDIVIDUALLY TAILORED MOLECULAR COCKTAIL. ✔<br>ORISING-A NEW APPROACH TO SOLVING VARIOUS HAIR AND SCALP PROBLEMS <br>(HAIR LOSS, DANDRUFF, STIMULATION OF HAIR GROWTH). ✔</p>
<p class="tab"></p>
<h1 class="display-4" align="center">Price</h1> 
<p align="center">COMPREHENSIVE TREATMENT OF HAIR AND SCALP</p>

<ul>
<?php foreach ($service2 as $services2): ?>
    <li>
        <?= Html::encode("{$services2->name}") ?>:
        <?= $services2->price ?>
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

