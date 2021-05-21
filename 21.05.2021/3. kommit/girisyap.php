<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/5698c55166.js" crossorigin="anonymous"></script>



    <title>Siirt ve Ben</title>
</head>



<body>
    <!--menu kısmı başlangıç-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">SİİRT</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link active" href=" anasayfa.html"><i class="fas fa-home"></i>Ana Sayfa </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="hakkimda.html"><i class="fas fa-info"></i>Hakkımda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="egitim.html"><i class="fas fa-school"></i>Eğitim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sehrim.html"><i class="fas fa-city"></i>Şehrim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mirasimiz.html"><i class="fas fa-mosque"></i>Mirasımız</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ilgialanlarim.html"><i class="fas fa-smile"></i>İlgi Alanlarım</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="iletisim.html"><i class="fas fa-headset"></i>İletişim</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="girisyap.html"><i class="fas fa-info"></i>Giriş yap</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        .input-container {
            display: -ms-flexbox;
            /* IE10 */
            display: flex;
            width: 100%;
            margin-bottom: 15px;
        }

        .icon {
            padding: 10px;
            background: dodgerblue;
            color: white;
            min-width: 50px;
            text-align: center;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            outline: none;
        }

        .input-field:focus {
            border: 2px solid dodgerblue;
        }

        /* Set a style for the submit button */
        .btn {
            background-color: dodgerblue;
            color: white;
            padding: 15px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
            opacity: 0.9;
        }

        .btn:hover {
            opacity: 1;
        }

    </style>


        <form action="girisyap.html" method="post" style="max-width:500px;margin:auto">
            <h2>Register Form</h2>
            <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input class="input-field" type="text" placeholder="Username" name="usrnm">
            </div>

          

            <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input class="input-field" type="password" placeholder="Password" name="psw">
            </div>

            <button type="submit" class="btn">Register</button>
        </form>




    </body>

</html>
<?php
include("baglanti.php");


?>
