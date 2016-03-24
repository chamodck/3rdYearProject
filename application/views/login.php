<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
      <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
      <div class="container" ng-app="loginApp">
        <div class="row" >
          <div class="col s12 l6 offset-l3 card small">

            <div class="col s12 l8 offset-l2">
              <div class="row">

              <label class="card-title ">Login</label>
              </div>
              <form ng-controller="loginCtrl">
                <div class="row">
                  <div class="input-field">
                    <i class="material-icons prefix">assignment_ind</i>
                    <input id="nic" ng-model="nic"  type="text" length="9">
                    <label for="password">NIC</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field ">
                    <i class="material-icons prefix">vpn_key</i>
                    <input id="password" ng-model="password" type="password">
                    
                    <label for="email">Password</label>
                  </div>
                </div>
                <div class="row">
                  <div class="input-field">
                  <input type="checkbox" id="test5" />
                  <label for="test5">Remember me</label>
                    <div class="right">
                    <button class="btn waves-effect waves-light" type="submit" ng-click="login()">Login
                      <i class="material-icons right">send</i>
                    </button>
                    </div>
                  </div>
                  <pre >{{message}}</pre>
                </div>
              </form>
            </div>
            </div>
      </div>
    </div>
          
      <!--Import jQuery before materialize.js-->
      <script>
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
             if(data==1){
                $scope.message="The NIC and";
                //window.location =<?=base_url()?>;
              }else{
                $scope.message="The NIC and password you entered don't match.";
              }
              //$scope.data = data;
              //$scope.result = data; // Show result from server in our <pre></pre> element
            })
            .
            error(function(data) {
              $scope.message = "Request fail";    
            });
          };
        });
      </script>
      
      <script type="text/javascript" src="<?=base_url()?>js/jquery-2.1.4.min.js"></script>
      <script type="text/javascript" src="<?=base_url()?>js/materialize.min.js"></script>
    </body>
  </html>