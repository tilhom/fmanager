<?php

/* @var $this yii\web\View */

use common\models\Club;
use common\models\Position;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yii\helpers\BaseHtml;

$this->title = 'My Yii Application';
?>


<header> <!-- ***header -->
    <div class="container" style="text-align: center;">
    <div class="row">
        <div class="col-md-9 col-sm-9 col-xs-7"></div>
        <div class="col-md-1 col-sm-1 col-xs-2">
            <div class="dropdown">
            <button class="dropdown-toggle" type="button" data-toggle="dropdown" style="background-color: #3B0A5F; color: white;border: 0px !important; margin-top: -5px;">Uzbek</button>
  <ul class="dropdown-menu">
    <li><a href="#">Engish</a></li>
    <li><a href="#">Russian</a></li>
  </ul>
</div>
        </div>
        <div  class="col-md-1 col-sm-2 col-xs-2">
            <a href="#login" class="login">Kirish</a>
        </div>
    </div>
      
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <img src="image/icon1.png" style="width: 100px; margin-top: 70px;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12 paddingsiz">
        <h2 style="padding-top: 10px;" class="la">La Liga</h2>
        <h4 style="padding-top: 30px;" class="spain">SPAINISH FANTASTIC FOOTBAL CHEMPIONSHIP</h4>
        <p>2017/18-YILLAR UCHUN ISPANIYA FUTBOL CHEMPIONATI</p>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12"><br><br><br>
                <a type="button" class="reg" href="#login">Registratsiya!</a>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-xs-12 paddingsiz" style="padding-top: 40px;">
        <h3>Jamoangni yarat va g’olib bo’l!</h3>
        <br><br>
      </div>
      </div>
      </div>
    </div> <!-- //container -->
  </header> <!-- //header -->
<br><br>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="text-align: center;">
                    <h2><strong>O'yin Qoidalari</strong></h2><br><br>
                </div>
            </div>
            <div class="row" style="text-align: center;">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="border-right: 1px solid lightgrey;">
                    
                     <img class="img-responsive" src="image/1.png" alt="Jamoa Tanlash" style="margin-left: 30%">
                     <div class="panel-body">
                         <h3 style="color: red;">Jamoa Tanlash</h3>
                    <h4>15 kishidan iborat jamoani £100 mablag' bilan tanlang. Jamoangizdan 11ta o'yinchi asosiy tarkib uchun oling va jamoangizga kapitan tanlang va o'yinchilariz bilan har hafta bo'ladigan La Liga turnirida qatnashing. </h4>
                     </div>
                   
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4" style="border-right: 1px solid lightgrey;">
                   
                     <img class="img-responsive" src="image/2.png" alt="Ochko To'plash" style="margin-left: 30%">
                     <div class="panel-body">
                          <h3 style="color: red;">Ochko To'plash</h3>
                    <h4>O'yinchilar real vaqtdagi o'yinlariga qarab ochko yi'gadilar. (Misol: Gol urganligi, golga asistantlig qilganligi va boshqa harakatlari uchun) </h4>
                     </div>
                   
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    
                     <img class="img-responsive" src="image/3.png" alt="Yutuqlar" style="margin-left: 30%">
                     <div class="panel-body">
                         <h3 style="color: red;">Sovrinlar Yutib Oling</h3>
                    <h4>Sovrinli ligaga qo'shiling va o'zingizni jamoangizni tuzib yutuqlarga ega bo'ling !!!</h4>
                     </div>
                    
                </div>
            </div>          
        </div>
    </div>
</div>
<br><br><br>

<div class="container" style="background-image: url('image/bg.jpg'); width: 100%; margin-bottom: -20px;" id="login">
    <div class="row"><br><br><br>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="row">
                <div class="col-md-2 col-lg-2"></div>
                <div class="col-xs-11 col-sm-11 col-md-3 col-lg-3">
                <h3>Krish</h3>
                <div class="form-group">
                <?php $form = ActiveForm::begin(['id' => 'form-signup',
 'options' => ['class' => 'form-group'],
                    'fieldConfig' => [
                        'template' => "{label}\n<div class=\"form-group\">{input}</div>\n<div class=\"col-sm-offset-3 col-lg-9\">{error}\n{hint}</div>",
                        //'labelOptions' => ['class' => 'col-lg-3 control-label']
                    ],
                    'enableAjaxValidation'   => true,
                    'enableClientValidation' => false,
                    'validateOnBlur'         => false,
                ]); ?>

              <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email manzilingizni kriting','autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Parolni kriting']) ?>
                <?= $form->field($model, 'checkbox')->checkbox([], true) ?>
</div>
                   
                        <?= Html::submitButton('Kirish', ['class' => 'btn btn-default', 'name' => 'singup-button']) ?>
                   
                </div>
            <?php ActiveForm::end(); ?>
            
                <div class="col-xs-10 col-sm-10 col-md-1 col-lg-1">
                    <h2 class="yoki">Yoki</h2>
                </div>
                <div class="col-xs-11 col-sm-11 col-md-4 col-lg-4">
                <h3>Ro'yhatdan O'tish</h3>
                <?php $form = ActiveForm::begin(['id' => 'form-reg',
 'options' => ['class' => 'form-group'],
                    'fieldConfig' => [
                        'template' => "{label}\n<div class=\"form-group\">{input}</div>\n<div class=\"col-sm-offset-3 col-lg-9\">{error}\n{hint}</div>",
                        //'labelOptions' => ['class' => 'col-lg-3 control-label']
                    ],
                    'enableAjaxValidation'   => true,
                    'enableClientValidation' => false,
                    'validateOnBlur'         => false,
                ]); ?>

              <?= $form->field($model, 'username')->textInput(['placeholder' => 'Email manzilingizni kriting','autofocus' => true]) ?>

                <?= $form->field($model, 'email')->textInput(['placeholder' => 'Email manzilingizni kriting']) ?>
                <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Parolni kriting'], true) ?>

                   
                        <?= Html::submitButton('Ok', ['class' => 'btn btn-default', 'name' => 'reg-button']) ?>
                   
                </div></div>
            <?php ActiveForm::end(); ?>
                    
                </div>
                <div class="col-xs-1 col-sm-1 col-md-2 col-lg-2"></div>
            </div>
        </div>
    </div><br><br><br>
</div>