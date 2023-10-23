
$(document).ready(function () {
    $("#cadastrarNovo").click(function () {
      var nomeNovo = $("#nomeNovo").val().trim();
      var email = $("#email").val().trim();
      var password = $("#password").val().trim();
      var matriculaCad = $("#matriculaCad").val().trim();
  
      console.log(nomeNovo, password);
    
      if (nomeNovo !== "" && email !== "" && password !== "" && matriculaCad !== "") {
        $("#nomeNovo").val("");
        $("#email").val("");
        $("#password").val("");
        $("#matriculaCad").val("");
  
        $.ajax({
          url: './../Model/cadastroLogin/cadastroLogin.php',
          method: 'POST',
          dataType: 'json',
          data: {
            nomeNovo: nomeNovo,
            email: email,
            password: password,
            matriculaCad: matriculaCad
          },
          success: function (response) {
            console.log(response);
            fechar();
            alert("Cadastrado com Sucesso!")
          },
          error: function (xhr, status, error) {
           console.log(xhr.responseText);
          },
        });
      }
    });
  });
  