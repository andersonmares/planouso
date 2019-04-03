/**
 * Created by dimas.filho on 08/03/16.
 */
eventosApp.controller('GestorCtrl',
    ['$scope', '$rootScope', '$location', '$window', '$http', '$timeout', '$templateCache', 'cfpLoadingBar',
        function ($scope, $rootScope, $location, $window, $http, $timeout, $templateCache, cfpLoadingBar) {

            $scope.init = function () {
                $('.fone').mask(maskBehavior, options);
                $("#cnpjSaude, #cpfSecretarioSaude, #cepSecretaria, #cepSecretariaEducacao,  #cpfSecretarioEducacao, #cnpjEducacao").numeric({decimal: false});
                var saude = 'Saude';
                var educacao = 'Educacao';
                eventoCnpj($('#cnpj' + saude), saude);
                eventoUf($('#ufSecretaria' + saude), saude);
                eventoCep($('#cepSecretaria' + saude), saude);
                eventoCpf($('#cpfSecretario' + saude), saude);
                eventoCnpj($('#cnpj' + educacao), educacao);
                eventoUf($('#ufSecretaria' + educacao), educacao);
                eventoCep($('#cepSecretaria' + educacao), educacao);
                eventoCpf($('#cpfSecretario' + educacao), educacao);
                validarFormSaude();
                validarFormEducacao();
                $('input').blur(function () {
                    $('#msgErros').hide('200');
                });
            };

            $scope.salvarForm = function (avancarTela) {
                if ($('#cadastroSecretarioSaude').valid() && $('#cadastroSecretarioEdu').valid()) {
                    $http.post("gestor/salvar",
                        {
                            dadosSaude   : angular.toJson($('#cadastroSecretarioSaude').serializeArray()),
                            dadosEducacao: angular.toJson($('#cadastroSecretarioEdu').serializeArray())
                        }
                    ).success(function (data) {
                        if (data.status === true) {
                            eventosApp.bootboxAlertSemOpcaoFechar(data.msg, undefined, cfpLoadingBar, $rootScope, avancarTela);
                        } else if (data.status == 'session') {
                            eventosApp.bootboxAlertSemOpcaoFechar(data.msg, data.url, cfpLoadingBar, $rootScope);
                        } else {
                            eventosApp.bootboxAlertSemOpcaoFechar(data.msg, undefined, cfpLoadingBar, $rootScope);
                        }
                    });
                }
            };

            $scope.avancar = function () {
                var funcaoAvancar = function () {
                    eventosApp.avancarTela($rootScope, $http, cfpLoadingBar, $('#coAdesao').val(), msgAlerta('001', 'a alteração dos dados dos secretários'), 2);
                };
                $scope.salvarForm(funcaoAvancar);
            };

            var maskBehavior = function (val) {
                    return val.replace(/\D/g, '').length === 11 ? '(00) 000000000' : '(00) 000000009';
                },
                options = {
                    onKeyPress: function (val, e, field, options) {
                        field.mask(maskBehavior.apply({}, arguments), options);
                    }
                };

            var eventoCnpj = function (cnpj, tipo) {
                cnpj.on('blur keypress', function () {
                    if ($(this).val().length == 14 || ($(this).val().length == 14 && e.which == 13)) {
                        $(this).consultaCNPJ({
                            educacao     : (tipo == 'Educacao') ? true : false,
                            idNome       : '#secretaria' + tipo,
                            idCadastro   : '#coCadastro' + tipo,
                            idPessoa     : '#coPessoaJuridica' + tipo,
                            idCep        : '#cepSecretaria' + tipo,
                            idEndereco   : '#enderecoSecretaria' + tipo,
                            idBairro     : '#bairroSecretaria' + tipo,
                            idUf         : '#ufSecretaria' + tipo,
                            idMunicipio  : '#municipioSecretaria' + tipo,
                            idComplemento: '#complementoSecretaria' + tipo,
                            msgNencont   : 'CNPJ não encontrado, para o tipo de Secretaria de ' + tipo + '!',
                        });
                    }
                });
                if (cnpj.val() !== '') {
                    cnpj.trigger('blur');
                }
            };

            var eventoCep = function (cep, tipo) {
                cep.on('blur keypress', function () {
                    if ($(this).val().length == 8 || ($(this).val().length == 8 && e.which == 13)) {
                        $(this).consultaCEP({
                            idEndereco   : '#enderecoSecretaria' + tipo,
                            idBairro     : '#bairroSecretaria' + tipo,
                            idUf         : '#ufSecretaria' + tipo,
                            idMunicipio  : '#municipioSecretaria' + tipo,
                            idComplemento: '#complementoSecretaria' + tipo
                        });
                    }
                });
            };

            var eventoCpf = function (cpf, tipo) {
                cpf.on('blur keypress', function () {
                    if ($(this).val().length == 11 || ($(this).val().length == 11 && e.which == 13)) {
                        $(this).consultaCPF({
                            idPessoa     : '#coPessoaFisicaSecretario' + tipo,
                            idNome       : '#nomeSecretario' + tipo,
                            idCoFone     : '#coTelefoneSecretario' + tipo,
                            idFone       : '#telefoneSecretario' + tipo,
                            idCoFone2    : '#coTelefone2Secretario' + tipo,
                            idFone2      : '#telefone2Secretario' + tipo,
                            idEstadoCivil: '#estadoCivilSecretario' + tipo,
                            idCoEmail    : '#coEmailSecretario' + tipo,
                            idEmail      : '#emailSecretario' + tipo,
                        });
                    }

                });
                if (cpf.val() !== '') {
                    cpf.trigger('blur');
                }
            };

            var eventoUf = function (uf, tipo) {
                uf.change(function () {
                    $(this).carregarCombos('#municipioSecretaria' + tipo, {
                        global     : false,
                        async      : false,
                        method     : 'POST',
                        dataJson   : '{"uf":"' + $(this).val() + '"}',
                        msgNotFound: "SELECIONE UM MUNICIPIO",
                        url        : "gestor/municipio/" + $(this).val()
                    });
                });
            };

            var validarFormSaude = function () {
                $('#cadastroSecretarioSaude').validate({
                    rules   : {
                        cnpjSaude                 : {
                            minlength : 14,
                            required  : true,
                            cpfcnpj   : true,
                            diferentTo: cnpjEducacao
                        },
                        cepSecretariaSaude        : {
                            minlength: 8,
                            required : true
                        },
                        cpfSecretarioSaude        : {
                            minlength : 11,
                            required  : true,
                            cpfcnpj   : true,
                            diferentTo: cpfSecretarioEducacao
                        },
                        ufSecretariaSaude         : {
                            required: true
                        },
                        municipioSecretariaSaude  : {
                            required: true
                        },
                        enderecoSecretariaSaude   : {
                            required : true,
                            minlength: 10,
                            maxlength: 100
                        },
                        bairroSecretariaSaude     : {
                            required : true,
                            maxlength: 30
                        },
                        complementoSecretariaSaude: {
                            maxlength: 150
                        },

                        estadoCivilSecretarioSaude: {
                            required: true
                        },
                        telefoneSecretarioSaude   : {
                            minlength: 13,
                            required : true,
                        },
                        telefone2SecretarioSaude  : {
                            minlength: 13
                        },
                        emailSecretarioSaude      : {
                            minlength: 10,
                            required : true,
                            email    : true
                        },
                    },
                    messages: {
                        cnpjSaude               : {cpfcnpj: "CNPJ inválido!"},
                        cpfSecretarioSaude      : {cpfcnpj: "CPF inválido!"},
                        telefoneSecretarioSaude : {minlength: "Digite o DDD com 2 digitos e o número com 8 dígitos no mínimo!"},
                        telefone2SecretarioSaude: {minlength: "Digite o DDD com 2 digitos e o número com 8 dígitos no mínimo!"}
                    }
                });
            };

            var validarFormEducacao = function () {
                $('#cadastroSecretarioEdu').validate({
                    rules   : {
                        cnpjEducacao                 : {
                            minlength : 14,
                            required  : true,
                            cpfcnpj   : true,
                            diferentTo: cnpjSaude
                        },
                        cepSecretariaEducacao        : {
                            minlength: 8,
                            required : true
                        },
                        cpfSecretarioEducacao        : {
                            minlength : 11,
                            required  : true,
                            cpfcnpj   : true,
                            diferentTo: cpfSecretarioSaude
                        },
                        ufSecretariaEducacao         : {
                            required: true
                        },
                        municipioSecretariaEducacao  : {
                            required: true
                        },
                        enderecoSecretariaEducacao   : {
                            required : true,
                            minlength: 10,
                            maxlength: 100
                        },
                        bairroSecretariaEducacao     : {
                            required : true,
                            maxlength: 30
                        },
                        complementoSecretariaEducacao: {
                            maxlength: 150
                        },
                        estadoCivilSecretarioEducacao: {
                            required: true
                        },
                        telefoneSecretarioEducacao   : {
                            minlength: 13,
                            required : true,
                        },
                        telefone2SecretarioEducacao  : {
                            minlength: 13
                        },
                        emailSecretarioEducacao      : {
                            minlength: 10,
                            required : true,
                            email    : true
                        }
                    },
                    messages: {
                        cnpjEducacao               : {cpfcnpj: "CNPJ inválido!"},
                        cpfSecretarioEducacao      : {cpfcnpj: "CPF inválido!"},
                        telefoneSecretarioEducacao : {minlength: "Digite o DDD com 2 digitos e o número com 8 dígitos no mínimo!"},
                        telefone2SecretarioEducacao: {minlength: "Digite o DDD com 2 digitos e o número com 8 dígitos no mínimo!"}
                    }
                });
            };
        }
    ]
);