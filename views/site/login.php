<?php
use yii\widgets\ActiveForm;
use yii\bootstrap4\Html;

?>

<h1 class="display-4"><font color="white">Login</h1></font>
    <p class="tab"></p>

<div class="row">
<div class="rw">
<?php $form = ActiveForm::begin();?>

<?= $form->field($login_model,'email')->textInput()?>

<?= $form->field($login_model,'password')->passwordInput()?>

<div>
<i>If you dont have an account, <a href="http://course.work3/site/signup" title = "signup">sign up!</a></i>
</div>
</div>
</div>

<div>
    <button class="btn btn-success" type="submit">Login</button>
</div>

<?php $form = ActiveForm::end();?>

<style type="text/css">
    .rw{
        color: white;
        font-size: 13pt;
    }
    .tab { margin: 40px; }
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

<style>
button {
  text-decoration: none;
  display: inline-block;
  padding: 5px 10px;
  margin: 10px 10px;
  border-radius: 10px;
  box-shadow: 0 0 40px 40px #228c57 inset, 0 0 0 0 #228c57;
  font-family: 'Montserrat', sans-serif;
  letter-spacing: 0px;
  color: white;
  transition: .15s ease-in-out;
}
button:hover {
  box-shadow: 0 0 10px 0 #34cf81 inset, 0 0 10px 4px #34cf81;
  color: #34cf81;
}
a{
    color: #34cf81;
}
</style>

<style type="text/css">
    .rw{
        color: white;
        font-size: 13pt;
    }
</style>