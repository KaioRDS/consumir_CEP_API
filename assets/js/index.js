//função para a mascara do cep
$('#cep').ready(function(){
    $('#cep').inputmask("99999-999");  //static mask
  });
//função para verificar e requisitar o cep
$('#procurarCep').on('click', function (e) {
    e.preventDefault();

    let cep = $('#cep').val().trim();
    let url = 'https://viacep.com.br/ws/'+cep+'/json/';
    if (cep != ''){
        $.ajax({
            type: "POST",
            url: 'src/requisitaAPI.php',
            data: {
                url : url
            },
            dataType: "json",
            success: function (response) {
                if(response.erro == undefined ){
                    $('#logradouro').val(response.logradouro);
                    $('#bairro').val(response.bairro);
                    $('#ddd').val(response.ddd)
                    $('#uf').val(response.uf)
                    
                }else{
                    alertSimples('error', 'CEP invalido')
                }
            }
        });
    }
    else{
        alertSimples('error','Informe o CEP')
    }
});

//função para chamar um alerta simples
function alertSimples(type, message){
    Swal.fire({
        position: 'top-end',
        icon: type,
        title: message,
        showConfirmButton: false,
        backdrop: false,
        timer: 1300
      })
}