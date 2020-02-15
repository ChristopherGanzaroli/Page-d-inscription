<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <div>

        <div class="row">
            <div id="bg1" class="col-7" style='banckground-color: black'></div>

            <div class="col-5" id="singup">
                <?php 
                    if(isset($_POST['name'], $_POST['firstName'], $_POST['email'])) {
                        echo "Tu t'appelles";
                        echo $_POST['firstName'];

                        echo "Ton nom est";
                        echo $_POST['name'];

                        echo " Tu t'appelles";
                        echo $_POST['firstName'];
                    }
                ?>
                        <form action="index.php" method="post" class="#">
                            <h2  style="font-size: xx-large; color: white;">Sign Up</h2>
                            <p style="color: white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat ea tempore non </p> <br> <br>
                            <div>
                                <label for="name" style="display : block; color: white">Entrez votre nom: </label>
                                <input class="form" type="text" name="name" required>
                            </div>
                            <div>
                                <label for="firstName" style="display : block;color: white">Entrez votre prénom: </label>
                                <input class="form" type="text" name="firstName" required>
                            </div>
                            <div>
                                <label for="email" style="display : block; color: white">Entrez votre email: </label>
                                <input class="form" type="email" name="email" id="email" required>
                            </div> <br>
                            <div class="#">
                                <input class="button" type="submit" value="Submit">
                            </div>
                        </form>
            </div>



        </div>

    </div>



    <!--  

    <div>
        <div id="bg1">
            <div id="bg2" class="row">
                <div class="col 6 left">
                    <form action="" method="get" class="form-example">
                        <h2 id="singup">Sing Up</h2>

                        <div class="form-example">
                            <label for="name">Enter your name: </label>
                            <input type="text" name="name" id="name" required>
                        </div>
                        <div class="form-example">
                            <label for="email">Enter your email: </label>
                            <input type="email" name="email" id="email" required>
                        </div>
                        <div class="form-example">
                            <input type="submit" value="Subscribe!">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

-->



















    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>