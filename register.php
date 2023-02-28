<?php
require_once("includes/config.php");
require_once("includes/classes/FormSanitizer.php");
require_once("includes/classes/Constants.php");
require_once("includes/classes/Account.php");

    $account = new Account($con);

    if(isset($_POST["submitButton"])) {
        
        
        $username = FormSanitizer::sanitizeFormUsername($_POST["username"]);
        $email = FormSanitizer::sanitizeFormEmail($_POST["email"]);
        $email2 = FormSanitizer::sanitizeFormEmail($_POST["email2"]);
        $password = FormSanitizer::sanitizeFormPassword($_POST["password"]);
        $password2 = FormSanitizer::sanitizeFormPassword($_POST["password2"]);
        
        $success = $account->register( $username, $email, $email2, $password, $password2);

        if($success) {
            $_SESSION["userLoggedIn"] = $username;
            header("Location: index.php");
        }
    }

function getInputValue($name) {
    if(isset($_POST[$name])) {
        echo $_POST[$name];
    }
}  
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to GIKO</title>
        <link rel="stylesheet" type="text/css" href="assets/style/style.css" />
    </head>
    <body>
        
        <div class="signInContainer">

            <div class="column">

                <div class="header">
                    <img class="log"src="assets/images/gikolog.png" title="Logo" alt="Site logo" />
                    <h3>BASIC REGISTER</h3>
                    <span>to continue to giko</span>
                </div>

                <form method="POST">

                    
                    <?php echo $account->getError(Constants::$usernameCharacters); ?>
                    <?php echo $account->getError(Constants::$usernameTaken); ?>
                    <input type="text" name="username" placeholder="Username" value="<?php getInputValue("username"); ?>" required>

                    <?php echo $account->getError(Constants::$emailsDontMatch); ?>
                    <?php echo $account->getError(Constants::$emailInvalid); ?>
                    <?php echo $account->getError(Constants::$emailTaken); ?>
                    <input type="email" name="email" placeholder="Email" value="<?php getInputValue("email"); ?>" required>

                    <input type="email" name="email2" placeholder="Confirm email" value="<?php getInputValue("email2"); ?>" required>
                    
                    <?php echo $account->getError(Constants::$passwordsDontMatch); ?>
                    <?php echo $account->getError(Constants::$passwordLength); ?>
                    <input type="password" name="password" placeholder="Password" required>

                    <input type="password" name="password2" placeholder="Confirm password" required>

                    <input type="submit" name="submitButton" value="SUBMIT">

                </form>

                <a href="login.php" class="signInMessage">Already have an account? Sign in here!</a>
               

            </div>

        </div>
        <button class="prem" onclick="window.location.href='http://localhost/link/register1.php';">PREMIUM REGISTER</GET>
        <button class="premplus" onclick="window.location.href='http://localhost/link/register1.php';">PREMIUM+ REGISTER</GET>
 <style>




.log{
    position: relative;
    height: 120px;
}


.signInContainer  {
    background-color: white;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
}




  .prem{
    background-color: #85CDFD;
    position: absolute;
    bottom: 560px;
    left: 990px;
    height: 50px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    

  }



  .premplus{
    background-color: #85CDFD;
    position: absolute;
    bottom: 560px;
    left: 1150px;
    height: 50px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    

  }


 </style>



    </body>
</html>