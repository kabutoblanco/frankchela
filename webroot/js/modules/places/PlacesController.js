var app = angular.module('appEvents');

app.controller('placeCtrl', function(places, values) {
    var vm = this;
    places.all().then(function(data) {
        vm.places = data.data.places;
    });
    places.reservations().then(function(data) {
        vm.reservations = data.data.reservations;
    });
    vm.isReserved = function(value, date) {
        for (i = 0; i < vm.reservations.length; i++){
            reservation = vm.reservations[i];
            if (reservation.active !== null && date !== undefined && date !== null && value == reservation.id) {
                var started = reservation.started.split(' ')[0];
                if (reservation.active == 1 && date == started) {
                    return false;
                }
            }
        }
        return true;
    }
});