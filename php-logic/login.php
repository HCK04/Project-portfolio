<?php>
require 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['usernom'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    if(empty($email) || empty($passe) || empty($mdp) ) {
        $_SESSION["error"] = 'Veuillez remplire tout les champs!';
        header("Location: offre.php");

    }else{
        $query = "SELECT * FROM utilisateurs WHERE nom=:nom AND mdp=:mdp AND email=:email";
        $stm = $pdo->prepare($query);
        $stm->execute([
            ':email'=> $email,
            ':passe'=> $passe
        ]);

        $resultat = $stm->fetch(PDO::FETCH_ASSOC);

        if($resultat){
            header("Location: ../views/acceuil.view.php");
            $_SESSION['email'] = $email;

        }else{
            header("Location: ../views/login.view.php");

        }
    }
}

?>