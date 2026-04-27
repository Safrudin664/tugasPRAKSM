<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- MATERIALIZE -->
<link href="<?= site_url('asset/font/material-icon/material-icons.css'); ?>" rel="stylesheet">
<link rel="stylesheet" href="<?= site_url('asset/css/materialize.min.css'); ?>">

<title>Market Game</title>

<style>
body{
    margin:0;
    background:#1b2838;
    color:#c7d5e0;
    font-family:Arial, Helvetica, sans-serif;
}

/* NAVBAR */
nav{
    background:linear-gradient(to right,#171a21,#1b2838) !important;
    border-bottom:2px solid #66c0f4;
    box-shadow:none;
}

.nav-wrapper{
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:0 25px;
}

.brand-logo{
    position:relative !important;
    left:0 !important;
    transform:none !important;
    font-size:28px !important;
    font-weight:700;
    color:#66c0f4 !important;
}

/* MENU */
nav ul{
    display:flex;
    align-items:center;
    gap:8px;
}

nav ul li a{
    color:#c7d5e0 !important;
    font-weight:500;
    padding:0 16px;
    border-radius:4px;
    transition:.2s;
}

nav ul li a:hover{
    background:#2a475e;
    color:#ffffff !important;
}

/* MOBILE MENU */
.sidenav{
    background:#171a21;
}

.sidenav li a{
    color:#c7d5e0;
}

/* CONTENT */
main.container{
    width:92%;
    max-width:1400px;
    margin-top:30px;
}
</style>

</head>

<body>

<script src="<?= site_url('asset/js/materialize.min.js'); ?>"></script>

<!-- NAVBAR -->
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">

            <!-- LOGO -->
            <a href="<?= site_url(); ?>" class="brand-logo">
                MARKET GAME
            </a>

            <!-- MOBILE ICON -->
            <a href="#" data-target="mobile-demo" class="sidenav-trigger right">
                <i class="material-icons">menu</i>
            </a>

            <!-- DESKTOP MENU -->
            <ul class="right hide-on-med-and-down">
                <li><a href="<?= base_url(); ?>">TOKO</a></li>
                <li><a href="#">KELOMPOK</a></li>
                <li><a href="<?= site_url('welcome/create'); ?>">CREATE</a></li>
            </ul>

        </div>
    </nav>
</div>

<!-- MOBILE MENU -->
<ul class="sidenav" id="mobile-demo">
    <li><a href="<?= base_url(); ?>">TOKO</a></li>
    <li><a href="#">KELOMPOK</a></li>
    <li><a href="<?= site_url('welcome/create'); ?>">CREATE</a></li>
</ul>

<!-- CONTENT -->
<main class="container">