<?php include("db/conexion.php")?>
<h1>Listado de Autores</h1>

<main>
    <div>
        <table id="datatablesSimple">
            <?php 
            $libreriaAuthors = new DBAdministrarBiblioteca();
            $infoAuthors = $libreriaAuthors->getAuthors();
            foreach($infoAuthors as $registroAutores){
                print('<p>'. ' |||| ' . $registroAutores['id_autor'] . ' |||| ' . $registroAutores['nombre'] . ' ' . $registroAutores['apellido'].'</p>');
            }
            ?>
        </table>
    </div>
</main>