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

$name = $_POST["full_name"];
$email = $_POST["email"];
$password = $_POST["password"];/* here the name of the element/input tag (of form tag in html) is case sensitive means you can not write 'name' as 'Name'*/

$sql2 = "select * from customers where email='$email' ";
$result1 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_assoc($result1);
if ($row2) {
    $response = array("success" => false, "message" => "Email already Registered with us!");
    echo json_encode($response);
    return;

} else {
    $sql = "INSERT INTO customers (full_name,email,PASSWORD) VALUES('$name','$email','$password')";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        $response = array("success" => false, "message" => "Something went wrong!");
        /* here $response is an associative array  */
        echo json_encode($response);/* To return the string to the .js file , it is necessary to  write "json_encode($response)" statement with echo statement */
        return;
    }
    $sql1 = "select * from customers where email='$email'";
    $res = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($res);
    /* setcookie('user_id',$row1['id'],time()+3600);
    setcookie('name',$row1['full_name'],time()+3600); */
    $_SESSION['user_id'] = $row1['id'];
    $_SESSION['name'] = $row1['full_name'];
    $_SESSION['email'] = $row1['email'];
    $response = array("success" => true, "message" => "welcome! you have done sign up successfully.");
    echo json_encode($response);
    mysqli_close($conn);
}
