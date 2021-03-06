;(function () {
    angular
        .module('app')
        .config(mainConfig);
    // .config(['$mdIconProvider', function ($mdIconProvider) {
    //     $mdIconProvider
    //         .iconSet('social', 'bower_components/material-design-icons/sprites/svg-sprite/svg-sprite-content-symbol.svg', 24)
    //         .defaultIconSet('bower_components/material-design-icons/sprites/svg-sprite/svg-sprite-content-symbol.svg', 24);
    // }]);

    mainConfig.$inject = ['$stateProvider', '$urlRouterProvider'];

    function mainConfig($stateProvider, $urlRouterProvider) {


        $urlRouterProvider.otherwise('/login');

        $stateProvider

            .state('tab', {
                url: '/tab',
                templateUrl: 'templates/tabs/tabs.html',
                controller: 'TabsController'

            })
            .state('login', {
                url: '/login',
                templateUrl: 'templates/login/login.html',
                controller: 'LoginController',
                controllerAs: 'vm'
            })
            .state('tab.user-management', {
                url: '/user-management',
                templateUrl: 'templates/user-management/user-management.html',
                controller: 'UserManagementController'

            })
            .state('tab.survey-management', {
                url: '/survey-management',
                templateUrl: 'templates/survey-management/survey-management.html',
                controller: 'SurveyManagementController'

            })
            .state('tab.settings', {
                url: '/settings',
                templateUrl: 'templates/settings/settings.html',
                controller: 'SettingsController'

            })
    }
})();

