/**
 * Created by dimas.filho on 25/06/15.
 */
var avancarTela = function () {
    bootbox.confirm(msgAlerta('001', 'a alteração dos dados dos secretários'), function (result) {
        if (result === true) {
            //bootbox.alert(msgSucesso('001'), function () {
            window.location.href = URL + 'adesao/escola';
            //});
        }
    });
}
