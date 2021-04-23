<?php 
    require_once 'actions/db_connect.php';
    $sql = "SELECT DISTINCT publisher_name FROM media";
    $result = mysqli_query($connect ,$sql);
    $tbody='';
    if (mysqli_num_rows($result) > 0){    
        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){        
            $tbody .= 
                "<li><a href='publisher.php?publisher_name=".$row['publisher_name']."'>$row[publisher_name]</a></li>";
        };
    } else {
        $tbody = "<p>No Data Available</p>";
    }
    $connect->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publisher</title>
    <?php require_once 'components/boot.php' ?>
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
        .h2{
            text-align: center;
            margin: 50px 0 20px 0;
        }
        ul{
            text-align: center;
            list-style-type: none;
            padding: 0;
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <?php include 'header.php' ?>
        <?php include 'navbar.php' ?>
        <div id="list">   
            <p class='h2'>All Publisher</p>
            <ul>
                <?= $tbody;?>
            </ul>
        </div>   
    </div>
    <?php include 'footer.php' ?>
</body>
</html>