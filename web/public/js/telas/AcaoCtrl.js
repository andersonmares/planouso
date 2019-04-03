/**
 * Created by dimas.filho on 08/03/16.
 */
eventosApp.controller('AcaoCtrl',
    ['$scope', '$rootScope', '$location', '$window', '$http', '$timeout', '$templateCache', 'cfpLoadingBar',
        function ($scope, $rootScope, $location, $window, $http, $timeout, $templateCache, cfpLoadingBar) {

            $scope.init = function () {
                var elem = $("#caracteres");
                $scope.limit();
                $("#outra").limiter(300, elem);
            };
            $scope.avancar = function () {
                $scope.salvar();
            };
            $scope.salvar = function () {
                $http.post("acao/salvar", {DS_OUTRO: $("#outra").val()}).success(function (data) {
                    eventosApp.mostrarCarregando(cfpLoadingBar, true);
                    if (data.status === true) {
                        eventosApp.bootboxAlertSemOpcaoFechar(data.msg, undefined, cfpLoadingBar, $rootScope, function () {
                            eventosApp.avancarTela($rootScope, $http, cfpLoadingBar, $('#coAdesao').val(), msg('A001', 'cadastrar novas ações.'), 7);
                        });
                    } else if (data.status == 'session') {
                        eventosApp.bootboxAlertSemOpcaoFechar(data.msg, data.url, cfpLoadingBar, $rootScope);
                    } else {
                        eventosApp.bootboxAlertSemOpcaoFechar(msg('E001'), undefined, cfpLoadingBar);
                    }
                });
            };

            $scope.limit = function () {
                (function ($) {
                    $.fn.extend({
                        limiter: function (limit, elem) {
                            $(this).on("keyup focus", function () {
                                setCount(this, elem);
                            });
                            function setCount(src, elem) {
                                var chars = src.value.length;
                                if (chars > limit) {
                                    src.value = src.value.substr(0, limit);
                                    chars = limit;
                                }
                                elem.html(limit - chars);
                            }

                            setCount($(this)[0], elem);
                        }
                    });
                })(jQuery);
            };
        }
    ]
);