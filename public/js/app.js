(function(){

    var myApp = angular.module('myApp',['infinite-scroll']);
    
    myApp.controller('ContentsController',function($scope, Contents){
        $scope.contents = new Contents();
    });
    
    myApp.factory('Contents',function($http){
        var Contents = function(){
            this.items = [];
            this.busy = false;
            this.page = 1;
        }
        
        Contents.prototype.nextPage = function(){
            if(this.busy) return;
            this.busy = true;
            var url = 'api/contents?page='+this.page;
            
            $http.get(url).success(function(oDatos){
                console.log(oDatos.data);
                for(var i = 0; i < oDatos.data.length; i++ ){
                    this.items.push(oDatos.data[i]);
                }
                
                this.page++;
                this.busy = false;
            }.bind(this));
        };
        return Contents;
    });
}).call(this);