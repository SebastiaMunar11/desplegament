<?php 

    include 'config-db.php';

    $name = $_POST['nom'];
    $descripcio = $_POST['descripcio'];
    $preu = $_POST['preu'];
    
    $sql = "INSERT INTO articles (nom, descripcio, preu) VALUES ('$name', '$descripcio', '$preu')";


    if (mysqli_query($conexion, $sql)) {
          echo "New record created successfully";
    } else {
          echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
    }
    mysqli_close($conexion);

    

?>