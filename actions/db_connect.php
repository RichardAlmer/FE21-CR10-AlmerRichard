
<?php 
    $hostname = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "CR10_AlmerRichard_BigLibrary";
    $connect = mysqli_connect($hostname, $username, $password, $dbname);

    if($connect->connect_error) {
        die("Connection failed: " . $connect->connect_error);
    // }else {
    //     echo "Successfully Connected";
    }
?>