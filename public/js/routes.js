// create the module and name it app2
// also include ngRoute for all our routing needs
var app2 = angular.module('app', ["ngRoute"]);

// configure our routes
app2.config(function($routeProvider) {
    $routeProvider

    // route for the home page
        .when('/prueba/:orderId', {
        templateUrl : 'pages/home.html',
        controller  : 'mainController'
    })
});

// create the controller and inject Angular's $scope
app2.controller('mainController', function($scope, $routeParams) {
    $scope.order_id = $routeParams.orderId;
    console.log($scope.order_id);
    // create a message to display in our view
    $scope.message = 'Everyone come and see how good I look!';
});