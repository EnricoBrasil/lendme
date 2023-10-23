var validador={
    codigo: 0,

    set cod(valor){

        codigo = valor;
    },
    get cod(){
        return codigo;
    }

};

$(document).ready(function() {
    $('#enviarMudanca').click(function() {
        var matricula = $("#matricula").val();        
        var modalCodigo = document.getElementById("myModalCodigo");

        $.ajax({
            url: "../Model/funcionario/SelecionarFuncionario.php",
            data: { matricula: matricula },
            method: 'get',
            dataType: "json",
            success: function(data){
    
                if(data.comentario != "Nenhum registro encontrado."){
                    
                    
                    console.log(data[1]);
                    MudaSenha(data[1]);
                    modalCodigo.style.display = "block"
    
                }else{
                    alert (data.comentario);
                }
                
                
            },
             error: function(xhr, status, error) {
                console.log(xhr.responseText);
                console.log(error);
                
                
                }
        });
        
        
    });
});


function MudaSenha(email) {

    $.ajax({
        url: '../Model/MudarSenha/MudarSenha.php',
        method: 'post',
        dataType: 'json',
        data: {
            destinatario: email       
         },
        success: function(data) {
          
            alert ("E-mail enviado para " + email)
            validador.cod = data["codigo"];

        },
        error: function(xhr, status, error) {
            console.log(xhr.responseText);            
         
        }
    });
}

function ValidarCodigo(){
    var modal = document.getElementById("myModal");
    var modalCodigo = document.getElementById("myModalCodigo");
    var inputCod = $("#codigo").val();
    validador.cod = 0;

    if (validador.cod == inputCod){
        modalCodigo.style.display = "none";
        modal.style.display = "block";
    }else{
        alert ("Código incorreto");
    }
}




function EnviarMudanca(){

    var senha1 = $('#senha1').val();
    var senha2 = $('#senha2').val();
    var matricula = $("#matricula").val();  
    var modal = document.getElementById("myModal");
    if(senha1 == senha2)
    
        $.ajax({
            url: '../Model/AtualizarSenha.php',
            method: 'post',
            dataType: 'json',
            data: {
                senha: senha1,
                matricula: matricula
            },
            success: function(response) {
                
                alert("Senha atualizada");
                modal.style.display = "none"
                },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
                
            }
        });
    else{

        alert("Senhas diferentes");
    }

}