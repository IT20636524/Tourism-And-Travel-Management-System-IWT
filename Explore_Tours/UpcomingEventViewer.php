<?php
include 'dbconnection.php';
$query = "select * from events";
$result = $conn->query($query);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Event Manager</title>
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

                            <form method="post" action="updateuea.php">
                            <tr>
                                
                                <td><?php echo $row['id']; ?></td>
                                <td><input type="text" name="Name" value="<?php echo $row['Name']; ?>" ></td>
                                <td><img src="<?php echo $row['image']; ?>" width="70"  height="70"></td>
                                <td><input type="text" name="description" value="<?php echo $row['description']; ?>" ></td>
                                <td><input type="hidden" name="id" value="<?php echo $row['id'];?>" /> 
                                <input type="submit" value="Update" /></td>
                                <td><a href="deleteuea.php?id=<?php echo $row['id'];?>">Delete</a></td>
                                </form>

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