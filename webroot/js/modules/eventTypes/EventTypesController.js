var app = angular.module('appEvents');

app.controller('eventTypeCtrl', function(eventTypes) {
    var vm = this;
    eventTypes.all().then(function(data) {
        vm.eventTypes = data.data.eventTypes;
    });
});