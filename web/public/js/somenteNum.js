/**
 * Created by dimas.filho on 22/06/15.
 */
$('.somenteNum').keypress(function(event) {
    var tecla = (window.event) ? event.keyCode : event.which;
    if ((tecla > 47 && tecla < 58)) return true;
    else {
        if (tecla != 8) return false;
        else return true;
    }
});