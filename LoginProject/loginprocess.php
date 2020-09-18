<?php 
    session_start();

    $_SESSION['login'] = ("no");

    $db = new PDO("mysql:host=localhost;dbname=login","lynpros","babun985");
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = $db->prepare("SELECT * FROM account WHERE usern = ? AND userp = ?");
    $sql->execute([$username,$password]);

    $datas = $sql->fetch(PDO::FETCH_ASSOC);


    if($datas) {
        $_SESSION['login'] = "ok";
    }
    else{
        $_SESSION['login'] = "no";
    }



    if($_SESSION['login'] == "ok"){
        header("Location: http://kilavuzkod.com");
    }
    else{
        require("loginreject.php");
    }

?>

