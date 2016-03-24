var app = angular.module('loginApp', []);
        app.controller('loginCtrl', function($scope,$http) {
            $scope.url = '<?=base_url()?>index.php/UserController/login'; // The url of our search
          
            // The function that will be executed on button click (ng-click="search()")
            $scope.login = function() {
            
            // Create the http post request
            // the data holds the keywords
            // The request is a JSON request.
            $http.post($scope.url,{"data":{ "nic" : $scope.nic,"password":$scope.password}}).
            success(function(data) {
              $scope.message = "success";
              //$scope.data = data;
              //$scope.result = data; // Show result from server in our <pre></pre> element
            })
            .
            error(function(data) {
              $scope.message = "fail";    
            });
          };
        });