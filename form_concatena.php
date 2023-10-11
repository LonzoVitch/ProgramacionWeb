<?php
    $dato1= $_POST["txtnombre"];
    $dato2= $_POST["txtnombre"];

    if ($dato1=="Javier"){
        echo "<h1>Hola Javier, Welcome". $dato1;
        echo " ";
        echo '<a href="Formulario.php"> aqui </a>';
    } else {
        echo "No eres Javier";
        echo "<br>";
        echo '<a href ="Formulario.php> aqui</a>';
    }

    
    ?>
