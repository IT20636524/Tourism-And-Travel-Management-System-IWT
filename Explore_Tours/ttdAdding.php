<html>
    <head>
        <meta charset="UTF-8">
        <title>Things to do Addiing</title>
    </head>
    <body>
        <div align="center">
        <?php
        if(isset($_GET['msg'])){
        ?>
            <p style="color: red"><?php echo $_GET['msg'];?></p>    
        <?php
        }
        ?>
        <h1>Things to do Adding</h1>     
        <br>
        <form method="post" enctype="multipart/form-data" action="ttdaAction.php">
        <table border="0">
        <tr>
        <td>Name : </td>
        <td><input type="text" name="title" value=""></td>
        </tr>    
        <tr>
        <td>Image : </td>
        <td><input type="file" name="image" value=""></td>
        </tr>
        <tr>
        <td>Description : </td>
        <td><input type="text" name="description" value=""></td>
        </tr>
        <td><input type="submit" name="" value="Add"></td>    
        </tr>
        </table>
        </form>  
        <a href="AdminHome.php">Admin</a>
        </div>    
    </body>
</html>