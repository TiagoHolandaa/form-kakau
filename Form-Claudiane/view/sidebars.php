<!-- Coding by CodingLab | www.codinglabweb.com -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title>Dashboard Sidebar Menu</title>
    <style>
        /* Google Font Import - Poppins */
        
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        :root {
            /* ===== Colors ===== */
            --body-color: #E4E9F7;
            --sidebar-color: #FFF;
            --primary-color: #099773;
            --primary-color-light: #ECFEF9;
            --toggle-color: #DDD;
            --text-color: #707070;
            /* ====== Transition ====== */
            --tran-03: all 0.2s ease;
            --tran-03: all 0.3s ease;
            --tran-04: all 0.3s ease;
            --tran-05: all 0.3s ease;
        }
        
        body {
            background-color: var(--body-color);
            transition: var(--tran-05);
            background-size: 200%;
        }
        
        ::selection {
            background-color: var(--primary-color);
            color: #fff;
        }
        
        body.dark {
            --body-color: #18191a;
            --sidebar-color: #242526;
            --primary-color: #3a3b3c;
            --primary-color-light: #3a3b3c;
            --toggle-color: #fff;
            --text-color: #ccc;
        }
        /* ===== Sidebar ===== */
        
        .my-sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            padding: 10px 14px;
            background: var(--sidebar-color);
            transition: var(--tran-05);
            z-index: 100;
        }
        
        .my-sidebar.close {
            width: 88px;
        }
        /* ===== Reusable code - Here ===== */
        
        .my-sidebar li {
            height: 50px;
            list-style: none;
            display: flex;
            align-items: center;
            margin-top: 10px;
        }
        
        .my-sidebar header .image,
        .my-sidebar .icon {
            min-width: 60px;
            border-radius: 6px;
        }
        
        .my-sidebar .icon {
            min-width: 60px;
            border-radius: 6px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }
        
        .my-sidebar .text,
        .my-sidebar .icon {
            color: var(--text-color);
            transition: var(--tran-03);
        }
        
        .my-sidebar .text {
            font-size: 17px;
            font-weight: 500;
            white-space: nowrap;
            opacity: 1;
        }
        
        .my-sidebar.close .text {
            opacity: 0;
        }
        /* =========================== */
        
        .my-sidebar header {
            position: relative;
        }
        
        .my-sidebar header .image-text {
            display: flex;
            align-items: center;
        }
        
        .my-sidebar header .logo-text {
            display: flex;
            flex-direction: column;
        }
        
        header .image-text .name {
            margin-top: 2px;
            font-size: 18px;
            font-weight: 600;
        }
        
        header .image-text .profession {
            font-size: 16px;
            margin-top: -2px;
            display: block;
        }
        
        .my-sidebar header .image {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .my-sidebar header .image img {
            width: 40px;
            border-radius: 6px;
        }
        
        .my-sidebar header .toggle {
            position: absolute;
            top: 50%;
            right: -25px;
            transform: translateY(-50%) rotate(180deg);
            height: 25px;
            width: 25px;
            background-color: var(--primary-color);
            color: var(--sidebar-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            cursor: pointer;
            transition: var(--tran-05);
        }
        
        body.dark .my-sidebar header .toggle {
            color: var(--text-color);
        }
        
        .my-sidebar.close .toggle {
            transform: translateY(-50%) rotate(0deg);
        }
        
        .my-sidebar .menu {
            margin-top: 40px;
        }
        
        .my-sidebar li.search-box {
            border-radius: 6px;
            background-color: var(--primary-color-light);
            cursor: pointer;
            transition: var(--tran-05);
        }
        
        .my-sidebar li.search-box input {
            height: 100%;
            width: 100%;
            outline: none;
            border: none;
            background-color: var(--primary-color-light);
            color: var(--text-color);
            border-radius: 6px;
            font-size: 17px;
            font-weight: 500;
            transition: var(--tran-05);
        }
        
        .my-sidebar li a {
            list-style: none;
            height: 100%;
            background-color: transparent;
            display: flex;
            align-items: center;
            height: 100%;
            width: 100%;
            border-radius: 6px;
            text-decoration: none;
            box-shadow: none;
            transition: var(--tran-03);
        }
        
        .my-sidebar li a:hover {
            background-color: var(--primary-color);
            box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;
        }
        
        .my-sidebar li a:hover .icon,
        .my-sidebar li a:hover .text {
            color: var(--sidebar-color);
        }
        
        body.dark .my-sidebar li a:hover .icon,
        body.dark .my-sidebar li a:hover .text {
            color: var(--text-color);
        }
        
        .my-sidebar .menu-bar {
            height: calc(100% - 55px);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow-y: scroll;
        }
        
        .menu-bar::-webkit-scrollbar {
            display: none;
        }
        
        .my-sidebar .menu-bar .mode {
            border-radius: 6px;
            background-color: var(--primary-color-light);
            position: relative;
            transition: var(--tran-05);
        }
        
        .menu-bar .mode .sun-moon {
            height: 50px;
            width: 60px;
        }
        
        .mode .sun-moon i {
            position: absolute;
        }
        
        .mode .sun-moon i.sun {
            opacity: 0;
        }
        
        body.dark .mode .sun-moon i.sun {
            opacity: 1;
        }
        
        body.dark .mode .sun-moon i.moon {
            opacity: 0;
        }
        
        .menu-bar .bottom-content .toggle-switch {
            position: absolute;
            right: 0;
            height: 100%;
            min-width: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
            cursor: pointer;
        }
        
        .toggle-switch .switch {
            position: relative;
            height: 22px;
            width: 40px;
            border-radius: 25px;
            background-color: var(--toggle-color);
            transition: var(--tran-05);
        }
        
        .switch::before {
            content: '';
            position: absolute;
            height: 15px;
            width: 15px;
            border-radius: 50%;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            background-color: var(--sidebar-color);
            transition: var(--tran-04);
        }
        
        body.dark .switch::before {
            left: 20px;
        }
        
        .home {
            position: absolute;
            top: 0;
            top: 0;
            left: 250px;
            height: 100vh;
            width: calc(100% - 250px);
            background-color: var(--body-color);
            transition: var(--tran-05);
        }

        
        
        .my-sidebar.close~.home {
            left: 78px;
            height: 100vh;
            width: calc(100% - 78px);
        }
        
        body.dark .home .text {
            color: var(--text-color);
        }
    </style>
</head>

<body>
    <nav class="my-sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../img/logo-sNome.png" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name">Formulário</span>
                    <span class="profession">EEEP José Vidal</span>
                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

                <li class="search-box">
                    <i class='bx bx-search icon'></i>
                    <input type="text" placeholder="Pesquisar">
                </li>

                    <li class="">
                        <a href="index.php" >
                        <i class='bx bx-home-smile icon' ></i>
                            <span class="text nav-text">Início</span>
                        </a>
                    </li>


                    <li class="">
                        <a href="ficha-bio.php" >
                        <i class='bx bx-face icon'></i>
                            <span class="text nav-text">Ficha Biográfica</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="comp-familiar.php">
                        <i class='bx bx-group icon' ></i></i>
                            <span class="text nav-text">Composição Fam.</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="vida-escolar.php">
                        <i class='bx bx-book icon'></i>
                            <span class="text nav-text">Vida Escolar</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="atividade.php">
                        <i class='bx bx-time icon'></i>
                            <span class="text nav-text">Atividades</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="saude.php">
                            <i class='bx bx-heart icon'></i>
                            <span class="text nav-text">Saúde/Aliment.</span>
                        </a>
                    </li>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="#">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>

            </div>
        </div>

    </nav>

    <script src="../js/side.js">
    </script>

</body>

</html>