<?php
	if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['password']) && !empty($_POST['password'])) {
    $login = htmlentities($_POST['login']);
    $pass = htmlentities($_POST['password']);

    include("../BDopen.php");
    //echo 'reussi';
    $sql = 'SELECT * FROM concierge WHERE login ="'.$login.'";';
    $result = mysqli_query($mysqli, $sql);
    

    if (mysqli_num_rows($result) == 0) {
        //Pseudo is incorrect
       // header('Location : ../connexion.php?err=1');
        echo('fait3');
    } else {
        //Pseudo is correct
        $data = mysqli_fetch_assoc($result);
        $passwordHash = $data['password'];
        $hashed_password = password_hash($data['password'],PASSWORD_DEFAULT);
        
        if (password_verify($pass,$hashed_password)) {
            //Password is correct
            session_start();
            //echo('fait');
            $_SESSION['login'] = $login;
            //$_SESSION['id'] = $data['numConcierge'];
            header('Location : ../index.php');
            
        } else {
            //Password is incorrect
            echo('fait2');
            header('Location : ../connexion.php?err=2');
        }
    }
}
?>