<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumir API</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header d-flex justify-content-center d-flex flex-wrap align-content-center">
                   Consumir API de CEP 
                </div>   
            </div> 
        </div>
        <div class="row">
            <div class="col-6 digita-area">
                <div>
                    <form class="form-cep" >
                        CEP : <br/>
                        <input id="cep" class="input-cep"  type="text" placeholder="digite seu CEP">
                        <button id="procurarCep">Procurar CEP</button>
                    </form>
                </div>
            </div>
            <div class="col-6 resposta-area">
                <div>
                    Endereço : <br/>
                    <input type="text"  id="logradouro" class="input-resposta">
                    Bairro : <br/>
                    <input type="text"  id="bairro" class="input-resposta">
                    DDD : <br/>
                    <input type="text"  id="ddd" class="input-resposta">
                    UF : <br/>
                    <input type="text"  id="uf" class="input-resposta">
                </div>
            </div>
        </div>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="assets/js/inputmask.min.js"></script>
<script src="assets/js/jquery.inputmask.min.js"></script>
<script src="assets/js/index.js"></script>
</body>
</html>