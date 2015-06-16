var registration_module= angular.module("new-test",['ngRoute']);
registration_module.user_account="";
registration_module.category_list="";
registration_module.singleCategory="";
registration_module.config(function($routeProvider,$locationProvider) {
	$locationProvider.html5Mode(true);
		$routeProvider
		.when('/signin', {
				templateUrl : 'login.php',
				controller  : 'login'
			})
			.when('/signup', {
				templateUrl : 'registration.php',
				controller  : 'registration'
			})
			.when('/home',{
				templateUrl : "home.php",
				controller  : 'home'
			}).when("/category-list",{
                            controller  : 'category',
                            templateUrl : "category/list.php",
                        }).when("/category-add",{
                            controller  : 'category',
                            templateUrl : "category/add.php",
                        }).when("/category-edit/:catId",{
                            controller  : 'category',
                            templateUrl : "category/edit.php",
                        });
});

registration_module.controller("home",function($scope,$http,$location,$routeParams){
	$scope.my_data=registration_module.user_account;        
        $scope.categoryList=function()        
        {   $location.path("/category-list");
        }
});

registration_module.controller("category",function($scope,$http,$location,$routeParams){
    
    $http.get("category-json.php")
    .success(function(response) {
        $scope.category_list=response;
        var matchWithEdit = ($location.$$path).match(/category-edit/g);
        if(matchWithEdit && matchWithEdit.length>0)
        {
            $scope.loadMyCat();
        }
        
      });
    
      $scope.loadMyCat=function(){
          $scope.sel_cat={};
          angular.forEach($scope.category_list,function(value,key){
              if(value.category_id==$routeParams.catId)
              {
                  $scope.sel_cat=value;
              }
          });
          console.log($scope.sel_cat);
      };
	 $scope.categoryAdd=function()
        {            
            $location.path("/category-add");
        }
        $scope.categoryEdit=function(cid)        
        {
            
            //$scope.category_List[0]['category_id'];
//            registration_module.singleCategory=$scope.category_List[0];  
 
            $location.path("/category-edit/"+cid);console.log("sdfsdfsdfsdfs");
            
        }
});


registration_module.controller("login",function($scope,$http,$location,$routeParams){
	
        $scope.hideTopNav=function(){
            angular.element("#topNav").hide();
            console.log("Hello");
        };
	$scope.loginMe=function()
  {
  	var frm_data=$("#frm_login").serialize();
  	$http({
  		method:"post",
  		data:frm_data,
  		url:"dynamic/login.php",
  		headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
  	}).
  	success(function(data){
  	//var dat=JSON.parse(data);
  	alert(data.status);
  		if(data.status==1)
  		{
  			registration_module.user_account=data.user_account;
  			$location.path("/home");
  		}
  		else{
  			
  			$location.path("/signin");
  		}
  	});
  }
	
});

registration_module.controller("registration",function($scope,$http,$location,$routeParams){

  $scope.ragisterMe=function()
  {
  	var frm_data=$("#frm_reg").serialize();
  	$http({
  		method:"post",
  		data:frm_data,
  		url:"dynamic/register.php",
  		headers : { 'Content-Type': 'application/x-www-form-urlencoded' } 
  	}).
  	success(function(data){
  		
  		if(data==1)
  		{
  			//alert(data);
  			$location.path("/login.php");
  		}
  	});
  }

});
