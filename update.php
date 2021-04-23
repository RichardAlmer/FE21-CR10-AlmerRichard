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
    <title>Edit Media</title>
    <?php require_once 'components/boot.php'?>
    <style type= "text/css">
        body{
                background-color: #F3E8B0;
            }
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 60% ;
        }  
        .img-thumbnail {
            width: 70px !important;
            height: 70px !important;
        }
        #changeBtn {
            margin-right: 20px;
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
        tr{
            border-bottom: 2px solid #BDBDBD;
        }
        .lastTr{
            border-bottom: hidden;
        }
    </style>
</head>
<body>
<?php include 'header.php' ?>
<?php include 'navbar.php' ?>
    <fieldset>
        <legend class='h2'> Update request <img class='img-thumbnail rounded-circle' src='<?php echo $img ?>' alt="<?php echo $title ?>"></legend>
        <form action="actions/a_update.php" method="post" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <th>Title</th>
                    <td><input class ="form-control" type="text" name="title" placeholder="Title" value="<?php echo $title ?>"/></ td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td>
                        <select name="type" class="form-select" aria-label="Default select example">
                            <option selected><?php echo $type ?></option>
                            <option value="Book">Book</option>
                            <option value="CD">CD</option>
                            <option value="DVD">DVD</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Picture</th >
                    <td><input class="form-control" type="text" name="img" placeholder="Picture-URL" value="<?php echo $img ?>"/></ td>
                </tr>
                <tr>
                    <th>Publishing Date</th>
                    <td><input class='form-control' type="text"  name="publisher_date" placeholder="Year e.g.: 1990" value="<?php echo $publisher_date ?>"/></td>
                </tr>
                <tr>
                    <th>ISBN-Code</th>
                    <td><input class='form-control' type="text"  name="isbn" placeholder="ISBN-Code" value="<?php echo $isbn ?>"/></td>
                </tr>
                <tr>
                    <th>Short Description</th>
                    <td><input class='form-control' type="text"  name="description" placeholder="Description" value="<?php echo $description ?>"/></td>
                </tr>
                <tr>
                    <th>Author/Director</th>
                    <td><input class='form-control' type="text"  name="author_first_name" placeholder="First-Name" value="<?php echo $author_first_name ?>"/><br>
                    <input class='form-control' type="text"  name="author_last_name" placeholder="Last-Name" value="<?php echo $author_last_name ?>"/></td>
                </tr>
                <tr>
                    <th>Publisher</th>
                    <td><input class='form-control' type="text"  name="publisher_name" placeholder="Name" value="<?php echo $publisher_name ?>"/><br>
                        <input class='form-control' type="text"  name="publisher_address" placeholder="Address" value="<?php echo $publisher_address ?>"/><br>
                        <select name="publisher_size" class="form-select" aria-label="Default select example">
                            <option selected><?php echo $publisher_size ?></option>
                            <option value="big">Big</option>
                            <option value="medium">Medium</option>
                            <option value="small">Small</option>
                        </select>
                    </td>
                </tr>
                <tr class="lastTr">
                    <th>Status</th>
                    <td><select name="status" class="form-select" aria-label="Default select example">
                            <option selected><?php echo $status ?></option>
                            <option value="Available">Available</option>
                            <option value="Reserved">Reserved</option>
                        </select>
                    </td>
                </tr> 
                <tr class="lastTr">
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
                    <input type="hidden" name= "img" value= "<?php echo $data['img'] ?>" />
                    <td></td>
                    <td><button id="changeBtn" class="btn btn-success" type="submit">Save Changes</button><a href="index.php"><button class="btn btn-warning" type ="button">Home</button></a></td>
                </tr>
            </table>
        </form>
    </fieldset>
    <?php include 'footer.php' ?>
</body>
</html>