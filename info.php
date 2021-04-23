<?php
    require_once 'actions/db_connect.php';
    if  ($_GET['id']) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM media WHERE id={$id}";
        $result = $connect->query($sql);
        if ($result->num_rows == 1) {
            $data = $result->fetch_assoc();
            $title = $data['title'];
            $type = $data['type'];
            $img = $data['img'];
            $publisher_date = $data['publisher_date'];
            $isbn = $data['isbn'];
            $description = $data['description'];
            $author_first_name = $data['author_first_name'];
            $author_last_name = $data['author_last_name'];
            $publisher_name = $data['publisher_name'];
            $publisher_address = $data['publisher_address'];
            $publisher_size = $data['publisher_size'];
            $status = $data['status'];
        } else {
            header( "location: error.php");
        }
        $connect->close();
    } else {
        header("location: error.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info</title>
    <?php require_once 'components/boot.php'?>
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
        <?php include 'header.php' ?>
        <?php include 'navbar.php' ?>
        <div class="container">
            <h2>Info</h2>
            <div class="card mb-3" style="max-width: 75vw;">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="<?php echo $img ?>" alt="<?php echo $title ?>" width="350px">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $title ?></h5>
                            <p class="card-text"><b>Type: </b><?php echo $type ?></p>
                            <p class="card-text"><b>ISBN: </b><?php echo $isbn ?></p>
                            <p class="card-text"><b>Publish Date: </b><?php echo $publisher_date ?></p>
                            <p class="card-text"><b>Publisher: </b><?php echo $publisher_name ?>, <?php echo $publisher_address ?>, Size: <?php echo $publisher_size ?></p>
                            <p class="card-text"><b>Author/Director: </b><?php echo $author_first_name ?> <?php echo $author_last_name ?></p>
                            <p class="card-text"><b>Description: </b><?php echo $description ?></p>
                            <p class="card-text"><b>Status: </b><?php echo $status ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <a href="index.php"><button class="btn btn-warning" type ="button">Home</button></a>
        </div>
    </div>
    <?php include 'footer.php' ?>
</body>
</html>