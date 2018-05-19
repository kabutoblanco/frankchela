var app = angular.module('appEvents');

app.controller('menuCtrl', function(menus, values) {
    var vm = this;
    menus.all().then(function(data) {
        vm.menus = data.data.products;
    });
});