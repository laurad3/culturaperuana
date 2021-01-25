<?php /* Template Name: Custom Contacts Page */ ?>
<?php get_header(); ?>

<main class="content">
    <section class="section contact">
        <h2 class="section-title contact__title"><?php the_title(); ?></h2>

        <form action="" method="POST" class="contact-form">
            <div class="contact-form-field">
                <label for="name" class='contact-label'>Nombre:</label>
                <input type="text" id="name" class='input-text contact-input' name="name" placeholder="Nombre">
            </div>
            <div class="contact-form-field">
                <label for="lastname" class='contact-label'>Apellido:</label>
                <input type="text" id="lastname" class='input-text contact-input' name="lastname" placeholder="Apellido">
            </div>
            <div class="contact-form-field">
                <label for="email" class='contact-label'>Correo electrónico:</label>
                <input type="email" id="email" class='input-text contact-input' name="_replyto"
                    placeholder="Correo electrónico">
            </div>
            <div class="contact-form-field">
                <label for="message" class='contact-label'>Escriba su mensaje:</label>
                <textarea id="message" class='input-text contact-input contact-textarea' name="message"></textarea>
            </div>

            <button type="submit" class="btn btn--primary contact-form-button">Enviar</button>
        </form>
    </section>
</main>

<?php get_footer(); ?>