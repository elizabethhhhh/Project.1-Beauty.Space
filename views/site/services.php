<?php 

/* @var $this yii\web\View */

use yii\helpers\Html;

// $this->title = 'Services';
// $this->params['breadcrumbs'][] = $this->title;
?>

<h1 class="display-4"><center><font color="white">Our beauty salons</h1></font>
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


<style>
.circle-image{
    display: inline-block;
    overflow: hidden;
    width: 33%;
    padding-bottom: 33%;
    height: 0;
    position: relative;
}
.circle-image img{
  width:85%;
  height:85%;
  position: absolute;
  border-radius: 50%;
  object-fit: cover;
}
</style>


<span class="circle-image">
 <img src="https://i.pinimg.com/originals/c2/9d/8c/c29d8ccf125c5e4e5fc5c452eaedeaa5.jpg">
</span>
<span class="circle-image">
 <img src="https://i.pinimg.com/1200x/b2/e3/c9/b2e3c91d3bfbe9d5b444bf5c4d5ed183.jpg">
</span>
<span class="circle-image">
 <img src="https://image.ceneostatic.pl/data/products/115791846/cb00278e-79f9-427b-b4de-e5db5d09605a_i-nozyczki-fryzjerskie-do-wlosow-profesjonalne-ostre.jpg">
</span>

<div class="row">
    <div class="col-lg-4">
        <p><a class="glow-button2" href="http://course.work3/services/index"><font color="white">Haircuts and styling &raquo;</a></p></font>
    </div>

    <div class="col-lg-4">
        <p><a class="glow-button2" href="http://course.work3/services1/index"><font color="white">Hair colouring &raquo;</a></p></font>
    </div>

    <div class="col-lg-4">
        <p><a class="glow-button2" href="http://course.work3/services2/index"><font color="white">Hair care &raquo;</a></p></font>
    </div>
</div>
<p class="tab"></p>

<span class="circle-image">
 <img src="https://i.pinimg.com/1200x/3a/a6/e2/3aa6e2dbb8c4982205034de2e307c19d.jpg">
</span>
<span class="circle-image">
 <img src="https://i.pinimg.com/originals/bf/04/96/bf04962f1be764b4e516f9c82f01eb39.jpg">
</span>
<span class="circle-image">
 <img src="https://i.pinimg.com/originals/4f/e8/31/4fe831a14a0b13b0651b6f0e1fdf6482.jpg">
</span>

<div class="row">
    <div class="col-lg-4">
        <p><a class="glow-button2" href="http://course.work3/services3/index"><font color="white">Manicure and pedicure &raquo;</a></p></font>
    </div>

    <div class="col-lg-4">
        <p><a class="glow-button2" href="http://course.work3/services4/index"><font color="white">Cosmetology, massage &raquo;</a></p></font>
    </div>

    <div class="col-lg-4">
        <p><a class="glow-button2" href="http://course.work3/services5/index"><font color="white">Makeup &raquo;</a></p></font>
    </div>
</div>

<style>
.glow-button2 {
  text-decoration: none;
  display: inline-block;
  padding: 10px 30px;
  margin: 10px 20px;
  border-radius: 10px;
  box-shadow: 0 0 10px 0 #34cf81 inset, 0 0 10px 4px #34cf81;
  font-family: 'Montserrat', sans-serif;
  font-weight: bold;
  color: white;
  transition: .15s ease-in-out;
}
.glow-button2:hover {
  box-shadow: 0 0 10px 0 #34cf81 inset, 0 0 10px 4px #34cf81;
  color: #34cf81;
}
</style>