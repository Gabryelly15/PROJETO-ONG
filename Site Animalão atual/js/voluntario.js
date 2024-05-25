function emailSend() {
  var userName = document.getElementById('nome').value;
  var email = document.getElementById('email').value;
  var contato = document.getElementById('contato').value;
  var mensagem = document.getElementById('mensagem').value;

  var messageBody = "Name: " + userName + "<br/> E-mail: " + email + "<br/> Contato: " + contato + "<br/> Por que ser um voluntário?: " + mensagem;

  Email.send({
      Host: "smtp.elasticemail.com",
      Username: "gabryelly239@gmail.com",
      Password: "2B3915746081895F5E0C450A36BDEDCC6B2C",
      To: 'gabryellyyasmym39@gmail.com',
      From: "gabryelly239@gmail.com",
      Subject: "SOLICITAÇÃO VOLUNTARIADO",
      Body: messageBody
  }).then(
    message => {
      if(message=='OK'){
        swal("Secussful", "Obrigada, em breve retornamos!", "success");
      }
      else{
        swal("Error", "Tente novamente!", "error");
      }
    }
  );
  }