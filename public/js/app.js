var app = angular.module('myApp', []);
//ajax
app.controller("miComtrolador", function($scope, $http) {
  $http.get('todos').
    success(function(data, status, headers, config) {
      $scope.resultados = data;
      console.log(data);
    }).
    error(function(data, status, headers, config) {
      // log error
    });
});