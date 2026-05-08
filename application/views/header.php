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

    /* SEARCH */
    .search-box{
        display:flex;
        align-items:center;
        margin-right:20px;
    }

    .search-box input{
        width:220px !important;
        height:38px !important;
        background:#316282 !important;
        border:none !important;
        outline:none !important;
        color:white !important;
        padding:0 12px !important;
        border-radius:4px 0 0 4px !important;
        margin:0 !important;
        box-sizing:border-box;
    }

    .search-box button{
        height:38px;
        border:none;
        background:#66c0f4;
        color:white;
        padding:0 14px;
        border-radius:0 4px 4px 0;
        cursor:pointer;
        display:flex;
        align-items:center;
        justify-content:center;
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

                <!-- RIGHT MENU -->
                <div style="display:flex; align-items:center;">

                    <!-- SEARCH -->
                    <form 
                        action="<?= site_url('welcome/search'); ?>" 
                        method="get"
                        class="search-box"
                    >

                        <input 
                            type="text"
                            name="keyword"
                            placeholder="Cari game..."
                        >

                        <button type="submit">
                            <i class="material-icons">search</i>
                        </button>

                    </form>

                    <!-- DESKTOP MENU -->
                    <ul class="right hide-on-med-and-down">
                        <li><a href="<?= base_url(); ?>">TOKO</a></li>
                        <li><a href="#">KELOMPOK</a></li>
                        <li><a href="<?= site_url('welcome/create'); ?>">CREATE</a></li>
                    </ul>

                </div>

            </div>
        </nav>
    </div>

<!-- CONTENT -->
<main class="container">