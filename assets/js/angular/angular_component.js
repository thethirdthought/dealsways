
var host="http://localhost:8001/dealsways/index.php";














var app = angular.module('myApp', []);
var counter=0;
var flag=0;
var page_count=1;
app.controller('productsCtrl', function($scope, $http) {
    
    // read products
    $scope.getAll = function(){
        $scope.sellers_loader=1;
        $http.get(host+"/content/sellerSearch/"+counter).success(function(response){
            $scope.sellers = response;
            $scope.sellers_loader=0;
            counter++;
        });
    }
    
});

app.directive("scroll", function ($window,$http) {
    return function(scope, element, attrs) {
       
        angular.element($window).bind("scroll", function() {            
//            console.log(this.pageYOffset+"====="+lastoffset);
             if (this.pageYOffset >= lastoffset && flag==0 && totalseller>(counter*page_count)) {
                flag=1;
                scope.sellers_loader=1;
                $http({method: 'GET', url: host+"/content/sellerSearch/"+counter, cache: true}).then(function(result) {
                    for(i=0;i<result.data.length;i++){
                        scope.sellers.push(result.data[i]);
                    }
                    scope.sellers_loader=0;
                    counter++;
                    flag=0;
                });
             } 
            scope.$apply();
        });
    };
});