<?php include("db/conexion.php")?>


<div class="container-fluid px-4">
    <h1 class="mt-4">Listado de Libros</h1>
</div>
<div>
    <?php 
        $libreria = new DBAdministrarBiblioteca();
        $libros = $libreria->getbooks();
        foreach($libros as $registroTitulos){
            print('<p>' . ' |||| ' . $registroTitulos['titulo'].'</p>');
        }
    ?>
</div>