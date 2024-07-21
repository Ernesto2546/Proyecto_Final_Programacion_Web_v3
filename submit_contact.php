<?php include("db/conexion.php") ?>

<?php 
    $email = ($_POST['email']);
    $nombre = ($_POST['nombre']);
    $asunto = ($_POST['asunto']);
    $comentario = ($_POST['comentario']);

    $libreria = new DBAdministrarBiblioteca();
    $resultado = $libreria->setContacts($email, $nombre, $asunto, $comentario);

 ?>

<?php include("template/header.php") ?>
<?php include("template/sidebar.php") ?>

<main>
    <?php include("pages/contacts_result.php") ?>
</main>

<?php include("template/footer.php") ?>
