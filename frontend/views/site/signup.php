<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use common\models\Player;
use common\models\Position;
use yii\grid\GridView;
use yii\data\Pagination;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">

  <header> <!-- ***header -->
    <div class="container">
      <div class="col-md-3 col-sm-3 col-xs-12 paddingsiz">
        <h2>FIFA</h2>
        <h4>Manager</h4>
        <p>Jamoangni yarat va g’olib bo’l!</p>
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

  <div class="maydon">
    <div class="container">
      <div class="col-md-7 col-sm-12 col-xs-12"> <!-- ***stadion qismi boshlandi -->
        <div class="jamoa">
          <p class="text-left">Jamoa tuzish</p>
          <div class="jadval col-md-12 col-sm-12 col-xs-12"> <!-- ***jadval -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <h6>DIQQAT</h6>
              <h5>Siz bir klubdan <br class="hidden-xs"> 3 nafar futbolchi <br class="hidden-xs"> tanlay olasiz.</h5>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <h6>TANLANGAN</h6>
              <h1>{{num}}/15</h1>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
              <h6>SIZNING BYUDJET</h6>
              <h1>£{{bank.toFixed(2)}}</h1>
            </div>
          </div> <!-- //jadval -->

          <div class="tugmalar col-md-12 col-sm-12 col-xs-12  paddingsiz"> <!-- ***tugmalar -->
            <div class="col-md-4 col-sm-6 col-xs-12  paddingsiz">
              <button ng-click="generate()" class="btn">avto-tanlov</button>
            </div>
            <div class="col-md-4 hidden-sm hidden-xs"></div>
            <div class="col-md-4 col-sm-6   col-xs-12 paddingsiz">
              <button ng-click="removeall()" class="btn">tashlab yuborish</button>
            </div>
          </div> <!-- //tugmalar -->

          <div class="stadion col-md-12 col-sm-12  col-xs-12 paddingsiz"> <!-- ***stadion qismi boshlandi -->
            <div class="yashil qator">
              <div class="darvoza">
                <div class="col-md-2 col-sm-2 col-xs-2 center-block">
                  <div class="fudbolchi"> <!-- ***fudbolchi -->
                    <div class="malumot"> <!-- ***fudbolchi holati -->
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                       <a href="" data-ng-click="removeplayer(0)"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div> <!-- //malumot -->
                    <img src="{{team[0].shirt}}" alt=""> <!-- ***fudbolchi formasi -->
                    <div class="about"> <!-- ***fudbolchi ismi va raqami -->
                      <div class="ism">{{team[0].name}}</div>
                      <div class="raqam">{{team[0].price}}</div>
                    </div> <!-- //about -->
                  </div> <!-- //fudbolchi -->
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2 center-block">
                  <div class="fudbolchi">
                    <div class="malumot">
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                       <a href="" data-ng-click="removeplayer(1)"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                    <img src="{{team[1].shirt}}" alt="">
                    <div class="about">
                      <div class="ism">{{team[1].name}}</div>
                      <div class="raqam">{{team[1].price}}</div>
                    </div>
                  </div>
                </div>
              </div> <!-- //darvoza -->
              <div class="uyinchi">
                <div class="col-md-2  col-sm-2 col-xs-2 center-block">
                  <div class="fudbolchi">
                     <div class="malumot">
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                       <a href="" data-ng-click="removeplayer(2)"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                      <img src="{{team[2].shirt}}" alt="">
                      <div class="about">
                          <div class="ism">{{team[2].name}}</div>
                          <div class="raqam">{{team[2].price}}</div>
                    </div>
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2 center-block">
                    <div class="fudbolchi">
                        <div class="malumot">
                            <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                            <a href="" data-ng-click="removeplayer(3)"><span class="glyphicon glyphicon-remove-sign"></span></a>
                        </div>
                        <img src="{{team[3].shirt}}" alt="">
                        <div class="about">
                            <div class="ism">{{team[3].name}}</div>
                            <div class="raqam">{{team[3].price}}</div>
                        </div>
                    </div>
                </div>
                 <div class="col-md-2 col-sm-2 col-xs-2 center-block">
                  <div class="fudbolchi">
                    <div class="malumot">
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                        <a href="" data-ng-click="removeplayer(4)"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                      <img src="{{team[4].shirt}}" alt="">
                      <div class="about">
                          <div class="ism">{{team[4].name}}</div>
                          <div class="raqam">{{team[4].price}}</div>
                    </div>
                  </div>
                </div> <div class="col-md-2 col-sm-2 col-xs-2 center-block">
                  <div class="fudbolchi">
                    <div class="malumot">
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                        <a href="" data-ng-click="removeplayer(5)"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                      <img src="{{team[5].shirt}}" alt="">
                      <div class="about">
                          <div class="ism">{{team[5].name}}</div>
                          <div class="raqam">{{team[5].price}}</div>
                    </div>
                  </div>
                </div>
                 <div class="col-md-2 col-sm-2 col-xs-2 center-block">
                  <div class="fudbolchi">
                    <div class="malumot">
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                        <a href="" data-ng-click="removeplayer(6)"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                      <img src="{{team[6].shirt}}" alt="">
                      <div class="about">
                          <div class="ism">{{team[6].name}}</div>
                          <div class="raqam">{{team[6].price}}</div>
                    </div>
                  </div>
                </div>
              </div> <!-- //uyinchi -->

              <div class="uyinchi">
                <div class="col-md-2 col-sm-2 col-xs-2 center-block">
                  <div class="fudbolchi">
                    <div class="malumot">
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                        <a href="" data-ng-click="removeplayer(7)"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                      <img src="{{team[7].shirt}}" alt="">
                      <div class="about">
                          <div class="ism">{{team[7].name}}</div>
                          <div class="raqam">{{team[7].price}}</div>
                    </div>
                  </div>
                </div>
                 <div class="col-md-2 col-sm-2 col-xs-2 center-block">
                  <div class="fudbolchi">
                    <div class="malumot">
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                        <a href="" data-ng-click="removeplayer(8)"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                      <img src="{{team[8].shirt}}" alt="">
                      <div class="about">
                          <div class="ism">{{team[8].name}}</div>
                          <div class="raqam">{{team[8].price}}</div>
                    </div>
                  </div>
                </div> <div class="col-md-2 col-sm-2 col-xs-2 center-block">
                  <div class="fudbolchi">
                    <div class="malumot">
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                        <a href="" data-ng-click="removeplayer(9)"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                      <img src="{{team[9].shirt}}" alt="">
                      <div class="about">
                          <div class="ism">{{team[9].name}}</div>
                          <div class="raqam">{{team[9].price}}</div>
                    </div>
                  </div>
                </div>
                 <div class="col-md-2 col-sm-2 col-xs-2 center-block">
                  <div class="fudbolchi">
                    <div class="malumot">
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                        <a href="" data-ng-click="removeplayer(10)"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                      <img src="{{team[10].shirt}}" alt="">
                      <div class="about">
                          <div class="ism">{{team[10].name}}</div>
                          <div class="raqam">{{team[10].price}}</div>
                    </div>
                  </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-2 center-block">
                  <div class="fudbolchi">
                    <div class="malumot">
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                        <a href="" data-ng-click="removeplayer(11)"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                      <img src="{{team[11].shirt}}" alt="">
                      <div class="about">
                          <div class="ism">{{team[11].name}}</div>
                          <div class="raqam">{{team[11].price}}</div>
                    </div>
                  </div>
                </div>
              </div> <!-- //uyinchi -->

              <div class="uyinchi">
                <div class="col-md-2 col-sm-2 col-xs-2 center-block">
                  <div class="fudbolchi">
                    <div class="malumot">
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                        <a href="" data-ng-click="removeplayer(12)"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                      <img src="{{team[12].shirt}}" alt="">
                      <div class="about">
                          <div class="ism">{{team[12].name}}</div>
                          <div class="raqam">{{team[12].price}}</div>
                    </div>
                  </div>
                </div>
                 <div class="col-md-2 col-sm-2 col-xs-2 center-block">
                  <div class="fudbolchi">
                    <div class="malumot">
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                        <a href="" data-ng-click="removeplayer(13)"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                      <img src="{{team[13].shirt}}" alt="">
                      <div class="about">
                          <div class="ism">{{team[13].name}}</div>
                          <div class="raqam">{{team[13].price}}</div>
                    </div>
                  </div>
                </div> <div class="col-md-2 col-sm-2 col-xs-2 center-block">
                 <div class="fudbolchi">
                    <div class="malumot">
                      <a href="#"><span class="glyphicon glyphicon-info-sign"></span></a>
                        <a href="" data-ng-click="removeplayer(14)"><span class="glyphicon glyphicon-remove-sign"></span></a>
                    </div>
                     <img src="{{team[14].shirt}}" alt="">
                     <div class="about">
                         <div class="ism">{{team[14].name}}</div>
                         <div class="raqam">{{team[14].price}}</div>
                    </div>
                  </div>
                </div>
              </div> <!-- //uyinchi -->
            </div> <!-- //yashil -->
          </div> <!-- //stadion -->

          <div class="jamoa_nomi col-md-12 col-sm-12 col-xs-12 paddingsiz"> <!-- ***jamoa nomi -->
            <div class="col-md-6 col-sm-12 col-xs-12 paddingsiz satr">
              Jamoangiz nomini kiriting:
            </div>
              <form name="myForm" novalidate>
            <div class="col-md-6 col-sm-12 col-xs-12 paddingsiz">
                 <input name="team_name" ng-model="team_name" ng-minlength="3" ng-maxlength="25" type="text" class="form-control" id="" placeholder="3 dan 25 ta simvolgacha">
            <span ng-show="myForm.team_name.$dirty && myForm.team_name.$invalid">
                <span style="color: red;" ng-show="myForm.team_name.$error.required">Jamoa nomini kiritish shart</span>
                <span style="color: red" ng-show="myForm.team_name.$invalid">Jamoa nomi yaroqsiz</span>
            </span>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="checkbox">
                <label>
                  <input ng-model="accept.isSelected" type="checkbox" class="checkbox"> Men <a href="#">foydalanuvchi shartnomasini </a> o'qib chiqdim va uning barcha shartlariga roziman
                </label>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 tasdiqlash">
              <button ng-click="open()" ng-show="btn" ng-disabled="!accept.isSelected" class="btn">TASDIQLASH</button>
                <div class="panel" ng-show="pin">
                    <div class="panel-body">
                        <label>Tel: +998     </label><input class="input-sm" type="text" name="phone" placeholder="123456789">
                        <label>SMS Confirmation: </label><input class="input-sm" type="text" name="pin" placeholder="0000">
                    </div>
                    <div class="info">
                        <button ng-click="submit()" type="button" class="btn-primary">Tasdiqlash</button>
                        <button ng-click="qayt()" type="button" class="btn-danger">Ortga</button>
                    <p>{{mess}}</p>
                    </div>
                </div>
            </div> <!-- //tasdiqlash -->
              </form>
            <div class="eslatma">
                *Haqoratli so'z ishlatilgan jamoa diskvalifikatsiya qilinishi mumkin.
            </div> <!-- //eslatma -->
          </div> <!-- //jamoa_nomi -->
        </div> <!-- //jamoa -->
      </div> <!-- //stadion -->

      <div class="col-md-4 col-sm-12 col-xs-12 col-md-offset-1"><!--  ***o'ng taraf qismi saralash qismi boshlandi -->
         <div class="panel panel1">
              <div class="panel-heading">Futbolchilarni saralash</div>
                <div class="panel-body">
                   <div class="uyinchi">
                      <div class="col-md-3 fudbolchi">
                        Futbolchilar
                      </div>
                      <div class="col-md-9 tanlash">
                        <select ng-model="option" class="form-control" style="float: left;">
                            <option>Barcha futdbolchilar</option>
                            <option value="darvozabon">Darvozabonlar</option>
                            <option value="himoyachi">Himoyachilar</option>
                            <option value="yarim_himoyachi">Yarim himoyachilar</option>
                            <option value="hujumchi">Hujumchilar</option>
                            <option value="" class="komandalar">Real Madrid</option>
                            <option value="" class="komandalar">Real Madrid</option>
                            <option value="" class="komandalar">Real Madrid</option>
                            <option value="" class="komandalar">Real Madrid</option>
                            <option value="" class="komandalar">Real Madrid</option>
                            <option value="" class="komandalar">Real Madrid</option>
                            <option value="" class="komandalar">Real Madrid</option>
                            <option value="" class="komandalar">Real Madrid</option>
                            <option value="" class="komandalar">Real Madrid</option>
                            <option value="" class="komandalar">Real Madrid</option>
                            <option value="" class="komandalar">Real Madrid</option>
                            <option value="" class="komandalar">Real Madrid</option>
                        </select>
                      </div>
                   </div> 
                   <div class="ochko">
                      <div class="col-md-3 fudbolchi">
                        Saralash
                      </div>
                      <div class="col-md-9 tanlash">
                        <select class="form-control" style="float: left;">
                            <option>Ochko</option>
                            <option value="">Turdagi ochkolar</option>
                            <option value="">Narx</option>
                            <option value="">Foydalanuvchilar tanlagan %</option>
                            <option value="">Gollar</option>
                            <option value="">Golli paslar</option>
                            <option value="">Quruq uchrashuvlar</option>
                            <option value="">Sariq kartochkalar</option>
                            <option value="">Qizil kartochkalar</option>
                            <option value="">Seyvlar</option>
                            <option value="">G'alaba goli</option>
                            <option value="">Darvoza chizig'i ustidan to'p qaytarilgan</option>
                            <option value="">So'nggi himoya</option>
                            <option value="">Har bir 10ta to'p olib qo'yish</option>


                        </select>
                      </div>
                   </div> 
                   <div class="max_narx">
                      <div class="col-md-3 fudbolchi">
                        Maksimal.narx
                      </div>
                      <div class="col-md-9 tanlash">
                        <select class="form-control " style="float: left;">
                            <option>Istalgan narx</option>
                            <option value="12.8">12.8</option>
                            <option value="12.4">12.4</option>
                            <option value="11.9">11.9</option>
                            <option value="11.4">11.4</option>
                            <option value="10.9">10.9</option>
                            <option value="10.4">10.4</option>
                            <option value="9.9">9.9</option>
                            <option value="9.4">9.4</option>
                            <option value="8.9">8.9</option>
                            <option value="8.4">8.4</option>
                            <option value="7.9">7.9</option>
                            <option value="7.4">7.4</option>
                            <option value="6.9">6.9</option>
                            <option value="6.4">6.4</option>
                            <option value="5.9">5.9</option>
                            <option value="5.4">5.4</option>
                            <option value="4.9">4.9</option>
                            <option value="4.4">4.4</option>
                            <option value="3.9">3.9</option>
                        </select>
                      </div>
                   </div>
                </div>
        </div> <!-- //panel1 -->

      <div ng-switch="option" class="narxlar">
        <table ng-switch-when="darvozabon" class="table bordered">
          <thead>
               <tr class="sarlavha">
                  <th colspan="2" class="one"><a href="#">Darvozabonlar</a></th>
                  <th class="text-center"><abbr title="Jamoa">J</abbr></th>
                  <th class="text-center"><abbr title="Narx">N</abbr></th>
                  <th class="text-center"><abbr title="Ochko">0</abbr></th>
              </tr>
          </thead>
          <tbody style="height:400px; overflow-y: auto; overflow-x: hidden; ">
            <!-- DARVOZABONLAR -->

            <tr data-ng-repeat="player in allplayers | filter: {position:'1'}">
              <td class=" text-center button"><a href=""><div class="info yahshi"></div></a></td>
              <td class="text-left"><a href="" data-param="{{player}}" data-ng-click="addplayer(player, player.price, player.id, player.club_id)">{{player.name}}</a></td>
              <td class="text-center" ng-bind="player.club_id"></td>
              <td class="text-center">{{player.price}}</td>
              <td class="text-center">{{player.total}}</td>
            </tr>
        </tbody>
      </table>

          <table ng-switch-when="himoyachi" class="table bordered">
              <thead>
              <tr class="sarlavha">
                  <th colspan="2" class="one"><a href="#">Himoyachilar</a></th>
                  <th class="text-center"><abbr title="Jamoa">J</abbr></th>
                  <th class="text-center"><abbr title="Narx">N</abbr></th>
                  <th class="text-center"><abbr title="Ochko">0</abbr></th>
              </tr>
              </thead>
              <tbody>
              <!-- DARVOZABONLAR -->
              <tr data-ng-repeat="player in allplayers | filter: {position:'2'}">
                  <td class=" text-center button"><a href=""><div class="info yahshi"></div></a></td>
                  <td class="text-left"><a href="" data-param="{{player}}" data-ng-click="addplayer2(player, player.price, player.id, player.club_id)">{{player.name}}</a></td>
                  <td class="text-center">{{player.club_id}}</td>
                  <td class="text-center">{{player.price}}</td>
                  <td class="text-center">{{player.total}}</td>
              </tr>
              </tbody>
          </table>

          <table ng-switch-when="yarim_himoyachi" class="table bordered">
              <thead>
              <tr class="sarlavha">
                  <th colspan="2" class="one"><a href="#">Yarim himoyachilar</a></th>
                  <th class="text-center"><abbr title="Jamoa">J</abbr></th>
                  <th class="text-center"><abbr title="Narx">N</abbr></th>
                  <th class="text-center"><abbr title="Ochko">0</abbr></th>
              </tr>
              </thead>
              <tbody>
              <!-- DARVOZABONLAR -->
              <tr data-ng-repeat="player in allplayers | filter: {position:'3'}">
                  <td class=" text-center button"><a href=""><div class="info yahshi"></div></a></td>
                  <td class="text-left"><a href="" data-param="{{player}}" data-ng-click="addplayer3(player, player.price, player.id, player.club_id)">{{player.name}}</a></td>
                  <td class="text-center">{{player.club_id}}</td>
                  <td class="text-center">{{player.price}}</td>
                  <td class="text-center">{{player.total}}</td>
              </tr>
              </tbody>
          </table>
          <table ng-switch-when="hujumchi" class="table bordered">
              <thead>
              <tr class="sarlavha">
                  <th colspan="2" class="one"><a href="#">Hujumchilar</a></th>
                  <th class="text-center"><abbr title="Jamoa">J</abbr></th>
                  <th class="text-center"><abbr title="Narx">N</abbr></th>
                  <th class="text-center"><abbr title="Ochko">0</abbr></th>
              </tr>
              </thead>
              <tbody>
              <!-- DARVOZABONLAR -->
              <tr data-ng-repeat="player in allplayers | filter: {position:'4'}">
                  <td class=" text-center button"><a href=""><div class="info yahshi"></div></a></td>
                  <td class="text-left"><a href="" data-param="{{player}}" data-ng-click="addplayer4(player, player.price, player.id, player.club_id)">{{player.name}}</a></td>
                  <td class="text-center">{{player.club_id}}</td>
                  <td class="text-center">{{player.price}}</td>
                  <td class="text-center">{{player.total}}</td>
              </tr>
              </tbody>
          </table>
      <div class="varoqlash text-center">
        <ul class="pagination">
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">&raquo;</a></li>
        </ul>
      </div>
    </div>
      </div> <!-- //saralash qismi -->
    </div> <!-- //container -->
  </div> <!--  //maydon -->
        
     

    

        </div>
    </div>
</div>
