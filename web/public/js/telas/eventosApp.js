/**
 * Created by dimas.filho on 08/03/13.
 */

(function () {
    eventosApp = angular.module('eventosApp', ['ui.sortable', 'ui.bootstrap', 'angular-loading-bar', 'ngAnimate']).run(function ($rootScope, $http, $window) {
        $http.defaults.transformRequest.push(function (data) {
            $rootScope.progress = true;
            return data;
        });
        $http.defaults.transformResponse.push(function (data) {
            $rootScope.progress = false;
            return data;
        });
    });

    eventosApp.isDisabled = false;
    eventosApp.fecharBox = false;

    /**
     * Montando Diretiva que monta o carregando (loader na tela), como um atributo no html
     * @event click()
     * @attr carregando
     * @see <a class="btn btn-success" carregando href=""> </a>
     */
    eventosApp.directive('carregando', function (cfpLoadingBar) {
        return {
            restrict: 'A',
            link    : function (scope, element, attrs) {
                element.bind('click', function () {
                    scope.$eval(attrs.carregando);
                    cfpLoadingBar.start();
                    cfpLoadingBar.inc();
                    cfpLoadingBar.set(0.55);
                });
            }
        };
    });

    eventosApp.directive('convertToNumber', function () {
        return {
            require: 'ngModel',
            link   : function (scope, element, attrs, ngModel) {
                ngModel.$parsers.push(function (val) {
                    return val ? parseInt(val, 10) : null;
                });
                ngModel.$formatters.push(function (val) {
                    return val ? '' + val : null;
                });
            }
        };
    });

    /**
     * Montando Filtro da Grid (inicio e fim)
     */
    eventosApp.filter('startFrom', function () {
        return function (input, start) {
            if (input) {
                start = +start;
                return input.slice(start);
            }
            return [];
        };
    });

    eventosApp.filter('num', function () {
        return function (input) {
            return parseInt(input);
        };
    });

    eventosApp.filter('integer', function () {
        return function (num) {
            return parseInt(num);
        };
    });

    eventosApp.verPainel = function () {
        $scope.isDisabled = true;
        $window.open("sistema/adesao", "_self");
    };
    eventosApp.verTermo = function (id) {
        $scope.isDisabled = true;
        $window.open("adesao/termo/" + id, "_self");
    };

    eventosApp.verExtrato = function (id) {
        $window.open("adesao/extrato/" + id, "_self");
    };

    eventosApp.avancarTela = function (rootScope, http, cfpLoadingBar, id, msg, coEtapa, finalizado) {
        if (finalizado === undefined) {
            finalizado = 'N';
        }
        eventosApp.bootboxConfirmSemOpcaoFechar(msg, undefined, cfpLoadingBar, rootScope, function (result) {
            if (result === true) {
                http.post("adesao/salvar", {CO_SEQ_PSE2_ADESAO: id, CO_PSE2_TIPO_ETAPA: coEtapa, ST_FINALIZADO: finalizado}).success(function (data) {
                    if (data.status === true) {
                        eventosApp.mostrarCarregando(cfpLoadingBar, false);
                        //eventosApp.bootboxAlertSemOpcaoFechar(data.msg, data.url, cfpLoadingBar);
                        window.location.href = data.url;
                        rootScope.progress = true;
                    } else if (data.status == 'session') {
                        eventosApp.bootboxAlertSemOpcaoFechar(data.msg, data.url, cfpLoadingBar, rootScope);
                    } else {
                        eventosApp.bootboxAlertSemOpcaoFechar(data.msg, undefined, cfpLoadingBar, rootScope);
                    }
                });
            }
        });
    };

    eventosApp.bootboxAlertSemOpcaoFechar = function (msg, url, cfpLoadingBar, rootScope, functionCallBack) {
        eventosApp.isDisabled = true;
        if (functionCallBack === undefined) {
            functionCallBack = function () {
                //eventosApp.mostrarCarregando(cfpLoadingBar, true);
                if (url !== undefined) {
                    //eventosApp.mostrarCarregando(cfpLoadingBar, false);
                    //window.location.href = "adesao/" + url;
                    window.location.href = url;
                    rootScope.progress = true;
                }
            };
        }
        bootbox.alert({
            message    : '<span class="text-blue">'+msg+'</span>',
            closeButton: eventosApp.fecharBox,
            onEscape   : eventosApp.fecharBox,
            callback   : functionCallBack
        });
    };

    eventosApp.bootboxConfirmSemOpcaoFechar = function (msg, url, cfpLoadingBar, rootScope, functionCallBack) {
        if (functionCallBack === undefined) {
            functionCallBack = function (result) {
                eventosApp.mostrarCarregando(cfpLoadingBar, true);
                if (result === true) {
                    eventosApp.mostrarCarregando(cfpLoadingBar, false);
                    window.location.href = url;
                    rootScope.progress = true;
                }
            };
        }
        bootbox.confirm({
            message    : '<span class="text-blue">'+msg+'</span>',
            closeButton: false,
            onEscape   : false,
            callback   : functionCallBack
        });
    };

    eventosApp.mostrarCarregando = function (cfpLoadingBar, complete) {
        cfpLoadingBar.start();
        cfpLoadingBar.inc();
        cfpLoadingBar.set(0.33);
        if (complete === true) {
            cfpLoadingBar.complete();
        }
    };

})();
