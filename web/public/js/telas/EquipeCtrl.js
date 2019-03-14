/**
 * Created by dimas.filho on 08/03/16.
 */
eventosApp.controller('EquipeCtrl',
    ['$scope', '$rootScope', '$location', '$window', '$http', '$timeout', '$templateCache', 'cfpLoadingBar',
        function ($scope, $rootScope, $location, $window, $http, $timeout, $templateCache, cfpLoadingBar) {
            var campoEquipes = $('.equipes').parent().html();
            var htmlGerenciarEquipeSelecionar = 'Equipe (INE) - Competência [' + $('#nuComp').val() + ']: <br />' + campoEquipes;
            var htmlGerenciarEquipeLista = $('#boxEquipesSelecionadas').html();

            var removeDuplicates = function (arr) {
                var obj = {};
                var arr2 = [];
                for (var i = 0; i < arr.length; i++) {
                    if (arr[i] !== undefined) {
                        if (!(arr[i].NU_INE_EQUIPE in obj)) {
                            arr2.push(arr[i]);
                            obj[arr[i].NU_INE_EQUIPE] = true;
                        }
                    }
                }
                if (arr2.length > 0) {
                    $('#desvEquipe').show();
                } else {
                    $('#desvEquipe').hide();
                }
                return arr2;
            };

            var convArrToObj = function (array) {
                var thisEleObj = {};
                if (typeof array == "object") {
                    for (var i in array) {
                        var thisEle = convArrToObj(array[i]);
                        thisEleObj[i] = thisEle;
                    }
                } else {
                    thisEleObj = array;
                }
                return thisEleObj;
            };

            var buttonsEquipesHtml = function () {
                $scope.arrEquipe = removeDuplicates($scope.arrEquipe);
                var htmlEq = '';
                $.each($scope.arrEquipe, function (ind, equipe) {
                    htmlEq += '<button data-widget="remove" class="btn btn-box-tool badge bg-blue removeEquipe" type="button" nameeq="' + equipe.NU_INE_EQUIPE + '">' + equipe.NU_INE_EQUIPE + ' - ' + equipe.NO_EQUIPE + '<i class="fa fa-times"></i></button>&nbsp;';
                });
                $('#equipeSel').html(htmlEq);
                removeEquipe();
            };

            var addEquipe = function () {
                if ($scope.arrEquipe.length > 0) {
                    buttonsEquipesHtml();
                }
                $('.equipes').on('change', function () {
                    if ($(this).val() !== '') {
                        var id = $(this).attr('id');
                        var cods = $('#' + id + '>option:selected').val().split('|');
                        var arrInes = {
                            "CO_UNIDADE"   : cods[0],
                            "NU_INE_EQUIPE": cods[1],
                            "NO_EQUIPE"    : cods[2],
                            "NU_COMP"      : cods[3]
                        };
                        $scope.arrEquipe.push(arrInes);
                        buttonsEquipesHtml();
                        removeEquipe();
                    }
                });
            };

            var removeEquipe = function () {
                $('.removeEquipe').on('click', function () {
                    var nomeEq = $(this).attr('nameeq');
                    $(this).remove();
                    $.each($scope.arrEquipe, function (ind, equipe) {
                        if (nomeEq == equipe.NU_INE_EQUIPE) {
                            delete $scope.arrEquipe[ind];
                            $scope.arrEquipe = removeDuplicates($scope.arrEquipe);
                        }
                    });
                });
            };

            $scope.arrEquipesEscola = [];

            $scope.avancar = function () {
                if ($scope.list.length == $scope.consultaTotalEscolas()) {
                    eventosApp.avancarTela($rootScope, $http, cfpLoadingBar, $('#coAdesao').val(), msg('A007'), 5);
                } else {
                    eventosApp.bootboxAlertSemOpcaoFechar(msg('A006'), undefined, cfpLoadingBar);
                }
            };

            $scope.avancarExtrato = function () {
                if ($scope.ST_FINALIZA_ESCOLA === true) {
                    eventosApp.avancarTela($rootScope, $http, cfpLoadingBar, $('#coAdesao').val(), msg('A001', 'o vínculo de equipes posteriormente.'), 6);
                } else {
                    //bootbox.alert(msg('A008'));
                    eventosApp.bootboxAlertSemOpcaoFechar(msg('A008'), undefined, cfpLoadingBar);
                    return false;
                }
            };

            $scope.voltar = function () {
                eventosApp.mostrarCarregando(cfpLoadingBar, false);
                window.location.href = "equipe/" + $('#coAdesao').val();
            };

            $scope.gerenciar = function (inep, nomeEscola) {
                eventosApp.mostrarCarregando(cfpLoadingBar, true);
                $http.get(URL + 'equipe/equipeselecionada/' + inep).success(function (data) {
                    $scope.boxGerenciarEquipe(inep, nomeEscola, data.data);
                });
            };

            $scope.boxGerenciarEquipe = function (inep, nomeEscola, data) {
                $scope.arrEquipe = [];
                $scope.qtdEquipesRegistradas = 0;
                $.each(data, function (i, v) {
                    $scope.qtdEquipesRegistradas++;
                    $scope.arrEquipe.push(v);
                });
                bootbox.dialog({
                    message: htmlGerenciarEquipeSelecionar + htmlGerenciarEquipeLista,
                    title  : inep + " - " + nomeEscola + " - Gerenciar Equipes",
                    buttons: {
                        cancelar: {
                            label    : "Voltar",
                            className: "btn-default"
                        },
                        incluir : {
                            label    : "Salvar",
                            className: "btn-primary",
                            callback : function () {
                                $scope.salvarEquipesNaEscola(inep);
                            }
                        }
                    }
                });
                $('#boxEquipes .equipes').remove();
                $('#boxEquipesSelecionadas').remove();
                addEquipe();
            };

            $scope.consultaInepQtdEquipe = function (inep, qtdVinculadas) {
                if (qtdVinculadas > 0 && $scope.arrEquipesEscola[inep] === undefined) {
                    return qtdVinculadas;
                }
                if ($scope.arrEquipesEscola[inep] !== undefined) {
                    return $scope.arrEquipesEscola[inep].qtd;
                }
                return 0;
            };

            $scope.consultaTotalEscolas = function () {
                if ($rootScope.totalEscolasVinculadas === undefined) {
                    $rootScope.totalEscolasVinculadas = 0;
                }
                return $rootScope.totalEscolasVinculadas;
            };

            $scope.salvarEquipesNaEscola = function (inep) {
                if ($scope.verificaEquipeSelecionada()) {
                    $scope.arrEquipesEscola[inep] = {
                        inep   : inep,
                        equipes: $scope.arrEquipe,
                        qtd    : $scope.arrEquipe.length
                    };
                    $http.post("equipe/salvar",
                        $scope.arrEquipesEscola[inep]
                    ).success(function (data) {
                        eventosApp.mostrarCarregando(cfpLoadingBar, true);
                        if (data.status === true) {
                            if ($scope.arrEquipesEscola[inep].qtd > 0 && $scope.qtdEquipesRegistradas === 0 && $rootScope.totalEscolasVinculadas < $scope.dataGrid.length) {
                                $rootScope.totalEscolasVinculadas++;
                                $scope.contarEquipesSelecionadas();
                            }
                        } else if (data.status == 'session') {
                            eventosApp.bootboxAlertSemOpcaoFechar(data.msg, data.url, cfpLoadingBar, $rootScope);
                        } else {
                            eventosApp.bootboxAlertSemOpcaoFechar(msg('E001'), undefined, cfpLoadingBar);
                        }
                    });
                }
            };

            $scope.contarEquipesSelecionadas = function () {
                $http.get("equipe/selecionadas").success(function (data) {
                    if (data.status === true) {
                        $rootScope.totalEquipesSelecionadas = data.contador;
                    } else if (data.status == 'session') {
                        eventosApp.bootboxAlertSemOpcaoFechar(data.msg, data.url, cfpLoadingBar, $rootScope);
                    } else {
                        eventosApp.bootboxAlertSemOpcaoFechar(msg('E001'), undefined, cfpLoadingBar);
                    }
                });
            };


            $scope.verificaEquipeSelecionada = function () {
                if ($scope.arrEquipe.length === 0) {
                    eventosApp.bootboxAlertSemOpcaoFechar(msg('A009'), undefined, cfpLoadingBar);
                } else {
                    return true;
                }
            };

            $scope.verGrid = function (dataResult) {
                $scope.search = '';
                $scope.list = dataResult;
                $scope.currentPage = 1;
                $scope.entryLimit = 50;
                $scope.filteredItems = $scope.list.length;
                $scope.totalItems = $scope.list.length;
                $scope.qtdRegistrosNaPag = $scope.entryLimit;
                if ($scope.qtdRegistrosNaPag >= $scope.list.length) {
                    $scope.qtdRegistrosNaPag = $scope.list.length;
                }
                $scope.setPage = function (pageNo) {
                    $scope.currentPage = pageNo;
                };
                $scope.filter = function () {
                    $scope.filteredItems = $scope.filtered.length;
                    if ($scope.filtered.length >= $scope.entryLimit) {
                        $scope.qtdRegistrosNaPag = $scope.entryLimit;
                    } else {
                        $scope.qtdRegistrosNaPag = $scope.filtered.length;
                    }
                };
                $scope.sort_by = function (predicate) {
                    $scope.predicate = predicate;
                    $scope.reverse = !$scope.reverse;
                };
            };

            $scope.mostrarGridEscolasSelecionadas = function () {
                $scope.contarEquipesSelecionadas();
                if ($scope.dataGrid === undefined) {
                    eventosApp.mostrarCarregando(cfpLoadingBar, true);
                    $http.get(URL + 'escola/selecionadas').success(function (data) {
                        $scope.dataGrid = data.data;
                        $rootScope.totalEscolasVinculadas = 0;
                        $rootScope.totalEducandosPactuados = 0;
                        $rootScope.totalCreches = 0;
                        $.each($scope.dataGrid, function (i, v) {
                            $rootScope.totalEducandosPactuados += parseInt(v.QTD_EDUCANDOS);
                            $rootScope.totalCreches += (v.ST_CRECHE == 'S' || v.ST_PREESCOLA == 'S') ? 1 : 0;
                            if (v.QT_VINCULO_EQUIPE > 0) {
                                $rootScope.totalEscolasVinculadas++;
                            }
                        });
                        $scope.verGridEscolasSelecionadas(data.data);
                    });
                } else {
                    $scope.verGridEscolasSelecionadas($scope.dataGrid);
                    eventosApp.mostrarCarregando(cfpLoadingBar, true);
                }

            };

            $scope.verGridEscolasSelecionadas = function (dataResult) {
                $scope.search = '';
                $scope.list = dataResult;
                $scope.currentPage = 1;
                $scope.entryLimit = 50;
                $scope.filteredItems = $scope.list.length;
                $scope.totalItems = $scope.list.length;
                $scope.qtdRegistrosNaPag = $scope.entryLimit;
                if ($scope.qtdRegistrosNaPag >= $scope.list.length) {
                    $scope.qtdRegistrosNaPag = $scope.list.length;
                }
                $scope.setPage = function (pageNo) {
                    $scope.currentPage = pageNo;
                };
                $scope.filter = function () {
                    $scope.filteredItems = $scope.filtered.length;
                    if ($scope.filtered.length >= $scope.entryLimit) {
                        $scope.qtdRegistrosNaPag = $scope.entryLimit;
                    } else {
                        $scope.qtdRegistrosNaPag = $scope.filtered.length;
                    }
                };
                $scope.sort_by = function (predicate) {
                    $scope.predicate = predicate;
                    $scope.reverse = !$scope.reverse;
                };
            };
        }]
);