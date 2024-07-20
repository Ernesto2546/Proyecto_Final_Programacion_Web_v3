<?php include("db/conexion.php")?>


<div class="container-fluid px-4">
    <h1 class="mt-4">Listado de Libros</h1>
</div>
<div>
    <?php 
        $libreria = new DBAdministrarBiblioteca();
        $libros = $libreria->getbooks();
        foreach($libros as $registro){
            print('<p>'.$registro['titulo'].'</p>');
        }
    ?>
</div>