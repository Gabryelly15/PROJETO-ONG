function emailSend(){

        var Username = document.getElementById('nome').value;
        var email = document.getElementById('email').value;
        var contato = document.getElementById('contato').value;
        var mensagem = document.getElementById('mensagem').value;

        var messageBody = "Nome: " + Username + "<br/> E-mail: " + email + "<br/> Contato: " + contato + "<br/> Por que ser um voluntário?: " + mensagem;

        Email.send({
        Host : "smtp.elasticemail.com",
        Username : "gabryelly239@gmail.com",
        Password : "63BD6E11B2E3DA511E827C5A473E118137F3",
        To : 'g.yasmym@uni9.edu.br',
        From : "gabryelly239@gmail.com",
        Subject : "SOLICITAÇÃO VOLUNTARIADO",
        Body : messageBody
    }).then(
      message => {
       if (message=='OK'){
        swal("Obrigada!", "Entraremos em contato em breve :)", "success");
       }
       else{
        swal("Error", "You clicked the button!", "error");
       }
      }
    );
}