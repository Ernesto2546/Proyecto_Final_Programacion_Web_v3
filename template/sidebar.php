<?php
    function active($currect_page){
        $url =  explode('/', $_SERVER['REQUEST_URI']) ;
        $current_path = end($url);  
        
        if($currect_page == $current_path){
            echo 'active';
        } 
    }
?>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Menú Principal</div>
                    <a class="nav-link <?php active("index.php"); active(""); ?>" href="index.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Libros 
                    </a>
                    <a class="nav-link <?php active("authors.php")?>" href="authors.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Autores
                    </a>
                    <a class="nav-link <?php active("contacts.php")?>" href="contacts.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Contactos
                    </a>

            </div>
        </nav>
    </div>

    <div id="layoutSidenav_content">