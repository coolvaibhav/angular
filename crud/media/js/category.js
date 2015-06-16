var category= angular.module("category",['ngRoute']);
category.user_account="";
category.config(function($routeProvider,$locationProvider) {
	$locationProvider.html5Mode(true);
		$routeProvider
		.when('/category-list', {
				templateUrl : 'list.php',
				controller  : 'login'
			});
                        
			
});

category.controller("category",function($scope,$http,$location,$routeParams){
    alert("Sdfsdfs")
	
});





