<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="shortcut icon" href="../img/logo-sNome.png" type="image/x-icon">
    <title>SAÚDE | ALIMENTAÇÃO</title>
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
        
          <div class="text-center text-white mb-3 py-3 rounded-3 mb-5 mt-5" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 50px; background-image: linear-gradient(to right, #088969 0%, #099773 51%, #26A783 100%);">
          <h4 class="display-6 my-icon"><i class='bx bx-heart px-2'></i>SAÚDE | ALIMENTAÇÃO</h4>
          </div>

          <form class="row gx-3 gy-2 align-items-center mb-3">
                    <div class="col-7">
                      <input type="text" class="form-control" placeholder="Outro" style="background-color: #F6F5FF;" id="validationTooltip01" required>
                        <div class="valid-tooltip">
                          Salvo!
                        </div>
                    </div>
                    
                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Visuais</label>
                    </div>
                    </div>

                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Auditivas</label>
                    </div>
                    </div>

                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Motoras</label>
                    </div>
                    </div>

                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">De fala</label>
                    </div>
                    </div>

                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">De liguagem</label>
                    </div>
                    </div>
                </form>

          <form class="row g-3">
              <div class="col-md-4 position-relative">
                <label for="validationTooltip01" class="form-label">Tipo sanguínio:</label>
                  <input type="text" class="form-control" style="background-color: #F6F5FF;" id="validationTooltip01" required>
                    <div class="valid-tooltip">
                      Salvo!
                    </div>
              </div>

              <div class="col-md-8 position-relative">
                <label for="validationTooltip01" class="form-label">Doença(s) Frequente(s):</label>
                  <input type="text" class="form-control" style="background-color: #F6F5FF;" id="validationTooltip01" required>
                    <div class="valid-tooltip">
                      Salvo!
                    </div>
              </div>

              <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">Doenças permanentes:</label>
                  <input type="text" class="form-control" style="background-color: #F6F5FF;" id="validationTooltip01" required>
                  <div class="valid-tooltip">
                    Salvo!
                  </div>
              </div>

              <div class="col-md-6 position-relative">
                <label for="validationTooltip02" class="form-label">Doenças graves na família:</label>
                  <input type="text" class="form-control" style="background-color: #F6F5FF;" id="validationTooltip02"  required>
                <div class="valid-tooltip">
                  Salvo!
                </div>
              </div>

              <div class="col-md-4 position-relative">
                <label for="validationTooltipUsername" class="form-label"><Ri:a>Costuma ter dores de cabeça?</Ri:a></label>
                  <div class="input-group has-validation">
                    <input type="text" class="form-control" style="background-color: #F6F5FF;" id="validationTooltipUsername" aria-describedby="validationTooltipUsernamePrepend" required>
                    <div class="invalid-tooltip">
                      Por favor escolha um nome valído
                    </div>
                </div>
              </div>

              <div class="col-md-4 position-relative">
                <label for="validationTooltip03" class="form-label">Alergia(s):</label>
                  <input type="text" class="form-control" style="background-color: #F6F5FF;" id="validationTooltip03" required>
                  <div class="invalid-tooltip">
                    Por favor escolha um município
                  </div>
              </div>

              <div class="col-md-4 position-relative">
                <label for="validationTooltip03" class="form-label">Cuidados especiais de saúde::</label>
                  <input type="text" class="form-control" style="background-color: #F6F5FF;" id="validationTooltip03" required>
                  <div class="invalid-tooltip">
                    Por favor escolha um município
                  </div>
              </div>
              

              <div class="col-md-6 position-relative">
                <label for="validationTooltip05" class="form-label">A que horas costuma dormir?</label>
                  <input type="text" class="form-control" style="background-color: #F6F5FF;" id="validationTooltip05" required>
                  <div class="invalid-tooltip">
                  Por favor escolha um município valído
                  </div>
              </div>

              <div class="col-md-6 position-relative">
                <label for="validationTooltip01" class="form-label">Nª de horas que costuma dormir:</label>
                  <input type="text" class="form-control" style="background-color: #F6F5FF;" id="validationTooltip01" required>
                  <div class="valid-tooltip">
                    Salvo!
                  </div>
              </div>

              <form class="row m-5 align-items-center">
                    <div class="col-10">
                      <input type="text" class="form-control" placeholder="Faz uso de algum tipo de medicamento? Qual?" style="background-color: #F6F5FF;" id="validationTooltip01" required>
                        <div class="valid-tooltip">
                          Salvo!
                        </div>
                    </div>
                    
                    <div class="col-auto">
                      <div class="form-check">
                        <input type="radio" class="btn-check" name="options-outlined" id="success-outlined" autocomplete="off">
                        <label class="btn btn-outline-success" for="success-outlined">Sim</label>
                      </div>
                    </div>

                    <div class="col-auto">
                      <div class="form-check">
                        <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off">
                        <label class="btn btn-outline-danger" for="danger-outlined">Não</label>
                      </div>
                    </div>

                    <div class="col-10">
                      <input type="text" class="form-control" placeholder="Alimenta-se ao sair de casa? Qual?" style="background-color: #F6F5FF;" id="validationTooltip01" required>
                        <div class="valid-tooltip">
                          Salvo!
                        </div>
                    </div>
                    
                    <div class="col-auto">
                      <div class="form-check">
                        <input type="radio" class="btn-check" name="options-outlined" id="outlined1" autocomplete="off">
                        <label class="btn btn-outline-success" for="outlined1">Sim</label>
                      </div>
                    </div>

                    <div class="col-auto">
                      <div class="form-check">
                        <input type="radio" class="btn-check" name="options-outlined" id="outlined2" autocomplete="off">
                        <label class="btn btn-outline-danger" for="outlined2">Não</label>
                      </div>
                    </div>
                    
                </form>


            <div class="col-12">
            <button class="btn-grad" style="box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;"  type="button">Salvar</button>
            </div>
          </form>
          
 

</main>
         
    <script src="../js/bootstrap.js"></script>

    <script src="../js/sidebars.js"></script>
</body>

</html>