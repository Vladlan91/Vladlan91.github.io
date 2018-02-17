angular.module('RoutingApp', ['ngRoute'])
  .config( ['$routeProvider', function($routeProvider) {
  	
  $routeProvider
  .when('/teaching', {
    templateUrl: 'teaching.html'
  })
  .when('/teaching-one', {
    templateUrl: 'teaching-one.html'
  })
  .when('/teaching-two', {
    templateUrl: 'teaching-two.html'
  })
  .when('/teaching-three', {
    templateUrl: 'teaching-three.html'
  })
  .when('/news', {
    templateUrl: 'news.html'
  })
   .when('/new', {
    templateUrl: 'new.html'
  })
  .when('/blog', {
    templateUrl: 'blog.html'
  })
  .when('/consulting', {
    templateUrl: 'consulting.html'
  })
  .when('/automation', {
    templateUrl: 'automation.html'
  })
  .when('/', {
    templateUrl: 'home-page.html'
  })
  .otherwise({
    redirectTo: '/'
  });
}]);