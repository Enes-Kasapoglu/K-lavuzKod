<?php 

/*
<?php 
            if($_SESSION['login'] == 'ok'){
                require ('homepageLayout.php');
            }
            else
        
        ?>

*/


?>


<html>
    <head>
        <title>Php Login Project</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>


    <body>
        <div class="wrapper fadeInDown">
            <div id="formContent">
                <!-- Tabs Titles -->

                <!-- Icon -->
                <div class="fadeIn first">
                    Giriş Paneli
                </div>

                <!-- Login Form -->
                <form method="POST" action="loginprocess.php">
                <input type="text" id="login" class="fadeIn second" name="username" placeholder="Kullanıcı Adı">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="Şifre">
                <input type="submit" class="fadeIn fourth" value="Giriş Yap">
                </form>

                <!-- Remind Passowrd -->
                <div id="formFooter">
                <a class="underlineHover" href="http://kilavuzkod.com">KılavuzKod</a>
                </div>

            </div>
        </div>
    
    </body>
</html>