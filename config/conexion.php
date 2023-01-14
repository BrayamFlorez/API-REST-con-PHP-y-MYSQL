<?php

class Conectar {

    protected function conexion() {

        try {
          $servername = "localhost";  //localhost
          $username = "root";
          $password = "";
          $dbname = "api-db";
          // Establece la conexión a la base de datos
          $conn = $this->dbh=new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
          // Si la conexión se realiza con éxito, devuelve la conexión
          return $conn;
        } catch (PDOException $e) {
          // Si hay un error al conectarse, imprime el error y devuelve null
          print "¡Error!: " . $e->getMessage() . "<br/>";
          die();
        }
      }
      

    public function set_name(){
        return $this->dbh->query("SET NAMES 'utf8'");
    }

}
?>