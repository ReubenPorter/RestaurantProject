<?php
    $companyName = "Reuben's Fine Dining";
    include('includes/arrays.php');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/styles.css">
    <title><?php echo TITLE; ?></title>
</head>
<body id="final-example">
<div class="wrapper">


    <div id="banner">
        <a href="/" title="Return to Home">
            <img src="img/banner.png" alt="Fine Dining">
        </a>
    </div>
    <div id="nav">
        <?php include('includes/nav.php'); ?>
    </div>
    <div class="content">