$(document).ready(function () {
    $("#signIn").click(function () {
  // e.preventDefault()
  var usuario = $("#usuario").val();
  var senha = $("#password").val();

  $.ajax({
    url: '././Model/login/login.php',
    method: 'POST',
    dataType: 'json',
    data: {
      usuario: usuario,
      senha: senha
    },
    success: (res) => {
       
      if (res.status === "success") {
        window.location.href = "/View/dashboard.php";
        alert(res.message);
      } else {
        alert(res.message);
        console.log(res)
      }
    },
    error: (xhr, status, err) => {
    
      console.log(xhr)
      alert(err);
    },
         });
    });
});
