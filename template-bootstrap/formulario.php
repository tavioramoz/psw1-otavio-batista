<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formulario.css">
    <title>Document</title>
</head>
<body>
<?php
    include_once('header.html')
    ?>
<form action="mostradados.php" method="POST">
    <div class="col-md-6"></div>
    <p>Email: <br> <input id="maior" type="text" name="Email"></p>
  </div>
    <div class="col-md-6">
    <p>Senha: <br> <input id="maior" type="text" name="senha"></p>
  </div>
    <div class="col-12">
    <p>Endereço: <br> <input id="maior" type="text" name="endereco"></p>
    </div>
    <div class="col-12">
    <p>Complemento: <br> <input id="maior" type="text" name="complemento"></p>
    </div>
  <div class="col-md-6">
  <p>Cidade: <br> <input id="maior" type="text" name="cidade"></p>
  </div>
  <div class="col-md-4">
                <label for="esta">Estado:</label>
                <select name="estado" id="esta" required>
                    <option value=" "> </option>
                    <option value="ac">AC</option>
                    <option value="al">AL</option>
                    <option value="ap">AP</option>
                    <option value="am">AM</option>
                    <option value="ba">BA</option>
                    <option value="ce">CE</option>
                    <option value="df">DF</option>
                    <option value="es">ES</option>
                    <option value="go">GO</option>
                    <option value="ma">MA</option>
                    <option value="mt">MT</option>
                    <option value="ms">MS</option>
                    <option value="mg">MG</option>
                    <option value="pa">PA</option>
                    <option value="pb">PB</option>
                    <option value="pr">PR</option>
                    <option value="pe">PE</option>
                    <option value="pi">PI</option>
                    <option value="rj">RJ</option>
                    <option value="rn">RN</option>
                    <option value="rs">RS</option>
                    <option value="ro">RO</option>
                    <option value="rr">RR</option>
                    <option value="sc">SC</option>
                    <option value="sp">SP</option>
                    <option value="se">SE</option>
                    <option value="to">TO</option>
                </select>
                </div>
                <div class="col-md-2">
  <p>CEP: <br> <input id="maior" type="text" name="cep"></p>
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
       Confirme
      </label>
    </div>
  </div>

  <section id="enviar">
                <input type="submit" id="ienviar" value="Salvar">
            </section>
    <?php
    include_once('footer.html')
    ?>
 
</form>
</body>
</html>





