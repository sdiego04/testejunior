<?php
//view criada para informar o cep
?>

<head>
    <title> MEU CEP </title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</head>
<body>
      <div class="container">
          <div class="row">
              <div class="col"></div>
              <div class="col">
                <!-- form que envia o cep informado os controllers-->
                <form class="form-control" action="consultaCep" method="post">
                    <label for="cep"> Insira o CEP: </label>
                    <input class="form-control" type="text" name="cep" id="cep" required><br>
                    <button class="btn btn-warning" type="submit" value="Enviar">Enviar</button>
                    @csrf
                </form>
              </div>
              <div class="col"></div>
          </div>
      </div>
      <div class="container" >
          <div class="row" >
              <div class="col"></div>
              <div class="col">
                <?php
                    //confere se o campo cep foi preenchido para poder exibir os dados da consulta
                    if(!empty($_POST['cep'])){
                        echo "<br><br><h6>CEP Informado: $xml->cep</h6><br>";
                        echo "<h6>Rua: $xml->logradouro</h6><br>";
                        echo "<h6>Bairro: $xml->bairro</h6><br>";
                        echo "<h6>Estado: $xml->uf</h6><br>";
                    }
                    ?>
              </div>
              <div class="col"></div>
          </div>
      </div>
</body>
</html>
