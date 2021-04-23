<?php 
    require_once 'actions/db_connect.php';
    if ($_GET['id']) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM media WHERE id = {$id}" ;
        $result = $connect->query($sql);
        $data = $result->fetch_assoc();
        if ($result->num_rows == 1) {
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
            header("location: error.php");
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
    <title>Delete Media</title>
    <?php require_once 'components/boot.php' ?>
    <style type= "text/css">
        body{
                background-color: #F3E8B0;
            }
        fieldset {
            margin: auto;
            margin: 100px 100px;
            width: 70% ;
        }    
        .img-thumbnail{
            width: 70px !important;
            height: 70px !important;
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
        <fieldset>
            <legend class='h2 mb-3'> Delete request <img class='img-thumbnail rounded-circle' src='<?php echo $img ?>' alt="<?php echo $title ?>"></legend>
            <h5>You have selected the data below: </h5>
            <table class="table w-75 mt-3">
                <tr>
                    <td><?php echo $title?></td>
                </tr>
            </table>
            <h3 class="mb-4">Do you really want to delete this product?</h3>
            <form action="actions/a_delete.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id ?>"/>
                <input type="hidden" name="img" value="<?php echo $img ?>"/>
                <button class="btn btn-danger" type="submit"> Yes, delete it! </button>
                <a href="index.php"><button class="btn btn-warning" type="button"> No, go back! </button></a>
            </form>
        </fieldset>
    </div>
    <?php include 'footer.php' ?>
</body>
</html>