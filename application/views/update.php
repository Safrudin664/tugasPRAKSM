<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- ERROR MESSAGE -->
<?php if(validation_errors()): ?>
<div style="
    background:#7a1f1f;
    color:#fff;
    padding:15px;
    border-radius:6px;
    margin-bottom:20px;
">
    <?= validation_errors(); ?>
</div>
<?php endif; ?>

<?php if($this->session->flashdata('error')): ?>
<div style="
    background:#7a1f1f;
    color:#fff;
    padding:15px;
    border-radius:6px;
    margin-bottom:20px;
">
    <?= $this->session->flashdata('error'); ?>
</div>
<?php endif; ?>


<!-- HEADER -->
<div style="
    background:linear-gradient(to right,#0f1923,#1b2838,#22384a);
    padding:25px 30px;
    border-radius:8px;
    margin-bottom:25px;
    box-shadow:0 0 18px rgba(0,0,0,.35);
">
    <h3 style="
        color:#ffffff;
        margin:0;
        font-weight:700;
    ">
        UPDATE CONTENT
    </h3>

    <p style="
        color:#8f98a0;
        margin-top:10px;
    ">
        Edit data multimedia seperti tampilan Steam UI
    </p>
</div>


<!-- FORM AREA -->
<div style="
    background:#16202d;
    border-radius:8px;
    padding:35px;
    box-shadow:0 0 18px rgba(0,0,0,.35);
">

<form action="<?= site_url('welcome/update/'.$post->id); ?>"
      method="post"
      enctype="multipart/form-data">

    <div class="row">

        <!-- LEFT FORM -->
        <div class="col s12 m7">

            <!-- TITLE -->
            <div style="margin-bottom:25px;">
                <label style="
                    color:#c7d5e0;
                    font-weight:bold;
                ">
                    Item Name
                </label>

                <input
                    type="text"
                    name="name"
                    value="<?= $post->name; ?>"
                    style="
                        background:#1b2838;
                        border:1px solid #3b6e8c;
                        color:white;
                        padding:12px;
                        border-radius:5px;
                        margin-top:8px;
                    ">
            </div>


            <!-- DESCRIPTION -->
            <div style="margin-bottom:25px;">
                <label style="
                    color:#c7d5e0;
                    font-weight:bold;
                ">
                    Description
                </label>

                <textarea
                    name="description"
                    rows="8"
                    style="
                        background:#1b2838;
                        border:1px solid #3b6e8c;
                        color:white;
                        padding:12px;
                        border-radius:5px;
                        margin-top:8px;
                        resize:none;
                    "
                ><?= $post->description; ?></textarea>
            </div>

        </div>


        <!-- RIGHT IMAGE -->
        <div class="col s12 m5">

            <label style="
                color:#c7d5e0;
                font-weight:bold;
            ">
                Preview Image
            </label>

            <div style="
                background:#1b2838;
                padding:15px;
                border-radius:8px;
                margin-top:8px;
            ">

                <img
                    id="image"
                    src="<?= site_url('upload/post/'.$post->filename); ?>"
                    style="
                        width:100%;
                        height:260px;
                        object-fit:cover;
                        border-radius:6px;
                    ">

            </div>


            <!-- FILE -->
            <div style="margin-top:20px;">

                <label style="
                    color:#c7d5e0;
                    font-weight:bold;
                ">
                    Change Image
                </label>

                <input
                    type="file"
                    name="image1"
                    id="file"
                    onchange="thumbnail();"
                    style="
                        margin-top:10px;
                        color:white;
                    ">
            </div>

        </div>

    </div>


    <!-- BUTTON -->
    <div style="margin-top:25px;">

        <button type="submit"
                style="
                    background:#66c0f4;
                    color:#0b1b2b;
                    border:none;
                    padding:12px 28px;
                    border-radius:4px;
                    font-weight:bold;
                    cursor:pointer;
                    margin-right:10px;
                ">
            SAVE UPDATE
        </button>

        <a href="<?= base_url(); ?>"
           style="
                background:#2a475e;
                color:#ffffff;
                padding:12px 28px;
                border-radius:4px;
                text-decoration:none;
           ">
            CANCEL
        </a>

    </div>

</form>

</div>


<!-- IMAGE PREVIEW -->
<script>
function thumbnail()
{
    var preview = document.getElementById('image');
    var file    = document.getElementById('file').files[0];
    var reader  = new FileReader();

    reader.onloadend = function () {
        preview.src = reader.result;
    }

    if(file){
        reader.readAsDataURL(file);
    }
}
</script>