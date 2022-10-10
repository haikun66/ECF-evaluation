<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ECF évaluation</title>
</head>
<body>
    <main>
        <div class="login-wrapper">

            <form action="" class="form">
                <img class="pdp" src="media/profile.png" alt="">
                <h2>Login</h2>
                <div class="input-group">
                    <input type="text" name="loginUser" id="loginUser" required>
                    <label for="loginUser">User Name</label>
                </div>
                <div class="input-group">
                    <input type="password" name="loginPassword" id="loginPassword" required>
                    <label for="loginPassword">Password</label>
                </div>
                <input type="submit" value="Login" class="submit-btn">
                <a href="#forgot-pw" class="forgot-pw">Forgot Password?</a>
            </form>

            <div id="forgot-pw">

                <form action="" class="form">
                    <a href="#" class="close">&times;</a>
                    <h2>Reset Password</h2>
                    <div class="input-group">
                        <input type="email" name="loginEmail" id="loginEmail" required>
                        <label for="loginEmail">Email</label>
                    </div>
                    <input type="submit" value="Submit" class="submit-btn">
                </form>

            </div>

        </div>
    </main>
    <script src="main.js"></script>

    <?php
        define('DB_SERVER', 'localhost');
        define('DB_USERNAME', 'root');
        define('DB_PASSWORD', 'dgfdfgsdfgf');
        define('DB_NAME', 'api_web');
        
        /* Connexion à la base de données */
        $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
        
        /* verifier connection */
        if($link === false){
            echo "error db login";
            die("ERROR: Could not connect." . mysqli_connect_error());
            
        } 
    ?>
    
</body>
</html>
