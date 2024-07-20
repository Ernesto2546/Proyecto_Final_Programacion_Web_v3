<?php include("db/conexion.php")?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Listado de Contantos</h1>
</div>
<div>
    <?php 
        $info = new DBAdministrarBiblioteca();
        $contactos = $info->getcontacts();
        foreach($contactos as $registroTiendas){
            print('<p>'.$registroTiendas['nombre_tienda'].'  |||  '.$registroTiendas['direcc_tienda'].'  |||  ' .$registroTiendas['ciudad'].'</p>');
        }
    ?> 
</div>