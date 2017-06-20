<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet/less" type="text/css" href="style/style.less">
 <style type="text/css">
        .login
        {
            color: white;
        }
        a.login:hover
        {
            text-decoration: none;
            color: white;
        }
        a.login:active
        {
            text-decoration: none;
            color: white;
        }
        a.login:visited
        {
            text-decoration: none;
            color: white;
        }
        a.login:link
        {
            text-decoration: none;
            color: white;
        }
        a.reg
        {
            background-color: #1CC735; 
            padding: 5px; 
            border-radius: 7px; 
            border: 0px; 
            padding: 20px;
            font-size: 20px;
            padding-left: 40px;
            padding-right: 40px;
            color: white;
        }
        a.reg:hover
        {
            text-decoration: none;
        }
        .yoki
        {
            margin-top: 110%; 
            border-radius: 100%; 
            text-align: center; 
            padding-top: 20px; 
            padding-bottom: 20px; 
            background-color: #3B0A5F; 
            color: white; 
            width: 85px;
        }
        @media only screen and (max-width: 1023px)
        {
            .la
            {
                font-size: 30px;
            }
            .spain
            {
                font-size: 20px;
            }
            .yoki
            {
                margin-top: 11% !important;
                margin-bottom: 11% !important;

            }
        }
    </style>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>

        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer>
    <div class="container">
      <img src="image/trener.png" alt="" class="komanda">
      <div class="yozuvi">
        <div class="col-md-5 col-sm-4 paddingsiz bir">
          <h2>FIFA</h2>
          <h4>Manager</h4>
          <p>© 2015-2017 FIFAMANAGER.COM <br> Barcha huquqlar himoyalangan</p>
        </div>
        <div class="col-md-4 col-sm-4 paddingsiz ikki">
          <ul class="list-unstyled">
            <li><a href="#">Qayta aloqa</a></li>
            <li><a href="#">Foydalanuvchi shartnomasi</a></li>
            <li><a href="#">Mahfiylik siyosati</a></li>
          </ul>
          <div class="sotsial">
             <a href="#" class="ikonka"><img src="image/facebook.png" alt=""></a>
            <a href="#" class="ikonka"><img src="image/twitter.png" alt=""></a>
            <a href="#" class="ikonka"><img src="image/instagram.png" alt=""></a>
            <a href="#" class="ikonka"><img src="image/google.png" alt=""></a>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 paddingsiz uch">
          <img src="image/icon.png" alt="">
        </div>
      </div>
      <div class="col-md-10 col-sm-10 col-sm-offset-1 col-md-offset-1 eslatma ">
        FIFAMANAGER.COM sayti va undagi kontent, mobil ilova, Football Association Premier League bilan almashtirilmagan va ushbu tashkilotga <br class="hidden-xs"> to'gridan-to'gri aloqasi yo'q.
      </div>
    </div>
  </footer>
 <script type="text/javascript">
        $(document).ready(function() {
    "use-strict";

    // Highlight the top nav as scrolling occurs
    $('body').scrollspy({
        target: '.navbar-fixed-top'
    })

    /*Url jumping*/
    $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
    </script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
