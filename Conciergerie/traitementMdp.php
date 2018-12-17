<?php
	if (isset($_SESSION['login']) && isset($_POST['passwordactu']) && !empty($_POST['passwordactu']) && isset($_POST['passwordnew']) && !empty($_POST['passwordnew'])) {
        $login = htmlentities($_SESSION['login']);
        $passactu = htmlentities($_POST['passwordactu']);
        $passnew = htmlentities($_POST['passwordnew']);

        $sql = 'SELECT password FROM concierge WHERE login ="'.$login.'";';
        $result = mysqli_query($mysqli, $sql);
        $data = mysqli_fetch_assoc($result);

        include("BDopen.php");    

        if ($passactu == $data['password']) {
            echo "Mot de passe corret ";
                //Password is correct
            $sql = 'UPDATE concierge SET password="'.$passnew.'"" WHERE login ="'.$login.'";';
            $result = mysqli_query($mysqli, $sql);

            header('Location:index.php');
                
        } else {
            //Password is incorrect
           
            header('Location : ../compte.php?err=2');
        }
    
    }
?>