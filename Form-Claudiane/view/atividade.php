<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="shortcut icon" href="../img/logo-sNome.png" type="image/x-icon">
    <title>OCUPAÇÃO | ATIVIDADES</title>
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

<body style="background-color: #E4E9F7;">

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
    
  <div class="container-flex m-3 mx-4 pb-4" >

    <div class="px-5 pt-2 bg-white rounded-3">
      <div class="container-fluid py-3">
        
          <div class="text-center text-white mb-3 py-3 rounded-3 mb-5 mt-5" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 50px; background-image: linear-gradient(to right, #088969 0%, #099773 51%, #26A783 100%);">
          <h4 class="display-6 my-icon"><i class='bx bx-time px-2'></i>OCUPAÇÃO | ATIVIDADES</h4>
          </div>

          <form class="row gx-3 gy-2 align-items-center mb-3">
                    <div class="col-10">
                      <input type="text" class="form-control" placeholder="Cursou a educação infantil? Em quanto tempo?" style="background-color: #F6F5FF;" id="validationTooltip01" required>
                        <div class="valid-tooltip">
                          Salvo!
                        </div>
                    </div>
                    
                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Sim</label>
                    </div>
                    </div>

                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Não</label>
                    </div>
                    </div>

                    <div class="col-10">
                      <input type="text" class="form-control" placeholder="Estudou em escola particular? Em quanto tempo?" style="background-color: #F6F5FF;" id="validationTooltip01" required>
                        <div class="valid-tooltip">
                          Salvo!
                        </div>
                    </div>
                    
                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Sim</label>
                    </div>
                    </div>

                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Não</label>
                    </div>
                    </div>

                    <div class="col-10">
                      <input type="text" class="form-control" placeholder="Participa(ou) de outras atividades? Quais?" style="background-color: #F6F5FF;" id="validationTooltip01" required>
                        <div class="valid-tooltip">
                          Salvo!
                        </div>
                    </div>
                    
                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Sim</label>
                    </div>
                    </div>

                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Não</label>
                    </div>
                    </div>

                    <div class="col-10">
                      <input type="text" class="form-control" placeholder="Repetiu algum ano? Qual/Quais?" style="background-color: #F6F5FF;" id="validationTooltip01" required>
                        <div class="valid-tooltip">
                          Salvo!
                        </div>
                    </div>
                    
                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Sim</label>
                    </div>
                    </div>

                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Não</label>
                    </div>
                    </div>

                    <div class="col-4">
                      <input type="text" class="form-control border-0 bg-white" placeholder="Estuda todos os dias em casa? Tempo (aproximad.) (HH:MM):" style="background-color: #F6F5FF;" id="validationTooltip01" disabled>
                        <div class="valid-tooltip">
                          Salvo!
                        </div>
                    </div>

                    <div class="col-6">
                      <input type="time" class="form-control" placeholder="Estuda todos os dias em casa? Tempo (aproximadamente) (HH:MM)" style="background-color: #F6F5FF;" id="validationTooltip01" required>
                        <div class="valid-tooltip">
                          Salvo!
                        </div>
                    </div>
                    
                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Sim</label>
                    </div>
                    </div>

                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Não</label>
                    </div>
                    </div>

                    <div class="col-10">
                      <input type="text" class="form-control" placeholder="Dispõe de local adequado para estudo? Onde?" style="background-color: #F6F5FF;" id="validationTooltip01" required>
                        <div class="valid-tooltip">
                          Salvo!
                        </div>
                    </div>
                    
                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Sim</label>
                    </div>
                    </div>

                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Não</label>
                    </div>
                    </div>

                    <div class="col-10">
                      <input type="text" class="form-control" placeholder="Dispensado – prática de Ed. Física? Por quê?" style="background-color: #F6F5FF;" id="validationTooltip01" required>
                        <div class="valid-tooltip">
                          Salvo!
                        </div>
                    </div>
                    
                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Sim</label>
                    </div>
                    </div>

                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Não</label>
                    </div>
                    </div>

                    <div class="col-10">
                      <input type="text" class="form-control" placeholder="Acompanhamento especializado? Qual?" style="background-color: #F6F5FF;" id="validationTooltip01" required>
                        <div class="valid-tooltip">
                          Salvo!
                        </div>
                    </div>
                    
                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Sim</label>
                    </div>
                    </div>

                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Não</label>
                    </div>
                    </div>

                    <div class="col-10">
                      <input type="text" class="form-control" placeholder="Alguém se interessa pelo teu estudo? Quem?" style="background-color: #F6F5FF;" id="validationTooltip01" required>
                        <div class="valid-tooltip">
                          Salvo!
                        </div>
                    </div>
                    
                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Sim</label>
                    </div>
                    </div>

                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Não</label>
                    </div>
                    </div>

                    <div class="col-10">
                      <input type="text" class="form-control" placeholder="Alguém o ajuda a estudar? Quem?" style="background-color: #F6F5FF;" id="validationTooltip01" required>
                        <div class="valid-tooltip">
                          Salvo!
                        </div>
                    </div>
                    
                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Sim</label>
                    </div>
                    </div>

                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Não</label>
                    </div>
                    </div>

                    <div class="col-10">
                      <input type="text" class="form-control" placeholder="Frequenta a escola por que quer? Motivo?" style="background-color: #F6F5FF;" id="validationTooltip01" required>
                        <div class="valid-tooltip">
                          Salvo!
                        </div>
                    </div>
                    
                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Sim</label>
                    </div>
                    </div>

                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Não</label>
                    </div>
                    </div>

                    <div class="col-10">
                      <input type="text" class="form-control" placeholder="Frequenta o curso pretendido? Por quê?" style="background-color: #F6F5FF;" id="validationTooltip01" required>
                        <div class="valid-tooltip">
                          Salvo!
                        </div>
                    </div>
                    
                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Sim</label>
                    </div>
                    </div>

                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Não</label>
                    </div>
                    </div>

                    <div class="col-10">
                      <input type="text" class="form-control" placeholder="Gosta de estudar nesta escola? Motivo?" style="background-color: #F6F5FF;" id="validationTooltip01" required>
                        <div class="valid-tooltip">
                          Salvo!
                        </div>
                    </div>
                    
                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Sim</label>
                    </div>
                    </div>

                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Não</label>
                    </div>
                    </div>

                    <div class="col-10">
                      <input type="text" class="form-control" placeholder="Recebe apoio pedagógico? Qual?" style="background-color: #F6F5FF;" id="validationTooltip01" required>
                        <div class="valid-tooltip">
                          Salvo!
                        </div>
                    </div>
                    
                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Sim</label>
                    </div>
                    </div>

                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Não</label>
                    </div>
                    </div>

                    <div class="col-10">
                      <input type="text" class="form-control border-0 bg-white" placeholder="Estudou nesta escola no ano anterior?" id="validationTooltip01" disabled>
                        <div class="valid-tooltip">
                          Salvo!
                        </div>
                    </div>
                    
                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Sim</label>
                    </div>
                    </div>

                    <div class="col-auto">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-check-label" for="flexSwitchCheckDefault">Não</label>
                    </div>
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