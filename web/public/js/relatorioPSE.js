/**
 * Created by dimas.filho on 27/04/15.
 */
(function () {

    var myApp = angular.module('relatorioPSE', ['ngLocale', 'ui.bootstrap', 'angular-loading-bar', 'ngAnimate']);
    /**
     * Montando Filtro da Grid (inicio e fim)
     */
    myApp.filter('startFrom', function () {
        return function (input, start) {
            if (input) {
                start = +start;
                return input.slice(start);
            }
            return [];
        };
    });

    myApp.filter('comma2dot', [
        function () { // should be altered to suit your needs
            return function numberWithCommas(x) {
                var parts = x.toString().split(",");
                var number;
                if (parts.length > 1) {
                    number = parts[0] + '.' + parts[1];
                } else {
                    number = parts[0];
                }
                return number;
            };
        }]);

    myApp.filter('onlynumber', [
        function () {
            return function numberWithCommas(x) {
                var parts = x.toString().split(",");
                var number;
                if (parts.length > 1) {
                    number = parseFloat(parts[0] + parts[1]);
                } else {
                    number = parseFloat(parts[0]);
                }
                return number;
            };
        }]);
    myApp.filter('num', function () {
        return function (input) {
            return parseInt(input);
        };
    });

    myApp.directive('convertToNumber', function () {
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
     * Montando Diretiva que monta o carregando (loader na tela), como um atributo no html
     * @event click()
     * @attr carregando
     * @see <a class="btn btn-success" carregando href=""> </a>
     */
    myApp.directive('carregando', function (cfpLoadingBar) {
        return {
            restrict: 'A',
            link    : function (scope, element, attrs) {
                element.bind('click', function () {
                    scope.$eval(attrs.carregando);
                    cfpLoadingBar.start();
                    cfpLoadingBar.inc();
                    cfpLoadingBar.set(0.33);
                });
            }
        };
    });

    /**
     * Montar os eventos do collapse
     */
    myApp.controller('GridCtrl', ['$scope', '$http', '$timeout', 'cfpLoadingBar', function ($scope, $http, $timeout, cfpLoadingBar) {

        $scope.dataGridMunicipio = undefined;
        $scope.tipo = {
            gestor   : $('#GRUPO').val(),
            municipal: 'Relatório Municipal',
        };
        $http.get(URL + 'relatorio/consulta_uf_municipio').success(function (data) {
            $scope.EstadoMunicipio = data;
            $scope.Estados = data['ESTADOS'];
        }).error(function (data, status, headers, config) {
            bootbox.alert('Ocorreu um erro na solicitação!');
        });
        $scope.mostrarHtmlRelatorio = function () {
            if ($scope.dataGridMunicipio === undefined) {
                $http.get(URL + 'relatorio/municipio').success(function (data) {
                    $scope.dataGridMunicipio = data;
                    $scope.verGridMunicipio(data);
                });
            } else {
                $scope.verGridMunicipio($scope.dataGridMunicipio);
                $scope.mostrarCarregando(cfpLoadingBar, true);
            }
        };
        $scope.mostrarGrid = function () {
            $('#gridEquipe').show(300);
        };
        $scope.escondeGrid = function () {
            $('#gridEquipe').hide(300);
        };
        $scope.consultarGrid = function (uf) {
            var destino = '';
            if (uf !== undefined) {
                destino = URL + 'relatorio/municipio/' + uf;
            } else {
                destino = URL + 'relatorio/municipio';
            }
            $http.get(destino).success(function (data) {
                $scope.verGridMunicipio(data);
            });
        };
        $scope.verGridMunicipio = function (dataResult) {
            $scope.searchMunicipal = '';
            $scope.listaMunicipios = dataResult;
            $scope.currentPageMun = 1;
            $scope.entryLimitMun = 50;
            $scope.filteredItemsMun = $scope.listaMunicipios.length;
            $scope.totalItemsMun = $scope.listaMunicipios.length;
            $scope.qtdRegistrosNaPagMun = $scope.entryLimitMun;
            if ($scope.qtdRegistrosNaPagMun >= $scope.listaMunicipios.length) {
                $scope.qtdRegistrosNaPagMun = $scope.listaMunicipios.length;
            }
            $scope.setPageMun = function (pageNo) {
                $scope.currentPageMun = pageNo;
            };
            $scope.filterMun = function () {
                $scope.filteredItemsMun = $scope.filteredMun.length;
                $scope.qtdRegistrosNaPagMun = $scope.filteredItemsMun;
                var numeracao = $scope.entryLimitMun;
                if ($scope.filteredItemsMun >= numeracao) {
                    $scope.qtdRegistrosNaPagMun = numeracao;
                }
            };
            $scope.sort_by_mun = function (predicate) {
                $scope.predicateMun = predicate;
                $scope.reverseMun = !$scope.reverseMun;
            };
        };
        $scope.mostrarCarregando = function (cfpLoadingBar, complete) {
            cfpLoadingBar.start();
            cfpLoadingBar.inc();
            cfpLoadingBar.set(0.33);
            if (complete === true) {
                cfpLoadingBar.complete();
            }
        };

    }]);
})();