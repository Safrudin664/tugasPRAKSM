<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="container" style="margin-top:30px; margin-bottom:50px;">

    <!-- TOP BANNER -->
    <div style="
        background:linear-gradient(to right,#0f1923,#1b2838,#22384a);
        padding:25px 30px;
        border-radius:8px;
        margin-bottom:25px;
        box-shadow:0 0 18px rgba(0,0,0,.35);
    ">

        <div class="row" style="margin-bottom:0;">

            <div class="col s12 m8">
                <h3 style="
                    color:#ffffff;
                    margin:0;
                    font-weight:700;
                ">
                    <?= $post->nama_game; ?>
                </h3>

                <p style="
                    color:#8f98a0;
                    margin-top:10px;
                ">
                    Konten multimedia detail page
                </p>
            </div>

            <div class="col s12 m4 right-align">
                <a href="<?= base_url(); ?>"
                   style="
                    display:inline-block;
                    margin-top:10px;
                    background:#66c0f4;
                    color:#0b1b2b;
                    padding:10px 18px;
                    border-radius:4px;
                    font-weight:bold;
                    text-decoration:none;
                   ">
                    BACK
                </a>
            </div>

        </div>

    </div>


    <!-- CONTENT AREA -->
    <div class="row">

        <!-- IMAGE LEFT -->
        <div class="col s12 m7">

            <div style="
                background:#16202d;
                border-radius:8px;
                overflow:hidden;
                box-shadow:0 0 18px rgba(0,0,0,.35);
            ">

                <img
                    src="<?= site_url('upload/post/'.$post->gambar); ?>"
                    alt="Post Image"
                    style="
                        width:100%;
                        height:420px;
                        object-fit:cover;
                    "
                >

            </div>

        </div>


        <!-- RIGHT INFO -->
        <div class="col s12 m5">

            <div style="
                background:#2a475e;
                border-radius:8px;
                padding:25px;
                box-shadow:0 0 18px rgba(0,0,0,.35);
            ">

                <h5 style="
                    color:#ffffff;
                    margin-top:0;
                    font-weight:600;
                ">
                    Description
                </h5>
                    
                <p style="
                    color:#c7d5e0;
                    line-height:1.8;
                    min-height:150px;
                ">
                    <?= $post->description; ?>
                </p>
                <!-- HARGA-->
                 <?php $harga_normal = $post->harga; ?>
                <h5 style="
                    color:#beee11;margin-top:0;font-weight:600;font-size:24px;font-weight:bold;
                    ">
                    RP. <?= number_format($harga_normal); ?>
                </h5>
                <hr style="
                    border:0;
                    border-top:1px solid #3b6e8c;
                    margin:20px 0;
                ">

                <!-- ACTION BUTTON -->
                <a href="<?= site_url('welcome/update/'.$post->id_game); ?>"
                   style="
                    display:block;
                    text-align:center;
                    background:#66c0f4;
                    color:#0b1b2b;
                    padding:12px;
                    border-radius:4px;
                    font-weight:bold;
                    text-decoration:none;
                    margin-bottom:12px;
                   ">
                    UPDATE CONTENT
                </a>

                <a href="<?= site_url('welcome/delete/'.$post->id_game); ?>"
                   onclick="return confirm('Yakin ingin menghapus data ini?')"
                   style="
                    display:block;
                    text-align:center;
                    background:#d9534f;
                    color:#ffffff;
                    padding:12px;
                    border-radius:4px;
                    font-weight:bold;
                    text-decoration:none;
                   ">
                    DELETE CONTENT
                </a>

            </div>

        </div>

    </div>


    <!-- EXTRA SECTION -->
    <div style="
        background:#16202d;
        border-radius:8px;
        padding:25px;
        margin-top:25px;
        box-shadow:0 0 18px rgba(0,0,0,.35);
    ">

        <h5 style="color:#ffffff; margin-top:0;">
            Tentang Konten Ini
        </h5>

        <p style="
            color:#8f98a0;
            line-height:1.8;
        ">
            Halaman ini di gunakan untuk update dan delete konten multimedia yang sudah di buat.
        </p>

    </div>

</div>