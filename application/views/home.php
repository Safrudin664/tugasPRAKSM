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
            <img src="img/logo.png" class="img-logo">
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
            <div class="img-card">
                <img
                    src="<?= site_url('/upload/post/'.$data['gambar']); ?>"
                    style="
                        width:100%;
                        height:100%;
                        object-fit:cover;
                    ">

                <!-- DISKON LABEL -->
                 <?php if ($data['discount'] > 0){?>

                <div class="discount-label">
                    -<?= $data['discount']; ?>%
                </div> <?php }?>
            </div>

            <!-- CONTENT -->
            <div class="game-content">

                <h6>
                    <?= $data['nama_game']; ?>
                </h6>

                <p class="text-abbr desc" style="">
                    <?= $data['description']; ?>
                </p>

                <!-- PRICE AREA -->
                <div class="price-area">
                    <div>
                        <?php $harga_normal = $data['harga']?>
                        <?php if ($data['discount'] > 0){?>
                            <?php 
                                $diskon = $data['discount'];
                                $harga_diskon = $harga_normal - (($harga_normal * $diskon) / 100); 
                            ?>
                            
                            <div class="harga-before">
                            Rp. <?= number_format($harga_normal); ?>
                        </div>
                        <div class="harga-game">
                            Rp. <?= number_format($harga_diskon) ?>
                        </div>

                        <?php } else {?>
                        
                        <div class="harga-game">
                                Rp <?= number_format($harga_normal); ?>
                            </div>
                        <?php }?>
                    </div>

                </div>

                <!-- BUTTON -->
                <a href="<?= site_url('welcome/index/'.$data['id_game']); ?>"
                   class="btn-detail">
                    VIEW DETAIL
                </a>

            </div>

        </div>

    </div>

<?php endforeach; ?>

</div>