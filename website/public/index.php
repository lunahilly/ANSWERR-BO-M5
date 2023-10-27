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
    <?php
    include("../views/nav.php");
    ?>


    <main>
        <div class="highlight">  <!-- de gehighlighte sdgs, moet nog met php -->
        
            <?php
                include("../views/sdg.php");
                include("../views/sdg.php");
                include("../views/sdg.php");
            ?>
        </div>

        <?php
            include("../views/AboutSDG.php");
        ?>

        <article class="alle_sdgs">  <!-- alle sdgs om op te klikken hier -->
            <img src="" alt="sdg" class="sdg">
            <img src="" alt="sdg" class="sdg">
            <img src="" alt="sdg" class="sdg">
            <img src="" alt="sdg" class="sdg">
            <img src="" alt="sdg" class="sdg">
            <img src="" alt="sdg" class="sdg">
            <img src="" alt="sdg" class="sdg">
            <img src="" alt="sdg" class="sdg">
            <img src="" alt="sdg" class="sdg">
            <img src="" alt="sdg" class="sdg">
            <img src="" alt="sdg" class="sdg">
            <img src="" alt="sdg" class="sdg">
            <img src="" alt="sdg" class="sdg">
            <img src="" alt="sdg" class="sdg">
            <img src="" alt="sdg" class="sdg">
            <img src="" alt="sdg" class="sdg">
            <img src="" alt="sdg" class="sdg">
        </article>
    </main>
    <?php
    include("../views/footer.php");
    ?>
</body>

</html>