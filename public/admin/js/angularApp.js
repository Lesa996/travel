var phonecatApp = angular.module('phonecatApp', []);

// Define the `PhoneListController` controller on the `phonecatApp` module
phonecatApp.controller('PhoneListController', function PhoneListController($scope,$http) {
    console.log("ee")

    $scope.smestaj = {
        idSmestaja:'',
        tip:'',
        cena:''
    }
    $scope.smestaji = [];
    $scope.period = {
        datumOd:'',
        datumDo:'',
        smestaji:$scope.smestaji
    }
    $scope.data = [$scope.period];
    $scope.proces = function (data) {
        for(var i =0; i < data.length; i++){
            $scope.smestaj.idSmestaja = data[i].id;
            $scope.smestaj.tip = data[i].tip;
            $scope.smestaji.push($scope.smestaj);
            $scope.smestaj = {
                idSmestaja:'',
                tip:'',
                cena:''
            }
        }
        console.log($scope.period)
    }
    $scope.getData = function (id) {
        $http.get('/api/app/putovanje/'+id)
            .then(function(response) {
                $scope.proces(response.data);
                console.log(response)
            });
    }
    $scope.add = function () {
        $scope.data.push({
            datumOd:'',
            datumDo:'',
            smestaji:$scope.smestaji
        })
    }
    $scope.getData(9);
    var loc = window.location.pathname;
    console.log(loc.replace('/app/kreiraj/putovanje/',''))
});