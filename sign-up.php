<?php
    session_start();

    $username = "";
    $email = "";
    $nickname = "";
    $errors = array();

    $conn = mysqli_connect('127.0.0.1', 'root', 'mirim2', 'hauso');
    $data_stream = "'".$_POST['username']."', '".$_POST['password']."', '".$_POST['name']."', '".$_POST['nick']."', '".$_POST['email']."'";
    
    $query = "insert into member(username, password, name, nick, email) values(".$data_stream.")";
    $result = mysqli_query($conn, $query);

    if($result)
        echo "<script> location.href = 'welcome.html' </script>";
    else
        echo "-1";

    mysqli_close($conn);
?>