<html>
	<head>
		<title>Registration</title>	
		<script src="media/js/jquery.js" type="text/javascript"></script>
		<script src="media/js/angular.min.js" type="text/javascript"></script>
		<script src="media/js/route.js" type="text/javascript"></script>
		 <base href="http://localhost/new-test/">
		 
		
		<script>
			angular.module("new-test",['ngRoute'])
			.config(function($routeProvider,$locationProvider) {
	$locationProvider.html5Mode(true);
		$routeProvider

			// route for the home page
			.when('/', {
				templateUrl : 'try_out_routes.php'
				
			})
			.when('/hii', {
				
				controller  : 'hii'
				
			})
			.when('/hello', {
				
				controller  : 'hello'
				
			});
			})
			
.controller("hii",function($scope,$location,$routeParams){ 
	alert("hii");
	})
.controller("hello",function($scope,$location,$routeParams){ 
	alert("hello");
	})	
	
		</script>
		
				
	</head>
	<body ng="new-test">
		<div >
		<div><a  href="#/hii">Loginssssssssss</a></div>
		
		<div><a  href="#/hello"> Registrationdccccccc</a></div>
		</div>
	</body>
</html>
