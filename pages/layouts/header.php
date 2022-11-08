<?php
session_start();
$current_page = !empty($_GET["page"]) ? $_GET["page"] : "home";
?>

<!DOCTYPE html>

<html lang="hu">
<head>
    <meta charset="utf-8">

    <title>SV & OD</title>
    <meta name="description" content="">
    <meta name="author" content="Viktor Schiller & Dénes Oláh">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/materialize.css">
    <link rel="stylesheet" href="/assets/css/style.css?v=1.0">

</head>

<body>

<?php FrontController::show('layouts/navigation'); ?>

<main class="container" id="<?=$current_page?>">
    <div class="row">
        <div class="col m9">
