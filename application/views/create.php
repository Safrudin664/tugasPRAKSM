<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>



<div class="container" style="max-width:900px; margin-top:40px; margin-bottom:60px;">

    <!-- TITLE -->
    <div style="
        background:#1b2838;
        padding:20px 30px;
        border-radius:8px 8px 0 0;
        border-bottom:2px solid #66c0f4;
    ">
        <h4 style="color:#ffffff; margin:0;">
            CREATE NEW GAME
        </h4>
        <p style="color:#8f98a0; margin-top:8px;">
            Upload game ke MARKET GAME
        </p>
    </div>

    <!-- ERROR -->
    <?php if(validation_errors()) : ?>
        <div style="
            background:#5c1f1f;
            color:#fff;
            padding:15px;
            margin-top:15px;
            border-radius:5px;
        ">
            <?= validation_errors(); ?>
        </div>
    <?php endif; ?>

    <?php if($this->session->flashdata('error')) : ?>
        <div style="
            background:#5c1f1f;
            color:#fff;
            padding:15px;
            margin-top:15px;
            border-radius:5px;
        ">
            <?= $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>

    <!-- FORM -->
    <div style="
        background:#2a475e;
        padding:35px;
        border-radius:0 0 8px 8px;
        box-shadow:0 0 20px rgba(0,0,0,.35);
    ">

        <form action="<?= site_url('welcome/create'); ?>" method="post" enctype="multipart/form-data">
            <!-- NAME -->
            <div style="margin-bottom:25px;">
                <label style="color:#c7d5e0; font-weight:bold;">Title</label>
                <input type="text" class="input-nama" name="nama_game"
                    id="nama_game" placeholder="Masukkan judul game"
                    >
            </div>

            <!-- DESCRIPTION -->
            <div style="margin-bottom:25px;">
                <label style="color:#c7d5e0; font-weight:bold;">Description</label>
                <textarea
                    name="description" id="description"
                    rows="5" 
                    placeholder="Masukkan deskripsi game..."
                    class="input-desc">
                </textarea>
            </div>

            <!-- PRICE -->
            <div style="margin-bottom:25px;">
                <label style="color:#c7d5e0; font-weight:bold;">Harga Game (Rupiah)</label>

                <div class="input-price1">
                    <div class="input-price2">
                        Rp
                    </div>

                    <input type="number" name="harga"
                        id="harga" placeholder="Contoh: 75000"
                        class="input-price3">
                </div>

                <p style="color:#8f98a0; margin-top:8px; font-size:13px;
                ">
                    Masukkan harga tanpa titik atau koma
                </p>
            </div>

            <!-- FILE -->
            <div style="margin-bottom:30px;">
                <label style="color:#c7d5e0; font-weight:bold;">Upload Image</label>

                <div class="input-file">
                    <input
                        type="file"
                        name="image1"
                        accept=".jpg,.png,.jpeg"
                        style="color:white;"
                    >

                    <p style="color:#8f98a0; margin-top:10px;">
                        Format: JPG / PNG / JPEG
                    </p>
                </div>
            </div>

            <!-- BUTTON -->
            <div style="display:flex; gap:15px;">
                <button type="submit" class="btn-create">
                    CREATE NOW
                </button>

                <a href="<?= base_url(); ?>"
                   class="btn-back">
                    BACK
                </a>
            </div>
        </form>
    </div>
</div>