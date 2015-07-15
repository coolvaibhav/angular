<!doctype html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  
  <title>Angular file upload sample</title>

  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<script>
angular.module("myapp",[])
        .controller("test_ctr",function($scope,$http){
            {{$scope.name="ss"}}
    
    $scope.uploadFile = function(files) {
    var fd = new FormData();
    
    fd.append("file", files[0]);

    $http.post("upload.php", fd, {
        withCredentials: true,
        headers: {'Content-Type': undefined },
        transformRequest: angular.identity
    }).success(function(data) {
    alert(data);
  });

};
        });
</script>
<div ng-app="myapp" ng-controller="test_ctr">
<form >
    <input type="file" name="file" onchange="angular.element(this).scope().uploadFile(this.files)"/>
    {{name}}
</form>
 </div>
</body>
</html>
