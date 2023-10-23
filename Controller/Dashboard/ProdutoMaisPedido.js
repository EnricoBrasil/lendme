function requisaoSelecionarProdutoMaisPedido() {

    $.ajax({
               url: './../Model/Relatorio/ProdutoMaisPedido.php',
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
                        
                        preencherGraficoPMP(label, values)

                   }
               
               },
               error: function(xhr, status, error) {
                   console.log(xhr.responseText);
                   console.log(error);
               }
           });
   
   
   }


function preencherGraficoPMP(label, values) {
const ctx = document.getElementById('myChart');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: label,
      datasets: [{
        label: 'Produto mais pedido',
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

