// Código da página Login - index.html
const forms = document.querySelector(".forms"),
      pwShowHide = document.querySelectorAll(".eye-icon");

pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
        let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
        
        pwFields.forEach(password => {
            if(password.type === "password"){
                password.type = "text";
                eyeIcon.classList.replace("bx-hide", "bx-show");
                return;
            }
            password.type = "password";
            eyeIcon.classList.replace("bx-show", "bx-hide");
        })
        
    })
}) 

// Código da página ajuda - ajuda.html
function showTab(tabNumber) {
    // Esconder todas as abas do #table
    var tabContents = document.getElementsByClassName("help-slide");
    for (var i = 0; i < tabContents.length; i++) {
        tabContents[i].style.display = "none";
    }
  
    // Mostrar a aba selecionada
    document.getElementById("tab" + tabNumber).style.display = "block";
  }
  // Código da tela modal
function acao(tipo) {
    if (tipo === 'cad') {
      document.getElementById('myModalCad').style.display = 'block';
      preencherSeletor()
    } else if (tipo === 'alt') {
      document.getElementById('myModalAlt').style.display = 'block';
    }else if (tipo === 'user') {
      document.getElementById('myModalUser').style.display = 'block';
    }
   
  }

  function acaoAlt(tipo) {
    if (tipo === 'cad') {
      document.getElementById('myModalCad').style.display = 'block';
      preencherSeletor()
    } else if (tipo === 'alt') {
      document.getElementById('myModalAlt').style.display = 'block';
    } else if (tipo === 'user') {
      document.getElementById('myModalUser').style.display = 'block';
    }
    
  }

function acaoDev(tipo) {
    if (tipo === 'dev') {
      document.getElementById('myModalDevol').style.display = 'block';
    }
  }

  function fecharModal(idModal) {
    document.getElementById(idModal).style.display = 'none';
  }