jQuery.validator.addMethod("timerbr", function (value, element) {
    if (value.length != 8) return false;
      var data = value;
		  var hor = data.substr(0, 2);
		  var se1 = data.substr(2, 1);
		  var min = data.substr(3, 2);
		  var se2 = data.substr(5, 1);
		  var seg = data.substr(6, 2);
      if (data.length != 8 || se1 != ':' || se2 != ':' || isNaN(hor) || isNaN(min) || isNaN(seg)){
        return false;
      }
      if (!((hor>=0 && hor<=23) && (min>=0 && min<=59) && (seg>=0 && seg<=59))){
        return false;
      }
      return true;
}, "Por favor, informe a hora corretamente!");

                 
                    