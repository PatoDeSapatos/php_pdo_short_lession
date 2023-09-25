<?php
    class DbContact extends Conn {

        public object $conn;

        public function __construct() {
            $this->conn = $this->conectar();
        }

        public function register( string $name, string $email ) {
            $sql = "INSERT INTO usuarios(nome, email) VALUES('$name', '$email')";
            $queryResults = $this->conn->prepare( $sql );
            $result = $queryResults->execute();

            if( !$result ) {
                $queryResults->errorInfo();
                exit;
            }
        }
        
        public function list() : array {
            $sql = "SELECT * FROM usuarios";
            $queryResults = $this->conn->query( $sql );

            return $queryResults->fetchAll();
        }

    }

?>