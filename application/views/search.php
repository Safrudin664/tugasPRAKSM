<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div class="row">

    <h4 style="color:#66c0f4; margin-bottom:30px;">
        Hasil Pencarian Game
    </h4>

    <?php if(empty($home_post)) : ?>

        <div style="
            background:#2a475e;
            padding:20px;
            border-radius:8px;
            color:white;
        ">
            Game tidak ditemukan.
        </div>

    <?php else : ?>

        <?php foreach($home_post as $post) : ?>

            <div class="col s12 m6 l4">

                <div style="
                    background:#2a475e;
                    border-radius:10px;
                    overflow:hidden;
                    margin-bottom:25px;
                    transition:.3s;
                ">

                    <!-- IMAGE -->
                    <img
                        src="<?= base_url('upload/post/'.$post->gambar); ?>"
                        style="
                            width:100%;
                            height:220px;
                            object-fit:cover;
                        "
                    >

                    <!-- CONTENT -->
                    <div style="padding:18px;">

                        <h5 style="
                            color:white;
                            margin-top:0;
                            font-size:22px;
                            font-weight:bold;
                        ">
                            <?= $post->nama_game; ?>
                        </h5>

                        <p style="
                            color:#c7d5e0;
                            min-height:60px;
                        ">
                            <?= word_limiter($post->description, 18); ?>
                        </p>

                        <div style="
                            display:flex;
                            justify-content:space-between;
                            align-items:center;
                            margin-top:15px;
                        ">

                            <span style="
                                background:#66c0f4;
                                color:#fff;
                                padding:6px 12px;
                                border-radius:4px;
                                font-weight:bold;
                            ">
                                Rp <?= number_format($post->harga,0,',','.'); ?>
                            </span>

                            <a
                                href="<?= site_url('welcome/index/'.$post->id_game); ?>"
                                style="
                                    background:#66c0f4;
                                    color:white;
                                    padding:8px 14px;
                                    border-radius:5px;
                                    text-decoration:none;
                                    font-weight:bold;
                                "
                            >
                                Detail
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    <?php endif; ?>

</div>

