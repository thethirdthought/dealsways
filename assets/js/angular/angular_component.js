
var host="http://localhost:8001/dealways/index.php";
var app = angular.module('myApp', []);
app.controller('productsCtrl', function($scope, $http) {
    
    // read products
    $scope.getAll = function(){
        $http.get(host+"/content/sellerSearch").success(function(response){
            $scope.sellers = response;
        });
    }
    
    
});