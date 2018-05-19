var app = angular.module('appEvents');

app.service('places', function($http) {
    var vs = this;
    vs.all = function() {
        return $http({method: 'post', url: 'http://localhost/frankchela/places/export.json',
            data: {
            }
        });
    }
    vs.reservations = function() {
        return $http({method: 'post', url: 'http://localhost/frankchela/places/innerjoin.json',
            data: {
            }
        });
    }
    vs.set = function(vm, value) {
        vm.isDate = vm.date !== null && vm.date !== undefined;
        vm.isTime = vm.time !== null && vm.time !== undefined;
        vm.isSize = vm.size !== null && vm.size !== undefined;
        vm.isType = vm.type !== null && vm.type !== undefined;
        vm.isThematic = vm.thematic !== null && vm.thematic !== undefined;
        if (vm.isDate && vm.isTime && vm.isSize && vm.isType && vm.isThematic) {
            if (vm.isPlace == false) {
                vm.place = undefined;
                vm.isPlace = true;
                vm.agotado = '';
                vm.total -= value.cost;
            } else {
                vm.place = value.id;
                vm.isPlace = false;
                vm.agotado = 'agotado';
                vm.total += value.cost;
            }
        }
    }
});