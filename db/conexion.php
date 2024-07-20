<?php 

class DBAdministrarBiblioteca {

        private $servidor = 'localhost';
        private $database = 'biblioteca';
        private $user = 'root';
        private $password = '';

        private function getConexion(){
            
            $dns = "mysql:host=$this->servidor;dbname=$this->database";
            $obPDO = new PDO($dns, $this->user, $this->password);
            return $obPDO;
        }

        public function getBooks(){
            $pdoConexion = $this->getConexion();


            if ( is_object($pdoConexion)){
                $sql = "SELECT * FROM titulos";
                $titles = $pdoConexion->query($sql);
                return $titles; 
                
            }else {
                header('location: BIBLIOTECA-MAIN/401.php');
            }

            
        }
        public function getAuthors(){
            $pdoConexion = $this->getConexion();


            if ( is_object($pdoConexion)){
                $sql = "SELECT * FROM autores";
                $authors = $pdoConexion->query($sql);
                return $authors; 
                
            }else {
                header('location: BIBLIOTECA-MAIN/401.php');
            }

            
        }

        
        public function getContacts(){
            $pdoConexion = $this->getConexion();


            if ( is_object($pdoConexion)){
                $sql = "SELECT * FROM tiendas";
                $shops = $pdoConexion->query($sql);
                return $shops; 
                
            }else {
                header('location: BIBLIOTECA-MAIN/401.php');
            }

            
        }

}
?>