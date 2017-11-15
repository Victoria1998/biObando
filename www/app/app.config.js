angular.module('trapicheBiobando').config(['$routeProvider', '$httpProvider', function config($routeProvider, $httpProvider) {
        $httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded; charset=UTF-8';
        $routeProvider.
                when('/', {
                    controller: 'inicioController',
                    templateUrl: 'app/template/inicio.html'
                }).
                when('/contacto', {
                    controller: 'contactoController',
                    templateUrl: 'app/template/contacto.html'
                }).
                when('/video', {
                    controller: 'videoController',
                    templateUrl: 'app/template/video.html'
                }).
                when('/nosotros', {
                    controller: 'nosotrosController',
                    templateUrl: 'app/template/nosotros.html'
                }).
                when('/producto', {
                    controller: 'productoController',
                    templateUrl: 'app/template/producto.html'
                }).
                when('/mision', {
                    controller: 'misionController',
                    templateUrl: 'app/template/mision.html'
                }).
                when('/vision', {
                    controller: 'visionController',
                    templateUrl: 'app/template/vision.html'
                }).
                when('/politicalidad', {
                    controller: 'politicalidadController',
                    templateUrl: 'app/template/politicalidad.html'
                }).
                when('/objetivoscalidad', {
                    controller: 'objetivoscalidController',
                    templateUrl: 'app/template/objetivoscalidad.html'
                }).
                when('/filosofiaempresarial', {
                    controller: 'filosofiaempController',
                    templateUrl: 'app/template/filosofiaempresarial.html'
                }).
                otherwise('/');
    }
]);