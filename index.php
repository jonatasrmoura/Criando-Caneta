<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula02 PHP POO</title>
</head>
<body>
    <?php
        require_once 'classes/Caneta.php';

        // Instanciar
        // Objeto c1 do tipo caneta
        $c1 = new Caneta;

        // Editar Atributos
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        
        // Chamar Metodo
        $c1->tampar();
        
        // Mostrar o Status atual do $c1
        print_r($c1);

        echo "<br/>";
        // ------- OUTRO OBJETO -------------
        $c2 = new Caneta;

        $c2->cor = "Vermelho";
        $c2->carga = 50;
        $c2->tampar();

        print_r($c2);
    ?>
</body>
</html>