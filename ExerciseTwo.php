<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2</title>
</head>
<body>
    <?php
        class CalculateIVA{
            //Calcula el IVA
            //Recibe como parámetro el valor a calcular
            //Retorna el valor calculado redondeado a dos decimales
            public function calculateIVA($price){
                //Valor del IVA en México
                $iva = 16;
                //Fórumula para calcular el IVA
                $result = $price + ($iva*($price/100));
                //Redondear a dos decimales
                $result = round($result,2);
                //Muestro el resultado
                echo "El IVA calculado de 2034 es : ".$result;
            }
        }
        //Instanciamos un objeto de nuestra clase
        $calculator = new calculateIVA;
        //Valor del precio a calcular el IVA
        $price = 2034;
        //Nuestro objeto llama nuestra función para mostrar el texto
        $calculator -> calculateIVA($price);
    ?>
</body>
</html>