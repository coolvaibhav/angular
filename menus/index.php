<html>
    <head>
        
        <script src="angular.min.js"></script>
        <script src="angular-ui-router.min.js"></script>
        <script src="app.js"></script>
    </head>
    <base href="http://192.168.2.41/test/">
    <body ng-app="example" ng-controller="example_controller">
        
        <div ng-click="$parent.nav=0">
            First
        </div>
        <div ng-click="$parent.nav=1">
            Second
        </div>
        <div ng-show="$parent.nav===0">
            One Data final description
        </div>
        <div ng-show="$parent.nav===1">
            Two Data final description
        </div>
    </body>
</html>