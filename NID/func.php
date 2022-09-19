<?php
include('config.php');

if(isset($_POST['act']) && $_POST['act'] == "Login"){

$email = $_POST['email'];
$pass = $_POST['pass'];

if (!empty($email) && !empty($pass)) {
    // code... LETS CHECK USERS ENTERED EMAIL AND PASSWORD MATCH TO DATABASE ANY TABLE ROW EMAIL AND PASSWORD
    $sql = "SELECT * FROM users WHERE Email = '{$email}' AND Password = '{$pass}'";
    
    $result = mysqli_query($conn, $sql) or die("SQL Failed");
    if ($result->num_rows == 1) {
        foreach ($result as $rows) {
            // $rows = $_SESSION["user_type"];
         $_SESSION["current_user"] = $rows ;
            // $u_type = $_SESSION['user_type'];
        }
        echo "Login SuccessFully";
        
    }else{
        echo "Email or password is incorrect !";
    }
}else{
    echo "Please enter email and password!";
}

}
