<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boggii</title>
</head>
<body>
    <?php
        $connector = new mysqli("localhost", "root", "", "pehachepe");
        if ($connector->connect_errno) {
            echo "Fallo al conectar a MySQL: (" . $connector->connect_errno . ") " . $connector->connect_error;
        }else{
            $resultado = $connector->query("SELECT * FROM ingrediente");
            if(!$resultado){
                echo "error";
            }else{
                echo "consulta correcta";
                var_dump($resultado);
            }
        }
    ?>
</body>
</html>