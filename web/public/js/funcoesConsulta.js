/**
 * Created by dimas.filho on 03/12/2015.
 */
jQuery.fn.consultaCEP = function (settings) {
    var cep = $(this);
    var config = {
        coCadastro   : "#coCadastro",
        idEndereco   : "#endereco",
        idBairro     : "#bairro",
        idComplemento: "#complemento",
        idMunicipio  : "#municipio",
        idUf         : "#uf",
        method       : "GET",
        url          : "gestor/cep/" + cep.val(),
        msgNencont   : "CEP não encontrado!",
        msgError     : "Ocorreu um problema ao consultar, tente novamente!",
    }
    if (settings) {
        $.extend(config, settings);
    }
    var cepValor = $(this).val().replace(/\D/g, '');
    if (cep.length < 8) {
        $(config.idEndereco).val('');
        $(config.idEndereco).attr('readonly', true);
    }
    if (cepValor != "") {
        var validacep = /^[0-9]{8}$/;
        if (validacep.test(cepValor)) {
            $(config.idEndereco).val("Localizando...");
            $(config.idBairro).val("Localizando...");
            $.getJSON(config.url, function (dados) {
                $(config.idUf + ' option:selected').removeAttr("selected");
                $(config.idMunicipio + ' option:selected').removeAttr("selected");
                $(config.idEndereco).val('');
                $(config.idEndereco).attr('readonly', true);
                $(config.idBairro).val('');
                $(config.idBairro).attr('readonly', true);
                $(config.idComplemento).attr('readonly', true);
                if (dados.status == true) {
                    $(config.idEndereco).removeAttr('readonly');
                    $(config.idBairro).removeAttr('readonly');
                    $(config.idComplemento).removeAttr('readonly');
                    if (dados.data.TP_LOGRADOURO == null) {
                        dados.data.TP_LOGRADOURO = '';
                    }
                    $(config.idEndereco).val(dados.data.TP_LOGRADOURO + " " + dados.data.NO_LOGRADOURO);
                    $(config.idBairro).val(dados.data.NO_LOCALIDADE);

                    $(config.idComplemento).val(dados.data.DS_COMPLEMENTO);
                    $(config.idUf).val(dados.data.SG_UF).trigger('change');
                    $(config.idMunicipio).val(dados.data.CO_MUNICIPIO_IBGE);
                } else {
                    cep.val('');
                    bootbox.alert(config.msgNencont);
                }
            }).fail(function (jqxhr, textStatus, error) {
                var err = textStatus + ", " + error;
                console.log("Request Failed: " + err);
            });
        } else {
            $(config.idEndereco).val('');
            bootbox.alert(msgError);
        }
    } else {
        $(config.idEndereco).val('');
    }
};

jQuery.fn.consultaCNPJ = function (settings) {
    var config = {
        educacao     : false,
        idNome       : "#nomeCNPJ",
        idCep        : "#cepCNPJ",
        idCadastro   : "#coCadastro",
        idPessoa     : "#coPessoaJuridica",
        idEndereco   : "#endereco",
        idBairro     : "#bairro",
        idComplemento: "#complemento",
        idMunicipio  : "#municipio",
        idUf         : "#uf",
        method       : "POST",
        url          : "gestor/cnpj/" + $(this).val(),
        msgNencont   : "CNPJ não encontrado!",
        msgError     : "Ocorreu um problema ao consultar, tente novamente!",
    }
    if (settings) {
        $.extend(config, settings);
    }
    cnpj = $(this).val();
    if (cnpj != "") {
        $(config.idNome).val("Localizando...");
        $.ajax({
            type       : config.method,
            url        : config.url,
            data       : '{"cnpj":"' + cnpj + '", "educacao":' + config.educacao + '}',
            contentType: "application/json",
            dataType   : 'json',
            method     : config.method,
            success    : function (dados) {
                if (dados.status) {
                    $(config.idCadastro).val(dados.data.CO_CADASTRO);
                    $(config.idPessoa).val(dados.data.CO_SEQ_PESSOA_JURIDICA);
                    if (dados.data.NO_FANTASIA == null) {
                        $(config.idNome).val(dados.data.NO_PESSOA);
                    } else {
                        $(config.idNome).val(dados.data.NO_FANTASIA);
                    }
                    $(config.idEndereco).removeAttr('readonly');
                    $(config.idBairro).removeAttr('readonly');
                    $(config.idComplemento).removeAttr('readonly');
                    $(config.idEndereco).val(dados.data.DS_ENDERECO);
                    $(config.idBairro).val(dados.data.NO_BAIRRO);
                    $(config.idComplemento).val(dados.data.DS_COMPLEMENTO);
                    $(config.idUf).val(dados.data.SG_UF).trigger('change');
                    $(config.idMunicipio).val(dados.data.CO_MUNICIPIO_IBGE);
                    $(config.idCep).val(dados.data.NU_CEP);
                } else {
                    $(this).val('');
                    $(config.idCadastro).val('');
                    $(config.idPessoa).val('');
                    $(config.idNome).val('');
                    $(config.idNome).attr('readonly', true);
                    bootbox.alert(config.msgNencont);
                }
            }
        });
    } else {
        $(config.idNome).val('');
    }
};

