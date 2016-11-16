<?php
try {
$dbuser = 'root';
$dbpass = 'root';
$host = 'localhost';
$dbname='REGISTER';

$connec = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
}catch (PDOException $e) {
echo "Error : " . $e->getMessage() . "<br/>";
die();
}
if(isset($_POST["username"], $_POST["password"])) 
    {     

        $name = $_POST["username"]; 
        $password = $_POST["password"]; 

        $result1 = mysql_query("SELECT username, password FROM Users WHERE username = '".$name."' AND  password = '".$password."'");

        if(mysql_num_rows($result1) > 0 )
        { 
            $_SESSION["logged_in"] = true; 
            $_SESSION["naam"] = $name; 
            echo "success";
        }
        else
        {
            echo 'The username or password are incorrect!';
        }
}
?>