<div>
    <?php
        if ( isset($_GET['sent']) ){
            if ( $_GET['sent'] == '1'){
                echo "<p> ✔ Formulario enviado correctamente</p><br>";
            }
            else {
                echo "<p> Hubo un error al enviar</p><br>";
            }
        }
    ?>
    <form class="FormContact" action="<?php echo admin_url( 'admin-post.php' ); ?>" method="post">
        <label >Nombre:</label>
        <input type="text" name="name" id="name" required>

        <label for="email">Correo:</label>
        <input type="email" name="email" id="email" required>

        <label for="message">Mensaje:</label>
        <textarea name="message" id="message" cols="30" rows="10" required></textarea>

        <input type="hidden" name="action" value="process_form">
        <input class="SubmitContact" type="submit" name="submit" value="Enviar">
    </form>
</div>
