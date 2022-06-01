<?php
include 'dbconnection.php';	
$query = "select * from activities";
$result = $conn->query($query);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Upcoming Events</title>
    </head>
    <body>
        <div align="center">
            <table border="0">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Image</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                
                                <td><input type="text" name="title" value="<?php echo $row['title']; ?>"></td>
                                <td><img src="<?php echo $row['image']; ?>" width="100"  height="70"></td>
                                <td><input type="text" name="description" value="<?php echo $row['description']; ?>" ></td>

                        
                    

        <?php
    }
}
                    
$conn->close();
?>
                    </tbody>
            </table>
        </div>
    </body>
</html>	