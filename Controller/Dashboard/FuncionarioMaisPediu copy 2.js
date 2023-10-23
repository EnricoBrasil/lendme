function requisaoSelecionarFuncionarioMaisPediu() {

    $.ajax({
               url: './../Model/Relatorio/FuncionarioMaisPediu.php',
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
                        
                        preencherGraficoFMP(label, values)

                   }
               
               },
               error: function(xhr, status, error) {
                   console.log(xhr.responseText);
                   console.log(error);
               }
           });
   
   
   }


function preencherGraficoFMP(label, values) {
const ctx2 = document.getElementById('myChart2');
  new Chart(ctx2, {
    type: 'bar',
    data: {
      labels: label,
      datasets: [{
        label: 'Funcionário que mais pediu',
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

