var form = document.querySelector("#newForm");

/* validacao dos campos no newTask */

form.addEventListener('submit', function(event) {
    

    if (!validateForm()) {
      alert("Formulário invalido");
      event.preventDefault();
    }
  
  });
  
  function validateForm() {
  
    var inputTask = document.querySelector('#name-task');
    var dataTask = document.querySelector('#date-task');
    var responsibleTask = document.querySelector('#responsible-task');  

    var feedBackName = document.querySelector('#feedbackUserName');     
    var feedBackDate = document.querySelector('#feedbackUserDate');     
    var feedBackRespons = document.querySelector('#feedbackUserRespons');
    
    var contErr = 0;
  
    if (inputTask.value == '') {
        contErr++;                             
        feedBackName.innerHTML = 'Digite o nome da tarefa';   
    } else {
        feedBackName.innerHTML = '';
    }
  
    if (dataTask.value == '') {
        contErr++;      
        feedBackDate.innerHTML = 'Escolha a data da tarefa';   
    } else {
        feedBackDate.innerHTML = '';   
    }
  
    if (responsibleTask.value == '') {
        contErr++;     
        feedBackRespons.innerHTML = 'Escolha o responsável da tarefa';   
    } else {
        feedBackRespons.innerHTML = '';   
    }

    console.log(contErr);
  
    if (contErr > 0) {
        return false;
    } else {
        return true;
    }
  
  }