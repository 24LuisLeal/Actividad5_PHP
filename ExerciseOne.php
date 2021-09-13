<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>
<body>
    <?php
        class TextStrings{
            //Variable de tipo String con un valor predeterminado
            public $randomText = "La zorra saltó de la cerca";
            //Imprime el valor de la variable $randomText
            public function showText(){
                echo$this->randomText;
            }
        }
        //Instanciamos un objeto de nuestra clase
        $myTextString = new TextStrings;
        //Nuestro objeto llama nuestra función para mostrar el texto
        $myTextString -> showText();
    ?>
</body>
</html>