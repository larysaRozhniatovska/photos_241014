<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Test Gallery</title>
        <link rel="stylesheet" href="../../css/style.css"/>
        <link rel="stylesheet" href="../../css/photoswipe.css">
    </head>
    <body>
        <?php include 'views/common/header.php';?>
        <?php include 'views/common/menu.php';?>
        <main>
            <?php include_once 'views/pages/'. $page . '_page.php'?>
        </main>
        <?php include 'views/common/footer.php';?>
    </body>
</html>
