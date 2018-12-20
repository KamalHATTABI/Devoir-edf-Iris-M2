<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title>edf</title>
    </head>

   <body>
         <?php
         include 'cnx.php';
         $sql = $cnx->prepare("select nom, prenom, id from controleur");
         $sql->execute();

         echo "<table>";
         foreach($sql->fetchAll (PDO::FETCH_ASSOC) as $ligne)
            {
                echo "<tr>";
                    echo "<td>".$ligne['nom']."</td>";
                    echo "<td>".$ligne['prenom']."</td>";
                    echo "<td><a href='page2.php?nomvariable=".$ligne['id']."'>Tous les clients</a></td>";
                echo "</tr>";
            }
        echo "</table>";
        ?>
    </body>
</html>