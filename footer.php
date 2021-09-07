<?php

$title = get_the_title();

?>
    <footer <?php if ($title == 'Contato') {
        echo 'style="padding: 20px 0;"';
            } ?>
            >
        <?php
        if ($title != 'Contato') {
            ?>
        <div class="metodologia">
            <div class="center">
                <h2>Conheça nossa metodologia</h2>
                <p>O que acha de fazermos o que mais gostamos de fazer? Conversar! <br>Entre em contato por e-mail ou telefone.</p>
                <a href="">Entrar em contato</a>
            </div>
            <!-- /.center -->
        </div>
        <!-- /.metodologia -->
        <?php } ?>
        <div class="center">
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="">Contato</a>
                <a href="">Faq</a>
            </div>
            <!-- /.col-footer -->
            <div class="col-footer">
                <h2>Consultoria</h2>
                <a href="">Contato</a>
                <a href="">Faq</a>
            </div>
            <!-- /.col-footer -->
            <div class="col-footer">
                <h2>Empresa</h2>
                <a href="">Contato</a>
                <a href="">Faq</a>
            </div>
            <!-- /.col-footer -->
            <div style="width: 40%; text-align:right;" class="col-footer">
                <img src="<?= INCLUDE_PATH ?>img/home/pngs/logo-dummy.png" alt="">
            </div>
            <!-- /.col-footer -->
        </div>
        <!-- /.center -->
    </footer>


    <?php wp_footer() /*Ativa os scripts dos plugins*/?> 

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script src="<?= INCLUDE_PATH ?>scripts.js"></script>
</body>
</html>