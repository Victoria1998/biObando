angular.module('trapicheBiobando').service('contactoService', [function () {
        this.agregarCont = function (data) {
            return $http.post('http://localhost/biobando/www/server.php/agregarContacto', $.param(data));
        };
    }]);