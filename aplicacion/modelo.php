<?php
   require_once 'conexion.php';
 
   class Model {
         var $connection;
         var $query;
         var $result;

      public function __construct() {
         $this->connection = new Conexion();
      }

      function execute($query) {
         $this->query = $this->connection->query($query);
      }

      function lastInsertId() {
         
         return $this->connection->lastInsertId(); 
      }

      function get_Affect() {
         return $this->query->rowCount();
      }
      
      function fetchAll() {
         return $this->query->fetchAll(PDO::FETCH_ASSOC);
      }

      function fetch() {
         return $this->query->fetch(PDO::FETCH_ASSOC);
      }

      function close() {
         $this->connection = null;
      }
   }
?>