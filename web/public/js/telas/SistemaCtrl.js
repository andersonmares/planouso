/**
 * Created by dimas.filho on 08/03/16.
 */
eventosApp.controller('SistemaCtrl',
    ['$scope', '$rootScope', '$location', '$window', '$http', '$timeout', '$templateCache', 'cfpLoadingBar',
        function ($scope, $rootScope, $location, $window, $http, $timeout, $templateCache, cfpLoadingBar) {
            $scope.selecionar_perfil = function (fechar) {
                if (fechar === true) {
                    eventosApp.fecharBox = fechar;
                } else {
                    $('.sidebar, .content, .content-header').hide();
                    $('.content-wrapper').css('min-height', '0px');
                }
                eventosApp.mostrarCarregando(cfpLoadingBar);
                $http.get(URL + 'login/acesso').success(function (data) {
                    eventosApp.bootboxAlertSemOpcaoFechar($scope.htmlPerfil(data.data, data.url), undefined, cfpLoadingBar, $rootScope, function (result) {
                        if ($('.perfil').val() !== '') {
                            eventosApp.mostrarCarregando(cfpLoadingBar, false);
                            $('.sidebar, .content, .content-header').hide();
                            $('.content-wrapper').css('min-height', '0px');
                            window.location.href = $('.perfil').val();
                        } else if (fechar !== true) {
                            bootbox.alert(msg('A023'), function () {
                                $scope.selecionar_perfil();
                            });
                        }
                    });
                });
            };

            $scope.htmlPerfil = function (data, url) {
                var html = '<h3>Selecione o perfil de acesso</h3><div class="form-group has-feedback">';
                html += '<div class="form-group">';
                html += '<select required class="form-control perfil" name="perfil"><option value="">- SELECIONE -</option>';
                angular.forEach(data, function (value, key) {
                    var caminho = URLBASE + "autenticacao/login/verificaracesso/p:" + value['CO_PROGRAMA'] + "/pm:" + value['CO_SEQ_PROGRAMA_MODULO'] + "/g:" + value['CO_GRUPO'] + "/ibge:" + value['CO_MUNICIPIO_IBGE'] + "/pf:" + value['CO_PESSOA_FISICA'] + "/pj:" + value['CO_PESSOA_JURIDICA'] + "/url:" + url;
                    html += '<option value="' + caminho + '">' + value['DS_GRUPO'] + ' | ' + value['SG_UF'] + ' - ' + value['NO_MUNICIPIO_ACENTUADO'] + '</option>';
                });
                html += '</select>';
                html += '</div>';
                html += '</div>';
                return html;
            };

        }
    ]
);