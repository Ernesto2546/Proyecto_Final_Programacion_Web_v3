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
                $resultado = $pdoConexion->query($sql);
                return $resultado; 
                
            }else {
                header('location: BIBLIOTECA-MAIN/401.php');
            }

            
        }

}
?>