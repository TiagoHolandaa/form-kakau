<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="shortcut icon" href="../img/logo-sNome.png" type="image/x-icon">
    <title>FICHA BIOGRÁFICA</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/modal.css">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<style>
  .btn-grad {
    background-image: linear-gradient(to right, #088969 0%, #099773 51%, #26A783 100%);
}

</style>
</head>

<body>

        <?php
            require_once "sidebars.php";
        ?>
        
<main class="abas home" id="ficha-bio">
    <section>
        <div class="container-flex m-3 mx-4">
            <?php
                require_once "header.php";
            ?>
        </div>
        <?php
          require_once "modal.php"
        ?>
    </section>
    
  <div class="container-flex m-3 mx-4 " >

    <div class="p-5 pt-2 bg-white rounded-3">
      <div class="container-fluid py-4">
       
          <div class="col-md-12 position-relative">
              <label for="validationTooltip01" class="form-label">Escola:</label>
              <input type="text" class="form-control" style="background-color: #F6F5FF;" id="validationTooltip01" required>
              <div class="valid-tooltip">
                Salvo!
              </div>
          </div>
            <br>
        
          <div class="text-center text-white mb-3 py-3 rounded-3 mb-5" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 50px; background-image: linear-gradient(to right, #088969 0%, #099773 51%, #26A783 100%);">
          <h4 class="display-6 my-icon"><i class='bx bx-face px-2'></i>FICHA BIOGRÁFICA</h4>
          </div>

          <form class="row g-3">
    <div class="col-md-5 position-relative">
      <label for="validationTooltip01" class="form-label">Aluno(a):</label>
        <input type="text" class="form-control" style="background-color: #F6F5FF;" id="validationTooltip01" required>
          <div class="valid-tooltip">
            Salvo!
          </div>
    </div>

    <div class="col-md-1 position-relative">
      <label for="validationTooltip01" class="form-label">Nª:</label>
        <input type="text" class="form-control" style="background-color: #F6F5FF;" id="validationTooltip01" required>
          <div class="valid-tooltip">
            Salvo!
          </div>
    </div>

    <div class="col-md-2 position-relative">
      <label for="validationTooltip01" class="form-label">Ano/Série:</label>
        <input type="text" class="form-control" style="background-color: #F6F5FF;" id="validationTooltip01" required>
        <div class="valid-tooltip">
          Salvo!
        </div>
    </div>

    <div class="col-md-2 position-relative">
      <label for="validationTooltip02" class="form-label">Turma:</label>
        <input type="text" class="form-control" style="background-color: #F6F5FF;" id="validationTooltip02"  required>
      <div class="valid-tooltip">
        Salvo!
      </div>
    </div>

    <div class="col-md-2 position-relative">
      <label for="validationTooltipUsername" class="form-label"><Ri:a>Ano letivo:</Ri:a></label>
        <div class="input-group has-validation">
          <input type="text" class="form-control" style="background-color: #F6F5FF;" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
          <div class="invalid-tooltip">
            Por favor escolha um nome valído
          </div>
      </div>
    </div>

    <div class="col-md-3 position-relative">
      <label for="validationTooltip03" class="form-label">Idade:</label>
        <input type="text" class="form-control" style="background-color: #F6F5FF;" id="validationTooltip03" required>
        <div class="invalid-tooltip">
          Por favor escolha um município
        </div>
    </div>

    <div class="col-md-3 position-relative">
      <label for="validationTooltip03" class="form-label">Data de Nascimento:</label>
        <input type="date" class="form-control" style="background-color: #F6F5FF;" id="validationTooltip03" required>
        <div class="invalid-tooltip">
          Por favor escolha um município
        </div>
    </div>

    <div class="col-md-3 position-relative">
      <label for="validationTooltip04" class="form-label">Naturalidade:</label>
        <input type="text" class="form-control" style="background-color: #F6F5FF;" id="validationTooltip04" required>
        <div class="invalid-tooltip">
          Por favor escolha uma naturalidade valída
        </div>
    </div>

    <div class="col-md-3 position-relative">
      <label for="validationTooltip05" class="form-label">Município:</label>
        <input type="text" class="form-control" style="background-color: #F6F5FF;" id="validationTooltip05" required>
        <div class="invalid-tooltip">
        Por favor escolha um município valído
        </div>
    </div>

    <div class="col-md-8 position-relative">
      <label for="validationTooltip01" class="form-label">Endereço:</label>
        <input type="text" class="form-control" style="background-color: #F6F5FF;" id="validationTooltip01" required>
        <div class="valid-tooltip">
          Salvo!
        </div>
    </div>

    <div class="col-md-4 position-relative">
      <label for="validationTooltip01" class="form-label">CEP:</label>
        <input type="text" class="form-control" style="background-color: #F6F5FF;" id="validationTooltip01" required>
        <div class="valid-tooltip">
          Salvo!
        </div>
    </div>

    <div class="col-md-8 position-relative">
      <label for="validationTooltip02" class="form-label">Responsável pelo(a) Aluno(a):</label>
        <input type="text" class="form-control" style="background-color: #F6F5FF;" id="validationTooltip02" required>
        <div class="valid-tooltip">
          Salvo!
        </div>
    </div>

    <div class="col-md-4 position-relative">
      <label for="validationTooltipUsername" class="form-label">Parentesco:</label>
        <div class="input-group has-validation">
          <input type="text" class="form-control my-form" style="background-color: #F6F5FF;" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
          <div class="invalid-tooltip">
            Por favor escolha um nome valído
          </div>
        </div>
    </div>

    <div class="col-md-3 position-relative">
      <label for="validationTooltip04" class="form-label">Telefone(Residência):</label>
        <input type="text" class="form-control" style="background-color: #F6F5FF;" id="validationTooltip04" required>
        <div class="invalid-tooltip">
          Por favor escolha um telefone valído
        </div>
    </div>

    <div class="col-md-3 position-relative">
      <label for="validationTooltip05" class="form-label">Telefone:</label>
        <input type="text" class="form-control" style="background-color: #F6F5FF;" id="validationTooltip05" required>
        <div class="invalid-tooltip">
          Por favor escolha um telefone valído
        </div>
    </div>

    <div class="col-md-3 position-relative">
      <label for="validationTooltip05" class="form-label">Profissão:</label>
        <input type="text" class="form-control" style="background-color: #F6F5FF;" id="validationTooltip05" required>
        <div class="invalid-tooltip">
          Por favor escolha um telefone valído
        </div>
    </div>

    <div class="col-md-3 position-relative">
      <label for="validationTooltipUsername" class="form-label">Vículo:</label>
        <select id="inputState" style="background-color: #F6F5FF;"  class="form-select">
          <option selected>Por favor selecione...</option>
          <option>Desempregado</option>
          <option>Autônomo</option>
          <option>Outros</option>
        </select>
    </div>

  <div class="col-12">
  <button class="btn-grad" style="box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;"  type="button">Salvar</button>
  </div>
</form>
 

</main>
         
    <script src="../js/bootstrap.js"></script>

    <script src="../js/sidebars.js"></script>
</body>

</html>