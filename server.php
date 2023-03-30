 <?php
    if(isset($_POST['s\'inscrire'])) {
        $target_dir = "images/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);
        echo "<h2> Informations d'utilistateur </h2>";
        echo "<table border='1'>";
        echo "<tr><th>Prénom</th><th>Nom</th><th>Date de Naissance</th><th>Phone</th><th>Ville</th><th>pays</th><th>Address</th><th>code Postal</th><th>Sexe</th><th>How did you hear about us?</th><th>Email</th><th>Password</th><th>Image</th><th>Note</th><th>Color</th></tr>";
        echo "<tr>";
        echo "<td>".$_POST['Prénom']."</td>";
        echo "<td>".$_POST['nom']."</td>";
        echo "<td>".$_POST['trip-start']."</td>";
        echo "<td>".$_POST['phone']."</td>";
        echo "<td>".$_POST['ville']."</td>";
        echo "<td>".$_POST['pays']."</td>";
        echo "<td>".$_POST['adresse']."</td>";
        echo "<td>".$_POST['postal']."</td>";
        echo "<td>".$_POST['civi']."</td>";
        echo "<td>".implode(", ", $_POST['site1'])."</td>";
        echo "<td>".$_POST['email']."</td>";
        echo "<td>".$_POST['password']."</td>";
        // echo "<td><a href='". $_POST['file']."'>". $_POST['file']."</a></td>";
        echo "<td><img src='images/". basename($_FILES["file"]["name"])."' alt='avatar user' width='100' height='100'></td>";
        echo "<td>".$_POST['points']."</td>";
        echo "<td style='background-color: ".$_POST['color'].";'></td>";
        echo "</tr>";
        echo "</table>";
    }
    ?>