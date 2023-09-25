<?php
    abstract class Conn {
        public string $db = "mysql";
        public string $host = "localhost";
        public string $user = "root";
        public string $pass = "";
        public string $dbName = "pwb2";
        public int $port = 3306;
        public object $connect;

        public function conectar() : Object {
            $dbConnect = new PDO(
                "$this->db:".
                "host:$this->host;".
                "port=$this->port;".
                "dbname=$this->dbName",
                $this->user,
                $this->pass
            );

            return $dbConnect;
        }
    }
?>