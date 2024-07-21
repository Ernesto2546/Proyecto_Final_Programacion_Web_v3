<?php include("db/conexion.php")?>
<?php 
    $libreriaAuthors = new DBAdministrarBiblioteca();
    $infoAuthors = $libreriaAuthors->getAuthors();
?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Listado de Autores</h1>

    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre Completo</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Ciudad</th>
                        <th>Estado</th>
                        <th>Pais</th>
                        <th>Codigo Postal</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Nombre Completo</th>
                        <th>Telefono</th>
                        <th>Direccion</th>
                        <th>Ciudad</th>
                        <th>Estado</th>
                        <th>Pais</th>
                        <th>Codigo Postal</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                        foreach($infoAuthors as $registroAutores) {                            
                    ?>
                    <tr>
                        <td><?php print($registroAutores['id_autor']) ?></td>
                        <td><?php print($registroAutores['nombre'] .' '. $registroAutores['apellido'])?> </td>
                        <td><?php print($registroAutores['telefono']) ?></td>
                        <td><?php print($registroAutores['direccion']) ?></td>
                        <td><?php print($registroAutores['ciudad']) ?></td>
                        <td><?php print($registroAutores['estado']) ?></td>
                        <td><?php print($registroAutores['pais']) ?></td>
                        <td><?php print($registroAutores['cod_postal']) ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


            