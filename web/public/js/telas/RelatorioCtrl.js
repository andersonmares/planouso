/**
 * Created by dimas.filho on 12/07/16.
 */
eventosApp.controller('RelatorioCtrl',
    ['$scope', '$rootScope', '$location', '$window', '$http', 'cfpLoadingBar',
        function ($scope, $rootScope, $location, $window, $http, cfpLoadingBar) {
            $scope.gridShow = false;

            $scope.verGestorRepresentantes = function () {
                var caminho = URL + "relatorio/gestoresxlsx";
                eventosApp.mostrarCarregando(cfpLoadingBar, true);
                if ($scope.EstadoSelecionado !== undefined && $scope.EstadoSelecionado.SG_UF !== null) {
                    caminho += "/" + $scope.EstadoSelecionado.SG_UF;
                } else if ($scope.Municipios !== undefined && $scope.EstadoSelecionado.SG_UF !== null) {
                    caminho += "/" + $scope.EstadoSelecionado.SG_UF + "/" + $scope.Municipios.CO_MUNICIPIO_IBGE;
                }
                $window.open(caminho, "_self");
            };

            $scope.verDadosListaNutrisus = function(){
                eventosApp.mostrarCarregando(cfpLoadingBar, true);
                $window.open(URL + "relatorio/nutrisus", "_self");
            };


            $scope.verDadosListaObesidade = function(){
                eventosApp.mostrarCarregando(cfpLoadingBar, true);
                $window.open(URL + "relatorio/obesidade", "_self");
            };

            $scope.verAdesao = function () {
                eventosApp.mostrarCarregando(cfpLoadingBar, true);
                var caminho = URL + "relatorio/adesaoxlsx";
                if ($scope.EstadoSelecionado === undefined || $scope.EstadoSelecionado === null) {
                    bootbox.confirm('<span class="text-red">' +
                        '<i class="fa fa-fw fa-warning "></i> ' +
                        '<strong>ATENÇÃO </strong><br />O download do arquivo excel com TODOS os municípios e TODOS os estados demora em torno de <strong>3 minutos</strong> para ser' +
                        ' gerado em' +
                        ' Excel, se' +
                        ' quiser' +
                        ' reduzir' +
                        ' o tempo pode selecionar' +
                        ' somente o' +
                        ' Estado e/ou Muncípio.</span>' +
                        '<br />Deseja continuar?' +
                        '</span>', function (confirma) {
                        if (confirma === true) {
                            $scope.montarUrlDownloadAdesao(caminho);
                        }
                    });
                } else {
                    $scope.montarUrlDownloadAdesao(caminho);
                }
            };
            $scope.verTermo = function (ibge) {
                var params = URL + "termo/impressao/" + ibge;
                $window.open(params, "_blank");
            };

            $scope.verTermoObesidade = function (ibge) {
                var params = URL + "termo/impressao_obesidade/" + ibge;
                $window.open(params, "_blank");
            };

            $scope.verExtratoEscola = function (ibge) {
                var params = URL + "escola/excel/"+ibge;
                $window.open(params, "_self");
            };

            $scope.verExtratoEquipe = function (ibge) {
                var params = URL + "equipe/excel/"+ibge;
                $window.open(params, "_self");
            };

            $scope.montarUrlDownloadAdesao = function (caminho) {
                if ($scope.EstadoSelecionado !== null && $scope.EstadoSelecionado.SG_UF !== null) {
                    caminho += "/" + $scope.EstadoSelecionado.SG_UF;
                } else if ($scope.EstadoSelecionado !== null && $scope.Municipios !== null && $scope.EstadoSelecionado.SG_UF !== null) {
                    caminho += "/" + $scope.EstadoSelecionado.SG_UF + "/" + $scope.Municipios.CO_MUNICIPIO_IBGE;
                }
                bootbox.alert(msgAlerta('024'));
                $window.open(caminho, "_self");
            };
            $scope.mostrarEstMunicipios = function () {
                $http.get(URL + 'relatorio/ufmunicipio').success(function (data) {
                    $scope.EstadoMunicipio = data;
                    $scope.Estados = data['ESTADOS'];
                    $scope.Municipios = undefined;
                    $scope.$watch('EstadoSelecionado', function (estadonew, estadoold) {
                        $scope.Municipios = undefined;
                        if (estadonew) {
                            $scope.TodosMunicipios = $scope.EstadoMunicipio[estadonew.SG_UF];
                        } else {
                            $scope.TodosMunicipios = undefined;
                        }
                    });
                }).error(function (data, status) {
                    bootbox.alert('[' + status + '] Ocorreu um erro na solicitação!');
                });
            };

            $scope.mostarNomeEstadoMunicipio = function (municipio, estado) {
                if (estado === undefined && municipio === undefined) {
                    return "Todos os Estados e Todos os Municípios";
                } else if (municipio === undefined) {
                    return estado + " - Todos os municípios";
                } else {
                    return "Município " + municipio + " - " + estado;
                }
            };

            $scope.consultar = function (uf, municipio) {
                $scope.gridShow = true;
                var destino = '';
                if (uf !== undefined && municipio !== undefined) {
                     destino = URL + 'relatorio/municipiog/' + uf + '/' + municipio;
                } else if (uf !== undefined && municipio === undefined) {
                     destino = URL + 'relatorio/municipiog/' + uf;
                } else {
                     destino = URL + 'relatorio/municipiog';
                }
                $http.get(destino).success(function (data) {
                    $scope.verRelatorio(data);
                });
            };
            $scope.verRelatorio = function (dataResult) {
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
        }
    ]
);