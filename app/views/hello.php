<!doctype html>
<html data-ng-app = "myApp">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	</head>
	<body>
        <div class="container" ng-controller="ContentsController">
            <div infinite-scroll="contents.nextPage()" infinite-scroll-distance="2" infinite-scroll-disabled="contents.busy">
                <span ng-repeat="content in contents.items" style="width:290px; display: inline-block; height: 150px; background: #888; color:#fff; line-height: 150px; text-align: center; margin: 10px 10px;">
                    {{content.conteudo}}
                </span>
            </div>        
        </div>
        <script src="js/jquery.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.2/angular.min.js"></script>
        <script src="js/infinite-scroll.min.js"></script>
		<script src="js/app.js"></script>        
	</body>
</html>