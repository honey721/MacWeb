<?php
session_start();
$db_hostname = "127.0.0.1";
$db_username = "root";
$db_password = "";
$db_name = "MacWeb";
$conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
if (!$conn) {
    echo "connection failed :" . mysqli_connect_error();
    exit;
}

$email = $_POST["Email"];
$password = $_POST["password"];

$sql = "select * from customers where email='$email' and password='$password' ";
$result = mysqli_query($conn, $sql);
if (!$result) {
    $response = array("success" => false, "message" => "Something went wrong!");
    /* here $response is an associative array  */
    echo json_encode($response);/* To return the string to the .js file , it is necessary to  write "json_encode($response)" statement with echo statement */
    return;
}

$row = mysqli_fetch_assoc($result);

    if (!$row) { 
        $response = array("success" => false, "message" => "Login failed! Invalid email or password.");
        echo json_encode($response);
        return;    
    }

    $_SESSION['user_id'] = $row['id'];
    $_SESSION['name'] = $row['full_name'];
    $_SESSION['email'] = $row['email'];
    $response = array("success" => true, "message" => "welcome! you are logged in");
    echo json_encode($response);
    mysqli_close($conn);
   
?>
