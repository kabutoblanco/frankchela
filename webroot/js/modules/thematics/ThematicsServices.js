var app = angular.module('appEvents');

app.service('thematics', function($http) {
    var vs = this;
    vs.all = function() {
        return $http({method: 'post', url: 'http://localhost/frankchela/thematics/export.json',
            data: {
            }
        });
    }
});