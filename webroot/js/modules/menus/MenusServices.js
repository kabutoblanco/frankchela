var app = angular.module('appEvents');

app.service('menus', function($http) {
    var vs = this;
    vs.all = function() {
        return $http({method: 'post', url: 'http://localhost/frankchela/products/export.json',
            data: {
            }
        });
    }
});