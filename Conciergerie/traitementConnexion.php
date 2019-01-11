<?php
	if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['password']) && !empty($_POST['password'])) {
    $login = htmlentities($_POST['login']);
    $pass = htmlentities($_POST['password']);

    include("BDopen.php");
    //echo 'reussi';
    $Query = 'SELECT login, password FROM concierge WHERE login ="'.$login.'";';
    $sql  = $Connect->query($Query);
    $result = mysqli_fetch_array($sql);
    

    if ($result == 0) {
        //Pseudo is incorrect
       header('Location : ../connexion.php?err=1');
        
    } else {
        //Pseudo is correct
        $passwordHash = $result[1];
        $hashed_password = password_hash($data['password'],PASSWORD_DEFAULT);
        
        if (password_verify($pass,$hashed_password)) {
            //Password is correct
            session_start();
            
            $_SESSION['login'] = $login;
            $_SESSION['id'] = $data['numConcierge'];

            header('Location:index.php');
            
        } else {
            //Password is incorrect
           
            header('Location : ../connexion.php?err=2');
        }
    }
}
?>