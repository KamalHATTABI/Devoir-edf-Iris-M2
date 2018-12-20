<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8" />
        <title>edf</title>
    </head>


    <body>
         <?php
         include 'cnx.php';
         $sql = $cnx->prepare("select client.nom, client.prénom, ancienReleve, dernierReleve, identifiant, id from client, controleur where controleur.id = client.idcontroleur and identifiant =".$_GET['nomparam']);
         $sql->execute();

         echo "<table>";
         foreach($sql->fetchAll (PDO::FETCH_ASSOC) as $ligne)
            {   
                echo "<tr>";
                    echo "<td> nom : ".$ligne['nom']."</td> ";   
                echo "</tr>";
                echo "<tr>";
                    echo "<td> prénom : ".$ligne['prénom']."</td> ";
                echo "</tr>";
                echo "<tr>";
                    echo "<td> ancien relevé : ".$ligne['ancienReleve']."</td> ";
                echo "</tr>";
                echo "<tr>";
                    echo "<td> dernier relevé : ".$ligne['dernierReleve']."</td> ";
                echo "</tr>";
                echo "<form name='insertion' action='page2.php?nomvariable=".$ligne['id']."'method='POST'>";
                    echo "<tr>";
                        echo "<td>Entrez ici le nouveau relevé : </td>";
                        echo "<td><input type='text'/></td>";
                    echo "</tr>";
                    echo "<tr align='center'>";
                        echo "<td colspan='2'><input type='submit' value='insérer'></td>";
                    echo "</tr>";
                echo "</form>";
            }
        echo "</table>";
        ?>
    </body>
</html>