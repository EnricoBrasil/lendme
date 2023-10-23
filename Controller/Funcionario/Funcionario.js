requisaoSelecionarFuncionario();

$(document).ready(function () {
  $("#cadastrar").click(function () {
      var select = document.getElementById("selectOP_Cargo");
      
      var matricula = $("#matricula").val().trim(); 
      var nome = $("#nomeCad").val().trim();
      var cargo = select.options[select.selectedIndex].value;
      var data =  $("#data").val().trim();
      var telefone = $("#telefone").val().trim();
       
       

      if (matricula != "" &&
       nome != "" &&
       cargo != "" &&
       data != "" &&
       telefone != ""
  ){
      $("#matricula").val("");
      $("#nomeCad").val("");
      $("#cargo").val("");
      $("#data").val("");
      $("#telefone").val("");
       
      $.ajax({
            url: './../Model/funcionario/CadastrarFuncionario.php',
            method: 'post',
            dataType: 'json',
            data: {
                matricula: matricula,
                nome: nome,
                cargo: cargo,
                data: data,
                telefone: telefone,
                
            },
            success: function(data) {
                
                 if(data.status != "error"){        
                    const table = document.getElementById("tablefunc");
                    while (table.rows.length > 1) {
                    table.deleteRow(1);
                    alert("Cadastrado com Sucesso!")
                    }
                    requisaoSelecionarFuncionario();
                    
                    //fechar tela modal automatico depois de cadastrar
                        fechar();
                 }else{
                    alert("Erro ao cadastrar");
                 }       
            
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
                
            }
        });
     
    
    } else {
      if ($("#matricula").val().trim() == "") {
        alert("MATRÍCULA não preenchido");
      } else if ($("#nomeCad").val().trim() == "") {
        alert("NOME não preenchido");
      } else if ($("#cargo").val().trim() == "") {
        alert("CARGO não preenchido");
      } else if ($("#data").val().trim() == "") {
        alert("DATA não preenchido");
      } else if ($("#telefone").val().trim() == "") {
        alert("TELEFONE não preenchido");
      }
    }
  });
});



//excluir 
// function excluiRegistro(item, botao) {
//   const rowIndex = botao.parentNode.parentNode.rowIndex;

//     document.getElementById("tablefunc").deleteRow(rowIndex);
// }


//PreencherSeletorModal
function preencherSeletor() {
    
     $.ajax({
            url: './../Model/funcionario/SelecionarCargo.php',
            method: 'post',
            dataType: 'json',
      
            success: function(data) {
               
              if(data.status != "error"){      
                    
                     var _option = $("#selectOP_Cargo");
                    for (var i = 0; i < data.length; i += 2) {
                        _option.append('<option value="' + data[i] + '">'+ data[i+1] + '</option>');  
                       
                    }
                }
            
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
                console.log(error);
            }
        });

}


//SelecionarFuncionarios
function requisaoSelecionarFuncionario() {

 $.ajax({
            url: './../Model/funcionario/SelecionarFuncionario.php',
            method: 'post',
            dataType: 'json',
      
            success: function(data) {
                 
                if(data.status != "error"){        
                     
                     
                      preencherTabela(data);
                }
            
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
                console.log(error);
            }
        });


}


//preencher a tabela, com botao excluir
function preencherTabela(data) {
    var tbody = $("#tablefunc");
    var n = 0;
   
    for (var i = 0; i < data.length; i += 5) {
      var tr = $("<tr>");
      
      n++;
      tr.append("<td>" + n + "</td>");
      tr.append("<td>" + data[i] + "</td>");
      tr.append("<td>" + data[i + 1] + "</td>");
      tr.append("<td>" + data[i + 2] + "</td>");
      tr.append("<td>" + data[i + 3] + "</td>");
      tr.append("<td>" + data[i + 4] + "</td>");
      tr.append('<td> <button type="button" id="excluir" onclick="excluiRegistro(' + data[i] + ', this )">Excluir</button> </td>');
      tbody.append(tr);
    }
}


function excluiRegistro(matricula,botao) {
    const rowIndex = botao.parentNode.parentNode.rowIndex;
 
    $.ajax({
        url: './../Model/funcionario/DeletarFuncionario.php',
        method: "POST",
        data: { matricula: matricula},
        success: function(data){
            console.log(data.tel);
            console.log(data.fun);
            if (data.status != "error") {
                document.getElementById('tablefunc').deleteRow(rowIndex);
                confirm("Tem Certeza Que Deseja Exluir Esse Funcionário?");
            } else {
                alert("Erro ao excluir o registro!");
            }
        }
    });
}


//atualizar Dados do Funcionario
$(document).ready(function(){
    $('#buscar').click(function() {
	var matricula = $("#matriculaAlt").val().trim();

	$.ajax({
		url: './../Model/funcionario/SelecionarFuncionarioEspecifico.php',
		data: { matricula: matricula },
        method: 'get',
		dataType: "json",
        data:{matricula: matricula},
       success: function(data){
           
            if(data.status != "Sem registro"){
               
                $("#nomeAlt").val(data[1]);
                $("#dataAlt").val(data[3]);
                $("#telefoneAlt").val(data[4]);
                BuscarCargo(data[0]);
                

            }else{
                alert (data.comentario);
            }
			
            
		},
         error: function(xhr, status, error) {
            console.log(xhr.responseText);
            console.log(error);
                       
            }
	})
});
});
$(document).ready(function(){
    $('#alterar').click(function() {
        var select = document.getElementById("selectOP_CargoAlt");
        var matriculaAlt = $('#matriculaAlt').val();
        var nomeAlt = $('#nomeAlt').val();
        var cargoAlt = select.options[select.selectedIndex].value;
        var dataAlt = $('#dataAlt').val();
        var telefoneAlt = $('#telefoneAlt').val();
        console.log(cargoAlt);           
        $.ajax({
            url: './../Model/funcionario/UpdateFuncionario.php',
            method: 'post',
            dataType: 'json',
            data: {
                matricula: matriculaAlt,
                nome: nomeAlt,
                cargo: cargoAlt,
                data: dataAlt,
                telefone: telefoneAlt
                
            },
            success: function(data) {
                console.log(data);
                $('#nomeAt').val('');
                $('#selectOP_CargoAlt').val('');
                $('#dataAlt').val('');
                $('#telefoneAlt').val('');
          
                },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
                
            }
        });
});
});



function BuscarCargo(matricula) {
 
     $.ajax({
            url: './../Model/funcionario/SelecionarCargoEspecifico.php',
            method: 'post',
            dataType: 'json',
            data:{matricula: matricula},      
            success: function(data) {
              console.log(data);  
              if(data.status != "error"){  
                                     
                     var _option = $("#selectOP_CargoAlt");
                    for (var i = 0; i < data.length; i += 2) {
                    
                        _option.append('<option value="  ' + data[i] + '" selected>'+ data[i+1] + '</option>');  
                       
                    }
                }
            
            },
            error: function(xhr, status, error) {
                console.log(xhr.responseText);
                console.log(error);
            }
        });

}
$(document).ready(function(){
    $('#buscarNovo').click(function() {
	var matricula = $("#matriculaCad").val().trim();

	$.ajax({
		url: './../Model/funcionario/SelecionarFuncionarioEspecifico.php',
		data: { matricula: matricula },
        method: 'get',
		dataType: "json",
       success: function(data){
           
            if(data.status != "Sem registro"){
               
                $("#nomeNovo").val(data[1]);
                
            }else{
                alert (data.comentario);
            }
			
            
		},
         error: function(xhr, status, error) {
            console.log(xhr.responseText);
            console.log(error);
                       
            }
	})
});
});

