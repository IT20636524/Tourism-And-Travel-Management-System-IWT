<html>
    <head>
        <meta charset="UTF-8">
        <title>Log In</title>
    </head>
    <div align="center">
    <?php
    if(isset($_GET['msg'])){
    ?>
        <p style='color: red'><?php echo $_GET['msg'];?></p> 
    <?php
        }
    ?>    
    <h1>Log In</h1>
    <br>
    <form method="post" action="LoginAction.php">
    <table border="0">
    <tr> 
        <td>Username : </td> 
        <td><input type="text" name="username" value=""></td>
    </tr>  
    <tr> 
        <td>Password : </td> 
        <td><input type="password" name="password" value=""></td>
    </tr>
    <tr> 
        <td></td> 
        <td><input type="submit" value="Log In"></td>
    </tr>
    </table>
    </form>    
    </div>
    <body>
    </body>
</html>
