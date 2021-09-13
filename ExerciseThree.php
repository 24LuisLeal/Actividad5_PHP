<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3</title>
</head>
<body>
    <?php
        class SpecialDate{
            //Obtenemos la fecha actual
            public function showDate(){
                echo "La fecha de hoy es: ".date("d,m,Y");
            }
        }
        //Instanciamos un objeto de nuestra clase
        $todaysDate = new SpecialDate;
        //Nuestro objeto llama nuestra función para mostrar el texto
        $todaysDate -> showDate();
    ?>
</body>
</html>