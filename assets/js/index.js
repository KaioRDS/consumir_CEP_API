//função para fazer a mascara do cep



//função para verificar e requisitar o cep
$('#procurarCep').on('click', function (e) {
    e.preventDefault();

    let cep = $('#cep').val();
    
    if (cep != ''){

    }else{
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