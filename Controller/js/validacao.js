$(document).ready(function() {
    $("#telefone").keyup(function() {
        $("#telefone").val(this.value.match(/[0-9]*/));
    });
  });

$(document).ready(function() {
    $("#matricula").keyup(function() {
        $("#matricula").val(this.value.match(/[0-9]*/));
    });
  });

$(document).ready(function() {
    $("#matriculaAlt").keyup(function() {
        $("#matriculaAlt").val(this.value.match(/[0-9]*/));
    });
  });

$(document).ready(function() {
    $("#matriculaCad").keyup(function() {
        $("#matriculaCad").val(this.value.match(/[0-9]*/));
    });
  });
  
 