var app = angular.module('appEvents');

app.directive('place', function() {
  return {
    restrict: 'E',
    templateUrl: '../js/modules/places/PlacesComponent.html'
  }
});

app.directive('menu', function() {
  return {
    restrict: 'E',
    templateUrl: '../js/modules/menus/MenusComponent.html'
  }
});

app.directive('utensils', function() {
  return {
    restrict: 'E',
    templateUrl: '../js/modules/menus/UtensilsComponent.html'
  }
});

app.directive('dates', function() {
  return {
    restrict: 'E',
    templateUrl: '../js/modules/events/DatesComponent.html'
  }
});