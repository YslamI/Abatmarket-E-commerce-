<?php
    require_once('config.php');

    class DatabaseConnection
    {
        public $db_connect;
        function __construct()
        {
            $this->open_connection();
        }
        function open_connection()
        {
            $this->db_connect = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
            if(!$this->db_connect)
            {
                die("Database connection failed");
            }
        }
        
        function close_connection()
        {

        }
    }

    $database = new DatabaseConnection;
?>