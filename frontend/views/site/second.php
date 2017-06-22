<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use common\models\Club;
use common\models\Match;
use common\models\Position;
use yii\grid\GridView;
use yii\data\Pagination;

$this->title = 'Profile';
$this->params['breadcrumbs'][] = $this->title;
?>
 <header> <!-- ***header -->
    <div class="container">
      <div class="col-md-3 col-sm-3 col-xs-12 paddingsiz">
        <h2>FIFA</h2>
        <h4>Manager</h4>
        <p>Jamoangni yarat va g’olib bo’l!</p>
        <h5>Balans:200 <span><img src="image/tanga.png" alt=""></span></h5>
      </div>
      <div class="col-md-7 col-sm-7 hidden-xs  paddingsiz">
        <img src="image/komanda.png" alt="">
      </div>
      <div class="col-md-2 col-sm-2 col-xs-12 col-xs-12  paddingsiz">
        <ul class="list-group list-unstyled">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Uzbek <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Rus</a></li>
              <li><a href="#">Eng</a></li>
            </ul>
          </li>
          <li class="list-group-item kirish"><a href="#">Kirish</a></li>
          <li class="list-group-item"><a href="#">O'yin qoidalari</a></li>
        </ul>
      </div>
      <div class="visible-xs col-xs-12  paddingsiz">
        <img src="image/komanda.png" alt="">
      </div>
    </div> <!-- //container -->
  </header> <!-- //header -->
  <div class="menyu"> <!-- ***menyu -->
    <div class="container"> <!-- ***container -->
      <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <center>
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
         </center>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
              <li><a href="#"><img src="image/koptok.png" alt=""> ochkolar</a> </li>
               <li> <a href="#"><img src="image/koptok.png" alt=""> mening jamoam</a></li>
              <li><a href="#"><img src="image/koptok.png" alt=""> transferlar</a></li>
              <li><a href="#"><img src="image/koptok.png" alt=""> scout</a></li>
              <li><a href="#"><img src="image/koptok.png" alt=""> statistika</a></li>
              <li><a href="#"><img src="image/koptok.png" alt=""> ligalar</a></li>
              <li><a href="#"><img src="image/koptok.png" alt=""> chiqish</a></li>
          </div><!-- /.navbar-collapse -->
        </div>
      </nav>
    </div> <!-- //container -->
  </div> <!-- //menyu -->
  
  <div class="dedlayn"> <!-- ***dedlayn -->
    <div class="container">
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="col-md-6 col-sm-6 col-xs-12 paddingsiz">
          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-4 paddingsiz tur">
               Tur <p>25</p>
            </div>
            <div class="col-md-8 col-sm-8 col-xs-8 paddingsiz dedline">
               DEDLAYN
               <p>
                 Keyingi tur uchun  o’zgartirishlar <strong>09 mart 
                 00:00 </strong> gacha amalga  oshiriladi
               </p>
            </div>
         </div>
         <div class="row"> 
          <div class="col-md-4 col-sm-4 col-xs-4 paddingsiz tur sardor">
             Sardor:
          </div>
          <div class="col-md-8 col-sm-8 col-xs-8 paddingsiz dedline">
            <select class="form-control" style="float: left;">
                <option value="" class="komandalar">Cristan Ronaldo</option>
                <option value="" class="komandalar">Cristan Ronaldo</option>
                <option value="" class="komandalar">Cristan Ronaldo</option>
                <option value="" class="komandalar">Cristan Ronaldo</option>
                <option value="" class="komandalar">Cristan Ronaldo</option>
            </select>
          </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 news">
         FUDBOLCHILAR HAQIDA YANGILIKLAR  
         <p><span class="glyphicon glyphicon-info-sign"></span>
          Cristiano Ronaldo (jarohat) </p>
         <p><span class="glyphicon glyphicon-info-sign"></span>  Cristiano Ronaldo (jarohat) </p>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 news ">
          <div class="col-md-6 col-sm-6 col-xs-6 tugmalar tugmalar2">
              <button class="btn">Super Capitan</button>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6 tugmalar tugmalar2">
              <button class="btn">Vitsa Capitan</button>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12 news statuss">
        <p class="status">JAMOA STATUSI</p>
        <div class="col-md-4 col-sm-4 col-xs-4">
          Jami ochkolar
          <h3>447</h3>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4">
          Narxi
          <h3 class="secondd">€96.4</43>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-4">
          Sizning byudjet
          <h3>€3.8</h3>
        </div>
      </div>
    </div>
  </div> <!-- //dedlayn -->

  <div class="maydon">
    <div class="container">
      <div class="col-md-7 col-sm-12 col-xs-12"> <!-- ***stadion qismi boshlandi -->
        <div class="jamoa">
          <div class="tugmalar tugmalar2 col-md-12 col-sm-12 col-xs-12  paddingsiz"> <!-- ***tugmalar -->
            <div class="col-md-6 col-sm-6 col-xs-6  paddingsiz">
              <button class="btn">maydon</button>
            </div>
            <div class="col-md-6 col-sm-6  col-xs-6 paddingsiz">
              <button class="btn">jadval</button>
            </div>
          </div> <!-- //tugmalar -->

          <div class="stadion col-md-12 col-sm-12  col-xs-12 paddingsiz"> <!-- ***stadion qismi boshlandi -->
            <div class="yashil qator">
              <div class="darvoza">
                <div class="col-md-2 col-sm-2col-md-2 center-block">
                  <div class="fudbolchi"> <!-- ***fudbolchi -->
                    <div class="malumot"> <!-- ***fudbolchi holati -->
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                       <a href="#"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div> <!-- //malumot -->
                    <img src="image/real.png" alt=""> <!-- ***fudbolchi formasi -->
                    <div class="about"> <!-- ***fudbolchi ismi va raqami -->
                      <div class="ism">Ronaldo</div>
                      <div class="raqam">7</div>
                    </div> <!-- //about -->
                  </div> <!-- //fudbolchi -->
                </div>
                <div class="col-md-2 col-sm-2col-md-2 center-block">
                  <div class="fudbolchi">
                    <div class="malumot">
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                       <a href="#"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                    <img src="image/real.png" alt="">
                    <div class="about">
                      <div class="ism">Ronaldo</div>
                      <div class="raqam">7</div>
                    </div>
                  </div>
                </div>
              </div> <!-- //darvoza -->
              <div class="uyinchi">
                <div class="col-md-2  col-sm-2col-md-2 center-block">
                  <div class="fudbolchi">
                     <div class="malumot">
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                       <a href="#"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                    <img src="image/real.png" alt="">
                    <div class="about">
                      <div class="ism">Ronaldo</div>
                      <div class="raqam">7</div>
                    </div>
                  </div>
                </div>
                <div class="col-md-2 col-sm-2col-md-2 center-block">
                    <a href="#"><img src="image/plus.png" alt=""></a>
                </div>
                 <div class="col-md-2 col-sm-2col-md-2 center-block">
                  <div class="fudbolchi">
                    <div class="malumot">
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                       <a href="#"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                    <img src="image/real.png" alt="">
                    <div class="about">
                      <div class="ism">Ronaldo</div>
                      <div class="raqam">7</div>
                    </div>
                  </div>
                </div> <div class="col-md-2 col-sm-2col-md-2 center-block">
                  <div class="fudbolchi">
                    <div class="malumot">
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                       <a href="#"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                    <img src="image/real.png" alt="">
                    <div class="about">
                      <div class="ism">Ronaldo</div>
                      <div class="raqam">7</div>
                    </div>
                  </div>
                </div>
                 <div class="col-md-2 col-sm-2col-md-2 center-block">
                  <div class="fudbolchi">
                    <div class="malumot">
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                       <a href="#"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                    <img src="image/real.png" alt="">
                    <div class="about">
                      <div class="ism">Ronaldo</div>
                      <div class="raqam">7</div>
                    </div>
                  </div>
                </div>
              </div> <!-- //uyinchi -->

              <div class="uyinchi">
                <div class="col-md-2 col-sm-2col-md-2 center-block">
                  <div class="fudbolchi">
                    <div class="malumot">
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                       <a href="#"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                    <img src="image/real.png" alt="">
                    <div class="about">
                      <div class="ism">Ronaldo</div>
                      <div class="raqam">7</div>
                    </div>
                  </div>
                </div>
                 <div class="col-md-2 col-sm-2col-md-2 center-block">
                  <div class="fudbolchi">
                    <div class="malumot">
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                       <a href="#"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                    <img src="image/real.png" alt="">
                    <div class="about">
                      <div class="ism">Ronaldo</div>
                      <div class="raqam">7</div>
                    </div>
                  </div>
                </div> <div class="col-md-2 col-sm-2col-md-2 center-block">
                  <div class="fudbolchi">
                    <div class="malumot">
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                       <a href="#"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                    <img src="image/real.png" alt="">
                    <div class="about">
                      <div class="ism">Ronaldo</div>
                      <div class="raqam">7</div>
                    </div>
                  </div>
                </div>
                 <div class="col-md-2 col-sm-2col-md-2 center-block">
                  <div class="fudbolchi">
                    <div class="malumot">
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                       <a href="#"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                    <img src="image/real.png" alt="">
                    <div class="about">
                      <div class="ism">Ronaldo</div>
                      <div class="raqam">7</div>
                    </div>
                  </div>
                </div>
                <div class="col-md-2 col-sm-2col-md-2 center-block">
                  <div class="fudbolchi">
                    <div class="malumot">
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                       <a href="#"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                    <img src="image/real.png" alt="">
                    <div class="about">
                      <div class="ism">Ronaldo</div>
                      <div class="raqam">7</div>
                    </div>
                  </div>
                </div>
              </div> <!-- //uyinchi -->

              <div class="uyinchi">
                <div class="col-md-2 col-sm-2col-md-2 center-block">
                  <div class="fudbolchi">
                    <div class="malumot">
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                       <a href="#"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                    <img src="image/real.png" alt="">
                    <div class="about">
                      <div class="ism">Ronaldo</div>
                      <div class="raqam">7</div>
                    </div>
                  </div>
                </div>
                 <div class="col-md-2 col-sm-2col-md-2 center-block">
                  <div class="fudbolchi">
                    <div class="malumot">
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                       <a href="#"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                    <img src="image/real.png" alt="">
                    <div class="about">
                      <div class="ism">Ronaldo</div>
                      <div class="raqam">7</div>
                    </div>
                  </div>
                </div> <div class="col-md-2 col-sm-2col-md-2 center-block">
                 <div class="fudbolchi">
                    <div class="malumot">
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                       <a href="#"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                    <img src="image/real.png" alt="">
                    <div class="about">
                      <div class="ism">Ronaldo</div>
                      <div class="raqam">7</div>
                    </div>
                  </div>
                </div>
              </div> <!-- //uyinchi -->
            </div> <!-- //yashil -->
          </div> <!-- //stadion -->

          <div class=" col-md-12 col-sm-12 col-xs-12 paddingsiz zahira"> 
              <div class="col-md-3 col-sm-3 col-xs-3 text-center first">
                <div class="fudbolchi"> <!-- ***fudbolchi -->
                    <div class="malumot"> <!-- ***fudbolchi holati -->
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                       <a href="#"><span><img src="image/top-bottom.png" alt="" class="bottom-top"></span></a>
                    </div> <!-- //malumot -->
                    <a href="#">
                      <img src="image/real.png" alt=""> <!-- ***fudbolchi formasi -->
                      <div class="about"> <!-- ***fudbolchi ismi va raqami -->
                        <div class="ism">Ronaldo</div>
                        <div class="raqam">7</div>
                      </div> <!-- //about -->
                    </a>
                  </div> <!-- //fudbolchi -->
                  <p>GK</p>
              </div>
              <div class="col-md-3  col-sm-3 col-xs-3 text-center">
                <div class="fudbolchi"> <!-- ***fudbolchi -->
                    <div class="malumot"> <!-- ***fudbolchi holati -->
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                       <a href="#"><span><img src="image/top-bottom.png" alt="" class="bottom-top"></span></a>
                    </div> <!-- //malumot -->
                    <a href="#">
                      <img src="image/real.png" alt=""> <!-- ***fudbolchi formasi -->
                      <div class="about"> <!-- ***fudbolchi ismi va raqami -->
                        <div class="ism">Ronaldo</div>
                        <div class="raqam">7</div>
                      </div> <!-- //about -->
                    </a>
                  </div> <!-- //fudbolchi -->
                  <p>1</p>
              </div>
              <div class="col-md-3  col-sm-3 col-xs-3 text-center">
                <div class="fudbolchi"> <!-- ***fudbolchi -->
                    <div class="malumot"> <!-- ***fudbolchi holati -->
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                       <a href="#"><span><img src="image/top-bottom.png" alt="" class="bottom-top"></span></a>
                    </div> <!-- //malumot -->
                    <a href="#">
                      <img src="image/real.png" alt=""> <!-- ***fudbolchi formasi -->
                      <div class="about"> <!-- ***fudbolchi ismi va raqami -->
                        <div class="ism">Ronaldo</div>
                        <div class="raqam">7</div>
                      </div> <!-- //about -->
                    </a>
                  </div> <!-- //fudbolchi -->
                  <p>2</p>
              </div>
              <div class="col-md-3  col-sm-3 col-xs-3 text-center">
                <div class="fudbolchi"> <!-- ***fudbolchi -->
                    <div class="malumot"> <!-- ***fudbolchi holati -->
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                       <a href="#"><span><img src="image/top-bottom.png" alt="" class="bottom-top"></span></a>
                    </div> <!-- //malumot -->
                    <a href="#">
                      <img src="image/real.png" alt=""> <!-- ***fudbolchi formasi -->
                      <div class="about"> <!-- ***fudbolchi ismi va raqami -->
                        <div class="ism">Ronaldo</div>
                        <div class="raqam">7</div>
                      </div> <!-- //about -->
                    </a>
                  </div> <!-- //fudbolchi -->
                  <p>3</p>
              </div>
          </div> <!-- //zahira -->

          <!-- HISOB QISMI BOSHLANDI -->
          <div class=" col-md-12 col-sm-12 col-xs-12 paddingsiz hisob">
          <div class="ruyhat">
          <div class="panel panel1">
              <div class="panel-heading">
                <div class="col-md-4 col-sm-4 col-xs-5 paddingsiz">
                  <button class="btn">
                    <span class="glyphicon glyphicon-arrow-left"></span>
                    Avvalgi
                  </button>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-2 paddingsiz text-center">
                  Juma 21 May
                </div>
                <div class="col-md-4 col-sm-4 col-xs-5 paddingsiz">
                  <button class="btn">
                    Keyingi 
                     <span class="glyphicon glyphicon-arrow-right"></span>
                  </button>
                </div>
               </div> 
                <div class="panel-body">
                  <div class="musobaqa">  
                    <div class="komanda">
                      <div class="mezbon col-md-5 col-sm-5 col-xs-5">
                        Everton <span class="kiyim ">
                        <img src="image/logo.png" alt="">
                        </span>
                      </div>
                      <div class="xisob col-md-2 col-sm-2 col-xs-2">
                        21:45
                      </div>
                      <div class="mehmon col-md-5 col-sm-5 col-xs-5">
                        <span class="kiyim ">
                        <img src="image/logo2.png" alt="">
                        </span> Watford
                      </div>
                    </div>
                   </div> 
                   <div class="musobaqa">  
                    <div class="komanda">
                      <div class="mezbon col-md-5 col-sm-5 col-xs-5">
     <?= GridView::widget([
        'dataProvider' => $dataProvider2,
        //'filterModel' => $searchModel2,
        'summary'=>false,
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

            ['attribute'=>'id',
            	'label'=>false,
            ],
           // 'matchweek',
            ['attribute'=>'team1_id',
            'label'=>false,
            'value'=>'team1.club',
            ],
            ['attribute'=>'team1_id',
            	'label'=>false,
            	//'value'=>'team1.img'==$url,
            	'value' => function($data){
                //return Html::img(Url::toRoute($data['img']),[
                
                return Html::img(Yii::getAlias('@web').'/image/club/'.$data['team1']['img'] ,
                ['width' => '30px']); },
            	'format'=>'raw',
            ],
            ['attribute'=>'data_time',
            	'label'=>false,
            ],
            ['attribute'=>'team2_id',
            	'label'=>false,
            	//'value'=>'team1.img'==$url,
            	'value' => function($data){
                return Html::img(Yii::getAlias('@web').'/image/club/'. $data['team2']['img'],
                ['width' => '30px']); },
            	'format'=>'raw',
            ],
            ['attribute'=>'team2_id',
                'value'=>'team2.club',
                'label'=>false,
                'filter'=>Club::find()->select(['club','id'])->indexBy('id')->column()
            ],
            // 'team1_score',
            // 'team2_score',

            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>




                  </div>  
                    </div>
                   </div>
                  </div>
               </div> <!-- //panel1 -->
             </div>     
              
          </div>
        </div> <!-- //hisob -->
      </div> <!-- //stadion -->
       <div class="col-md-4 col-sm-12 col-xs-12 col-md-offset-1"><!--  ***o'ng taraf qismi  boshlandi -->
          <div class="narxlar narxlar2">
          <table class="table bordered">
            <thead>
                 <tr class="sarlavha">
                    <th colspan="2" class="one"><a href="#">Fishkalar va qo'shimchalar</a></th>
                </tr>
            </thead>
            <tbody>
              <!--FISHKALAR VA QO'SHIMCHALAR -->
              <tr>
                <td class="text-left"><a href="">Super-kapitan</a></td>
                <td class="text-center">o'chirilgan</td>
              </tr>
              <tr>
                <td class="text-left"><a href="">Vitsa-kapitan</a></td>
                <td class="text-center">o'chirilgan</td>
              </tr>
              <tr>
                <td class="text-left"><a href="">Byudjetni ko'paytirish</a></td>
                <td class="text-center">o'chirilgan</td>
              </tr>
             <tr>
                <td class="text-left"><a href="">Klub limiti</a></td>
                <td class="text-center">o'chirilgan</td>
              </tr>
          </tbody>
        </table>
        <table class="table bordered">
      <!--SHAHSIY LIGALAR -->
          <thead>
               <tr class="sarlavha">
                  <th colspan="2" class="one"><a href="#">Shahsiy ligalar</a></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-left uzliga">
                    <a href="#"><span><img src="image/left.png"></span></a>
                    <a href="#"><span><img src="image/right.png"></span></a> 1
                </td>
                <td class="text-center">Uzliga</td>
              </tr>
          </tbody>
        </table>
        <table class="table bordered">
      <!--GLOBAL LIGALAR -->
          <thead>
               <tr class="sarlavha">
                  <th colspan="2" class="one"><a href="#">Global ligalar</a></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-left">
                     <span class="pastga"><img src="image/bottom.png" alt=""></span>253
                </td>
                <td class="text-center">Overall</td>
              </tr>
              <tr>
                <td class="text-left">
                    <span class="tepaga"><img src="image/top.png" alt=""></span>123
                </td>
                <td class="text-center">Uzbekistan</td>
              </tr>
          </tbody>
        </table> <!-- //table -->

          <!-- NATIJALAR VA MUSOBAQA JADVALI QATORI BOSHLANDI -->
      <div class="scroli">    
       <?= GridView::widget([
       //	$data='/frontend/web/image/club/',
        'dataProvider' => $dataProvider,
        'summary' => false,
        'pager'=>['maxButtonCount'=>5],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            ['attribute'=>'rank',
                'label'=>'O`rin',
                'enableSorting'=>false,

            ],
           ['attribute'=>'img',
                'label'=>'',
                'value' => function($data){
                //return Html::img(Url::toRoute($data['img']),[
                
                return Html::img(Yii::getAlias('@web').'/image/club/'. $data['img'],
                ['width' => '30px']);

                //$url="http://fmanager/frontend/web/image/club/".$data['img'];
                //return Html::img($url, ['alt'=>'yii']);	
                    //'alt'=>'club.name',
                    //'style' => 'width:15px;'
                //]);
            },
            	'format'=>'raw',
                'enableSorting'=>false,
            ],
            ['attribute'=>'club',
                'label'=>'Klub',
                'enableSorting'=>false,
            ],
            ['attribute'=>'played',
             'label'=>'O`yinlar',
              'enableSorting'=>false, 
            ],
            ['attribute'=>'points',
                'label'=>'Ochkolar',
                'enableSorting'=>false,
            ],
            // 'selected',
            
            //['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
        <table class="table bordered">
        <!--GLOBAL LIGALAR -->
            <thead>
                 <tr class="sarlavha">
                    <th class="urin">O'rin</th>
                    <th class="klub">Klub</th>
                    <th class="uyinlar">O'yinlar</th>
                    <th class="ball">Ochkolar</th>
                  </tr>
              </thead>
              <tbody>
                 <tr>
                    <td class="urin">1</td>
                    <td class="klub">
                      <span class="kiyim">
                      <img src="image/logo.png" alt="">
                      </span>&nbsp;Real Madrid</td><td class="uyinlar">35</td>
                    <td class="ball">84</td>
                  </tr>
                 
            </tbody>
        </table> <!-- //table -->
      </div>
      <!-- ===NATIJALAR VA MUSOBAQA JADVALI QATORI TUGADI===  -->

       </div> <!-- //o'ng taraf qismi tugadi -->

      
    </div> <!-- //container -->
  </div> <!--  //maydon -->
 