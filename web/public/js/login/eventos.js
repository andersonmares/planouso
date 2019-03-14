/**
 * Created by dimas.filho on 25/06/15.
 */
$(function () {
    $('input').blur(function(){
        $('#msgErros').hide('200');
    });
    $('.esqueciSenhaBox').on('click', function () {
        abrirEsqueciMinhaSenha();
        $("#usuariorecuperar").numeric();
        $('#usuariorecuperar').val($('#usuario').val());
    });
    $('#semUsuario').on('click', function () {
        abrirPerguntaAcessoAoSistema();
    });
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-green',
        radioClass   : 'iradio_square-green',
        increaseArea : '20%'
    });
});