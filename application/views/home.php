<?php
echo $this->session->flashdata('error');
?>

<!-- Blok Pengenalan -->
<div class="intro">
    <div class="row" style="margin-bottom:0;">

        <div class="col s12 m7">
            <h3 class="font-big">
                MARKET GAME
            </h3>

            <p>
                Jelajahi koleksi game terbaik dan termurah di Market Game, tempat terbaik untuk mendapatkan berbagai game populer dengan harga hemat, proses cepat, aman, dan terpercaya untuk semua gamer.
            </p>
        </div>

        <div class="col s12 m5 center-align">
            <img
                src="img/logo.png"
                style="
                    width:100%;
                    max-height:300px;
                    object-fit:contain;
                    border-radius:2px;
                ">
        </div>

    </div>
</div>


<!-- SECTION TITLE -->
<h4 class="font-big">
    Game Populer
</h4>


<!-- STEAM STYLE GRID -->
<div class="row">

<?php foreach ($home_post as $data): ?>

    <div class="col s12 m6 l4">

        <div style="game-card"
        onmouseover="this.style.transform='scale(1.02)'"
        onmouseout="this.style.transform='scale(1)'"
        >

            <!-- IMAGE -->
            <div style="
                height:190px;
                overflow:hidden;
                position:relative;
            ">
                <img
                    src="<?= site_url('/upload/post/'.$data['gambar']); ?>"
                    style="
                        width:100%;
                        height:100%;
                        object-fit:cover;
                    ">

                <!-- DISKON LABEL -->
                 <?php if ($data['discount'] > 0){?>
                <div style="
                    position:absolute;
                    bottom:10px;
                    left:10px;
                    background:#4c6b22;
                    color:#beee11;
                    font-weight:bold;
                    padding:6px 12px;
                    font-size:20px;
                ">
                    -<?= $data['discount']; ?>%
                </div>
                <?php }?>
            </div>

            <!-- CONTENT -->
            <div class="game-content">

                <h6 style="
                    color:#ffffff;
                    font-weight:600;
                    margin-top:0;
                    margin-bottom:10px;
                    font-size:20px;
                ">
                    <?= $data['nama_game']; ?>
                </h6>

                <p class="text-abbr" style="
                    color:#acb2b8;
                    font-size:14px;
                    min-height:45px;
                    margin-bottom:18px;
                ">
                    <?= $data['description']; ?>
                </p>

                <!-- PRICE AREA -->
                <div style="
                    display:flex;
                    justify-content:space-between;
                    align-items:center;
                    margin-bottom:15px;
                ">

                    <div>
                        <?php $harga_normal = $data['harga']?>
                        <?php if ($data['discount'] > 0){?>
                            <?php 
                                $diskon = $data['discount'];
                                $harga_diskon = $harga_normal - (($harga_normal * $diskon) / 100); 
                            ?>
                            
                            <div style="
                            color:#738895; text-decoration:line-through; font-size:13px;">
                            Rp. <?= number_format($harga_normal); ?>
                        </div>
                        <div style="
                            color:#beee11;
                            font-size:24px;
                            font-weight:bold;
                        ">
                            Rp. <?= number_format($harga_diskon) ?>
                        </div>

                        <?php } else {?>
                        
                        <div style="
                                color:#beee11;
                                font-size:24px;
                                font-weight:bold;
                            ">
                                Rp <?= number_format($harga_normal); ?>
                            </div>
                        <?php }?>
                    </div>

                </div>

                <!-- BUTTON -->
                <a href="<?= site_url('welcome/index/'.$data['id_game']); ?>"
                   style="
                        display:block;
                        text-align:center;
                        background:linear-gradient(to right,#66c0f4,#417a9b);
                        color:#ffffff;
                        padding:12px;
                        border-radius:3px;
                        font-weight:bold;
                        text-decoration:none;
                        letter-spacing:.5px;
                   ">
                    VIEW DETAIL
                </a>

            </div>

        </div>

    </div>

<?php endforeach; ?>

</div>