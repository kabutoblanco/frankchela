var app = angular.module('appEvents');

app.controller('thematicCtrl', function(thematics, values) {
    var vm = this;
    thematics.all().then(function(data) {
        vm.thematics = data.data.thematics;
    });
});