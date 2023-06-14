<!-- Footer -->
<footer class="d-flex flex-column flex-lg-row flex-lg-wrap align-items-center justify-content-center pt-5 gap-lg-5">
    <div class="logo">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/logo-footer.svg' ?>" class="img-fluid"
            alt="">
    </div>

    <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-4 mb-5 mb-lg-0">
        <strong class="mt-4 mt-lg-0">Entre em contato conosco</strong>
        <a href="tel:+551145933137" aria-label="Telefone" title="Telefone" class="icon-link link">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/phone.svg' ?>" width="28" height="26"
                alt="" class="img-fluid">
            <span>(11) 4593-3137</span>
        </a>

        <a href="mailto:vendas@friggocar.com.br?subject=Contato Vendas" title="E-mail" class="icon-link link">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/mail.svg' ?>" width="40" height="30"
                alt="" class="img-fluid">
            <span>vendas@friggocar.com.br</span>
        </a>

        <a href="https://api.whatsapp.com/send?phone=5511983070782&text=Oi!%20Gostaria%20de%20receber%20um%20or%C3%A7amento%20para%20contar%20com%20a%20Friggocar%20em%20minha%20frota."
            aria-label="WhatsApp" title="Whatsapp" class="icon-link link" target="_blank">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/whatsapp.svg' ?>" width="31" height="31"
                alt="" class="img-fluid">
            <span>11 98307.0782 </span>
        </a>
    </div>

    <div class="d-flex flex-column flex-lg-row align-items-center">
        <strong>Siga-nos nas redes sociais</strong>
        <div class="mt-4 mb-5 my-lg-0 ms-lg-3 d-flex gap-5 gap-lg-4">
            <a href="https://www.instagram.com/friggocar/" aria-label="Instagram Friggocar" target="_blank">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/instagram.svg' ?>" width="37"
                    height="37" alt="" class="img-fluid">
            </a>

            <a href="https://www.linkedin.com/company/frigocar-ind%C3%BAstria-e-comercio-de-carrocerias-e-c%C3%A2maras-frigor%C3%ADficas-ltda/about/"
                aria-label="Linkedin Friggocar" target="_blank">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/linkedin.svg' ?>" width="37"
                    height="37" alt="" class="img-fluid">
            </a>

            <a href="https://www.facebook.com/friggocar?fref=ts" aria-label="Facebook Friggocar">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/facebook.svg' ?>" width="37"
                    height="37" alt="" class="img-fluid">
            </a>
        </div>
    </div>

    <div class="address-footer w-100 d-flex flex-column align-items-center">
        <address class="d-flex flex-grow-1 mb-2">
            <a href="https://goo.gl/maps/DpEJcRJ9WMRKgSnR6" target="_blank">
                Rua Alexandrina Mathias de Oliveira, 88 - São Roque da Chave, Itupeva - SP
            </a>
        </address>

        <a href="<?php echo get_privacy_policy_url(); ?>" class="link-privacy">
            Política de privacidade
        </a>
    </div>
</footer>

<?php get_template_part('parts/fab'); ?>

<?php wp_footer(); ?>
</body>

</html>