<?php
include 'dbconnection.php';	
$query = "select * from events";
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
                        <th>Name</th>
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
                                
                                <td><input type="text" name="Name" value="<?php echo $row['Name']; ?>"></td>
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