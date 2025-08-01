<?php

    class Connection {
        private $conn;

        public function __construct() 
        {
            $this->connect();
        }

        public function connect()
        {
            $serverName = '192.168.132.170';
            $connectionInfo = array (
            "Database" => "dbfophJobOrderRequest",
            "UID" => "foph",
            "PWD" => "fophfoph",
            "CharacterSet" => "UTF-8"
            );

            $this->conn = sqlsrv_connect($serverName, $connectionInfo);

            if ($this->conn === false) {
                die(print_r(sqlsrv_error(), true));
            }
        }

        public function openConnection()
        {
            if (!$this->conn) 
            {
                echo "Could not connect!";
                die("Could not connect!");
            }
        }

        public function getConnection()
        {
            return $this->conn;
        }

        public function closeConnection()
        {
            if ($this->conn) {
                sqlsrv_close($this->conn);
            }
        }

    }

?>