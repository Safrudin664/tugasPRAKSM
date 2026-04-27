<?php
echo $this->session->flashdata('error');
?>

<!-- HERO SECTION -->
<div style="
    background:linear-gradient(to right,#0f1923,#1b2838,#22384a);
    border-radius:8px;
    padding:35px;
    margin-bottom:35px;
    box-shadow:0 0 18px rgba(0,0,0,.35);
">

    <div class="row" style="margin-bottom:0;">

        <div class="col s12 m7">
            <h3 style="
                color:#ffffff;
                margin-top:0;
                font-weight:700;
            ">
                STEAM MULTIMEDIA STORE
            </h3>

            <p style="
                color:#c7d5e0;
                line-height:1.8;
                font-size:16px;
            ">
                Jelajahi koleksi konten multimedia terbaik.
                Upload gambar, lihat galeri modern, dan nikmati
                tampilan seperti Steam Store.
            </p>

            <a href="<?= site_url('welcome/create'); ?>"
               style="
                display:inline-block;
                margin-top:15px;
                background:#66c0f4;
                color:#0b1b2b;
                padding:12px 24px;
                border-radius:4px;
                font-weight:bold;
                text-decoration:none;
               ">
                Upload Sekarang
            </a>
        </div>

        <div class="col s12 m5 center-align">
            <img
                src="https://cdn.cloudflare.steamstatic.com/store/home/store_home_share.jpg"
                style="
                    width:100%;
                    max-height:220px;
                    object-fit:cover;
                    border-radius:6px;
                ">
        </div>

    </div>
</div>


<!-- SECTION TITLE -->
<h5 style="
    color:#ffffff;
    margin-bottom:25px;
    font-weight:600;
">
    Konten Populer
</h5>


<!-- GRID CONTENT -->
<div class="row">

<?php foreach ($home_post as $data): ?>

    <div class="col s12 m6 l4">

        <div style="
            background:#16202d;
            border-radius:8px;
            overflow:hidden;
            margin-bottom:25px;
            box-shadow:0 0 14px rgba(0,0,0,.35);
            transition:.3s;
        ">

            <!-- IMAGE -->
            <div style="
                height:220px;
                overflow:hidden;
            ">
                <img
                    src="<?= site_url('/upload/post/'.$data['filename']); ?>"
                    style="
                        width:100%;
                        height:100%;
                        object-fit:cover;
                    ">
            </div>

            <!-- CONTENT -->
            <div style="padding:18px;">

                <h6 style="
                    color:#ffffff;
                    font-weight:600;
                    margin-top:0;
                ">
                    <?= $data['name']; ?>
                </h6>

                <p style="
                    color:#8f98a0;
                    min-height:48px;
                    margin-bottom:18px;
                ">
                    <?= $data['description']; ?>
                </p>

                <!-- BUTTON -->
                <a href="<?= site_url('welcome/index/'.$data['id']); ?>"
                   style="
                        display:block;
                        text-align:center;
                        background:#66c0f4;
                        color:#0b1b2b;
                        padding:10px;
                        border-radius:4px;
                        font-weight:bold;
                        text-decoration:none;
                   ">
                    VIEW DETAIL
                </a>

            </div>

        </div>

    </div>

<?php endforeach; ?>

</div>

