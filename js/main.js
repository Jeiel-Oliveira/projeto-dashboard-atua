/* animação hamburguer menu */

$(document).ready(function () {

  $('.first-button').on('click', function () {

    $('.animated-icon1').toggleClass('open');

  });

});

/* Verificação da data para mudar o estilo */

var taskStatus = document.querySelectorAll('.task-status');
var notificationNumber = document.querySelector('#notification-number');
var QtdNotification = 0;

for (i = 0; i <= taskStatus.length - 1; i++) {
  
  var strData = taskStatus[i].textContent;
  var parseData = strData.split("/");
  var data = new Date(parseData[2], parseData[1] - 1, parseData[0]).toLocaleDateString();
  var todayDate = new Date().toLocaleDateString();

  if(data > todayDate) {        
    taskStatus[i].style.background = '#07812C';
  } else if (data === todayDate) {    
    taskStatus[i].style.background = '#5A5A5A';
    taskStatus[i].textContent = "HOJE";
  } else {    
    taskStatus[i].textContent = "ATRASADO";
    QtdNotification++;
  }  
     
}

notificationNumber.innerHTML = QtdNotification;

/* sitema de notificação para projeto atrasado */








