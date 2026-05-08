<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIALIZE -->
    <link href="<?= site_url('asset/font/material-icon/material-icons.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= site_url('asset/css/materialize.min.css'); ?>">
    <link rel="stylesheet" href="<?= site_url('asset/css/styles.css');?>">
    <title>Market Game</title>
</head>

<body>

    <script src="<?= site_url('asset/js/materialize.min.js'); ?>"></script>

    <!-- NAVBAR -->
    <div class="navbar-fixed">
        <nav>
            <div class="nav-wrapper">

                <!-- LOGO -->
                <a href="<?= site_url(); ?>" class="brand-logo">
                    Market Game
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
                        <li><a href="<?= site_url('welcome/kelompok'); ?>">KELOMPOK</a></li>
                        <li><a href="<?= site_url('welcome/create'); ?>">CREATE</a></li>
                    </ul>

                </div>

            </div>
        </nav>
    </div>

<!-- CONTENT -->
<main class="container">