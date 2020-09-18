<html>
    <head>
        <title>Php Login Project</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>

    <body>
    <div class="alert alert-danger" role="alert">
        Giriş Başarısız Oldu, 3 sn içinde tekrar giriş paneline yönlendiriliyorsun.
    </div>

    </body>
    <script>
        $(document).ready(function(){
            setTimeout(red,3000)

            function red(){
                $(location).attr('href', './index.php')

            }

        });

    </script>
</html>
