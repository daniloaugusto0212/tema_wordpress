<?php

//Template Name: Home

get_header();
?>

            <div class="clear"></div>
            <br><br>
            <div class="w50 time-descricao">
                <h2>Melhore a comunicação com o seu cliente e time.</h2>
                <p>Consultoria especializada em startups, empresas, principalmente, pessoas.</p>
                <a target="_blank" href="https://sitedan.com.br">Ver demonstração</a>
            </div>
            <!-- /.w50 -->
            <div class="w50 time-imagem">
                <img src="<?= INCLUDE_PATH ?>img/home/pngs/ilustracao.png" alt="Imagem de equipe da home">
            </div>
            <!-- /.w50 -->
            <div class="clear"></div>
        </div>
        <!-- /.center -->
    </section>
    <!-- /.topo -->

    <div class="circle"><i class="fas fa-chevron-down"></i></div>
    <!-- /.circle -->

    <section class="conteudo-da-pagina">
        <?php
            the_content();
        ?>
    </section>
    <!-- /.conteudo -->

    <section class="clientes-slider">
        <div class="center">
            <div style="max-width: 700px; margin: 0 auto; overflow: hidden;" class="slider-container">
                <img src="<?= INCLUDE_PATH ?>img/home/pngs/amazon@2x.png" alt="Logo amazon">
                <img src="<?= INCLUDE_PATH ?>img/home/pngs/costco@2x.png" alt="Logo cotsco">
                <img src="<?= INCLUDE_PATH ?>img/home/pngs/dominos@2x.png" alt="Logo dominos">
                <img src="<?= INCLUDE_PATH ?>img/home/pngs/uber@2x.png" alt="Logo uber">
                <img src="<?= INCLUDE_PATH ?>img/home/pngs/walmart@2x.png" alt="Logo walmart">
            </div>
            <!-- /.slider-container -->
        </div>
        <!-- /.center -->
    </section>
    <!-- /.clientes-slider -->

    <section class="diferenciais">
        <div class="center">
            <h2>Contribuímos de ponta a ponta</h2>
            <div class="icons-diferenciais">
                <div class="box-single-diferenciais">
                    <img src="<?= INCLUDE_PATH ?>img/home/pngs/ilustracao-01.png" alt="Mobile imagem">
                    <h3>Ambiente mobile</h3>
                    <p>Garanta que toda sua comunicação esteja alinhada com o seu propósito, cada palavra conta.</p>
                </div>
                <!-- /.box-single-diferenciais -->
                <div class="box-single-diferenciais">
                    <img src="<?= INCLUDE_PATH ?>img/home/pngs/ilustracao-02.png" alt="">
                    <h3>Sirtes e intranets</h3>
                    <p>Um diálogo acontece quando ambas as partes falam e escutam, garanta que seu público te entenda.</p>
                </div>
                <!-- /.box-single-diferenciais -->
                <div class="box-single-diferenciais">
                    <img src="<?= INCLUDE_PATH ?>img/home/pngs/ilustracao-03.png" alt="">
                    <h3>Comunicação one-to-one</h3>
                    <p>O digital pra ficar sem dúvidas, mas uma comunicação integrada de verdade exige clareza mas decisões.</p>
                </div>
                <!-- /.box-single-diferenciais -->
            </div>
            <!-- /.icons-diferenciais -->
        </div>
        <!-- /.center -->
    </section>
    <!-- /.diferenciais -->

    <section class="sobre-time">
        <div class="center">
            <div class="w50">
                <div class="sobre-time-descricao">
                    <h2>Um time experiente, <br>comunicador e coeso.</h2>
                    <p>A Product Runt acredita que marcas fortes são construídas a partir de transformações importantes e posistivas na vida dos consumidores. Exatamente como uma conversa que ganha formam, a ideia vira flâmula.</p>
                    <br>
                    <p>Comunicar bem, de forma coerente e clara não é algo fácil e estamos aqui para ajudar você e seu time. Você escolhe, remoto ou presencial, para sei cliente ou seu público interno, você determina como vamos te ajudar.</p>
                </div>
                <!-- /.sobre-time-descricao -->
            </div>
            <!-- /.w50 -->

            <div class="w50">
                <div class="sobre-time-imagem">
                    <img src="<?= INCLUDE_PATH ?>img/home/pngs/ilustracao-04.png" alt="Time experiente">
                </div>
                <!-- /.sobre-time-imagem -->
            </div>
            <!-- /.w50 -->
            <div class="clear"></div>
        </div>
        <!-- /.center -->
    </section>
    <!-- /.time -->

    <section class="depoimentos">
        <div class="center">
            <h2>Depoimentos</h2>
            <div class="depoimentos-box">
                <div class="depoimento-single">
                    <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Error minima odio veritatis maiores perspiciatis. Similique quos, atque sint molestias impedit excepturi voluptatibus earum neque magnam ex commodi, corporis aut. Eius."</p>
                    <p>Danilo Augusto</p>
                    <img src="<?= INCLUDE_PATH ?>img/home/autor.jpg" alt="">
                </div>
                <!-- /.depoimento-single -->
                <div class="depoimento-single">
                    <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Error minima odio veritatis maiores perspiciatis. Similique quos, atque sint molestias impedit excepturi voluptatibus earum neque magnam ex commodi, corporis aut. Eius."</p>
                    <p>Solange de Souza</p>
                    <img src="<?= INCLUDE_PATH ?>img/home/autor-2.jpg" alt="">
                </div>
                <!-- /.depoimento-single -->
                <div class="depoimento-single">
                    <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Error minima odio veritatis maiores perspiciatis. Similique quos, atque sint molestias impedit excepturi voluptatibus earum neque magnam ex commodi, corporis aut. Eius."</p>
                    <p>Sophia Beatriz</p>
                    <img src="<?= INCLUDE_PATH ?>img/home/autor-3.jpg" alt="">
                </div>
                <!-- /.depoimento-single -->
            </div>
            <!-- /.depoimentos-box -->
        </div>
        <!-- /.center -->
    </section>
    <!-- /.depoimentos -->

    
    <?php

    get_footer();
