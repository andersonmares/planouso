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
};
var abrirEsqueciMinhaSenha = function () {
    $('.esqueciSenha').remove();
    bootbox.dialog({
            title  : "<strong>Esqueci minha senha</strong>",
            message: formEsqueci,
            buttons: {
                success: {
                    label    : "ENVIAR",
                    className: "btn-success",
                    callback : function () {
                        $('#recuperar').validate({
                            rules: {
                                usuariorecuperar: {
                                    minlength: 11,
                                    maxlength: 14,
                                    required : true,
                                    cpfcnpj  : true
                                }
                            }
                        });
                        if ($('#recuperar').valid()) {
                            $.getJSON('login/recuperar/' + $('#usuariorecuperar').val(), function (data) {
                                bootbox.hideAll();
                                bootbox.alert(data.msg);
                            });
                        }
                        return false;
                    }
                }
            }
        }
    );
};
var abrirPerguntaAcessoAoSistema = function () {
    var pf = $('.acessoPF').html();
    var pj = $('.acessoPJ').html();
    bootbox.dialog({
            title  : "<strong>Como consigo acesso ao sistema?</strong>",
            message: pf + '<br />' + pj,
            buttons: {
                success: {
                    label    : "Esqueci Minha Senha",
                    className: "btn-success",
                    callback : function () {
                        abrirEsqueciMinhaSenha();
                        $('#usuariorecuperar').val($('#usuario').val());
                    }
                },
                main   : {
                    label    : "OK",
                    className: "btn-primary"
                }
            }
        }
    );
};
$("#usuario").numeric();
$('#login').validate({
    rules: {
        usuario: {
            minlength: 11,
            maxlength: 14,
            required : true,
            cpfcnpj  : true
        },
        senha  : {
            minlength: 6,
            maxlength: 24,
            required : true
        }
    }
});