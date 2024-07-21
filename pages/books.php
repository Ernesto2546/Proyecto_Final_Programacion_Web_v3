<?php include("db/conexion.php") ?>

<?php
    $libreria = new DBAdministrarBiblioteca();
    $libros = $libreria->getbooks();
?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Listado de Libros</h1>

    <div class="card mb-4">
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Título</th>
                        <th>Tipo</th>
                        <th>Precio</th>
                        <th>Total de ventas</th>
                        <th>Fecha de publicación</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Título</th>
                        <th>Tipo</th>
                        <th>Precio</th>
                        <th>Total de ventas</th>
                        <th>Fecha de publicación</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php
                        foreach ($libros as $registroTitulos) {                            
                    ?>
                    <tr>
                        <td><?php print($registroTitulos['id_titulo']) ?></td>
                        <td><?php print($registroTitulos['titulo']) ?></td>
                        <td><?php print($registroTitulos['tipo']) ?></td>
                        <td><?php print($registroTitulos['precio']) ?></td>
                        <td><?php print($registroTitulos['total_ventas']) ?></td>
                        <td><?php print($registroTitulos['fecha_pub']) ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>