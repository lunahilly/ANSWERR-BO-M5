<?php
include_once("../../source/connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/c47146fe67.js" crossorigin="anonymous"></script>
    <title>NVVN-SDG</title>
    
</head>

<body>
    <!-- wat er in de nav staat moeten we nog bedenken -->
    <nav>
        <ul>
            <li> <a href="../index.php"><img src="/img/NVVN.webp" alt="logo"></a> </li>
            <li class= "menu"> <a href="index.php">Over NVVN</a></li>  <!-- we moeten he9er nog een pagina voor maken, info: https://nvvn.nl/over-nvvn/ -->
            <li class="menu"><a href="https://sdggame.nl/">PLAY THE GAME!</a></li>
            <!--    <i class="fa-solid fa-bars fa-2xl" style="color: #000000;"></i>  -->
        </ul>
    </nav>
    <main>
        <?php
            include("../../views/AboutSDG.php");
        ?>
        <!-- info pagina over NVVN, https://nvvn.nl/over-nvvn/ -->
    </main>
    <?php
    include("../../views/footer.php");
    ?>
</body>

</html>