<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require_once 'components/boot.php'?>
    <title>BigLibrary | Add Media</title>
    <style>
        body{
                background-color: #F3E8B0;
            }
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 60%;
        }
        #insertBtn {
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
        .h2{
            text-align: center;
        }
    </style>
</head>
<body>
<?php include 'header.php' ?>
<?php include 'navbar.php' ?>
    <fieldset>
        <legend class='h2'>Add Media</legend>
        <form action="actions/a_create.php"  method="post" enctype="multipart/form-data">
            <table  class='table'>
                <tr>
                    <th>Title</th>
                    <td><input  class ='form-control' type="text"  name="title"  placeholder="Title"/></td>
                </tr>   
                <tr>
                    <th>Type</th>
                    <td>
                        <select name="type" class="form-select" aria-label="Default select example">
                            <option selected>Select the Type</option>
                            <option value="Book">Book</option>
                            <option value="CD">CD</option>
                            <option value="DVD">DVD</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Picture</th>
                    <td><input class='form-control' type="text"  name="img" placeholder="Picture-URL"/></td>
                </tr>
                <tr>
                    <th>Publishing Date</th>
                    <td><input class='form-control' type="text"  name="publisher_date" placeholder="Year e.g.: 1990"/></td>
                </tr>
                <tr>
                    <th>ISBN-Code</th>
                    <td><input class='form-control' type="text"  name="isbn" placeholder="ISBN-Code"/></td>
                </tr>
                <tr>
                    <th>Short Description</th>
                    <td><input class='form-control' type="text"  name="description" placeholder="Description"/></td>
                </tr>
                <tr>
                    <th>Author/Director</th>
                    <td><input class='form-control' type="text"  name="author_first_name" placeholder="First-Name"/><br>
                    <input class='form-control' type="text"  name="author_last_name" placeholder="Last-Name"/></td>
                </tr>
                <tr>
                    <th>Publisher</th>
                    <td><input class='form-control' type="text"  name="publisher_name" placeholder="Name"/><br>
                        <input class='form-control' type="text"  name="publisher_address" placeholder="Address"/><br>
                        <select name="publisher_size" class="form-select" aria-label="Default select example">
                            <option selected>Select the Size</option>
                            <option value="big">Big</option>
                            <option value="medium">Medium</option>
                            <option value="small">Small</option>
                        </select>
                    </td>
                </tr>
                <tr class="lastTr">
                    <th>Status</th>
                    <td><select name="status" class="form-select" aria-label="Default select example">
                            <option selected>Reserve</option>
                            <option value="Available">Available</option>
                            <option value="Reserved">Reserved</option>
                        </select>
                    </td>
                </tr>      
                <tr class="lastTr">
                    <td></td>
                    <td><button id="insertBtn" class ='btn btn-success' name="submit" type="submit">Insert Media</button><a href="index.php" ><button class= 'btn btn-warning' type= "button">Home</button></a></td>
                </tr>
            </table>
        </form>
    </fieldset>
    <?php include 'footer.php' ?>
</body>
</html>