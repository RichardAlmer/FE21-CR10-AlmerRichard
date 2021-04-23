<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Error</title>
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
                <div class="mt-3 mb-3">
                    <h1>Invalid Request</h1>
                </div>
                <div class="alert alert-warning" role="alert">
                    <p>You've made an invalid request. Please <a href="index.php" class="alert-link">go back</a>to index and try again.</p>
                </div>
            </div>
        </div>
        <?php include 'footer.php' ?>
    </body>
</html>