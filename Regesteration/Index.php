<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
    <h1>Regesteration</h1>
    username: <br>
    <input type="text" name="username"><br>
    password: <br>
    <input type="password" name="password"> <br>
    <input type="submit" value="reqester">
    </form>
</body>
</html>



<?php
        include("DataBase2.php");
       

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
            $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        
        
            if(empty($username)){
                echo "Please enter a username";
            }elseif(empty($password)){
                echo "Please enter a password";
            }else {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO user (username, Password)
                        Values ('$username', '$hash') ";
                mysqli_query($conn, $sql);
                echo "You are now regesterd!";
            
            }
        }
        
        
        mysqli_close($conn);
?>