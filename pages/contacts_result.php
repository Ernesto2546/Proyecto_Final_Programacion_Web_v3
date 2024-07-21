<div class="container-fluid px-4">
    <h1 class="mt-4">Contacto</h1>

    <div id="contenedorContactos">
        <div id="img">
            <img width="80%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThWB1II1WjPcJW59rfoony5dznkjHkwRTEGQ&s" alt="Imagen de Contactame">
        </div>

        <?php if ($resultado) { ?>

            <div>
                <div>
                    <h3>
                        GRACIAS POR CONTACTARNOS...
                    </h3>
                </div>
                <div>
                    <a class="btn btn-primary" href="contacts.php" role="button">Volver a comentarios</a>
                    <a class="btn btn-primary" href="index.php" role="button">Ver Libros</a>
                    <a class="btn btn-primary" href="authors.php" role="button">Ver Autores</a>
                </div>
            </div>

        <?php } else { ?>
            OPPS.... HUBO UN ERROR

        <?php } ?>
    </div>

</div>