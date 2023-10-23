function requisaoSelecionarQuantidadeProdutos() {

    $.ajax({
               url: './../Model/Relatorio/QuantidadeProduto.php',
               method: 'post',
               dataType: 'json',
         
               success: function(data) {
                   if(data.status != "error"){        
               
                    i=0;
                    const label =[];
                    const values = [];
                    for (let i = 0; i < data.length; i += 2) {
                       
                        label.push(data[i]); 
                        values.push(data[i + 1]);     
                        
                        }
                        
                        preencherGraficoQP(label, values)

                   }
               
               },
               error: function(xhr, status, error) {
                   console.log(xhr.responseText);
                   console.log(error);
               }
           });
   
   
   }


function preencherGraficoQP(label, values) {
const ctx3 = document.getElementById('myChart3');

  new Chart(ctx3, {
    type: 'bar',
    data: {
      labels: label,
      datasets: [{
        label: 'Quantidade de produtos',
        data: values,
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
}
