var app = angular.module('appEvents');

app.controller('eventCtrl', function(places) {
    var vm = this;
    vm.section = 0;
    vm.total = 0;
    vm.isPlace = true;
    vm.agotado = '';
    vm.setDate = function(value) {
        vm.date = value;    
    }
    vm.setTime = function(value) {
        vm.time = value;
    }
    vm.setSize = function(value) {
        vm.size = value;
    }
    vm.setSection = function(value) {
        vm.section = value;
    }
    vm.setPlace = function(value) {
        places.set(vm, value);
    }
    vm.setMenu = function(value) {
        vm.total += value;
    }
    vm.next = function() {
        vm.section++;
    }
    vm.back = function() {
        vm.section--;
    }
});