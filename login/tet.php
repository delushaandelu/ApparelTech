<html>
<head></head>
      <body>
            <form method="POST">
                        <label for="username">Username</label>
                        <br/>
                        <input type="text" name="username">
                        <br/>
                        <label for="password">Password</label>
                        <br/>
                        <input type="password" name="password">
                        <br/>
                        <button type="submit" name="signin">Sign In</button>
                        <button type="submit" name="signup">Sign Up</button>
                        <br/>
            </form>
      </body>
    <?php   
    session_start();
    //For cases where users are not logged in redirect back to login page.


        include('../config/database.php');

        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = hash('sha256', $password);

        //echo "password ".$password;
        //echo "username ".$username;

        $qry = "SELECT * FROM customer WHERE username = '$username'";
        $userlogin = mysqli_query($_SESSION['conn'],$qry);
        $result = mysqli_fetch_array($userlogin);


        if (strcmp($result['password'], $password)==0) {
            $_SESSION["loggedIn"] = $username;
            $_SESSION["message"] = "Logged In Successfully.";
            header('Location: forgot.php');
        }
        else {
            $_SESSION["message"] = "Log In Failed";
            header('Location: tet.php');
        }   



    if(!isset($_SESSION["loggedIn"])){
                    header("Location: tet.php");
                    exit;
                }
        echo '<h1> Congratulations '.$_SESSION['loggedIn'].'</h1> <br> <h2>You successfully logged in!</h2><br>



             <h3><a href="logout.php">Logout</a> <a href="members.php">Continue</a></h3><br/><br/>';
    ?>
</html>   