jQuery.validator.addMethod("notequal", function (value, element, param) {
    return this.optional(element) || (value == $(param).val() ? false : true);
}, "Este valor não pode ser igual"); // Mensagem padrão 