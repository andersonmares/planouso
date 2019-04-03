/**
 * Created by dimas.filho on 08/04/16.
 */
eventosApp.controller('RepresentantesCtrl',
    ['$scope', '$rootScope', '$location', '$window', '$http', '$timeout', '$templateCache', 'cfpLoadingBar',
        function ($scope, $rootScope, $location, $window, $http, $timeout, $templateCache, cfpLoadingBar) {

            $scope.init = function () {
                $('.fone').mask(maskBehavior, options);
                $('#cpfRepresentanteSaude, #cpfRepresentanteEducacao').numeric({decimal: false});
                var saude = 'Saude';
                var educacao = 'Educacao';
                eventoCpf($('#cpfRepresentante' + saude), saude);
                eventoCep($('#cepRepresentante' + saude), saude);
                eventoUf($('#ufRepresentante' + saude), saude);
                eventoCpf($('#cpfRepresentante' + educacao), educacao);
                eventoCep($('#cepRepresentante' + educacao), educacao);
                eventoUf($('#ufRepresentante' + educacao), educacao);
                validarFormSaude();
                validarFormEducacao();
            };

            $scope.voltar = function () {
                eventosApp.mostrarCarregando(cfpLoadingBar, false);
                window.location.href = "adesao";
            };

            $scope.salvar = function (avancarTela) {

                if ($('#cadastroSecretarioSaude').valid() && $('#cadastroSecretarioEdu').valid()) {
                    $rootScope.isDisabled = true;
                    eventosApp.mostrarCarregando(cfpLoadingBar);
                    $http.post("representante/salvar",
                        {
                            dadosSaude: angular.toJson($('#cadastroSecretarioSaude').serializeArray()),
                            dadosEducacao: angular.toJson($('#cadastroSecretarioEdu').serializeArray())
                        }
                    ).success(function (data) {
                        $rootScope.isDisabled = false;
                        if (data.status === true) {
                            eventosApp.bootboxAlertSemOpcaoFechar(data.msg, data.url, cfpLoadingBar, $rootScope, avancarTela);
                        } else if (data.status == 'session') {
                            eventosApp.bootboxAlertSemOpcaoFechar(data.msg, data.url, cfpLoadingBar, $rootScope);
                        } else {
                            eventosApp.bootboxAlertSemOpcaoFechar(data.msg, undefined, cfpLoadingBar, $rootScope);
                        }
                    });
                }
            };

            var maskBehavior = function (val) {
                    return val.replace(/\D/g, '').length === 11 ? '(00) 000000000' : '(00) 000000009';
                },
                options = {
                    onKeyPress: function (val, e, field, options) {
                        field.mask(maskBehavior.apply({}, arguments), options);
                    }
                };

            var eventoCpf = function (cpf, tipo) {
                cpf.on('blur keypress', function (e) {
                    if ($(this).val().length == 11 || ($(this).val().length == 11 && e.which == 13)) {
                        $(this).consultaCPF({
                            idPessoa: '#coPessoaFisicaSecretario' + tipo,
                            idNome: '#nomeSecretario' + tipo,
                            idCoFone: '#coTelefoneSecretario' + tipo,
                            idCoCadastro: '#coCadastro' + tipo,
                            idFone: '#telefoneSecretario' + tipo,
                            idCoFone2: '#coTelefone2Secretario' + tipo,
                            idFone2: '#telefone2Secretario' + tipo,
                            idEstadoCivil: '#estadoCivilSecretario' + tipo,
                            idCoEmail: '#coEmailSecretario' + tipo,
                            idEmail: '#emailSecretario' + tipo,
                            idCep: '#cepRepresentante' + tipo,
                            url: "representante/cpf/" + $(this).val()
                        });
                    }

                });
                if (cpf.val() !== '') {
                    cpf.trigger('blur');
                }
            };

            var eventoCep = function (cep, tipo) {
                cep.on('blur keypress', function (e) {
                    if ($(this).val().length == 8 || ($(this).val().length == 8 && e.which == 13)) {
                        var urlconsulta;
                        if ($('#coCadastro' + tipo).val() !== '') {
                            urlconsulta = "representante/cep/" + $(this).val() + "/" + $('#coCadastro' + tipo).val();
                        } else {
                            urlconsulta = "gestor/cep/" + $(this).val();
                        }
                        $(this).consultaCEP({
                            coCadastro: '#coCadastro' + tipo,
                            idEndereco: '#enderecoRepresentante' + tipo,
                            idBairro: '#bairroRepresentante' + tipo,
                            idUf: '#ufRepresentante' + tipo,
                            idMunicipio: '#municipioRepresentante' + tipo,
                            idComplemento: '#complementoRepresentante' + tipo,
                            url: urlconsulta
                        });
                    }
                });
                if (cep.val() !== '') {
                    cep.trigger('blur');
                }
            };

            var eventoUf = function (uf, tipo) {
                uf.change(function () {
                    $(this).carregarCombos('#municipioRepresentante' + tipo, {
                        global: false,
                        async: false,
                        method: 'POST',
                        dataJson: '{"uf":"' + $(this).val() + '"}',
                        msgNotFound: "SELECIONE UM MUNICIPIO",
                        url: "gestor/municipio/" + $(this).val()
                    });
                });
            };

            var validarFormSaude = function () {
                $('#cadastroSecretarioSaude').validate({
                    rules: {
                        cpfRepresentanteSaude: {
                            minlength: 11,
                            required: true,
                            cpfcnpj: true,
                            diferentTo: cpfRepresentanteEducacao
                        },
                        estadoCivilSecretarioSaude: {
                            required: true
                        },
                        telefoneSecretarioSaude: {
                            minlength: 13,
                            required: true,
                        },
                        telefone2SecretarioSaude: {
                            minlength: 13
                        },
                        emailSecretarioSaude: {
                            minlength: 10,
                            required: true,
                            email: true
                        },
                        cepRepresentanteSaude: {
                            minlength: 8,
                            required: true
                        },
                        ufRepresentanteSaude: {
                            required: true
                        },
                        municipioRepresentanteSaude: {
                            required: true
                        },
                        enderecoRepresentanteSaude: {
                            required: true,
                            minlength: 10,
                            maxlength: 100
                        },
                        bairroRepresentanteSaude: {
                            required: true,
                            maxlength: 30
                        },
                        complementoRepresentanteSaude: {
                            maxlength: 150
                        }

                    },
                    messages: {
                        cpfSecretarioSaude: {cpfcnpj: "CPF inválido!"},
                        telefoneSecretarioSaude: {minlength: "Digite o DDD com 2 digitos e o número com 8 dígitos no mínimo!"},
                        telefone2SecretarioSaude: {minlength: "Digite o DDD com 2 digitos e o número com 8 dígitos no mínimo!"}
                    }
                });
            };

            var validarFormEducacao = function () {
                $('#cadastroSecretarioEdu').validate({
                    rules: {
                        cpfRepresentanteEducacao: {
                            minlength: 11,
                            required: true,
                            cpfcnpj: true,
                            diferentTo: cpfRepresentanteSaude
                        },
                        estadoCivilSecretarioEducacao: {
                            required: true
                        },
                        telefoneSecretarioEducacao: {
                            minlength: 13,
                            required: true,
                        },
                        telefone2SecretarioEducacao: {
                            minlength: 13
                        },
                        emailSecretarioEducacao: {
                            minlength: 10,
                            required: true,
                            email: true
                        },
                        cepRepresentanteEducacao: {
                            minlength: 8,
                            required: true
                        },
                        ufRepresentanteEducacao: {
                            required: true
                        },
                        municipioRepresentanteEducacao: {
                            required: true
                        },
                        enderecoRepresentanteEducacao: {
                            required: true,
                            minlength: 10,
                            maxlength: 100
                        },
                        bairroRepresentanteEducacao: {
                            required: true,
                            maxlength: 30
                        },
                        complementoRepresentanteEducacao: {
                            maxlength: 150
                        }
                    },
                    messages: {
                        cpfSecretarioEducacao: {cpfcnpj: "CPF inválido!"},
                        telefoneSecretarioEducacao: {minlength: "Digite o DDD com 2 digitos e o número com 8 dígitos no mínimo!"},
                        telefone2SecretarioEducacao: {minlength: "Digite o DDD com 2 digitos e o número com 8 dígitos no mínimo!"}
                    }
                });
            };
        }
    ]
);