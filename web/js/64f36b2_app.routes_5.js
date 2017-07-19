app.config(['$urlRouterProvider', '$urlMatcherFactoryProvider', '$stateProvider','$locationProvider',
    function ($urlRouterProvider, $urlMatcherFactoryProvider, $stateProvider,$locationProvider) {

        /* disable ui-router # in url */
        $locationProvider.html5Mode(true);

        $stateProvider
            .state('home', {
                url: '/app_dev.php/',
                templateUrl: Routing.generate('router_dispatcher',{template:"components:home:home.html.twig"}),
                controller: 'homeController'
            })
            .state('login',{
                url:'/signin',
                controller: ['$window',function ($window) {
                    $window.location="/login"
                }]
            })
            .state('register',{
                url:'/app_dev.php/register',
                templateUrl: Routing.generate('router_dispatcher',{template:"components:register:register.html.twig"}),
                controller: 'registerController'
            })
    }]);