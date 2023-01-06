<?php
use yii\bootstrap4\Html;
use \yii\widgets\ActiveForm;


// $this->title = 'Application Form';
?>
<h1 class="display-4"><font color="white">Application Form</h1></font>
    <p class="tab"></p>
    <p><font color="white">
            Hello, we are very happy that you have chosen our salon.<br>
            You can make an appointment for the service right now by writing the time and type of service. Or you can leave your number and you will be contacted by our administrator for further appointment.<br>
            With love Beauty Space🪐
        </p></font>
<h1><?= Html::encode($this->title) ?></h1>
<?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

<div class="row">
    <div class="rw">
   <div class="col-lg-5">
       <div class="panel panel-default">
           <div class="panel-heading">Message Sent</div>
           <div class="panel-body">
               <p><b>Name:</b> <?=$model->name?> </p>
               <p><b>Number:</b> <?=$model->number?> </p>
               <p><b>Date:</b> <?=$model->date?> </p>
               <p><b>Service:</b> <?=$model->service?> </p>
           </div>
       </div>
       <div class="alert alert-success">
           Thank you for contacting us. We will respond to you as soon as possible.
       </div>
   </div>
</div>
</div>
   <?php else: ?>
    <div class="rw">
<div class="row">
           <div class="col-lg-5">
               <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                   <?= $form->field($model, 'name') ?>
                   <?= $form->field($model, 'number') ?>
                   <?= $form->field($model, 'date') ?>
                   <?= $form->field($model, 'service')->textArea(['rows' => 6]) ?>
                  <div class="form-group">
                       <div>
                   <button class="btn btn-success" type="submit">Submit</button>
                       </div>
                   </div>
               <?php ActiveForm::end(); ?>
           </div>
       </div>
       </div>

<?php endif; ?>

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



<!-- <input type="date"> -->
              