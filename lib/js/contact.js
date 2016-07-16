$(function(){
  $('#form-contact').on("submit", function(){
    var nome = $('#nome').val();
    var email = $('#email').val();
    var assunto = $('#assunto').val();
    var mensagem = $('#mensagem').val();
    var filter = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(nome == "" || email == "" || mensagem == ""){
      showMessageForm("Preencha todos os campos!", "error");
    }else if(filter.test(email) == false){
      showMessageForm("O e-mail informado é inválido!", "error");
    }else{
      $.ajax({
        type: "post",
        url: "application/functions/ajax.php",
        data:{
          nome: nome,
          email: email,
          assunto: assunto,
          mensagem: mensagem,
          typeRequest: "contact"
        },
        success: function(data){
          if(data == 1){
            showMessageForm("Formulário de contato enviado com sucesso.", "success");
          }else{
            showMessageForm(data, "error");
          }
        },
        error: function(){
          showMessageForm("Algo deu errado, verifique sua conexão com a internet e tente novamente.", "error");
        }
      });
    }
  });
});
