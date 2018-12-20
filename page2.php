<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title>edf</title>
    </head>

 <body>
         <?php
         include 'cnx.php';
         $sql = $cnx->prepare("select client.nom, client.prenom, ancienReleve, dernierReleve, identifiant from client, controleur where controleur.id = client.idcontroleur and id =".$_GET['nomvariable']);
         $sql->execute();

         echo "<table>";
         foreach($sql->fetchAll (PDO::FETCH_ASSOC) as $ligne)
            {   
                echo "<tr>";
                    echo "<td>".$ligne['nom']."</td>";
                    echo "<td>".$ligne['prenom']."</td>";
                    echo "<td>".$ligne['ancienReleve']."</td>";
                    echo "<td>".$ligne['dernierReleve']."</td>";
                    echo "<td><a href='page3.php?nomparam=".$ligne['identifiant']."'>Nouveau relevés</a></td>";
                echo "</tr>";
            }
        echo "</table>";
        echo "<td><a href='index.php'>HOME</a></td>";
        ?>
    </body>
</html>