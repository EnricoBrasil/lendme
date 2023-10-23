$(document).ready(function() {
    $("#codpatrimonioAlt").keyup(function() {
        $("#codpatrimonioAlt").val(this.value.match(/[0-9]*/));
    });
  });
  $(document).ready(function() {
    $("#codPatrimonio").keyup(function() {
        $("#codPatrimonio").val(this.value.match(/[0-9]*/));
    });
  });

  $(document).ready(function() {
    $("#telefoneAtl").keyup(function() {
        $("#telefoneAlt").val(this.value.match(/[0-9]*/));
    });
  });