jQuery.fn.consultaCPF = function (settings) {
    var config = {
        idPessoa     : '#coPessoaFisica',
        idNome       : "#nomeCPF",
        idCoCadastro : "#coCadastroCPF",
        idEstadoCivil: "#estadoCivilCPF",
        idCoFone     : '#coTelefoneSecretario',
        idFone       : "#foneCPF",
        idCoFone2    : '#coTelefone2Secretario',
        idFone2      : "#fone2CPF",
        idCoEmail    : "#coEmailCPF",
        idEmail      : "#emailCPF",
        idCep        : '#cepCPF',
        method       : "POST",
        url          : "gestor/cpf/" + $(this).val(),
        msgNencont   : "CPF não encontrado!",
        msgError     : "Ocorreu um problema ao consultar, tente novamente!",
    }
    if (settings) {
        $.extend(config, settings);
    }
    cpf = $(this).val();
    if ($(this).attr('name') == 'cpfSecretarioSaude') {
        tipoGestor = 1;
    } else if ($(this).attr('name') == 'cpfRepresentanteSaude') {
        tipoGestor = 3;
    } else if ($(this).attr('name') == 'cpfRepresentanteEducacao') {
        tipoGestor = 4;
    } else {
        tipoGestor = 2;
    }
    if (cpf != "") {
        $(config.idNome).val("Localizando...");
        $.ajax({
            type       : config.method,
            url        : config.url,
            data       : '{"cpf":"' + cpf + '", "tp":"' + tipoGestor + '"}',
            contentType: "application/json",
            dataType   : 'json',
            method     : config.method,
            success    : function (dados) {
                $(config.idPessoa).val('');
                $(config.idNome).val('');
                $(config.idNome).attr('readonly', true);
                $(config.idEstadoCivil + ' option:selected').removeAttr("selected");
                $(config.idCoCadastro).val('');
                $(config.idCoFone).val('');
                $(config.idFone).val('');
                $(config.idCoFone2).val('');
                $(config.idFone2).val('');
                $(config.idCoEmail).val('');
                $(config.idEmail).val('');
                $(config.idCep).val('');
                if (dados.status) {
                    $(config.idPessoa).val(dados.data.CO_SEQ_PESSOA_FISICA);
                    $(config.idNome).val(dados.data.NO_PESSOA_FISICA);
                    $(config.idEstadoCivil + ' option[value="' + dados.data.CO_ESTADO_CIVIL + '"]').attr('selected', 'selected');
                    $(config.idCoCadastro).val(dados.data.CO_CADASTRO);
                    if (dados.data.NU_TELEFONE != null) {
                        if (dados.data.NU_TELEFONE.length >= 8) {
                            $(config.idCoFone).val(dados.data.CO_SEQ_TELEFONE);
                            $(config.idFone).val("(" + dados.data.NU_DDD + ") " + dados.data.NU_TELEFONE);
                        }
                    }
                    if (dados.data.NU_TELEFONE2 != null) {
                        if (dados.data.NU_TELEFONE2.length >= 8) {
                            $(config.idCoFone2).val(dados.data.CO_SEQ_TELEFONE2);
                            $(config.idFone2).val("(" + dados.data.NU_DDD2 + ") " + dados.data.NU_TELEFONE2);
                        }
                    }
                    $(config.idCoEmail).val(dados.data.CO_SEQ_EMAIL);
                    $(config.idEmail).val(dados.data.DS_EMAIL);
                    if (dados.data.NU_CEP != '') {
                        $(config.idCep).val(dados.data.NU_CEP);
                        //$(config.idCep).trigger('blur');
                    }
                } else {
                    bootbox.alert(config.msgNencont);
                }
            }
        });
    } else {
        $(config.idNome).val('');
        $(config.idEstadoCivil + ' option[value=""]').attr('selected', 'selected');
        $(config.idFone).val('');
        $(config.idFone2).val('');
        $(config.idEmail).val('');
    }
};