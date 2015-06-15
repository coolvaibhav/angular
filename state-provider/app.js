var example =angular.module("example",['ui.router']);
example.config(function($stateProvider,$locationProvider,$urlRouterProvider){
    $locationProvider.html5Mode(true);
    
    $stateProvider
        .state("settings",{
        url:"settings",
        templateUrl:"template/settings.html"
    })
    .state("profile",{
        url:"/profile",
        templateUrl:"template/profile.html"
    }).state("account",{
        url:"/account",
        templateUrl:"template/account.html"
    });
    
    $urlRouterProvider.otherwise("/profile");
            
});