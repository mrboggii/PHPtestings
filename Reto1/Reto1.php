<?php
$platos = [
    [
        "Titulo" => "Ensalada",
        "Nº comensales" => 4,
        "Tipo de plato" => "Entrante",
        "Ingredientes" => [
            [
                "Nombre" => "Lechuga",
                "Cantidad" => 3],
            [
                "Nombre" => "Tomate",
                "Cantidad" => 3],
            [
                "Nombre" => "Aceitunas",
                "Cantidad" => 3],
            [
                "Nombre" => "Pepino",
                "Cantidad" => 3],
        ]
    ],
    [
        "Titulo" => "Tabla quesos",
        "Nº comensales" => 4,
        "Tipo de plato" => "Primero",
        "Ingredientes" => [
            [
                "Nombre" => "Queso de Cabra",
                "Cantidad" => 3],
            [
                "Nombre" => "Queso Cabrales",
                "Cantidad" => 3],
            [
                "Nombre" => "Queso Curado",
                "Cantidad" => 3],
            [
                "Nombre" => "Queso Piña",
                "Cantidad" => 3]
        ]
    ],
    [
        "Titulo" => "Chuleton",
        "Nº comensales" => 2,
        "Tipo de plato" => "Segundo",
        "Ingredientes" => [
            [
                "Nombre" => "Ternera",
                "Cantidad" => 3],
            [
                "Nombre" => "Nata",
                "Cantidad" => 3],
            [
                "Nombre" => "Patatas",
                "Cantidad" => 3],
        ]
    ],
    [
        "Titulo" => "Yogur Danone",
        "Nº comensales" => 2,
        "Tipo de plato" => "Postre",
        "Ingredientes" => [
            [
                "Nombre" => "Yogur",
                "Cantidad" => 3],
            [
                "Nombre" => "Fresas",
                "Cantidad" => 3],
        ]
    ],
];

// var_dump($Menu);
// var_dump($Menu["Plato4"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h2>Menu del dia</h2>";
    foreach ($platos as $plato) {
        echo "<h3>$plato[Titulo]</h3>";
        foreach ($plato as $clave => $valor){
            if($clave != "Titulo"){
                if($clave==="Ingredientes"){
                    echo "<p>$clave:</p>";
                    foreach($valor as $ingrediente) {
                        foreach($ingrediente as $datos => $value){
                            if($datos != "Nombre"){
                                echo "$datos: $value";
                                echo "<br>";
                                echo "</ul>";
                            }
                            else{
                                echo "<ul>";
                                echo "<li>$value</li>";
                                
                            }
                            
                        }
                        
                    }
                }
                else{
                    echo "<p>$clave: $valor</p>";
                    
                }
            }
           
        
        }

      
        // echo "<h3>";
   
        // echo $clave;
        // echo $ingrediente;
        // // echo "<p>$plato>/p>";
        

    }

?>
</body>
</html>