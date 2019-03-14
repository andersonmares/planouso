jQuery.validator.addMethod("datetimeBR", function (value, element) {
    //contando chars
    if (value.length != 16) return (this.optional(element) || false);
    // dividindo data e hora
    if (value.substr(10, 1) != ' ') return (this.optional(element) || false); // verificando se há espaço
    var arrOpcoes = value.split(' ');
    if (arrOpcoes.length != 2) return (this.optional(element) || false); // verificando a divisão de data e hora
    // verificando data
    var data = arrOpcoes[0];
    var dia = data.substr(0, 2);
    var barra1 = data.substr(2, 1);
    var mes = data.substr(3, 2);
    var barra2 = data.substr(5, 1);
    var ano = data.substr(6, 4);
    if (data.length != 10 || barra1 != "/" || barra2 != "/" || isNaN(dia) || isNaN(mes) || isNaN(ano) || dia > 31 || mes > 12) return (this.optional(element) || false);
    if ((mes == 4 || mes == 6 || mes == 9 || mes == 11) && dia == 31) return (this.optional(element) || false);
    if (mes == 2 && (dia > 29 || (dia == 29 && ano % 4 != 0))) return (this.optional(element) || false);
    // verificando hora
    var horario = arrOpcoes[1];
    var hora = horario.substr(0, 2);
    var doispontos = horario.substr(2, 1);
    var minuto = horario.substr(3, 2);
    if (horario.length != 5 || isNaN(hora) || isNaN(minuto) || hora > 23 || minuto > 59 || doispontos != ":") return (this.optional(element) || false);
    return this.optional(element) || true;
}, "Informe uma data e uma hora válida");