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
            <div class="hide">
                <?php
                    include("../views/sdg.php");
                ?>
            </div>
            <div>
                <?php
                    include("../views/sdg.php");
                ?>
            </div>
            <div class="hide">
                <?php
                    include("../views/sdg.php");
                ?>
            </div>
        </div>

        <?php
            include("../views/AboutSDG.php");
        ?>

        <article class="alle_sdgs">  <!-- alle sdgs om op te klikken hier -->
            <img src="/img/sdg1.webp" alt="sdg" class="sdg">
            <img src="/img/sdg2.webp" alt="sdg" class="sdg">
            <img src="/img/sdg3.webp" alt="sdg" class="sdg">
            <img src="/img/sdg4.webp" alt="sdg" class="sdg">
            <img src="/img/sdg5.webp" alt="sdg" class="sdg">
            <img src="/img/sdg6.webp" alt="sdg" class="sdg">
            <img src="/img/sdg7.webp" alt="sdg" class="sdg">
            <img src="/img/sdg8.webp" alt="sdg" class="sdg">
            <img src="/img/sdg9.webp" alt="sdg" class="sdg">
            <img src="/img/sdg10.webp" alt="sdg" class="sdg">
            <img src="/img/sdg11.webp" alt="sdg" class="sdg">
            <img src="/img/sdg12.webp" alt="sdg" class="sdg">
            <img src="/img/sdg13.webp" alt="sdg" class="sdg">
            <img src="/img/sdg14.webp" alt="sdg" class="sdg">
            <img src="/img/sdg15.webp" alt="sdg" class="sdg">
            <img src="/img/sdg16.webp" alt="sdg" class="sdg">
            <img src="/img/sdg17.webp" alt="sdg" class="sdg">
        </article>
    </main>
    <?php
    include("../views/footer.php");
    ?>
</body>

</html>