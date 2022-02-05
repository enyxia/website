<!DOCTYPE html>
<html lang="fr">
<head>
    <?php  include 'assets/meta.php' ?>

    <link rel="icon" type="image/x-icon" href="images/ico.gif">
    
    <title>Enyxia</title>

    <style>
        html, body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            border: 0;
            outline: 0;

            background-color: white;
            background-image: url("./images/mosaiqueblack.png");
            background-attachment: fixed;
            color: white;
        }

        #link {
            font-family: 'Alegreya Sans SC', sans-serif;
            font-weight: 500;
            font-size: 200%;
            padding-top: 2%;
        }

        #link a {
            color: white;
        }

        #link a:hover {
            text-decoration: none;
            color: rgb(44, 119, 216);
        }
    </style>

</head>
<body>
    <div class="container text-center" style="padding-top: 5%;">
        <img src="./images/enyxiawhite.svg" alt="Enyxia" style="width: 25%; height: 25%;">

        <p style="font-size: 150%;padding-bottom: 5%;">Un univers, des centaines d'histoires.</p>

        <p id="link"><a href="./read">› saisons 1 à 8</a></p>
        <p id="link"><a href="https://github.com/enyxiaproject/fiches">› personnages (github)</a></p>
        <p id="link"><a href="./archives">› archives</a></p>
        <p id="link" style="padding-bottom:10%;"><a href="./about">› à propos</a></p>
    </div>

    <script src="https://static.alkanife.fr/jquery-3.6.0.min.js"></script>
    <script>
        $(function(){
            var x = 0;
            setInterval(function(){
                x-=1;
                $('body').css('background-position', x + 'px 0');
            }, 20); 
        })
    </script>
</body>
</html>