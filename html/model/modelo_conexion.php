<?php
/* Conectar a una base de datos de MySQL invocando al controlador */

class conexionBD
{

    private $pdo;

    public function conexionPDO()
    {

        $host = "localhost";
        $usuario = "root";
        $contrasena = "";
        $puerto = "3306";
        $dbname = "tailwind";

        // $host = "localhost";
        // $usuario = "u427011002_root";
        // $contrasena = "fLt0838vFso8#";
        // $puerto = "3306";
        // $dbname = "u427011002_mqpseguros";

        try {

            $pdo = new PDO("mysql:host=$host;port=$puerto;dbname=$dbname;", $usuario, $contrasena);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec("set names utf8");
            $this->pdo = $pdo;
            return $pdo;
        } catch (PDOException $e) {
            echo 'La conexión ha fallado';
        }
    }

    function cerrar_conexion()
    {
        $this->pdo = null;
    }
}
