<?php 
    require_once 'actions/db_connect.php';
    $sql = "SELECT * FROM media WHERE type = 'Book'";
    $result = mysqli_query($connect ,$sql);
    $tbody='';
    if (mysqli_num_rows($result) > 0){    
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){        
            $tbody .= 
                "<tr>
                    <td><img class='img-thumbnail' src='$row[img]'></td>
                    <td>$row[title]</td>
                    <td><a href='publisher.php?publisher_name=".$row['publisher_name']."'>$row[publisher_name]</a></td>
                    <td>$row[type]</td>
                    <td><a href='info.php?id=".$row['id']."'><button class='btn btn-success btn-sm' type='button'>Show Media</button></a></td>
                    <td><a href='update.php?id=".$row['id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
                    <a href='delete.php?id=".$row['id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
                </tr>";
        };
    } else {
        $tbody =  "<tr><td colspan='6'><center>No Data Available </center></td></tr>";
    }
    $connect->close();
?>

<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"  content="width=device-width, initial-scale=1.0">
        <title>BigLibrary</title>
        <?php require_once 'components/boot.php' ?>
        <style type= "text/css">
            body{
                background-color: #F3E8B0;
            }
            .manageMedia {          
               margin: auto;
            }
            .img-thumbnail {
                width: 70px !important;
                height: 70px !important;
            }
            td {          
                text-align: center;
                vertical-align: middle;

            }
            tr {
                text-align: center;
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
            .h2{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
        <?php include 'header.php' ?>
        <?php include 'navbar.php' ?>
            <div class="manageMedia w-75 mt-3" >   
                <p class='h2'>Books</p>
                <table class='table table-striped'>
                    <thead class='table-success'>
                        <tr>
                            <th>Picture</th>
                            <th>Title</th>
                            <th>Publisher</th>
                            <th>Type</th>
                            <th>Info</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?= $tbody;?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php include 'footer.php' ?>
    </body>
</html>