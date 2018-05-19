var app = angular.module('appEvents');

app.service('values', function() {
    var vs = this;
    vs.setSize = function(value) {
        vs.size = value;
    }
    vs.getSize = function() {
        return vs.size;
    }
});