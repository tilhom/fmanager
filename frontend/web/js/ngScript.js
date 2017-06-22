var app=angular.module('myApp', []);
app.controller('PosController', function ($scope, $http) {
    $scope.allplayers=[];
    $scope.randoms=[];
    $http.get("Players.json")
        .then(function (response ) {
            $scope.allplayers=response.data.all;
        });
    $http.get("random_players")
        .then(function (response) {
            $scope.randoms = response.data.rand;
        });
    $scope.pin=false;
    $scope.btn=true;
    $scope.open = function () {
$scope.pin=true;
$scope.btn=false;
    };
    $scope.qayt=function () {
        $scope.pin=false;
        $scope.btn=true;
    };

    $scope.option='darvozabon';
    $scope.team=[{name:'', price:0, shirt:"image/plus.png"},
        {name:'', price:0, shirt:"image/plus.png"},
        {name:'', price:0, shirt:"image/plus.png"},
        {name:'', price:0, shirt:"image/plus.png"},
        {name:'', price:0, shirt:"image/plus.png"},
        {name:'', price:0, shirt:"image/plus.png"},
        {name:'', price:0, shirt:"image/plus.png"},
        {name:'', price:0, shirt:"image/plus.png"},
        {name:'', price:0, shirt:"image/plus.png"},
        {name:'', price:0, shirt:"image/plus.png"},
        {name:'', price:0, shirt:"image/plus.png"},
        {name:'', price:0, shirt:"image/plus.png"},
        {name:'', price:0, shirt:"image/plus.png"},
        {name:'', price:0, shirt:"image/plus.png"},
        {name:'', price:0, shirt:"image/plus.png"}
    ];

    $scope.valid=true;
    $scope.empty=[{name:'', price:0, shirt:"image/plus.png"}];
    $scope.num=0;
    $scope.bank=100;
    $scope.generate = function () {
        $scope.addplayer($scope.randoms[0], $scope.randoms[0].price, $scope.randoms[0].id, $scope.randoms[0].club_id);
        $scope.addplayer($scope.randoms[1], $scope.randoms[1].price, $scope.randoms[1].id, $scope.randoms[1].club_id);
        $scope.addplayer2($scope.randoms[2], $scope.randoms[2].price, $scope.randoms[2].id, $scope.randoms[2].club_id);
        $scope.addplayer2($scope.randoms[3], $scope.randoms[3].price, $scope.randoms[3].id, $scope.randoms[3].club_id);
        $scope.addplayer2($scope.randoms[4], $scope.randoms[4].price, $scope.randoms[4].id, $scope.randoms[4].club_id);
        $scope.addplayer2($scope.randoms[5], $scope.randoms[5].price, $scope.randoms[5].id, $scope.randoms[5].club_id);
        $scope.addplayer2($scope.randoms[6], $scope.randoms[6].price, $scope.randoms[6].id, $scope.randoms[6].club_id);
        $scope.addplayer3($scope.randoms[7], $scope.randoms[7].price, $scope.randoms[7].id, $scope.randoms[7].club_id);
        $scope.addplayer3($scope.randoms[8], $scope.randoms[8].price, $scope.randoms[8].id, $scope.randoms[8].club_id);
        $scope.addplayer3($scope.randoms[9], $scope.randoms[9].price, $scope.randoms[9].id, $scope.randoms[9].club_id);
        $scope.addplayer3($scope.randoms[10], $scope.randoms[10].price, $scope.randoms[10].id, $scope.randoms[10].club_id);
        $scope.addplayer3($scope.randoms[11], $scope.randoms[11].price, $scope.randoms[11].id, $scope.randoms[11].club_id);
        $scope.addplayer4($scope.randoms[12], $scope.randoms[12].price, $scope.randoms[12].id, $scope.randoms[12].club_id);
        $scope.addplayer4($scope.randoms[13], $scope.randoms[13].price, $scope.randoms[13].id, $scope.randoms[13].club_id);
        $scope.addplayer4($scope.randoms[14], $scope.randoms[14].price, $scope.randoms[14].id, $scope.randoms[14].club_id);

    };
    $scope.addplayer=function (player,price, id, club_id) {
        if($scope.team[0].price === 0 && id !== $scope.team[1].id) {
            if (club_id == 1){
                player.shirt="shirts/real3.png";
            } else if(club_id == 2){
                player.shirt="shirts/athletic1.png";
            } else if(club_id == 3){
                player.shirt="shirts/celta1.png";
            } else if(club_id == 4 ){
                player.shirt="shirts/sevilla1.png";
            } else if(club_id == 5){
                player.shirt="shirts/leganes1.png";
            } else if(club_id == 6){
                player.shirt="shirts/palmas1.png";
            } else if (club_id == 7){
                player.shirt="shirts/deportivo1.png";
            } else if (club_id == 8){
                player.shirt="shirts/sociedad1.png";
            } else if( club_id == 9){
                player.shirt="shirts/eibar1.png";
            } else if(club_id == 10){
                player.shirt="shirts/gijon1.png";
            }
            $scope.team.splice(0, 1);
            $scope.team.splice(0, 0, player);
            $scope.bank = $scope.bank - parseFloat(price);
            $scope.num=$scope.num+1;

        } else if ($scope.team[1].price === 0 && id !== $scope.team[0].id) {
            if (club_id == 1){
                player.shirt="shirts/real3.png";
            } else if(club_id == 2){
                player.shirt="shirts/athletic1.png";
            } else if(club_id == 3){
                player.shirt="shirts/celta1.png";
            } else if(club_id == 4 ){
                player.shirt="shirts/sevilla1.png";
            } else if(club_id == 5){
                player.shirt="shirts/leganes1.png";
            } else if(club_id == 6){
                player.shirt="shirts/palmas1.png";
            } else if (club_id == 7){
                player.shirt="shirts/deportivo1.png";
            } else if (club_id == 8){
                player.shirt="shirts/sociedad1.png";
            } else if( club_id == 9){
                player.shirt="shirts/eibar1.png";
            } else if(club_id == 10){
                player.shirt="shirts/gijon1.png";
            }
            $scope.team.splice(1, 1);
            $scope.team.splice(1, 0, player);
            $scope.num=$scope.num+1;
            $scope.bank = $scope.bank - parseFloat(price);

        } else {alert("Darvozabonlar 2 tadan oshmaydi va bir o'yinchi bir marta tanlanadi")}
    };
        $scope.removeplayer=function (ind) {
            if ($scope.team[ind].price !== 0) {
                $scope.bank = $scope.bank + parseFloat($scope.team[ind].price);
                $scope.num = $scope.num - 1;
                $scope.team.splice(ind, 1, $scope.empty[0]);


            } else {alert("Position is EMPTY")}
        };
        $scope.removeall=function () {

            for (var i=0; i<15 ; i++ ){
                if ($scope.team[i].price !==0){
                    $scope.bank = $scope.bank + parseFloat($scope.team[i].price);
                    $scope.num = $scope.num-1;
                    $scope.team.splice(i, 1, $scope.empty[0]);
                }
            }
        };
        $scope.checkID=function (i) {
            return i !== $scope.team[2].id && i !== $scope.team[3].id && i !== $scope.team[4].id && i !== $scope.team[5].id && i !== $scope.team[6];
        };
    $scope.checkID3=function (i) {
        return i !== $scope.team[7].id && i !== $scope.team[8].id && i !== $scope.team[9].id && i !== $scope.team[10].id && i !== $scope.team[11].id;
    };
        $scope.addplayer2=function (player, price, id, club_id) {
            $scope.status=$scope.checkID(id);
            if($scope.team[2].price === 0 && $scope.status){
                if (club_id == 1){
                    player.shirt="shirts/real3.png";
                } else if(club_id == 2){
                    player.shirt="shirts/athletic1.png";
                } else if(club_id == 3){
                    player.shirt="shirts/celta1.png";
                } else if(club_id == 4 ){
                    player.shirt="shirts/sevilla1.png";
                } else if(club_id == 5){
                    player.shirt="shirts/leganes1.png";
                } else if(club_id == 6){
                    player.shirt="shirts/palmas1.png";
                } else if (club_id == 7){
                    player.shirt="shirts/deportivo1.png";
                } else if (club_id == 8){
                    player.shirt="shirts/sociedad1.png";
                } else if( club_id == 9){
                    player.shirt="shirts/eibar1.png";
                } else if(club_id == 10){
                    player.shirt="shirts/gijon1.png";
                }
                $scope.team.splice(2,1);
                $scope.team.splice(2,0, player);
                $scope.num=$scope.num+1;
                $scope.bank = $scope.bank-parseFloat(price);
            } else if ($scope.team[3].price === 0 && $scope.status){
                if (club_id == 1){
                    player.shirt="shirts/real3.png";
                } else if(club_id == 2){
                    player.shirt="shirts/athletic1.png";
                } else if(club_id == 3){
                    player.shirt="shirts/celta1.png";
                } else if(club_id == 4 ){
                    player.shirt="shirts/sevilla1.png";
                } else if(club_id == 5){
                    player.shirt="shirts/leganes1.png";
                } else if(club_id == 6){
                    player.shirt="shirts/palmas1.png";
                } else if (club_id == 7){
                    player.shirt="shirts/deportivo1.png";
                } else if (club_id == 8){
                    player.shirt="shirts/sociedad1.png";
                } else if( club_id == 9){
                    player.shirt="shirts/eibar1.png";
                } else if(club_id == 10){
                    player.shirt="shirts/gijon1.png";
                }
                $scope.team.splice(3,1);
                $scope.team.splice(3,0, player);
                $scope.num=$scope.num+1;
                $scope.bank = $scope.bank-parseFloat(price);
            } else if ($scope.team[4].price === 0 && $scope.status){
                if (club_id == 1){
                    player.shirt="shirts/real3.png";
                } else if(club_id == 2){
                    player.shirt="shirts/athletic1.png";
                } else if(club_id == 3){
                    player.shirt="shirts/celta1.png";
                } else if(club_id == 4 ){
                    player.shirt="shirts/sevilla1.png";
                } else if(club_id == 5){
                    player.shirt="shirts/leganes1.png";
                } else if(club_id == 6){
                    player.shirt="shirts/palmas1.png";
                } else if (club_id == 7){
                    player.shirt="shirts/deportivo1.png";
                } else if (club_id == 8){
                    player.shirt="shirts/sociedad1.png";
                } else if( club_id == 9){
                    player.shirt="shirts/eibar1.png";
                } else if(club_id == 10){
                    player.shirt="shirts/gijon1.png";
                }
                $scope.team.splice(4,1);
                $scope.team.splice(4,0, player);
                $scope.num=$scope.num+1;
                $scope.bank = $scope.bank-parseFloat(price);
            } else if ($scope.team[5].price === 0 && $scope.status){
                if (club_id == 1){
                    player.shirt="shirts/real3.png";
                } else if(club_id == 2){
                    player.shirt="shirts/athletic1.png";
                } else if(club_id == 3){
                    player.shirt="shirts/celta1.png";
                } else if(club_id == 4 ){
                    player.shirt="shirts/sevilla1.png";
                } else if(club_id == 5){
                    player.shirt="shirts/leganes1.png";
                } else if(club_id == 6){
                    player.shirt="shirts/palmas1.png";
                } else if (club_id == 7){
                    player.shirt="shirts/deportivo1.png";
                } else if (club_id == 8){
                    player.shirt="shirts/sociedad1.png";
                } else if( club_id == 9){
                    player.shirt="shirts/eibar1.png";
                } else if(club_id == 10){
                    player.shirt="shirts/gijon1.png";
                }
                $scope.team.splice(5,1);
                $scope.team.splice(5,0, player);
                $scope.num=$scope.num+1;
                $scope.bank = $scope.bank-parseFloat(price);
            } else if ($scope.team[6].price === 0 && $scope.status){
                if (club_id == 1){
                    player.shirt="shirts/real3.png";
                } else if(club_id == 2){
                    player.shirt="shirts/athletic1.png";
                } else if(club_id == 3){
                    player.shirt="shirts/celta1.png";
                } else if(club_id == 4 ){
                    player.shirt="shirts/sevilla1.png";
                } else if(club_id == 5){
                    player.shirt="shirts/leganes1.png";
                } else if(club_id == 6){
                    player.shirt="shirts/palmas1.png";
                } else if (club_id == 7){
                    player.shirt="shirts/deportivo1.png";
                } else if (club_id == 8){
                    player.shirt="shirts/sociedad1.png";
                } else if( club_id == 9){
                    player.shirt="shirts/eibar1.png";
                } else if(club_id == 10){
                    player.shirt="shirts/gijon1.png";
                }
                $scope.team.splice(6,1);
                $scope.team.splice(6,0, player);
                $scope.num=$scope.num+1;
                $scope.bank = $scope.bank-parseFloat(price);
            } else {alert("Himoyachilar 5 tadan oshmaydi va bir oyinchi bir marta tanlanadi")}
        };
    $scope.addplayer3=function (player, price, id, club_id) {
        $scope.status3=$scope.checkID3(id);
        if($scope.team[7].price === 0 && $scope.status3){
            if (club_id == 1){
                player.shirt="shirts/real3.png";
            } else if(club_id == 2){
                player.shirt="shirts/athletic1.png";
            } else if(club_id == 3){
                player.shirt="shirts/celta1.png";
            } else if(club_id == 4 ){
                player.shirt="shirts/sevilla1.png";
            } else if(club_id == 5){
                player.shirt="shirts/leganes1.png";
            } else if(club_id == 6){
                player.shirt="shirts/palmas1.png";
            } else if (club_id == 7){
                player.shirt="shirts/deportivo1.png";
            } else if (club_id == 8){
                player.shirt="shirts/sociedad1.png";
            } else if( club_id == 9){
                player.shirt="shirts/eibar1.png";
            } else if(club_id == 10){
                player.shirt="shirts/gijon1.png";
            }
            $scope.team.splice(7,1);
            $scope.team.splice(7,0, player);
            $scope.num=$scope.num+1;
            $scope.bank = $scope.bank-price;
        } else if ($scope.team[8].price === 0 && $scope.status3){
            if (club_id == 1){
                player.shirt="shirts/real3.png";
            } else if(club_id == 2){
                player.shirt="shirts/athletic1.png";
            } else if(club_id == 3){
                player.shirt="shirts/celta1.png";
            } else if(club_id == 4 ){
                player.shirt="shirts/sevilla1.png";
            } else if(club_id == 5){
                player.shirt="shirts/leganes1.png";
            } else if(club_id == 6){
                player.shirt="shirts/palmas1.png";
            } else if (club_id == 7){
                player.shirt="shirts/deportivo1.png";
            } else if (club_id == 8){
                player.shirt="shirts/sociedad1.png";
            } else if( club_id == 9){
                player.shirt="shirts/eibar1.png";
            } else if(club_id == 10){
                player.shirt="shirts/gijon1.png";
            }
            $scope.team.splice(8,1);
            $scope.team.splice(8,0, player);
            $scope.num=$scope.num+1;
            $scope.bank = $scope.bank-price;
        } else if ($scope.team[9].price === 0 && $scope.status3){
            if (club_id == 1){
                player.shirt="shirts/real3.png";
            } else if(club_id == 2){
                player.shirt="shirts/athletic1.png";
            } else if(club_id == 3){
                player.shirt="shirts/celta1.png";
            } else if(club_id == 4 ){
                player.shirt="shirts/sevilla1.png";
            } else if(club_id == 5){
                player.shirt="shirts/leganes1.png";
            } else if(club_id == 6){
                player.shirt="shirts/palmas1.png";
            } else if (club_id == 7){
                player.shirt="shirts/deportivo1.png";
            } else if (club_id == 8){
                player.shirt="shirts/sociedad1.png";
            } else if( club_id == 9){
                player.shirt="shirts/eibar1.png";
            } else if(club_id == 10){
                player.shirt="shirts/gijon1.png";
            }
            $scope.team.splice(9,1);
            $scope.team.splice(9,0, player);
            $scope.num=$scope.num+1;
            $scope.bank = $scope.bank-price;
        } else if ($scope.team[10].price === 0 && $scope.status3){
            if (club_id == 1){
                player.shirt="shirts/real3.png";
            } else if(club_id == 2){
                player.shirt="shirts/athletic1.png";
            } else if(club_id == 3){
                player.shirt="shirts/celta1.png";
            } else if(club_id == 4 ){
                player.shirt="shirts/sevilla1.png";
            } else if(club_id == 5){
                player.shirt="shirts/leganes1.png";
            } else if(club_id == 6){
                player.shirt="shirts/palmas1.png";
            } else if (club_id == 7){
                player.shirt="shirts/deportivo1.png";
            } else if (club_id == 8){
                player.shirt="shirts/sociedad1.png";
            } else if( club_id == 9){
                player.shirt="shirts/eibar1.png";
            } else if(club_id == 10){
                player.shirt="shirts/gijon1.png";
            }
            $scope.team.splice(10,1);
            $scope.team.splice(10,0, player);
            $scope.num=$scope.num+1;
            $scope.bank = $scope.bank-price;
        } else if ($scope.team[11].price === 0 && $scope.status3){
            if (club_id == 1){
                player.shirt="shirts/real3.png";
            } else if(club_id == 2){
                player.shirt="shirts/athletic1.png";
            } else if(club_id == 3){
                player.shirt="shirts/celta1.png";
            } else if(club_id == 4 ){
                player.shirt="shirts/sevilla1.png";
            } else if(club_id == 5){
                player.shirt="shirts/leganes1.png";
            } else if(club_id == 6){
                player.shirt="shirts/palmas1.png";
            } else if (club_id == 7){
                player.shirt="shirts/deportivo1.png";
            } else if (club_id == 8){
                player.shirt="shirts/sociedad1.png";
            } else if( club_id == 9){
                player.shirt="shirts/eibar1.png";
            } else if(club_id == 10){
                player.shirt="shirts/gijon1.png";
            }
            $scope.team.splice(11,1);
            $scope.team.splice(11,0, player);
            $scope.num=$scope.num+1;
            $scope.bank = $scope.bank-price;
        } else {alert(" Yarim Himoyachilar 5 tadan oshmaydi va bir oyinchi bir marta tanlanadi")}
    };
     $scope.checkID4=function (i) {
       return i !==$scope.team[12].id && i !== $scope.team[13].id && i !== $scope.team[14];
     };
    $scope.addplayer4=function (player, price, id, club_id) {
        $scope.status4=$scope.checkID4(id);
        if ($scope.team[12].price === 0 && $scope.status4){
            if (club_id == 1){
                player.shirt="shirts/real3.png";
            } else if(club_id == 2){
                player.shirt="shirts/athletic1.png";
            } else if(club_id == 3){
                player.shirt="shirts/celta1.png";
            } else if(club_id == 4 ){
                player.shirt="shirts/sevilla1.png";
            } else if(club_id == 5){
                player.shirt="shirts/leganes1.png";
            } else if(club_id == 6){
                player.shirt="shirts/palmas1.png";
            } else if (club_id == 7){
                player.shirt="shirts/deportivo1.png";
            } else if (club_id == 8){
                player.shirt="shirts/sociedad1.png";
            } else if( club_id == 9){
                player.shirt="shirts/eibar1.png";
            } else if(club_id == 10){
                player.shirt="shirts/gijon1.png";
            }
            $scope.team.splice(12,1);
            $scope.team.splice(12,0, player);
            $scope.num=$scope.num+1;
            $scope.bank=$scope.bank-price;
        } else if ($scope.team[13].price === 0 && $scope.status4){
            if (club_id == 1){
                player.shirt="shirts/real3.png";
            } else if(club_id == 2){
                player.shirt="shirts/athletic1.png";
            } else if(club_id == 3){
                player.shirt="shirts/celta1.png";
            } else if(club_id == 4 ){
                player.shirt="shirts/sevilla1.png";
            } else if(club_id == 5){
                player.shirt="shirts/leganes1.png";
            } else if(club_id == 6){
                player.shirt="shirts/palmas1.png";
            } else if (club_id == 7){
                player.shirt="shirts/deportivo1.png";
            } else if (club_id == 8){
                player.shirt="shirts/sociedad1.png";
            } else if( club_id == 9){
                player.shirt="shirts/eibar1.png";
            } else if(club_id == 10){
                player.shirt="shirts/gijon1.png";
            }
            $scope.team.splice(13,1);
            $scope.team.splice(13,0, player);
            $scope.num=$scope.num+1;
            $scope.bank=$scope.bank-price;
        } else if ($scope.team[14].price === 0 && $scope.status4){
            if (club_id == 1){
                player.shirt="shirts/real3.png";
            } else if(club_id == 2){
                player.shirt="shirts/athletic1.png";
            } else if(club_id == 3){
                player.shirt="shirts/celta1.png";
            } else if(club_id == 4 ){
                player.shirt="shirts/sevilla1.png";
            } else if(club_id == 5){
                player.shirt="shirts/leganes1.png";
            } else if(club_id == 6){
                player.shirt="shirts/palmas1.png";
            } else if (club_id == 7){
                player.shirt="shirts/deportivo1.png";
            } else if (club_id == 8){
                player.shirt="shirts/sociedad1.png";
            } else if( club_id == 9){
                player.shirt="shirts/eibar1.png";
            } else if(club_id == 10){
                player.shirt="shirts/gijon1.png";
            }
            $scope.team.splice(14,1);
            $scope.team.splice(14,0, player);
            $scope.num=$scope.num+1;
            $scope.bank=$scope.bank-price;
        } else { alert("Hujumchilar soni 3 tadan oshmaydi va bir oyinchi bir marta tanlanadi")}
    };
$scope.team_name='';

$scope.accept={isSelected: false};
$scope.submit=function () {
    var config= {
        method: 'POST',
        url: 'server.php',
        data: {
            'teamname' : $scope.team_name,
            'teamMembers' : JSON.stringify($scope.team)
        }
    };
    var request = $http(config);
    request.then(function (response) {
        $scope.mess = response.data;
    }, function (error) {
        $scope.mess = error.data;
    });
}

});






