
<?php

header('Content-Type: application/json');

    require_once("../config/conexion.php");
    require_once("../models/Categoria.php");

    $categoria = new Categoria();

    $body = json_decode(file_get_contents("php://input"),true);

    switch($_GET["op"]){
        case "GetAll":
            $datos = $categoria->get_categoria();
            echo json_encode($datos);
        break;

        case "GetId":
            $datos=$categoria->get_categoria_x_id($body["cat_id"]);
            echo json_decode($datos);

        break;
        
        case "insert":
            $datos=$categoria->insert_categoria($body["cat_nombre"],$body["cat_obs"]);
            echo("se inserto correctamente");
        break;

        case "update":
            $datos=$categoria->update_categoria($body["cat_id"],$body["cat_nombre"],$body["cat_obs"]);
            echo("se actualizo correctamente");
        break;

        case "desactivar":
            $datos=$categoria->desactivar_categoria($body["cat_id"]);
            echo("se desactivo correctamente");
        break;

        case "delete":
            $datos=$categoria->delete_categoria($body["cat_id"]);
            echo("se elimino correctamente");
        break;
    }

?>
