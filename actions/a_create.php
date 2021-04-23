<?php
    require_once 'db_connect.php';
    if (isset($_POST['submit'])) {  
        if ($_POST['title']&&$_POST['type']&&$_POST['img']&&$_POST['publisher_date']&&$_POST['isbn']&&$_POST['description']&&$_POST['author_first_name']&&$_POST['author_last_name']&&$_POST['publisher_name']&&$_POST['publisher_address']&&$_POST['publisher_size']&&$_POST['status']){
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
            
            $sql = "INSERT INTO media (title, type, img, publisher_date, isbn, description, author_first_name, author_last_name, publisher_name, publisher_address, publisher_size, status) VALUES ('$title', '$type', '$img', '$publisher_date', '$isbn', '$description', '$author_first_name', '$author_last_name', '$publisher_name', '$publisher_address', '$publisher_size', '$status')";

            if ($connect->query($sql) === true){
                $class = "success";
                $message = "The entry below was successfully created<br>
                        <table class='table'>
                            <tr>
                                <td><img src='$img' width='100px'> </td>
                                <td> $title </td>
                                <td> $type </td>
                                <td> $publisher_date </td>
                                <td> $isbn </td>
                                <td> $description </td>
                                <td> $author_first_name $author_last_name </td>
                                <td> $publisher_name, $publisher_address ,$publisher_size</td>
                            </tr>
                        </table><hr>";
            } else {
                $class = "danger";
                $message = "Error while creating record. Try again: " . $connect->error;
            }
            $connect->close();
        }else{
            $message = "Please fill in all fields.";
        }
    }else{
        header("location: ../error.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?>
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
            <div class="mt-3 mb-3" >
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <a href='../index.php'><button class="btn btn-warning" type='button'>Home</button></a>
                <a href='../create.php'><button class="btn btn-primary" type='button'>Back</button></a>
            </div>
        </div>
    </div>
    <?php include '../footer.php' ?>
    </body>
</html>