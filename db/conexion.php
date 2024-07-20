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

        
        public function setContacts($email, $nombre, $asunto, $comentario){
            $pdoConexion = $this->getConexion();
            $correcto = false;

            if ( is_object($pdoConexion)){

                $fecha = date("Y/m/d");
                $sql = "INSERT INTO contacto (fecha, correo, nombre, asunto, comentario) VALUES (?,?,?,?,?)";
                $stmt= $pdoConexion->prepare($sql);
                $stmt->execute([$fecha, $email, $nombre, $asunto, $comentario]);

                $correcto = true;
                
            }else {
                header('location: BIBLIOTECA-MAIN/401.php');
            }

            return $correcto;
        }

}
?>