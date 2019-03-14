/**
 * Created by dimas.filho on 25/06/15.
 */
var formEsqueci = $('.esqueciSenha').html();
var validarForm = function (form, options) {
    form.validate(options);
    if (form.valid()) {
        form.submit();
    }
    return false;
}
var salvarDadosFormGestor = function (funcaoCallback) {
    if (funcaoCallback !== undefined) {
        bootbox.alert(msg('S001') + " " + msg('A007'), function () {
            funcaoCallback();
        });
    } else {
        bootbox.alert(msg('S001') + " " + msg('A007'));
        return true;
    }
};

var avancarTela = function () {
    bootbox.confirm(msgAlerta('001', 'a alteração dos dados dos secretários'), function (result) {
        if (result === true) {
            //bootbox.alert(msgSucesso('001'), function () {
            window.location.href = URL + 'adesao/escola';
            //});
        }
    });
}

$("#cnpjSaude, #cpfSecretarioSaude, #cepSecretaria, #cepSecretariaEducacao,  #cpfSecretarioEducacao, #cnpjEducacao").numeric({decimal: false});
var maskBehavior = function (val) {
        return val.replace(/\D/g, '').length === 11 ? '(00) 000000000' : '(00) 000000009';
    },
    options = {
        onKeyPress: function (val, e, field, options) {
            field.mask(maskBehavior.apply({}, arguments), options);
        }
    };

$('.fone').mask(maskBehavior, options);
$('#cadastroSecretarioSaude').validate({
    rules   : {
        cnpjSaude                 : {
            minlength: 14,
            required : true,
            cpfcnpj  : true
        },
        cepSecretaria             : {
            minlength: 8,
            required : true
        },
        cpfSecretarioSaude        : {
            minlength: 11,
            required : true,
            cpfcnpj  : true
        },
        ufSecretariaSaude         : {
            required: true
        },
        municipioSecretariaSaude  : {
            required: true
        },
        enderecoSecretariaSaude   : {
            required: true
        },
        bairroSecretariaSaude     : {
            required: true
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
        enderecoSecretaria        : {
            required : true,
            minlength: 15
        }
    },
    messages: {
        cnpjSaude               : {cpfcnpj: "CNPJ inválido!"},
        cpfSecretarioSaude      : {cpfcnpj: "CPF inválido!"},
        telefoneSecretarioSaude : {minlength: "Digite o DDD com 2 digitos e o número com 8 dígitos no mínimo!"},
        telefone2SecretarioSaude: {minlength: "Digite o DDD com 2 digitos e o número com 8 dígitos no mínimo!"}
    }
});

$('#cadastroSecretarioEdu').validate({
    rules   : {
        cnpjEducacao                 : {
            minlength: 14,
            required : true,
            cpfcnpj  : true
        },
        cepSecretariaEducacao        : {
            minlength: 8,
            required : true
        },
        cpfSecretarioEducacao        : {
            minlength: 11,
            required : true,
            cpfcnpj  : true
        },
        ufSecretariaEducacao         : {
            required: true
        },
        municipioSecretariaEducacao  : {
            required: true
        },
        enderecoSecretariaEducacao   : {
            required: true
        },
        bairroSecretariaEducacao     : {
            required: true
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
        },
        enderecoEducacao             : {
            required : true,
            minlength: 15
        }
    },
    messages: {
        cnpjEducacao               : {cpfcnpj: "CNPJ inválido!"},
        cpfSecretarioEducacao      : {cpfcnpj: "CPF inválido!"},
        telefoneSecretarioEducacao : {minlength: "Digite o DDD com 2 digitos e o número com 8 dígitos no mínimo!"},
        telefone2SecretarioEducacao: {minlength: "Digite o DDD com 2 digitos e o número com 8 dígitos no mínimo!"}
    }
});
