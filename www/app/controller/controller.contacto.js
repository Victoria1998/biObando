angular.module('trapicheBiobando').controller('contactoController'['$scope', 'agregarContacto', 'contactoService', function ($scope, agregarContacto) {
    $scope.dataRegistrarContacto = {
        nombre: '',
        correo: '',
        telefono: '',
        mensaje: ''
    };
    $scope.contactoRegistrado = false;

    $scope.submitAgregarContacto = function () {
        agregarContacto.agregarCont($scope.dataRegistrarContacto).then(function successCallback(response) {
            $scope.contactoRegistrado = false;
            $scope.dataRegistrarContacto = {};
            if (response.data.code == 500) {
            } else {
                $scope.contactoRegistrado = true;
                $scope.dataRegistrarContacto = '';
            }
        }, function errorCallback(response) {
            console.error(response);
        });
    };
}]);

