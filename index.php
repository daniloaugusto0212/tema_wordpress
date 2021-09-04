<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Tema Wordpress</title>
</head>
<body>
    
    <section class="topo">
        <div class="center">
            <header>
                <div class="logo"><img src="img/home/pngs/logo.png" alt="Logomarca"></div>
                <!-- /.logo -->
            </header>
            <div class="menu-desktop">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Contato</a></li>
                </ul>
            </div>
            <!-- /.menu-desktop -->
            <div class="clear"></div>
            <br><br>
            <div class="w50 time-descricao">
                <h2>Melhore a comunicação com o seu cliente e time.</h2>
                <p>Consultoria especializada em startups, empresas, principalmente, pessoas.</p>
                <a target="_blank" href="https://sitedan.com.br">Ver demonstração</a>
            </div>
            <!-- /.w50 -->
            <div class="w50 time-imagem">
                <img src="img/home/pngs/ilustracao.png" alt="Imagem de equipe da home">
            </div>
            <!-- /.w50 -->
            <div class="clear"></div>
        </div>
        <!-- /.center -->
    </section>
    <!-- /.topo -->

    <div class="circle"><i class="fas fa-chevron-down"></i></div>
    <!-- /.circle -->

    <section class="clientes-slider">
        <div class="center">
            <div style="max-width: 700px; margin: 0 auto; overflow: hidden;" class="slider-container">
                <img src="img/home/pngs/amazon.png" alt="Logo amazon">
                <img src="img/home/pngs/costco.png" alt="Logo cotsco">
                <img src="img/home/pngs/dominos.png" alt="Logo dominos">
                <img src="img/home/pngs/uber.png" alt="Logo uber">
                <img src="img/home/pngs/walmart.png" alt="Logo walmart">
            </div>
            <!-- /.slider-container -->
        </div>
        <!-- /.center -->
    </section>
    <!-- /.clientes-slider -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script type="text/javascript">
    $('section.clientes-slider .slider-container').slick({
        dots: true,
        arrows:false,
        infinite: false,
        speed:1000,
        slidesToShow: 4,
        autoplay: true,
        centerMode:false,
        autoplaySpeed: 3000,
        pauseOnHover:false,
        responsive: [
            {
                brekpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            }
        ]
    });

    </script>
</body>
</html>