<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

// $this->title = 'About salon';
// $this->params['breadcrumbs'][] = $this->title;
?>

<h1 class="display-4"><center><font color="white">Aabout the movie theater</h1></font>
    <p class="tab"></p>

<style type="text/css">
    .row{
        color: white;
        font-size: 13pt;
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
   
<div class="row">
            <div class="col-lg-4" align="center">
                <img src='https://i.pinimg.com/1200x/2f/a0/87/2fa087079e80942dd1395a3e14981d7d.jpg' width="250">
                <p class="lead" align="center">Odessa, Deribasovskaya str. 15<br>+380 (67) 234 30 90</p>
            </div>

            <div class="col-lg-4" align="center">
                <img src='https://i.pinimg.com/736x/e9/89/1a/e9891a2e17c95cee580f50573de1fec9.jpg' width="250">
                <p class="lead" align="center">Odessa, Primorskaya str. 7<br>+380 (67) 579 93 90</p>
            </div>

            <div class="col-lg-4" align="center">
                <img src='https://i.pinimg.com/736x/b8/ec/62/b8ec62e9f44210dae1ab6c1522ee5cd1.jpg' width="242">
                <p class="lead" align="center">Odessa, Sobornaya str. 43<br>+380 (67) 466 67 70</p>
            </div>
</div>

<div class="row"> 
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <h4>18 YEARS OF EXPERIENCE</h4>Since 2003, SPACE beauty salon has been successfully providing beauty and cosmetology services.
    </p>
    <p>    
        SPACE beauty salon is a salon with a history and many years of experience. The first salon was opened in 2003 for the fashionable and business people who want to look stylish, well-groomed and value their time. We use the best trends in hairdressing, nail care and cosmetology, while at the same time taking care of the quality and safety of our services and the professional development of our specialists. Our main goal is to create beauty, taking into account the individual needs of our clients.
    </p>
</div>
</div>
