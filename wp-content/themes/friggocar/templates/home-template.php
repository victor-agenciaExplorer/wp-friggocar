<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<main id="home">
    <section class="banner banner-0">
        <div class="text-center text-lg-start">
            <div class="banner-content-wrapper offset-lg-1">
                <div class="banner-carousel">
                    <div class="fispal">
                        <h1>Fispal</h1>
                        <p>Visite nosso estande na Fispal Sorvetes 2023 - G070</p>
                        <ul>
                            <li>
                                De 13 a 16 de Junho
                            </li>
                            <li>
                                Expo Center Norte, São Paulo
                            </li>
                        </ul>
                        <a href="https://www.fispalfoodservice.com.br/" target="_blank"
                            class="btn base-button cta-banner" role="button">Saiba mais</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Conheça nossas vantagens -->
    <section class="container pt-5">
        <h2 class="title mb-3">Conheça as nossas vantagens</h2>
        <p class="subtitle col-8 mx-auto mb-lg-5">Qualidade e eficiência como você nunca viu</p>

        <!-- Cards -->
        <div class="carousel-cards row row-cols-lg-4 justify-content-lg-center gx-lg-5 gy-lg-5">
            <div
                class="d-flex flex-column align-items-center justify-content-center justify-content-lg-start text-center col card-advantage">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/icon-card-1.svg'?>" alt="" width="98" height="98" class="img-fluid mb-2">
                <span class="title--card mb-1 mb-lg-2">Tecnologia moderna</span>
                <p class="text">Trabalhamos constantemente para atualizar nossos produtos</p>
            </div>

            <div
                class="d-flex flex-column align-items-center justify-content-center justify-content-lg-start text-center col card-advantage">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/icon-card-2.svg'?>" alt="" width="98" height="98" class="img-fluid mb-2">
                <span class="title--card mb-1 mb-lg-2">Garantia estendida</span>
                <p class="text">Até 3 anos de cobertura para baús frigoríficos e assistência técnica em todo o
                    território nacional</p>
            </div>

            <div
                class="d-flex flex-column align-items-center justify-content-center justify-content-lg-start text-center col card-advantage">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/icon-card-3.svg'?>" alt="" width="98" height="98" class="img-fluid mb-2">
                <span class="title--card mb-1 mb-lg-2">Personalização completa</span>
                <p class="text">Escolha todos os detalhes da sua nova carroceria frigorífica</p>
            </div>

            <div
                class="d-flex flex-column align-items-center justify-content-center justify-content-lg-start text-center col card-advantage">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/icon-card-4.svg'?>" alt="" width="98" height="98" class="img-fluid mb-2">
                <span class="title--card mb-1 mb-lg-2">Venda consultiva</span>
                <p class="text">Fale com especialistas do setor antes de efetuar a compra</p>
            </div>

            <div
                class="d-flex flex-column align-items-center justify-content-center justify-content-lg-start text-center col card-advantage">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/icon-card-5.svg'?>" alt="" width="98" height="98" class="img-fluid mb-2">
                <span class="title--card mb-1 mb-lg-2">Entrega rápida</span>
                <p class="text">Temos os melhores prazos de entrega do mercado</p>
            </div>

            <div
                class="d-flex flex-column align-items-center justify-content-center justify-content-lg-start text-center col card-advantage">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/icon-card-6.svg'?>" alt="" width="98" height="98" class="img-fluid mb-2">
                <span class="title--card mb-1 mb-lg-2">Fabricação sustentável</span>
                <p class="text">Menor índice de geração de resíduos deixados na fabricação</p>
            </div>

            <div
                class="d-flex flex-column align-items-center justify-content-center justify-content-lg-start text-center col card-advantage">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/icon-card-7.svg'?>" alt="" width="98" height="98" class="img-fluid mb-2">
                <span class="title--card mb-1 mb-lg-2">Financiamento facilitado</span>
                <p class="text">As melhores taxas de financiamento do mercado</p>
            </div>
        </div>

        <a href="contato.php" class="btn base-button cta-cards mt-5" role="button">Quero saber mais</a>
    </section>

    <!-- Quem somos -->
    <section id="about-us" class="d-lg-flex container-lg-fluid pt-5 mt-4 about-us overflow-hidden">
        <div class="row">
            <div class="py-5 px-5 offset-lg-1 col-lg-5">
                <h3 class="title--align-left mb-3">
                    Quem somos
                </h3>

                <p class="subtitle--align-left">
                    Referência no mercado nacional de carrocerias frigoríficas e placas
                    eutéticas.
                </p>

                <p class="text my-4">
                    A Friggocar é uma empresa de origem italiana, com mais de 10 anos de
                    experiência no mercado brasileiro em fabricação de baús frigoríficos e de placas eutéticas.
                    <br>
                    <br>
                    Nosso compromisso é garantir investimentos constantes em tecnologias e modernização de processos
                    e tecnologias para garantir uma alta eficiência térmica no transporte de produtos gelados e
                    supergelados.
                    <br>
                    <br>
                    Oferecemos um atendimento personalizado desde a criação do projeto até a assistência técnica.
                </p>

                <a href="quem-somos.php" role="button" class="btn base-button">
                    Conheça mais sobre a Friggocar
                </a>
            </div>

            <div class="col-lg p-0 justify-content-lg-center curves-background d-flex">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/truck.png'?>" alt="" class="img-fluid flex-grow-1 d-lg-none">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/truck-desktop.png'?>" alt="" width="1198" height="748"
                    class="img-fluid d-none d-lg-block position-absolute top-50 start-50 translate-middle">
            </div>
        </div>
    </section>

    <!-- Produtos -->
    <section id="products" class="products container-fluid">
        <div class="carousel-products row">
            <div class="product--first col-lg">
                <div class="product-wrapper">
                    <span>Produtos</span>
                    <h3 class="subtitle my-3">Carrocerias frigoríficas</h3>
                    <p>
                        A Friggocar é referência nacional na fabricação de baús refrigerados para transporte de
                        produtos
                        gelados e supergelados.
                    </p>

                    <a href="carrocerias-frigorificas.php" role="button" class="btn base-button--outlined icon-link">
                        Saiba mais
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/arrow.svg'?>" alt="" width="12px" height="8px">
                    </a>
                </div>
            </div>

            <div class="product--second col-lg">
                <div class="product-wrapper">
                    <span>Produtos</span>
                    <h3 class="subtitle my-3">Placas eutéticas</h3>
                    <p>
                        Tecnologia 100% nacional para atender as necessidades do mercado brasileiro
                    </p>

                    <a href="placas-euteticas.php" role="button" class="btn base-button--outlined">
                        Saiba mais
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/arrow.svg'?>" alt="" width="12px" height="8px">
                    </a>
                </div>
            </div>
        </div>

        <div class="carousel-products-dots"></div>
    </section>

    <!-- Newsletter -->
    <?php get_template_part('parts/newsletter') ?>

    <!-- Fale Conosco -->
    <section id="contactForm" class="container my-5 col-lg-5">
        <h3 class="title mb-5">
            Fale conosco
        </h3>

        <?php get_template_part('parts/form') ?>
    </section>

    <!-- Google Maps -->
    <?php get_template_part('parts/maps') ?>
</main>

<?php get_footer(); ?>