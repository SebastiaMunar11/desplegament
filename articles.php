<?php

        include 'config-db.php';

?>


<!DOCTYPE html>
<html>
<head>
        <title>mostrar datos</title>
</head>
<body>

<br>

        <table border="1" >
                <tr>
                        <th>nom</th>
			<th>descripcio</th>
			<th>preu</th>
			<th>foto</th>
                </tr>

                <?php
                $sql="SELECT * from articles";
                $result=mysqli_query($conexion,$sql);

                while($mostrar=mysqli_fetch_array($result)){
                 ?>

                <tr>
                        <td><?php echo $mostrar['nom'] ?></td>
			<td><?php echo $mostrar['descripcio'] ?></td>
			<td><?php echo $mostrar['preu'] ?></td>
			<td><img src="<?php echo $mostrar['codi'] ?>.jpg" width="50px" height="50px"></td>

                </tr>
        <?php
        }
         ?>
        </table>

</body>
</html>
