/**
 * Created by dimas.filho on 02/12/2015.
 */
$(function () {
    window.history.forward(1);
    $('input').blur(function () {
        $('#msgErros').hide('200');
    });

    $("#cepSecretaria").on('blur', function () {
        if ($(this).val().length == 8) {
            $(this).consultaCEP({
                idEndereco   : '#enderecoSecretariaSaude',
                idBairro     : '#bairroSecretariaSaude',
                idUf         : '#ufSecretariaSaude',
                idMunicipio  : '#municipioSecretariaSaude',
                idComplemento: '#complementoSecretariaSaude'
            });
        }
    });

    $("#cepSecretariaEducacao").on('blur', function () {
        if ($(this).val().length == 8) {
            $(this).consultaCEP({
                idEndereco   : '#enderecoSecretariaEducacao',
                idBairro     : '#bairroSecretariaEducacao',
                idUf         : '#ufSecretariaEducacao',
                idMunicipio  : '#municipioSecretariaEducacao',
                idComplemento: '#complementoSecretariaEducacao'
            });
        }
    });

    $("#cnpjSaude").on('blur', function () {
        if ($(this).val().length == 14) {
            $(this).consultaCNPJ({
                idNome       : '#secretariaSaude',
                idCep        : '#cepSecretaria',
                idEndereco   : '#enderecoSecretariaSaude',
                idBairro     : '#bairroSecretariaSaude',
                idUf         : '#ufSecretariaSaude',
                idMunicipio  : '#municipioSecretariaSaude',
                idComplemento: '#complementoSecretariaSaude'
            });
        }
    });

    $("#cpfSecretarioSaude").on('blur', function () {
        if ($(this).val().length == 11) {
            $(this).consultaCPF({
                idNome       : '#nomeSecretarioSaude',
                idFone       : '#telefoneSecretarioSaude',
                idFone2      : '#telefone2SecretarioSaude',
                idEstadoCivil: '#estadoCivilSecretarioSaude',
                idEmail      : '#emailSecretarioSaude',
            });
        }

    });

    $("#cpfSecretarioEducacao").on('blur', function () {
        if ($(this).val().length == 11) {
            $(this).consultaCPF({
                idNome       : '#nomeSecretarioEducacao',
                idFone       : '#telefoneSecretarioEducacao',
                idFone2      : '#telefone2SecretarioEducacao',
                idEstadoCivil: '#estadoCivilSecretarioEducacao',
                idEmail      : '#emailSecretarioEducacao',
            });
        }
    });

    $("#cnpjEducacao").on('blur', function () {
        if ($(this).val().length == 14) {
            $(this).consultaCNPJ({
                idNome       : '#secretariaEducacao',
                idCep        : '#cepSecretariaEducacao',
                idEndereco   : '#enderecoSecretariaEducacao',
                idBairro     : '#bairroSecretariaEducacao',
                idUf         : '#ufSecretariaEducacao',
                idMunicipio  : '#municipioSecretariaEducacao',
                idComplemento: '#complementoSecretariaEducacao'
            });
        }
    });

    $('#salvarForms').on('click', function () {
        //bootbox.dialog({
        //        message: "<strong>Confira todos os dados dos responsáveis de Saúde e de Educação. Os dados dos respnsáveis estão corretos?</strong>",
        //        buttons: {
        //            success: {
        //                label    : "ENVIAR",
        //                className: "btn-success",
        //                callback : function () {
        //                    return validarForm($('#recuperar'), {
        //                        rules: {
        //                            usuariorecuperar: {
        //                                minlength: 11,
        //                                maxlength: 14,
        //                                required : true,
        //                                cpfcnpj  : true
        //                            }
        //                        }
        //                    });
        //                }
        //            }
        //        }
        //    }
        //);
        bootbox.confirm('<strong>Confira todos os dados dos responsáveis de Saúde e de Educação. Os dados dos respnsáveis estão corretos?</strong>', function () {
            if ($('#cadastroSecretarioSaude').valid()) {
                $("#cadastroSecretarioSaude input, #cadastroSecretarioSaude select").prop("disabled", true);
                //salvarFormSecretarioSaude();
            }
            if ($('#cadastroSecretarioEdu').valid()) {
                $("#cadastroSecretarioEdu input, #cadastroSecretarioEdu select").prop("disabled", true);
                //salvarFormSecretarioSaude();
            }
        });
    });

    $('#ufSecretariaSaude').change(function () {
        //var codMunSelect = ($('#hiddenCoMunicipio') != false) ? $('#hiddenCoMunicipio').val() : "";
        $(this).carregarCombos('#municipioSecretariaSaude', {
            global     : false,
            async      : false,
            method     : 'POST',
            //codSelected: codMunSelect,
            dataJson   : '{"uf":"' + $(this).val() + '"}',
            msgNotFound: "SELECIONE UM MUNICIPIO",
            url        : "adesao/consultar_municipio/"
        });
    });

    $('#ufSecretariaEducacao').change(function () {
        //var codMunSelect = ($('#hiddenCoMunicipio') != false) ? $('#hiddenCoMunicipio').val() : "";
        $(this).carregarCombos('#municipioSecretariaEducacao', {
            global     : false,
            async      : false,
            method     : 'POST',
            //codSelected: codMunSelect,
            dataJson   : '{"uf":"' + $(this).val() + '"}',
            msgNotFound: "SELECIONE UM MUNICIPIO",
            url        : "adesao/consultar_municipio/"
        });
    });

});