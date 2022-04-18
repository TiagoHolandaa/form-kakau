<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link rel="shortcut icon" href="../img/logo-sNome.png" type="image/x-icon">
    <title>Formulário</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/modal.css">
    <link rel="stylesheet" href="../css/features.css">
    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">

</head>

<body style="background-color: #E4E9F7;">

      <?php 
         require_once "sidebars.php";
      ?>
    
    <section class="home">
      <div class="container-flex m-3 mx-4">
        <?php
          require_once "header.php"
        ?>
        <?php
          require_once "modal.php"
        ?>

        <div class="container-fluid px-4 py-5" id="custom-cards">
          <div class="text-center text-white mb-3 py-3 rounded-3" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 50px; background-image: linear-gradient(to right, #088969 0%, #099773 51%, #26A783 100%);">
            <h4 class="display-6" ><i class='bx bx-home-smile px-2' ></i>Início</h4>
          </div>
            
    
        </div>
          <div class="container-fluid bg-white rounded-3 d-flex justify-content-center " style="width:90vw; height:47vh; font-family: 'Monoton', cursive;">
                <p class="font-motonon display-1 align-items-center d-flex justify-content-center " style="font-family: 'Monoton', cursive;">Bem-vindo!</p><br>
            </div>
            
    <?php
      require_once "footer.php"
    ?>
    </section>

    <script src="../js/bootstrap.js"></script>
    <script src="../js/side.js"></script>
    <script src="../js/modal.js"></script>
</body>

</html>