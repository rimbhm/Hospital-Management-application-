

<?php
/*** begin our session ***/
session_start();

/*** check if the users is already logged in ***/
if(isset( $_SESSION['iduser'] ))
{
    $message = 'Users is already logged in';
}
/*** check that both the username, password have been submitted ***/
if(!isset( $_POST['login'], $_POST['password']))
{
    $message = 'Please enter a valid username and password';
}
/*** check the username is the correct length ***/
elseif (strlen( $_POST['login']) > 20 || strlen($_POST['login']) < 4)
{
    $message = 'Incorrect Length for Username';
}
/*** check the password is the correct length ***/
elseif (strlen( $_POST['password']) > 20 || strlen($_POST['password']) < 4)
{
    $message = 'Incorrect Length for Password';
}
/*** check the username has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['login']) != true)
{
    /*** if there is no match ***/
    $message = "Username must be alpha numeric";
}
/*** check the password has only alpha numeric characters ***/
elseif (ctype_alnum($_POST['password']) != true)
{
        /*** if there is no match ***/
        $message = "Password must be alpha numeric";
}
else
{
    /*** if we are here the data is valid and we can insert it into database ***/
    $login = filter_var($_POST['login'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    /*** now we can encrypt the password ***/
   //$password = sha1( $password );
    
    /*** connect to database ***/
    /*** mysql hostname ***/
    $mysql_hostname = 'localhost';

    /*** mysql username ***/
    $mysql_username = 'root';

    /*** mysql password ***/
    $mysql_password = '';

    /*** database name ***/
    $mysql_dbname = 'bdisetk';

    try
    {
        $dbh = new PDO("mysql:host=$mysql_hostname;dbname=$mysql_dbname", $mysql_username, $mysql_password);
       /***  $message = a message saying we have connected ***/

        /*** set the error mode to excptions ***/
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        /*** prepare the select statement ***/
        $stmt = $dbh->prepare("SELECT iduser,login,password FROM utilisateur 
                    WHERE login = :login AND password = :password");
        /*** bind the parameters ***/
        $stmt->bindParam(':login', $login, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR, 40);

        /*** execute the prepared statement ***/
        $stmt->execute();

        /*** check for a result ***/
        $iduser = $stmt->fetchColumn();

        /*** if we have no result then fail boat ***/
        if($iduser == false)
        {
		
		header("location:../index.php");
        $message = 'Login Failed';
        }
        /*** if we do have a result, all is well ***/
        else
        {
                /*** set the session user_id variable ***/
                $_SESSION['iduser'] = $iduser;

                /*** tell the user we are logged in ***/
                $message = 'You are now logged in';
				header("location:../admin.php");
        }


    }
    catch(Exception $e)
    {
        /*** if we are here, something has gone wrong with the database ***/
        $message = 'We are unable to process your request. Please try again later"';
    }
}
?>
