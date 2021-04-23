<?php
    require_once 'db_connect.php';
    if ($_POST) {
        $id = $_POST['id'];
        $title = $_POST['title'];
        $type = $_POST['type'];
        $img = $_POST['img'];
        $publisher_date = $_POST['publisher_date'];
        $isbn = $_POST['isbn'];
        $description = $_POST['description'];
        $author_first_name = $_POST['author_first_name']; 
        $author_last_name = $_POST['author_last_name'];
        $publisher_name = $_POST['publisher_name'];
        $publisher_address = $_POST['publisher_address'];
        $publisher_size = $_POST['publisher_size'];
        $status = $_POST['status'];
         
        $sql = "UPDATE media SET title = '$title', type = '$type', img = '$img', publisher_date = '$publisher_date', isbn = '$isbn', description = '$description', author_first_name = '$author_first_name', author_last_name = '$author_last_name', publisher_name = '$publisher_name', publisher_address = '$publisher_address', publisher_size = '$publisher_size', status = '$status' WHERE id = {$id}";
          
        if ($connect->query($sql) === TRUE) {
            $class = "success";
            $message = "The record was successfully updated";
        } else {
            $class = "danger";
            $message = "Error while updating record : <br>" . $connect->error;
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
    <?php require_once '../components/boot.php'?>
    <title>Update</title>
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
                <h1>Update request response</h1>
            </div>
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
    </div>
    <?php include '../footer.php' ?>
</body>
</html>