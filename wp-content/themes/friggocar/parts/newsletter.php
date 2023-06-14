<section class="container my-4 px-3">
    <div class="newsletter px-4 py-5 overflow-hidden">
        <div
            class="newsletter-content-wrapper d-lg-flex row justify-content-center justify-content-lg-start align-items-lg-center">

            <h4 class="title--newsletter mb-4 offset-lg-1 col-lg-4">
                Inscreva-se para <br> receber novidades
            </h4>

            <form class="form d-flex flex-column gap-3 col" method="POST"
                action="../assets/scripts/form-newsletter.php">
                <input type="text" name="name" id="" placeholder="Nome" class="input-newsletter" required>
                <input type="email" name="email" id="" placeholder="E-mail" class="input-newsletter" required>
                <button type="submit" class="btn base-button mt-3">Enviar</button>
            </form>
        </div>
    </div>
</section>