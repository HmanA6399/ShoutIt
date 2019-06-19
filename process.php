<?php include 'database.php';?>
<?php
if (isset($_POST['submit'])) {
    $user = mysqli_real_escape_string($conn, $_POST['user']);
    $msg = mysqli_real_escape_string($conn, $_POST['msg']);

    //Set time
    date_default_timezone_set('Africa/Cairo');
    $time = date('h:i:s a', time());

    //Validate input
    if (!isset($user) || $user == "" || !isset($msg) || $msg == "") {
        $error = "Please Enter valid username and message";
        header("Location: index.php?error=".urlencode($error));
    } else {
        $query = "INSERT INTO shouts (user, message, time) VALUES ('$user', '$msg', '$time')";

        if (!mysqli_query($conn, $query)) {
            die("Error: ". mysqli_error($conn));
        } else {
            header("Location: index.php");
            exit();
        }
    }

}