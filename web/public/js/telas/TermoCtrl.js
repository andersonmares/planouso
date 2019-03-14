/**
 * Created by dimas.filho on 08/03/16.
 */
eventosApp.controller('TermoCtrl',
    ['$scope', '$rootScope', '$location', '$window', '$http', '$timeout', '$templateCache', 'cfpLoadingBar',
        function ($scope, $rootScope, $location, $window, $http, $timeout, $templateCache, cfpLoadingBar) {

            $scope.init = function () {
                $scope.verificaLeituraTermo();
                $scope.verificarSeMarcouCheck();
            };

            $scope.verificaLeituraTermo = function () {
                $('.overflow_termo').bind('scroll', function () {
                    if ($(this).scrollTop() + $(this).innerHeight() >= this.scrollHeight) {
                        $('.checkbox input[type="checkbox"]').prop("checked", true);
                    } else {
                        $('.checkbox input[type="checkbox"]').prop("checked", false);
                    }
                });
            };

            $scope.verificarSeMarcouCheck = function () {
                $('.checkbox input[type="checkbox"]').on('change', function () {
                    if ($(this).is(':checked') === true) {
                        $('.checkbox input[type="checkbox"]').prop("checked", false);
                        eventosApp.bootboxAlertSemOpcaoFechar(msg('A010'), undefined, cfpLoadingBar);
                    }
                });
            };

            $scope.verificaMunicipio = function () {
                $http.get(URL + 'adesao/verificaMunicipioParticipante').success(function (data) {
                    if (data.status === true) {
                        eventosApp.bootboxAlertSemOpcaoFechar(msg('A020'), undefined, cfpLoadingBar);
                    }
                });
            };

            $scope.aderirTermoObesidade = function (id) {
                var params = URL + "termo/obesidade/" + id;
                $window.open(params, "_self");
            };

            $scope.finalizar = function () {
                if ($('.checkbox input[type="checkbox"]').is(':checked') === true) {
                    eventosApp.avancarTela($rootScope, $http, cfpLoadingBar, $('#coAdesao').val(), msg('A011'), 7, 'S');
                } else {
                    eventosApp.bootboxAlertSemOpcaoFechar(msg('A008'), undefined, cfpLoadingBar);
                }
            };

            $scope.aderirObesidade = function () {
                if ($('.checkbox input[type="checkbox"]').is(':checked') === true) {
                    eventosApp.bootboxConfirmSemOpcaoFechar(msg('A021', '<strong>ESTARÁ PARTICIPANDO</strong>'), undefined, cfpLoadingBar, $rootScope, function (result) {
                        if (result === true) {
                            $http.post("adesao/salvar_obesidade", {CO_SEQ_PSE2_ADESAO: $('#coAdesao').val(), ST_OBESIDADE: 'S'}).success(function (data) {
                                if (data.status === true) {
                                    eventosApp.bootboxAlertSemOpcaoFechar(data.msg, data.url, cfpLoadingBar);
                                } else if (data.status == 'session') {
                                    eventosApp.bootboxAlertSemOpcaoFechar(data.msg, data.url, cfpLoadingBar, $rootScope);
                                } else {
                                    eventosApp.bootboxAlertSemOpcaoFechar(data.msg, undefined, cfpLoadingBar, $rootScope);
                                }
                            });
                        }
                    });
                } else {
                    eventosApp.bootboxAlertSemOpcaoFechar(msg('A008'), undefined, cfpLoadingBar);
                }
            };

            $scope.cancelarObesidade = function () {
                eventosApp.bootboxConfirmSemOpcaoFechar(msg('A021', '<strong>NÃO ESTARÁ PARTICIPANDO</strong>'), undefined, cfpLoadingBar, $rootScope, function (result) {
                    if (result === true) {
                        $http.post("adesao/salvar_obesidade", {CO_SEQ_PSE2_ADESAO: $('#coAdesao').val(), ST_OBESIDADE: 'N'}).success(function (data) {
                            if (data.status === true) {
                                eventosApp.bootboxAlertSemOpcaoFechar(data.msg, data.url, cfpLoadingBar);
                            } else if (data.status == 'session') {
                                eventosApp.bootboxAlertSemOpcaoFechar(data.msg, data.url, cfpLoadingBar, $rootScope);
                            } else {
                                eventosApp.bootboxAlertSemOpcaoFechar(data.msg, undefined, cfpLoadingBar, $rootScope);
                            }
                        });
                    }
                });
            };

            $scope.verPainel = function () {
                $window.open("adesao/painel", "_self");
            };

            $scope.verTermo = function (id) {
                var params = URL + "termo/impressao/" + id;
                $window.open(params, "_blank");
            };

            $scope.verTermoObesidade = function (id) {
                var params = URL + "termo/impressao_obesidade/" + id;
                $window.open(params, "_blank");
            };

            $scope.verExtratoEscola = function () {
                var params = URL + "escola/excel/";
                $window.open(params, "_self");
            };

            $scope.verExtratoEquipe = function () {
                var params = URL + "equipe/excel";
                $window.open(params, "_self");
            };

        }
    ]
);