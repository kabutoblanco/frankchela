var app = angular.module('appEvents');

app.service('eventTypes', function($http) {
    var vs = this;
    vs.all = function() {
        return $http({method: 'post', url: 'http://localhost/frankchela/eventTypes/export.json',
            data: {
            }
        });
    }
});