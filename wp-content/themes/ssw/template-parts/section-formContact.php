<section class="formContact">
    <div class="container">
        <form action="<?php echo bloginfo( "url" ) ?>/wp-json/ssw_theme/v1/formcontato/"
        name="contact" method="post" class="row">
            <div class="col-lg-4 c-1 offset-lg-2">
                <label for="name">Nome</label>
                <input type="text" name="name" required>
                <label for="email">E-mail</label>
                <input type="email" name="email" required>
                <label for="tel">Telefone</label>
                <input type="text" name="tel" minlength="10" required>
            </div>
            <div class="col-lg-4 c-2">
                <label for="message">Mensagem</label>
                <textarea name="message" cols="30" rows="10"></textarea>
            </div>
            <button class="btns secondary center">Entre em contato</button>
        </form>
    </div>
</section>