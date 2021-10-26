<?php

  include 'config-db.php';

  $carreto = array(
    array("id"=>"1112", "nom"=>"uva", "descripcio"=>"es lila", "preu"=>"17"),
    array("id"=>"2223", "nom"=>"mandarina", "descripcio"=>"es naranja" ,"preu"=>"17"),
    array("id"=>"3334", "nom"=>"caqui", "descripcio"=>"es rojizo" ,"preu"=>"17"),
    array("id"=>"4445", "nom"=>"platan", "descripcio"=>"es amarillo" ,"preu"=>"17"),
    array("id"=>"5556", "nom"=>"kiwi", "descripcio"=>"es aspero" ,"preu"=>"17")
  );

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <style>
        body> div{
          float: left;
          margin: 10px;
        }

    
    </style>  
      
    
</head>

<body>

  <?php
    $sql="SELECT * from articles";
    $result=mysqli_query($conexion,$sql);
    while($mostrar=mysqli_fetch_array($result)){
  ?>

  <div class="card" style="width: 18rem;">

    <div class="card-body">
        <img class="card-img" src="<?php echo $mostrar['codi'] ?>.jpg" alt="Card image cap">
    </div>

    <ul class="list-group list-group-flush">
      <li class="list-group-item">Nom: <?php echo $mostrar['nom'] ?></li>
      <li class="list-group-item">Descripció: <?php echo $mostrar['descripcio'] ?></li>
      <li class="list-group-item">Preu: <?php echo $mostrar['preu'] ?></li>
    </ul>
  </div>

  <?php
    }
  ?>  

</body>
</html>