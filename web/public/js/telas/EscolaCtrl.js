/**
 * Created by dimas.filho on 08/03/16.
 */
eventosApp.controller('EscolaCtrl',
    ['$scope', '$rootScope', '$location', '$window', '$http', '$timeout', '$templateCache', 'cfpLoadingBar',
        function ($scope, $rootScope, $location, $window, $http, $timeout, $templateCache, cfpLoadingBar) {

            $rootScope.totalEducandos = 0;

            $scope.avancar = function () {
                var funcaoAvancar = function () {
                    eventosApp.avancarTela($rootScope, $http, cfpLoadingBar, $('#coAdesao').val(), msg('A002'), 3);
                };
                $scope.salvar(funcaoAvancar);
            };
            $scope.avancarExtrato = function () {
                if ($scope.ST_FINALIZA_ESCOLA === true) {
                    eventosApp.avancarTela($rootScope, $http, cfpLoadingBar, $('#coAdesao').val(), msg('A001', 'a seleção de escolas posteriormente.'), 4);
                } else {
                    eventosApp.bootboxAlertSemOpcaoFechar(msg('A008'), undefined, cfpLoadingBar);
                    return false;
                }
            };
            $scope.voltar = function () {
                eventosApp.mostrarCarregando(cfpLoadingBar, false);
                window.location.href = "escola/" + $('#coAdesao').val();
            };

            $scope.salvar = function (avancarTela) {
                var count = 0;
                angular.forEach($scope.dataGridP, function (item) {
                    if (item['ST_ESCOLA'] === true) {
                        if (item.ST_CRECHE == 'S' || item.ST_PREESCOLA == 'S') {
                            count++;
                        }
                    }
                });
                eventosApp.mostrarCarregando(cfpLoadingBar, true);
                if ($scope.percentualEscolaP() < 50) {
                    eventosApp.bootboxAlertSemOpcaoFechar(msg('A004'), undefined, cfpLoadingBar);
                } else if (count === 0) {
                    eventosApp.bootboxAlertSemOpcaoFechar(msg('A005'), undefined, cfpLoadingBar);
                } else {
                    var dados = $scope.dataGridP.concat($scope.dataGrid);
                    angular.forEach(dados, function (escolasSalvar) {
                        if (escolasSalvar['ST_ESCOLA'] === true) {
                            escolasSalvar.ST_REGISTRO_ATIVO = 'S';
                        }
                        if (escolasSalvar['ST_ESCOLA'] === false) {
                            escolasSalvar.ST_REGISTRO_ATIVO = 'N';
                        }
                    });
                    bootbox.alert('<span class="text-blue"><i class="fa fa-spin fa-refresh"></i> &nbsp;<strong>Por favor aguarde, o sistema está salvando dados das escolas... </strong>' +
                        '<br /><small>Essa ação de salvar pode demorar mais de 1 minuto.</small></span>');
                    $http.post("escola/salvar", dados).success(function (data) {
                        if (data.status === true) {
                            bootbox.hideAll();
                            eventosApp.bootboxAlertSemOpcaoFechar(data.msg, undefined, cfpLoadingBar, $rootScope, avancarTela);
                        } else if (data.status == 'session') {
                            bootbox.hideAll();
                            eventosApp.bootboxAlertSemOpcaoFechar(data.msg, data.url, cfpLoadingBar, $rootScope);
                        } else {
                            bootbox.hideAll();
                            eventosApp.bootboxAlertSemOpcaoFechar(data.msg, undefined, cfpLoadingBar, $rootScope);
                        }
                    });
                }
            };

            $scope.totalEscolasSelecionadas = function () {
                var count1 = $scope.totalCheckedP();
                var count2 = $scope.totalChecked();
                var total = 0;
                total = (count1 + count2);
                return total;
            };

            $scope.percentualEscolaP = function () {
                var perc = 0;
                var count1 = $scope.totalCheckedP();
                var count2 = $scope.totalChecked();
                perc = (count1 * 100) / (count1 + count2);
                if (!isNaN(perc)) {
                    return Number((perc).toFixed(1));
                } else {
                    return 0;
                }
            };

            $scope.totalCheckedP = function () {
                var count = 0;
                angular.forEach($scope.dataGridP, function (item) {
                    if (item['ST_ESCOLA'] === true) {
                        count++;
                    }
                });
                return count;
            };

            $scope.checkAllP = function () {
                if ($scope.selectedAllP) {
                    $scope.selectedAllP = true;
                } else {
                    $scope.selectedAllP = false;
                }
                angular.forEach($scope.dataGridP, function (item) {
                    item['ST_ESCOLA'] = $scope.selectedAllP;
                });

            };

            $scope.salvarNutrisus = function (stAdesao) {
                $http.get(URL + 'escola/salvar_nutrisus/' + stAdesao).success(function (data) {
                    if (stAdesao == 'S') {
                        $rootScope.participaNutrisus = 'Você escolheu ADERIR à estratégia NutriSuS';
                    } else {
                        $rootScope.participaNutrisus = 'Você escolheu NÃO ADERIR à estratégia NutriSuS';
                    }
                    if (data.status === true) {
                        eventosApp.bootboxAlertSemOpcaoFechar(msgSucesso('001'), undefined, cfpLoadingBar);
                    } else {
                        $rootScope.participaNutrisus = '';
                        eventosApp.bootboxAlertSemOpcaoFechar(msgErro('001'), undefined, cfpLoadingBar);
                    }
                });
            };

            $scope.verificarNutrisus = function () {
                $http.get(URL + 'escola/nutrisus').success(function (data) {
                    $rootScope.participaNutrisus = 'Seu município pode participar da estratégia NutriSuS';
                    if (data.aderiu === false && data.podeparticipar == 'N') {
                        $rootScope.participaNutrisus = '';
                    }else if (data.aderiu === true && data.podeparticipar == 'S' && data.stAdesao == 'S' ) {
                        $rootScope.participaNutrisus = 'Você escolheu ADERIR à estratégia NutriSuS';
                    }else if (data.aderiu === true && data.podeparticipar == 'S' && data.stAdesao == 'N') {
                        $rootScope.participaNutrisus = 'Você escolheu NÃO ADERIR à estratégia NutriSuS';
                    }
                    if (data.equipes > 0 && data.aderiu === false && data.podeparticipar == 'S') {
                        msgN = '<h3 class="alert alert-warning">Seu município fez parte do NutriSUS em 2014 e em 2015 e agora pode reafirmar a participação a partir de' +
                            ' 2017!</h3><br/>';
                        msgN += '<h4><strong>Atenção, antes de aderir ao NutriSUS, leia atentamente as informações abaixo:</strong></h4><div style="overflow-y: scroll; max-height: 200px; border: 1px solid #ccc; padding:10px">';
                        msgN += '<p><strong>Relembrando o NutriSUS:</strong></p>';
                        msgN += '<p>Visando potencializar o pleno desenvolvimento infantil, a prevenção e o controle das deficiências nutricionais, o Ministério da Saúde, em parceria com o Ministério da Educação, lançou, em 2014, a Estratégia de Fortificação da Alimentação Infantil com Micronutrientes (vitaminas e minerais) em Pó – NutriSUS. A ação está inserida no Programa Saúde na Escola (PSE) e sua adesão ocorre juntamente com a adesão do PSE.</p>';
                        msgN += '<p>A estratégia consiste na adição de um sachê de 1g, contendo uma mistura de vitaminas e minerais em pó, em uma das refeições oferecidas diariamente às crianças das creches aderidas ao NutriSUS. A criança deve consumir um sachê por dia, durante 60 dias, seguido por uma pausa da administração de três a quatro meses. O foco da fortificação são as crianças na faixa etária entre 06 e 48 meses, não havendo contra indicações para crianças de até cinco anos.</p>';
                        msgN += '<p>Estudos relevantes destacaram que práticas alimentares inadequadas nos primeiros anos de vida estão diretamente relacionadas à morbidade de crianças, representada por doenças infecciosas, afecções respiratórias, desnutrição, excesso de peso e carências específicas de micronutrientes. Entre as deficiências nutricionais, a anemia é apontada como a mais comum e como um dos determinantes que prejudicam o desenvolvimento das crianças. Diante deste cenário, menores de cinco anos de idade merecem especial atenção, devido ao alto requerimento de ferro, dificilmente atingido pela alimentação complementar.</p>';
                        msgN += '<p>Na primeira adesão ao NutriSUS, em 2014, 2.263 municípios, com 11.222 creches e 544.708 crianças, manifestaram interesse em participar da estratégia. Em função do número limitado de sachês, foram contemplados 1.717 municípios, com 6.864 creches e 330.376 crianças.</p>';
                        msgN += '<p><strong>Como renovar a adesão ao <em>NutriSUS</em>?</strong></p>';
                        msgN += '<p>Para essa adesão, somente os 1.717 municípios que já integram a estratégia poderão renovar sua participação. Na página inicial da adesão, encontram-se os relatórios que informam quais foram os municípios e as creches que já participam do NutriSUS. Consulte esses dados para planejar sua repactuação. Não se esqueça de incluir a Secretaria Municipal de Saúde, a Secretaria Municipal de Educação, a Alimentação Escolar, a Assistência Farmacêutica, e outros parceiros para planejar a adesão e a execução do NutriSUS no seu município.</p>';
                        msgN += '<p>Ao responder que deseja repactuar o NutriSUS, todas as creches que o município selecionar serão elegíveis para a estratégia. Caso a quantidade de crianças e creches repactuadas ultrapasse a quantidade de sachês disponíveis, será dada prioridade às creches que já participam do NutriSUS.</p></div>';
                        msgN += '<br/><h4 class="well" style="line-height: 27px;"><strong>O município deseja repactuar a participação na Estratégia de Fortificação da Alimentação Infantil com Micronutrientes (vitaminas e minerais) em Pó – NutriSUS?</strong></h4>';
                        bootbox.dialog({
                            message    : msgN,
                            closeButton: false,
                            title      : "<strong>NutriSUS – Adesão 2016</strong>",
                            buttons    : {
                                danger : {
                                    label    : "NÃO ADERIR",
                                    className: "btn-danger",
                                    callback : function () {
                                        eventosApp.bootboxConfirmSemOpcaoFechar(msgAlerta('022'), undefined, cfpLoadingBar, $rootScope, function (data) {
                                            if (data === true) {
                                                $scope.salvarNutrisus('N');
                                            } else {
                                                $scope.verificarNutrisus();
                                            }
                                        });
                                    }
                                },
                                success: {
                                    label    : "ADERIR!",
                                    className: "btn-success",
                                    callback : function () {
                                        eventosApp.bootboxConfirmSemOpcaoFechar(msgAlerta('022'), undefined, cfpLoadingBar, $rootScope, function (data) {
                                            if (data === true) {
                                                $scope.salvarNutrisus('S');
                                            } else {
                                                $scope.verificarNutrisus();
                                            }
                                        });
                                    }
                                }
                            }
                        });
                    } else {
                        return false;
                    }
                });
            };

            $scope.mostrarGridPrioritaria = function () {
                $scope.verificarNutrisus();
                $scope.selectedAllP = true;
                if ($scope.dataGridP === undefined) {
                    eventosApp.mostrarCarregando(cfpLoadingBar, true);
                    $http.get(URL + 'escola/prioritarias').success(function (data) {
                        $scope.dataGridP = data.data;
                        if (data.check === false) {
                            $scope.checkAllP();
                        } else {
                            $scope.selectedAllP = false;
                        }

                        var dados = data.data;
                        if (dados.length >= 1) {
                            angular.forEach(dados, function (item) {
                                $rootScope.totalEducandos += parseInt(item.QTD_EDUCANDOS);
                                if (item['ST_ESCOLA'] === 'S') {
                                    item.ST_ESCOLA = true;
                                } else {
                                    item.ST_ESCOLA = false;
                                }
                            });
                        }
                        $scope.verGridPrioritaria(dados);
                    });
                } else {
                    $scope.verGridPrioritaria($scope.dataGridP);
                    $scope.checkAllP();
                    eventosApp.mostrarCarregando(cfpLoadingBar, true);
                }

            };
            $scope.verGridPrioritaria = function (dataResultP) {
                $scope.searchP = '';
                $scope.listP = dataResultP;
                $scope.currentPageP = 1;
                $scope.entryLimitP = 50;
                $scope.filteredItemsP = $scope.listP.length;
                $scope.totalItemsP = $scope.listP.length;
                $scope.qtdRegistrosNaPagP = $scope.entryLimitP;
                if ($scope.qtdRegistrosNaPagP >= $scope.listP.length) {
                    $scope.qtdRegistrosNaPagP = $scope.listP.length;
                }
                $scope.setPageP = function (pageNo) {
                    $scope.currentPageP = pageNo;
                };
                $scope.filterP = function () {
                    $scope.filteredItemsP = $scope.filteredP.length;
                    if ($scope.filteredP.length >= $scope.entryLimitP) {
                        $scope.qtdRegistrosNaPagP = $scope.entryLimitP;
                    } else {
                        $scope.qtdRegistrosNaPagP = $scope.filteredP.length;
                    }
                };
                $scope.sort_byP = function (predicate) {
                    $scope.predicateP = predicate;
                    $scope.reverseP = !$scope.reverseP;
                };
            };

            $scope.totalChecked = function () {
                var count = 0;
                angular.forEach($scope.dataGrid, function (item) {
                    if (item['ST_ESCOLA'] === true) {
                        count++;
                    }
                });
                return count;
            };

            $scope.checkAll = function () {
                if ($scope.selectedAll) {
                    $scope.selectedAll = true;
                } else {
                    $scope.selectedAll = false;
                }
                angular.forEach($scope.dataGrid, function (item) {
                    item['ST_ESCOLA'] = $scope.selectedAll;
                });

            };
            $scope.mostrarGridNPrioritaria = function () {
                $scope.selectedAll = true;
                if ($scope.dataGrid === undefined) {
                    eventosApp.mostrarCarregando(cfpLoadingBar, true);
                    $http.get(URL + 'escola/naoprioritarias').success(function (data) {
                        $scope.dataGrid = data.data;
                        if (data.check === false) {
                            $scope.checkAll();
                        } else {
                            $scope.selectedAll = false;
                        }
                        var dados = data.data;
                        if (dados.length >= 1) {
                            angular.forEach(dados, function (item) {
                                $rootScope.totalEducandos += parseInt(item.QTD_EDUCANDOS);
                                if (item['ST_ESCOLA'] == 'S') {
                                    item.ST_ESCOLA = true;
                                } else {
                                    item.ST_ESCOLA = false;
                                }
                            });
                        }
                        $scope.verGridEscolaNPrioritaria(dados);
                    });
                } else {
                    $scope.verGridEscolaNPrioritaria($scope.dataGrid);
                    $scope.checkAll();
                    eventosApp.mostrarCarregando(cfpLoadingBar, true);
                }

            };

            $scope.verGridEscolaNPrioritaria = function (dataResult) {
                $scope.search = '';
                $scope.listEscolas = dataResult;
                $scope.currentPage = 1;
                $scope.entryLimit = 50;
                $scope.filteredItems = $scope.listEscolas.length;
                $scope.totalItems = $scope.listEscolas.length;
                $scope.qtdRegistrosNaPag = $scope.entryLimit;
                if ($scope.qtdRegistrosNaPag >= $scope.listEscolas.length) {
                    $scope.qtdRegistrosNaPag = $scope.listEscolas.length;
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
                if ($scope.dataGrid === undefined) {
                    eventosApp.mostrarCarregando(cfpLoadingBar, true);
                    $http.get(URL + 'escola/selecionadas').success(function (data) {
                        $scope.dataGrid = data.data;
                        $rootScope.totalEducandosPactuados = 0;
                        $rootScope.totalCreches = 0;
                        $.each($scope.dataGrid, function (i, v) {
                            $rootScope.totalEducandosPactuados += parseInt(v.QTD_EDUCANDOS);
                            $rootScope.totalCreches += (v.ST_CRECHE == 'S' || v.ST_PREESCOLA == 'S') ? 1 : 0;
                        });
                        $scope.verGridEscolasSelecionadas(data.data);
                    });
                } else {
                    $scope.verGridEscolasSelecionadas($scope.dataGrid);
                    eventosApp.mostrarCarregando(cfpLoadingBar, true);
                }

            };

            $scope.verGridEscolasSelecionadas = function (dataResultS) {
                $scope.search = '';
                $scope.list = dataResultS;
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