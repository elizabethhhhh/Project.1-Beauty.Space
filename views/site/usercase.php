<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
$this->registerCss($css, ["type" => "text/css"], "site" );
?>
<h1 class="display-4"><font color="white">Application Form</h1></font>
    <p class="tab"></p>

<div class="rw">
<table class="table">
    <tr class="thead-dark">
        <th>Name</th>
        <th>Number</th>
        <th>Date</th>
        <th>Service</th>
    </tr>
<?php foreach ($usercases as $usercase): ?>
    <tr>
    <td><?= $usercase->name?></td>
    <td>    <?= $usercase->number ?></td>
    <td>   <?= $usercase->date ?></td>
    <td>    <?= $usercase->service ?></td>
    </tr>
<?php endforeach; ?>
</table>
</div>
<?= LinkPager::widget(['pagination' => $pagination]) ?>


<style type="text/css">
    .rw{
        color: white;
        font-size: 13pt;
    }
    td{
        color: white;
    }
</style>

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