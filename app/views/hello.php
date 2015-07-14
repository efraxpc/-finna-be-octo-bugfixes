<!doctype html>
<html data-ng-app = 'myApp'>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	</head>
	<body>
		<div data-ng-controller="myCtrl">
            <input type="search" ng-model="busqueda">
            <button ng-click="primerMetodo()">boton 1</button>
            <button ng-click="segundoMetodo()">boton 2</button>
            <ul>
                <li ng-repeat="persona in resultado">
                    {{persona}}
                </li>
            </ul>
		</div>
        <div data-ng-controller="myCtrl2">
            {{todos.txt}}
        </div>
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.min.js"></script>
		<script src="js/app.js"></script>        
	</body>
</html>