/**
 * Created by dimas.filho on 08/03/16.
 */
eventosApp.controller('AdesaoCtrl',
    ['$scope', '$rootScope', '$location', '$window', '$http', '$timeout', '$templateCache', 'cfpLoadingBar',
        function ($scope, $rootScope, $location, $window, $http, $timeout, $templateCache, cfpLoadingBar) {

            $scope.iniciarAdesao = function () {
                eventosApp.mostrarCarregando(cfpLoadingBar);
                $rootScope.isDisabled = true;
                $window.open("adesao/iniciar", "_self");
            };

            $scope.cadastrarRepresentantes = function () {
                eventosApp.mostrarCarregando(cfpLoadingBar);
                $rootScope.isDisabled = true;
                eventosApp.bootboxAlertSemOpcaoFechar(msg('A019'), "representante", cfpLoadingBar, $rootScope);
            };

            $scope.verExtrato = function (id) {
                eventosApp.mostrarCarregando(cfpLoadingBar);
                $rootScope.isDisabled = true;
                $window.open(URL + "termo/" + id, "_self");
            };

            $scope.limparAdesao = function () {
                eventosApp.bootboxConfirmSemOpcaoFechar("Deseja realmente limpar os dados de adesão?", undefined, cfpLoadingBar, $rootScope, function (resposta) {
                    if (resposta === true) {
                        $http.post("adesao/limpar").success(function (data) {
                            if (data.status === true) {
                                eventosApp.bootboxAlertSemOpcaoFechar(data.msg, undefined, cfpLoadingBar, $rootScope, function () {
                                    $window.location.reload();
                                });
                            } else if (data.status == 'semregistro') {
                                eventosApp.bootboxAlertSemOpcaoFechar(data.msg, undefined, cfpLoadingBar, $rootScope);
                            } else if (data.status == 'session') {
                                eventosApp.bootboxAlertSemOpcaoFechar(data.msg, data.url, cfpLoadingBar, $rootScope);
                            } else {
                                eventosApp.bootboxAlertSemOpcaoFechar(data.msg, undefined, cfpLoadingBar, $rootScope, function () {
                                    $window.location.reload();
                                });
                            }
                        });
                    }
                });

            };
        }
    ]
);