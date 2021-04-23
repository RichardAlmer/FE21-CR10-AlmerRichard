<?php 
    require_once 'db_connect.php';
    if  ($_POST) {
        $id = $_POST[ 'id'];
        $sql = "DELETE FROM media WHERE id = {$id}";
        if ($connect->query($sql) === TRUE) {
            $class = "success";
            $message = "Successfully Deleted!";
        } else {
            $class = "danger";
            $message = "The entry was not deleted due to: <br>" . $connect->error;
        }
        $connect->close();
    } else {
        header("location: ../error.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
    <?php require_once '../components/boot.php' ?>
    <style>
        body{
                background-color: #F3E8B0;
            }
        #header{
                color: #FFAB00;
                background-image: url('https://www.detroitlabs.com/wp-content/uploads/2018/02/alfons-morales-YLSwjSy7stw-unsplash.jpg');
                height: 200px;
                display: flex;
                justify-content: center;
                align-items: center;
            }
        #hh{
            font-size: 5em;
            text-shadow: 10px 10px 5px black;
        }
        #wrapper{
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <?php include '../header.php' ?>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Delete request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?=$message;?></p >
                <a href ='../index.php'><button class= "btn btn-warning" type='button'>Home</button></a>
            </div>
        </div>
    </div>
    <?php include '../footer.php' ?>
</body>
</html>