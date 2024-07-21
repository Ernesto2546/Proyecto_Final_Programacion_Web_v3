<?php include("db/conexion.php") ?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Contacto</h1>

    <div id="contenedorContactos">
        <div id="img">
            <img width="80%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcThWB1II1WjPcJW59rfoony5dznkjHkwRTEGQ&s" alt="Imagen de Contactame">
        </div>
    
        <div>
            <form action="submit_contact.php" method="post" id="formContact">
    
                <div>
                    <label for="correo">Correo: </label>
                    <input type="email" class="campos" id="email" name="email" required>
                </div>
                <div>
                    <label for="nombre">Nombre: </label>
                    <input type="text" class="campos" id="nombre" name="nombre" required>
                </div>
                <div>
                    <label for="asunto">Asunto: </label>
                    <input type="text" class="campos" id="asunto" name="asunto" required>
                </div>
                <div>
                    <label for="comentario">Comentario: </label>
                    <textarea class="campos" id="comentarioText" name="comentario" required></textarea>
                </div>
                <div id="sendButton">
                    <input type="submit" value="Enviar" id="send" class="btn btn-primary"> 
                </div>
            </form>
        </div>
    </div>

</div>