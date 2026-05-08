<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
    </main>

    <!-- STEAM STYLE FOOTER -->
    <footer style="
        background: linear-gradient(to bottom,#171a21,#0f141b);
        border-top: 3px solid #66c0f4;
        margin-top:50px;
        color:#c7d5e0;
    ">
        <div class="container" style="padding:40px 20px;">

            <div class="row" style="margin-bottom:0;">

                <!-- LEFT -->
                <div class="col s12 m6">
                    <h4 style="
                        color:#ffffff;
                        margin-top:0;
                        font-weight:600;
                    ">
                        MARKET GAME
                    </h4>

                    <p style="
                        color:#8f98a0;
                        line-height:1.8;
                        margin-top:15px;
                    ">
                        Platform game berbasis CodeIgniter
                        dengan tampilan elegan.
                    </p>
                </div>

                <!-- RIGHT -->
                <div class="col s12 m6">
                    <h5 style="color:#ffffff;">Quick Menu</h5>

                    <ul style="line-height:2;">
                        <li>
                            <a href="<?= base_url(); ?>"
                               style="color:#66c0f4; text-decoration:none;">
                                Toko
                            </a>
                        </li>

                        <li>
                            <a href="<?= site_url('welcome/create'); ?>"
                               style="color:#66c0f4; text-decoration:none;">
                                Upload Game
                            </a>
                        </li>

                        <li>
                            <a href="#"
                               style="color:#66c0f4; text-decoration:none;">
                                Kelompok
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- COPYRIGHT -->
        <div style="
            background:#0b0f14;
            border-top:1px solid #2a475e;
            padding:18px 0;
        ">
            <div class="container center-align">

                <small style="
                    color:#8f98a0;
                    letter-spacing:0.5px;
                ">
                    © <?= date("Y"); ?> Gunadarma University —
                    MARKET GAME.
                    All rights reserved.
                </small>

            </div>
        </div>
    </footer>

    <!-- MATERIALIZE SIDENAV -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elem = document.querySelector('.sidenav');
            if(elem){
                M.Sidenav.init(elem);
            }
        });
    </script>

    <!-- GLOBAL STYLE -->
    <style>
        body{
            display:flex;
            min-height:100vh;
            flex-direction:column;
            background:#1b2838;
            color:#c7d5e0;
        }

        main{
            flex:1 0 auto;
        }

        a:hover{
            opacity:.9;
            transition:.2s;
        }

        ::-webkit-scrollbar{
            width:10px;
        }

        ::-webkit-scrollbar-track{
            background:#171a21;
        }

        ::-webkit-scrollbar-thumb{
            background:#66c0f4;
            border-radius:10px;
        }
    </style>

</body>
</html>